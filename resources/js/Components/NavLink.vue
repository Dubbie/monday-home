<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href: {
        type: String,
        required: true,
    },
    active: {
        type: Boolean,
    },
});
</script>

<template>
    <Link
        :href="href"
        class="rounded-lg px-2 py-1.5 font-semibold"
        :class="{
            'text-monday': active,
            'text-zinc-800 hover:bg-zinc-100': !active,
        }"
    >
        <slot />
    </Link>
</template>
