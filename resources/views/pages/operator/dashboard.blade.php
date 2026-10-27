@extends('layouts.app')

@section('title', 'Dashboard Operator Loket - GearHub Perbanas Institute')

@section('content')
<div class="min-h-screen bg-[#F8FAFC] flex flex-col lg:flex-row font-sans text-slate-800 antialiased selection:bg-blue-600 selection:text-white">

    <!-- ========================================== -->
    <!-- 1. LEFT SIDEBAR (DARK NAVY WITH CAMPUS PHOTO) -->
    <!-- ========================================== -->
    <aside class="w-full lg:w-64 bg-[#0F172A] text-white shrink-0 flex flex-col justify-between border-r border-slate-800 lg:min-h-screen sticky top-0 z-30 select-none">
        
        <!-- Top Section: Brand & Nav Links -->
        <div class="flex-1 flex flex-col">
            <!-- Brand Logo -->
            <div class="px-6 py-6 border-b border-slate-800/80">
                <a href="{{ route('operator.dashboard') }}" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-blue-700 to-blue-500 flex items-center justify-center text-white shadow-md shadow-blue-500/20 group-hover:scale-105 transition-transform">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 2l7.5 4.33v8.66L12 22l-7.5-4.33V6.33L12 2z"/>
                            <circle cx="12" cy="12" r="3.2"/>
                        </svg>
                    </div>
                    <div>
                        <span class="text-xl font-extrabold font-['Space_Grotesk'] tracking-tight block text-white leading-tight">
                            Gear<span class="text-blue-400">Hub</span>
                        </span>
                        <span class="text-[10px] font-bold text-slate-400 uppercase tracking-widest block">
                            Operator Meja Loket
                        </span>
                    </div>
                </a>
            </div>

            <!-- Navigation Menu Items -->
            <nav class="p-3.5 space-y-1 text-sm font-medium" aria-label="Menu Operator">
                <!-- Dashboard (Active) -->
                <a href="{{ route('operator.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-[#2563EB] text-white font-semibold shadow-xs transition-colors">
                    <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>Dashboard</span>
                </a>

                <!-- Antrean Serah Terima (Badge 5) -->
                <a href="#tabel-layanan" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                        <span>Serah Terima Alat</span>
                    </div>
                    <span class="w-5 h-5 rounded-full bg-[#EA580C] text-white text-[11px] font-bold flex items-center justify-center">5</span>
                </a>

                <!-- Pengembalian Alat (Badge 3) -->
                <a href="#tabel-layanan" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path></svg>
                        <span>Pengembalian Alat</span>
                    </div>
                    <span class="w-5 h-5 rounded-full bg-[#EA580C] text-white text-[11px] font-bold flex items-center justify-center">3</span>
                </a>

                <!-- Brankas Jaminan KTM (Badge 14) -->
                <a href="#brankas-ktm" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line></svg>
                        <span>Brankas Jaminan KTM</span>
                    </div>
                    <span class="px-1.5 py-0.5 rounded-full bg-blue-600/80 text-white text-[10px] font-bold">14</span>
                </a>

                <!-- Denda & Pembayaran (Badge 2) -->
                <a href="#tugas-operator" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        <span>Kelola Denda Loket</span>
                    </div>
                    <span class="w-5 h-5 rounded-full bg-[#EA580C] text-white text-[11px] font-bold flex items-center justify-center">2</span>
                </a>

                <!-- Scan Barcode Tiket -->
                <button type="button" id="sidebar-scan-btn" class="w-full flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors text-left">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 7V5a2 2 0 0 1 2-2h2"></path><path d="M17 3h2a2 2 0 0 1 2 2v2"></path><path d="M21 17v2a2 2 0 0 1-2 2h-2"></path><path d="M7 21H5a2 2 0 0 1-2-2v-2"></path><rect x="7" y="7" width="10" height="10"></rect></svg>
                    <span>Scan Barcode Tiket</span>
                </button>

                <!-- Laporan Harian Loket -->
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                    <span>Laporan Harian Loket</span>
                </a>

                <!-- Switch to Admin Dashboard -->
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-blue-300 hover:text-white hover:bg-blue-950/40 border border-blue-900/40 transition-colors my-1">
                    <svg class="w-4 h-4 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                    <span>Buka Panel Admin</span>
                </a>

                <!-- Keluar -->
                <a href="{{ route('login') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-red-400 hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <span>Keluar</span>
                </a>
            </nav>
        </div>

        <!-- Bottom Section: Campus Backdrop & Operator Profile Card -->
        <div class="relative mt-4">
            <!-- Campus Building Photo Backdrop -->
            <div class="h-28 w-full overflow-hidden relative">
                <img src="/images/hero-campus.jpg" alt="Perbanas Institute Campus" class="w-full h-full object-cover opacity-35 filter brightness-90">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0F172A] via-[#0F172A]/70 to-transparent"></div>
            </div>

            <!-- Profile Info Footer -->
            <div class="p-4 border-t border-slate-800/80 bg-[#0B132B]/90 relative z-10 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-blue-600/80 border-2 border-blue-500/60 flex items-center justify-center text-white font-bold text-xs">
                        HS
                    </div>
                    <div class="leading-tight">
                        <span class="text-xs font-bold text-white block">{{ $operatorStaff['name'] }}</span>
                        <span class="text-[10px] text-slate-400 block font-normal">Petugas Meja Loket 1</span>
                    </div>
                </div>

                <a href="{{ route('login') }}" class="p-2 text-slate-400 hover:text-white transition-colors" title="Keluar">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                </a>
            </div>
        </div>

    </aside>

    <!-- ========================================== -->
    <!-- 2. MAIN DASHBOARD CONTENT AREA -->
    <!-- ========================================== -->
    <main class="flex-1 min-w-0 flex flex-col">

        <!-- TOP HEADER BAR -->
        <header class="h-20 bg-white border-b border-slate-200/80 px-6 sm:px-8 flex items-center justify-between sticky top-0 z-20">
            <!-- Search Bar / Barcode Input -->
            <div class="relative w-full max-w-md">
                <input type="text" id="header-search-input" placeholder="Scan tiket QR, kode booking, atau nama mahasiswa..." class="w-full pl-10 pr-4 py-2.5 text-xs bg-[#F1F5F9] border-none rounded-xl text-slate-700 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>

            <!-- Header Right Items: Status Desk, Bell & Date/Time -->
            <div class="flex items-center gap-6">
                <!-- Location indicator chip -->
                <div class="hidden md:flex items-center gap-2 px-3 py-1.5 rounded-xl bg-blue-50 border border-blue-200/80 text-[11px] text-blue-700 font-semibold">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></span>
                    <span>Loket Meja 1 &bull; Unit VI Lt 1</span>
                </div>

                <!-- Notification Bell with Red Badge -->
                <button type="button" class="relative p-2 text-slate-500 hover:text-slate-700 transition-colors" aria-label="Notifikasi">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                    <span class="absolute top-1 right-1 w-4 h-4 rounded-full bg-rose-500 text-white text-[10px] font-bold flex items-center justify-center">
                        3
                    </span>
                </button>

                <!-- Date & Time Display -->
                <div class="text-right leading-tight hidden sm:block">
                    <span class="text-xs font-bold text-slate-800 block">Rabu, 29 Oktober 2025</span>
                    <span class="text-[11px] text-slate-400 block">10:24 WIB</span>
                </div>
            </div>
        </header>

        <!-- DASHBOARD BODY CONTAINER -->
        <div class="p-6 sm:p-8 space-y-6 flex-1">

            <!-- GREETING SECTION -->
            <div class="flex items-center justify-between gap-4">
                <div class="flex items-center gap-3">
                    <span class="text-3xl animate-bounce">👋</span>
                    <div>
                        <h1 class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                            Selamat datang, Petugas Loket!
                        </h1>
                        <p class="text-xs text-slate-500 mt-0.5">
                            Berikut adalah ringkasan operasional serah terima dan brankas jaminan KTM hari ini di Gedung Unit VI Lantai 1.
                        </p>
                    </div>
                </div>

                <button type="button" id="btn-quick-walkin" class="hidden sm:inline-flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-xs transition-colors">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                    <span>Layani Walk-in Langsung</span>
                </button>
            </div>

            <!-- ========================================== -->
            <!-- 3. FOUR KPI STATS CARDS -->
            <!-- ========================================== -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                
                <!-- Card 1: Antrean Ambil Hari Ini -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#E0E7FF] text-[#2563EB] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">Antrean Ambil Hari Ini</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">{{ $kpis['antrean_ambil']['val'] }}</span>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                &uarr; {{ $kpis['antrean_ambil']['change'] }}
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">dari kemarin</span>
                    </div>
                </div>

                <!-- Card 2: Tenggat Pengembalian -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#DCFCE7] text-[#16A34A] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">Tenggat Pengembalian</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">{{ $kpis['tenggat_kembali']['val'] }}</span>
                            <span class="text-xs font-bold text-amber-600 inline-flex items-center">
                                Deadline 17:00
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">hari ini di loket Unit VI</span>
                    </div>
                </div>

                <!-- Card 3: KTM Fisik di Brankas -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFEDD5] text-[#EA580C] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">KTM Fisik di Brankas</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">{{ $kpis['ktm_ditahan']['val'] }}</span>
                            <span class="text-xs font-bold text-purple-600 inline-flex items-center">
                                Tersimpan
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">dalam laci brankas meja 1</span>
                    </div>
                </div>

                <!-- Card 4: Kas Denda Meja -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFE4E6] text-[#E11D48] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">Kas Denda Meja</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-xl sm:text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">{{ $kpis['kas_meja']['val'] }}</span>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                Siap setor
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">pembayaran tunai loket</span>
                    </div>
                </div>

            </div>

            <!-- ========================================== -->
            <!-- 4. ROW 2: CHARTS (TREN PELAYANAN & STATUS ALAT) -->
            <!-- ========================================== -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Chart 1: Tren Pelayanan Loket 7 Hari Terakhir (2 Cols) -->
                <div class="lg:col-span-2 bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <!-- Chart Header with Legend -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Tren Pelayanan Meja Loket 7 Hari Terakhir
                        </h2>

                        <div class="flex items-center gap-5 text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-[#2563EB]"></span>
                                <span class="text-slate-600 font-medium">Serah Terima Ambil</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-[#10B981] relative flex items-center justify-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                                </span>
                                <span class="text-slate-600 font-medium">Pengembalian Selesai</span>
                            </div>
                        </div>
                    </div>

                    <!-- Clean Responsive SVG Dual-Axis Chart -->
                    <div class="w-full h-64 relative">
                        <svg class="w-full h-full overflow-visible" viewBox="0 0 700 240" preserveAspectRatio="none">
                            <!-- Horizontal Gridlines -->
                            <line x1="45" y1="30" x2="635" y2="30" stroke="#F1F5F9" stroke-width="1.5" />
                            <line x1="45" y1="75" x2="635" y2="75" stroke="#F1F5F9" stroke-width="1.5" />
                            <line x1="45" y1="120" x2="635" y2="120" stroke="#F1F5F9" stroke-width="1.5" />
                            <line x1="45" y1="165" x2="635" y2="165" stroke="#F1F5F9" stroke-width="1.5" />
                            <line x1="45" y1="210" x2="635" y2="210" stroke="#E2E8F0" stroke-width="1.5" />

                            <!-- Left Y-Axis Labels (Ambil) -->
                            <text x="10" y="34" fill="#94A3B8" font-size="11" font-weight="600">20</text>
                            <text x="10" y="79" fill="#94A3B8" font-size="11" font-weight="600">15</text>
                            <text x="10" y="124" fill="#94A3B8" font-size="11" font-weight="600">10</text>
                            <text x="10" y="169" fill="#94A3B8" font-size="11" font-weight="600">5</text>
                            <text x="18" y="214" fill="#94A3B8" font-size="11" font-weight="600">0</text>

                            <!-- Right Y-Axis Labels (Kembali) -->
                            <text x="645" y="34" fill="#94A3B8" font-size="11" font-weight="600">20 unit</text>
                            <text x="645" y="79" fill="#94A3B8" font-size="11" font-weight="600">15 unit</text>
                            <text x="645" y="124" fill="#94A3B8" font-size="11" font-weight="600">10 unit</text>
                            <text x="645" y="169" fill="#94A3B8" font-size="11" font-weight="600">5 unit</text>
                            <text x="645" y="214" fill="#94A3B8" font-size="11" font-weight="600">0 unit</text>

                            <!-- BAR CHART (Royal Blue Rounded Bars) -->
                            <rect x="75" y="174" width="28" height="36" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors" />
                            <rect x="155" y="138" width="28" height="72" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors" />
                            <rect x="235" y="120" width="28" height="90" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors" />
                            <rect x="315" y="120" width="28" height="90" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors" />
                            <rect x="395" y="75" width="28" height="135" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors" />
                            <rect x="475" y="93" width="28" height="117" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors" />
                            <rect x="555" y="84" width="28" height="126" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors" />

                            <!-- LINE CHART (Emerald Curve Line with Points) -->
                            <path d="M 89 183 Q 129 147 169 147 T 249 129 T 329 138 T 409 84 T 489 102 T 569 93" fill="none" stroke="#10B981" stroke-width="2.5" />

                            <!-- Line Points -->
                            <circle cx="89" cy="183" r="4" fill="#10B981" stroke="#ffffff" stroke-width="2" />
                            <circle cx="169" cy="147" r="4" fill="#10B981" stroke="#ffffff" stroke-width="2" />
                            <circle cx="249" cy="129" r="4" fill="#10B981" stroke="#ffffff" stroke-width="2" />
                            <circle cx="329" cy="138" r="4" fill="#10B981" stroke="#ffffff" stroke-width="2" />
                            <circle cx="409" cy="84" r="4" fill="#10B981" stroke="#ffffff" stroke-width="2" />
                            <circle cx="489" cy="102" r="4" fill="#10B981" stroke="#ffffff" stroke-width="2" />
                            <circle cx="569" cy="93" r="4" fill="#10B981" stroke="#ffffff" stroke-width="2" />

                            <!-- X-Axis Date Labels -->
                            <text x="75" y="232" fill="#64748B" font-size="11" font-weight="600">23 Okt</text>
                            <text x="155" y="232" fill="#64748B" font-size="11" font-weight="600">24 Okt</text>
                            <text x="235" y="232" fill="#64748B" font-size="11" font-weight="600">25 Okt</text>
                            <text x="315" y="232" fill="#64748B" font-size="11" font-weight="600">26 Okt</text>
                            <text x="395" y="232" fill="#64748B" font-size="11" font-weight="600">27 Okt</text>
                            <text x="475" y="232" fill="#64748B" font-size="11" font-weight="600">28 Okt</text>
                            <text x="555" y="232" fill="#64748B" font-size="11" font-weight="600">29 Okt</text>
                        </svg>
                    </div>
                </div>

                <!-- Chart 2: Status Alat di Meja Loket Donut (1 Col) -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk'] mb-4">
                        Status Alat di Meja Loket
                    </h2>

                    <div class="flex items-center justify-between gap-4">
                        <!-- Donut Graphic -->
                        <div class="relative w-36 h-36 shrink-0 flex items-center justify-center">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                                <!-- Background Circle -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#F1F5F9" stroke-width="16" />
                                
                                <!-- Segments matching status -->
                                <!-- 1. Siap di Meja Loket (45%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#2563EB" stroke-width="16" stroke-dasharray="108 240" stroke-dashoffset="0" />
                                <!-- 2. Sedang Dipinjam Mhs (30%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#10B981" stroke-width="16" stroke-dasharray="72 240" stroke-dashoffset="-108" />
                                <!-- 3. Menunggu Cek Fisik (15%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#F59E0B" stroke-width="16" stroke-dasharray="36 240" stroke-dashoffset="-180" />
                                <!-- 4. Maintenance Loket (10%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#EF4444" stroke-width="16" stroke-dasharray="24 240" stroke-dashoffset="-216" />
                            </svg>

                            <!-- Center Label -->
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <span class="text-xl font-extrabold text-slate-900 font-['Space_Grotesk'] leading-none">48</span>
                                <span class="text-[10px] text-slate-400 font-semibold mt-0.5">Alat</span>
                            </div>
                        </div>

                        <!-- Legend Details -->
                        <div class="flex-1 space-y-2.5 text-xs">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#2563EB] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Siap di Meja Loket</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">45%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#10B981] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Sedang Dipinjam</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">30%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#F59E0B] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Menunggu Cek Fisik</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">15%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#EF4444] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Perawatan/Rusak</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">10%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ========================================== -->
            <!-- 5. ROW 3: ANTREAN MEJA LOKET & TUGAS OPERATOR -->
            <!-- ========================================== -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6" id="tabel-layanan">

                <!-- Table: Antrean Pelayanan Loket (2 Cols) -->
                <div class="lg:col-span-2 bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-2">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Antrean Pelayanan Meja Loket Hari Ini
                        </h2>
                        <span class="text-xs text-blue-600 font-bold">
                            5 Transaksi Menunggu
                        </span>
                    </div>

                    <!-- Clean Responsive Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <thead>
                                <tr class="text-slate-400 font-semibold border-b border-slate-100">
                                    <th class="py-3 px-2">No</th>
                                    <th class="py-3 px-3">Nama Mahasiswa</th>
                                    <th class="py-3 px-3">Barang</th>
                                    <th class="py-3 px-3">Jenis Layanan</th>
                                    <th class="py-3 px-3">Jadwal / Waktu</th>
                                    <th class="py-3 px-2 text-center">Aksi Loket</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-slate-700">
                                @foreach($recentOrders as $order)
                                    <tr class="hover:bg-slate-50/60 transition-colors">
                                        <td class="py-3.5 px-2 font-medium text-slate-500">{{ $order['no'] }}</td>
                                        <td class="py-3.5 px-3">
                                            <div class="flex items-center gap-2.5">
                                                <div class="w-7 h-7 rounded-full bg-slate-800 text-white font-bold text-[10px] flex items-center justify-center">
                                                    {{ $order['avatar'] }}
                                                </div>
                                                <div>
                                                    <span class="font-bold text-slate-800 block">{{ $order['student'] }}</span>
                                                    <span class="text-[10px] text-purple-700 font-mono">{{ $order['drawer'] }}</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-3.5 px-3 text-slate-600 font-medium">{{ $order['item'] }}</td>
                                        <td class="py-3.5 px-3">
                                            @if($order['service_type'] === 'Ambil Alat')
                                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-blue-50 text-blue-700 border border-blue-200">
                                                    Ambil Alat
                                                </span>
                                            @else
                                                <span class="px-2 py-0.5 rounded text-[10px] font-bold bg-amber-50 text-amber-700 border border-amber-200">
                                                    Kembali Alat
                                                </span>
                                            @endif
                                        </td>
                                        <td class="py-3.5 px-3 text-slate-500">{{ $order['date'] }}</td>
                                        <td class="py-3.5 px-2 text-center">
                                            @if($order['service_type'] === 'Ambil Alat')
                                                <button type="button" class="btn-handover-trigger px-3 py-1.5 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-bold text-[11px] shadow-xs transition-colors" data-student="{{ $order['student'] }}" data-item="{{ $order['item'] }}" data-slot="{{ $order['drawer'] }}">
                                                    Serah Terima
                                                </button>
                                            @else
                                                <button type="button" class="btn-return-trigger px-3 py-1.5 rounded-xl bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-[11px] shadow-xs transition-colors" data-student="{{ $order['student'] }}" data-item="{{ $order['item'] }}" data-slot="{{ $order['drawer'] }}">
                                                    Cek & Balik KTM
                                                </button>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Right Card: Tugas Meja Loket (1 Col) -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between" id="tugas-operator">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-2">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Tugas Meja Loket
                        </h2>
                        <span class="text-xs text-blue-600 font-bold">Shift Meja 1</span>
                    </div>

                    <div class="space-y-4">
                        <!-- Task 1 -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E0E7FF] text-[#2563EB] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Serah Terima Pengambilan</h3>
                                    <p class="text-[11px] text-slate-400">Cek fisik unit & simpan KTM asli</p>
                                </div>
                            </div>
                            <span class="w-6 h-6 rounded-full bg-rose-50 text-rose-500 text-xs font-bold flex items-center justify-center">
                                5
                            </span>
                        </div>

                        <!-- Task 2 -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#FFEDD5] text-[#EA580C] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Pemeriksaan Pengembalian</h3>
                                    <p class="text-[11px] text-slate-400">Tes fungsi & kembalikan kartu KTM</p>
                                </div>
                            </div>
                            <span class="w-6 h-6 rounded-full bg-orange-50 text-orange-500 text-xs font-bold flex items-center justify-center">
                                3
                            </span>
                        </div>

                        <!-- Task 3 -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E0F2FE] text-[#0284C7] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Brankas Jaminan KTM</h3>
                                    <p class="text-[11px] text-slate-400">Kartu fisik tersimpan di laci loket</p>
                                </div>
                            </div>
                            <span class="px-2 py-0.5 rounded-full bg-sky-50 text-sky-600 text-xs font-bold flex items-center justify-center">
                                14
                            </span>
                        </div>

                        <!-- Task 4 -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#F3E8FF] text-[#9333EA] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Setoran Kas Denda</h3>
                                    <p class="text-[11px] text-slate-400">Denda keterlambatan siap setor</p>
                                </div>
                            </div>
                            <span class="w-6 h-6 rounded-full bg-purple-50 text-purple-500 text-xs font-bold flex items-center justify-center">
                                2
                            </span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ========================================== -->
            <!-- 6. ROW 4: BOTTOM THREE COLUMNS -->
            <!-- ========================================== -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="brankas-ktm">

                <!-- Col 1: Brankas Jaminan KTM Terkini -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Brankas Jaminan KTM
                        </h2>
                        <span class="text-xs text-purple-700 font-bold">Laci Meja 1</span>
                    </div>

                    <div class="space-y-3">
                        @foreach($ktmSafebox as $ktm)
                            <div class="flex items-center justify-between py-1.5 border-b border-slate-50 text-xs">
                                <div class="flex items-center gap-2">
                                    <span class="px-2 py-0.5 rounded font-mono font-bold text-purple-700 bg-purple-50 border border-purple-200">
                                        {{ $ktm['slot'] }}
                                    </span>
                                    <div>
                                        <span class="font-bold text-slate-800 block">{{ $ktm['student'] }}</span>
                                        <span class="text-[10px] text-slate-400">{{ $ktm['item'] }}</span>
                                    </div>
                                </div>
                                <span class="text-[10px] text-slate-400">{{ $ktm['time'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Col 2: Ringkasan Meja Loket -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="pb-3 border-b border-slate-100 mb-4">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Ringkasan Meja Loket
                        </h2>
                    </div>

                    <div class="space-y-4">
                        <!-- Total Transaksi -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E0E7FF] text-[#2563EB] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
                                </div>
                                <div>
                                    <span class="text-xs font-semibold text-slate-500 block">Total Dilayani Hari Ini</span>
                                    <span class="text-sm font-extrabold text-slate-900 font-['Space_Grotesk']">18 Mahasiswa</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                &uarr; 100% tepat
                            </span>
                        </div>

                        <!-- Mahasiswa Aktif -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E0F2FE] text-[#0284C7] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                                </div>
                                <div>
                                    <span class="text-xs font-semibold text-slate-500 block">Kepatuhan Pengembalian</span>
                                    <span class="text-sm font-extrabold text-slate-900 font-['Space_Grotesk']">96.4%</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                Sangat Baik
                            </span>
                        </div>

                        <!-- Rata-rata Waktu Proses -->
                        <div>
                            <div class="flex items-center justify-between mb-1.5">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-[#F3E8FF] text-[#9333EA] flex items-center justify-center shrink-0">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                                    </div>
                                    <div>
                                        <span class="text-xs font-semibold text-slate-500 block">Rata-rata Waktu Pelayanan</span>
                                        <span class="text-sm font-extrabold text-slate-900 font-['Space_Grotesk']">4.2 menit</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Progress Bar -->
                            <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden mt-2">
                                <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-full rounded-full" style="width: 35%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Col 3: Aktivitas Terbaru Meja Pelayanan -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Aktivitas Meja Pelayanan
                        </h2>
                        <span class="text-xs text-slate-400">Real-time</span>
                    </div>

                    <div class="space-y-3.5 text-xs">
                        @foreach($recentActivities as $act)
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold text-slate-900 leading-tight">{{ $act['title'] }}</h3>
                                    <p class="text-[11px] text-slate-400 mt-0.5">{{ $act['meta'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div>
    </main>

</div>

<!-- INTERACTIVE MODAL 1: SERAH TERIMA & PENAHANAN KTM -->
<div id="modal-op-handover" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full overflow-hidden shadow-2xl border border-slate-100 animate-in fade-in zoom-in-95 duration-150">
        <div class="p-6 bg-slate-900 text-white flex items-center justify-between">
            <div>
                <h3 class="text-base font-extrabold font-['Space_Grotesk'] leading-tight">Serah Terima & Penahanan KTM</h3>
                <p class="text-xs text-slate-300">Meja Pelayanan Loket Gedung Unit VI Lantai 1</p>
            </div>
            <button type="button" id="close-modal-op-handover" class="p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <div class="p-6 space-y-4 text-xs">
            <div class="p-3.5 bg-blue-50 rounded-xl border border-blue-100 space-y-1">
                <div class="flex justify-between">
                    <span class="text-slate-500">Nama Mahasiswa:</span>
                    <span id="ho-modal-student" class="font-bold text-slate-800">Andi Pratama</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Peralatan:</span>
                    <span id="ho-modal-item" class="font-bold text-slate-800">Kamera Sony A6400</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Lokasi Slot Laci:</span>
                    <span id="ho-modal-slot" class="font-bold text-purple-700">Laci A-02</span>
                </div>
            </div>

            <div class="space-y-2.5 pt-2">
                <span class="font-bold text-slate-800 block text-xs uppercase tracking-wider">Checklist Petugas Loket:</span>
                
                <label class="flex items-start gap-2.5 cursor-pointer">
                    <input type="checkbox" checked class="mt-0.5 rounded text-blue-600 focus:ring-blue-500">
                    <span>Fisik unit dan baterai telah dicek bersama mahasiswa.</span>
                </label>
                <label class="flex items-start gap-2.5 cursor-pointer">
                    <input type="checkbox" checked class="mt-0.5 rounded text-blue-600 focus:ring-blue-500">
                    <span>Aksesoris (charger, kabel, tas) lengkap sesuai BAST.</span>
                </label>
                <label class="flex items-start gap-2.5 cursor-pointer">
                    <input type="checkbox" checked class="mt-0.5 rounded text-blue-600 focus:ring-blue-500">
                    <span>KTM fisik asli diterima dan disimpan di slot laci yang tertera.</span>
                </label>
            </div>
        </div>

        <div class="p-4 bg-slate-50 border-t border-slate-100 flex items-center justify-end gap-3">
            <button type="button" id="btn-cancel-modal-ho" class="px-4 py-2 border border-slate-200 text-slate-600 text-xs font-bold rounded-xl hover:bg-slate-100">
                Batal
            </button>
            <button type="button" id="btn-confirm-modal-ho" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-xs">
                Konfirmasi Serah Terima Barang
            </button>
        </div>
    </div>
</div>

<!-- INTERACTIVE MODAL 2: INSPEKSI PENGEMBALIAN & BALIK KTM -->
<div id="modal-op-return" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full overflow-hidden shadow-2xl border border-slate-100 animate-in fade-in zoom-in-95 duration-150">
        <div class="p-6 bg-slate-900 text-white flex items-center justify-between">
            <div>
                <h3 class="text-base font-extrabold font-['Space_Grotesk'] leading-tight">Inspeksi Pengembalian Fisik</h3>
                <p class="text-xs text-slate-300">Penerbitan BAST & Serah Balik KTM Mahasiswa</p>
            </div>
            <button type="button" id="close-modal-op-return" class="p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <div class="p-6 space-y-4 text-xs">
            <div class="p-3.5 bg-emerald-50 rounded-xl border border-emerald-200 space-y-1">
                <div class="flex justify-between">
                    <span class="text-slate-500">Nama Mahasiswa:</span>
                    <span id="ret-modal-student" class="font-bold text-slate-800">Dewi Lestari</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Peralatan:</span>
                    <span id="ret-modal-item" class="font-bold text-slate-800">Mic Wireless Saramonic</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Ambil KTM dari Slot:</span>
                    <span id="ret-modal-slot" class="font-bold text-purple-700">Laci C-01</span>
                </div>
            </div>

            <div class="space-y-2.5">
                <span class="font-bold text-slate-800 block text-xs uppercase tracking-wider">Hasil Pemeriksaan Petugas:</span>
                
                <label class="flex items-start gap-2.5 cursor-pointer">
                    <input type="checkbox" checked class="mt-0.5 rounded text-emerald-600 focus:ring-emerald-500">
                    <span>Fungsi alat normal, bersih, dan tanpa cacat baru.</span>
                </label>
                <label class="flex items-start gap-2.5 cursor-pointer">
                    <input type="checkbox" checked class="mt-0.5 rounded text-emerald-600 focus:ring-emerald-500">
                    <span>Aksesoris kembali utuh dan kabel rapi.</span>
                </label>
                <label class="flex items-start gap-2.5 cursor-pointer">
                    <input type="checkbox" checked class="mt-0.5 rounded text-emerald-600 focus:ring-emerald-500">
                    <span>KTM fisik asli diserahkan kembali kepada mahasiswa.</span>
                </label>
            </div>
        </div>

        <div class="p-4 bg-slate-50 border-t border-slate-100 flex items-center justify-end gap-3">
            <button type="button" id="btn-cancel-modal-ret" class="px-4 py-2 border border-slate-200 text-slate-600 text-xs font-bold rounded-xl hover:bg-slate-100">
                Tutup
            </button>
            <button type="button" id="btn-confirm-modal-ret" class="px-5 py-2 bg-emerald-600 hover:bg-emerald-700 text-white text-xs font-bold rounded-xl shadow-xs">
                Selesaikan Pengembalian & Cetak BAST
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Handover Modal
        const hoModal = document.getElementById('modal-op-handover');
        const closeHo = document.getElementById('close-modal-op-handover');
        const cancelHo = document.getElementById('btn-cancel-modal-ho');
        const confirmHo = document.getElementById('btn-confirm-modal-ho');

        document.querySelectorAll('.btn-handover-trigger').forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('ho-modal-student').textContent = this.getAttribute('data-student');
                document.getElementById('ho-modal-item').textContent = this.getAttribute('data-item');
                document.getElementById('ho-modal-slot').textContent = this.getAttribute('data-slot');
                hoModal.classList.remove('hidden');
            });
        });

        if (closeHo) closeHo.addEventListener('click', () => hoModal.classList.add('hidden'));
        if (cancelHo) cancelHo.addEventListener('click', () => hoModal.classList.add('hidden'));
        if (confirmHo) {
            confirmHo.addEventListener('click', function () {
                alert('Serah terima fisik berhasil! KTM fisik mahasiswa tersimpan di laci brankas meja loket.');
                hoModal.classList.add('hidden');
            });
        }

        // Return Modal
        const retModal = document.getElementById('modal-op-return');
        const closeRet = document.getElementById('close-modal-op-return');
        const cancelRet = document.getElementById('btn-cancel-modal-ret');
        const confirmRet = document.getElementById('btn-confirm-modal-ret');

        document.querySelectorAll('.btn-return-trigger').forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('ret-modal-student').textContent = this.getAttribute('data-student');
                document.getElementById('ret-modal-item').textContent = this.getAttribute('data-item');
                document.getElementById('ret-modal-slot').textContent = this.getAttribute('data-slot');
                retModal.classList.remove('hidden');
            });
        });

        if (closeRet) closeRet.addEventListener('click', () => retModal.classList.add('hidden'));
        if (cancelRet) cancelRet.addEventListener('click', () => retModal.classList.add('hidden'));
        if (confirmRet) {
            confirmRet.addEventListener('click', function () {
                alert('Pemeriksaan pengembalian selesai! KTM fisik asli telah diserahkan kembali kepada mahasiswa.');
                retModal.classList.add('hidden');
            });
        }

        // Scan barcode simulation
        const scanBtn = document.getElementById('sidebar-scan-btn');
        if (scanBtn) {
            scanBtn.addEventListener('click', function () {
                const code = prompt('Simulasi Scan Barcode Tiket QR Mahasiswa:', 'GH-2026-1027-01');
                if (code) {
                    alert('Tiket ' + code + ' terdeteksi! Membuka formulir serah terima meja loket...');
                    hoModal.classList.remove('hidden');
                }
            });
        }

        // Quick walk-in simulation
        const walkinBtn = document.getElementById('btn-quick-walkin');
        if (walkinBtn) {
            walkinBtn.addEventListener('click', function () {
                alert('Membuka formulir peminjaman langsung (Walk-in) di Meja Loket Unit VI Lt 1.');
            });
        }

        // Close on background click
        window.addEventListener('click', function (e) {
            if (e.target === hoModal) hoModal.classList.add('hidden');
            if (e.target === retModal) retModal.classList.add('hidden');
        });
    });
</script>
@endsection
