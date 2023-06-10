<template>
    <Link
        :href="route('user.messages.show', item.id)"
        :class="itemClass"
    >
        <div class="relative flex-none">
            <img
                src="https://images.unsplash.com/photo-1567186937675-a5131c8a89ea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MXwxfDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                alt="User Avatar"
                class="h-11 w-11 rounded-full border-2 border-white/50"
            />
            <span
                class="absolute bottom-0 right-0 h-3 w-3 rounded-full border-2 border-white bg-emerald-500 shadow-sm"
            ></span>
        </div>
        <div class="grow">
            <p class="mb-0.5 line-clamp-1 text-sm font-bold">{{ item.name }}</p>
            <p class="line-clamp-1 text-xs font-medium text-slate-500">
                {{ item.email }}
            </p>
        </div>
        <div class="flex-none self-start">
            <p class="text-xs font-medium text-slate-400">Now</p>
        </div>
    </Link>
</template>
<script setup>
import { Link } from '@inertiajs/vue3';
import { storeToRefs } from "pinia";
import { computed } from 'vue';
import { isNil } from "lodash"

// Import Store
import { useRecipientStore } from "@/store/useRecipientStore";

const props = defineProps({
    item: {
        type: Object,
        required: true,
    },
});

/**--------------Recipients-----------------*/
const recipientStore = useRecipientStore();
const { activeRecipient } = storeToRefs(recipientStore);

const itemClass = computed(() => {
  if (!isNil(activeRecipient.value) && props.item.id === activeRecipient.value.id) {
    return 'flex items-center space-x-3 rounded-l border-l-4 border-indigo-500 bg-white px-3 py-4 shadow-sm'
  }

  return 'flex items-center space-x-3 rounded-l border-l-4 border-transparent px-3 py-4 hover:border-indigo-300 hover:bg-white/50 active:border-indigo-500 active:bg-white active:shadow-sm'
})
</script>
