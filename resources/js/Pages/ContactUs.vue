<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AppContainer from '@/Components/AppContainer.vue';
import { onMounted } from 'vue';
import { useTrans } from '@/composables/trans';

import { EnvelopeIcon, MapPinIcon, PhoneIcon } from '@heroicons/vue/24/solid';
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
    <AppLayout>
        <div id="map" class="h-[600px] w-full"></div>

        <AppContainer>
            <div class="mt-6 grid grid-cols-2 gap-x-8">
                <div>
                    <h2 class="text-lg font-semibold">
                        <MapPinIcon
                            class="mr-1 inline-block size-6 flex-shrink-0 text-black"
                        />

                        <span>{{ useTrans('company_name') }}</span>
                    </h2>
                    <p class="text-sm">
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
                </div>

                <div class="">
                    <p>
                        <PhoneIcon
                            class="mr-1 inline-block size-4 flex-shrink-0 text-black"
                        />
                        <span>{{ useTrans('footer.phone') }}</span>
                    </p>
                    <p>
                        <EnvelopeIcon
                            class="mr-1 inline-block size-4 flex-shrink-0 text-black"
                        />
                        <span>{{ useTrans('footer.email') }}</span>
                    </p>
                </div>
            </div>
        </AppContainer>
    </AppLayout>
</template>
