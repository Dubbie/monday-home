<script setup>
defineProps({
    icon: {
        type: Function,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    subtitle: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <div class="flex flex-col items-center">
        <div class="mb-2 rounded-full bg-blue-100 p-2 text-blue-500">
            <component :is="icon" class="size-5" />
        </div>

        <p class="font-semibold">{{ title }}</p>
        <p class="my-2 text-sm text-zinc-500">
            {{ subtitle }}
        </p>

        <div class="text-center text-sm font-semibold text-blue-600">
            <slot name="content" />
        </div>
    </div>
</template>
