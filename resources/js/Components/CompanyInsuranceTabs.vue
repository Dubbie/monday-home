<script setup>
import TabContainer from '@/Components/TabContainer.vue';
import AppTab from '@/Components/AppTab.vue';
</script>

<template>
    <TabContainer>
        <AppTab label="Szakmai Felelősségbiztosítás" :href="route('insurance.company')"
            :active="route().current('insurance.company')" />
        <AppTab label="Vagyon- és felelősségbiztosítás" :href="route('insurance.property-and-liability')"
            :active="route().current('insurance.property-and-liability')" />
        <AppTab label="Szállítmánybiztosítások" />
        <AppTab label="Élet- és Balesetbiztosítások" />
        <AppTab label="Felelősségbiztosítás" />
    </TabContainer>
</template>
