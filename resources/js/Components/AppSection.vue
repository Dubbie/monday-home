<script setup>

import { computed } from 'vue';
const props = defineProps({
    align: {
        type: String,
        default: "left"
    }
})

const alignClasses = computed(() => {
    return {
        'left': 'flex-row',
        'right': 'flex-row-reverse'
    }[props.align]
});
</script>

<template>
    <div class="flex items-center gap-x-12" :class="alignClasses">
        <div class="flex-shrink-0">
            <slot name="image" />
        </div>

        <div class="flex-1">
            <slot name="content" />
        </div>
    </div>
</template>
