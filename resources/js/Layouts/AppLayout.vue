<script setup>
import AppFooter from '@/Components/AppFooter.vue';
import AppHeader from '@/Components/AppHeader.vue';
import AppContainer from '@/Components/AppContainer.vue';
import AppButton from '@/Components/AppButton.vue';
import AppAlert from '@/Components/AppAlert.vue';
import LocaleSwitcher from '@/Components/LocaleSwitcher.vue';
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

    <div class="flex min-h-svh flex-col">
        <AppHeader />
        <LocaleSwitcher />

        <div class="py-6 lg:py-8">
            <!-- Alert -->
            <AppContainer class="mb-6" v-if="!hideAlert">
                <AppAlert color="blue">
                    <div class="flex items-center justify-between">
                        <p>{{ useTrans('alert') }}</p>

                        <AppButton
                            size="sm"
                            color="blue"
                            :href="route('transfer')"
                            >{{ useTrans('ui.learn_more') }}</AppButton
                        >
                    </div>
                </AppAlert>
            </AppContainer>

            <slot />
        </div>

        <AppFooter class="flex-grow" />
    </div>
</template>
