<script setup>

import { computed } from 'vue';
const props = defineProps({
    variant: {
        type: String,
        default: "default"
    }
})

const colorClasses = computed(() => {
    return {
        'default': 'bg-white ring-1 ring-black/10',
        'primary': 'bg-zinc-800 text-white font-semibold hover:bg-zinc-900',
        'ghost': 'bg-transparent text-black font-medium hover:bg-black/5'
    }[props.variant]
});
</script>

<template>
    <button class="px-4 h-10 text-sm rounded-md" :class="[colorClasses]">
        <slot />
    </button>
</template>
