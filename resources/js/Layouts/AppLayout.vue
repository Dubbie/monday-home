<script setup>
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

    <div class="flex min-h-full flex-col">
        <AppHeader />

        <div>
            <slot />

        </div>
    </div>
</template>
