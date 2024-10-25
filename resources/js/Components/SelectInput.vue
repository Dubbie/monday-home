<script setup>
import { onMounted, ref } from 'vue';

const model = defineModel({
    type: String,
    required: true,
});

defineProps({
    options: {
        type: Array,
        required: true,
    },
});

const selectRef = ref(null);

onMounted(() => {
    if (selectRef.value.hasAttribute('autofocus')) {
        selectRef.value.focus();
    }
});

defineExpose({ focus: () => selectRef.value.focus() });
</script>

<template>
    <select
        class="appearance-none rounded-md border-none bg-white/15 px-2.5 py-1.5 text-white ring-1 ring-white/30 hover:ring-white/60 focus:bg-white/10 focus:ring-white"
        v-model="model"
        ref="selectRef"
    >
        <option v-for="option in options" :key="option" :value="option">
            {{ option }}
        </option>
    </select>
</template>
