<script setup>
defineProps({
    href: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
    icon: {
        type: Function,
        required: true,
    },
});
</script>

<template>
    <a
        :href="href"
        class="flex items-center gap-x-1 text-white hover:underline"
    >
        <component :is="icon" class="size-4 text-white" />
        <span>{{ label }}</span>
    </a>
</template>
