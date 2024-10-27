<script setup>
import ListItem from '@/Components/ListItem.vue';

const helpItems = [
    'A kárrendezésben',
    'Az Összes társasház biztosítás összehasonlításában',
    'Személyes kapcsolattatrásban',
];
</script>

<template>
    <div>
        <h2 class="mb-3 text-lg font-semibold">Társasház Biztosítás</h2>

        <div class="space-y-3 text-sm text-zinc-600">
            <p class="text-xl font-light">Segítunk:</p>
            <ul>
                <ListItem v-for="(item, index) of helpItems" :key="index">{{
                    item
                }}</ListItem>
            </ul>

            <p>
                A társasházbiztosítás vagyonbiztosítási fedezete általában a
                legtöbb biztosítótársaságnál az alábbi káreseményekre nyújt
                fedezetet:
            </p>

            <p>
                tűz, elektromos tűz, robbanás, közvetlen és közvetett
                villámcsapás, ismeretlen közlekedési eszköz ütközése, légijármű
                ütközése, földrengés, földcsuszamlás, föld- és kőomlás,
                ismeretlen üreg beomlása, vihar, a vihar által megrongált
                tetőzeten, kiszakított nyílászáron, ill. a vihar okozta falazati
                résen keresztül a viharral együttjáró csapadék által okozott
                kár, jégeső, hónyomás, árvíz, felhőszakadás, vezetéktörés,
                idegen tárgyak rádőlése, a szerkezetileg beépített és a
                nyílászárók üvegezésének törése és repedése. Néhány biztosító
                kínál olyan terméket is amelyből hiányozhatnak alapvető
                kockázati elemek, de ezeket mi nem javasoljuk. A lakóközösség,
                társasház biztosítás, biztosítási összege az irányadó abban,
                hogy az adott biztosító mennyit fizet, ha az épület teljes
                egészében megsemmisül, például egy hatalmas vihar vagy
                földrengés következtében. Minden egyéb kár a biztosítási összeg
                %-os arányában értelmezhető. A felelősségbiztosítási
                (épülethasználói) fedezet esetében a biztosító megtéríti az
                idegen harmadik személynek okozott személysérüléses vagy
                dolgokban keletkezett károkat, amelyekért a biztosított, mint a
                biztosított épület tulajdonosa, használója kártérítési
                kötelezettséggel tartozik. Manapság már az a biztosító aki
                piacképes termékkel akar jelen lenni a társasház biztosítási
                piacon, az bővített felelősség biztosítást épít a
                szolgáltatásába. Ez annyit jelent, hogy nem csak idegen
                személynek, hanem a lakók egymásnak okozott kárait is megtéríti.
                (gyakori példa erre, ha a fölöttünk lévő szomszéd beáztat minket
                a mosógépe meghibásodása miatt) A vagyon- és
                felelősségbiztosítási alapfedezeteken túlmenően a különböző
                kiegészítő kockázatokat a Társasház vagy Lakásszövetkezet
                határozza meg, így a biztosítási szerződés által nyújtott
                szolgáltatások köre a kívánt módon szélesre vagy szűkebbre
                szabható.
            </p>

            <hr />

            <p class="text-xl font-light">Ki lehet a biztosítás szerződője?</p>
            <p>
                A társasház, lakásszövetkezet, lakóközösség megbízottja( közös
                képviselője).
            </p>

            <hr />

            <p class="text-xl font-light">
                Milyen kiegészítők köthetők a társasház biztosításhoz?
            </p>
            <p>
                A Társasház Lakásszövetkezet döntése alapján, külön díj
                megfizetése mellett kiegészíthető a biztosítási fedezet
                betöréses lopás és rablás elemekkel. Biztosítási fedezet alá
                vonhatók a közös tulajdonú ingóságok, meghatározott feltételek
                teljesülése esetén pedig a közös tulajdonba tartozó kültéri
                központi antenna berendezés is biztosítási védelem alá
                vonható.Rongálási (vandalizmus) károk kiegészítő biztosításával
                megtérülnek a betöréses lopás, rablás vagy annak kísérlete során
                okozott járulékos rongálási károk, a kaputelefonokban,
                elektromos kapukban és liftekben keletkezett rongálási károk a
                választott fedezet mértékéig.Különleges üvegek kiegészítő
                biztosításával biztosíthatók a közös tulajdonú és egyben a közös
                tulajdonon belül elhelyezett különleges (4mm-nél vastagabb v.
                kirakat) üvegezésekKiegészítő biztosítás köthető a társasházi
                közös képviselők és társasházkezelők felelősségbiztosítására. E
                kiegészítő felelősségbiztosítás alapján a biztosító megtéríti
                azokat a károkat, amelyeket a társasház közös képviselője vagy
                társasház-kezelője a társasház vagyonában, illetve a
                tulajdonostársak tulajdonosok vagyonában és életében vagy
                egészségében okozott azáltal, hogy a tevékenységének szabályait
                vétkes módon megszegte.
            </p>

            <hr />

            <p class="text-xl font-light">
                Mire nem terjed ki a társasház biztosítás?
            </p>
            <p>
                A biztosító, többek között nem téríti meg a
                környezetszennyezéssel, vagy a hatósági rendelkezésekkel
                összefüggésben keletkezett károkat, a jogszabály, vagy más
                biztosítási szerződés alapján térülő károkat, valamint a
                karbantartás elmulasztásával összefüggésben következtek be.
                Közös ingóságok vonatkozásában nem biztosíthatók például az
                alábbi vagyontárgyak: pénz, kéziratok, tervek, adathordozón
                tárolt adatállományok, érmék, bélyegek, képzőművészeti
                alkotások. Nem térülnek továbbá a szabadban, illetve nem lezárt
                helyiségben tárolt, illetve tartott ingóságok kárai (kivéve
                szemetes edények).
            </p>
        </div>
    </div>
</template>
