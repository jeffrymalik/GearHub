@extends('layouts.app')

@section('title', 'Dashboard Admin - GearHub Perbanas Institute')

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
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 group">
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
                            Perbanas Institute
                        </span>
                    </div>
                </a>
            </div>

            <!-- Navigation Menu Items -->
            <nav class="p-3.5 space-y-1 text-sm font-medium" aria-label="Menu Admin">
                <!-- Dashboard (Active) -->
                <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl bg-[#2563EB] text-white font-semibold shadow-xs transition-colors">
                    <svg class="w-4 h-4 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    <span>Dashboard</span>
                </a>

                <!-- Kelola Produk -->
                <a href="{{ route('katalog') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path></svg>
                    <span>Kelola Produk</span>
                </a>

                <!-- Kelola Kategori -->
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                    <span>Kelola Kategori</span>
                </a>

                <!-- Pemesanan (Badge 7) -->
                <a href="#tabel-pesanan" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                        <span>Pemesanan</span>
                    </div>
                    <span class="w-5 h-5 rounded-full bg-[#EA580C] text-white text-[11px] font-bold flex items-center justify-center">7</span>
                </a>

                <!-- Verifikasi Mahasiswa (Badge 5) -->
                <a href="#tugas-admin" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><polyline points="16 11 18 13 22 9"></polyline></svg>
                        <span>Verifikasi Mahasiswa</span>
                    </div>
                    <span class="w-5 h-5 rounded-full bg-[#EA580C] text-white text-[11px] font-bold flex items-center justify-center">5</span>
                </a>

                <!-- Pengembalian (Badge 3) -->
                <a href="#tugas-admin" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path><path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path><path d="M8 16H3v5"></path></svg>
                        <span>Pengembalian</span>
                    </div>
                    <span class="w-5 h-5 rounded-full bg-[#EA580C] text-white text-[11px] font-bold flex items-center justify-center">3</span>
                </a>

                <!-- Denda (Badge 2) -->
                <a href="#tugas-admin" class="flex items-center justify-between px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <div class="flex items-center gap-3">
                        <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                        <span>Denda</span>
                    </div>
                    <span class="w-5 h-5 rounded-full bg-[#EA580C] text-white text-[11px] font-bold flex items-center justify-center">2</span>
                </a>

                <!-- Laporan -->
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>
                    <span>Laporan</span>
                </a>

                <!-- Pengaturan -->
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                <!-- Pengaturan -->
                <a href="#" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    <span>Pengaturan</span>
                </a>

                <!-- Panel Operator Loket Shortcut -->
                <a href="{{ route('operator.dashboard') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-amber-300 hover:text-white hover:bg-amber-950/40 border border-amber-800/40 transition-colors my-1">
                    <svg class="w-4 h-4 text-amber-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l7.5 4.33v8.66L12 22l-7.5-4.33V6.33L12 2z"/><circle cx="12" cy="12" r="3.2"/></svg>
                    <span>Mode Operator Loket</span>
                </a>

                <!-- Keluar -->
                <a href="{{ route('login') }}" class="flex items-center gap-3 px-3.5 py-2.5 rounded-xl text-slate-400 hover:text-red-400 hover:bg-slate-800/60 transition-colors">
                    <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    <span>Keluar</span>
                </a>
            </nav>
        </div>

        <!-- Bottom Section: Campus Backdrop & Admin Profile Card -->
        <div class="relative mt-4">
            <!-- Campus Building Photo Backdrop -->
            <div class="h-28 w-full overflow-hidden relative">
                <img src="/images/hero-campus.jpg" alt="Perbanas Institute Campus" class="w-full h-full object-cover opacity-35 filter brightness-90">
                <div class="absolute inset-0 bg-gradient-to-t from-[#0F172A] via-[#0F172A]/70 to-transparent"></div>
            </div>

            <!-- Profile Info Footer -->
            <div class="p-4 border-t border-slate-800/80 bg-[#0B132B]/90 relative z-10 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full bg-slate-700 border-2 border-slate-600 flex items-center justify-center text-slate-300">
                        <svg class="w-5 h-5 text-slate-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                    <div class="leading-tight">
                        <span class="text-xs font-bold text-white block">Admin GearHub</span>
                        <span class="text-[10px] text-slate-400 block font-normal">Administrator</span>
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
            <!-- Search Bar -->
            <div class="relative w-full max-w-md">
                <input type="text" placeholder="Cari produk, pemesanan, mahasiswa..." class="w-full pl-10 pr-4 py-2.5 text-xs bg-[#F1F5F9] border-none rounded-xl text-slate-700 placeholder:text-slate-400 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>

            <!-- Header Right Items: Notification Bell & Date/Time -->
            <div class="flex items-center gap-6">
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
            <div class="flex items-center gap-3">
                <span class="text-3xl animate-bounce">👋</span>
                <div>
                    <h1 class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                        Selamat datang, Admin!
                    </h1>
                    <p class="text-xs text-slate-500 mt-0.5">
                        Berikut adalah ringkasan aktivitas GearHub hari ini.
                    </p>
                </div>
            </div>

            <!-- ========================================== -->
            <!-- 3. FOUR KPI STATS CARDS -->
            <!-- ========================================== -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
                
                <!-- Card 1: Total Produk -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#E0E7FF] text-[#2563EB] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">Total Produk</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">124</span>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                &uarr; 5%
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">dari bulan lalu</span>
                    </div>
                </div>

                <!-- Card 2: Pemesanan Aktif -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#DCFCE7] text-[#16A34A] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">Pemesanan Aktif</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">18</span>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                &uarr; 12%
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">dari bulan lalu</span>
                    </div>
                </div>

                <!-- Card 3: Mahasiswa Terdaftar -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFEDD5] text-[#EA580C] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">Mahasiswa Terdaftar</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">342</span>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                &uarr; 8%
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">dari bulan lalu</span>
                    </div>
                </div>

                <!-- Card 4: Total Denda -->
                <div class="bg-white rounded-2xl p-5 border border-slate-100 shadow-xs flex items-center gap-4">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFE4E6] text-[#E11D48] flex items-center justify-center shrink-0">
                        <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                    </div>
                    <div>
                        <span class="text-xs font-semibold text-slate-500 block">Total Denda</span>
                        <div class="flex items-baseline gap-2 mt-0.5">
                            <span class="text-xl sm:text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">Rp 1.250.000</span>
                            <span class="text-xs font-bold text-rose-500 inline-flex items-center">
                                &darr; 3%
                            </span>
                        </div>
                        <span class="text-[11px] text-slate-400 block mt-0.5">dari bulan lalu</span>
                    </div>
                </div>

            </div>

            <!-- ========================================== -->
            <!-- 4. ROW 2: CHARTS (TREN PEMESANAN & KATEGORI PRODUK) -->
            <!-- ========================================== -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

                <!-- Chart 1: Tren Pemesanan 7 Hari Terakhir (2 Cols) -->
                <div class="lg:col-span-2 bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <!-- Chart Header with Legend -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 mb-6">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Tren Pemesanan 7 Hari Terakhir
                        </h2>

                        <div class="flex items-center gap-5 text-xs">
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-[#2563EB]"></span>
                                <span class="text-slate-600 font-medium">Jumlah Pemesanan</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-[#38BDF8] relative flex items-center justify-center">
                                    <span class="w-1.5 h-1.5 rounded-full bg-white"></span>
                                </span>
                                <span class="text-slate-600 font-medium">Total Pendapatan</span>
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

                            <!-- Left Y-Axis Labels (Orders) -->
                            <text x="10" y="34" fill="#94A3B8" font-size="11" font-weight="600">25</text>
                            <text x="10" y="79" fill="#94A3B8" font-size="11" font-weight="600">20</text>
                            <text x="10" y="124" fill="#94A3B8" font-size="11" font-weight="600">15</text>
                            <text x="10" y="169" fill="#94A3B8" font-size="11" font-weight="600">10</text>
                            <text x="18" y="214" fill="#94A3B8" font-size="11" font-weight="600">0</text>

                            <!-- Right Y-Axis Labels (Revenue) -->
                            <text x="645" y="34" fill="#94A3B8" font-size="11" font-weight="600">Rp 10 jt</text>
                            <text x="645" y="79" fill="#94A3B8" font-size="11" font-weight="600">Rp 7,5 jt</text>
                            <text x="645" y="124" fill="#94A3B8" font-size="11" font-weight="600">Rp 5 jt</text>
                            <text x="645" y="169" fill="#94A3B8" font-size="11" font-weight="600">Rp 2,5 jt</text>
                            <text x="645" y="214" fill="#94A3B8" font-size="11" font-weight="600">Rp 0</text>

                            <!-- BAR CHART (Blue Rounded Bars) -->
                            <!-- 23 Okt: val 4 (height 29) -->
                            <rect x="75" y="174" width="28" height="36" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors cursor-pointer" />
                            <!-- 24 Okt: val 8 (height 58) -->
                            <rect x="155" y="145" width="28" height="65" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors cursor-pointer" />
                            <!-- 25 Okt: val 10 (height 72) -->
                            <rect x="235" y="130" width="28" height="80" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors cursor-pointer" />
                            <!-- 26 Okt: val 10 (height 72) -->
                            <rect x="315" y="130" width="28" height="80" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors cursor-pointer" />
                            <!-- 27 Okt: val 15 (height 108) -->
                            <rect x="395" y="95" width="28" height="115" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors cursor-pointer" />
                            <!-- 28 Okt: val 13 (height 94) -->
                            <rect x="475" y="110" width="28" height="100" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors cursor-pointer" />
                            <!-- 29 Okt: val 14 (height 101) -->
                            <rect x="555" y="103" width="28" height="107" rx="4" fill="#3B82F6" class="hover:fill-blue-700 transition-colors cursor-pointer" />

                            <!-- LINE CHART (Cyan Curve Line with Points) -->
                            <path d="M 89 155 Q 129 110 169 105 T 249 122 T 329 98 T 409 68 T 489 74 T 569 66" fill="none" stroke="#38BDF8" stroke-width="2.5" />

                            <!-- Line Points -->
                            <circle cx="89" cy="155" r="4" fill="#38BDF8" stroke="#ffffff" stroke-width="2" />
                            <circle cx="169" cy="105" r="4" fill="#38BDF8" stroke="#ffffff" stroke-width="2" />
                            <circle cx="249" cy="122" r="4" fill="#38BDF8" stroke="#ffffff" stroke-width="2" />
                            <circle cx="329" cy="98" r="4" fill="#38BDF8" stroke="#ffffff" stroke-width="2" />
                            <circle cx="409" cy="68" r="4" fill="#38BDF8" stroke="#ffffff" stroke-width="2" />
                            <circle cx="489" cy="74" r="4" fill="#38BDF8" stroke="#ffffff" stroke-width="2" />
                            <circle cx="569" cy="66" r="4" fill="#38BDF8" stroke="#ffffff" stroke-width="2" />

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

                <!-- Chart 2: Kategori Produk Donut (1 Col) -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk'] mb-4">
                        Kategori Produk
                    </h2>

                    <div class="flex items-center justify-between gap-4">
                        <!-- Donut Graphic -->
                        <div class="relative w-36 h-36 shrink-0 flex items-center justify-center">
                            <svg class="w-full h-full transform -rotate-90" viewBox="0 0 100 100">
                                <!-- Background Circle -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#F1F5F9" stroke-width="16" />
                                
                                <!-- Segments matching image -->
                                <!-- 1. Blue (28%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#3B82F6" stroke-width="16" stroke-dasharray="67 240" stroke-dashoffset="0" />
                                <!-- 2. Red (22%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#EF4444" stroke-width="16" stroke-dasharray="52 240" stroke-dashoffset="-67" />
                                <!-- 3. Green (13%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#10B981" stroke-width="16" stroke-dasharray="31 240" stroke-dashoffset="-119" />
                                <!-- 4. Cyan (18%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#0284C7" stroke-width="16" stroke-dasharray="43 240" stroke-dashoffset="-150" />
                                <!-- 5. Orange (11%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#F59E0B" stroke-width="16" stroke-dasharray="26 240" stroke-dashoffset="-193" />
                                <!-- 6. Grey (8%) -->
                                <circle cx="50" cy="50" r="38" fill="transparent" stroke="#94A3B8" stroke-width="16" stroke-dasharray="19 240" stroke-dashoffset="-219" />
                            </svg>

                            <!-- Center Label -->
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                                <span class="text-xl font-extrabold text-slate-900 font-['Space_Grotesk'] leading-none">124</span>
                                <span class="text-[10px] text-slate-400 font-semibold mt-0.5">Produk</span>
                            </div>
                        </div>

                        <!-- Legend Details -->
                        <div class="flex-1 space-y-2 text-xs">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#3B82F6] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Kamera & Fotografi</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">28%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#EF4444] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Audio & Sound System</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">22%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#0284C7] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Multimedia & IT</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">18%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#10B981] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Komputer & Laptop</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">13%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#F59E0B] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Perlengkapan Acara</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">11%</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-2 truncate">
                                    <span class="w-2.5 h-2.5 rounded-full bg-[#94A3B8] shrink-0"></span>
                                    <span class="text-slate-600 truncate">Lainnya</span>
                                </div>
                                <span class="text-slate-700 font-bold ml-2">8%</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- ========================================== -->
            <!-- 5. ROW 3: PESANAN TERBARU & TUGAS ADMIN -->
            <!-- ========================================== -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6" id="tabel-pesanan">

                <!-- Table: Pesanan Terbaru (2 Cols) -->
                <div class="lg:col-span-2 bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-2">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Pesanan Terbaru
                        </h2>
                        <a href="{{ route('katalog') }}" class="text-xs text-blue-600 hover:text-blue-700 font-bold inline-flex items-center gap-1 transition-colors">
                            <span>Lihat Semua</span>
                            <span>&rarr;</span>
                        </a>
                    </div>

                    <!-- Clean Responsive Table -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-left text-xs">
                            <thead>
                                <tr class="text-slate-400 font-semibold border-b border-slate-100">
                                    <th class="py-3 px-2">No</th>
                                    <th class="py-3 px-3">Nama Mahasiswa</th>
                                    <th class="py-3 px-3">Barang</th>
                                    <th class="py-3 px-3">Tanggal Pinjam</th>
                                    <th class="py-3 px-3">Tanggal Kembali</th>
                                    <th class="py-3 px-2 text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-slate-100 text-slate-700">
                                <!-- Row 1 -->
                                <tr class="hover:bg-slate-50/60 transition-colors">
                                    <td class="py-3.5 px-2 font-medium text-slate-500">1</td>
                                    <td class="py-3.5 px-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-full bg-slate-800 text-white font-bold text-[10px] flex items-center justify-center">
                                                AP
                                            </div>
                                            <span class="font-bold text-slate-800">Andi Pratama</span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3 text-slate-600 font-medium">Kamera Sony A6400</td>
                                    <td class="py-3.5 px-3 text-slate-500">29 Okt 2025</td>
                                    <td class="py-3.5 px-3 text-slate-500">31 Okt 2025</td>
                                    <td class="py-3.5 px-2 text-center">
                                        <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-[#FEF3C7] text-[#D97706]">
                                            Menunggu
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 2 -->
                                <tr class="hover:bg-slate-50/60 transition-colors">
                                    <td class="py-3.5 px-2 font-medium text-slate-500">2</td>
                                    <td class="py-3.5 px-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-full bg-slate-700 text-white font-bold text-[10px] flex items-center justify-center">
                                                SN
                                            </div>
                                            <span class="font-bold text-slate-800">Siti Nurhaliza</span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3 text-slate-600 font-medium">Speaker JBL PartyBox</td>
                                    <td class="py-3.5 px-3 text-slate-500">28 Okt 2025</td>
                                    <td class="py-3.5 px-3 text-slate-500">30 Okt 2025</td>
                                    <td class="py-3.5 px-2 text-center">
                                        <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-[#DCFCE7] text-[#16A34A]">
                                            Disetujui
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 3 -->
                                <tr class="hover:bg-slate-50/60 transition-colors">
                                    <td class="py-3.5 px-2 font-medium text-slate-500">3</td>
                                    <td class="py-3.5 px-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-full bg-slate-800 text-white font-bold text-[10px] flex items-center justify-center">
                                                BS
                                            </div>
                                            <span class="font-bold text-slate-800">Budi Santoso</span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3 text-slate-600 font-medium">Laptop ASUS ROG</td>
                                    <td class="py-3.5 px-3 text-slate-500">27 Okt 2025</td>
                                    <td class="py-3.5 px-3 text-slate-500">29 Okt 2025</td>
                                    <td class="py-3.5 px-2 text-center">
                                        <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-[#E0E7FF] text-[#2563EB]">
                                            Diproses
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 4 -->
                                <tr class="hover:bg-slate-50/60 transition-colors">
                                    <td class="py-3.5 px-2 font-medium text-slate-500">4</td>
                                    <td class="py-3.5 px-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-full bg-slate-700 text-white font-bold text-[10px] flex items-center justify-center">
                                                DL
                                            </div>
                                            <span class="font-bold text-slate-800">Dewi Lestari</span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3 text-slate-600 font-medium">Mic Wireless Saramonic</td>
                                    <td class="py-3.5 px-3 text-slate-500">27 Okt 2025</td>
                                    <td class="py-3.5 px-3 text-slate-500">28 Okt 2025</td>
                                    <td class="py-3.5 px-2 text-center">
                                        <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-[#DCFCE7] text-[#16A34A]">
                                            Disetujui
                                        </span>
                                    </td>
                                </tr>

                                <!-- Row 5 -->
                                <tr class="hover:bg-slate-50/60 transition-colors">
                                    <td class="py-3.5 px-2 font-medium text-slate-500">5</td>
                                    <td class="py-3.5 px-3">
                                        <div class="flex items-center gap-2.5">
                                            <div class="w-7 h-7 rounded-full bg-slate-800 text-white font-bold text-[10px] flex items-center justify-center">
                                                RM
                                            </div>
                                            <span class="font-bold text-slate-800">Rizky Maulana</span>
                                        </div>
                                    </td>
                                    <td class="py-3.5 px-3 text-slate-600 font-medium">Proyektor Epson</td>
                                    <td class="py-3.5 px-3 text-slate-500">26 Okt 2025</td>
                                    <td class="py-3.5 px-3 text-slate-500">29 Okt 2025</td>
                                    <td class="py-3.5 px-2 text-center">
                                        <span class="px-3 py-1 rounded-full text-[11px] font-bold bg-[#E2E8F0] text-[#475569]">
                                            Selesai
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Right Card: Tugas Admin (1 Col) -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between" id="tugas-admin">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-2">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Tugas Admin
                        </h2>
                        <a href="#" class="text-xs text-blue-600 hover:text-blue-700 font-bold inline-flex items-center gap-1 transition-colors">
                            <span>Lihat Semua</span>
                            <span>&rarr;</span>
                        </a>
                    </div>

                    <div class="space-y-4">
                        <!-- Task 1: Verifikasi Mahasiswa -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E0E7FF] text-[#2563EB] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Verifikasi Mahasiswa</h3>
                                    <p class="text-[11px] text-slate-400">Periksa pendaftaran mahasiswa baru</p>
                                </div>
                            </div>
                            <span class="w-6 h-6 rounded-full bg-rose-50 text-rose-500 text-xs font-bold flex items-center justify-center">
                                5
                            </span>
                        </div>

                        <!-- Task 2: Pemesanan -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#FFEDD5] text-[#EA580C] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Pemesanan</h3>
                                    <p class="text-[11px] text-slate-400">Konfirmasi pemesanan yang masuk</p>
                                </div>
                            </div>
                            <span class="w-6 h-6 rounded-full bg-orange-50 text-orange-500 text-xs font-bold flex items-center justify-center">
                                7
                            </span>
                        </div>

                        <!-- Task 3: Pengembalian -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E0F2FE] text-[#0284C7] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path><path d="M21 3v5h-5"></path></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Pengembalian</h3>
                                    <p class="text-[11px] text-slate-400">Barang yang perlu dikonfirmasi pengembaliannya</p>
                                </div>
                            </div>
                            <span class="w-6 h-6 rounded-full bg-sky-50 text-sky-500 text-xs font-bold flex items-center justify-center">
                                3
                            </span>
                        </div>

                        <!-- Task 4: Denda -->
                        <div class="flex items-center justify-between p-2 rounded-xl hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#F3E8FF] text-[#9333EA] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3Z"></path><line x1="12" y1="9" x2="12" y2="13"></line></svg>
                                </div>
                                <div>
                                    <h3 class="text-xs font-bold text-slate-900">Denda</h3>
                                    <p class="text-[11px] text-slate-400">Denda yang belum diverifikasi</p>
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Col 1: Stok Menipis -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Stok Menipis
                        </h2>
                        <a href="{{ route('katalog') }}" class="text-xs text-blue-600 hover:text-blue-700 font-bold inline-flex items-center gap-1 transition-colors">
                            <span>Lihat Semua</span>
                            <span>&rarr;</span>
                        </a>
                    </div>

                    <table class="w-full text-xs text-left">
                        <thead>
                            <tr class="text-slate-400 font-semibold border-b border-slate-100">
                                <th class="pb-2">Nama Produk</th>
                                <th class="pb-2">Kategori</th>
                                <th class="pb-2 text-right">Stok Tersisa</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-100 text-slate-700">
                            <!-- 1 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-2.5 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-slate-100 p-0.5 border border-slate-200 shrink-0">
                                        <img src="/images/placeholder.svg" class="w-full h-full object-contain">
                                    </div>
                                    <span class="font-bold text-slate-800">DJI Osmo Mobile 6</span>
                                </td>
                                <td class="py-2.5 text-slate-500 text-[11px]">Multimedia & IT</td>
                                <td class="py-2.5 text-right">
                                    <span class="w-5 h-5 rounded-full bg-rose-50 text-rose-600 font-bold text-xs inline-flex items-center justify-center">
                                        2
                                    </span>
                                </td>
                            </tr>
                            <!-- 2 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-2.5 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-slate-100 p-0.5 border border-slate-200 shrink-0">
                                        <img src="/images/placeholder.svg" class="w-full h-full object-contain">
                                    </div>
                                    <span class="font-bold text-slate-800">Sony FE 50mm f/1.8</span>
                                </td>
                                <td class="py-2.5 text-slate-500 text-[11px]">Kamera & Fotografi</td>
                                <td class="py-2.5 text-right">
                                    <span class="w-5 h-5 rounded-full bg-rose-50 text-rose-600 font-bold text-xs inline-flex items-center justify-center">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <!-- 3 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-2.5 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-slate-100 p-0.5 border border-slate-200 shrink-0">
                                        <img src="/images/yamaha-dbr10.svg" class="w-full h-full object-contain">
                                    </div>
                                    <span class="font-bold text-slate-800">Mixer Audio Yamaha</span>
                                </td>
                                <td class="py-2.5 text-slate-500 text-[11px]">Audio & Sound System</td>
                                <td class="py-2.5 text-right">
                                    <span class="w-5 h-5 rounded-full bg-rose-50 text-rose-600 font-bold text-xs inline-flex items-center justify-center">
                                        1
                                    </span>
                                </td>
                            </tr>
                            <!-- 4 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-2.5 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-slate-100 p-0.5 border border-slate-200 shrink-0">
                                        <img src="/images/epson-e500.jpg" class="w-full h-full object-contain">
                                    </div>
                                    <span class="font-bold text-slate-800">Proyektor Epson</span>
                                </td>
                                <td class="py-2.5 text-slate-500 text-[11px]">Multimedia & IT</td>
                                <td class="py-2.5 text-right">
                                    <span class="w-5 h-5 rounded-full bg-amber-50 text-amber-600 font-bold text-xs inline-flex items-center justify-center">
                                        3
                                    </span>
                                </td>
                            </tr>
                            <!-- 5 -->
                            <tr class="hover:bg-slate-50 transition-colors">
                                <td class="py-2.5 flex items-center gap-2">
                                    <div class="w-6 h-6 rounded bg-slate-100 p-0.5 border border-slate-200 shrink-0">
                                        <img src="/images/thinkpad-t14.jpg" class="w-full h-full object-contain">
                                    </div>
                                    <span class="font-bold text-slate-800">Laptop ASUS ROG</span>
                                </td>
                                <td class="py-2.5 text-slate-500 text-[11px]">Komputer & Laptop</td>
                                <td class="py-2.5 text-right">
                                    <span class="w-5 h-5 rounded-full bg-amber-50 text-amber-600 font-bold text-xs inline-flex items-center justify-center">
                                        4
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Col 2: Ringkasan Sistem -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="pb-3 border-b border-slate-100 mb-4">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Ringkasan Sistem
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
                                    <span class="text-xs font-semibold text-slate-500 block">Total Transaksi</span>
                                    <span class="text-sm font-extrabold text-slate-900 font-['Space_Grotesk']">1.248</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                &uarr; 12%
                            </span>
                        </div>

                        <!-- Mahasiswa Aktif -->
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-full bg-[#E0F2FE] text-[#0284C7] flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c3 3 9 3 12 0v-5"></path></svg>
                                </div>
                                <div>
                                    <span class="text-xs font-semibold text-slate-500 block">Mahasiswa Aktif</span>
                                    <span class="text-sm font-extrabold text-slate-900 font-['Space_Grotesk']">342</span>
                                </div>
                            </div>
                            <span class="text-xs font-bold text-emerald-600 inline-flex items-center">
                                &uarr; 8%
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
                                        <span class="text-xs font-semibold text-slate-500 block">Rata-rata Waktu Proses</span>
                                        <span class="text-sm font-extrabold text-slate-900 font-['Space_Grotesk']">1.8 hari</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Progress Bar -->
                            <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden mt-2">
                                <div class="bg-gradient-to-r from-purple-500 to-indigo-600 h-full rounded-full" style="width: 45%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Col 3: Aktivitas Terbaru -->
                <div class="bg-white rounded-2xl p-6 border border-slate-100 shadow-xs flex flex-col justify-between">
                    <div class="flex items-center justify-between pb-3 border-b border-slate-100 mb-3">
                        <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                            Aktivitas Terbaru
                        </h2>
                        <a href="#" class="text-xs text-blue-600 hover:text-blue-700 font-bold inline-flex items-center gap-1 transition-colors">
                            <span>Lihat Semua</span>
                            <span>&rarr;</span>
                        </a>
                    </div>

                    <div class="space-y-3.5 text-xs">
                        <!-- Activity 1 -->
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight">Mahasiswa baru diverifikasi</h3>
                                <p class="text-[11px] text-slate-400 mt-0.5">A/N 248, 29 Okt 2025 09:45</p>
                            </div>
                        </div>

                        <!-- Activity 2 -->
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight">Pemesanan kamera disetujui</h3>
                                <p class="text-[11px] text-slate-400 mt-0.5">Andi Pratama, 29 Okt 2025 08:32</p>
                            </div>
                        </div>

                        <!-- Activity 3 -->
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-amber-50 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight">Denda dibayarkan</h3>
                                <p class="text-[11px] text-slate-400 mt-0.5">Denda keterlambatan - Rp 150.000, 28 Okt 2025 16:20</p>
                            </div>
                        </div>

                        <!-- Activity 4 -->
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-purple-50 text-purple-600 flex items-center justify-center shrink-0 mt-0.5">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path></svg>
                            </div>
                            <div>
                                <h3 class="font-bold text-slate-900 leading-tight">Produk baru ditambahkan</h3>
                                <p class="text-[11px] text-slate-400 mt-0.5">DJI Osmo Mobile 6, 28 Okt 2025 14:05</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

</div>
@endsection
