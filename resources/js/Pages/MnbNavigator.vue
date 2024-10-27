<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import AppButton from '@/Components/AppButton.vue';
import { ArrowDownTrayIcon } from '@heroicons/vue/16/solid';

const links = [
    {
        label: 'Befektetési egységekhez kötött életbiztosítások',
        url: '/navigatorfuzetek/befektetesi-egysegekhez-kotott-eletbiztositasok.pdf',
    },
    {
        label: 'Gépjármű Biztosítás',
        url: '/navigatorfuzetek/gepjarmu-biztositas.pdf',
    },
    {
        label: 'Minősített, Fogyasztóbarát Otthonbiztosítás',
        url: '/navigatorfuzetek/minositett-fogyasztobarat-otthonbiztositas.pdf',
    },
    {
        label: 'Nyugdíjbiztosítás',
        url: '/navigatorfuzetek/nyugdijbiztositas.pdf',
    },
    {
        label: 'Pénzügyi Békéltető Testület',
        url: '/navigatorfuzetek/penzugyi-bekelteto-testulet.pdf',
    },
    {
        label: 'Pénzügyi Panasz',
        url: '/navigatorfuzetek/penzugyi-panasz.pdf',
    },
    {
        label: 'Védje meg Önmagát és értékeit biztosítással',
        url: '/navigatorfuzetek/vedje-onmagat-es-ertekeit-biztositassal.pdf',
    },
];
</script>

<template>
    <AppLayout title="MNB Pénzügyi Navigátor Füzetek">
        <AppContainer>
            <h1 class="mb-6 text-lg font-semibold">
                MNB Pénzügyi Navigátor Füzetek
            </h1>

            <ul class="flex flex-col gap-y-2">
                <li v-for="(item, index) of links" :key="index">
                    <a :href="item.url">
                        <AppButton>
                            <ArrowDownTrayIcon class="size-4" />
                            <span>{{ item.label }}</span>
                        </AppButton>
                    </a>
                </li>
            </ul>

            <a
                href="https://www.mnb.hu/fogyasztovedelem/penzugyi-navigator-fuzetek"
                class="mt-6 block text-sm font-semibold text-monday underline hover:text-green-500"
                >MNB Pénzügyi Navigátor Füzetek</a
            >
        </AppContainer>
    </AppLayout>
</template>
