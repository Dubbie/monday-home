<script setup>
import { ref } from 'vue';

defineProps({
    title: {
        type: String,
        required: true,
    },
    icon: {
        type: Function,
        required: true,
    },
});

const isOpen = ref(false);
</script>

<template>
    <div class="">
        <div
            class="flex cursor-pointer select-none items-center gap-x-2"
            @click="isOpen = !isOpen"
        >
            <component :is="icon" class="size-6" />
            <p class="text-xl font-semibold">{{ title }}</p>
        </div>

        <transition
            enter-active-class="transition transform ease-in-out duration-300"
            enter-from-class="opacity-0 -translate-y-6"
            enter-to-class="opacity-100 translate-y-0"
            leave-active-class="transition transform ease-in-out duration-300"
            leave-from-class="opacity-100 translate-y-0"
            leave-to-class="opacity-0 -translate-y-6"
        >
            <div v-show="isOpen" class="pt-3 text-sm text-zinc-600">
                <slot />
            </div>
        </transition>
    </div>
</template>
