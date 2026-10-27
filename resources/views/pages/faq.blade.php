@extends('layouts.app')

@section('title', 'Pertanyaan yang Sering Diajukan (FAQ) - GearHub Perbanas Institute')
@section('meta_description', 'Temukan jawaban atas pertanyaan umum seputar penyewaan peralatan kampus di GearHub Perbanas Institute.')

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
                <span class="text-white font-medium">FAQ</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight font-['Space_Grotesk']">
                Pertanyaan yang Sering Diajukan
            </h1>

            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                Temukan jawaban atas pertanyaan umum seputar penyewaan peralatan kampus di GearHub.
            </p>
        </div>
    </div>
</section>

<!-- MAIN CONTENT WRAPPER -->
<div class="bg-slate-50/70 min-h-screen py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
        
        <!-- 2. SEARCH BAR -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-2xl p-2 sm:p-2.5 border border-slate-200 shadow-sm flex items-center gap-3">
                <div class="pl-3 text-slate-400">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </div>
                <input 
                    type="text" 
                    id="faq-search-input" 
                    placeholder='Cari pertanyaan, misalnya "cara booking" atau "pembayaran"' 
                    class="w-full text-xs sm:text-sm text-slate-800 placeholder-slate-400 bg-transparent border-0 focus:outline-none focus:ring-0 py-2"
                >
                <button 
                    type="button" 
                    id="faq-search-btn" 
                    class="px-5 sm:px-7 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm rounded-xl transition-colors shrink-0 shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600"
                >
                    Cari
                </button>
            </div>
        </div>

        <!-- 3. CATEGORY TABS / PILLS (7 CATEGORIES) -->
        <div class="overflow-x-auto pb-2 -mx-4 px-4 scrollbar-none">
            <div class="flex items-center justify-start lg:justify-center gap-3 min-w-max" id="faq-category-tabs">
                
                <!-- Tab: Semua -->
                <button type="button" data-category="all" class="faq-tab-btn active px-4 py-3 rounded-2xl border border-blue-600 bg-blue-50/60 text-blue-600 flex flex-col items-center justify-center min-w-[120px] transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <div class="w-6 h-6 mb-1 text-blue-600">
                        <svg viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 mx-auto">
                            <rect x="3" y="3" width="7" height="7" rx="1.5"></rect>
                            <rect x="14" y="3" width="7" height="7" rx="1.5"></rect>
                            <rect x="3" y="14" width="7" height="7" rx="1.5"></rect>
                            <rect x="14" y="14" width="7" height="7" rx="1.5"></rect>
                        </svg>
                    </div>
                    <span class="text-xs font-bold leading-tight">Semua</span>
                    <span class="text-[10px] text-blue-500 font-medium">24 pertanyaan</span>
                </button>

                <!-- Tab: Akun -->
                <button type="button" data-category="akun" class="faq-tab-btn px-4 py-3 rounded-2xl border border-slate-200 bg-white text-slate-700 hover:border-slate-300 flex flex-col items-center justify-center min-w-[120px] transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <div class="w-6 h-6 mb-1 text-slate-500 tab-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 mx-auto">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <span class="text-xs font-bold leading-tight">Akun</span>
                    <span class="text-[10px] text-slate-400 font-medium tab-count">5 pertanyaan</span>
                </button>

                <!-- Tab: Pemesanan -->
                <button type="button" data-category="pemesanan" class="faq-tab-btn px-4 py-3 rounded-2xl border border-slate-200 bg-white text-slate-700 hover:border-slate-300 flex flex-col items-center justify-center min-w-[120px] transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <div class="w-6 h-6 mb-1 text-slate-500 tab-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 mx-auto">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <span class="text-xs font-bold leading-tight">Pemesanan</span>
                    <span class="text-[10px] text-slate-400 font-medium tab-count">6 pertanyaan</span>
                </button>

                <!-- Tab: Pembayaran -->
                <button type="button" data-category="pembayaran" class="faq-tab-btn px-4 py-3 rounded-2xl border border-slate-200 bg-white text-slate-700 hover:border-slate-300 flex flex-col items-center justify-center min-w-[120px] transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <div class="w-6 h-6 mb-1 text-slate-500 tab-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 mx-auto">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <span class="text-xs font-bold leading-tight">Pembayaran</span>
                    <span class="text-[10px] text-slate-400 font-medium tab-count">4 pertanyaan</span>
                </button>

                <!-- Tab: Pengambilan & Pengembalian -->
                <button type="button" data-category="pengambilan" class="faq-tab-btn px-4 py-3 rounded-2xl border border-slate-200 bg-white text-slate-700 hover:border-slate-300 flex flex-col items-center justify-center min-w-[140px] transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <div class="w-6 h-6 mb-1 text-slate-500 tab-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 mx-auto">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <span class="text-xs font-bold leading-tight">Pengambilan &amp; Pengembalian</span>
                    <span class="text-[10px] text-slate-400 font-medium tab-count">4 pertanyaan</span>
                </button>

                <!-- Tab: Denda & Kerusakan -->
                <button type="button" data-category="denda" class="faq-tab-btn px-4 py-3 rounded-2xl border border-slate-200 bg-white text-slate-700 hover:border-slate-300 flex flex-col items-center justify-center min-w-[120px] transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <div class="w-6 h-6 mb-1 text-slate-500 tab-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 mx-auto">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <span class="text-xs font-bold leading-tight">Denda &amp; Kerusakan</span>
                    <span class="text-[10px] text-slate-400 font-medium tab-count">3 pertanyaan</span>
                </button>

                <!-- Tab: Lainnya -->
                <button type="button" data-category="lainnya" class="faq-tab-btn px-4 py-3 rounded-2xl border border-slate-200 bg-white text-slate-700 hover:border-slate-300 flex flex-col items-center justify-center min-w-[120px] transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <div class="w-6 h-6 mb-1 text-slate-500 tab-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="w-5 h-5 mx-auto">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                    </div>
                    <span class="text-xs font-bold leading-tight">Lainnya</span>
                    <span class="text-[10px] text-slate-400 font-medium tab-count">2 pertanyaan</span>
                </button>

            </div>
        </div>

        <!-- 4. 2-COLUMN FAQ ACCORDION GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6" id="faq-sections-container">
            
            <!-- CATEGORY 1: AKUN DAN REGISTRASI -->
            <div class="faq-category-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-category="akun">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Akun dan Registrasi</h2>
                        <p class="text-xs text-slate-500">Pertanyaan seputar pendaftaran, verifikasi akun, dan akses sistem.</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <!-- Q1 (Open by default) -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 bg-slate-50/50 hover:bg-slate-50 transition-colors" aria-expanded="true">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Siapa yang dapat mendaftar di GearHub?</span>
                            <svg class="faq-chevron w-4 h-4 text-blue-600 shrink-0 transform rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Hanya mahasiswa aktif Perbanas Institute yang dapat mendaftar di GearHub. Pendaftaran menggunakan NIM, email pribadi, dan data diri lainnya. Akun akan diverifikasi oleh admin sebelum dapat melakukan pemesanan.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Berapa lama proses verifikasi akun?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Proses verifikasi akun oleh admin memakan waktu 1x24 jam kerja. Anda akan menerima notifikasi status akun melalui email atau WhatsApp yang didaftarkan.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apakah bisa menggunakan email non-kampus?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Bisa, Anda dapat menggunakan email pribadi aktif (Gmail, Yahoo, dll). Namun, pastikan NIM dan foto identitas KTM yang diunggah sesuai dengan data kemahasiswaan aktif di Perbanas Institute.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apa yang harus dilakukan jika akun ditolak?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Alasan penolakan (misalnya foto KTM buram atau data NIM tidak sesuai) akan dicantumkan di email notifikasi. Anda dapat memperbarui dokumen melalui menu pendaftaran ulang atau menghubungi admin.
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Bagaimana cara mengubah data profil akun?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Nomor telepon dan alamat dapat diperbarui mandiri di menu Pengaturan Akun. Untuk perubahan nama lengkap dan NIM, silakan hubungi tim Sarana Prasarana Perbanas dengan melampirkan bukti KRS/KTM.
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 2: PEMESANAN -->
            <div class="faq-category-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-category="pemesanan">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Pemesanan</h2>
                        <p class="text-xs text-slate-500">Pertanyaan seputar pemilihan peralatan, booking, dan perubahan jadwal.</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <!-- Q1 (Open by default) -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 bg-slate-50/50 hover:bg-slate-50 transition-colors" aria-expanded="true">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Bagaimana cara melakukan pemesanan?</span>
                            <svg class="faq-chevron w-4 h-4 text-blue-600 shrink-0 transform rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Pilih peralatan pada katalog, tentukan tanggal sewa dan jumlah unit, lalu ajukan pemesanan. Permintaan booking akan diperiksa oleh admin. Setelah disetujui, kamu akan menerima invoice untuk melakukan pembayaran.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apakah bisa memesan lebih dari satu peralatan?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Bisa. Anda dapat memasukkan beberapa unit peralatan sekaligus ke dalam keranjang pemesanan, asalkan tanggal sewa dan pengembalian yang dipilih sama.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apakah bisa mengubah jadwal setelah booking disetujui?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Perubahan jadwal dapat dilakukan sebelum pembayaran diselesaikan dengan menghubungi admin. Jika sudah dibayar, perubahan bergantung pada ketersediaan unit dan persetujuan pengelola.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apakah ada batas maksimal durasi sewa?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Maksimal durasi sewa standar adalah 7 hari berturut-turut. Untuk kegiatan ormawa atau penelitian yang memerlukan waktu lebih lama, silakan lampirkan surat izin resmi.
                        </div>
                    </div>

                    <!-- Q5 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Bagaimana jika peralatan yang saya inginkan tidak tersedia?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Anda dapat memilih rentang tanggal lain pada kalender atau memeriksa rekomendasi alternatif peralatan sejenis di katalog GearHub.
                        </div>
                    </div>

                    <!-- Q6 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Kapan batas waktu pengajuan booking sebelum pemakaian?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Pengajuan booking disarankan minimal H-1 sebelum tanggal pengambilan agar admin dan operator memiliki waktu cukup untuk pengecekan unit dan penerbitan berkas.
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 3: PEMBAYARAN -->
            <div class="faq-category-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-category="pembayaran">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Pembayaran</h2>
                        <p class="text-xs text-slate-500">Pertanyaan seputar metode pembayaran dan konfirmasi pembayaran.</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <!-- Q1 (Open by default) -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 bg-slate-50/50 hover:bg-slate-50 transition-colors" aria-expanded="true">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Metode pembayaran apa saja yang tersedia?</span>
                            <svg class="faq-chevron w-4 h-4 text-blue-600 shrink-0 transform rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Pembayaran dapat dilakukan melalui QRIS, Virtual Account, atau pembayaran manual sesuai arahan admin.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Kapan harus melakukan pembayaran?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Pembayaran dilakukan setelah pemesanan disetujui admin dan invoice diterbitkan. Batas waktu pembayaran maksimal 6 jam sejak invoice terbit.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Bagaimana cara mengunggah bukti pembayaran?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Untuk pembayaran QRIS dan Virtual Account, verifikasi berjalan otomatis. Untuk transfer manual, Anda dapat mengunggah bukti transfer melalui tombol 'Konfirmasi Pembayaran' pada riwayat pemesanan.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apa yang terjadi jika pembayaran tidak dilakukan?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Pemesanan yang melewati batas waktu tanpa pembayaran akan otomatis dibatalkan oleh sistem, dan peralatan akan kembali tersedia untuk disewa mahasiswa lain.
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 4: PENGAMBILAN DAN PENGEMBALIAN (USER REQUEST LOCATION: PERBANAS UNIT VI LANTAI 1) -->
            <div class="faq-category-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-category="pengambilan">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Pengambilan dan Pengembalian</h2>
                        <p class="text-xs text-slate-500">Pertanyaan seputar lokasi, waktu, dan prosedur serah-terima.</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <!-- Q1 (Open by default with explicit location: Perbanas Unit VI Lantai 1) -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 bg-slate-50/50 hover:bg-slate-50 transition-colors" aria-expanded="true">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Di mana lokasi pengambilan dan pengembalian peralatan?</span>
                            <svg class="faq-chevron w-4 h-4 text-blue-600 shrink-0 transform rotate-180 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Pengambilan dan pengembalian peralatan dilakukan di <strong>Unit Sarana dan Prasarana Perbanas Institute, Gedung Unit VI Lantai 1</strong> pada jam operasional kerja yang telah ditentukan (Senin - Jumat, pukul 08.00 - 17.00 WIB).
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apa yang harus dibawa saat mengambil peralatan?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Mahasiswa wajib membawa identitas diri asli (KTM fisik atau KTP/SIM) dan menunjukkan bukti status pemesanan terbayar di akun GearHub kepada petugas operator di Unit VI Lantai 1.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Siapa yang melakukan pengecekan kondisi peralatan?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Pengecekan fisik dan fungsi unit dilakukan bersama-sama antara mahasiswa penyewa dan operator GearHub sebelum penandatanganan formulir serah terima.
                        </div>
                    </div>

                    <!-- Q4 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Bagaimana jika saya terlambat mengembalikan peralatan?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Keterlambatan pengembalian melebihi batas toleransi jam operasional akan dikenakan denda sesuai tarif harian unit yang berlaku.
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 5: DENDA DAN KERUSAKAN -->
            <div class="faq-category-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-category="denda">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-red-50 text-red-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Denda dan Kerusakan</h2>
                        <p class="text-xs text-slate-500">Pertanyaan seputar keterlambatan, kerusakan, dan kehilangan.</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <!-- Q1 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Berapa biaya denda jika terlambat mengembalikan peralatan?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Denda dihitung per hari setara dengan tarif sewa harian unit peralatan tersebut. Rincian denda dapat dilihat pada invoice keterlambatan di akun penyewa.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Bagaimana jika peralatan rusak saat digunakan?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Penyewa wajib segera melapor ke operator saat pengembalian di Unit VI Lantai 1. Biaya perbaikan resmi service center akan dihitung dan menjadi tanggung jawab penyewa jika disebabkan kelalaian.
                        </div>
                    </div>

                    <!-- Q3 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apakah saya harus mengganti jika peralatan hilang?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Ya, penyewa wajib mengganti unit atau aksesoris yang hilang dengan spesifikasi yang setara atau membayar nilai ganti rugi sesuai taksiran resmi pengelola.
                        </div>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 6: LAINNYA -->
            <div class="faq-category-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-category="lainnya">
                <div class="flex items-center gap-3 pb-2 border-b border-slate-100">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Lainnya</h2>
                        <p class="text-xs text-slate-500">Pertanyaan umum lainnya seputar layanan GearHub.</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <!-- Q1 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Apakah ada asuransi untuk peralatan yang disewa?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Saat ini GearHub menyediakan pemeliharaan berkala untuk menjaga keandalan unit. Namun kerusakan akibat kelalaian pemakaian di luar gedung kampus menjadi tanggung jawab penyewa.
                        </div>
                    </div>

                    <!-- Q2 -->
                    <div class="faq-accordion-item border border-slate-200/80 rounded-xl overflow-hidden">
                        <button type="button" class="faq-accordion-toggle w-full px-4 py-3.5 flex items-center justify-between text-left gap-3 hover:bg-slate-50 transition-colors" aria-expanded="false">
                            <span class="text-xs sm:text-sm font-bold text-slate-900">Bagaimana cara menghubungi admin jika ada kendala?</span>
                            <svg class="faq-chevron w-4 h-4 text-slate-400 shrink-0 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-accordion-content hidden px-4 py-3 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100">
                            Anda dapat menghubungi admin melalui WhatsApp Sarana Prasarana, email resmi gearhub@perbanas.ac.id, atau mengunjungi loket di Unit VI Lantai 1 Perbanas Institute.
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 5. BOTTOM CTA CARD: "Masih ada pertanyaan?" -->
        <div class="bg-white border border-slate-200/90 rounded-3xl p-6 sm:p-8 md:p-10 shadow-sm flex flex-col lg:flex-row items-center justify-between gap-8">
            
            <!-- Left Info Area with Illustration -->
            <div class="flex flex-col sm:flex-row items-center sm:items-start gap-6 max-w-xl text-center sm:text-left">
                <!-- Illustration: User with Laptop and Question Bubbles -->
                <div class="shrink-0 w-28 h-28 sm:w-32 sm:h-32 flex items-center justify-center">
                    <svg viewBox="0 0 120 120" fill="none" class="w-full h-full">
                        <!-- Background Circle -->
                        <circle cx="60" cy="60" r="50" fill="#eff6ff"/>
                        <!-- Person Body -->
                        <circle cx="60" cy="46" r="16" fill="#fbcfe8"/>
                        <path d="M48 42c0-8 6-14 14-14s14 6 14 14c0 2-1 4-2 6H50c-1-2-2-4-2-6z" fill="#1e293b"/>
                        <path d="M38 88c0-12 10-22 22-22s22 10 22 22v4H38v-4z" fill="#2563eb"/>
                        <!-- Laptop -->
                        <polygon points="40,84 80,84 76,92 44,92" fill="#94a3b8"/>
                        <rect x="44" y="68" width="32" height="18" rx="2" fill="#0f172a"/>
                        <!-- Question Chat Bubble -->
                        <rect x="74" y="24" width="28" height="22" rx="6" fill="#2563eb"/>
                        <polygon points="80,46 84,46 82,50" fill="#2563eb"/>
                        <text x="88" y="40" font-family="'Space Grotesk', sans-serif" font-weight="bold" font-size="14" fill="#ffffff" text-anchor="middle">?</text>
                        <!-- Speech dots bubble on left -->
                        <rect x="18" y="32" width="24" height="16" rx="5" fill="#ffffff" stroke="#cbd5e1" stroke-width="1.5"/>
                        <circle cx="25" cy="40" r="1.5" fill="#64748b"/>
                        <circle cx="30" cy="40" r="1.5" fill="#64748b"/>
                        <circle cx="35" cy="40" r="1.5" fill="#64748b"/>
                    </svg>
                </div>

                <div class="space-y-3">
                    <h3 class="text-xl sm:text-2xl font-bold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                        Masih ada pertanyaan?
                    </h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                        Jika kamu tidak menemukan jawaban yang kamu cari, silakan hubungi admin melalui kontak di bawah ini.
                    </p>
                    <div class="pt-1">
                        <a href="{{ route('kontak') }}" class="inline-flex items-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm rounded-xl transition-colors shadow-sm focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            <span>Hubungi Admin</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Contact Details Card (with Perbanas Unit VI Lantai 1) -->
            <div class="w-full lg:w-80 bg-slate-50 border border-slate-200/80 rounded-2xl p-5 space-y-4 text-xs text-slate-600">
                <!-- Location -->
                <div class="flex items-start gap-3">
                    <div class="text-blue-600 shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div>
                        <span class="font-bold text-slate-900 block">Unit Sarana dan Prasarana</span>
                        <span class="text-slate-800 font-semibold block text-[11px] text-blue-700">Perbanas Institute (Gedung Unit VI Lantai 1)</span>
                        <span class="text-slate-500 block text-[11px]">Jl. Perbanas, Karet Kuningan, Jakarta Selatan 12940</span>
                    </div>
                </div>

                <!-- Hours -->
                <div class="flex items-start gap-3">
                    <div class="text-blue-600 shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                    </div>
                    <div>
                        <span class="font-bold text-slate-900 block">Senin - Jumat</span>
                        <span class="text-slate-500 block text-[11px]">08.00 - 17.00 WIB</span>
                    </div>
                </div>

                <!-- Phone -->
                <div class="flex items-start gap-3">
                    <div class="text-blue-600 shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div>
                        <span class="font-bold text-slate-900 block">+62 21-525-2533</span>
                        <span class="text-slate-500 block text-[11px]">(Ext. Sarana Prasarana)</span>
                    </div>
                </div>

                <!-- Email -->
                <div class="flex items-start gap-3">
                    <div class="text-blue-600 shrink-0 mt-0.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div>
                        <span class="font-bold text-slate-900 block">gearhub@perbanas.ac.id</span>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // 1. Accordion Toggling
        const toggles = document.querySelectorAll('.faq-accordion-toggle');
        toggles.forEach(toggle => {
            toggle.addEventListener('click', function () {
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                const content = this.nextElementSibling;
                const chevron = this.querySelector('.faq-chevron');

                if (isExpanded) {
                    this.setAttribute('aria-expanded', 'false');
                    this.classList.remove('bg-slate-50/50');
                    content.classList.add('hidden');
                    if (chevron) {
                        chevron.classList.remove('rotate-180', 'text-blue-600');
                        chevron.classList.add('text-slate-400');
                    }
                } else {
                    this.setAttribute('aria-expanded', 'true');
                    this.classList.add('bg-slate-50/50');
                    content.classList.remove('hidden');
                    if (chevron) {
                        chevron.classList.add('rotate-180', 'text-blue-600');
                        chevron.classList.remove('text-slate-400');
                    }
                }
            });
        });

        // 2. Category Tab Filtering
        const tabButtons = document.querySelectorAll('.faq-tab-btn');
        const categoryCards = document.querySelectorAll('.faq-category-card');

        tabButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const category = this.getAttribute('data-category');

                // Update active tab styling
                tabButtons.forEach(b => {
                    b.classList.remove('active', 'border-blue-600', 'bg-blue-50/60', 'text-blue-600');
                    b.classList.add('border-slate-200', 'bg-white', 'text-slate-700');
                    const icon = b.querySelector('.tab-icon');
                    if (icon) {
                        icon.classList.remove('text-blue-600');
                        icon.classList.add('text-slate-500');
                    }
                    const count = b.querySelector('.tab-count');
                    if (count) {
                        count.classList.remove('text-blue-500');
                        count.classList.add('text-slate-400');
                    }
                });

                this.classList.add('active', 'border-blue-600', 'bg-blue-50/60', 'text-blue-600');
                this.classList.remove('border-slate-200', 'bg-white', 'text-slate-700');
                const activeIcon = this.querySelector('.tab-icon');
                if (activeIcon) {
                    activeIcon.classList.add('text-blue-600');
                    activeIcon.classList.remove('text-slate-500');
                }
                const activeCount = this.querySelector('.tab-count');
                if (activeCount) {
                    activeCount.classList.add('text-blue-500');
                    activeCount.classList.remove('text-slate-400');
                }

                // Filter categories
                categoryCards.forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });
        });

        // 3. Search Filter Logic
        const searchInput = document.getElementById('faq-search-input');
        const searchBtn = document.getElementById('faq-search-btn');

        function performSearch() {
            const query = searchInput.value.toLowerCase().trim();
            const items = document.querySelectorAll('.faq-accordion-item');

            if (query === '') {
                // Reset to show active category filter state
                items.forEach(item => item.classList.remove('hidden'));
                const activeTab = document.querySelector('.faq-tab-btn.active');
                if (activeTab) {
                    const category = activeTab.getAttribute('data-category');
                    categoryCards.forEach(card => {
                        if (category === 'all' || card.getAttribute('data-category') === category) {
                            card.classList.remove('hidden');
                        } else {
                            card.classList.add('hidden');
                        }
                    });
                }
                return;
            }

            // If searching, show all category cards and filter inside
            categoryCards.forEach(card => card.classList.remove('hidden'));

            categoryCards.forEach(card => {
                let cardHasMatch = false;
                const cardItems = card.querySelectorAll('.faq-accordion-item');
                cardItems.forEach(item => {
                    const text = item.textContent.toLowerCase();
                    if (text.includes(query)) {
                        item.classList.remove('hidden');
                        // Auto-expand matched item
                        const toggle = item.querySelector('.faq-accordion-toggle');
                        const content = item.querySelector('.faq-accordion-content');
                        const chevron = item.querySelector('.faq-chevron');
                        if (toggle && content) {
                            toggle.setAttribute('aria-expanded', 'true');
                            toggle.classList.add('bg-slate-50/50');
                            content.classList.remove('hidden');
                            if (chevron) {
                                chevron.classList.add('rotate-180', 'text-blue-600');
                                chevron.classList.remove('text-slate-400');
                            }
                        }
                        cardHasMatch = true;
                    } else {
                        item.classList.add('hidden');
                    }
                });

                if (cardHasMatch) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        }

        searchInput.addEventListener('input', performSearch);
        searchBtn.addEventListener('click', performSearch);
        searchInput.addEventListener('keydown', function (e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });
    });
</script>
@endpush
