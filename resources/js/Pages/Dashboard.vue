<script setup>
// Import utils
import { Head } from "@inertiajs/vue3";

// Import Components
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import DateTimeHeader from "@/Components/DateTimeHeader.vue";
import ReceivedItem from "@/Components/ReceivedItem.vue";
import SentItem from "@/Components/SentItem.vue";
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <div
            class="container mx-auto space-y-6 px-4 py-24 lg:p-8 lg:pb-28 xl:max-w-7xl"
        >
            <!-- Datetime Header -->
            <date-time-header />
            <!-- END Datetime Header -->

            <!-- Messages Received -->
            <received-item />
            <!-- END  Messages Received -->

            <!-- Messages Sent -->
            <sent-item />
            <!-- END Messages Sent -->
        </div>
        <template #footer>
            <!-- Page Footer -->
            <footer
                id="page-footer"
                class="fixed bottom-0 left-0 right-0 items-center border-t border-slate-200/75 bg-white lg:left-80"
            >
                <form
                    class="container mx-auto flex h-20 items-center space-x-2 px-4 lg:px-8 xl:max-w-7xl"
                    onsubmit="return false;"
                >
                    <input
                        type="text"
                        class="-mx-5 block w-full rounded-lg border-0 px-5 py-4 leading-6 focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-75"
                        placeholder="Type a new message and hit enter.."
                    />
                </form>
            </footer>
            <!-- END Page Footer -->
        </template>
    </AuthenticatedLayout>
</template>
