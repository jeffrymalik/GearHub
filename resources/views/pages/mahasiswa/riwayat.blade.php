@extends('layouts.app')

@section('title', 'Riwayat Pemesanan - GearHub Perbanas Institute')

@section('content')
<main class="min-h-screen bg-slate-50 py-8 lg:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header & Breadcrumbs -->
        <div class="mb-8">
            <nav class="flex items-center gap-2 text-xs text-slate-500 mb-3" aria-label="Breadcrumb">
                <a href="{{ route('mahasiswa.dashboard') }}" class="hover:text-blue-600 transition-colors">Portal Mahasiswa</a>
                <svg class="w-3.5 h-3.5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                <span class="text-slate-800 font-semibold">Riwayat Pemesanan</span>
            </nav>

            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                <div>
                    <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                        Riwayat Pemesanan
                    </h1>
                    <p class="text-sm text-slate-600 mt-1">
                        Daftar riwayat sewa alat yang telah selesai dan Berita Acara Serah Terima (BAST) di loket Unit VI Lantai 1.
                    </p>
                </div>
                <div class="flex items-center gap-3">
                    <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 px-4 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-sm shadow-blue-500/20 transition-all">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                        <span>Sewa Alat Baru</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Metric Highlight Cards -->
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 mb-8">
            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold text-slate-500">Total Transaksi Selesai</span>
                    <span class="w-8 h-8 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    </span>
                </div>
                <div class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">4 Sewa</div>
                <p class="text-[11px] text-slate-500 mt-1">Semester Ganjil 2026/2027</p>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold text-slate-500">Ketepatan Pengembalian</span>
                    <span class="w-8 h-8 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    </span>
                </div>
                <div class="text-2xl font-extrabold text-emerald-600 font-['Space_Grotesk']">100%</div>
                <p class="text-[11px] text-emerald-700 font-medium mt-1">Bebas denda keterlambatan</p>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold text-slate-500">Total Pengeluaran Sewa</span>
                    <span class="w-8 h-8 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"></rect><line x1="2" y1="10" x2="22" y2="10"></line></svg>
                    </span>
                </div>
                <div class="text-2xl font-extrabold text-slate-900 font-['Space_Grotesk']">Rp 470.000</div>
                <p class="text-[11px] text-slate-500 mt-1">Tarif subsidi resmi mahasiswa</p>
            </div>

            <div class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-xs">
                <div class="flex items-center justify-between mb-2">
                    <span class="text-xs font-semibold text-slate-500">Lokasi Pengembalian</span>
                    <span class="w-8 h-8 rounded-xl bg-purple-50 text-purple-600 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </span>
                </div>
                <div class="text-base font-extrabold text-slate-900">Unit VI Lantai 1</div>
                <p class="text-[11px] text-slate-500 mt-1">Loket Sarana & Prasarana</p>
            </div>
        </div>

        <!-- Filter & Search Toolbar -->
        <div class="bg-white p-4 rounded-2xl border border-slate-200/80 shadow-xs mb-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <!-- Filter Tabs -->
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0 scrollbar-none" id="history-filter-tabs">
                <button type="button" class="filter-btn active px-4 py-2 rounded-xl text-xs font-bold transition-all bg-blue-600 text-white shadow-xs" data-filter="all">
                    Semua Riwayat (5)
                </button>
                <button type="button" class="filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" data-filter="Selesai">
                    Selesai (4)
                </button>
                <button type="button" class="filter-btn px-4 py-2 rounded-xl text-xs font-semibold transition-all bg-slate-100 text-slate-600 hover:bg-slate-200" data-filter="Dibatalkan">
                    Dibatalkan (1)
                </button>
            </div>

            <!-- Search Field -->
            <div class="relative w-full md:w-72">
                <input type="text" id="history-search-input" placeholder="Cari kode booking atau nama alat..." class="w-full pl-9 pr-4 py-2 text-xs bg-slate-50 border border-slate-200 rounded-xl focus:bg-white focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900 placeholder:text-slate-400">
                <svg class="w-4 h-4 text-slate-400 absolute left-3 top-2.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
            </div>
        </div>

        <!-- History Items List -->
        <div class="space-y-4" id="history-items-container">
            @foreach($historyOrders as $order)
                <div class="history-item-card bg-white rounded-2xl border border-slate-200/80 p-5 sm:p-6 transition-all hover:border-slate-300 hover:shadow-xs" data-status="{{ $order['status'] }}" data-name="{{ strtolower($order['item_name']) }}" data-id="{{ strtolower($order['id']) }}">
                    <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-5">
                        
                        <!-- Left info: image & device specs -->
                        <div class="flex items-start sm:items-center gap-4">
                            <div class="w-16 h-16 sm:w-20 sm:h-20 rounded-xl bg-slate-100 border border-slate-200/70 p-2 shrink-0 flex items-center justify-center overflow-hidden">
                                <img src="{{ $order['image'] }}" alt="{{ $order['item_name'] }}" class="w-full h-full object-contain" onerror="this.src='/images/placeholder.svg'">
                            </div>

                            <div>
                                <div class="flex flex-wrap items-center gap-2 mb-1">
                                    <span class="text-xs font-mono font-bold text-blue-600 bg-blue-50 px-2 py-0.5 rounded border border-blue-100">
                                        {{ $order['id'] }}
                                    </span>
                                    <span class="text-[11px] font-semibold text-slate-500 bg-slate-100 px-2 py-0.5 rounded">
                                        {{ $order['category'] }}
                                    </span>
                                    @if($order['status'] === 'Selesai')
                                        <span class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded border border-emerald-200/60">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                            Selesai & Dikembalikan
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1 text-[11px] font-bold text-slate-600 bg-slate-100 px-2 py-0.5 rounded border border-slate-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                                            Dibatalkan
                                        </span>
                                    @endif
                                </div>

                                <h3 class="text-base sm:text-lg font-bold text-slate-900 hover:text-blue-600 transition-colors">
                                    {{ $order['item_name'] }}
                                </h3>

                                <div class="flex flex-wrap items-center gap-y-1 gap-x-4 text-xs text-slate-500 mt-2">
                                    <span class="flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line></svg>
                                        {{ $order['rent_period'] }} ({{ $order['duration'] }})
                                    </span>
                                    <span class="flex items-center gap-1.5">
                                        <svg class="w-3.5 h-3.5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        {{ $order['location'] }}
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- Right details: return note, fee & actions -->
                        <div class="flex flex-col sm:flex-row sm:items-center lg:items-end justify-between lg:justify-end gap-4 pt-4 lg:pt-0 border-t lg:border-t-0 border-slate-100">
                            <div class="lg:text-right">
                                <span class="text-xs text-slate-400 block">Total Biaya Sewa</span>
                                <span class="text-lg font-extrabold text-slate-900 font-['Space_Grotesk']">
                                    Rp {{ number_format($order['total_fee'], 0, ',', '.') }}
                                </span>
                                @if($order['status'] === 'Selesai')
                                    <span class="text-[11px] text-emerald-600 font-semibold block mt-0.5">
                                        Lunas via QRIS Perbanas
                                    </span>
                                @endif
                            </div>

                            <div class="flex items-center gap-2">
                                @if($order['status'] === 'Selesai')
                                    <!-- Unduh Invoice Button -->
                                    <button type="button" class="btn-invoice px-3.5 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-colors inline-flex items-center gap-1.5" data-id="{{ $order['id'] }}" data-name="{{ $order['item_name'] }}" data-fee="{{ number_format($order['total_fee'], 0, ',', '.') }}" data-inv="{{ $order['invoice_no'] }}">
                                        <svg class="w-3.5 h-3.5 text-slate-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                        <span>e-Invoice</span>
                                    </button>

                                    <!-- BAST Note Trigger -->
                                    <button type="button" class="btn-bast px-3.5 py-2 border border-slate-200 hover:border-blue-600 hover:text-blue-600 text-slate-700 text-xs font-bold rounded-xl transition-colors inline-flex items-center gap-1.5" data-id="{{ $order['id'] }}" data-name="{{ $order['item_name'] }}" data-return="{{ $order['return_date'] }}" data-notes="{{ $order['notes'] }}" data-cond="{{ $order['condition'] }}">
                                        <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                                        <span>Berita Acara</span>
                                    </button>
                                @endif

                                <a href="{{ route('katalog') }}" class="px-3.5 py-2 bg-blue-50 hover:bg-blue-100 text-blue-700 text-xs font-bold rounded-xl transition-colors inline-flex items-center gap-1.5">
                                    <span>Sewa Lagi</span>
                                    <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                                </a>
                            </div>
                        </div>

                    </div>

                    <!-- Return Note Accordion bar -->
                    @if($order['status'] === 'Selesai')
                        <div class="mt-4 pt-3 border-t border-slate-100 flex flex-wrap items-center justify-between text-xs text-slate-500 bg-slate-50/70 p-3 rounded-xl">
                            <div class="flex items-center gap-2">
                                <span class="font-bold text-slate-700">Pemeriksaan Fisik:</span>
                                <span>{{ $order['condition'] }} &bull; {{ $order['notes'] }}</span>
                            </div>
                            <div class="text-[11px] text-slate-400 mt-1 sm:mt-0">
                                Selesai: {{ $order['return_date'] }}
                            </div>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
</main>

<!-- MODAL 1: PREVIEW E-INVOICE -->
<div id="invoice-modal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full overflow-hidden shadow-2xl border border-slate-100 animate-in fade-in zoom-in-95 duration-150">
        <div class="p-6 bg-slate-900 text-white flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold text-xs">
                    GH
                </div>
                <div>
                    <h3 class="text-base font-extrabold font-['Space_Grotesk'] leading-tight">e-Invoice GearHub</h3>
                    <p class="text-xs text-slate-300">Institut Perbanas Jakarta</p>
                </div>
            </div>
            <button type="button" id="close-invoice-modal-btn" class="p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <div class="p-6 space-y-4">
            <div class="flex items-center justify-between pb-3 border-b border-slate-100">
                <div>
                    <span class="text-[11px] text-slate-400 uppercase tracking-wider block font-bold">Nomor Invoice</span>
                    <span id="modal-inv-no" class="text-xs font-mono font-bold text-slate-800">INV/20261020/GH/0421</span>
                </div>
                <div class="text-right">
                    <span class="text-[11px] text-slate-400 uppercase tracking-wider block font-bold">Status Bayar</span>
                    <span class="inline-block px-2 py-0.5 rounded text-[10px] font-bold bg-emerald-100 text-emerald-800">LUNAS</span>
                </div>
            </div>

            <div class="bg-slate-50 p-4 rounded-xl border border-slate-100 space-y-2 text-xs">
                <div class="flex justify-between">
                    <span class="text-slate-500">Nama Mahasiswa:</span>
                    <span class="font-bold text-slate-800">{{ $student['name'] }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">NIM:</span>
                    <span class="font-mono text-slate-800">{{ $student['nim'] }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Prodi / Fakultas:</span>
                    <span class="text-slate-800">{{ $student['prodi'] }}</span>
                </div>
                <div class="flex justify-between">
                    <span class="text-slate-500">Peralatan:</span>
                    <span id="modal-inv-item" class="font-bold text-slate-800">Lenovo ThinkPad T14</span>
                </div>
                <div class="flex justify-between pt-2 border-t border-slate-200 text-sm font-extrabold text-slate-900">
                    <span>Total Pembayaran:</span>
                    <span id="modal-inv-fee" class="text-blue-600">Rp 180.000</span>
                </div>
            </div>

            <p class="text-[11px] text-slate-500 text-center">
                Bukti transaksi ini sah dan dikeluarkan secara otomatis oleh Sistem Sarana & Prasarana Perbanas Institute.
            </p>
        </div>

        <div class="p-4 bg-slate-50 border-t border-slate-100 flex items-center justify-end gap-3">
            <button type="button" onclick="window.print()" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl transition-colors shadow-xs inline-flex items-center gap-1.5">
                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
                <span>Cetak / Simpan PDF</span>
            </button>
        </div>
    </div>
</div>

<!-- MODAL 2: DETAIL BAST / BERITA ACARA -->
<div id="bast-modal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full overflow-hidden shadow-2xl border border-slate-100 animate-in fade-in zoom-in-95 duration-150">
        <div class="p-6 bg-slate-900 text-white flex items-center justify-between">
            <div>
                <h3 class="text-base font-extrabold font-['Space_Grotesk'] leading-tight">Berita Acara Pengembalian Alat</h3>
                <p class="text-xs text-slate-300">Loket Unit Sarpras Perbanas Unit VI Lantai 1</p>
            </div>
            <button type="button" id="close-bast-modal-btn" class="p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800 transition-colors">
                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
        </div>

        <div class="p-6 space-y-4">
            <div class="space-y-3 text-xs">
                <div>
                    <span class="text-slate-400 block font-semibold">Alat yang Dikembalikan:</span>
                    <span id="modal-bast-name" class="text-sm font-bold text-slate-900 block mt-0.5">Lenovo ThinkPad T14</span>
                </div>
                <div>
                    <span class="text-slate-400 block font-semibold">Waktu Pengembalian Fisik:</span>
                    <span id="modal-bast-return" class="font-bold text-slate-800 block mt-0.5">20 Okt 2026, 16:30 WIB</span>
                </div>
                <div>
                    <span class="text-slate-400 block font-semibold">Kondisi Fisik Saat Pengembalian:</span>
                    <span id="modal-bast-cond" class="inline-block mt-1 px-2.5 py-0.5 rounded-full text-[11px] font-bold bg-emerald-100 text-emerald-800">Sangat Baik</span>
                </div>
                <div>
                    <span class="text-slate-400 block font-semibold">Catatan Petugas Pemeriksa:</span>
                    <p id="modal-bast-notes" class="mt-1 p-3 bg-slate-50 rounded-xl border border-slate-200/80 text-slate-700 leading-relaxed">
                        Unit lengkap beserta charger 65W dan tas. Dikembalikan tepat waktu tanpa denda.
                    </p>
                </div>
                <div class="pt-3 border-t border-slate-100 flex items-center justify-between text-[11px] text-slate-500">
                    <span>Petugas Penerima: Hendra Saputra (Sarpras)</span>
                    <span class="text-emerald-600 font-bold">Status: Tervalidasi</span>
                </div>
            </div>
        </div>

        <div class="p-4 bg-slate-50 border-t border-slate-100 text-right">
            <button type="button" id="close-bast-modal-footer-btn" class="px-5 py-2 bg-slate-900 hover:bg-slate-800 text-white text-xs font-bold rounded-xl transition-colors">
                Tutup
            </button>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Filter tabs logic
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.history-item-card');
        const searchInput = document.getElementById('history-search-input');

        function applyFilter() {
            const activeBtn = document.querySelector('.filter-btn.active');
            const statusFilter = activeBtn ? activeBtn.getAttribute('data-filter') : 'all';
            const searchTerm = searchInput ? searchInput.value.toLowerCase().trim() : '';

            items.forEach(item => {
                const itemStatus = item.getAttribute('data-status');
                const itemName = item.getAttribute('data-name');
                const itemId = item.getAttribute('data-id');

                const matchesStatus = (statusFilter === 'all') || (itemStatus === statusFilter);
                const matchesSearch = (!searchTerm) || itemName.includes(searchTerm) || itemId.includes(searchTerm);

                if (matchesStatus && matchesSearch) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        }

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-blue-600', 'text-white', 'shadow-xs');
                    b.classList.add('bg-slate-100', 'text-slate-600');
                });
                this.classList.add('active', 'bg-blue-600', 'text-white', 'shadow-xs');
                this.classList.remove('bg-slate-100', 'text-slate-600');
                applyFilter();
            });
        });

        if (searchInput) {
            searchInput.addEventListener('input', applyFilter);
        }

        // Invoice Modal
        const invModal = document.getElementById('invoice-modal');
        const closeInvBtn = document.getElementById('close-invoice-modal-btn');
        document.querySelectorAll('.btn-invoice').forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('modal-inv-no').textContent = this.getAttribute('data-inv');
                document.getElementById('modal-inv-item').textContent = this.getAttribute('data-name');
                document.getElementById('modal-inv-fee').textContent = 'Rp ' + this.getAttribute('data-fee');
                invModal.classList.remove('hidden');
            });
        });
        if (closeInvBtn) {
            closeInvBtn.addEventListener('click', () => invModal.classList.add('hidden'));
        }

        // BAST Modal
        const bastModal = document.getElementById('bast-modal');
        const closeBastBtn = document.getElementById('close-bast-modal-btn');
        const closeBastFooterBtn = document.getElementById('close-bast-modal-footer-btn');
        document.querySelectorAll('.btn-bast').forEach(btn => {
            btn.addEventListener('click', function () {
                document.getElementById('modal-bast-name').textContent = this.getAttribute('data-name');
                document.getElementById('modal-bast-return').textContent = this.getAttribute('data-return');
                document.getElementById('modal-bast-cond').textContent = this.getAttribute('data-cond');
                document.getElementById('modal-bast-notes').textContent = this.getAttribute('data-notes');
                bastModal.classList.remove('hidden');
            });
        });
        if (closeBastBtn) closeBastBtn.addEventListener('click', () => bastModal.classList.add('hidden'));
        if (closeBastFooterBtn) closeBastFooterBtn.addEventListener('click', () => bastModal.classList.add('hidden'));

        // Close on background click
        window.addEventListener('click', function (e) {
            if (e.target === invModal) invModal.classList.add('hidden');
            if (e.target === bastModal) bastModal.classList.add('hidden');
        });
    });
</script>
@endsection
