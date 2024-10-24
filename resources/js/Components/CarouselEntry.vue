<script setup>
import { useTrans } from '@/composables/trans';
import AppButton from './AppButton.vue';
import { ArrowRightIcon } from '@heroicons/vue/16/solid';

defineProps({
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
        required: true,
    },
});
</script>

<template>
    <div class="relative w-full flex-shrink-0">
        <img :src="imageUrl" alt="" class="h-full w-full object-cover" />

        <div
            class="absolute bottom-10 right-0 bg-black/60 p-8 text-white backdrop-blur"
        >
            <p class="mb-4 text-2xl font-medium">{{ title }}</p>

            <AppButton variant="primary" color="green" :href="link">
                <span>{{ useTrans('ui.learn_more') }}</span>
                <ArrowRightIcon class="size-4" />
            </AppButton>
        </div>
    </div>
</template>
