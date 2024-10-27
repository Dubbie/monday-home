<script setup>
import ListItem from '@/Components/ListItem.vue';

const helpItems = [
    'Mezőgazdasági nagyüzemeknek',
    'Mikro-, kis-, és középvállalkozásoknak',
    'Őstermelőknek',
];

const aTypeItems = [
    'Alma (ult01)',
    'Borszőlő ültetvény (ult19)',
    'Búza, kétszeres és egyéb búza (gab01)',
    'Egyéb szőlőültetvény (ult20)',
    'Hagyományos gyümölcsös alma (hag01)',
    'Hagyományos gyümölcsös körte (hag15)',
    'Kukorica (gab06)',
    'Káposztarepce (ipa02)',
    'Körte (ult15)',
    'Napraforgómag (ipa17)',
    'Rozs (gab03)',
    'Tavaszi búza (gab18)',
    'Tritikále (gab08)',
    'Árpa (gab04)',
];

const bTypeItems = [
    'Birs (ult18)',
    'Brokkoli (zol02)',
    'Burgonya (bur01)',
    'Búza, kétszeres, és egyéb búza (gab01)',
    'Csemegekukorica (zol43)',
    'Cseresznye (ult17)',
    'Csicseriborsó (huv08)',
    'Cukkini (zol26)',
    'Cukorborsó (zol38)',
    'Cukorrépa (cuk01)',
    'Cékla (zol32)',
    'Dinnye (gyu01)',
    'Dió (ult08)',
    'Durumbúza (gab02)',
    'Egyéb ribiszke (gyu10)',
    'Fejeskáposzta (zol04)',
    'Földieper (gyu02)',
    'Földimogyoró (ipa06)',
    'Fűszerpaprika (agf01)',
    'Hagyományos gyümölcsös birs (hag18)',
    'Hagyományos gyümölcsös cseresznye (hag17)',
    'Hagyományos gyümölcsös dió (hag08)',
    'Hagyományos gyümölcsös mandula (hag10)',
    'Hagyományos gyümölcsös meggy (hag16)',
    'Hagyományos gyümölcsös mogyoró (hag09)',
    'Hagyományos gyümölcsös naspolya (hag07)',
    'Hagyományos gyümölcsös szilva (hag06)',
    'Hagyományos gyümölcsös sárgabarack (hag04)',
    'Hagyományos gyümölcsös őszibarack (hag03)',
    'Hibridkukorica (vet33)',
    'Hibridnapraforgó (vet34)',
    'Karfiol (zol01)',
    'Kelkáposzta (zol05)',
    'Kukorica (gab06)',
    'Lencse (huv06)',
    'Lóbab (huv02)',
    'Mandula (ult10)',
    'Meggy (ult16)',
    'Mezei borsó (tak19)',
    'Mogyoró (ult09)',
    'Mustármag (ipa08)',
    'Mák (ipa10)',
    'Málna (gyu04)',
    'Napraforgómag (ipa17)',
    'Naspolya (ult07)',
    'Olajretekmag (ipa11)',
    'Olajtökmag (ipa12)',
    'Paprika (zol27)',
    'Paradicsom (zol22)',
    'Pasztinák (zol45)',
    'Petrezselyem (zol16)',
    'Piros ribiszke (gyu09)',
    'Piszke (gyu05)',
    'Retek (étkezési célra) (zol35)',
    'Rizs (riz03)',
    'Spenót (zol13)',
    'Spárga (zol14)',
    'Szilva (ult06)',
    'Száraz borsó (huv01)',
    'Szárazbab (zol40)',
    'Szójabab (ipa01)',
    'Sárgabarack (ult04)',
    'Sárgarépa (zol28)',
    'Sóska (zol12)',
    'Takarmányborsó (tak18)',
    'Termesztett bodza (gyu08)',
    'Torma (zol36)',
    'Tök (zol25)',
    'Tökre oltott dinnye (gyu03)',
    'Uborka (zol23)',
    'Vöröshagyma (zol30)',
    'Zab (gab05)',
    'Zeller (zol08)',
    'Zöldbab (zol41)',
    'Zöldborsó (zol37)',
    'Őszibarack (ult03)',
];
</script>

<template>
    <div>
        <h2 class="mb-3 text-lg font-semibold">
            Mezőgazdasági biztosítások akár 65%-os állami támogatással
        </h2>

        <div class="space-y-3 text-sm text-zinc-600">
            <p class="text-xl font-light">
                Kinek ajánljuk a mezőgazdasági biztosításokat?
            </p>
            <ul>
                <ListItem v-for="(item, index) of helpItems" :key="index">{{
                    item
                }}</ListItem>
            </ul>

            <p class="text-xl font-light">Biztosítási események</p>

            <p>
                <b
                    >A mezőgazdasági növénytermelés különösen érzékeny a
                    természeti hatásokra.</b
                >
                A növényi kultúrában legnagyobb kárveszélyt a
                <b>jégesõ és a tűz</b> jelenti, de például az õszi búza esetében
                a <b>téli fagy</b>, vagy a <b>szélvihar</b> is igen érzékeny
                veszteséget okozhat. Növényi biztosításainkkal átfogó védelmet
                kínálunk a növényi kultúrákat veszélyeztető jelentős
                káreseményekkel szemben.
            </p>

            <div class="grid grid-cols-3 gap-x-12 pt-6">
                <div class="flex flex-col items-center">
                    <img src="/img/Viharkar.jpg" alt="" />
                    <p class="mt-1 text-center text-xs">
                        Viharkár biztosítások
                    </p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/img/Fagykar.jpg" alt="" />
                    <p class="mt-1 text-center text-xs">Fagykár okozta károk</p>
                </div>
                <div class="flex flex-col items-center">
                    <img src="/img/Jegkar.jpg" alt="" />
                    <p class="mt-1 text-center text-xs">
                        Növényi kultúrák jég- és tűzkár biztosítása
                    </p>
                </div>
            </div>

            <hr />

            <h2 class="mb-3 text-lg font-semibold">Állami támogatás 65%-ig</h2>
            <img src="/img/Buzakalasz.jpg" alt="" />
            <p>
                Az „A” típusú mezőgazdasági biztosítási szerződéssel lefedett
                növénykultúrák (akár 65% állami támogatás)
            </p>
            <ul>
                <ListItem v-for="(item, index) of aTypeItems" :key="index">{{
                    item
                }}</ListItem>
            </ul>

            <p>
                A „B” típusú mezőgazdasági biztosítási szerződéssel lefedett
                növénykultúrák (akár 65% állami támogatás)
            </p>
            <ul>
                <ListItem v-for="(item, index) of bTypeItems" :key="index">{{
                    item
                }}</ListItem>
            </ul>
        </div>
    </div>
</template>
