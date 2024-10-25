<script setup>
import { XMarkIcon } from '@heroicons/vue/24/solid';
import Modal from './Modal.vue';

defineProps({
    show: {
        type: Boolean,
        default: false,
    },
});

defineEmits(['close']);
</script>

<template>
    <Modal :show="show">
        <div class="mb-3 flex items-center justify-between px-3 pt-3">
            <h3 class="pl-3 text-xl font-semibold">Adatkezelési Tájékoztató</h3>

            <div
                class="cursor-pointer rounded-lg p-2 hover:bg-zinc-100"
                @click="$emit('close')"
            >
                <XMarkIcon class="size-6" />
            </div>
        </div>

        <div class="px-6 pb-6 text-sm text-zinc-600">
            <p>Adatkezelés nyilvántartási száma NAIH-86075/2015.</p>
            <p>Az adatok kezelését a www.mdy.hu kezeli.</p>
            <p>Az adatokat kizárólag az ajánlatkészítéshez használjuk fel.</p>
            <p>Monday Insurance Brokers Kft.</p>
            <p>1124 Budapest, Bürök utca 34-36. III. emelet</p>
        </div>
    </Modal>
</template>
