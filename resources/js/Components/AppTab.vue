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
    <component :is="href ? Link : 'button'" :href="href"
        class="inline-flex w-full items-center justify-center whitespace-nowrap font-semibold border-b-2 p-2 -mb-px"
        :class="{
            'border-black text-black': active,
            'border-transparent text-zinc-500 hover:text-black':
                !active,
        }">
        {{ label }}
    </component>
</template>
