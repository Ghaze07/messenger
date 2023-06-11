<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div
            class="container mx-auto space-y-6 px-4 py-24 lg:p-8 lg:pb-28 xl:max-w-7xl"
        >
            <p>please select recipient to start conversation</p>
        </div>
    </AuthenticatedLayout>
</template>
<script setup>
// Import utils
import { Head } from "@inertiajs/vue3";
import { onMounted } from "vue";
import { isNil } from "lodash";

// Import Store
import { useRecipientStore } from "@/store/useRecipientStore";

// Import Components
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

/**--------------Recipients-----------------*/
onMounted(async () => {
    await getRecipients();
    console.log("Component mounted.");
    console.log("echo...", window.Echo);
    window.Echo.channel("channel-ghaze").listen(".socketStatus", (e) => {
        console.log("Hello");
        console.log(e);
    });
});

const recipientStore = useRecipientStore();

async function getRecipients() {
    recipientStore.updateLoadingStatus(true);
    try {
        const { data } = await axios.get("recipients");
        if (!isNil(data?.recipients)) {
            recipientStore.setRecipients(data.recipients);
        }
    } catch (error) {
        alert("there is some error");
    }
    recipientStore.updateLoadingStatus(false);
}
</script>
