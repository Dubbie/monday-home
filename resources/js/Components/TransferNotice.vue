<script setup>
import Modal from '@/Components/Modal.vue';
import { usePage } from '@inertiajs/vue3';
import { XMarkIcon } from '@heroicons/vue/24/outline';

import { ref } from 'vue';
const isOpen = ref(!usePage().props.notice_read);

const handleNoticeRead = async () => {
    // Call API to show we read this
    try {
        await axios.post(route('api.notice.read'));
        isOpen.value = false;
    } catch (err) {
        console.log(err);
    }
};
</script>

<template>
    <Modal :show="isOpen" @close="handleNoticeRead">
        <div class="flex max-h-[90svh] flex-col">
            <div class="p-8">
                <div class="flex items-center justify-between">
                    <h2 class="text-2xl font-semibold">Tisztelt Ügyfeleink!</h2>

                    <div
                        class="cursor-pointer rounded-lg p-2 hover:bg-zinc-100"
                        @click="handleNoticeRead"
                    >
                        <XMarkIcon class="size-6" />
                    </div>
                </div>
            </div>

            <div class="overflow-y-scroll px-8 pb-8">
                <div class="prose">
                    <p>
                        Tájékoztatjuk Önöket, hogy a
                        <b
                            >DAMArisk Biztosítási Alkusz Korlátolt Felelősségű
                            Társaság</b
                        >
                        (székhelye: 1071 Budapest, Damjanich utca 51. III. em.
                        27., cégjegyzék száma: 01-09-874719, adószáma
                        13816001-2-42, mint állományt átvevő alkusz (a
                        továbbiakban:
                        <b>Átvevő Alkusz</b>) a biztosítási tevékenységről szóló
                        2014. évi LXXXVIII. tv. (a továbbiakban: Bit.) 406/A.
                        §-a alapján 2024. szeptember 1. napjával (Átruházás
                        Napja) állomány-átruházás alapján megszerezte a
                    </p>

                    <p>
                        - <b>Dárius Kincse 2001. Kft.</b> (székhelye: 1149
                        Budapest, Egressy út 2. Fsz. 2. ajtó, cégjegyzék száma:
                        01 09 697501, adószáma 12666391-2-42,) mint állományt
                        átruházó alkusz, valamint a
                    </p>

                    <p>
                        - <b>Monday Insurance Brokers Kft.</b> (székhelye: 1037
                        Budapest, Angyalfű köz 4., cégjegyzék száma: 01 09
                        916872, adószáma 11939845-2-41) mint állományt átruházó
                        alkusz
                    </p>

                    <p>
                        (az állományt átruházó alkuszok együtt:
                        <b>Átruházó Alkuszok</b>) Átruházás Napján létező
                        biztosításközvetítésre irányuló megbízási szerződései
                        teljes állományát.
                    </p>

                    <p>
                        A Bit. 406/A. § (4) bekezdés alapján az állomány
                        átruházásához nem szükséges az átruházással érintett
                        megbízási szerződések szerinti ügyfelek (megbízók)
                        hozzájárulása. Az Átvevő Alkusz az állományátruházással
                        érintett személyes adatokat a www.damarisk.hu weboldalon
                        megismerhető adatkezelési tájékoztatója, a Bit. és egyéb
                        vonatkozó jogszabályok rendelkezései szerint kezeli.
                    </p>

                    <p>
                        Amennyiben az Átruházó Alkuszok bármelyikének megbízója
                        (ügyfele) nem szeretne az Átvevő Alkusz megbízója
                        (ügyfele) maradni, jogosult az átruházott alkuszi
                        megbízási szerződést a részükre megküldött külön
                        tájékoztatás kézhezvételének napjától számított harminc
                        napon belül az Átvevő Alkuszhoz intézett írásbeli
                        nyilatkozattal, harmincnapos határidővel felmondani
                        (levelezési cím: 1071 Budapest, Damjanich utca 51. III.
                        em. 27., faxszám: +361/700-1907, személyes elérhetőség:
                        1071 Budapest, Damjanich utca 51. III. em. 27.).
                    </p>

                    <p>
                        Tájékoztatjuk továbbá a megbízókat, hogy a fentiek
                        szerinti felmondási jog nem illeti meg azt a megbízót,
                        akinek megbízási szerződése olyan szerződési feltételt
                        tartalmaz, amely szerint a megbízó a
                        szerződésátruházáshoz előzetesen, korlátozás nélkül
                        hozzájárult, illetve a megbízó nem tartotta fenn jogát a
                        hozzájáruló nyilatkozat visszavonására.
                    </p>

                    <p>
                        Ha az állomány-átruházással kapcsolatban, szerződéseinek
                        kezelésével kapcsolatban bármelyen kérdésük merülne fel,
                        kérjük jelezzék azt az alábbi elérhetőségeken:
                    </p>

                    <p>E-mail: info@damarisk.hu</p>

                    <p>Telefon: +361/950-1267</p>

                    <p>
                        Postacím: 1071 Budapest, Damjanich utca 51. III. em. 27.
                    </p>

                    <p>Tisztelettel:</p>

                    <p>
                        <b
                            >DAMArisk Biztosítási Alkusz Korlátolt Felelősségű
                            Társaság</b
                        >
                    </p>

                    <p>Átvevő Alkusz</p>
                </div>
            </div>
        </div>
    </Modal>
</template>
