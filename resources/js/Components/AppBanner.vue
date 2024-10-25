<script setup>
import { computed } from 'vue';
import AppContainer from '@/Components/AppContainer.vue';

const props = defineProps({
    color: {
        type: String,
        default: 'red',
    },
});

const alertClasses = computed(() => {
    return {
        red: 'bg-red-200 text-red-600',
        indigo: 'bg-indigo-600 text-white',
    }[props.color];
});
</script>

<template>
    <div class="py-3" :class="alertClasses">
        <AppContainer>
            <slot />
        </AppContainer>
    </div>
</template>
