<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    label: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
        default: false,
    },
    href: {
        type: String,
        required: false,
    },
});
</script>

<template>
    <component
        :is="href ? Link : 'button'"
        :href="href"
        class="inline-flex w-full items-center justify-center whitespace-nowrap border px-3 py-2"
        :class="{
            'border-zinc-200 border-b-white': active,
            'border-transparent text-monday hover:border-b-zinc-200 hover:bg-zinc-50':
                !active,
        }"
    >
        {{ label }}
    </component>
</template>
