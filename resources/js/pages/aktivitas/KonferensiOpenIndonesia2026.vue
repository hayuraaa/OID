<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import PublicLayout from '@/layouts/PublicLayout.vue';

const jadwal = [
    { waktu: '09.00–09.15', acara: 'Registrasi' },
    { waktu: '09.15–09.30', acara: 'Pembukaan' },
    {
        waktu: '09.30–10.00',
        acara: 'Keynote Speaker',
        detail: 'Prof. Dr. Arif Satria, BRIN',
    },
    {
        waktu: '10.00–11.00',
        acara: 'Panel I: Merajut Manfaat Keterbukaan untuk Semua',
        sub: [
            'Akses Terbuka untuk Pendidikan Berkualitas — Dr. Dasapta Erwin Irawan, Institut Teknologi Bandung',
            'Kolaborasi Pendidik dalam Pengetahuan Terbuka — Prayitno, Ph.D, SEAMEO SEAMOLEC',
            'Kebijakan Sains Terbuka dan Transparansi — Hendro Subagyo, M.Eng, BRIN',
            'Lanskap Open Access Journal di Indonesia — Dr. Zulidyana D. Rusnalasari, M.Hum, Relawan Jurnal Indonesia',
        ],
        moderator: 'Ramzy Muliawan, Wikimedia Foundation',
    },
    {
        waktu: '11.00–12.00',
        acara: 'Panel II: Tantangan dan Aksi untuk Masa Depan',
        sub: [
            'Membangun Literasi Digital dan Riset Terbuka — Prof. Dr. Juneman Abraham, S.PSi., M.Si., BINUS University',
            'Keberlanjutan Relawan: Tantangan dan Aksi — Riyadi Wibowo, Perkumpulan OpenStreetMap Indonesia',
            'Mendorong Keterbukaan GLAM: Inisiasi dan Kesadaran — Widiatmoko Adi Putranto S.S., M.L.I.M., Laboratorium Preservasi Arsip UGM',
            'Mengadopsi OSS: Tantangan dan Solusi — Lidya Christina, Komunitas Mozilla Indonesia',
        ],
        moderator: 'Hardiansyah, Wikimedia Indonesia',
    },
    { waktu: '12.00–13.00', acara: 'Istirahat, Makan Siang, dan Berjejaring' },
    {
        waktu: '13.00–15.00',
        acara: 'Sesi Paralel',
        sub: [
            {
                label: 'Mengenal Lisensi Bebas dan Domain Publik',
                sub: [
                    'Lisensi data terbuka dalam pemenuhan data spasial di Indonesia — Riyadi Wibowo, OpenStreetMap Indonesia',
                    'Lisensi Creative Commons — Harsa Wahyu Ramadhan, Creative Commons Indonesia',
                ],
            },
            'Meninjau kebijakan gerakan terbuka di Indonesia — Ari Juliano Gema, Creative Commons Indonesia & Dr. Agung Damarsasongko, S.H., M.H., Direktorat Hak Cipta dan Desain Industri, Kementerian Hukum RI',
            'Rekomendasi Open Science UNESCO: Implementasi dan Evaluasi — Wagiyah, M.Sc., BRIN',
        ],
    },
];
</script>

<template>
    <Head title="Konferensi Open Indonesia 2026" />

    <PublicLayout>

        <section class="max-w-5xl mx-auto px-6 py-16 space-y-6 text-black">

            <h1 class="text-4xl font-bold mb-8" style="color: #1E6C93;">Konferensi Open Indonesia 2026</h1>

            <!-- Foto dua kolom -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-2">
                <img
                    src="/img/aktivitas/Konferensi%20Open%20Indonesia1.png"
                    alt="Konferensi Open Indonesia 2026 - Foto 1"
                    class="w-full rounded-lg object-cover aspect-[3/4]"
                />
                <img
                    src="/img/aktivitas/Konferensi%20Open%20Indonesia2.png"
                    alt="Konferensi Open Indonesia 2026 - Foto 2"
                    class="w-full rounded-lg object-cover aspect-[3/4]"
                />
            </div>

            <hr class="border-t border-gray-300 my-4" />

            <!-- Deskripsi -->
            <p class="text-base leading-relaxed">
                Open Indonesia pertama kali berkumpul pada tahun 2025 sebagai sebuah inisiatif bersama untuk membangun ekosistem gerakan terbuka yang lebih baik dan maju di Indonesia. Pertemuan tersebut mempertemukan berbagai komunitas, organisasi, akademisi, dan masyarakat sipil yang memiliki kepedulian terhadap keterbukaan pengetahuan, data, budaya, dan teknologi. Dari sinilah lahir komitmen kolektif untuk memperkuat kolaborasi lintas sektor dan memastikan gerakan terbuka menjadi bagian penting dari pembangunan bangsa.
            </p>

            <p class="text-base leading-relaxed">
                Sebagai tindak lanjut, telah disusun sebuah Peta Jalan Open Indonesia yang memetakan arah strategis bagi keterbukaan di Indonesia. Salah satu langkah utama dalam roadmap tersebut adalah penyelenggaraan Konferensi Open Indonesia, yang dirancang sebagai ruang pertemuan untuk membahas tantangan, berbagi praktik baik, dan menyusun strategi bersama. Konferensi ini menjadi simbol komitmen bahwa keterbukaan bukan sekadar wacana, melainkan gerakan nyata yang membutuhkan dukungan kebijakan, jejaring, dan kapasitas kolektif.
            </p>

            <p class="text-base leading-relaxed">
                Dengan format satu hari penuh, Konferensi Open Indonesia 2026 diharapkan menjadi platform strategis untuk menyatukan suara komunitas, memperkuat advokasi kebijakan, serta membangun kolaborasi berkelanjutan. Melalui konferensi ini, gerakan terbuka di Indonesia dapat semakin dikenal luas, lebih inklusif, dan mampu memberikan dampak nyata bagi pendidikan, penelitian, budaya, dan masyarakat secara keseluruhan.
            </p>

            <hr class="border-t border-gray-300 my-4" />

            <!-- Info acara -->
            <div class="space-y-1">
                <p class="text-base font-semibold">Konferensi Open Indonesia 2026 dilaksanakan pada:</p>
                <p class="text-base leading-relaxed">Rabu, 24 Juni 2026</p>
                <p class="text-base leading-relaxed">BRIN Grand Ballroom, Gedung Widya Graha</p>
                <p class="text-base leading-relaxed">Lantai 2, Jalan Jenderal Gatot Subroto Kav. 10, Jakarta</p>
            </div>

            <hr class="border-t border-gray-300 my-4" />

            <!-- Susunan acara -->
            <div>
                <p class="text-base font-semibold mb-4">Susunan Acara</p>
                <ul class="space-y-4">
                    <li
                        v-for="(item, index) in jadwal"
                        :key="index"
                        class="flex items-start gap-3"
                    >
                        <span class="mt-1.5 w-2 h-2 rounded-full flex-shrink-0" style="background-color: #1E6C93;"></span>
                        <div class="text-base leading-relaxed">
                            <span class="font-semibold">{{ item.waktu }}</span>
                            &nbsp;—&nbsp;{{ item.acara }}
                            <span v-if="item.moderator" class="text-gray-500 text-sm"> (Moderator: {{ item.moderator }})</span>
                            <span v-if="item.detail" class="text-gray-600"> — {{ item.detail }}</span>
                            <ul v-if="item.sub" class="mt-2 space-y-1 ml-4">
                                <li
                                    v-for="(s, si) in item.sub"
                                    :key="si"
                                    class="flex items-start gap-2 text-sm text-gray-700"
                                >
                                    <span class="mt-1.5 w-1.5 h-1.5 rounded-full flex-shrink-0 bg-gray-400"></span>
                                    <div>
                                        {{ typeof s === 'string' ? s : s.label }}
                                        <ul v-if="typeof s === 'object' && s.sub" class="mt-1 space-y-1 ml-4">
                                            <li
                                                v-for="(ss, ssi) in s.sub"
                                                :key="ssi"
                                                class="flex items-start gap-2 text-sm text-gray-500"
                                            >
                                                <span class="mt-1.5 w-1 h-1 rounded-full flex-shrink-0 bg-gray-300"></span>
                                                {{ ss }}
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </section>

    </PublicLayout>
</template>
