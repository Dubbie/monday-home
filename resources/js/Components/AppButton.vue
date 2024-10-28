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
    disabled: {
        type: Boolean,
        default: false,
    },
    disabledLabel: {
        type: String,
        default: 'Processing...',
    },
});

// Define class mappings for different variants and colors
const classMap = {
    ghost: {
        default: 'bg-transparent text-black font-medium hover:bg-black/5',
        blue: 'bg-transparent text-blue-500 font-medium hover:bg-blue-500/10',
        green: 'bg-transparent text-green-500 font-medium hover:bg-green-500/10',
        white: 'bg-transparent text-white font-medium hover:bg-white/10',
    },
    primary: {
        default: 'bg-zinc-800 text-white font-semibold hover:bg-zinc-900',
        blue: 'bg-blue-500 text-white font-semibold hover:bg-blue-400',
        green: 'bg-monday text-white font-semibold hover:bg-green-700',
        white: 'bg-white text-zinc-800 font-semibold hover:bg-zinc-100',
    },
    primaryInverse: {
        indigo: 'bg-white text-indigo-600 font-semibold hover:outline hover:outline-white/20 hover:text-indigo-500',
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
        :class="[
            {
                'pointer-events-none opacity-50': disabled,
            },
            colorClasses,
            sizeClasses,
        ]"
        :type="type"
    >
        <template v-if="!disabled">
            <slot />
        </template>
        <template v-else>
            <span>{{ disabledLabel }}</span>
        </template>
    </component>
</template>
