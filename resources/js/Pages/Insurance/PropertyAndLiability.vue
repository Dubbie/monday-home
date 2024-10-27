<script setup>
import PropertyAndLiabilityDescription from '@/Pages/Insurance/Partials/PropertyAndLiabilityDescription.vue';
import InsuranceQuotePage from '@/Pages/Insurance/Partials/InsuranceQuotePage.vue';

const formTemplate = {
    name: '',
    email: '',
    phone: '',
    need_information: 'Érdekel',
    building_insurance: 'Érdekel',
    inventory_insurance: 'Érdekel',
    liability_insurance: 'Érdekel',
    architect_installation_insurance: 'Érdekel',
    message: '',
};

// Form fields configuration
const fields = [
    { label: 'Név', type: 'text', modelKey: 'name' },
    { label: 'E-mail cím', type: 'email', modelKey: 'email' },
    { label: 'Telefonszám', type: 'tel', modelKey: 'phone' },
    {
        label: 'Tájékoztatást kérek',
        type: 'select',
        modelKey: 'need_information',
        options: ['Érdekel', 'Nem érdekel'],
    },
    {
        label: 'Árukészlet biztosítás',
        type: 'select',
        modelKey: 'inventory_insurance',
        options: ['Érdekel', 'Nem érdekel'],
    },
    {
        label: 'Felelősségbiztosítás',
        type: 'select',
        modelKey: 'liability_insurance',
        options: ['Érdekel', 'Nem érdekel'],
    },
    {
        label: 'Építész-szerelés biztosítás',
        type: 'select',
        modelKey: 'architect_installation_insurance',
        options: ['Érdekel', 'Nem érdekel'],
    },
    { label: 'Rövid üzenet', type: 'textarea', modelKey: 'message' },
];
</script>

<template>
    <InsuranceQuotePage
        title="Vagyon- és felelősségbiztosítás"
        image-url="/img/Vagyon.jpg"
        image-alt="Vagyon- és felelősségbiztosítás ábrázolat"
        :submit-url="route('api.quote.property-and-liability')"
        :fields="fields"
        :form-template="formTemplate"
        :description-component="PropertyAndLiabilityDescription"
    />
</template>
