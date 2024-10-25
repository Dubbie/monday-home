<script setup>
defineProps({
    message: {
        type: String,
    },
});
</script>

<template>
    <div v-show="message" role="alert" class="mt-1">
        <p class="text-xs font-medium text-black/60">
            {{ message }}
        </p>
    </div>
</template>
