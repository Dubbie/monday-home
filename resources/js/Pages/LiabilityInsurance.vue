<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import CompanyInsuranceTabs from '@/Components/CompanyInsuranceTabs.vue';
import InsuranceQuoteForm from '@/Components/InsuranceQuoteForm.vue';
import QuoteSentModal from '@/Components/QuoteSentModal.vue';
import { ref } from 'vue';
import { useFormHandler } from '@/composables/formHandler';
import LiabilityInsuranceDescription from '@/Pages/Partials/LiabilityInsuranceDescription.vue';

// State variables
const loading = ref(false);
const showSuccessModal = ref(false);

// Form handler initialization
const { form, updateFormData } = useFormHandler({
    name: '',
    email: '',
    phone: '',
    investment_cost: '50M ft alatt',
    message: '',
});

// Form fields configuration
const fields = [
    { label: 'Név', type: 'text', modelKey: 'name' },
    { label: 'E-mail cím', type: 'email', modelKey: 'email' },
    { label: 'Telefonszám', type: 'tel', modelKey: 'phone' },
    {
        label: 'Projektenkénti beruházási költség',
        type: 'select',
        modelKey: 'investment_cost',
        options: ['50M ft alatt', '50-100M ft között', '100M ft felett'],
    },
    { label: 'Rövid üzenet', type: 'textarea', modelKey: 'message' },
];

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
        const response = await axios.post(
            route('api.quote.liability'),
            form.data(),
        );

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
    <AppLayout title="Felelősségbiztosítás">
        <AppContainer>
            <CompanyInsuranceTabs />

            <div class="mt-6">
                <img
                    src="/img/FelelossegBiztositas.jpg"
                    alt="Felelősségbiztosítás ábrázolás"
                />
            </div>

            <div class="mt-3 grid grid-cols-7 gap-y-6 lg:gap-x-12 lg:gap-y-0">
                <div class="col-span-7 lg:col-span-4">
                    <LiabilityInsuranceDescription />
                </div>

                <div class="col-span-7 lg:col-span-3">
                    <InsuranceQuoteForm
                        class="lg:-mt-16"
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
