<script setup>
import { usePage } from '@inertiajs/vue3';
import { computed } from 'vue';
import AppContainer from './AppContainer.vue';

const locales = computed(() => {
    return usePage().props.locales;
});
</script>

<template>
    <div class="bg-zinc-100">
        <AppContainer>
            <div class="flex justify-end gap-x-1">
                <a
                    v-for="locale in locales"
                    class="cursor-pointer p-2 text-xs font-bold uppercase hover:bg-black/5"
                    :key="locale"
                    :href="route('locale.set', locale)"
                    >{{ locale }}
                </a>
            </div>
        </AppContainer>
    </div>
</template>
