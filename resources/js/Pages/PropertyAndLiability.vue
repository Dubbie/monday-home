<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import CompanyInsuranceTabs from '@/Components/CompanyInsuranceTabs.vue';
import TabView from '@/Components/TabView.vue';
</script>

<template>
    <AppLayout>
        <AppContainer>
            <CompanyInsuranceTabs />
            <TabView>
                <p>This is the tab view.</p>
            </TabView>
        </AppContainer>
    </AppLayout>
</template>
