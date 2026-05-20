<script setup lang="ts">
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue';

const page = usePage();
const mobileOpen = ref(false);

const navItems = [
    { label: 'Beranda', href: '/' },
    { label: 'Tentang', href: '/tentang' },
    { label: 'Manifesto', href: '/manifesto' },
    { label: 'Aktivitas', href: '/aktivitas' },
];

const currentPath = computed(() => {
    const url = page.url;
    return url === '/' ? '/' : '/' + url.split('/').filter(Boolean)[0];
});

function isActive(href: string) {
    return currentPath.value === href;
}
</script>

<template>
    <div class="min-h-screen flex flex-col bg-white text-black font-sans">

        <!-- Header -->
        <header class="sticky top-0 z-50 bg-white border-b border-gray-200">
            <div class="max-w-6xl mx-auto px-6 py-4 flex items-center justify-between">
                <Link href="/" class="flex-shrink-0">
                    <img
                        src="/logo-oi/Open_Indonesia_-_Logo.png"
                        alt="Open Indonesia - Forum Gerakan Terbuka"
                        class="h-16 w-auto"
                    />
                </Link>
                <nav class="hidden md:flex items-center gap-8">
                    <Link
                        v-for="item in navItems"
                        :key="item.href"
                        :href="item.href"
                        class="text-sm font-medium transition-colors"
                        :style="isActive(item.href) ? 'color: #1E6C93;' : ''"
                        :class="isActive(item.href) ? 'font-semibold' : 'text-black hover:text-gray-500'"
                    >
                        {{ item.label }}
                    </Link>
                </nav>
                <!-- Mobile menu button -->
                <button class="md:hidden p-2" aria-label="Menu" @click="mobileOpen = !mobileOpen">
                    <svg v-if="!mobileOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg v-else class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </header>

        <!-- Mobile overlay -->
        <transition name="fade">
            <div
                v-if="mobileOpen"
                class="fixed inset-0 z-40 bg-black/30 md:hidden"
                @click="mobileOpen = false"
            />
        </transition>

        <!-- Mobile drawer (right side) -->
        <transition name="slide-right">
            <div
                v-if="mobileOpen"
                class="fixed top-0 right-0 z-50 h-full w-64 bg-white shadow-xl md:hidden flex flex-col"
            >
                <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
                    <img src="/logo-oi/Icon-logo.png" alt="Open Indonesia" class="h-8 w-auto" />
                    <button @click="mobileOpen = false" aria-label="Tutup menu">
                        <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <nav class="flex flex-col px-6 py-4 gap-1">
                    <Link
                        v-for="item in navItems"
                        :key="item.href"
                        :href="item.href"
                        class="py-3 px-3 rounded-md text-sm font-medium transition-colors"
                        :style="isActive(item.href) ? 'color: #1E6C93;' : ''"
                        :class="isActive(item.href) ? 'font-semibold bg-blue-50' : 'text-black hover:bg-gray-50'"
                        @click="mobileOpen = false"
                    >
                        {{ item.label }}
                    </Link>
                </nav>
            </div>
        </transition>

        <!-- Page content -->
        <main class="flex-1">
            <slot />
        </main>

        <!-- Footer -->
        <footer style="background-color: #1E6C93;" class="text-white">
            <div class="max-w-6xl mx-auto px-6 py-12">
                <div class="flex flex-col lg:flex-row items-start lg:items-center justify-between gap-8">
                    <!-- Address block -->
                    <div class="flex-1">
                        <p class="font-semibold text-base mb-3">
                            Open Indonesia adalah koalisi dari sejumlah gerakan terbuka di Indonesia.
                        </p>
                        <p class="text-sm text-blue-100 leading-relaxed">
                            Sekretariat @ Wikimedia Indonesia<br />
                            TCC Batavia Tower One, Lt. 6. Jalan K.H. Mas Mansyur No. 126<br />
                            Karet Tengsin, Tanah Abang. Jakarta Pusat 10220<br />
                            Indonesia
                        </p>
                    </div>
                    <!-- Social Media Icons -->
                    <div class="flex items-center gap-4">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/open.indonesia" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-white hover:text-blue-200 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                        <!-- LinkedIn -->
                        <a href="https://www.linkedin.com/company/open-indonesia/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="text-white hover:text-blue-200 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <!-- Email -->
                        <a href="#" aria-label="Email" class="text-white hover:text-blue-200 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-8 pt-6 border-t border-blue-400">
                    <p class="text-xs text-blue-200 text-center">
                        © 2026 Open Indonesia. Semua konten situs ini dirilis di bawah Lisensi Creative Commons Attribution-ShareAlike kecuali dinyatakan lain.
                    </p>
                </div>
            </div>
        </footer>

    </div>
</template>

<style scoped>
.fade-enter-active, .fade-leave-active { transition: opacity 0.2s ease; }
.fade-enter-from, .fade-leave-to { opacity: 0; }

.slide-right-enter-active, .slide-right-leave-active { transition: transform 0.25s ease; }
.slide-right-enter-from, .slide-right-leave-to { transform: translateX(100%); }
</style>
