<script setup>
import ListItem from '@/Components/ListItem.vue';
import { ArrowTurnDownRightIcon } from '@heroicons/vue/16/solid';

const featureItems = [
    'S.O.S-be kellene a kötvény?',
    'Már kezdené a munkát?',
    'Több ajánlatból választana?',
    'Napon belüli ajánlat!',
    'Töltse ki űrlapunkat!',
];
</script>

<template>
    <div>
        <h2 class="mb-3 text-lg font-semibold">
            E-naplóhoz Kivitelezői felelősségbiztosítás
        </h2>

        <div class="space-y-3 text-zinc-600">
            <p class="text-xl font-light">
                2017. január 1-től hatályos a lakóépület építésének egyszerű
                bejelentéséről szóló 155/2016 (VI.13.) Kormányrendelet és annak
                353/2016 (XI. 18.) Kormányrendelettel történő módosítás
                szabályainak megfelelő kivitelezői felelősségbiztosítás.
            </p>

            <ul>
                <ListItem v-for="(item, index) of featureItems" :key="index">{{
                    item
                }}</ListItem>
            </ul>

            <div class="text-sm">
                <p class="font-semibold">
                    Kinek kell rendelkezni a biztosítással?
                </p>
                <p>Aki a megrendelővel áll szerződéses viszonyban</p>
            </div>

            <div class="text-sm">
                <p class="font-semibold">
                    Mekkora limittel szükséges megkötni a szerződést?
                </p>

                <p>50 millió Ft beruházási költségkeretig</p>
                <div class="mb-2 flex items-center space-x-1">
                    <ArrowTurnDownRightIcon class="size-4" />
                    <span>10 millió Ft/kár, 30 millió Ft/év</span>
                </div>

                <p>
                    50 – 100 millió Ft közötti beruházási költségkeret esetében
                </p>
                <div class="mb-2 flex items-center space-x-1">
                    <ArrowTurnDownRightIcon class="size-4" />
                    <span>20 millió Ft/kár, 60 millió Ft/év</span>
                </div>

                <p>100 millió Ft feletti beruházási költségkeret esetében</p>
                <div class="mb-2 flex items-center space-x-1">
                    <ArrowTurnDownRightIcon class="size-4" />
                    <span>30 millió Ft/kár, 90 millió Ft/év</span>
                </div>
            </div>

            <div>
                <p class="font-semibold">
                    Mit kell tartalmazni a szerződésnek?
                </p>

                <ul>
                    <ListItem class="font-semibold"
                        >Felelősségbiztosításnak ki kell terjednie a felelős
                        műszaki vezető tevékenységére.</ListItem
                    >
                    <li class="mb-2 ml-0.5 pl-4 text-sm">
                        Felelősségbiztosítás felelős műszaki vezető
                        tevékenységére vonatkozóan a biztosítási fedezet
                        kiterjed a felelős műszaki vezető tevékenységére -
                        függetlenül attól, hogy milyen jogviszonyban végzi a
                        tevékenységét -, amennyiben a Biztosított jelen
                        szerződés alapján biztosítási eseménynek minősülő, az
                        adott projektben bekövetkező, károk megtérítéséért a
                        magyar polgári jog alapján kártérítési felelősséggel
                        tartozik.
                    </li>
                    <ListItem class="font-semibold"
                        >Időbeli hatály kiterjesztése.
                    </ListItem>
                    <li class="mb-2 ml-0.5 pl-4 text-sm">
                        A felelősségbiztosítás fedezetet nyújt a
                        felelősségbiztosítási szerződés hatálya alatt okozott és
                        legkésőbb a szerződés megszűnését követő 3 éven belül
                        bekövetkezett, és a biztosító részére bejelentett,
                        biztosítási eseménynek minősülő károkra
                    </li>
                    <ListItem class="font-semibold"
                        >Szolgáltatás tárgyában okozott károkra vonatkozó
                        kiterjesztés</ListItem
                    >
                    <ListItem class="font-semibold"
                        >Alvállalkozók kiterjesztése</ListItem
                    >
                </ul>
            </div>
        </div>
    </div>
</template>
