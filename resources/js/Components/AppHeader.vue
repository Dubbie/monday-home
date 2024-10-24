<script setup>
import { Link } from '@inertiajs/vue3';
import AppButton from './AppButton.vue';
import NavLink from './NavLink.vue';
</script>

<template>
    <header>
        <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:max-w-none">
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
        </div>
    </header>
</template>
