<script setup>
import { XMarkIcon } from '@heroicons/vue/24/solid';
import Modal from './Modal.vue';
import { CheckCircleIcon } from '@heroicons/vue/24/outline';

defineProps({
    show: {
        type: Boolean,
        default: false,
    },
});

defineEmits(['close']);
</script>

<template>
    <Modal :show="show" max-width="md">
        <div class="mb-6 flex items-start justify-between px-6 pt-6">
            <div class="relative rounded-full bg-green-100 p-2">
                <CheckCircleIcon class="size-7 text-green-500" />

                <div
                    class="absolute left-1/2 top-1/2 size-20 -translate-x-1/2 -translate-y-1/2 rounded-full ring-1 ring-zinc-200"
                ></div>
                <div
                    class="absolute left-1/2 top-1/2 size-28 -translate-x-1/2 -translate-y-1/2 rounded-full ring-1 ring-zinc-200/60"
                ></div>
                <div
                    class="absolute left-1/2 top-1/2 size-36 -translate-x-1/2 -translate-y-1/2 rounded-full ring-1 ring-zinc-200/30"
                ></div>
            </div>

            <div
                class="-m-2 cursor-pointer rounded-lg p-2 hover:bg-zinc-100"
                @click="$emit('close')"
            >
                <XMarkIcon class="size-6" />
            </div>
        </div>

        <div class="relative z-10 px-6 pb-6">
            <div>
                <h2 class="mb-1 text-xl font-semibold">
                    Ajánlatkérés elküldve!
                </h2>
                <p class="text-sm text-zinc-600">
                    Kollégánk hamarosan keresni fogja Önt.
                </p>
            </div>
        </div>
    </Modal>
</template>
