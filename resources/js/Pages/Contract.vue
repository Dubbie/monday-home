<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import AppButton from '@/Components/AppButton.vue';
import { ArrowDownTrayIcon } from '@heroicons/vue/20/solid';
import { useTrans } from '@/composables/trans.js';
</script>

<template>
    <AppLayout :title="useTrans('header.appointment')">
        <AppContainer>
            <p class="mb-2 font-semibold">
                {{ useTrans('contract.documents') }}
            </p>
            <div
                class="flex flex-col gap-y-2 lg:flex-row lg:gap-x-2 lg:gap-y-0"
            >
                <AppButton size="sm">
                    <ArrowDownTrayIcon class="size-4 shrink-0" />
                    <span>{{ useTrans('contract.tos') }}</span>
                </AppButton>

                <AppButton size="sm">
                    <ArrowDownTrayIcon class="size-4 shrink-0" />
                    <span>{{ useTrans('contract.privacy_policy') }}</span>
                </AppButton>

                <AppButton size="sm">
                    <ArrowDownTrayIcon class="size-4 shrink-0" />
                    <span>{{ useTrans('contract.e_marketing') }}</span>
                </AppButton>
            </div>

            <div class="mt-3">
                <iframe
                    src="https://igenyfelmero.rendelesem.hu/index.php?page=megbiz&template_override=coreui_full_standalone#?page=megbiz"
                    class="h-[1100px] w-full"
                    frameborder="0"
                />
            </div>
        </AppContainer>
    </AppLayout>
</template>
