<script setup>
import AppContainer from './AppContainer.vue';

const titleClasses = "font-semibold mb-3";
</script>

<template>
    <footer class="bg-monday text-white py-6">
        <AppContainer>
            <div class="flex items-start flex-col gap-y-6 lg:flex-row lg:gap-y-0 lg:gap-x-8">
                <div class="flex-1">
                    <h3 :class="titleClasses">Kapcsolatfelvétel</h3>

                    <p class="font-semibold">Monday Insurance Brokers Kft.</p>
                    <p>Székhely: Itt ott</p>
                </div>

                <div class="flex-1">
                    <h3 :class="titleClasses">Szabályzatok</h3>
                    <p>Szolgáltatási szabályzat</p>
                </div>

                <div class="flex-1">
                    <h3 :class="titleClasses">Hivatkozások</h3>
                    <p>Partnereinknek</p>
                </div>

                <div class="flex justify-end flex-shrink-0">
                    <img src="/img/fbamsz.png" alt="" class="block size-[58px]">
                </div>
            </div>

            <div class="text-xs mt-6">
                <p>biztositas-hitel.hu</p>
            </div>
        </AppContainer>
    </footer>
</template>
