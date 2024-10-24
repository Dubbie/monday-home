<script setup>
import { computed } from 'vue';

const props = defineProps({
    color: {
        type: String,
        default: 'red',
    },
});

const alertClasses = computed(() => {
    return {
        red: 'border-red-500 bg-red-200 text-red-600',
        blue: 'border-blue-500 bg-blue-200 text-blue-600',
    }[props.color];
});
</script>

<template>
    <div class="border-l-2 p-6" :class="alertClasses">
        <slot />
    </div>
</template>
