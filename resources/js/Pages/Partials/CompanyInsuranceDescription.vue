<script setup>
import ListItem from '@/Components/ListItem.vue';

const insuranceTypes = [
    'Adótanácsadói felelősségbiztosítás',
    'Biztonságtechnikai vállalkozók felelősségbiztosítása',
    'Egészségügyi és szociális tevékenység felelősségbiztosítása',
    'Energetikai auditorok szakmai felelősségbiztosítása',
    'Gyógyszertárak felelősségbiztosítása',
    'Gyógyszerészek felelősségbiztosítása',
    'Hitelközvetítők, független pénzügyi közvetítők felelősségbiztosítása',
    'Hivatali felelősségbiztosítás',
    'Igazságügyi szakértői felelősségbiztosítás',
    'Kiadmányozási joggal rendelkezők felelősségbiztosítása',
    'Könyvelői felelősségbiztosítás',
    'Könyvvizsgálói felelősségbiztosítás',
    'Közbeszerzési tanácsadók felelősségbiztosítása',
    'Közös képviselők felelősségbiztosítása',
    'Magánnyomozók felelősségbiztosítása',
    'Mérnöki tevékenység felelősségbiztosítása',
    'Műszaki ellenőrök, tanácsadók felelősségbiztosítása',
    'Műszaki igazságügyi szakértői tevékenység felelősségbiztosítása',
    'Oktatási intézmények felelősségbiztosítása',
    'Orvosi felelősségbiztosítás',
    'Rendészeti szolgáltatók felelősségbiztosítása',
    'Szakfordítók és tolmácsok felelősségbiztosítása',
    'Természetgyógyászok felelősségbiztosítása',
    'Tervezői felelősségbiztosítás',
    'Társasházkezelők felelősségbiztosítása',
    'Vagyonvédelmi vállalkozások felelősségbiztosítása',
    'Állat-egészségügyi tevékenység felelősségbiztosítása',
    'Állatorvosi felelősségbiztosítás',
    'Építészek felelősségbiztosítása',
    'Önálló bírósági végrehajtók felelősségbiztosítása',
    'Őrző és védő szolgáltatók felelősségbiztosítása',
];
</script>

<template>
    <div>
        <h2 class="mb-3 text-lg font-semibold">Szakmai Felelősségbiztosítás</h2>

        <div class="text-zinc-600">
            <p class="mb-3">
                A szakmai felelősségbiztosítás lényege, hogy a cég által
                nyújtott szolgáltatás, vagy végzett tevékenysége során
                megbízójának, vevőjének okozott kárt átvállalja és azt
                megtérítse.
            </p>

            <p class="mb-3 text-sm italic">
                Akármelyik szakmában végzi vállalata, vállalkozása a
                tevékenységét talál nálunk olyan formációt, mely a szükséges
                kockázatokat a kellő mértékben le képes fedni.
            </p>

            <ul>
                <ListItem
                    v-for="(insurance, index) in insuranceTypes"
                    :key="index"
                    >{{ insurance }}</ListItem
                >
            </ul>
        </div>
    </div>
</template>
