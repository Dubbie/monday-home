<script setup>
import { useTrans } from '@/composables/trans';
import AppBanner from './AppBanner.vue';
import AppButton from './AppButton.vue';
import { MegaphoneIcon } from '@heroicons/vue/16/solid';
</script>

<template>
    <AppBanner color="indigo">
        <div
            class="flex flex-col items-start justify-between gap-y-3 md:flex-row md:items-center"
        >
            <div class="flex items-center gap-x-4">
                <div class="rounded-lg bg-white/20 p-2">
                    <MegaphoneIcon class="size-4 text-white" />
                </div>

                <p class="text-sm">
                    <span class="mr-2 block font-bold md:inline-block">{{
                        useTrans('alert.title')
                    }}</span>
                    <span
                        class="block font-medium text-white/70 md:inline-block"
                        >{{ useTrans('alert.description') }}</span
                    >
                </p>
            </div>

            <AppButton
                size="sm"
                color="indigo"
                variant="primaryInverse"
                class="w-full md:w-auto"
                :href="route('transfer')"
                >{{ useTrans('ui.learn_more') }}</AppButton
            >
        </div>
    </AppBanner>
</template>
