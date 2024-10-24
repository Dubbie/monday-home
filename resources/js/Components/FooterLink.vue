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
    }
})
</script>

<template>
    <a :href="href" class="flex gap-x-1 items-center text-white/70 hover:text-white">
        <component :is="icon" class="size-4 text-white" />
        <span>{{ label }}</span>
    </a>
</template>
