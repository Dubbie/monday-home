<script setup>
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const locales = computed(() => {
    return usePage().props.locales;
});
</script>

<template>
    <div class="absolute top-0 right-2 flex gap-x-1">
        <a v-for="locale in locales" class="cursor-pointer text-xs p-2 font-bold uppercase hover:bg-black/5"
            :key="locale" :href="route('locale.set', locale)">{{ locale }}
        </a>
    </div>
</template>
