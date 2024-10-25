<script setup>
import { computed } from 'vue';

const props = defineProps({
    value: {
        type: String,
    },
    color: {
        type: String,
        default: "dark"
    }
});

const colorClass = computed(() => {
    return {
        'white': 'text-white',
        'dark': 'text-zinc-700'
    }[props.color];
});
</script>

<template>
    <label class="block text-sm font-medium mb-2" :class="colorClass">
        <span v-if="value">{{ value }}</span>
        <span v-else>
            <slot />
        </span>
    </label>
</template>
