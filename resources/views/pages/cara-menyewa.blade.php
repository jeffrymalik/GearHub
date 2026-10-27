@extends('layouts.app')

@section('title', 'Cara Menyewa Peralatan - GearHub Perbanas Institute')

@section('content')
<!-- 1. DARK BLUE HERO BANNER -->
<section class="relative bg-[#0c1e3d] text-white py-12 md:py-16 overflow-hidden">
    <!-- Campus Watermark Backdrop -->
    <div class="absolute inset-0 bg-cover bg-center opacity-20 mix-blend-luminosity pointer-events-none" style="background-image: url('/images/hero-campus.jpg');"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-[#0c1e3d] via-[#0c1e3d]/90 to-[#0c1e3d]/70 pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl space-y-4">
            <!-- Breadcrumb -->
            <nav class="flex items-center gap-2 text-xs text-blue-200/80" aria-label="Breadcrumb">
                <a href="{{ route('beranda') }}" class="hover:text-white transition-colors">Beranda</a>
                <span>&gt;</span>
                <span class="text-white font-semibold">Cara Menyewa</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight font-['Space_Grotesk']">
                Cara Menyewa
            </h1>

            <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                Proses penyewaan peralatan kampus di GearHub dirancang agar mudah, cepat, dan transparan. Ikuti langkah-langkah berikut untuk menyewa peralatan yang kamu butuhkan.
            </p>
        </div>
    </div>
</section>

<!-- MAIN CONTENT WRAPPER -->
<div class="bg-slate-50/60 min-h-screen py-12 md:py-16 space-y-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- 2. LANGKAH-LANGKAH MENYEWA (6 STEPS HORIZONTAL FLOW) -->
        <section class="space-y-8">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                    Langkah-Langkah Menyewa
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 mt-1">
                    Ikuti 6 langkah mudah berikut untuk melakukan penyewaan peralatan di GearHub.
                </p>
            </div>

            <!-- 6 Steps Connected with Arrows -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4 relative">
                
                <!-- Step 01 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between relative group">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold text-blue-600 font-mono bg-blue-50 px-2.5 py-0.5 rounded-full">
                                01
                            </span>
                            <!-- Right Arrow (visible on large screen) -->
                            <span class="hidden lg:block text-slate-300 group-hover:text-blue-500 transition-colors">→</span>
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 mb-3 bg-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Daftar Akun</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Buat akun menggunakan NIM, email, dan data diri lainnya. Akun akan diverifikasi oleh admin.
                        </p>
                    </div>
                </div>

                <!-- Step 02 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between relative group">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold text-blue-600 font-mono bg-blue-50 px-2.5 py-0.5 rounded-full">
                                02
                            </span>
                            <span class="hidden lg:block text-slate-300 group-hover:text-blue-500 transition-colors">→</span>
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 mb-3 bg-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Pilih Peralatan</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Jelajahi katalog dan pilih peralatan yang kamu butuhkan. Cek ketersediaan dan detail informasinya.
                        </p>
                    </div>
                </div>

                <!-- Step 03 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between relative group">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold text-blue-600 font-mono bg-blue-50 px-2.5 py-0.5 rounded-full">
                                03
                            </span>
                            <span class="hidden lg:block text-slate-300 group-hover:text-blue-500 transition-colors">→</span>
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 mb-3 bg-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Ajukan Booking</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Pilih tanggal sewa, tentukan jumlah unit, dan ajukan pemesanan melalui sistem.
                        </p>
                    </div>
                </div>

                <!-- Step 04 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between relative group">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold text-blue-600 font-mono bg-blue-50 px-2.5 py-0.5 rounded-full">
                                04
                            </span>
                            <span class="hidden lg:block text-slate-300 group-hover:text-blue-500 transition-colors">→</span>
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 mb-3 bg-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Lakukan Pembayaran</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Setelah booking disetujui, lakukan pembayaran sesuai metode yang tersedia.
                        </p>
                    </div>
                </div>

                <!-- Step 05 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between relative group">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold text-blue-600 font-mono bg-blue-50 px-2.5 py-0.5 rounded-full">
                                05
                            </span>
                            <span class="hidden lg:block text-slate-300 group-hover:text-blue-500 transition-colors">→</span>
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 mb-3 bg-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Ambil Peralatan</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Ambil peralatan di lokasi yang telah ditentukan dengan menunjukkan bukti pembayaran dan identitas.
                        </p>
                    </div>
                </div>

                <!-- Step 06 -->
                <div class="bg-white border border-slate-200 rounded-2xl p-5 shadow-sm hover:shadow-md hover:border-blue-300 transition-all flex flex-col justify-between relative group">
                    <div>
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-[11px] font-bold text-blue-600 font-mono bg-blue-50 px-2.5 py-0.5 rounded-full">
                                06
                            </span>
                        </div>
                        <div class="w-12 h-12 rounded-full border-2 border-blue-600 flex items-center justify-center text-blue-600 mb-3 bg-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 mb-1.5 font-['Space_Grotesk']">Kembalikan Peralatan</h3>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Kembalikan peralatan sesuai tanggal yang dipilih. Peralatan akan diperiksa oleh operator.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <!-- 3. PERSYARATAN & METODE PEMBAYARAN (2 COLS) -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left Card: Persyaratan Penyewaan (6 cols) -->
            <div class="lg:col-span-6 bg-white border border-slate-200 rounded-2xl p-6 sm:p-7 shadow-sm">
                <!-- Header -->
                <div class="flex items-start gap-3.5 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Persyaratan Penyewaan</h3>
                        <p class="text-xs text-slate-500 mt-0.5">Sebelum melakukan penyewaan, pastikan kamu telah memenuhi persyaratan berikut.</p>
                    </div>
                </div>

                <!-- Checklist + Illustration -->
                <div class="grid grid-cols-1 sm:grid-cols-12 gap-4 items-center">
                    <!-- Checklist (8 cols) -->
                    <div class="sm:col-span-8 space-y-3.5 text-xs text-slate-700">
                        <div class="flex items-start gap-2.5">
                            <span class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Terdaftar sebagai mahasiswa aktif Perbanas Institute</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Memiliki akun yang sudah diverifikasi oleh admin</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Mengisi data diri dengan lengkap dan benar</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Tidak memiliki tunggakan atau denda dari penyewaan sebelumnya</span>
                        </div>
                        <div class="flex items-start gap-2.5">
                            <span class="w-4 h-4 rounded-full bg-blue-600 text-white flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-2.5 h-2.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </span>
                            <span>Mematuhi seluruh kebijakan dan ketentuan penyewaan</span>
                        </div>
                    </div>

                    <!-- Right Illustration (4 cols) -->
                    <div class="sm:col-span-4 flex items-center justify-center p-2">
                        <img src="/images/clipboard-verify.svg" alt="Persyaratan Terverifikasi" class="max-w-[130px] h-auto object-contain">
                    </div>
                </div>
            </div>

            <!-- Right Card: Metode Pembayaran (6 cols) -->
            <div class="lg:col-span-6 bg-white border border-slate-200 rounded-2xl p-6 sm:p-7 shadow-sm flex flex-col justify-between">
                <div>
                    <!-- Header -->
                    <div class="flex items-start gap-3.5 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Metode Pembayaran</h3>
                            <p class="text-xs text-slate-500 mt-0.5">Pembayaran dapat dilakukan melalui metode berikut setelah booking disetujui oleh admin.</p>
                        </div>
                    </div>

                    <!-- 3 Payment Method Items -->
                    <div class="space-y-3">
                        <!-- QRIS -->
                        <div class="flex items-center gap-4 p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:bg-slate-50 transition-colors">
                            <div class="w-16 h-10 bg-white border border-slate-200 rounded-lg flex items-center justify-center shrink-0 p-1">
                                <img src="/images/qris-logo.svg" alt="QRIS" class="max-h-full max-w-full object-contain">
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900">QRIS</h4>
                                <p class="text-[11px] text-slate-500 mt-0.5">Pembayaran cepat dan praktis menggunakan QRIS.</p>
                            </div>
                        </div>

                        <!-- Virtual Account -->
                        <div class="flex items-center gap-4 p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:bg-slate-50 transition-colors">
                            <div class="w-16 h-10 bg-white border border-slate-200 rounded-lg flex items-center justify-center shrink-0 text-blue-600">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900">Virtual Account</h4>
                                <p class="text-[11px] text-slate-500 mt-0.5">Pembayaran melalui virtual account bank yang tersedia.</p>
                            </div>
                        </div>

                        <!-- Pembayaran Manual -->
                        <div class="flex items-center gap-4 p-3.5 rounded-xl border border-slate-100 bg-slate-50/50 hover:bg-slate-50 transition-colors">
                            <div class="w-16 h-10 bg-white border border-slate-200 rounded-lg flex items-center justify-center shrink-0 text-amber-500">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"/></svg>
                            </div>
                            <div>
                                <h4 class="text-xs font-bold text-slate-900">Pembayaran Manual</h4>
                                <p class="text-[11px] text-slate-500 mt-0.5">Dengan petunjuk dari admin jika diperlukan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- 4. KETENTUAN PENTING & LOKASI (2 COLS) -->
        <section class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <!-- Left: Ketentuan Penting (6 cols) -->
            <div class="lg:col-span-6 bg-white border border-slate-200 rounded-2xl p-6 sm:p-7 shadow-sm">
                <!-- Header -->
                <div class="flex items-start gap-3.5 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-rose-50 text-rose-600 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Ketentuan Penting</h3>
                        <p class="text-xs text-slate-500 mt-0.5">Hal-hal yang perlu diperhatikan saat menyewa peralatan di GearHub.</p>
                    </div>
                </div>

                <!-- 6 Numbered Items -->
                <div class="space-y-3.5 text-xs text-slate-700">
                    <div class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center shrink-0 text-[11px]">
                            1
                        </span>
                        <span>Penyewaan hanya untuk kegiatan akademik, organisasi, penelitian, dan acara kampus.</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center shrink-0 text-[11px]">
                            2
                        </span>
                        <span>Peralatan harus digunakan dengan baik dan sesuai fungsinya.</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center shrink-0 text-[11px]">
                            3
                        </span>
                        <span>Mahasiswa bertanggung jawab atas kondisi peralatan selama masa sewa.</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center shrink-0 text-[11px]">
                            4
                        </span>
                        <span>Keterlambatan pengembalian akan dikenakan denda sesuai kebijakan.</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center shrink-0 text-[11px]">
                            5
                        </span>
                        <span>Kerusakan atau kehilangan peralatan akan dikenakan biaya penggantian.</span>
                    </div>

                    <div class="flex items-start gap-3">
                        <span class="w-5 h-5 rounded-full bg-blue-100 text-blue-600 font-bold flex items-center justify-center shrink-0 text-[11px]">
                            6
                        </span>
                        <span>Pihak kampus berhak menolak atau membatalkan penyewaan jika terdapat pelanggaran terhadap ketentuan yang berlaku.</span>
                    </div>
                </div>
            </div>

            <!-- Right: Lokasi Pengambilan dan Pengembalian (6 cols) -->
            <div class="lg:col-span-6 bg-white border border-slate-200 rounded-2xl p-6 sm:p-7 shadow-sm flex flex-col justify-between">
                <div>
                    <!-- Header -->
                    <div class="flex items-start gap-3.5 mb-6">
                        <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Lokasi Pengambilan dan Pengembalian</h3>
                            <p class="text-xs text-slate-500 mt-0.5">Peralatan dapat diambil dan dikembalikan di lokasi berikut.</p>
                        </div>
                    </div>

                    <!-- Inner Card with Image & Details -->
                    <div class="border border-slate-200 rounded-xl p-4 sm:p-5 bg-slate-50/40 flex flex-col sm:flex-row gap-5 items-center">
                        <!-- Campus Photo -->
                        <div class="w-full sm:w-44 h-32 rounded-lg overflow-hidden shrink-0 border border-slate-200 shadow-sm">
                            <img src="/images/hero-campus.jpg" alt="Perbanas Institute Unit Sarana Prasarana" class="w-full h-full object-cover">
                        </div>

                        <!-- Details -->
                        <div class="space-y-3 text-xs text-slate-600 flex-grow">
                            <h4 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">
                                Unit Sarana dan Prasarana Perbanas Institute
                            </h4>

                            <div class="flex items-start gap-2.5">
                                <svg class="w-4 h-4 text-slate-400 shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                                <span>Gedung Unit VI Lantai 1, Jl. Perbanas, Karet Kuningan, Jakarta Selatan 12940</span>
                            </div>

                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                <span>Senin - Jumat, 08.00 - 17.00 WIB</span>
                            </div>

                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-slate-400 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                <span>+62 21-525-2533 (Ext. Sarana Prasarana)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- 5. BOTTOM CALLOUT BANNER: MULAI JELAJAHI KATALOG SEKARANG -->
        <section class="rounded-3xl border border-slate-200/90 bg-gradient-to-r from-blue-50 via-sky-50/60 to-transparent relative overflow-hidden shadow-sm">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <!-- Left Text (7 cols) -->
                <div class="lg:col-span-7 p-8 sm:p-12 space-y-4">
                    <p class="text-xs sm:text-sm font-semibold text-slate-500">
                        Siap menyewa peralatan untuk kegiatanmu?
                    </p>
                    <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                        Mulai Jelajahi Katalog Sekarang
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-600 max-w-lg leading-relaxed">
                        Temukan berbagai peralatan kampus yang tersedia di GearHub.
                    </p>
                    <div class="pt-2">
                        <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-7 py-3.5 rounded-xl text-sm transition-all shadow-md shadow-blue-500/20">
                            <span>Lihat Katalog</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Right Photo (5 cols) -->
                <div class="lg:col-span-5 h-64 lg:h-full relative overflow-hidden">
                    <img src="/images/students.jpg" alt="Mahasiswa Kampus Perbanas" class="w-full h-full object-cover object-center lg:object-right mask-radial">
                    <!-- Gradient overlay on left edge to blend seamlessly -->
                    <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-blue-50/80 to-transparent pointer-events-none hidden lg:block"></div>
                </div>

            </div>
        </section>

    </div>
</div>
@endsection
