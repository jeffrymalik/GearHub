@extends('layouts.app')

@section('title', 'Daftar Akun Mahasiswa - GearHub Perbanas Institute')
@section('meta_description', 'Daftarkan akun GearHub mahasiswa kamu sekarang untuk mulai menyewa berbagai peralatan kampus dengan mudah, aman, dan transparan.')

@section('content')
<div class="min-h-[calc(100vh-80px)] flex flex-col lg:flex-row">
    
    <!-- LEFT COLUMN: Campus Hero Visual & 4 Features (50% width on Desktop) -->
    <div class="relative w-full lg:w-1/2 bg-[#0c1e3d] text-white flex flex-col justify-center px-6 sm:px-12 lg:px-16 py-16 lg:py-24 overflow-hidden min-h-[480px] lg:min-h-full">
        <!-- Campus Image Backdrop -->
        <div class="absolute inset-0 bg-cover bg-center opacity-45 mix-blend-luminosity pointer-events-none scale-105" style="background-image: url('/images/hero-campus.jpg');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#071326] via-[#0c1e3d]/90 to-[#0c1e3d]/60 pointer-events-none"></div>

        <!-- Left Content Area -->
        <div class="relative z-10 max-w-lg space-y-8">
            <!-- Decorative Blue Bar -->
            <div class="w-12 h-1 bg-blue-500 rounded-full"></div>

            <div class="space-y-3">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight font-['Space_Grotesk'] leading-tight">
                    Bergabung di<br>
                    <span class="text-blue-500">GearHub</span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Buat akun kamu sekarang dan mulai sewa berbagai peralatan kampus dengan mudah, aman, dan transparan.
                </p>
            </div>

            <!-- 4 Value Proposition Bullets -->
            <div class="space-y-5 pt-2">
                <!-- Bullet 1: Akses Resmi untuk Mahasiswa -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600/20 border border-blue-400/30 text-blue-400 flex items-center justify-center shrink-0 shadow-inner">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-white tracking-tight">
                            Akses Resmi untuk Mahasiswa
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                            Hanya mahasiswa aktif Perbanas Institute.
                        </p>
                    </div>
                </div>

                <!-- Bullet 2: Proses Cepat dan Mudah -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600/20 border border-blue-400/30 text-blue-400 flex items-center justify-center shrink-0 shadow-inner">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-white tracking-tight">
                            Proses Cepat dan Mudah
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                            Daftar, verifikasi, lalu langsung bisa menyewa.
                        </p>
                    </div>
                </div>

                <!-- Bullet 3: Dukungan Kegiatan Kampus -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600/20 border border-blue-400/30 text-blue-400 flex items-center justify-center shrink-0 shadow-inner">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-white tracking-tight">
                            Dukungan Kegiatan Kampus
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                            Untuk kegiatan akademik, organisasi, dan acara.
                        </p>
                    </div>
                </div>

                <!-- Bullet 4: Data Kamu Aman -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600/20 border border-blue-400/30 text-blue-400 flex items-center justify-center shrink-0 shadow-inner">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-white tracking-tight">
                            Data Kamu Aman
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                            Informasi pribadi dijaga sesuai kebijakan privasi.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- RIGHT COLUMN: Multi-Step Registration Form (50% width on Desktop) -->
    <div class="w-full lg:w-1/2 bg-slate-50/70 flex items-center justify-center px-4 sm:px-8 lg:px-12 py-10 lg:py-16">
        <div class="max-w-2xl w-full">
            
            <!-- White Floating Card -->
            <div class="bg-white border border-slate-200/90 rounded-3xl p-6 sm:p-10 shadow-sm space-y-7">
                
                <!-- Card Header (Title & Login Link) -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 border-b border-slate-100 pb-5">
                    <div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                            Daftar Akun
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                            Lengkapi data berikut untuk membuat akun GearHub.
                        </p>
                    </div>
                    <div class="text-left sm:text-right shrink-0">
                        <span class="text-[11px] text-slate-400 block">Sudah punya akun?</span>
                        <a href="{{ route('login') }}" class="text-xs sm:text-sm font-bold text-blue-600 hover:text-blue-700 hover:underline inline-flex items-center gap-1">
                            <span>Masuk di sini</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </div>

                <!-- 4-Step Stepper Progress Bar -->
                <div class="relative py-2" aria-label="Progress Pendaftaran">
                    <div class="flex items-center justify-between relative z-10">
                        
                        <!-- Step 1 Indicator -->
                        <div class="step-indicator flex flex-col items-center gap-1.5" data-step="1">
                            <div class="step-circle w-9 h-9 rounded-full bg-blue-600 text-white font-bold text-xs flex items-center justify-center ring-4 ring-blue-100 transition-all">
                                1
                            </div>
                            <span class="step-label text-[11px] font-bold text-slate-900 text-center">
                                Data Diri
                            </span>
                        </div>

                        <!-- Line 1-2 -->
                        <div class="step-line flex-1 h-0.5 bg-slate-200 mx-2 -mt-5"></div>

                        <!-- Step 2 Indicator -->
                        <div class="step-indicator flex flex-col items-center gap-1.5" data-step="2">
                            <div class="step-circle w-9 h-9 rounded-full bg-slate-100 text-slate-500 font-semibold text-xs border border-slate-200 flex items-center justify-center transition-all">
                                2
                            </div>
                            <span class="step-label text-[11px] font-medium text-slate-500 text-center">
                                Informasi Akademik
                            </span>
                        </div>

                        <!-- Line 2-3 -->
                        <div class="step-line flex-1 h-0.5 bg-slate-200 mx-2 -mt-5"></div>

                        <!-- Step 3 Indicator -->
                        <div class="step-indicator flex flex-col items-center gap-1.5" data-step="3">
                            <div class="step-circle w-9 h-9 rounded-full bg-slate-100 text-slate-500 font-semibold text-xs border border-slate-200 flex items-center justify-center transition-all">
                                3
                            </div>
                            <span class="step-label text-[11px] font-medium text-slate-500 text-center">
                                Dokumen Pendukung
                            </span>
                        </div>

                        <!-- Line 3-4 -->
                        <div class="step-line flex-1 h-0.5 bg-slate-200 mx-2 -mt-5"></div>

                        <!-- Step 4 Indicator -->
                        <div class="step-indicator flex flex-col items-center gap-1.5" data-step="4">
                            <div class="step-circle w-9 h-9 rounded-full bg-slate-100 text-slate-500 font-semibold text-xs border border-slate-200 flex items-center justify-center transition-all">
                                4
                            </div>
                            <span class="step-label text-[11px] font-medium text-slate-500 text-center">
                                Konfirmasi
                            </span>
                        </div>

                    </div>
                </div>

                <!-- Registration Form Body -->
                <form id="multi-step-form" class="space-y-6">
                    
                    <!-- ================= STEP 1: DATA DIRI ================= -->
                    <div id="step-pane-1" class="step-pane space-y-5">
                        
                        <!-- Step Header -->
                        <div class="flex items-center gap-3 pb-1">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">
                                    Data Diri
                                </h3>
                                <p class="text-xs text-slate-500">
                                    Masukkan data diri kamu dengan lengkap dan benar.
                                </p>
                            </div>
                        </div>

                        <!-- Fields Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Nama Lengkap -->
                            <div>
                                <label for="reg-fullname" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Nama Lengkap *
                                </label>
                                <input 
                                    type="text" 
                                    id="reg-fullname" 
                                    required 
                                    placeholder="Masukkan nama lengkap" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                            </div>

                            <!-- Email Aktif -->
                            <div>
                                <label for="reg-email" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Email *
                                </label>
                                <input 
                                    type="email" 
                                    id="reg-email" 
                                    required 
                                    placeholder="Masukkan email aktif" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                            </div>

                            <!-- No. Telepon -->
                            <div>
                                <label for="reg-phone" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    No. Telepon *
                                </label>
                                <input 
                                    type="tel" 
                                    id="reg-phone" 
                                    required 
                                    placeholder="Masukkan nomor telepon" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                            </div>

                            <!-- Tanggal Lahir -->
                            <div>
                                <label for="reg-dob" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Tanggal Lahir *
                                </label>
                                <div class="relative">
                                    <input 
                                        type="date" 
                                        id="reg-dob" 
                                        required 
                                        class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                    >
                                </div>
                            </div>

                            <!-- Jenis Kelamin -->
                            <div>
                                <label for="reg-gender" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Jenis Kelamin *
                                </label>
                                <select 
                                    id="reg-gender" 
                                    required 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                                    <option value="" disabled selected>Pilih jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <!-- Alamat Domisili -->
                            <div>
                                <label for="reg-address" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Alamat *
                                </label>
                                <textarea 
                                    id="reg-address" 
                                    rows="3" 
                                    required 
                                    placeholder="Masukkan alamat domisili kamu" 
                                    class="w-full px-3.5 py-2 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                ></textarea>
                            </div>
                        </div>

                        <!-- Step 1 Action Button -->
                        <div class="flex justify-end pt-3">
                            <button 
                                type="button" 
                                class="next-step-btn px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs sm:text-sm transition-all shadow-md shadow-blue-500/20 inline-flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600"
                                data-next="2"
                            >
                                <span>Lanjut ke Informasi Akademik</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- ================= STEP 2: INFORMASI AKADEMIK ================= -->
                    <div id="step-pane-2" class="step-pane hidden space-y-5">
                        
                        <div class="flex items-center gap-3 pb-1">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">
                                    Informasi Akademik
                                </h3>
                                <p class="text-xs text-slate-500">
                                    Data kemahasiswaan aktif di Perbanas Institute.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- NIM -->
                            <div>
                                <label for="reg-nim" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    NIM (Nomor Induk Mahasiswa) *
                                </label>
                                <input 
                                    type="text" 
                                    id="reg-nim" 
                                    placeholder="Contoh: 2112000123" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                            </div>

                            <!-- Fakultas -->
                            <div>
                                <label for="reg-faculty" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Fakultas *
                                </label>
                                <select 
                                    id="reg-faculty" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                                    <option value="" disabled selected>Pilih Fakultas</option>
                                    <option value="FEB">Fakultas Ekonomi dan Bisnis (FEB)</option>
                                    <option value="FTI">Fakultas Teknologi Informasi (FTI)</option>
                                    <option value="Pascasarjana">Sekolah Pascasarjana</option>
                                </select>
                            </div>

                            <!-- Program Studi -->
                            <div>
                                <label for="reg-prodi" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Program Studi *
                                </label>
                                <select 
                                    id="reg-prodi" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                                    <option value="" disabled selected>Pilih Program Studi</option>
                                    <option value="S1 Informatika">S1 Informatika</option>
                                    <option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
                                    <option value="S1 Akuntansi">S1 Akuntansi</option>
                                    <option value="S1 Manajemen">S1 Manajemen</option>
                                    <option value="D3 Keuangan & Perbankan">D3 Keuangan &amp; Perbankan</option>
                                </select>
                            </div>

                            <!-- Tahun Angkatan -->
                            <div>
                                <label for="reg-year" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Tahun Angkatan *
                                </label>
                                <input 
                                    type="number" 
                                    id="reg-year" 
                                    placeholder="Contoh: 2023" 
                                    min="2018" 
                                    max="2026" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                            </div>
                        </div>

                        <!-- Step 2 Navigation Buttons -->
                        <div class="flex items-center justify-between pt-3">
                            <button 
                                type="button" 
                                class="prev-step-btn px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl text-xs sm:text-sm transition-colors inline-flex items-center gap-2"
                                data-prev="1"
                            >
                                <span>&larr;</span>
                                <span>Kembali</span>
                            </button>
                            <button 
                                type="button" 
                                class="next-step-btn px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs sm:text-sm transition-all shadow-md shadow-blue-500/20 inline-flex items-center gap-2"
                                data-next="3"
                            >
                                <span>Lanjut ke Dokumen Pendukung</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- ================= STEP 3: DOKUMEN PENDUKUNG ================= -->
                    <div id="step-pane-3" class="step-pane hidden space-y-5">
                        
                        <div class="flex items-center gap-3 pb-1">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">
                                    Dokumen Pendukung &amp; Keamanan
                                </h3>
                                <p class="text-xs text-slate-500">
                                    Unggah foto KTM untuk verifikasi dan atur password akun kamu.
                                </p>
                            </div>
                        </div>

                        <!-- KTM Upload Dropzone -->
                        <div>
                            <label class="block text-xs font-semibold text-slate-700 mb-1.5">
                                Foto Kartu Tanda Mahasiswa (KTM) *
                            </label>
                            <div class="border-2 border-dashed border-slate-200 hover:border-blue-400 rounded-2xl p-6 text-center bg-slate-50/50 hover:bg-blue-50/20 transition-all cursor-pointer relative group">
                                <input type="file" id="reg-ktm" accept="image/*,.pdf" class="absolute inset-0 opacity-0 cursor-pointer">
                                <div class="space-y-2">
                                    <div class="w-12 h-12 rounded-full bg-blue-50 text-blue-600 mx-auto flex items-center justify-center group-hover:scale-110 transition-transform">
                                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="17 8 12 3 7 8"></polyline>
                                            <line x1="12" y1="3" x2="12" y2="15"></line>
                                        </svg>
                                    </div>
                                    <div class="text-xs text-slate-600">
                                        <span class="font-bold text-blue-600">Klik untuk upload foto KTM</span> atau drag &amp; drop
                                    </div>
                                    <p class="text-[11px] text-slate-400">
                                        Format JPG, PNG atau PDF (Maks. 5 MB). Pastikan nama dan NIM terlihat jelas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Password Fields Grid -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="reg-password" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Password Akun *
                                </label>
                                <input 
                                    type="password" 
                                    id="reg-password" 
                                    placeholder="Minimal 8 karakter" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                            </div>

                            <div>
                                <label for="reg-password-confirm" class="block text-xs font-semibold text-slate-700 mb-1.5">
                                    Konfirmasi Password *
                                </label>
                                <input 
                                    type="password" 
                                    id="reg-password-confirm" 
                                    placeholder="Ulangi password" 
                                    class="w-full px-3.5 py-2.5 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                                >
                            </div>
                        </div>

                        <!-- Step 3 Navigation Buttons -->
                        <div class="flex items-center justify-between pt-3">
                            <button 
                                type="button" 
                                class="prev-step-btn px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl text-xs sm:text-sm transition-colors inline-flex items-center gap-2"
                                data-prev="2"
                            >
                                <span>&larr;</span>
                                <span>Kembali</span>
                            </button>
                            <button 
                                type="button" 
                                class="next-step-btn px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs sm:text-sm transition-all shadow-md shadow-blue-500/20 inline-flex items-center gap-2"
                                data-next="4"
                            >
                                <span>Lanjut ke Konfirmasi</span>
                                <span>&rarr;</span>
                            </button>
                        </div>
                    </div>

                    <!-- ================= STEP 4: KONFIRMASI ================= -->
                    <div id="step-pane-4" class="step-pane hidden space-y-5">
                        
                        <div class="flex items-center gap-3 pb-1">
                            <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center shrink-0">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-bold text-slate-900 font-['Space_Grotesk']">
                                    Konfirmasi Pendaftaran
                                </h3>
                                <p class="text-xs text-slate-500">
                                    Periksa kembali ringkasan data sebelum menyelesaikan registrasi.
                                </p>
                            </div>
                        </div>

                        <!-- Summary Review Box -->
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-200/80 space-y-3 text-xs text-slate-600">
                            <div class="flex justify-between py-1 border-b border-slate-200/60">
                                <span class="text-slate-400">Nama:</span>
                                <span id="summary-name" class="font-bold text-slate-900">-</span>
                            </div>
                            <div class="flex justify-between py-1 border-b border-slate-200/60">
                                <span class="text-slate-400">Email:</span>
                                <span id="summary-email" class="font-bold text-slate-900">-</span>
                            </div>
                            <div class="flex justify-between py-1 border-b border-slate-200/60">
                                <span class="text-slate-400">NIM Mahasiswa:</span>
                                <span id="summary-nim" class="font-bold text-slate-900">-</span>
                            </div>
                            <div class="flex justify-between py-1">
                                <span class="text-slate-400">Program Studi:</span>
                                <span id="summary-prodi" class="font-bold text-slate-900">-</span>
                            </div>
                        </div>

                        <!-- Terms Agreement Checkbox -->
                        <div class="flex items-start gap-3 pt-2">
                            <input 
                                type="checkbox" 
                                id="reg-agree" 
                                required 
                                class="w-4 h-4 mt-0.5 rounded text-blue-600 focus:ring-blue-500 border-slate-300"
                            >
                            <label for="reg-agree" class="text-xs text-slate-600 leading-relaxed cursor-pointer">
                                Saya menyatakan bahwa seluruh data yang diisi adalah benar dan menyetujui seluruh 
                                <a href="{{ route('kebijakan') }}" target="_blank" class="text-blue-600 font-bold hover:underline">Kebijakan Penyewaan</a> 
                                serta Syarat &amp; Ketentuan GearHub Perbanas Institute.
                            </label>
                        </div>

                        <!-- Step 4 Navigation Buttons -->
                        <div class="flex items-center justify-between pt-3">
                            <button 
                                type="button" 
                                class="prev-step-btn px-5 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold rounded-xl text-xs sm:text-sm transition-colors inline-flex items-center gap-2"
                                data-prev="3"
                            >
                                <span>&larr;</span>
                                <span>Kembali</span>
                            </button>
                            <button 
                                type="submit" 
                                id="submit-registration-btn"
                                class="px-7 py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs sm:text-sm transition-all shadow-md shadow-blue-500/20 inline-flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600"
                            >
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                    <polyline points="20 6 9 17 4 12"></polyline>
                                </svg>
                                <span>Selesaikan Pendaftaran</span>
                            </button>
                        </div>
                    </div>

                </form>

                <!-- Success State (Revealed upon registration submit) -->
                <div id="register-success-view" class="hidden text-center py-6 space-y-5">
                    <div class="w-16 h-16 rounded-full bg-emerald-100 text-emerald-600 mx-auto flex items-center justify-center shadow-inner">
                        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                    </div>
                    <div class="space-y-2">
                        <h3 class="text-xl sm:text-2xl font-bold text-slate-900 font-['Space_Grotesk']">
                            Pendaftaran Berhasil!
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-600 max-w-md mx-auto leading-relaxed">
                            Akun kamu telah berhasil didaftarkan. Admin Unit Sarana dan Prasarana akan melakukan verifikasi identitas mahasiswa dalam waktu 1x24 jam kerja.
                        </p>
                    </div>
                    <div class="pt-2">
                        <a href="{{ route('login') }}" class="px-8 py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs sm:text-sm transition-all shadow-md shadow-blue-500/20 inline-flex items-center gap-2">
                            <span>Masuk ke Akun Sekarang</span>
                            <span>&rarr;</span>
                        </a>
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
        let currentStep = 1;
        const totalSteps = 4;

        const stepPanes = document.querySelectorAll('.step-pane');
        const nextButtons = document.querySelectorAll('.next-step-btn');
        const prevButtons = document.querySelectorAll('.prev-step-btn');
        const indicators = document.querySelectorAll('.step-indicator');
        const stepLines = document.querySelectorAll('.step-line');
        const form = document.getElementById('multi-step-form');
        const successView = document.getElementById('register-success-view');

        function updateStep(step) {
            currentStep = step;

            // Update step panes visibility
            stepPanes.forEach(pane => pane.classList.add('hidden'));
            const activePane = document.getElementById('step-pane-' + step);
            if (activePane) {
                activePane.classList.remove('hidden');
            }

            // Update stepper indicators
            indicators.forEach(ind => {
                const s = parseInt(ind.getAttribute('data-step'));
                const circle = ind.querySelector('.step-circle');
                const label = ind.querySelector('.step-label');

                if (s < step) {
                    // Completed step
                    circle.className = 'step-circle w-9 h-9 rounded-full bg-blue-600 text-white font-bold text-xs flex items-center justify-center transition-all';
                    circle.innerHTML = '✓';
                    label.className = 'step-label text-[11px] font-bold text-blue-600 text-center';
                } else if (s === step) {
                    // Active step
                    circle.className = 'step-circle w-9 h-9 rounded-full bg-blue-600 text-white font-bold text-xs flex items-center justify-center ring-4 ring-blue-100 transition-all';
                    circle.innerHTML = s;
                    label.className = 'step-label text-[11px] font-bold text-slate-900 text-center';
                } else {
                    // Upcoming step
                    circle.className = 'step-circle w-9 h-9 rounded-full bg-slate-100 text-slate-400 font-semibold text-xs border border-slate-200 flex items-center justify-center transition-all';
                    circle.innerHTML = s;
                    label.className = 'step-label text-[11px] font-medium text-slate-400 text-center';
                }
            });

            // Update connector lines
            stepLines.forEach((line, index) => {
                if (index < step - 1) {
                    line.className = 'step-line flex-1 h-0.5 bg-blue-600 mx-2 -mt-5 transition-all';
                } else {
                    line.className = 'step-line flex-1 h-0.5 bg-slate-200 mx-2 -mt-5 transition-all';
                }
            });

            // If reaching Step 4, update summary fields
            if (step === 4) {
                const name = document.getElementById('reg-fullname').value || '-';
                const email = document.getElementById('reg-email').value || '-';
                const nim = document.getElementById('reg-nim').value || '-';
                const prodi = document.getElementById('reg-prodi').value || '-';

                document.getElementById('summary-name').textContent = name;
                document.getElementById('summary-email').textContent = email;
                document.getElementById('summary-nim').textContent = nim;
                document.getElementById('summary-prodi').textContent = prodi;
            }
        }

        // Next button click
        nextButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const nextStep = parseInt(this.getAttribute('data-next'));
                updateStep(nextStep);
            });
        });

        // Prev button click
        prevButtons.forEach(btn => {
            btn.addEventListener('click', function () {
                const prevStep = parseInt(this.getAttribute('data-prev'));
                updateStep(prevStep);
            });
        });

        // Form Submit
        if (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                const submitBtn = document.getElementById('submit-registration-btn');
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                    <span>Mendaftarkan akun...</span>
                `;

                setTimeout(() => {
                    form.classList.add('hidden');
                    document.querySelector('[aria-label="Progress Pendaftaran"]').classList.add('hidden');
                    successView.classList.remove('hidden');
                }, 900);
            });
        }
    });
</script>
@endpush
