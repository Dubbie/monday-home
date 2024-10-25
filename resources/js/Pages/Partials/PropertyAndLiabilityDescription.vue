<script setup>
import ListItem from '@/Components/ListItem.vue';

const chooseUsItems = [
    'Mert ajánlatát 1-2 munkanapon belül megkapja',
    'Mert időt és utánajárást takaríthat meg velünk',
    'Mert kollégánk a kárrendezésnél is segítségére lesz',
    'Mert több biztositó ajánlatai közül választhat',
];

const propertyItems = [
    'épületeire',
    'gépeire, felszereléseire',
    'árukészletére',
    'készpénzére',
    'elektronikus berendezéseire',
];

const liabilityItems = [
    'Tevékenységi felelősségbiztosítás',
    'Munkáltatói felelősségbiztosítás',
    'Szolgáltatói felelősségbiztosítás',
    'Termékfelelősség-biztosítás',
    'Környezetszennyezési felelősségbiztosítás',
];
</script>

<template>
    <div>
        <h2 class="mb-3 text-lg font-semibold">
            Vagyon- és felelősségbiztosítás
        </h2>

        <div class="text-zinc-600">
            <p class="mb-3 text-lg font-light">Válasszon minket!</p>

            <ul>
                <ListItem v-for="(item, index) in chooseUsItems" :key="index">{{
                    item
                }}</ListItem>
            </ul>

            <p class="my-3 text-lg font-light">Vállalati biztosítások</p>
            <p class="text-sm font-semibold">Biztosítást köthet vállalatának</p>

            <ul>
                <ListItem v-for="(item, index) in propertyItems" :key="index">{{
                    item
                }}</ListItem>
            </ul>

            <p class="my-3 text-sm font-semibold">
                Vállalkozásátá védheti Felelősségbiztosításokkal is
            </p>

            <ul>
                <ListItem
                    v-for="(item, index) in liabilityItems"
                    :key="index"
                    >{{ item }}</ListItem
                >
            </ul>

            <p class="mt-3 text-sm">
                A fenti listán kívül több egyéb biztosítási fedezet létezik.
            </p>
            <p class="text-sm">Ajánlatkéréshez, kérjük töltse ki űrlapunkat.</p>
        </div>
    </div>
</template>
