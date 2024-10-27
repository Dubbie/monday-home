<script setup>
import InsuranceQuotePage from '@/Pages/Insurance/Partials/InsuranceQuotePage.vue';
import CompanyInsuranceDescription from '@/Pages/Insurance/Partials/CompanyInsuranceDescription.vue';

const formTemplate = {
    company_name: '',
    email: '',
    phone: '',
    professional_activity: '',
    message: '',
};

// Form fields configuration
const fields = [
    { label: 'Cégnév', type: 'text', modelKey: 'company_name' },
    { label: 'E-mail cím', type: 'email', modelKey: 'email' },
    { label: 'Telefonszám', type: 'tel', modelKey: 'phone' },
    {
        label: 'Szakmai tevékenység',
        type: 'text',
        modelKey: 'professional_activity',
    },
    { label: 'Rövid üzenet', type: 'textarea', modelKey: 'message' },
];
</script>

<template>
    <InsuranceQuotePage
        title="Szakmai felelősségbiztosítás"
        image-url="/img/SzakmaiFelelosseg.jpg"
        image-alt="Szakmai felelősségbiztosítás ábrázolás"
        :submit-url="route('api.quote.company')"
        :fields="fields"
        :form-template="formTemplate"
        :description-component="CompanyInsuranceDescription"
    />
</template>
