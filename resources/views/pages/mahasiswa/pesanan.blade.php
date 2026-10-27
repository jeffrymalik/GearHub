@extends('layouts.app')

@section('title', 'Pesanan Saya - Portal Mahasiswa GearHub')
@section('meta_description', 'Kelola pesanan peralatan sewa aktif, status pembayaran, dan jadwal serah terima loket.')

@section('content')
<div class="bg-slate-50/70 min-h-screen py-8 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
        
        <!-- Header Breadcrumb & Title -->
        <div class="space-y-2">
            <nav class="flex items-center gap-2 text-xs text-slate-500" aria-label="Breadcrumb">
                <a href="{{ route('mahasiswa.dashboard') }}" class="hover:text-blue-600 transition-colors">Dashboard</a>
                <span>&gt;</span>
                <span class="text-slate-900 font-semibold">Pesanan Saya</span>
            </nav>
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                        Pesanan Saya
                    </h1>
                    <p class="text-xs sm:text-sm text-slate-500 mt-0.5">
                        Daftar seluruh unit yang sedang disewa, menunggu pembayaran, atau siap diambil di loket.
                    </p>
                </div>
                <a href="{{ route('katalog') }}" class="px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm rounded-xl transition-all shadow-sm inline-flex items-center gap-2 self-start sm:self-auto">
                    <span>+ Sewa Alat Lain</span>
                </a>
            </div>
        </div>

        <!-- Filter Status Pills -->
        <div class="flex items-center gap-2 overflow-x-auto pb-2 -mx-4 px-4 scrollbar-none" id="order-filter-tabs">
            <button type="button" class="order-tab active px-4 py-2 rounded-xl text-xs font-bold bg-blue-600 text-white transition-colors" data-filter="all">
                Semua Pesanan (3)
            </button>
            <button type="button" class="order-tab px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-400 transition-colors" data-filter="active">
                Sedang Dipinjam (1)
            </button>
            <button type="button" class="order-tab px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-400 transition-colors" data-filter="pending">
                Menunggu Pembayaran (1)
            </button>
            <button type="button" class="order-tab px-4 py-2 rounded-xl text-xs font-semibold bg-white border border-slate-200 text-slate-700 hover:border-blue-400 transition-colors" data-filter="ready">
                Siap Diambil di Loket (1)
            </button>
        </div>

        <!-- Order List Cards -->
        <div class="space-y-4">
            
            <!-- ORDER 1: SEDANG DIPINJAM (ACTIVE) -->
            <div class="order-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-status="active">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700">
                            Sedang Dipinjam
                        </span>
                        <span class="text-xs font-mono font-medium text-slate-500">No. Booking: #GH-2610-001</span>
                    </div>
                    <span class="text-xs font-bold text-red-600">
                        Batas Kembali: Hari ini, 17:00 WIB
                    </span>
                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <img src="/images/canon-90d.jpg" alt="Canon EOS 90D" class="w-20 h-20 rounded-xl object-cover border border-slate-200 shrink-0">
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Kamera &amp; Fotografi</span>
                            <h3 class="text-base font-bold text-slate-900">Canon EOS 90D Kit (Lensa 18-135mm USM)</h3>
                            <p class="text-xs text-slate-500">Lokasi Serah-Terima: <strong>Gedung Unit VI Lantai 1</strong></p>
                            <p class="text-xs font-semibold text-slate-800">Biaya: Rp 75.000 (Lunas)</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 self-end md:self-center shrink-0">
                        <a href="{{ route('mahasiswa.dashboard') }}" class="px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs rounded-xl transition-colors">
                            Perpanjang Sewa
                        </a>
                        <a href="{{ route('mahasiswa.dashboard') }}" class="px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl transition-colors shadow-sm">
                            Lihat Form BAST
                        </a>
                    </div>
                </div>
            </div>

            <!-- ORDER 2: MENUNGGU PEMBAYARAN -->
            <div class="order-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-status="pending">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-amber-50 text-amber-700">
                            Menunggu Pembayaran
                        </span>
                        <span class="text-xs font-mono font-medium text-slate-500">No. Booking: #GH-2710-089</span>
                    </div>
                    <span class="text-xs font-bold text-amber-800">
                        Sisa Waktu Bayar: 01 Jam 45 Menit
                    </span>
                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <img src="/images/epson-e500.jpg" alt="Epson EB-E500" class="w-20 h-20 rounded-xl object-cover border border-slate-200 shrink-0">
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Multimedia</span>
                            <h3 class="text-base font-bold text-slate-900">Epson EB-E500 Projector 3300 Lumens</h3>
                            <p class="text-xs text-slate-500">Jadwal Pengambilan: 29 Okt 2026 (08.00 - 17.00 WIB)</p>
                            <p class="text-xs font-extrabold text-slate-900">Total Tagihan: Rp 50.000</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 self-end md:self-center shrink-0">
                        <a href="{{ route('mahasiswa.dashboard') }}" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl transition-all shadow-sm">
                            Bayar Sekarang (QRIS/VA)
                        </a>
                    </div>
                </div>
            </div>

            <!-- ORDER 3: SIAP DIAMBIL DI LOKET -->
            <div class="order-card bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4" data-status="ready">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-2 pb-3 border-b border-slate-100">
                    <div class="flex items-center gap-3">
                        <span class="px-2.5 py-1 rounded-lg text-xs font-bold bg-sky-50 text-sky-700">
                            Siap Diambil di Loket
                        </span>
                        <span class="text-xs font-mono font-medium text-slate-500">No. Booking: #GH-2810-044</span>
                    </div>
                    <span class="text-xs font-bold text-slate-700">
                        Jadwal: Besok, 28 Okt 2026 (09.00 WIB)
                    </span>
                </div>

                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div class="flex items-center gap-4">
                        <div class="w-20 h-20 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center p-3 shrink-0">
                            <img src="/images/rode-wireless.svg" alt="RODE Wireless" class="w-full h-full object-contain">
                        </div>
                        <div class="space-y-1">
                            <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Audio System</span>
                            <h3 class="text-base font-bold text-slate-900">RODE Wireless Go II Dual Channel</h3>
                            <p class="text-xs text-slate-500">Lokasi: <strong>Loket Sarana Prasarana (Unit VI Lt 1)</strong></p>
                            <span class="inline-block text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">
                                ✓ Lunas (QRIS) &bull; Bawa KTM Asli
                            </span>
                        </div>
                    </div>

                    <div class="flex items-center gap-2 self-end md:self-center shrink-0">
                        <a href="{{ route('mahasiswa.dashboard') }}" class="px-5 py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs rounded-xl transition-all shadow-sm">
                            Tampilkan Tiket QR
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('.order-tab');
        const cards = document.querySelectorAll('.order-card');

        tabs.forEach(tab => {
            tab.addEventListener('click', function () {
                const filter = this.getAttribute('data-filter');

                tabs.forEach(t => {
                    t.classList.remove('active', 'bg-blue-600', 'text-white');
                    t.classList.add('bg-white', 'border', 'border-slate-200', 'text-slate-700');
                });

                this.classList.add('active', 'bg-blue-600', 'text-white');
                this.classList.remove('bg-white', 'border', 'border-slate-200', 'text-slate-700');

                cards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-status') === filter) {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });
        });
    });
</script>
@endsection
