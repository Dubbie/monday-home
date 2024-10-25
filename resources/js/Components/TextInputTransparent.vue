<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

const input = ref(null);

onMounted(() => {
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});

defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <input
        class="rounded-md border-none bg-white/15 px-2.5 py-1.5 text-white ring-1 ring-white/30 hover:ring-white/60 focus:bg-white/10 focus:ring-white"
        v-model="model"
        ref="input"
    />
</template>
