<script setup>
import AppFooter from '@/Components/AppFooter.vue';
import AppHeader from '@/Components/AppHeader.vue';
import { Head } from '@inertiajs/vue3';
defineProps({
    title: {
        type: String,
        default: "Biztosítás és Hitel"
    }
})
</script>

<template>

    <Head :title="title" />

    <div class="flex min-h-svh flex-col">
        <AppHeader />

        <div class="py-6 lg:py-8">
            <slot />
        </div>

        <AppFooter class="flex-grow" />
    </div>
</template>
