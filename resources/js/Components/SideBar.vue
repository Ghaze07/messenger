<template>
    <!-- Page Sidebar -->
    <nav
        class="fixed bottom-0 left-0 top-0 z-50 flex h-full w-80 transform flex-col overflow-auto bg-slate-200 transition-transform duration-500 ease-out lg:translate-x-0 lg:shadow-none"
        aria-label="Main Sidebar Navigation"
    >
        <!-- Sidebar Header -->
        <div
            class="flex h-20 w-full flex-none items-center justify-between pl-8 pr-2"
        >
            <!-- Brand -->
            <Link
                :href="route('dashboard')"
                class="group inline-flex items-center space-x-2 text-lg font-bold tracking-wide text-slate-800 transition hover:opacity-75 active:opacity-100 lg:justify-center"
            >
                <svg
                    class="hi-mini hi-chat-bubble-left-right inline-block h-5 w-5 text-indigo-500 transition ease-out group-hover:-rotate-6"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        d="M3.505 2.365A41.369 41.369 0 019 2c1.863 0 3.697.124 5.495.365 1.247.167 2.18 1.108 2.435 2.268a4.45 4.45 0 00-.577-.069 43.141 43.141 0 00-4.706 0C9.229 4.696 7.5 6.727 7.5 8.998v2.24c0 1.413.67 2.735 1.76 3.562l-2.98 2.98A.75.75 0 015 17.25v-3.443c-.501-.048-1-.106-1.495-.172C2.033 13.438 1 12.162 1 10.72V5.28c0-1.441 1.033-2.717 2.505-2.914z"
                    />
                    <path
                        d="M14 6c-.762 0-1.52.02-2.271.062C10.157 6.148 9 7.472 9 8.998v2.24c0 1.519 1.147 2.839 2.71 2.935.214.013.428.024.642.034.2.009.385.09.518.224l2.35 2.35a.75.75 0 001.28-.531v-2.07c1.453-.195 2.5-1.463 2.5-2.915V8.998c0-1.526-1.157-2.85-2.729-2.936A41.645 41.645 0 0014 6z"
                    />
                </svg>
                <span
                    >Tail<span class="font-medium text-indigo-600"
                        >Chat</span
                    ></span
                >
            </Link>
            <!-- END Brand -->
        </div>
        <!-- Main Navigation -->
        <div class="grow space-y-2 pl-4 pt-2">
            <template
                v-for="recipient in currentRecipients"
                :key="recipient.id"
            >
                <menu-item :item="recipient"/>
            </template>
        </div>
        <!-- End Main Navigation -->

        <!-- Sub Navigation -->
        <div class="flex-none space-y-2 px-4 pb-2">
            <a
                href="javascript:void(0)"
                class="flex items-center space-x-3 rounded border-l-4 border-transparent px-3 py-4 hover:border-indigo-300 hover:bg-white/50 active:border-indigo-500 active:bg-white active:shadow-sm"
            >
                <div class="relative flex-none">
                    <img
                        src="https://images.unsplash.com/photo-1528892952291-009c663ce843?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2ODc1OTQ0OQ&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                        alt="User Avatar"
                        class="h-11 w-11 rounded-full border-2 border-white/50"
                    />
                </div>
                <div class="grow">
                    <p class="mb-0.5 line-clamp-1 text-sm font-bold">
                        My Account
                    </p>
                    <p class="line-clamp-1 text-xs font-medium text-slate-500">
                        @john.doe
                    </p>
                </div>
            </a>
        </div>
        <!-- END Sub Navigation -->
    </nav>
    <!-- End Page Sidebar -->
</template>
<script setup>
// Import utils
import { storeToRefs } from "pinia";
import { Link } from '@inertiajs/vue3';

// Import Store
import { useRecipientStore } from "@/store/useRecipientStore";

// Import Components
import MenuItem from "@/Components/MenuItem.vue";

/**--------------Recipients-----------------*/
const recipientStore = useRecipientStore();
const { currentRecipients } = storeToRefs(recipientStore);
</script>
