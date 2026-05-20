<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';
</script>

<template>
    <Head title="Manifesto" />

    <PublicLayout>

        <section class="max-w-5xl mx-auto px-6 py-16 space-y-6 text-black">

            <h1 class="text-4xl font-bold mb-8" style="color: #1E6C93;">Manifesto</h1>

            <p class="text-base leading-relaxed">
                Pada saat ini, kita hidup di era pengetahuan mengalir bebas, menembus batas ruang dan waktu, dan menjadi milik bersama seluruh manusia. Namun, Indonesia masih terbelenggu oleh kesenjangan digital yang secara nyata menghalangi jutaan warga untuk berpartisipasi dan mengambil manfaat dari pengetahuan terbuka.
            </p>

            <p class="text-base leading-relaxed">
                Open Indonesia percaya bahwa pengetahuan harus dapat dibagikan, dikembangkan, dan diperkaya secara kolaboratif tanpa hambatan teknis atau hukum yang membatasi.
            </p>

            <p class="text-base leading-relaxed">
                Open Indonesia hadir sebagai wadah kolaborasi untuk menyatukan inisiatif, kapasitas, dan sumber daya organisasi Gerakan Terbuka di Indonesia dalam rangka memajukan nilai dan prinsip Gerakan Terbuka secara kolektif.
            </p>

            <p class="text-base leading-relaxed">
                Kerja-kerja Open Indonesia mencakup Data Terbuka, Sains Terbuka, Akses Terbuka, Pendidikan/Pengetahuan Terbuka, Warisan Budaya Terbuka, Jurnalisme Terbuka, serta Perangkat Lunak Sumber Terbuka dan Bebas.
            </p>

            <hr class="border-t border-gray-300 my-4" />

            <!-- Tujuan -->
            <div>
                <p class="text-base font-semibold mb-4">Open Indonesia bertujuan untuk:</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Membentuk jaringan dan peningkatan sinergi antar organisasi anggota koalisi;</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Memajukan pemahaman komprehensif mengenai lanskap Gerakan Terbuka di Indonesia; dan</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Menyalurkan sumber daya untuk mendukung proyek dan riset terkait Gerakan Terbuka di Indonesia.</span>
                    </li>
                </ul>
            </div>

            <hr class="border-t border-gray-300 my-4" />

            <!-- Prinsip -->
            <div>
                <p class="text-base font-semibold mb-4">Open Indonesia berjalan sesuai dengan prinsip-prinsip berikut:</p>
                <ul class="space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Pengutamaan kepentingan bersama di atas kepentingan individu atau organisasi masing-masing.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Kerja sama secara konstruktif, penuh hormat, dan transparan untuk memperluas pengetahuan terbuka secara inklusif.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Pertemuan dan interaksi koalisi sebagai ruang yang ramah bagi seluruh anggota tanpa terkecuali.</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <span class="text-base leading-relaxed">Pembagian informasi mengenai upaya advokasi dan praktik baik secara tepat waktu untuk memperkuat posisi koalisi.</span>
                    </li>
                </ul>
            </div>

            <hr class="border-t border-gray-300 my-4" />

            <!-- Penutup -->
            <div class="pt-2">
                <p class="text-base text-gray-600">Yogyakarta, 31 Januari 2026</p>
                <p class="text-base font-semibold mt-1">Koalisi Open Indonesia</p>
            </div>

        </section>

    </PublicLayout>
</template>
