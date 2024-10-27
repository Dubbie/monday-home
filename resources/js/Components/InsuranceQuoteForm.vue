<script setup>
import AppButton from '@/Components/AppButton.vue';
import PrivacyPolicyModal from '@/Components/PrivacyPolicyModal.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInputTransparent from '@/Components/TextInputTransparent.vue';
import TextareaInputTransparent from '@/Components/TextareaInputTransparent.vue';
import InputError from '@/Components/InputError.vue';
import { ref, watch } from 'vue';
import { EnvelopeIcon } from '@heroicons/vue/24/outline';
import SelectInput from './SelectInput.vue';

const textInputTypes = ['text', 'tel', 'email', 'number'];

const props = defineProps({
    fields: Array, // Field configurations (label, type, modelKey)
    modelValue: Object, // The form data passed down
    errors: Object,
    loading: {
        type: Boolean,
        default: false,
    },
});

const emit = defineEmits(['submit', 'update:modelValue', 'clearError']);

const formData = ref({ ...props.modelValue }); // Local copy of the form data

// Watch for external changes to modelValue and update formData
watch(
    () => props.modelValue,
    (newValue) => {
        formData.value = { ...newValue };
    },
);

const showingPrivacyPolicyModal = ref(false);

const handleSubmit = () => {
    emit('submit'); // Trigger the submit event to the parent
};

// Emit data updates when formData changes
watch(
    formData,
    (newFormData) => {
        emit('update:modelValue', newFormData);
    },
    { deep: true },
);
</script>

<template>
    <div class="rounded-xl bg-monday p-6 text-white/60 shadow-lg">
        <div class="-mt-1 flex items-center gap-x-2">
            <EnvelopeIcon class="size-8 text-green-300" />
            <h2 class="text-xl font-semibold text-white">Ajánlatot kérek</h2>
        </div>
        <form class="mt-6" @submit.prevent="handleSubmit">
            <div class="space-y-3">
                <div v-for="(field, index) in fields" :key="index">
                    <InputLabel :color="'white'" :for="field.modelKey">{{
                        field.label
                    }}</InputLabel>

                    <TextInputTransparent
                        v-if="textInputTypes.includes(field.type)"
                        :type="field.type"
                        :id="field.modelKey"
                        v-model="formData[field.modelKey]"
                        class="w-full text-sm"
                        :min="field.type === 'number' ? 0 : null"
                        @keyup="$emit('clearError', field.modelKey)"
                    />

                    <SelectInput
                        v-if="field.type === 'select'"
                        :options="field.options"
                        class="w-full text-sm"
                        v-model="formData[field.modelKey]"
                    />

                    <TextareaInputTransparent
                        v-if="field.type === 'textarea'"
                        :id="field.modelKey"
                        v-model="formData[field.modelKey]"
                        rows="4"
                        class="w-full text-sm"
                        @keyup="$emit('clearError', field.modelKey)"
                    />

                    <InputError
                        class="mt-1"
                        :message="errors[field.modelKey]"
                    />
                </div>
            </div>

            <div
                class="mt-3 flex flex-col space-y-1 sm:flex-row sm:space-x-1 sm:space-y-0"
            >
                <AppButton
                    type="submit"
                    variant="primary"
                    size="sm"
                    :disabled="loading"
                    disabled-label="Feldolgozás..."
                    >Küldés</AppButton
                >
                <AppButton
                    variant="ghost"
                    color="white"
                    size="sm"
                    @click="showingPrivacyPolicyModal = true"
                    >Adatkezelési Tájékoztató</AppButton
                >
            </div>
        </form>
        <PrivacyPolicyModal
            :show="showingPrivacyPolicyModal"
            @close="showingPrivacyPolicyModal = false"
        />
    </div>
</template>
