<script setup>

import { useTrans } from '@/composables/trans';
import AppButton from './AppButton.vue';
const props = defineProps({
    imageUrl: {
        type: String,
        required: true,
    },
    title: {
        type: String,
        required: true,
    },
    link: {
        type: String,
        required: true
    }
})
</script>

<template>
    <div class="relative flex-shrink-0 w-full">
        <img :src="imageUrl" alt="" class="object-cover h-full w-full">

        <div class="absolute bottom-10 right-0 bg-black/60 backdrop-blur p-8 text-white">
            <p class="text-2xl font-medium mb-4">{{ title }}</p>

            <AppButton variant="green" :href="link">{{ useTrans('ui.learn_more') }}</AppButton>
        </div>
    </div>
</template>
