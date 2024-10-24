<script setup>
import { useTrans } from '@/composables/trans';
import AppContainer from './AppContainer.vue';
import FooterLink from './FooterLink.vue';

import {
    CheckIcon,
    EnvelopeIcon,
    LockClosedIcon,
    MapPinIcon,
    PhoneIcon,
} from '@heroicons/vue/16/solid';

const titleClasses = 'font-semibold text-white mb-3';
</script>

<template>
    <footer class="bg-monday py-6 text-white/70">
        <AppContainer>
            <div
                class="flex flex-col items-start gap-y-6 lg:flex-row lg:gap-x-8 lg:gap-y-0"
            >
                <div class="flex-1">
                    <h3 :class="titleClasses">
                        {{ useTrans('footer.get_in_touch') }}
                    </h3>

                    <p class="font-semibold text-white">
                        {{ useTrans('company_name') }}
                    </p>
                    <div class="text-sm">
                        <p class="text-sm">
                            <MapPinIcon
                                class="mr-1 inline-block size-4 flex-shrink-0 text-white"
                            />
                            <span
                                >{{ useTrans('footer.headquarters.label') }}:
                                {{ useTrans('footer.headquarters.address') }}
                            </span>
                        </p>
                        <p class="text-sm">
                            {{ useTrans('footer.office.label') }}:
                            {{ useTrans('footer.office.address') }}
                        </p>
                        <p class="text-sm">
                            {{ useTrans('footer.po_box.label') }}:
                            {{ useTrans('footer.po_box.address') }}
                        </p>

                        <p class="mt-6">
                            {{ useTrans('footer.open_hours.label') }}
                        </p>
                        <p>{{ useTrans('footer.open_hours.time') }}</p>

                        <p class="mt-6 flex items-center gap-x-1">
                            <PhoneIcon class="size-4 text-white" />
                            <span>{{ useTrans('footer.phone') }}</span>
                        </p>
                        <p class="flex items-center gap-x-1">
                            <EnvelopeIcon class="size-4 text-white" />
                            <span>{{ useTrans('footer.email') }}</span>
                        </p>
                    </div>
                </div>

                <div class="flex-1">
                    <h3 :class="titleClasses">
                        {{ useTrans('footer.regulations.title') }}
                    </h3>

                    <div class="text-sm">
                        <FooterLink
                            :icon="CheckIcon"
                            :label="useTrans('footer.regulations.services')"
                            href="#!"
                        />
                        <FooterLink
                            :icon="CheckIcon"
                            :label="useTrans('footer.regulations.complaints')"
                            href="#!"
                        />
                        <FooterLink
                            :icon="CheckIcon"
                            :label="
                                useTrans('footer.regulations.privacy_policy')
                            "
                            href="#!"
                        />
                        <FooterLink
                            :icon="CheckIcon"
                            :label="
                                useTrans('footer.regulations.sustainability')
                            "
                            href="#!"
                        />
                        <FooterLink
                            :icon="CheckIcon"
                            :label="useTrans('footer.regulations.report')"
                            href="#!"
                        />
                    </div>
                </div>

                <div class="flex-1">
                    <h3 :class="titleClasses">
                        {{ useTrans('footer.links.title') }}
                    </h3>

                    <div class="text-sm">
                        <FooterLink
                            :icon="LockClosedIcon"
                            :label="useTrans('footer.links.partners')"
                            href="#!"
                        />
                        <FooterLink
                            :icon="LockClosedIcon"
                            :label="useTrans('footer.links.fbamsz')"
                            href="#!"
                        />
                        <FooterLink
                            :icon="LockClosedIcon"
                            :label="useTrans('footer.links.mnb')"
                            href="#!"
                        />
                    </div>
                </div>

                <div class="flex flex-shrink-0 justify-end">
                    <img
                        src="/img/fbamsz.png"
                        alt=""
                        class="block size-[58px]"
                    />
                </div>
            </div>

            <div class="mt-6 text-xs">
                <p>{{ useTrans('footer.copyright') }}</p>
            </div>
        </AppContainer>
    </footer>
</template>
