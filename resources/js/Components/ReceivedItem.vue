<template>
    <div class="flex w-5/6 flex-col items-start space-y-2 lg:w-2/3 xl:w-1/3">
        <p
            class="relative rounded-xl bg-indigo-50 px-4 py-2 font-medium text-indigo-900"
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
