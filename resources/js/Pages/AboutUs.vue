<script setup>
import AppContainer from '@/Components/AppContainer.vue';
import MondayCarousel from '@/Components/MondayCarousel.vue';
import AppLayout from '@/Layouts/AppLayout.vue';

const titleClasses = "text-xl font-bold mb-2";
const pClasses = "text-zinc-500";
</script>

<template>
    <AppLayout>
        <AppContainer>
            <!-- Carousel here -->
            <MondayCarousel class="mb-8" />

            <div class="grid gap-y-6 md:grid-cols-3 md:gap-x-12 md:gap-y-0">
                <div>
                    <h2 :class="titleClasses">Hátterünk</h2>
                    <p :class="pClasses">A 2009-ben alakult Monday mára a magyarországi biztosításközvetítői piac stabil
                        szereplője. A
                        Monday tulajdonosai évtizedes tapasztalattal rendelkeznek a banki, biztosítási és
                        ingatlanbefektetési szakterületekről.</p>
                </div>

                <div>
                    <h2 :class="titleClasses">Célunk</h2>
                    <p :class="pClasses">A tulajdonosok célja, hogy egy olyan pénzügyi szolgáltatási rendszer kerüljön
                        kiépítésre, amely
                        folyamatosan tudja kiszolgálni a tulajdonosokhoz hasonló, magas színvonalú szolgáltatást elváró
                        ügyfeleket. Társaságunk szakmai tanácsadó hálózata nem csak a lakossági igényeket, hanem a
                        vállalati szektor magas szintű elvárásait is képes kiszolgálni.</p>
                </div>

                <div>
                    <h2 :class="titleClasses">Fejlődés</h2>
                    <p :class="pClasses">Hiszünk abban, hogy a hozzánk hasonló felelős pénzügyi intézmények működése
                        segít abban, hogy a
                        hazai biztosítási kultúra európai színvonalra fejlődjön</p>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
