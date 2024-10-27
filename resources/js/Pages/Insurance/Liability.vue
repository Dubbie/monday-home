<script setup>
import LiabilityInsuranceDescription from '@/Pages/Insurance/Partials/LiabilityInsuranceDescription.vue';
import InsuranceQuotePage from '@/Pages/Insurance/Partials/InsuranceQuotePage.vue';

const formTemplate = {
    name: '',
    email: '',
    phone: '',
    investment_cost: '50M ft alatt',
    message: '',
};

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
</script>

<template>
    <InsuranceQuotePage
        title="Felelősségbiztosítás"
        image-url="/img/FelelossegBiztositas.jpg"
        image-alt="Felelősségbiztosítás ábrázolás"
        :submit-url="route('api.quote.liability')"
        :fields="fields"
        :form-template="formTemplate"
        :description-component="LiabilityInsuranceDescription"
    />
</template>
