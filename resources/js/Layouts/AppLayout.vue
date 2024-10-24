<script setup>
import AppFooter from '@/Components/AppFooter.vue';
import AppHeader from '@/Components/AppHeader.vue';
import AppButton from '@/Components/AppButton.vue';
import AppBanner from '@/Components/AppBanner.vue';
import LocaleSwitcher from '@/Components/LocaleSwitcher.vue';
import TransferNotice from '@/Components/TransferNotice.vue';
import { Head } from '@inertiajs/vue3';
import { useTrans } from '@/composables/trans.js';

defineProps({
    title: {
        type: String,
        default: 'Biztosítás és Hitel',
    },
    hideAlert: {
        type: Boolean,
        default: false,
    },
});
</script>

<template>
    <Head :title="title" />

    <!-- Alert -->
    <AppBanner color="blue" v-if="!hideAlert">
        <div class="flex items-center justify-between">
            <p class="text-sm font-semibold">{{ useTrans('alert') }}</p>

            <AppButton
                size="sm"
                color="white"
                variant="primary"
                :href="route('transfer')"
                >{{ useTrans('ui.learn_more') }}</AppButton
            >
        </div>
    </AppBanner>

    <div class="flex min-h-svh flex-col">
        <AppHeader />
        <LocaleSwitcher />

        <div class="py-6 lg:py-8">
            <!-- Stock Transfer Notice -->
            <TransferNotice />

            <slot />
        </div>

        <AppFooter class="flex-grow" />
    </div>
</template>
