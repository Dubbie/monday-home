<script setup>
import { ChevronUpIcon } from '@heroicons/vue/16/solid';
import { ref, onMounted, onBeforeUnmount } from 'vue';

const isAtTop = ref(true); // Reactive property to track if the user is at the top

const handleScroll = () => {
    // Check if the user is at the top of the page
    isAtTop.value = window.scrollY === 0;
};

// Set up event listeners
onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

// Clean up the event listener on component unmount
onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <Transition
        enter-active-class="transition-all duration-500"
        enter-from-class="opacity-0"
        enter-to-class="opacity-100"
        leave-active-class="transition-all duration-300"
        leave-from-class="opacity-100"
        leave-to-class="opacity-0"
    >
        <div
            v-show="!isAtTop"
            class="pointer-events-none fixed bottom-0 right-6"
        >
            <div class="bg-zinc-800 p-2">
                <ChevronUpIcon class="size-4 text-white" />
            </div>
        </div>
    </Transition>
</template>
