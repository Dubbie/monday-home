<script setup>
import TabContainer from '@/Components/TabContainer.vue';
import AppTab from '@/Components/AppTab.vue';
</script>

<template>
    <TabContainer>
        <AppTab
            label="Szakmai Felelősségbiztosítás"
            :href="route('insurance.company')"
            :active="route().current('insurance.company')"
        />
        <AppTab
            label="Vagyon- és felelősségbiztosítás"
            :href="route('insurance.property-and-liability')"
            :active="route().current('insurance.property-and-liability')"
        />
        <AppTab
            label="Szállítmánybiztosítások"
            :href="route('insurance.cargo')"
            :active="route().current('insurance.cargo')"
        />
        <AppTab
            label="Élet- és Balesetbiztosítások"
            :href="route('insurance.life')"
            :active="route().current('insurance.life')"
        />
        <AppTab label="Felelősségbiztosítás" />
    </TabContainer>
</template>
