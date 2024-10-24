<script setup>
import { ref } from 'vue';
import CarouselEntry from './CarouselEntry.vue';
import { useTrans } from '@/composables/trans';

const currentStep = ref(0);

const carouselEntries = [
    {
        imageUrl: '/img/1.jpg',
        title: useTrans('header.services'),
        link: route('services'),
    },
    {
        imageUrl: '/img/2.jpg',
        title: useTrans('header.appointment'),
        link: route('contract'),
    },
    {
        imageUrl: '/img/3.jpg',
        title: useTrans('header.contact'),
        link: route('contact-us'),
    },
    {
        imageUrl: '/img/4.jpg',
        title: useTrans('header.company_insurance'),
        link: route('company-insurance'),
    },
    {
        imageUrl: '/img/5.jpg',
        title: useTrans('header.condominium_insurance'),
        link: route('contact-us'),
    },
    {
        imageUrl: '/img/6.jpg',
        title: useTrans('header.agricultural_insurance'),
        link: route('contact-us'),
    },
];

const goTo = (index) => {
    currentStep.value = index;
};
</script>

<template>
    <div class="relative overflow-hidden">
        <div
            class="relative flex min-h-[240px] flex-nowrap transition-all duration-700"
            :style="{
                transform: `translateX(-${currentStep * 100}%)`,
            }"
        >
            <CarouselEntry
                v-for="(entry, index) in carouselEntries"
                :key="index"
                :image-url="entry.imageUrl"
                :title="entry.title"
                :link="entry.link"
            />
        </div>

        <div class="absolute bottom-2 left-1/2 flex -translate-x-1/2 space-x-2">
            <div
                v-for="(entry, index) in carouselEntries"
                :key="index"
                class="size-3 cursor-pointer rounded-full backdrop-blur transition-all"
                :class="{
                    'bg-black': index === currentStep,
                    'bg-black/40 hover:bg-monday': index !== currentStep,
                }"
                @click="goTo(index)"
            ></div>
        </div>
    </div>
</template>
