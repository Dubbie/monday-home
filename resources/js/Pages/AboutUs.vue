<script setup>
import AppContainer from '@/Components/AppContainer.vue';
import MondayCarousel from '@/Components/MondayCarousel.vue';
import { useTrans } from '@/composables/trans';
import AppLayout from '@/Layouts/AppLayout.vue';

const titleClasses = 'text-xl font-bold mb-2';
const pClasses = 'text-zinc-500';
</script>

<template>
    <AppLayout :title="useTrans('header.about_us')">
        <AppContainer>
            <!-- Carousel here -->
            <MondayCarousel class="mb-8" />

            <div class="grid gap-y-6 md:grid-cols-3 md:gap-x-12 md:gap-y-0">
                <div>
                    <h2 :class="titleClasses">
                        {{ useTrans('about_us.introduction.title') }}
                    </h2>
                    <p :class="pClasses">
                        {{ useTrans('about_us.introduction.description') }}
                    </p>
                </div>

                <div>
                    <h2 :class="titleClasses">
                        {{ useTrans('about_us.mission.title') }}
                    </h2>
                    <p :class="pClasses">
                        {{ useTrans('about_us.mission.description') }}
                    </p>
                </div>

                <div>
                    <h2 :class="titleClasses">
                        {{ useTrans('about_us.contribution.title') }}
                    </h2>
                    <p :class="pClasses">
                        {{ useTrans('about_us.contribution.description') }}
                    </p>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
