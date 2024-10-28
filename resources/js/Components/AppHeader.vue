<script setup>
import { Link } from '@inertiajs/vue3';
import AppButton from './AppButton.vue';
import NavLink from './NavLink.vue';
import { ref } from 'vue';
import ResponsiveNavLink from './ResponsiveNavLink.vue';
import { useTrans } from '@/composables/trans';

const showingMobileMenu = ref(false);
</script>

<template>
    <header>
        <div class="mx-auto hidden max-w-monday px-6 sm:block lg:px-8">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-x-6">
                    <Link
                        :href="route('about-us')"
                        :aria-label="useTrans('header.about_us_label')"
                    >
                        <img src="/img/logo.png" alt="Monday logo" />
                    </Link>

                    <div class="flex items-center gap-x-1">
                        <NavLink
                            :href="route('about-us')"
                            :active="route().current('about-us')"
                            >{{ useTrans('header.about_us') }}</NavLink
                        >
                        <NavLink
                            :href="route('services')"
                            :active="route().current('services')"
                            >{{ useTrans('header.services') }}</NavLink
                        >
                        <NavLink
                            :href="route('contact-us')"
                            :active="route().current('contact-us')"
                            >{{ useTrans('header.contact') }}</NavLink
                        >
                    </div>
                </div>

                <AppButton :href="route('contract')" variant="primary">{{
                    useTrans('header.appointment')
                }}</AppButton>
            </div>
        </div>

        <div class="block px-6 sm:hidden">
            <div class="flex items-center justify-between">
                <Link :href="route('about-us')">
                    <img src="/img/logo.png" alt="" />
                </Link>

                <div>
                    <div
                        class="rounded-lg border p-2 shadow-sm hover:bg-black/5"
                        @click="showingMobileMenu = !showingMobileMenu"
                    >
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="1.5"
                            stroke="currentColor"
                            class="size-6"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                            />
                        </svg>
                    </div>
                </div>
            </div>

            <div v-show="showingMobileMenu" class="flex flex-col">
                <ResponsiveNavLink
                    :href="route('about-us')"
                    :active="route().current('about-us')"
                    >{{ useTrans('header.about_us') }}</ResponsiveNavLink
                >
                <ResponsiveNavLink
                    :href="route('services')"
                    :active="route().current('services')"
                    >{{ useTrans('header.services') }}</ResponsiveNavLink
                >
                <ResponsiveNavLink
                    :href="route('contact-us')"
                    :active="route().current('contact-us')"
                    >{{ useTrans('header.contact') }}</ResponsiveNavLink
                >
                <AppButton :href="route('contract')" variant="primary">{{
                    useTrans('header.appointment')
                }}</AppButton>
            </div>
        </div>
    </header>
</template>
