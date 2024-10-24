<script setup>
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';
const props = defineProps({
    color: {
        type: String,
        default: 'default',
    },
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
    size: {
        type: String,
        default: 'md',
    },
});

// Define class mappings for different variants and colors
const classMap = {
    ghost: {
        default: 'bg-transparent text-black font-medium hover:bg-black/5',
        blue: 'bg-transparent text-blue-500 font-medium hover:bg-blue-500/10',
        green: 'bg-transparent text-green-500 font-medium hover:bg-green-500/10',
    },
    primary: {
        default: 'bg-zinc-800 text-white font-semibold hover:bg-zinc-900',
        blue: 'bg-blue-500 text-white font-semibold hover:bg-blue-400',
        green: 'bg-green-500 text-white font-semibold hover:bg-green-400',
        white: 'bg-white text-zinc-800 font-semibold hover:bg-zinc-100',
    },
    default: {
        default:
            'bg-white ring-1 ring-zinc-200 font-medium hover:bg-zinc-100 hover:ring-zinc-300',
        blue: 'bg-transparent ring-1 ring-blue-500 font-medium hover:bg-blue-500 hover:text-white',
        green: 'bg-transparent ring-1 ring-green-500 font-medium hover:bg-green-500 hover:text-white',
    },
};

// Helper function to get class string based on variant and color
const getClass = (variant, color) => {
    return classMap[variant]?.[color] || '';
};

// Computed class based on props
const colorClasses = computed(() => {
    return getClass(props.variant, props.color);
});

const sizeClasses = computed(() => {
    return {
        md: 'px-4 py-2.5',
        sm: 'px-3 py-1.5',
    }[props.size];
});
</script>

<template>
    <component
        :is="href ? Link : 'button'"
        :href="href"
        class="inline-flex items-center justify-center gap-x-2 rounded-md text-sm ring-inset"
        :class="[colorClasses, sizeClasses]"
        :type="type"
    >
        <slot />
    </component>
</template>
