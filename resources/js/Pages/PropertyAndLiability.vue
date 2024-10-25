<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import CompanyInsuranceTabs from '@/Components/CompanyInsuranceTabs.vue';
</script>

<template>
    <AppLayout>
        <AppContainer>
            <CompanyInsuranceTabs />
            <p>This is the tab view.</p>
        </AppContainer>
    </AppLayout>
</template>
