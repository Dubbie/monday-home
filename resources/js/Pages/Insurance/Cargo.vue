<script setup>
import InsuranceQuotePage from '@/Pages/Insurance/Partials/InsuranceQuotePage.vue';
import CargoInsuranceDescription from '@/Pages/Insurance/Partials/CargoInsuranceDescription.vue';

const formTemplate = {
    name: '',
    email: '',
    phone: '',
    shipping_area: 'Csak belföldi szállítmánybiztosítás',
    message: '',
};

// Form fields configuration
const fields = [
    { label: 'Név', type: 'text', modelKey: 'name' },
    { label: 'E-mail cím', type: 'email', modelKey: 'email' },
    { label: 'Telefonszám', type: 'tel', modelKey: 'phone' },
    {
        label: 'Szállítmányozási terület',
        type: 'select',
        modelKey: 'shipping_area',
        options: [
            'Csak belföldi szállítmánybiztosítás',
            'Csak külföldi szállítmánybiztosítás',
            'Külföldi és belföldi szállítmánybiztosítás',
        ],
    },
    { label: 'Rövid üzenet', type: 'textarea', modelKey: 'message' },
];
</script>

<template>
    <InsuranceQuotePage
        title="Szállítmánybiztosítás"
        image-url="/img/SzallitmanyBiztositas.jpg"
        image-alt="Szállítmánybiztosítás ábrázolás"
        :submit-url="route('api.quote.cargo')"
        :fields="fields"
        :form-template="formTemplate"
        :description-component="CargoInsuranceDescription"
    />
</template>
