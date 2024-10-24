<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
const props = defineProps({
    variant: {
        type: String,
        default: 'default',
    },
    href: {
        type: String,
        required: false,
    },
    type: {
        type: String,
        default: 'button',
    },
});

const colorClasses = computed(() => {
    return {
        default: 'bg-white ring-1 ring-black/10 hover:bg-zinc-50',
        primary: 'bg-zinc-800 text-white font-semibold hover:bg-zinc-900',
        green: 'bg-green-500 text-white font-semibold hover:bg-green-400',
        ghost: 'bg-transparent text-black font-medium hover:bg-black/5',
    }[props.variant];
});
</script>

<template>
    <component
        :is="href ? Link : 'button'"
        :href="href"
        class="inline-flex h-10 items-center justify-center gap-x-2 rounded-md px-4 text-sm"
        :class="[colorClasses]"
        :type="type"
    >
        <slot />
    </component>
</template>
