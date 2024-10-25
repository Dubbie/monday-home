<script setup>
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
        enter-active-class="transition-all transform duration-500"
        enter-from-class="translate-y-full"
        enter-to-class="translate-y-0"
        leave-active-class="transition-all transform duration-300"
        leave-from-class="translate-y-0"
        leave-to-class="translate-y-full"
    >
        <div
            v-show="isAtTop"
            class="pointer-events-none fixed bottom-0 right-0 z-10"
        >
            <img src="/img/eu.png" alt="" />
        </div>
    </Transition>
</template>
