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
            <div class="grid grid-cols-12">
                <div class="col-span-9">
                    <iframe
                        src="https://igenyfelmero.rendelesem.hu/index.php?page=megbiz&template_override=coreui_full_standalone#?page=megbiz"
                        class="h-[1100px] w-full"
                        frameborder="0"
                    />
                </div>

                <div class="col-span-3 space-y-2">
                    <AppButton size="sm" class="w-full">
                        <ArrowDownTrayIcon class="size-4 shrink-0" />
                        <span>{{ useTrans('contract.tos') }}</span>
                    </AppButton>

                    <AppButton size="sm" class="w-full">
                        <ArrowDownTrayIcon class="size-4 shrink-0" />
                        <span>{{ useTrans('contract.privacy_policy') }}</span>
                    </AppButton>

                    <AppButton size="sm" class="w-full">
                        <ArrowDownTrayIcon class="size-4 shrink-0" />
                        <span>{{ useTrans('contract.e_marketing') }}</span>
                    </AppButton>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
