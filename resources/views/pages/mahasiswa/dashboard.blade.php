@extends('layouts.app')

@section('title', 'Portal Mahasiswa - GearHub Perbanas Institute')
@section('meta_description', 'Portal layanan peminjaman peralatan kampus bagi mahasiswa aktif Perbanas Institute.')

@section('content')
<!-- SUB-HEADER / STUDENT PROFILE BAR -->
<div class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-5">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            
            <!-- Left: Avatar & Identity -->
            <div class="flex items-center gap-4">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-tr from-blue-700 to-blue-500 text-white font-extrabold text-lg flex items-center justify-center shadow-md shadow-blue-500/20 shrink-0">
                    DP
                </div>
                <div>
                    <div class="flex items-center gap-2.5 flex-wrap">
                        <h1 class="text-xl sm:text-2xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                            {{ $student['name'] }}
                        </h1>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-50 text-emerald-700 border border-emerald-200">
                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                            {{ $student['status'] }}
                        </span>
                    </div>
                    <p class="text-xs text-slate-500 mt-1 flex items-center gap-2 flex-wrap">
                        <span>NIM: <strong class="text-slate-800">{{ $student['nim'] }}</strong></span>
                        <span>&bull;</span>
                        <span>{{ $student['prodi'] }}</span>
                        <span>&bull;</span>
                        <span class="text-slate-400">{{ $student['fakultas'] }}</span>
                    </p>
                </div>
            </div>

            <!-- Right: Fast Actions -->
            <div class="flex items-center gap-3">
                <a href="{{ route('katalog') }}" class="px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-semibold text-xs sm:text-sm rounded-xl transition-all shadow-sm shadow-blue-500/20 inline-flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Sewa Alat Baru</span>
                </a>
                <a href="https://wa.me/6281234567890" target="_blank" rel="noopener noreferrer" class="px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold text-xs sm:text-sm rounded-xl transition-colors inline-flex items-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    <svg class="w-4 h-4 text-emerald-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.04 2C6.58 2 2.13 6.45 2.13 11.91C2.13 13.66 2.59 15.36 3.45 16.86L2.05 22L7.3 20.62C8.75 21.41 10.38 21.83 12.04 21.83C17.5 21.83 21.95 17.38 21.95 11.92C21.95 9.27 20.92 6.78 19.05 4.91C17.18 3.04 14.69 2 12.04 2M12.05 3.67C14.25 3.67 16.31 4.53 17.87 6.09C19.42 7.65 20.28 9.72 20.28 11.92C20.28 16.46 16.58 20.15 12.04 20.15C10.56 20.15 9.11 19.76 7.85 19L7.55 18.83L4.43 19.65L5.26 16.61L5.06 16.29C4.24 14.99 3.81 13.47 3.81 11.91C3.81 7.37 7.5 3.67 12.05 3.67Z"/>
                    </svg>
                    <span class="hidden sm:inline">Loket Unit VI Lt 1</span>
                    <span class="sm:hidden">Loket</span>
                </a>
            </div>

        </div>
    </div>
</div>

<!-- MAIN STUDENT PORTAL CONTENT -->
<div class="bg-slate-50/70 min-h-screen py-8 md:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- 1. CRITICAL NOTICE BANNER: PENGEMBALIAN HARI INI -->
        @if(!empty($activeRentals))
            @foreach($activeRentals as $rental)
                @if($rental['is_urgent'])
                <div class="bg-gradient-to-r from-amber-500/10 via-amber-50 to-white border border-amber-300 rounded-2xl p-5 sm:p-6 shadow-sm flex flex-col md:flex-row md:items-center justify-between gap-4">
                    <div class="flex items-start gap-4">
                        <div class="w-11 h-11 rounded-xl bg-amber-500 text-white flex items-center justify-center shrink-0 shadow-sm mt-0.5">
                            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-2 flex-wrap">
                                <span class="px-2 py-0.5 rounded text-[10px] font-extrabold uppercase tracking-wide bg-amber-500 text-white">
                                    Pengembalian Hari Ini
                                </span>
                                <span class="text-xs font-bold text-amber-900">
                                    {{ $rental['remaining_hours'] }}
                                </span>
                            </div>
                            <h2 class="text-sm sm:text-base font-bold text-slate-900">
                                Unit <span class="text-blue-700">{{ $rental['name'] }}</span> harus dikembalikan sebelum pukul 17.00 WIB.
                            </h2>
                            <p class="text-xs text-slate-600">
                                Lokasi loket: <strong>{{ $rental['location'] }}</strong>. Pastikan seluruh kelengkapan (kabel, baterai, tas) dalam kondisi baik untuk serah-terima.
                            </p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2 shrink-0 self-end md:self-center">
                        <button type="button" onclick="openExtendModal()" class="px-4 py-2 bg-white border border-amber-300 hover:bg-amber-50 text-amber-900 font-bold text-xs rounded-xl transition-colors shadow-xs">
                            Ajukan Perpanjangan
                        </button>
                        <button type="button" onclick="openBastModal()" class="px-4 py-2 bg-amber-500 hover:bg-amber-600 text-white font-bold text-xs rounded-xl transition-colors shadow-xs">
                            Lihat Form BAST
                        </button>
                    </div>
                </div>
                @endif
            @endforeach
        @endif

        <!-- 2. STATUS AKTIVITAS SEWA (GRID 3 STATUS KUNCI) -->
        <div class="space-y-4">
            <div class="flex items-center justify-between">
                <div>
                    <h2 class="text-lg sm:text-xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                        Status Peminjaman Saya
                    </h2>
                    <p class="text-xs text-slate-500">
                        Pantau seluruh proses sewa mulai dari pembayaran, pengambilan, hingga pengembalian.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                
                <!-- CARD 1: SEDANG DIPINJAM (ACTIVE) -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-blue-50 text-blue-700">
                                <span class="w-2 h-2 rounded-full bg-blue-600 animate-pulse"></span>
                                Sedang Dipinjam (1)
                            </span>
                            <span class="text-[11px] font-mono text-slate-400 font-medium">#GH-2610-001</span>
                        </div>

                        <!-- Product Item Summary -->
                        <div class="flex items-center gap-3.5 pt-1">
                            <img src="/images/canon-90d.jpg" alt="Canon EOS 90D" class="w-16 h-16 rounded-xl object-cover border border-slate-200 shrink-0">
                            <div class="space-y-0.5">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Kamera &amp; Fotografi</span>
                                <h3 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">Canon EOS 90D Kit</h3>
                                <p class="text-[11px] text-slate-500">Tarif: Rp 75.000 / 24 Jam</p>
                            </div>
                        </div>

                        <!-- Timeline details -->
                        <div class="bg-slate-50 rounded-xl p-3 text-xs space-y-2 border border-slate-100 text-slate-600">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Waktu Ambil:</span>
                                <span class="font-medium text-slate-800">26 Okt 2026, 15:30 WIB</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Batas Kembali:</span>
                                <span class="font-bold text-red-600">Hari ini, 17:00 WIB</span>
                            </div>
                            <div class="flex justify-between border-t border-slate-200/60 pt-2 text-[11px]">
                                <span class="text-slate-400">Lokasi Serah-Terima:</span>
                                <span class="font-semibold text-blue-700">Gedung Unit VI Lt 1</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 flex items-center gap-2">
                        <button type="button" onclick="openExtendModal()" class="w-1/2 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs rounded-xl transition-colors">
                            Perpanjang
                        </button>
                        <button type="button" onclick="openBastModal()" class="w-1/2 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl transition-colors shadow-sm">
                            Detail Unit
                        </button>
                    </div>
                </div>

                <!-- CARD 2: MENUNGGU PEMBAYARAN -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-amber-50 text-amber-700">
                                <span class="w-2 h-2 rounded-full bg-amber-500"></span>
                                Menunggu Pembayaran
                            </span>
                            <span class="text-[11px] font-mono text-slate-400 font-medium">#GH-2710-089</span>
                        </div>

                        <!-- Product Item Summary -->
                        <div class="flex items-center gap-3.5 pt-1">
                            <img src="/images/epson-e500.jpg" alt="Epson EB-E500" class="w-16 h-16 rounded-xl object-cover border border-slate-200 shrink-0">
                            <div class="space-y-0.5">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Multimedia</span>
                                <h3 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">Epson EB-E500 Projector</h3>
                                <p class="text-[11px] text-slate-500">Jadwal: 29 Okt 2026</p>
                            </div>
                        </div>

                        <!-- Payment Alert Info -->
                        <div class="bg-amber-50/60 rounded-xl p-3 text-xs space-y-2 border border-amber-200 text-amber-900">
                            <div class="flex justify-between items-center">
                                <span class="text-amber-700 font-medium">Total Tagihan:</span>
                                <span class="text-sm font-extrabold text-slate-900 font-['Space_Grotesk']">Rp 50.000</span>
                            </div>
                            <div class="flex justify-between items-center text-[11px] pt-1 border-t border-amber-200/60">
                                <span class="text-amber-700">Sisa Waktu Bayar:</span>
                                <span class="font-bold text-amber-800 font-mono bg-white px-2 py-0.5 rounded shadow-xs">01:45:10</span>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="button" onclick="openPaymentModal()" class="w-full py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl transition-all shadow-sm flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>
                            <span>Bayar Sekarang (QRIS / VA)</span>
                        </button>
                    </div>
                </div>

                <!-- CARD 3: SIAP DIAMBIL DI LOKET -->
                <div class="bg-white border border-slate-200/90 rounded-2xl p-5 shadow-sm space-y-4 flex flex-col justify-between">
                    <div class="space-y-3">
                        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-lg text-xs font-bold bg-sky-50 text-sky-700">
                                <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                                Siap Diambil di Loket
                            </span>
                            <span class="text-[11px] font-mono text-slate-400 font-medium">#GH-2810-044</span>
                        </div>

                        <!-- Product Item Summary -->
                        <div class="flex items-center gap-3.5 pt-1">
                            <div class="w-16 h-16 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center p-2 shrink-0">
                                <img src="/images/rode-wireless.svg" alt="RODE Wireless Go II" class="w-full h-full object-contain">
                            </div>
                            <div class="space-y-0.5">
                                <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Audio System</span>
                                <h3 class="text-xs sm:text-sm font-bold text-slate-900 leading-snug">RODE Wireless Go II</h3>
                                <span class="inline-block text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">✓ Lunas (QRIS)</span>
                            </div>
                        </div>

                        <!-- Pickup Location Note -->
                        <div class="bg-slate-50 rounded-xl p-3 text-xs space-y-2 border border-slate-100 text-slate-600">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Jadwal Ambil:</span>
                                <span class="font-bold text-slate-800">Besok, 28 Okt (09.00 WIB)</span>
                            </div>
                            <div class="flex justify-between border-t border-slate-200/60 pt-2 text-[11px]">
                                <span class="text-slate-400">Lokasi Loket:</span>
                                <span class="font-bold text-blue-700">Perbanas Unit VI Lantai 1</span>
                            </div>
                            <p class="text-[10px] text-slate-500 italic">
                                *Wajib membawa KTM asli saat verifikasi fisik serah-terima.
                            </p>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button type="button" onclick="openPickupPassModal()" class="w-full py-2.5 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs rounded-xl transition-all shadow-sm flex items-center justify-center gap-2">
                            <svg class="w-4 h-4 text-blue-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                                <circle cx="17.5" cy="17.5" r="2.5"></circle>
                            </svg>
                            <span>Tampilkan Tiket QR Loket</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>

        <!-- 3. QUICK ACTIONS & RECENT HISTORY GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT (7 cols): Riwayat Pengembalian Terakhir -->
            <div class="lg:col-span-7 bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-5">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                    <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                        Riwayat Sewa Terakhir
                    </h3>
                    <a href="{{ route('katalog') }}" class="text-xs font-bold text-blue-600 hover:underline">
                        Lihat Semua Riwayat &rarr;
                    </a>
                </div>

                <!-- History Item 1 -->
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 p-4 rounded-xl border border-slate-100 bg-slate-50/50">
                    <div class="flex items-center gap-3.5">
                        <img src="/images/thinkpad-t14.jpg" alt="Lenovo ThinkPad T14" class="w-14 h-14 rounded-xl object-cover border border-slate-200 shrink-0">
                        <div class="space-y-0.5">
                            <h4 class="text-xs sm:text-sm font-bold text-slate-900">Lenovo ThinkPad T14 Gen 2</h4>
                            <p class="text-[11px] text-slate-500">18 Okt - 20 Okt 2026 &bull; Kode: #GH-1810-022</p>
                            <span class="inline-flex items-center gap-1 text-[10px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded">
                                ✓ Dikembalikan Tepat Waktu di Unit VI Lt 1
                            </span>
                        </div>
                    </div>
                    <div class="text-left sm:text-right shrink-0">
                        <span class="text-xs font-bold text-slate-900 block font-['Space_Grotesk']">Rp 180.000</span>
                        <span class="text-[10px] text-slate-400 block">Lunas (Virtual Account)</span>
                        <button type="button" onclick="alert('Mengunduh e-Invoice #GH-1810-022...')" class="text-[11px] font-semibold text-blue-600 hover:underline mt-1 inline-block">
                            Unduh Invoice
                        </button>
                    </div>
                </div>

                <!-- Guidance Info Box -->
                <div class="p-4 rounded-xl bg-blue-50/50 border border-blue-100 flex items-start gap-3 text-xs text-slate-600">
                    <svg class="w-5 h-5 text-blue-600 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="16" x2="12" y2="12"></line>
                        <line x1="12" y1="8" x2="12.01" y2="8"></line>
                    </svg>
                    <div>
                        <strong class="text-slate-900 block font-semibold">Butuh alat untuk kegiatan HIMA / BEM?</strong>
                        <p class="text-[11px] text-slate-500 mt-0.5">
                            Kepanitiaan ormawa dapat mengajukan peminjaman khusus dengan potongan harga dan koordinasi surat tugas langsung ke loket Gedung Unit VI Lantai 1.
                        </p>
                    </div>
                </div>
            </div>

            <!-- RIGHT (5 cols): Rekomendasi Cepat dari Katalog -->
            <div class="lg:col-span-5 bg-white border border-slate-200/90 rounded-2xl p-6 shadow-sm space-y-4">
                <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                    <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">
                        Rekomendasi Alat Tersedia
                    </h3>
                    <a href="{{ route('katalog') }}" class="text-xs font-bold text-blue-600 hover:underline">
                        Katalog Lengkap &rarr;
                    </a>
                </div>

                <div class="space-y-3">
                    @foreach($recommended as $item)
                    <div class="flex items-center justify-between gap-3 p-3 rounded-xl border border-slate-100 hover:border-blue-200 transition-colors">
                        <div class="flex items-center gap-3 min-w-0">
                            @if(str_ends_with($item['image'], '.svg'))
                                <div class="w-12 h-12 rounded-lg bg-slate-100 flex items-center justify-center p-1.5 shrink-0">
                                    <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-full h-full object-contain">
                                </div>
                            @else
                                <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="w-12 h-12 rounded-lg object-cover shrink-0 border border-slate-200">
                            @endif
                            <div class="min-w-0">
                                <h4 class="text-xs font-bold text-slate-900 truncate">{{ $item['name'] }}</h4>
                                <span class="text-[11px] text-slate-500 block">Rp {{ number_format($item['price'], 0, ',', '.') }} / hari</span>
                            </div>
                        </div>
                        <a href="{{ route('katalog.detail', ['id' => $item['id']]) }}" class="px-3 py-1.5 bg-blue-50 hover:bg-blue-600 text-blue-600 hover:text-white font-bold text-xs rounded-lg transition-colors shrink-0">
                            Sewa
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</div>

<!-- ================= MODAL: BAYAR QRIS / VA ================= -->
<div id="modal-payment" class="fixed inset-0 z-50 bg-slate-950/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 sm:p-7 shadow-2xl border border-slate-200 space-y-5 animate-in fade-in zoom-in-95 duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <div>
                <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Pembayaran Sewa</h3>
                <p class="text-xs text-slate-500">Kode Booking: #GH-2710-089</p>
            </div>
            <button type="button" onclick="closePaymentModal()" class="w-8 h-8 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 flex items-center justify-center">
                &times;
            </button>
        </div>

        <div class="text-center space-y-3">
            <span class="text-xs text-slate-500">Total Nominal Pembayaran</span>
            <div class="text-3xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                Rp 50.000
            </div>
            <p class="text-xs text-slate-500">Epson EB-E500 Projector (Periode 29 Okt 2026)</p>
        </div>

        <!-- Simulated QRIS Image Container -->
        <div class="bg-slate-50 p-5 rounded-2xl border border-slate-200 text-center space-y-3">
            <div class="w-44 h-44 mx-auto bg-white p-3 rounded-xl border border-slate-200 shadow-xs flex flex-col items-center justify-center">
                <!-- QR Code Representation -->
                <svg viewBox="0 0 100 100" class="w-full h-full">
                    <rect x="0" y="0" width="100" height="100" fill="#ffffff"/>
                    <!-- Corner Top Left -->
                    <rect x="10" y="10" width="25" height="25" fill="#0f172a" rx="4"/>
                    <rect x="15" y="15" width="15" height="15" fill="#ffffff" rx="2"/>
                    <rect x="18" y="18" width="9" height="9" fill="#0f172a"/>
                    <!-- Corner Top Right -->
                    <rect x="65" y="10" width="25" height="25" fill="#0f172a" rx="4"/>
                    <rect x="70" y="15" width="15" height="15" fill="#ffffff" rx="2"/>
                    <rect x="73" y="18" width="9" height="9" fill="#0f172a"/>
                    <!-- Corner Bottom Left -->
                    <rect x="10" y="65" width="25" height="25" fill="#0f172a" rx="4"/>
                    <rect x="15" y="70" width="15" height="15" fill="#ffffff" rx="2"/>
                    <rect x="18" y="73" width="9" height="9" fill="#0f172a"/>
                    <!-- Data Pattern Dots -->
                    <rect x="42" y="12" width="6" height="6" fill="#0f172a"/>
                    <rect x="52" y="12" width="6" height="6" fill="#0f172a"/>
                    <rect x="42" y="24" width="6" height="6" fill="#0f172a"/>
                    <rect x="52" y="24" width="6" height="6" fill="#0f172a"/>
                    <rect x="42" y="42" width="16" height="16" fill="#2563eb" rx="2"/>
                    <rect x="12" y="45" width="6" height="6" fill="#0f172a"/>
                    <rect x="24" y="45" width="6" height="6" fill="#0f172a"/>
                    <rect x="68" y="45" width="6" height="6" fill="#0f172a"/>
                    <rect x="80" y="45" width="6" height="6" fill="#0f172a"/>
                    <rect x="42" y="68" width="6" height="6" fill="#0f172a"/>
                    <rect x="52" y="80" width="6" height="6" fill="#0f172a"/>
                    <rect x="68" y="68" width="6" height="6" fill="#0f172a"/>
                    <rect x="80" y="80" width="6" height="6" fill="#0f172a"/>
                </svg>
            </div>
            <div class="text-[11px] text-slate-500 font-medium">
                Pindai menggunakan aplikasi m-Banking atau E-Wallet apa saja.
            </div>
        </div>

        <button type="button" onclick="alert('Simulasi: Pembayaran Rp 50.000 Berhasil Diverifikasi Otomatis!'); closePaymentModal(); location.reload();" class="w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs sm:text-sm rounded-xl transition-colors shadow-sm">
            Simulasikan Pembayaran Sukses ✓
        </button>
    </div>
</div>

<!-- ================= MODAL: TIKET QR PENGAMBILAN (PICKUP PASS) ================= -->
<div id="modal-pickup" class="fixed inset-0 z-50 bg-slate-950/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl max-w-sm w-full p-6 shadow-2xl border border-slate-200 space-y-5 animate-in fade-in zoom-in-95 duration-200 text-center">
        <div class="flex items-center justify-between pb-2 border-b border-slate-100">
            <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">Tiket Pengambilan Loket</span>
            <button type="button" onclick="closePickupPassModal()" class="w-8 h-8 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 flex items-center justify-center">
                &times;
            </button>
        </div>

        <div class="space-y-1">
            <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">RODE Wireless Go II</h3>
            <p class="text-xs text-slate-500">Tunjukkan QR ini ke petugas loket Unit VI Lantai 1</p>
        </div>

        <div class="w-48 h-48 mx-auto bg-slate-50 p-4 rounded-2xl border border-slate-200 flex items-center justify-center">
            <svg viewBox="0 0 100 100" class="w-full h-full">
                <rect x="0" y="0" width="100" height="100" fill="#ffffff" rx="8"/>
                <rect x="12" y="12" width="22" height="22" fill="#0f172a" rx="3"/>
                <rect x="16" y="16" width="14" height="14" fill="#ffffff" rx="1"/>
                <rect x="19" y="19" width="8" height="8" fill="#0f172a"/>
                <rect x="66" y="12" width="22" height="22" fill="#0f172a" rx="3"/>
                <rect x="70" y="16" width="14" height="14" fill="#ffffff" rx="1"/>
                <rect x="73" y="19" width="8" height="8" fill="#0f172a"/>
                <rect x="12" y="66" width="22" height="22" fill="#0f172a" rx="3"/>
                <rect x="16" y="70" width="14" height="14" fill="#ffffff" rx="1"/>
                <rect x="19" y="73" width="8" height="8" fill="#0f172a"/>
                <rect x="42" y="14" width="6" height="6" fill="#2563eb"/>
                <rect x="52" y="24" width="6" height="6" fill="#2563eb"/>
                <rect x="44" y="44" width="12" height="12" fill="#0f172a"/>
                <rect x="68" y="44" width="6" height="6" fill="#0f172a"/>
                <rect x="78" y="54" width="6" height="6" fill="#0f172a"/>
                <rect x="44" y="68" width="8" height="8" fill="#0f172a"/>
                <rect x="68" y="74" width="14" height="6" fill="#2563eb"/>
            </svg>
        </div>

        <div class="bg-blue-50 p-3 rounded-xl text-xs text-blue-900 space-y-1">
            <div class="font-bold">Dimas Pratama (2112000123)</div>
            <div class="text-[11px] text-blue-700">Wajib membawa KTM fisik asli saat verifikasi.</div>
        </div>

        <button type="button" onclick="closePickupPassModal()" class="w-full py-2.5 bg-slate-900 text-white font-bold text-xs rounded-xl hover:bg-slate-800 transition-colors">
            Tutup
        </button>
    </div>
</div>

<!-- ================= MODAL: AJUKAN PERPANJANGAN ================= -->
<div id="modal-extend" class="fixed inset-0 z-50 bg-slate-950/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl max-w-md w-full p-6 sm:p-7 shadow-2xl border border-slate-200 space-y-4 animate-in fade-in zoom-in-95 duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Pengajuan Perpanjangan Sewa</h3>
            <button type="button" onclick="closeExtendModal()" class="w-8 h-8 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 flex items-center justify-center">
                &times;
            </button>
        </div>

        <div class="text-xs text-slate-600 space-y-3">
            <p>
                Anda mengajukan perpanjangan sewa untuk unit: <strong>Canon EOS 90D Kit</strong>.
            </p>
            <div>
                <label for="extend-days" class="block font-semibold text-slate-800 mb-1">Durasi Tambahan:</label>
                <select id="extend-days" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600">
                    <option value="1">+1 Hari (Hingga 28 Okt 2026, 17:00 WIB) - Rp 75.000</option>
                    <option value="2">+2 Hari (Hingga 29 Okt 2026, 17:00 WIB) - Rp 150.000</option>
                </select>
            </div>
            <div>
                <label for="extend-reason" class="block font-semibold text-slate-800 mb-1">Alasan Perpanjangan:</label>
                <textarea id="extend-reason" rows="2" placeholder="Contoh: Kegiatan dokumentasi ormawa diperpanjang hingga besok sore..." class="w-full bg-slate-50 border border-slate-200 rounded-xl px-3 py-2 text-xs text-slate-800 focus:bg-white focus:outline-none focus:border-blue-600"></textarea>
            </div>
        </div>

        <div class="flex items-center justify-end gap-2 pt-2">
            <button type="button" onclick="closeExtendModal()" class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-bold text-xs rounded-xl">
                Batal
            </button>
            <button type="button" onclick="alert('Permintaan perpanjangan telah dikirim ke operator Unit VI Lantai 1 untuk verifikasi jadwal.'); closeExtendModal();" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl shadow-sm">
                Kirim Pengajuan
            </button>
        </div>
    </div>
</div>

<!-- ================= MODAL: DETAIL BAST ================= -->
<div id="modal-bast" class="fixed inset-0 z-50 bg-slate-950/60 backdrop-blur-xs flex items-center justify-center p-4 hidden">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-7 shadow-2xl border border-slate-200 space-y-4 animate-in fade-in zoom-in-95 duration-200">
        <div class="flex items-center justify-between pb-3 border-b border-slate-100">
            <div>
                <h3 class="text-base font-bold text-slate-900 font-['Space_Grotesk']">Berita Acara Serah Terima (BAST)</h3>
                <p class="text-xs text-slate-500">No. BAST: BAST-GH/2026/10/001</p>
            </div>
            <button type="button" onclick="closeBastModal()" class="w-8 h-8 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 flex items-center justify-center">
                &times;
            </button>
        </div>

        <div class="space-y-3 text-xs text-slate-600">
            <div class="bg-slate-50 p-3.5 rounded-xl border border-slate-200/80 space-y-2">
                <div class="flex justify-between">
                    <span class="text-slate-400">Peminjam:</span>
                    <span class="font-bold text-slate-900">Dimas Pratama (2112000123)</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-400">Unit Peralatan:</span>
                    <span class="font-bold text-slate-900">Canon EOS 90D Body + EF-S 18-135mm USM</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-400">Kelengkapan Terverifikasi:</span>
                    <span class="font-medium text-slate-800">2x Baterai, 1x Charger, 1x SD 64GB, Tas Kamera</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-400">Kondisi Awal:</span>
                    <span class="text-emerald-700 font-semibold">Baik, Bersih, Berfungsi Normal</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-400">Lokasi Penyerahan:</span>
                    <span class="text-slate-800 font-semibold">Loket Unit VI Lantai 1 (Operator: Bpk. Hendra)</span>
                </div>
            </div>
        </div>

        <div class="flex justify-end pt-2">
            <button type="button" onclick="closeBastModal()" class="px-5 py-2 bg-slate-900 text-white font-bold text-xs rounded-xl hover:bg-slate-800 transition-colors">
                Tutup Dokumen
            </button>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openPaymentModal() {
        document.getElementById('modal-payment').classList.remove('hidden');
    }
    function closePaymentModal() {
        document.getElementById('modal-payment').classList.add('hidden');
    }

    function openPickupPassModal() {
        document.getElementById('modal-pickup').classList.remove('hidden');
    }
    function closePickupPassModal() {
        document.getElementById('modal-pickup').classList.add('hidden');
    }

    function openExtendModal() {
        document.getElementById('modal-extend').classList.remove('hidden');
    }
    function closeExtendModal() {
        document.getElementById('modal-extend').classList.add('hidden');
    }

    function openBastModal() {
        document.getElementById('modal-bast').classList.remove('hidden');
    }
    function closeBastModal() {
        document.getElementById('modal-bast').classList.add('hidden');
    }
</script>
@endpush
