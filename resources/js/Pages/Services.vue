<script setup>
import AppCollapse from '@/Components/AppCollapse.vue';
import AppContainer from '@/Components/AppContainer.vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import AppButton from '@/Components/AppButton.vue';
import {
    ArrowTrendingUpIcon,
    ChartBarSquareIcon,
    GlobeEuropeAfricaIcon,
    WrenchScrewdriverIcon,
    MapPinIcon,
    SunIcon,
    PresentationChartLineIcon,
    PlusIcon,
    TrophyIcon,
    BriefcaseIcon,
} from '@heroicons/vue/24/outline';
import { ArrowRightIcon, ArrowDownTrayIcon } from '@heroicons/vue/20/solid';
import { useTrans } from '@/composables/trans';

// Define services array
const services = {
    left: [
        {
            icon: ArrowTrendingUpIcon,
            title: useTrans('services.audit.title'),
            headline: useTrans('services.audit.headline'),
            description: [useTrans('services.audit.description')],
            items: [
                useTrans('services.audit.payment_status'),
                useTrans('services.audit.overview'),
            ],
        },
        {
            icon: ChartBarSquareIcon,
            title: useTrans('services.tender.title'),
            items: [
                useTrans('services.tender.proposals'),
                useTrans('services.tender.coverage'),
            ],
        },
        {
            icon: WrenchScrewdriverIcon,
            title: useTrans('services.legal_changes.title'),
            items: [useTrans('services.legal_changes.options')],
        },
        {
            icon: MapPinIcon,
            title: useTrans('services.premium_payment.title'),
            items: [
                useTrans('services.premium_payment.monitor'),
                useTrans('services.premium_payment.compare'),
            ],
        },
        {
            icon: SunIcon,
            title: useTrans('services.daily_administration.title'),
            items: [useTrans('services.daily_administration.description')],
        },
    ],
    right: [
        {
            icon: PresentationChartLineIcon,
            title: useTrans('services.needs.title'),
            items: [
                useTrans('services.needs.principal'),
                useTrans('services.needs.claims'),
                useTrans('services.needs.assistance'),
                useTrans('services.needs.special'),
                useTrans('services.needs.tools'),
            ],
        },
        {
            icon: TrophyIcon,
            title: useTrans('services.evaluation.title'),
            items: [
                useTrans('services.evaluation.real_risk'),
                useTrans('services.evaluation.compare'),
                useTrans('services.evaluation.questionnaire'),
            ],
        },
        {
            icon: PlusIcon,
            title: useTrans('services.new_options.title'),
            items: [useTrans('services.new_options.monitor')],
        },
        {
            icon: GlobeEuropeAfricaIcon,
            title: useTrans('services.anniversary_renewal.title'),
            items: [useTrans('services.anniversary_renewal.quote')],
        },
        {
            icon: BriefcaseIcon,
            title: useTrans('services.claim_settlement.title'),
            description: [
                useTrans('services.claim_settlement.description'),
                useTrans('services.claim_settlement.heading'),
            ],
            items: [
                useTrans('services.claim_settlement.declaration'),
                useTrans('services.claim_settlement.claim'),
                useTrans('services.claim_settlement.organize'),
                useTrans('services.claim_settlement.cooperation'),
                useTrans('services.claim_settlement.coordination'),
            ],
            footer: [
                useTrans('services.claim_settlement.third_party'),
                useTrans('services.claim_settlement.record'),
            ],
        },
    ],
};

const meta = {
    description: useTrans('services.description'),
    keywords: useTrans('services.keywords'),
};
</script>

<template>
    <AppLayout :title="useTrans('header.services')" :meta-data="meta">
        <AppContainer>
            <div class="grid gap-y-6 md:grid-cols-2 md:gap-x-8">
                <div
                    v-for="key in Object.keys(services)"
                    :key="key"
                    class="space-y-4"
                >
                    <template
                        v-for="service in services[key]"
                        :key="service.title"
                    >
                        <AppCollapse
                            :icon="service.icon"
                            :title="service.title"
                        >
                            <div class="text-sm">
                                <h2 class="mb-2 font-semibold">
                                    {{ service.headline }}
                                </h2>
                                <p
                                    class="mb-2"
                                    v-for="(desc, index) in service.description"
                                    :key="index"
                                >
                                    {{ desc }}
                                </p>
                                <ul class="ml-4">
                                    <li
                                        v-for="(
                                            item, itemIndex
                                        ) in service.items"
                                        :key="itemIndex"
                                        class="flex gap-x-2"
                                    >
                                        <ArrowRightIcon
                                            class="mt-1 size-4 shrink-0 text-monday"
                                        />
                                        <span>{{ item }}</span>
                                    </li>
                                </ul>
                                <p
                                    class="mt-2"
                                    v-for="(desc, index) in service.footer"
                                    :key="index"
                                >
                                    {{ desc }}
                                </p>
                            </div>
                        </AppCollapse>
                    </template>
                </div>

                <!-- Links -->
                <div>
                    <a href="/monday-szolgaltatasi-szabalyzat.pdf">
                        <AppButton>
                            <ArrowDownTrayIcon class="size-4" />
                            <span>{{
                                useTrans('services.pdf_hungarian')
                            }}</span>
                        </AppButton>
                    </a>
                </div>
                <div>
                    <a href="/monday-szolgaltatasi-szabalyzat-eng.pdf">
                        <AppButton>
                            <ArrowDownTrayIcon class="size-4" />
                            <span>{{ useTrans('services.pdf_english') }}</span>
                        </AppButton>
                    </a>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
