<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import InsuranceQuoteForm from '@/Components/InsuranceQuoteForm.vue';
import QuoteSentModal from '@/Components/QuoteSentModal.vue';
import { ref } from 'vue';
import { useFormHandler } from '@/composables/formHandler';
import CompanyInsuranceTabs from '@/Components/CompanyInsuranceTabs.vue';

const props = defineProps({
    title: {
        type: String,
        required: true,
    },
    imageUrl: {
        type: String,
        required: true,
    },
    imageAlt: {
        type: String,
        required: true,
    },
    descriptionComponent: {
        type: Object,
        required: true,
    },
    submitUrl: {
        type: String,
        required: true,
    },
    formTemplate: {
        type: Object,
        required: true,
    },
    fields: {
        type: Array,
        required: true,
    },
});

// Form handler initialization
const { form, updateFormData } = useFormHandler(props.formTemplate);

const loading = ref(false);
const showSuccessModal = ref(false);

// Handle validation errors
const handleValidationErrors = (errors) => {
    for (const key in errors) {
        form.setError(key, errors[key][0]);
    }
};

// Clear specific error
const handleClearError = (key) => {
    form.clearErrors(key);
};

// Handle form submission
const handleSubmit = async () => {
    loading.value = true;
    showSuccessModal.value = false;

    try {
        const response = await axios.post(props.submitUrl, form.data());

        if (response.data.success) {
            showSuccessModal.value = true;
            form.reset();
        }
    } catch (err) {
        if (err?.response?.status === 422) {
            handleValidationErrors(err.response.data.errors);
        } else {
            console.error('Error when sending request!', err);
        }
    } finally {
        loading.value = false;
    }
};
</script>

<template>
    <AppLayout :title="title">
        <AppContainer>
            <CompanyInsuranceTabs />

            <div class="mt-6 h-[160px] overflow-hidden rounded-xl bg-zinc-200">
                <img :src="imageUrl" :alt="imageAlt" />
            </div>

            <div class="mt-3 grid grid-cols-7 gap-y-6 lg:gap-x-12 lg:gap-y-0">
                <div class="col-span-7 lg:col-span-4">
                    <component :is="descriptionComponent" />
                </div>

                <div class="col-span-7 lg:col-span-3">
                    <InsuranceQuoteForm
                        class="lg:-mt-16 lg:mr-4"
                        :fields="fields"
                        :errors="{ ...form.errors }"
                        :loading="loading"
                        :model-value="form.data()"
                        @update:model-value="updateFormData"
                        @submit="handleSubmit"
                        @clear-error="handleClearError"
                    />
                </div>
            </div>
        </AppContainer>

        <QuoteSentModal
            :show="showSuccessModal"
            @close="showSuccessModal = false"
        />
    </AppLayout>
</template>
