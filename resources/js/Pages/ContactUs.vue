<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import { onMounted } from 'vue';
import { useTrans } from '@/composables/trans';
import ContactSection from '@/Components/ContactSection.vue';
import { EnvelopeIcon, MapPinIcon, PhoneIcon } from '@heroicons/vue/24/outline';
import L from 'leaflet';

const mapSettings = {
    x: 47.509389405424585,
    y: 19.082308455009944,
    zoom: 16,
};

// Function to initialize the map
const initMap = () => {
    const map = L.map('map', {
        scrollWheelZoom: false,
    }).setView([mapSettings.x, mapSettings.y], mapSettings.zoom); // Set initial view [latitude, longitude] and zoom level

    // Add OpenStreetMap tile layer
    L.tileLayer('https://{s}.tile.openstreetmap.fr/hot/{z}/{x}/{y}.png', {
        maxZoom: 19,
        // attribution: '© OpenStreetMap',
        attribution:
            '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Tiles style by <a href="https://www.hotosm.org/" target="_blank">Humanitarian OpenStreetMap Team</a> hosted by <a href="https://openstreetmap.fr/" target="_blank">OpenStreetMap France</a>',
    }).addTo(map);

    // Add a marker
    L.marker([mapSettings.x, mapSettings.y]).addTo(map);

    // Custom zoom behavior with Ctrl + scroll
    map.on('wheel', (e) => {
        if (e.ctrlKey) {
            e.preventDefault(); // Prevent default scroll behavior
            if (e.deltaY < 0) {
                map.zoomIn(); // Zoom in
            } else {
                map.zoomOut(); // Zoom out
            }
        }
    });
};

onMounted(() => {
    initMap();
});
</script>

<template>
    <AppLayout :title="useTrans('header.contact')">
        <AppContainer>
            <div id="map" class="h-[400px] w-full rounded-xl"></div>

            <div
                class="my-12 grid gap-y-8 lg:grid-cols-3 lg:gap-x-8 lg:gap-y-0"
            >
                <div>
                    <ContactSection
                        :icon="EnvelopeIcon"
                        :title="useTrans('footer.email.label')"
                        :subtitle="useTrans('footer.email.subtitle')"
                    >
                        <template #content>
                            <a
                                :href="`mailto:${useTrans('footer.email.address')}`"
                                >{{ useTrans('footer.email.address') }}</a
                            >
                        </template>
                    </ContactSection>
                </div>
                <div>
                    <ContactSection
                        :icon="MapPinIcon"
                        :title="useTrans('footer.office.label')"
                        :subtitle="useTrans('footer.office.subtitle')"
                    >
                        <template #content>
                            <p>{{ useTrans('footer.office.address') }}</p>
                        </template>
                    </ContactSection>
                </div>
                <div>
                    <ContactSection
                        :icon="PhoneIcon"
                        :title="useTrans('footer.phone.label')"
                        :subtitle="useTrans('footer.open_hours.time')"
                    >
                        <template #content>
                            <p>{{ useTrans('footer.phone.number') }}</p>
                        </template>
                    </ContactSection>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
