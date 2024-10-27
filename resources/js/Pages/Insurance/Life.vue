<script setup>
import LifeInsuranceDescription from '@/Pages/Insurance/Partials/LifeInsuranceDescription.vue';
import InsuranceQuotePage from '@/Pages/Insurance/Partials/InsuranceQuotePage.vue';

const formTemplate = {
    name: '',
    email: '',
    phone: '',
    accident_insurance: 'Érdekel',
    life_insurance: 'Érdekel',
    health_insurance: 'Érdekel',
    message: '',
};

// Form fields configuration
const fields = [
    { label: 'Név', type: 'text', modelKey: 'name' },
    { label: 'E-mail cím', type: 'email', modelKey: 'email' },
    { label: 'Telefonszám', type: 'tel', modelKey: 'phone' },
    {
        label: 'Balesetbiztosítás',
        type: 'select',
        modelKey: 'accident_insurance',
        options: ['Érdekel', 'Nem érdekel'],
    },
    {
        label: 'Életbiztosítás',
        type: 'select',
        modelKey: 'life_insurance',
        options: ['Érdekel', 'Nem érdekel'],
    },
    {
        label: 'Egészségbiztosítás',
        type: 'select',
        modelKey: 'health_insurance',
        options: ['Érdekel', 'Nem érdekel'],
    },
    { label: 'Rövid üzenet', type: 'textarea', modelKey: 'message' },
];
</script>

<template>
    <InsuranceQuotePage
        title="Élet- és balesetbiztosítás"
        image-url="/img/SzemelyiBiztositas.jpg"
        image-alt="Élet- és balesetbiztosítás ábrázolás"
        :submit-url="route('api.quote.life')"
        :fields="fields"
        :form-template="formTemplate"
        :description-component="LifeInsuranceDescription"
    />
</template>
