<script setup>
import AppFooter from '@/Components/AppFooter.vue';
import AppHeader from '@/Components/AppHeader.vue';
import StockTransferBanner from '@/Components/StockTransferBanner.vue';
import LocaleSwitcher from '@/Components/LocaleSwitcher.vue';
import TransferNotice from '@/Components/TransferNotice.vue';
import SupportPopup from '@/Components/SupportPopup.vue';
import { Head } from '@inertiajs/vue3';
import GoToTopButton from '@/Components/GoToTopButton.vue';
import { computed } from 'vue';
import { useTrans } from '@/composables/trans';

const props = defineProps({
    title: String,
    hideAlert: {
        type: Boolean,
        default: false,
    },
});

const fullTitle = computed(() => {
    const suffix = useTrans('title');

    if (props.title) {
        return `${props.title} - ${suffix}`;
    }

    return suffix;
});
</script>

<template>
    <Head :title="fullTitle" />

    <StockTransferBanner v-if="!hideAlert" />
    <LocaleSwitcher />
    <SupportPopup />
    <GoToTopButton />

    <div class="flex min-h-svh flex-col">
        <AppHeader />

        <div class="py-6 lg:py-8">
            <!-- Stock Transfer Notice -->
            <TransferNotice />

            <slot />
        </div>

        <AppFooter class="flex-grow" />
    </div>
</template>
