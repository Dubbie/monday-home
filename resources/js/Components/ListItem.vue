<script setup>
import { ChevronRightIcon } from '@heroicons/vue/16/solid';
</script>

<template>
    <li class="flex space-x-1">
        <ChevronRightIcon class="text-monday size-4 mt-1" />
        <span class="text-sm">
            <slot />
        </span>
    </li>
</template>
