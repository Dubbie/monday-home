<script setup>
import { ref } from 'vue';
import CarouselEntry from './CarouselEntry.vue';

const currentStep = ref(0);

const carouselEntries = [
    {
        imageUrl: '/img/1.jpg',
        title: 'Szolgáltatások',
        link: route('services')
    },
    {
        imageUrl: '/img/2.jpg',
        title: 'Megbízom a Monday-t',
        link: route('contract')
    },
    {
        imageUrl: '/img/3.jpg',
        title: 'Elérhetőségek',
        link: route('contact-us')
    },
    {

        imageUrl: '/img/4.jpg',
        title: 'Cégbiztosítás',
        link: route('contact-us')
    },
    {

        imageUrl: '/img/5.jpg',
        title: 'Társasház biztosítás',
        link: route('contact-us')
    },
    {

        imageUrl: '/img/6.jpg',
        title: 'Mezőgazdasági Biztosítások',
        link: route('contact-us')
    }
];

const goTo = (index) => {
    currentStep.value = index;
}
</script>

<template>
    <div class="relative overflow-hidden">
        <div class="relative flex flex-nowrap min-h-[240px] transition-all duration-700" :style="{
            transform: `translateX(-${currentStep * 100}%)`
        }">
            <CarouselEntry v-for="(entry, index) in carouselEntries" :key="index" :image-url="entry.imageUrl"
                :title="entry.title" :link="entry.link" />
        </div>

        <div class="absolute bottom-2 left-1/2 -translate-x-1/2 flex space-x-2">
            <div v-for="(entry, index) in carouselEntries" :key="index"
                class="cursor-pointer size-3 rounded-full backdrop-blur" :class="{
                    'bg-black': index === currentStep,
                    'bg-black/50': index !== currentStep,
                }" @click="goTo(index)"></div>
        </div>
    </div>
</template>
