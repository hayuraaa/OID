<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';

const activities = [
    {
        type: 'article',
        title: 'Kick-off Koalisi Open Indonesia',
        description: 'Acara kick-off Koalisi Open Indonesia resmi diselenggarakan pada hari Sabtu, 31 Januari 2026 di Yogyakarta. Pertemuan ini dihadiri oleh perwakilan dari sedikitnya delapan organisasi dan komunitas pegiat Gerakan Terbuka (Open Movement) di Indonesia.',
        thumbnail: '/Banner-GerakanOpenIndonesia.png',
        link: 'https://theconversation.com/koalisi-open-indonesia-upaya-kolaboratif-membuka-akses-pengetahuan-untuk-semua-276064',
        label: 'Baca Selengkapnya',
    },
    {
        type: 'video',
        title: 'Forum Gerakan Terbuka "Open Indonesia"',
        description: 'Forum Gerakan Terbuka "Open Indonesia" yang dilaksanakan pada 16–17 Juni 2025 di Bandung. Gerakan Terbuka adalah istilah umum untuk konsep bahwa pengetahuan harus tersedia secara bebas untuk semua orang, dan bahwa pengetahuan harus dibagikan, dikembangkan, dan diperkaya dengan cara yang "terbuka" dan kolaboratif, bebas dari hambatan teknis dan hukum yang membatasi.',
        thumbnail: 'https://img.youtube.com/vi/NTFo4-kOyLs/hqdefault.jpg',
        link: 'https://www.youtube.com/watch?v=NTFo4-kOyLs',
        label: 'Tonton Video',
    },
];
</script>

<template>
    <Head title="Aktivitas" />

    <PublicLayout>

        <section class="max-w-6xl mx-auto px-6 py-16">

            <h1 class="text-4xl font-bold mb-3" style="color: #1E6C93;">Aktivitas</h1>
            <p class="text-base text-gray-500 mb-10">Kumpulan berita, video, dan kegiatan terkini dari Koalisi Open Indonesia.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <a
                    v-for="item in activities"
                    :key="item.title"
                    :href="item.link"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="group flex flex-col border border-gray-200 rounded-lg overflow-hidden hover:shadow-md transition-shadow"
                >
                    <!-- Thumbnail -->
                    <div class="relative overflow-hidden bg-gray-100 aspect-video">
                        <img
                            :src="item.thumbnail"
                            :alt="item.title"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300"
                        />
                        <!-- Play button overlay for videos -->
                        <div v-if="item.type === 'video'" class="absolute inset-0 flex items-center justify-center bg-black/20">
                            <div class="w-14 h-14 rounded-full bg-white/90 flex items-center justify-center shadow-lg">
                                <svg class="w-6 h-6 ml-1" fill="currentColor" viewBox="0 0 24 24" style="color: #1E6C93;">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <!-- Article badge -->
                        <div v-if="item.type === 'article'" class="absolute top-3 left-3">
                            <span class="text-xs font-semibold px-2 py-1 rounded bg-white/90 text-gray-700">Artikel</span>
                        </div>
                        <!-- Video badge -->
                        <div v-if="item.type === 'video'" class="absolute top-3 left-3">
                            <span class="text-xs font-semibold px-2 py-1 rounded bg-white/90 text-gray-700">Video</span>
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col flex-1 p-5">
                        <h2 class="text-base font-bold text-black mb-2 leading-snug group-hover:text-[#1E6C93] transition-colors">
                            {{ item.title }}
                        </h2>
                        <p class="text-sm text-gray-600 leading-relaxed flex-1 line-clamp-3">
                            {{ item.description }}
                        </p>
                        <span class="mt-4 text-sm font-semibold inline-flex items-center gap-1 transition-colors" style="color: #1E6C93;">
                            {{ item.label }}
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </span>
                    </div>
                </a>
            </div>

        </section>

    </PublicLayout>
</template>
