<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Tentang" />

    <PublicLayout>

        <!-- Banner -->
        <section class="w-full flex justify-center items-center bg-white pt-10 pb-4 px-6">
            <img
                src="/Banner-GerakanOpenIndonesia.png"
                alt="Banner Gerakan Open Indonesia"
                class="w-full max-w-4xl h-auto object-contain"
            />
        </section>

        <!-- Content -->
        <section class="max-w-5xl mx-auto px-6 py-12 space-y-6 text-black">

            <h1 class="text-4xl font-bold mb-8" style="color: #1E6C93;">Tentang</h1>


            <p class="text-base leading-relaxed">
                Gerakan Terbuka adalah istilah umum untuk konsep bahwa pengetahuan harus tersedia secara bebas untuk semua orang, dan bahwa pengetahuan harus dibagikan, dikembangkan, dan diperkaya dengan cara yang "terbuka" dan kolaboratif, bebas dari hambatan teknis dan hukum yang membatasi. Gerakan ini mencakup pendidikan terbuka, akses terbuka, data terbuka, warisan budaya terbuka, perangkat lunak sumber terbuka dan bebas.
            </p>

            <p class="text-base leading-relaxed">
                Di Indonesia, gerakan ini masih menghadapi sejumlah tantangan yang signifikan. Salah satu hambatan utama adalah kesenjangan digital (<em>digital divide</em>) di mana infrastruktur teknologi dan internet belum tersebar merata, sehingga masih ada sebagian masyarakat belum dapat menikmati manfaat informasi dan layanan terbuka. Selain itu, keterbatasan sumber daya dan kebijakan yang belum sepenuhnya mendukung inisiatif akses terbuka turut memperlambat kemajuan di bidang ini.
            </p>

            <p class="text-base leading-relaxed">
                Ditambah tantangan belum adanya dukungan dan pemahaman dari masyarakat, minim dukungan dari pihak terkait, hingga inisiatif dari organisasi-organisasi yang bergerak pada isu Gerakan Terbuka masih tersebar, parsial, dan belum membentuk kekuatan bersama, ini bisa ditandai dengan minim koordinasi atau pertukaran pengalaman antar organisasi. Akibatnya, potensi sinergi tidak termanfaatkan secara optimal, dan upaya advokasi kebijakan menjadi kurang terkoordinasi.
            </p>

            <p class="text-base leading-relaxed">
                Oleh karena itu, diperlukan kolaborasi yang erat antara pemangku kepentingan seperti pelaku gerakan terbuka, pemerintah, serta masyarakat untuk memperluas gerakan terbuka secara lebih inklusif dan merata.
            </p>

            <p class="text-base leading-relaxed">
                Koalisi Open Indonesia adalah sebuah koalisi dari beberapa organisasi yang mengusung Gerakan Terbuka di Indonesia. Koalisi ini hadir diinisiasi dengan pertemuan pertama pada Forum Gerakan Terbuka "Open Indonesia" yang dilaksanakan di Bandung 16–17 Juni 2026. Pertemuan ini menghasilkan sebuah peta jalan bagi Gerakan Terbuka di Indonesia.
            </p>

            <hr class="border-t border-gray-300 my-8" />

            <!-- Visi -->
            <div>
                <h2 class="text-xl font-bold mb-3" style="color: #1E6C93;">Visi</h2>
                <p class="text-base leading-relaxed">
                    Menjadi ekosistem kolaboratif yang mendorong keterbukaan sebagai fondasi tata kelola yang inklusif, transparan, dan berkeadilan di Indonesia.
                </p>
            </div>

            <!-- Tujuan -->
            <div>
                <h2 class="text-xl font-bold mb-4" style="color: #1E6C93;">Tujuan</h2>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Memperkuat sinergi antar pemangku kepentingan dalam gerakan keterbukaan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Mengawal implementasi Peta Jalan Gerakan Terbuka secara berkelanjutan.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Mendorong inovasi, dokumentasi, dan diseminasi praktik baik.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Menjadi ruang pembelajaran, advokasi, dan pengembangan kapasitas.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Menyediakan mekanisme pemantauan dan evaluasi kolektif.</span>
                    </li>
                </ul>
            </div>

            <hr class="border-t border-gray-300 my-8" />

            <!-- Bergabung Koalisi -->
            <div>
                <h2 class="text-4xl font-bold mb-8" style="color: #1E6C93;">Bergabung Koalisi Open Indonesia</h2>
                <p class="text-base leading-relaxed">
                    Organisasi Anda adalah salah satu sektor dari keterbukaan (openness) di Indonesia? Mari bergabung bersama untuk berdampak lebih demi pengetahuan terbuka di Indonesia
                </p>
                <a
                    href="https://forms.gle/2rnjhmctjWXcGLkHA"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="inline-block mt-6 px-6 py-3 rounded-lg text-white font-semibold hover:opacity-90 transition-opacity"
                    style="background-color: #1E6C93;"
                >
                    Gabung Koalisi Open Indonesia
                </a>
            </div>

        </section>

    </PublicLayout>
</template>
