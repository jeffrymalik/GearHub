@extends('layouts.app')

@section('title', 'Kontak & Lokasi Hub - GearHub Perbanas Institute')
@section('meta_description', 'Hubungi tim GearHub Perbanas Institute untuk pertanyaan ketersediaan peralatan, kerjasama kegiatan mahasiswa, atau panduan serah-terima di Unit VI Lantai 1.')

@section('content')
<!-- 1. HERO BANNER WITH CAMPUS BACKGROUND -->
<section class="relative bg-[#0c1e3d] text-white py-12 md:py-16 overflow-hidden">
    <!-- Campus Building Backdrop -->
    <div class="absolute inset-0 bg-cover bg-right md:bg-center opacity-30 mix-blend-luminosity pointer-events-none" style="background-image: url('/images/hero-campus.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#0c1e3d] via-[#0c1e3d]/90 to-transparent pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-3">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-xs text-blue-200/80 mb-2" aria-label="Breadcrumb">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                <span class="text-blue-300/60">&gt;</span>
                <span class="text-white font-medium">Kontak</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight font-['Space_Grotesk']">
                Kontak &amp; Lokasi Hub
            </h1>

            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                Ada pertanyaan seputar ketersediaan unit, kerjasama kegiatan ormawa, atau konfirmasi serah-terima alat? Tim GearHub siap membantu.
            </p>
        </div>
    </div>
</section>

<!-- 2. MAIN LAYOUT: CONTACT DETAILS + INTERACTIVE FORM -->
<div class="bg-slate-50/70 min-h-screen py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT COLUMN: Contact Details & Campus Counter Info (5 cols) -->
            <div class="lg:col-span-5 space-y-6">
                
                <!-- Counter & Location Box -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm space-y-5">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 shadow-sm">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[11px] font-bold text-blue-600 uppercase tracking-wider block">Lokasi Serah-Terima</span>
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 font-['Space_Grotesk']">
                                Unit Sarana dan Prasarana
                            </h2>
                            <p class="text-xs text-slate-500 mt-0.5">
                                Perbanas Institute Kampus Jakarta
                            </p>
                        </div>
                    </div>

                    <!-- Campus Image Banner -->
                    <div class="rounded-xl overflow-hidden border border-slate-200 h-40 relative group">
                        <img src="/images/hero-campus.jpg" alt="Gedung Unit VI Perbanas Institute" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent flex items-end p-3.5">
                            <div class="text-white">
                                <span class="text-xs font-bold block">Gedung Unit VI Lantai 1</span>
                                <span class="text-[10px] text-slate-300 block">Area Pelayanan Kemahasiswaan &amp; Logistik</span>
                            </div>
                        </div>
                    </div>

                    <!-- Address & Hours List -->
                    <div class="space-y-3.5 text-xs text-slate-600 pt-1">
                        <div class="flex items-start gap-3">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <div>
                                <strong class="text-slate-900 block">Alamat Kampus:</strong>
                                <span>Gedung Unit VI Lantai 1, Jl. Perbanas, Karet Kuningan, Setiabudi, Jakarta Selatan 12940</span>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 pt-2 border-t border-slate-100">
                            <svg class="w-4 h-4 text-blue-600 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                            <div>
                                <strong class="text-slate-900 block">Jam Operasional Pelayanan:</strong>
                                <span>Senin - Jumat: 08.00 - 17.00 WIB</span>
                                <span class="text-[11px] text-slate-400 block mt-0.5">(Sabtu, Minggu, dan Libur Nasional Tutup)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Direct Contact Channels Card -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm space-y-4">
                    <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider">
                        Kanal Komunikasi Langsung
                    </h3>

                    <!-- Email -->
                    <div class="flex items-center gap-3.5">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="overflow-hidden">
                            <span class="text-[11px] text-slate-400 block">Email Resmi</span>
                            <a href="mailto:gearhub@perbanas.ac.id" class="text-xs sm:text-sm font-bold text-slate-900 hover:text-blue-600 transition-colors truncate block">
                                gearhub@perbanas.ac.id
                            </a>
                        </div>
                    </div>

                    <!-- WhatsApp -->
                    <div class="flex items-center gap-3.5 pt-3 border-t border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.81 13.47 3.81 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[11px] text-slate-400 block">WhatsApp Hotline</span>
                            <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="text-xs sm:text-sm font-bold text-slate-900 hover:text-emerald-600 transition-colors">
                                +62 812-3456-7890
                            </a>
                        </div>
                    </div>

                    <!-- Telepon Kampus -->
                    <div class="flex items-center gap-3.5 pt-3 border-t border-slate-100">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[11px] text-slate-400 block">Telepon Kampus</span>
                            <span class="text-xs sm:text-sm font-bold text-slate-900">+62 21-525-2533 (Ext. Sarana Prasarana)</span>
                        </div>
                    </div>
                </div>

                <!-- Info Box for Ormawa -->
                <div class="bg-gradient-to-r from-blue-50 to-sky-50/60 border border-blue-100 rounded-2xl p-5 text-xs text-slate-600 space-y-2">
                    <div class="flex items-center gap-2 text-blue-700 font-bold">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="16" x2="12" y2="12"></line>
                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                        </svg>
                        <span>Peminjaman Ormawa &amp; Kepanitiaan</span>
                    </div>
                    <p class="leading-relaxed">
                        Untuk peminjaman dalam jumlah besar atau kebutuhan acara kampus (BEM, HIMA, UKM), silakan lampirkan surat izin/proposal kegiatan saat berkunjung ke Unit VI Lantai 1.
                    </p>
                </div>

            </div>

            <!-- RIGHT COLUMN: Interactive Contact / Inquiry Form (7 cols) -->
            <div class="lg:col-span-7 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-8 md:p-10 shadow-sm space-y-6">
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                        Kirim Pesan / Pengajuan Sewa
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Isi formulir berikut dan petugas admin Sarana Prasarana akan segera menghubungi Anda.
                    </p>
                </div>

                <form id="contact-page-form" class="space-y-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="contact-name" class="block text-xs font-semibold text-slate-700 mb-1.5">Nama Lengkap</label>
                            <input 
                                type="text" 
                                id="contact-name" 
                                required 
                                placeholder="Contoh: Budi Santoso" 
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                            >
                        </div>
                        <div>
                            <label for="contact-nim" class="block text-xs font-semibold text-slate-700 mb-1.5">NIM Mahasiswa</label>
                            <input 
                                type="text" 
                                id="contact-nim" 
                                required 
                                placeholder="Contoh: 211200123" 
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                            >
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div>
                            <label for="contact-wa" class="block text-xs font-semibold text-slate-700 mb-1.5">No. WhatsApp Aktif</label>
                            <input 
                                type="tel" 
                                id="contact-wa" 
                                required 
                                placeholder="Contoh: 081234567890" 
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                            >
                        </div>
                        <div>
                            <label for="contact-topic" class="block text-xs font-semibold text-slate-700 mb-1.5">Kategori Pertanyaan / Pengajuan</label>
                            <select 
                                id="contact-topic" 
                                class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs sm:text-sm text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                            >
                                <option value="booking">Pertanyaan Pemesanan Peralatan</option>
                                <option value="ormawa">Penyewaan Ormawa / Event Kampus</option>
                                <option value="lokasi">Pengambilan / Pengembalian (Unit VI Lt 1)</option>
                                <option value="pembayaran">Konfirmasi Pembayaran</option>
                                <option value="lainnya">Pertanyaan Umum Lainnya</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="contact-org" class="block text-xs font-semibold text-slate-700 mb-1.5">Organisasi / Kepanitiaan (Opsional)</label>
                        <input 
                            type="text" 
                            id="contact-org" 
                            placeholder="Contoh: BEM Perbanas / HIMA Manajemen / UKM Musik" 
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                        >
                    </div>

                    <div>
                        <label for="contact-message" class="block text-xs font-semibold text-slate-700 mb-1.5">Pesan / Rincian Kebutuhan Peralatan</label>
                        <textarea 
                            id="contact-message" 
                            rows="4" 
                            required 
                            placeholder="Tuliskan jenis alat yang ingin disewa, tanggal kegiatan, serta keperluan acara Anda secara singkat..." 
                            class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:bg-white focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                        ></textarea>
                    </div>

                    <button 
                        type="submit" 
                        id="submit-contact-btn"
                        class="w-full py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs sm:text-sm transition-all shadow-md shadow-blue-500/20 flex items-center justify-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600"
                    >
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        <span>Kirim Pesan ke Admin</span>
                    </button>
                </form>

                <!-- Success Confirmation Alert -->
                <div id="contact-success-msg" class="hidden p-4 rounded-xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs sm:text-sm font-medium space-y-1">
                    <div class="flex items-center gap-2 font-bold text-emerald-900">
                        <svg class="w-4 h-4 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Pesan Berhasil Terkirim!</span>
                    </div>
                    <p class="text-xs text-emerald-700 leading-relaxed">
                        Terima kasih. Formulir Anda telah tercatat dan tim Sarana Prasarana akan segera menghubungi nomor WhatsApp Anda.
                    </p>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const form = document.getElementById('contact-page-form');
        const successMsg = document.getElementById('contact-success-msg');
        const submitBtn = document.getElementById('submit-contact-btn');

        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                    <span>Mengirim pesan...</span>
                `;

                setTimeout(() => {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = `
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        <span>Kirim Pesan ke Admin</span>
                    `;
                    form.reset();
                    successMsg.classList.remove('hidden');
                    successMsg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                }, 800);
            });
        }
    });
</script>
@endpush
