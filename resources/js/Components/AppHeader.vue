<script setup>
import { Link } from '@inertiajs/vue3';
import AppButton from './AppButton.vue';
import NavLink from './NavLink.vue';
import { ref } from 'vue';

const showingMobileMenu = ref(false);
</script>

<template>
    <header>
        <div class="mx-auto max-w-monday hidden sm:block px-6 lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-x-8">
                    <Link :href="route('about-us')">
                    <img src="/img/logo.png" alt="" />
                    </Link>

                    <div class="flex items-center gap-x-1">
                        <NavLink :href="route('about-us')">Rólunk</NavLink>
                        <NavLink :href="route('services')">Szolgáltatások</NavLink>
                        <NavLink :href="route('contact-us')">Elérhetőségek</NavLink>
                    </div>
                </div>

                <AppButton :href="route('contract')" variant="primary">Megbízom a Monday-t</AppButton>
            </div>
        </div>

        <div class="block sm:hidden px-6">
            <div class="flex items-center justify-between">
                <Link :href="route('about-us')">
                <img src="/img/logo.png" alt="" />
                </Link>

                <div>
                    <div class="p-2 border rounded-lg shadow-sm hover:bg-black/5"
                        @click="showingMobileMenu = !showingMobileMenu">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </div>
                </div>
            </div>

            <div v-show="showingMobileMenu" class="flex flex-col">
                <ResponsiveNavLink :href="route('about-us')">Rólunk</ResponsiveNavLink>
                <ResponsiveNavLink :href="route('services')">Szolgáltatások</ResponsiveNavLink>
                <ResponsiveNavLink :href="route('contact-us')">Elérhetőségek</ResponsiveNavLink>
                <AppButton :href="route('contract')" variant="primary">Megbízom a Monday-t</AppButton>
            </div>
        </div>
    </header>
</template>
