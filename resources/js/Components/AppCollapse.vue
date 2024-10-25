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

const onBeforeEnter = (el) => {
    el.style.height = '0';
    el.style.overflow = 'hidden';
};

const onEnter = (el) => {
    el.style.transition = 'height 0.3s ease';
    el.style.height = el.scrollHeight + 'px';
};

const onAfterEnter = (el) => {
    el.style.height = 'auto';
    el.style.overflow = '';
};

const onBeforeLeave = (el) => {
    el.style.height = el.scrollHeight + 'px';
    el.style.overflow = 'hidden';
};

const onLeave = (el) => {
    el.style.transition = 'height 0.3s cubic-bezier(0, 1, 0.5, 1)';
    el.style.height = '0';
};
</script>

<template>
    <div>
        <div class="flex cursor-pointer select-none items-center gap-x-2" @click="isOpen = !isOpen">
            <component :is="icon" class="size-6" />
            <p class="text-xl font-semibold">{{ title }}</p>
        </div>

        <Transition @before-enter="onBeforeEnter" @enter="onEnter" @after-enter="onAfterEnter"
            @before-leave="onBeforeLeave" @leave="onLeave">
            <div v-show="isOpen" class="text-sm text-zinc-600">
                <slot />
            </div>
        </Transition>
    </div>
</template>

<style scoped>
/* Add custom styling if needed */
</style>
