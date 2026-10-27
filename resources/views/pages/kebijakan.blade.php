@extends('layouts.app')

@section('title', 'Kebijakan Penyewaan - GearHub Perbanas Institute')
@section('meta_description', 'Aturan dan ketentuan yang berlaku pada layanan penyewaan peralatan di GearHub untuk memastikan proses penyewaan berjalan dengan aman, tertib, dan transparan.')

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
                <span class="text-white font-medium">Kebijakan Penyewaan</span>
            </nav>

            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight font-['Space_Grotesk']">
                Kebijakan Penyewaan
            </h1>

            <p class="text-slate-300 text-sm sm:text-base leading-relaxed max-w-2xl">
                Aturan dan ketentuan yang berlaku pada layanan penyewaan peralatan di GearHub untuk memastikan proses penyewaan berjalan dengan aman, tertib, dan transparan.
            </p>
        </div>
    </div>
</section>

<!-- 2. MAIN LAYOUT: SIDEBAR + CONTENT CARDS -->
<div class="bg-slate-50/70 min-h-screen py-10 md:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Mobile Horizontal Category/Section Selector (visible on small screens) -->
        <div class="lg:hidden mb-6 overflow-x-auto pb-2 -mx-4 px-4 scrollbar-none flex items-center gap-2" id="mobile-nav-pills">
            <a href="#ringkasan" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-semibold bg-blue-600 text-white shadow-sm transition-colors">
                Ringkasan
            </a>
            <a href="#pengguna" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                1. Pengguna
            </a>
            <a href="#pembuatan-akun" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                2. Pembuatan Akun
            </a>
            <a href="#pemesanan" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                3. Pemesanan
            </a>
            <a href="#pembayaran" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                4. Pembayaran
            </a>
            <a href="#pengambilan" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                5. Pengambilan
            </a>
            <a href="#pengembalian" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                6. Pengembalian
            </a>
            <a href="#denda" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                7. Denda & Kerusakan
            </a>
            <a href="#pembatalan" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                8. Pembatalan
            </a>
            <a href="#tanggung-jawab" class="mobile-nav-link shrink-0 px-3.5 py-2 rounded-xl text-xs font-medium bg-white text-slate-700 border border-slate-200 hover:border-blue-400 hover:text-blue-600 transition-colors">
                9-12. Ketentuan Lain
            </a>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT COLUMN: Sticky Navigation Sidebar -->
            <aside class="hidden lg:block lg:col-span-4 xl:col-span-3 sticky top-24">
                <nav class="bg-white rounded-2xl border border-slate-200/80 p-3 shadow-sm space-y-1" aria-label="Daftar Isi Kebijakan">
                    
                    <a href="#ringkasan" id="link-ringkasan" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-semibold text-blue-600 bg-blue-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span>Ringkasan Kebijakan</span>
                    </a>

                    <a href="#pengguna" id="link-pengguna" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        <span>1. Pengguna</span>
                    </a>

                    <a href="#pembuatan-akun" id="link-pembuatan-akun" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                        <span>2. Pembuatan Akun</span>
                    </a>

                    <a href="#pemesanan" id="link-pemesanan" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                        <span>3. Pemesanan</span>
                    </a>

                    <a href="#pembayaran" id="link-pembayaran" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span>4. Pembayaran</span>
                    </a>

                    <a href="#pengambilan" id="link-pengambilan" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                            <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                            <line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span>5. Pengambilan Peralatan</span>
                    </a>

                    <a href="#pengembalian" id="link-pengembalian" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2.5 2v6h6"></path>
                            <path d="M2.66 15.57a10 10 0 1 0 .57-8.38L2.5 8"></path>
                        </svg>
                        <span>6. Pengembalian Peralatan</span>
                    </a>

                    <a href="#denda" id="link-denda" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                            <line x1="12" y1="9" x2="12" y2="13"></line>
                            <line x1="12" y1="17" x2="12.01" y2="17"></line>
                        </svg>
                        <span>7. Denda dan Kerusakan</span>
                    </a>

                    <a href="#pembatalan" id="link-pembatalan" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="23 4 23 10 17 10"></polyline>
                            <polyline points="1 20 1 14 7 14"></polyline>
                            <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                        </svg>
                        <span>8. Pembatalan dan Perubahan</span>
                    </a>

                    <a href="#tanggung-jawab" id="link-tanggung-jawab" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        </svg>
                        <span>9. Tanggung Jawab</span>
                    </a>

                    <a href="#privasi" id="link-privasi" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                            <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                        </svg>
                        <span>10. Privasi dan Data</span>
                    </a>

                    <a href="#pelanggaran" id="link-pelanggaran" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 13l-7.5 7.5a2.121 2.121 0 0 1-3-3L11 10"></path>
                            <path d="M16 16l6-6"></path>
                            <path d="M8 8l6-6"></path>
                            <path d="M9 7l8 8"></path>
                            <path d="M21 11l-8-8"></path>
                        </svg>
                        <span>11. Pelanggaran</span>
                    </a>

                    <a href="#perubahan-kebijakan" id="link-perubahan-kebijakan" class="policy-nav-item flex items-center gap-3 px-3 py-2.5 rounded-xl text-xs font-medium text-slate-600 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                        <svg class="w-4 h-4 shrink-0 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                        </svg>
                        <span>12. Perubahan Kebijakan</span>
                    </a>

                </nav>
            </aside>

            <!-- RIGHT COLUMN: Policy Content Sections -->
            <div class="lg:col-span-8 xl:col-span-9 space-y-6">
                
                <!-- 0. Ringkasan Kebijakan Card -->
                <div id="ringkasan" class="scroll-mt-24 bg-gradient-to-r from-blue-50/90 via-blue-50/50 to-white border border-blue-100 rounded-2xl p-6 sm:p-7 shadow-sm flex flex-col md:flex-row items-start md:items-center justify-between gap-6 relative overflow-hidden">
                    <div class="flex items-start gap-4 z-10">
                        <!-- Icon Document with Blue Shield Check -->
                        <div class="w-12 h-12 rounded-xl bg-blue-100/80 text-blue-600 flex items-center justify-center shrink-0 shadow-sm">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <path d="M9 15l2 2 4-4" stroke="#2563eb" stroke-width="2.5"></path>
                            </svg>
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Ringkasan Kebijakan
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Kebijakan penyewaan ini berlaku bagi seluruh mahasiswa Perbanas Institute yang menggunakan layanan GearHub. Dengan melakukan pemesanan, pengguna dianggap telah membaca, memahami, dan menyetujui seluruh ketentuan yang berlaku.
                            </p>
                        </div>
                    </div>

                    <!-- Right Graphic: Blue Sheet with Shield Silhouette -->
                    <div class="hidden md:flex items-center justify-center shrink-0 pr-2">
                        <svg class="w-24 h-24 text-blue-200" viewBox="0 0 100 100" fill="none">
                            <rect x="25" y="15" width="50" height="70" rx="8" fill="#e0f2fe" stroke="#38bdf8" stroke-width="2"/>
                            <line x1="35" y1="30" x2="65" y2="30" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="35" y1="42" x2="60" y2="42" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="35" y1="54" x2="55" y2="54" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <!-- Shield badge overlay -->
                            <path d="M56 50v14c0 10 9 15 14 17 5-2 14-7 14-17V50l-14-6-14 6z" fill="#0284c7" opacity="0.15"/>
                            <path d="M56 50v14c0 10 9 15 14 17 5-2 14-7 14-17V50l-14-6-14 6z" stroke="#0284c7" stroke-width="2.5" fill="#38bdf8" fill-opacity="0.25"/>
                            <path d="M64 58l4 4 8-8" stroke="#0284c7" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- 1. Pengguna Card -->
                <div id="pengguna" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            1
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Pengguna
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Layanan GearHub hanya dapat digunakan oleh mahasiswa aktif Perbanas Institute. Akun harus diverifikasi oleh admin sebelum dapat melakukan pemesanan. Setiap mahasiswa bertanggung jawab penuh atas aktivitas yang dilakukan menggunakan akunnya.
                            </p>
                        </div>
                    </div>

                    <!-- Right Illustration: KTM / Student ID with Green Verified Badge -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- ID Card Body -->
                            <rect x="5" y="10" width="75" height="52" rx="8" fill="#f0f9ff" stroke="#38bdf8" stroke-width="2"/>
                            <!-- Lanyard Slot -->
                            <rect x="35" y="14" width="15" height="4" rx="2" fill="#0284c7"/>
                            <!-- Avatar Placeholder -->
                            <circle cx="24" cy="36" r="10" fill="#bae6fd"/>
                            <circle cx="24" cy="33" r="4.5" fill="#0284c7"/>
                            <path d="M15 44c0-4 4-6 9-6s9 2 9 6" fill="#0284c7"/>
                            <!-- Text Lines -->
                            <line x1="42" y1="30" x2="70" y2="30" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="42" y1="38" x2="65" y2="38" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="42" y1="46" x2="58" y2="46" stroke="#bae6fd" stroke-width="2.5" stroke-linecap="round"/>
                            <!-- Green Verified Badge -->
                            <circle cx="70" cy="52" r="12" fill="#22c55e" stroke="#ffffff" stroke-width="2.5"/>
                            <path d="M66 52l3 3 6-6" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- 2. Pembuatan Akun Card -->
                <div id="pembuatan-akun" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            2
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Pembuatan Akun
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Mahasiswa melakukan pendaftaran menggunakan NIM, nama lengkap, email pribadi, dan data diri lainnya. Admin akan memverifikasi data dan dokumen pendukung (seperti KTM). Akun yang belum diverifikasi tidak dapat melakukan pemesanan.
                            </p>
                        </div>
                    </div>

                    <!-- Right Illustration: Document with User Circle Badge -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- Document Body -->
                            <rect x="18" y="10" width="55" height="60" rx="8" fill="#f0f9ff" stroke="#38bdf8" stroke-width="2"/>
                            <!-- Folded Corner -->
                            <path d="M60 10v12h13" fill="#bae6fd" stroke="#38bdf8" stroke-width="1.5"/>
                            <!-- Content lines -->
                            <line x1="28" y1="26" x2="50" y2="26" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="28" y1="36" x2="62" y2="36" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="28" y1="46" x2="52" y2="46" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="28" y1="56" x2="44" y2="56" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <!-- Blue Avatar Badge -->
                            <circle cx="70" cy="54" r="12" fill="#2563eb" stroke="#ffffff" stroke-width="2.5"/>
                            <circle cx="70" cy="51" r="4.5" fill="#ffffff"/>
                            <path d="M63 61c0-3.5 3-5 7-5s7 1.5 7 5" fill="#ffffff"/>
                        </svg>
                    </div>
                </div>

                <!-- 3. Pemesanan Card -->
                <div id="pemesanan" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            3
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Pemesanan
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pemesanan dilakukan melalui sistem sesuai ketersediaan peralatan. Mahasiswa wajib memilih tanggal sewa, jumlah unit, dan mengisi tujuan penggunaan. Setiap pemesanan harus disetujui oleh admin sebelum invoice diterbitkan. Satu pemesanan hanya dapat memiliki satu periode sewa yang sama untuk semua unit.
                            </p>
                        </div>
                    </div>

                    <!-- Right Illustration: Blue Calendar with Clock Badge -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- Calendar Base -->
                            <rect x="15" y="16" width="58" height="52" rx="8" fill="#ffffff" stroke="#38bdf8" stroke-width="2"/>
                            <!-- Calendar Top Header -->
                            <rect x="15" y="16" width="58" height="14" rx="6" fill="#38bdf8"/>
                            <!-- Rings -->
                            <circle cx="28" cy="14" r="2.5" fill="#0284c7"/>
                            <circle cx="44" cy="14" r="2.5" fill="#0284c7"/>
                            <circle cx="60" cy="14" r="2.5" fill="#0284c7"/>
                            <!-- Date dots / blocks -->
                            <rect x="23" y="38" width="6" height="6" rx="1.5" fill="#93c5fd"/>
                            <rect x="35" y="38" width="6" height="6" rx="1.5" fill="#93c5fd"/>
                            <rect x="47" y="38" width="6" height="6" rx="1.5" fill="#2563eb"/>
                            <rect x="23" y="50" width="6" height="6" rx="1.5" fill="#93c5fd"/>
                            <rect x="35" y="50" width="6" height="6" rx="1.5" fill="#93c5fd"/>
                            <!-- Clock Badge in bottom right -->
                            <circle cx="70" cy="54" r="13" fill="#ffffff" stroke="#2563eb" stroke-width="2.5"/>
                            <circle cx="70" cy="54" r="2" fill="#2563eb"/>
                            <path d="M70 47v7l4 3" stroke="#2563eb" stroke-width="2.2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <!-- 4. Pembayaran Card -->
                <div id="pembayaran" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            4
                        </div>
                        <div class="space-y-2 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Pembayaran
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Setelah pemesanan disetujui, mahasiswa akan menerima invoice dan melakukan pembayaran sesuai metode yang tersedia, yaitu:
                            </p>
                            <ul class="text-xs sm:text-sm text-slate-600 space-y-1.5 pl-1">
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    <span>QRIS (pembayaran cepat dan praktis)</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    <span>Virtual Account</span>
                                </li>
                                <li class="flex items-center gap-2">
                                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                    <span>Pembayaran manual (sesuai arahan admin apabila diperlukan)</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Illustration: QRIS / Bank Pillars Card -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- Card Body -->
                            <rect x="25" y="8" width="55" height="66" rx="8" fill="#f0f9ff" stroke="#93c5fd" stroke-width="2"/>
                            <!-- QRIS Text Typography -->
                            <text x="35" y="26" font-family="'Plus Jakarta Sans', sans-serif" font-weight="800" font-size="11" fill="#0f172a" letter-spacing="-0.5">
                                [QRIS
                            </text>
                            <rect x="35" y="32" width="35" height="2" rx="1" fill="#cbd5e1"/>
                            <rect x="35" y="37" width="25" height="2" rx="1" fill="#cbd5e1"/>
                            <!-- Bank Pillars Icon overlay box in front -->
                            <rect x="10" y="42" width="36" height="32" rx="6" fill="#ffffff" stroke="#38bdf8" stroke-width="2"/>
                            <path d="M16 52l12-5 12 5v2H16v-2z" fill="#0284c7"/>
                            <rect x="19" y="55" width="3" height="11" fill="#0284c7"/>
                            <rect x="26.5" y="55" width="3" height="11" fill="#0284c7"/>
                            <rect x="34" y="55" width="3" height="11" fill="#0284c7"/>
                            <rect x="16" y="67" width="24" height="2" fill="#0284c7"/>
                        </svg>
                    </div>
                </div>

                <!-- 5. Pengambilan Peralatan Card -->
                <div id="pengambilan" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            5
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Pengambilan Peralatan
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Peralatan dapat diambil di Unit Sarana dan Prasarana Perbanas Institute (Gedung Unit VI Lantai 1) pada jam operasional. Mahasiswa wajib membawa identitas diri (KTM atau kartu mahasiswa) dan menunjukkan bukti pembayaran yang telah diverifikasi. Operator akan melakukan pemeriksaan kondisi peralatan dan mencatat serah-terima di sistem.
                            </p>
                        </div>
                    </div>

                    <!-- Right Illustration: Cardboard Box with Green Checkmark Badge -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- Cardboard Box Isometric -->
                            <!-- Top Facet -->
                            <polygon points="45,18 75,30 45,42 15,30" fill="#e2b17b"/>
                            <!-- Left Facet -->
                            <polygon points="15,30 45,42 45,70 15,58" fill="#c58e57"/>
                            <!-- Right Facet -->
                            <polygon points="45,42 75,30 75,58 45,70" fill="#d89f66"/>
                            <!-- Sealing Tape -->
                            <polygon points="42,20 48,22 48,43 42,41" fill="#b07b46" opacity="0.7"/>
                            <polygon points="42,41 48,43 48,70 42,70" fill="#a46d39" opacity="0.7"/>
                            <!-- Green Checkmark Circle Badge -->
                            <circle cx="73" cy="54" r="12" fill="#22c55e" stroke="#ffffff" stroke-width="2.5"/>
                            <path d="M69 54l3 3 6-6" stroke="#ffffff" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- 6. Pengembalian Peralatan Card -->
                <div id="pengembalian" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            6
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Pengembalian Peralatan
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Peralatan harus dikembalikan ke Unit Sarana dan Prasarana Perbanas Institute (Gedung Unit VI Lantai 1) pada tanggal dan jam yang telah ditentukan. Operator akan memeriksa kondisi peralatan dan mencatat pengembalian di sistem. Keterlambatan pengembalian akan dikenakan denda sesuai ketentuan.
                            </p>
                        </div>
                    </div>

                    <!-- Right Illustration: Cardboard Box with Blue Return Arrow Badge -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- Cardboard Box Isometric -->
                            <!-- Top Facet -->
                            <polygon points="45,18 75,30 45,42 15,30" fill="#e2b17b"/>
                            <!-- Left Facet -->
                            <polygon points="15,30 45,42 45,70 15,58" fill="#c58e57"/>
                            <!-- Right Facet -->
                            <polygon points="45,42 75,30 75,58 45,70" fill="#d89f66"/>
                            <!-- Sealing Tape -->
                            <polygon points="42,20 48,22 48,43 42,41" fill="#b07b46" opacity="0.7"/>
                            <polygon points="42,41 48,43 48,70 42,70" fill="#a46d39" opacity="0.7"/>
                            <!-- Blue Return Arrow Circle Badge -->
                            <circle cx="73" cy="54" r="12" fill="#2563eb" stroke="#ffffff" stroke-width="2.5"/>
                            <path d="M70 48v4h-4" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M70 52a4.5 4.5 0 1 1-1.3 3.2" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </div>

                <!-- 7. Denda dan Kerusakan Card -->
                <div id="denda" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            7
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Denda dan Kerusakan
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Denda keterlambatan dihitung per hari sesuai tarif yang ditetapkan. Jika terjadi kerusakan atau kehilangan, mahasiswa wajib mengganti biaya perbaikan atau penggantian sesuai ketentuan yang berlaku. Keputusan mengenai kerusakan, kehilangan, dan besaran biaya akan ditetapkan oleh admin.
                            </p>
                        </div>
                    </div>

                    <!-- Right Illustration: Red Alert Triangle and Gold Stacked Coins -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- Red Warning Triangle -->
                            <path d="M36 20l20 36H16L36 20z" fill="#ef4444" rx="4"/>
                            <rect x="34.5" y="32" width="3" height="12" rx="1.5" fill="#ffffff"/>
                            <circle cx="36" cy="49" r="1.8" fill="#ffffff"/>
                            <!-- Stacked Gold Coins on Right -->
                            <!-- Stack 1 (Back left) -->
                            <ellipse cx="62" cy="62" rx="8" ry="3.5" fill="#d97706"/>
                            <ellipse cx="62" cy="60" rx="8" ry="3.5" fill="#fbbf24"/>
                            <ellipse cx="62" cy="56" rx="8" ry="3.5" fill="#fbbf24"/>
                            <ellipse cx="62" cy="52" rx="8" ry="3.5" fill="#fde68a"/>
                            <!-- Stack 2 (Front right) -->
                            <ellipse cx="74" cy="64" rx="9" ry="4" fill="#d97706"/>
                            <ellipse cx="74" cy="60" rx="9" ry="4" fill="#f59e0b"/>
                            <ellipse cx="74" cy="56" rx="9" ry="4" fill="#fbbf24"/>
                            <ellipse cx="74" cy="52" rx="9" ry="4" fill="#fde68a"/>
                            <ellipse cx="74" cy="48" rx="9" ry="4" fill="#fef08a"/>
                        </svg>
                    </div>
                </div>

                <!-- 8. Pembatalan dan Perubahan Card -->
                <div id="pembatalan" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            8
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Pembatalan dan Perubahan
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Mahasiswa dapat mengajukan perubahan jadwal atau pembatalan pemesanan selama belum dilakukan pembayaran. Jika sudah melakukan pembayaran, perubahan atau pembatalan mengikuti ketentuan yang ditetapkan oleh admin.
                            </p>
                        </div>
                    </div>

                    <!-- Right Illustration: Document with Double Circular Sync Arrows -->
                    <div class="self-end md:self-center shrink-0">
                        <svg class="w-24 h-20" viewBox="0 0 100 80" fill="none">
                            <!-- Document Sheet -->
                            <rect x="18" y="10" width="55" height="60" rx="8" fill="#f0f9ff" stroke="#38bdf8" stroke-width="2"/>
                            <!-- Folded Corner -->
                            <path d="M60 10v12h13" fill="#bae6fd" stroke="#38bdf8" stroke-width="1.5"/>
                            <line x1="28" y1="26" x2="50" y2="26" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="28" y1="36" x2="62" y2="36" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <line x1="28" y1="46" x2="48" y2="46" stroke="#bae6fd" stroke-width="3" stroke-linecap="round"/>
                            <!-- Blue Sync / Reload Badge -->
                            <circle cx="70" cy="54" r="12" fill="#2563eb" stroke="#ffffff" stroke-width="2.5"/>
                            <!-- Sync Arrows inside -->
                            <path d="M66 50a4.5 4.5 0 0 1 7.2-1.2l1.3-1.3v4h-4l1.4-1.4A3 3 0 0 0 67 52" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M74 58a4.5 4.5 0 0 1-7.2 1.2l-1.3 1.3v-4h4l-1.4 1.4A3 3 0 0 0 73 56" stroke="#ffffff" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- 3-COLUMNS ROW: 9, 10, 11 -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-2">
                    
                    <!-- 9. Tanggung Jawab -->
                    <div id="tanggung-jawab" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm">
                                    9
                                </div>
                                <!-- Shield Outline Icon in Blue -->
                                <div class="text-blue-600">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                        <path d="M9 12l2 2 4-4"></path>
                                    </svg>
                                </div>
                            </div>
                            <h2 class="text-base font-bold text-slate-900 tracking-tight">
                                Tanggung Jawab
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Mahasiswa bertanggung jawab atas penggunaan peralatan sesuai dengan fungsinya. Peralatan tidak boleh dipindahtangankan kepada pihak lain selama masa sewa.
                            </p>
                        </div>
                    </div>

                    <!-- 10. Privasi dan Data -->
                    <div id="privasi" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm">
                                    10
                                </div>
                                <!-- Padlock Icon in Blue -->
                                <div class="text-blue-600">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                        <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                            <h2 class="text-base font-bold text-slate-900 tracking-tight">
                                Privasi dan Data
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Data pribadi pengguna hanya digunakan untuk keperluan layanan penyewaan dan tidak akan disebarluaskan kepada pihak ketiga tanpa persetujuan.
                            </p>
                        </div>
                    </div>

                    <!-- 11. Pelanggaran -->
                    <div id="pelanggaran" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-4">
                        <div class="space-y-3">
                            <div class="flex items-center justify-between">
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm">
                                    11
                                </div>
                                <!-- Gavel / Hammer Icon in Blue -->
                                <div class="text-blue-600">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M14.7 4.3a1 1 0 0 0-1.4 0l-1.6 1.6 4.4 4.4 1.6-1.6a1 1 0 0 0 0-1.4l-3-3zM10.3 7.3L3.7 13.9a1 1 0 0 0 0 1.4l4.4 4.4a1 1 0 0 0 1.4 0l6.6-6.6-5.8-5.8zM2 21h8v1H2z"/>
                                    </svg>
                                </div>
                            </div>
                            <h2 class="text-base font-bold text-slate-900 tracking-tight">
                                Pelanggaran
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pelanggaran terhadap kebijakan ini dapat menyebabkan penangguhan akun, pembatalan pemesanan, denda tambahan, atau sanksi lain sesuai keputusan kampus.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- 12. Perubahan Kebijakan Card (Full width) -->
                <div id="perubahan-kebijakan" class="scroll-mt-24 bg-white border border-slate-200/90 rounded-2xl p-6 sm:p-7 shadow-sm hover:shadow-md transition-shadow flex flex-col md:flex-row items-start justify-between gap-6 relative">
                    <div class="flex items-start gap-4">
                        <div class="w-8 h-8 sm:w-9 sm:h-9 rounded-full bg-blue-50 text-blue-600 font-bold flex items-center justify-center shrink-0 text-sm mt-0.5">
                            12
                        </div>
                        <div class="space-y-1.5 max-w-xl">
                            <h2 class="text-base sm:text-lg font-bold text-slate-900 tracking-tight">
                                Perubahan Kebijakan
                            </h2>
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed">
                                Pihak pengelola berhak mengubah kebijakan penyewaan sewaktu-waktu. Perubahan akan diumumkan melalui website dan berlaku sejak tanggal yang ditetapkan.
                            </p>
                        </div>
                    </div>

                    <!-- Right Icon: Document with lines / checklist -->
                    <div class="self-end md:self-center shrink-0 pr-2 text-blue-600">
                        <svg class="w-10 h-10 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                            <polyline points="14 2 14 8 20 8"></polyline>
                            <line x1="16" y1="13" x2="8" y2="13"></line>
                            <line x1="16" y1="17" x2="8" y2="17"></line>
                            <line x1="10" y1="9" x2="8" y2="9"></line>
                        </svg>
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
        const sections = document.querySelectorAll('.scroll-mt-24');
        const navLinks = document.querySelectorAll('.policy-nav-item');
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');

        function setActiveLink(id) {
            navLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === '#' + id) {
                    link.classList.remove('text-slate-600', 'hover:bg-slate-50', 'font-medium');
                    link.classList.add('text-blue-600', 'bg-blue-50', 'font-semibold');
                    const svg = link.querySelector('svg');
                    if (svg) {
                        svg.classList.remove('text-slate-400');
                        svg.classList.add('text-blue-600');
                    }
                } else {
                    link.classList.remove('text-blue-600', 'bg-blue-50', 'font-semibold');
                    link.classList.add('text-slate-600', 'font-medium');
                    const svg = link.querySelector('svg');
                    if (svg) {
                        svg.classList.remove('text-blue-600');
                        svg.classList.add('text-slate-400');
                    }
                }
            });

            mobileLinks.forEach(link => {
                const href = link.getAttribute('href');
                if (href === '#' + id) {
                    link.classList.remove('bg-white', 'text-slate-700', 'border-slate-200');
                    link.classList.add('bg-blue-600', 'text-white', 'font-semibold');
                } else {
                    link.classList.remove('bg-blue-600', 'text-white', 'font-semibold');
                    link.classList.add('bg-white', 'text-slate-700', 'border-slate-200', 'font-medium');
                }
            });
        }

        // Scroll spy with IntersectionObserver
        const observerOptions = {
            root: null,
            rootMargin: '-20% 0px -70% 0px',
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    setActiveLink(entry.target.id);
                }
            });
        }, observerOptions);

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>
@endpush
