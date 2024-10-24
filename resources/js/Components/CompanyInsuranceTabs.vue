<script setup>
import TabContainer from '@/Components/TabContainer.vue';
import AppTab from '@/Components/AppTab.vue';
</script>

<template>
    <TabContainer>
        <AppTab
            label="Szakmai Felelősségbiztosítás"
            :href="route('company-insurance')"
            :active="route().current('company-insurance')"
        />
        <AppTab
            label="Vagyon- és felelősségbiztosítás"
            :href="route('property-and-liability-insurance')"
            :active="route().current('property-and-liability-insurance')"
        />
        <AppTab label="Szállítmánybiztosítások" />
        <AppTab label="Élet- és Balesetbiztosítások" />
        <AppTab label="Felelősségbiztosítás" />
    </TabContainer>
</template>
