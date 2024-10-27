<script setup>
import AppButton from '@/Components/AppButton.vue';
import AppContainer from '@/Components/AppContainer.vue';
import { useTrans } from '@/composables/trans';
import AppLayout from '@/Layouts/AppLayout.vue';
import { ArrowLeftIcon } from '@heroicons/vue/16/solid';
import { MagnifyingGlassIcon } from '@heroicons/vue/24/outline';

const goBack = () => {
    window.history.back();
};
</script>

<template>
    <AppLayout>
        <AppContainer>
            <div class="flex flex-col items-center">
                <div class="mb-6 rounded-lg bg-white p-2 ring-1 ring-zinc-300">
                    <MagnifyingGlassIcon class="size-6 text-zinc-500" />
                </div>

                <h1
                    class="mb-5 text-center text-2xl font-semibold tracking-tight md:text-4xl"
                >
                    {{ useTrans('error.404.title') }}
                </h1>
                <div class="text-center text-sm text-zinc-600">
                    <p>{{ useTrans('error.404.subtitle') }}</p>
                    <p>{{ useTrans('error.404.links') }}</p>
                </div>

                <div
                    class="mt-6 flex flex-col-reverse gap-y-2 md:flex-row md:justify-center md:gap-x-2 md:gap-y-0"
                >
                    <AppButton @click="goBack">
                        <ArrowLeftIcon class="size-4" />
                        <span>{{ useTrans('ui.back') }}</span>
                    </AppButton>

                    <AppButton variant="primary" :href="route('about-us')">{{
                        useTrans('ui.home')
                    }}</AppButton>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
