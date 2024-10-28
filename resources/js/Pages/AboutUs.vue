<script setup>
import AppContainer from '@/Components/AppContainer.vue';
import MondayCarousel from '@/Components/MondayCarousel.vue';
import { useTrans } from '@/composables/trans';
import AppLayout from '@/Layouts/AppLayout.vue';

const titleClasses = 'text-xl font-bold mb-2';
const pClasses = 'text-zinc-500 text-justify';

const meta = {
    description: useTrans('about_us.description'),
    keywords: useTrans('about_us.keywords'),
};

const sections = [
    {
        title: useTrans('about_us.introduction.title'),
        description: useTrans('about_us.introduction.description'),
        delay: 200,
    },
    {
        title: useTrans('about_us.mission.title'),
        description: useTrans('about_us.mission.description'),
        delay: 300,
    },
    {
        title: useTrans('about_us.contribution.title'),
        description: useTrans('about_us.contribution.description'),
        delay: 400,
    },
];
</script>

<template>
    <AppLayout :title="useTrans('header.about_us')" :meta-data="meta">
        <AppContainer>
            <!-- Carousel here -->
            <MondayCarousel
                class="mb-8"
                v-motion
                :initial="{ opacity: 0 }"
                :enter="{ opacity: 1 }"
            />

            <div
                class="grid gap-y-6 pb-24 md:grid-cols-3 md:gap-x-12 md:gap-y-0"
            >
                <div
                    v-for="(section, index) of sections"
                    :key="index"
                    v-motion
                    :initial="{ opacity: 0, y: 10 }"
                    :enter="{ opacity: 1, y: 0 }"
                    :delay="section.delay"
                >
                    <h2 :class="titleClasses">
                        {{ section.title }}
                    </h2>
                    <div class="mb-2 h-1 w-1/4 bg-monday"></div>
                    <p :class="pClasses">
                        {{ section.description }}
                    </p>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
