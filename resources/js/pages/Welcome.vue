<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Beranda" />

    <PublicLayout>

        <!-- Hero Section -->
        <section id="beranda" class="max-w-6xl mx-auto px-6 py-16 lg:py-24">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
                <!-- Left: Title -->
                <div class="flex-1 lg:max-w-[48%]">
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight tracking-tight" style="color: #1E6C93;">
                        Membangun Indonesia Inklusif melalui Pengetahuan Terbuka
                    </h1>
                </div>
                <!-- Right: Image -->
                <div class="flex-1 lg:max-w-[52%] w-full">
                    <img
                        src="/Open_Indonesia_2025,_Day_1,_(32).jpg"
                        alt="Open Indonesia Forum Gerakan Terbuka 2025"
                        class="w-full h-auto rounded-lg object-cover shadow-sm"
                    />
                </div>
            </div>
        </section>

        <!-- Divider + Description Section -->
        <section id="tentang" class="max-w-6xl mx-auto px-6 pb-20">
            <hr class="border-t border-gray-400 mb-10" />
            <p class="text-base lg:text-lg leading-relaxed text-black">
                <b>Gerakan terbuka</b> adalah istilah umum untuk konsep bahwa pengetahuan harus tersedia secara bebas untuk semua orang, dan bahwa pengetahuan harus dibagikan, dikembangkan, dan diperkaya dengan cara yang "terbuka" dan kolaboratif, bebas dari hambatan teknis dan hukum yang membatasi. Gerakan ini mencakup <b>Pendidikan Terbuka, Akses Terbuka, Data Terbuka, Warisan Budaya Terbuka, Perangkat Lunak Sumber Terbuka dan Bebas</b>, dan banyak lagi.
            </p>
        </section>

        <!-- Partner Logos Section -->
        <section class="max-w-6xl mx-auto px-6 pb-20">
            <hr class="border-t border-gray-400 mb-10" />
            <div class="flex flex-wrap items-center justify-start gap-6 md:gap-10">
                <a href="https://creativecommons.or.id/" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center opacity-80 hover:opacity-100 transition-opacity">
                    <img src="/logo-oi/Logo_Baru_CCID_(Merah_Putih).png" alt="Creative Commons Indonesia" class="h-12 w-auto object-contain" />
                </a>
                <a href="https://mozilla.or.id/" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center opacity-80 hover:opacity-100 transition-opacity">
                    <img src="/logo-oi/mozilla-indonesia.png" alt="Mozilla Indonesia" class="h-12 w-auto object-contain" />
                </a>
                <a href="https://arsip.sv.ugm.ac.id/fasilitas/lab-preservasi" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center opacity-80 hover:opacity-100 transition-opacity">
                    <img src="/logo-oi/UGM-Laboratorium-preservasi-arsip.png" alt="UGM Laboratorium Preservasi Arsip" class="h-12 w-auto object-contain" />
                </a>
                <a href="https://openstreetmap.or.id/" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center opacity-80 hover:opacity-100 transition-opacity">
                    <img src="/logo-oi/perkumpulan-openstreetmap-indonesia.png" alt="OpenStreetMap Indonesia" class="h-12 w-auto object-contain" />
                </a>
                <a href="https://theconversation.com/id" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center opacity-80 hover:opacity-100 transition-opacity">
                    <img src="/logo-oi/the-conversation-id.png" alt="The Conversation Indonesia" class="h-12 w-auto object-contain" />
                </a>
                <a href="https://wikimedia.or.id/" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center opacity-80 hover:opacity-100 transition-opacity">
                    <img src="/logo-oi/Logo_WMID_2018_Mendatar.png" alt="Wikimedia Indonesia" class="h-12 w-auto object-contain" />
                </a>
            </div>
        </section>

    </PublicLayout>
</template>
