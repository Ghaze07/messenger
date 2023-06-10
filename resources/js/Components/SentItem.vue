<template>
    <div
        class="ml-auto flex w-5/6 flex-col items-end space-y-2 lg:w-2/3 xl:w-1/3"
    >
        <p
            class="rounded-xl bg-indigo-600 px-4 py-2 font-medium text-indigo-50"
        >
            {{ item.content }}
        </p>
    </div>
</template>
<script setup>
defineProps({
    item: {
        type: Object,
        required: true,
    },
});
</script>
