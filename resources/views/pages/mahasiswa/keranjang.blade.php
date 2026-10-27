@extends('layouts.app')

@section('title', 'Keranjang Sewa - GearHub Perbanas Institute')

@section('content')
<main class="min-h-screen bg-slate-50 py-8 lg:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6" aria-label="Breadcrumb">
            <a href="{{ route('mahasiswa.dashboard') }}" class="hover:text-blue-600 transition-colors">Portal Mahasiswa</a>
            <svg class="w-3.5 h-3.5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            <span class="text-slate-800 font-semibold">Keranjang Sewa</span>
        </nav>

        <div class="mb-8">
            <h1 class="text-2xl sm:text-3xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                Keranjang Pengajuan Sewa
            </h1>
            <p class="text-sm text-slate-600 mt-1">
                Tinjau peralatan pilihan Anda, tentukan jadwal pemakaian akademik, dan konfirmasi pengambilan di loket Unit VI Lantai 1.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
            
            <!-- Left Side: Items & Form (2 Columns) -->
            <div class="lg:col-span-2 space-y-6">
                
                <!-- Cart Item Card -->
                <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs" id="cart-item-card">
                    <div class="flex items-center justify-between pb-4 border-b border-slate-100 mb-5">
                        <span class="text-xs font-bold text-slate-500 uppercase tracking-wider">Peralatan Dipilih (1 Alat)</span>
                        <a href="{{ route('katalog') }}" class="text-xs text-blue-600 hover:text-blue-700 font-bold inline-flex items-center gap-1">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg>
                            <span>Tambah Alat Lain</span>
                        </a>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-5">
                        <div class="flex items-center gap-4">
                            <div class="w-20 h-20 rounded-2xl bg-slate-100 border border-slate-200/70 p-2 shrink-0 flex items-center justify-center">
                                <img src="/images/tripod-manfrotto.svg" alt="Tripod Manfrotto" class="w-full h-full object-contain" onerror="this.src='/images/placeholder.svg'">
                            </div>
                            <div>
                                <span class="text-[10px] font-bold text-blue-600 bg-blue-50 px-2 py-0.5 rounded border border-blue-100">
                                    Kamera & Fotografi
                                </span>
                                <h3 class="text-base font-bold text-slate-900 mt-1">
                                    Tripod Manfrotto Heavy Duty
                                </h3>
                                <p class="text-xs text-slate-500">
                                    Fluid head 2-way, tinggi maksimal 165 cm, quick release plate lengkap.
                                </p>
                                <span class="text-xs font-extrabold text-blue-600 mt-1.5 block">
                                    Rp 25.000 <span class="text-[10px] font-normal text-slate-400">/ hari</span>
                                </span>
                            </div>
                        </div>

                        <!-- Stepper / Action -->
                        <div class="flex items-center sm:flex-col items-end justify-between gap-3 pt-3 sm:pt-0 border-t sm:border-t-0 border-slate-100">
                            <button type="button" id="btn-remove-item" class="text-xs text-red-500 hover:text-red-700 font-semibold inline-flex items-center gap-1 p-1">
                                <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                                <span>Hapus</span>
                            </button>
                            <span class="text-xs font-bold text-slate-800 bg-slate-100 px-3 py-1 rounded-lg">
                                1 Unit
                            </span>
                        </div>
                    </div>

                    <!-- Date & Duration Selector -->
                    <div class="mt-6 pt-5 border-t border-slate-100 bg-slate-50/70 p-4 rounded-2xl">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Mulai Pinjam</label>
                                <input type="date" id="start-date" value="2026-10-30" class="w-full px-3 py-2 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900 font-semibold">
                                <span class="text-[10px] text-slate-400 mt-1 block">Pengambilan mulai pukul 08:30 WIB</span>
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Tanggal Pengembalian</label>
                                <input type="date" id="end-date" value="2026-10-31" class="w-full px-3 py-2 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900 font-semibold">
                                <span class="text-[10px] text-slate-400 mt-1 block">Wajib sebelum pukul 17:00 WIB</span>
                            </div>
                        </div>

                        <div class="mt-3 flex items-center justify-between text-xs font-medium text-slate-600 pt-3 border-t border-slate-200/60">
                            <span>Durasi Dihitung:</span>
                            <span class="font-bold text-slate-900" id="duration-label">1 Hari (24 Jam)</span>
                        </div>
                    </div>
                </div>

                <!-- Academic Purpose Form -->
                <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs">
                    <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk'] mb-4 flex items-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                        <span>Keperluan Akademik Peminjaman</span>
                    </h2>

                    <div class="space-y-4 text-xs">
                        <div>
                            <label class="block font-semibold text-slate-700 mb-1">Tujuan Penggunaan Alat</label>
                            <select class="w-full px-3 py-2 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900">
                                <option value="praktikum">Tugas Praktikum / Mata Kuliah</option>
                                <option value="ta">Tugas Akhir / Skripsi / Proyek Mandiri</option>
                                <option value="ukm">Dokumentasi Acara Organisasi / UKM Perbanas</option>
                                <option value="seminar">Seminar / Workshop Mahasiswa</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block font-semibold text-slate-700 mb-1">Nama Mata Kuliah / Acara</label>
                                <input type="text" placeholder="Contoh: Pemrograman Multimedia" value="Fotografi & Multimedia FTI" class="w-full px-3 py-2 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900">
                            </div>
                            <div>
                                <label class="block font-semibold text-slate-700 mb-1">Dosen Pengampu / Pembina UKM</label>
                                <input type="text" placeholder="Contoh: Dr. Wahyudi, M.Kom" value="Dr. Ir. Wahyudi, M.Kom" class="w-full px-3 py-2 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900">
                            </div>
                        </div>

                        <div>
                            <label class="block font-semibold text-slate-700 mb-1">Catatan Tambahan (Opsional)</label>
                            <textarea rows="2" placeholder="Tuliskan jika ada kebutuhan kabel tambahan atau aksesori pendukung..." class="w-full px-3 py-2 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Pickup Desk Reminder -->
                <div class="p-5 rounded-2xl bg-blue-50/80 border border-blue-200/80 flex items-start gap-4">
                    <div class="w-10 h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    </div>
                    <div class="text-xs text-blue-950">
                        <span class="font-extrabold text-sm block mb-1">Lokasi Pengambilan & Pengembalian Fisik</span>
                        <p class="leading-relaxed text-blue-900">
                            Semua peralatan diambil dan dikembalikan langsung di <strong>Unit Sarana dan Prasarana Perbanas Institute, Gedung Unit VI Lantai 1</strong>. Harap membawa KTM asli untuk verifikasi fisik saat serah terima barang.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Right Side: Order Summary (1 Column) -->
            <div class="space-y-6">
                <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs sticky top-28">
                    <h2 class="text-base font-bold text-slate-900 font-['Space_Grotesk'] mb-4">
                        Ringkasan Biaya Sewa
                    </h2>

                    <div class="space-y-3 text-xs pb-4 border-b border-slate-100">
                        <div class="flex justify-between text-slate-600">
                            <span>Sewa Alat (1 unit x 1 hari):</span>
                            <span class="font-semibold text-slate-900" id="subtotal-label">Rp 25.000</span>
                        </div>
                        <div class="flex justify-between text-slate-600">
                            <span>Biaya Layanan Kampus:</span>
                            <span class="font-bold text-emerald-600">Gratis (Subsidi)</span>
                        </div>
                        <div class="flex justify-between text-slate-600">
                            <span>Deposit Jaminan Fisik:</span>
                            <span class="font-bold text-slate-700">KTM Asli di Loket</span>
                        </div>
                    </div>

                    <div class="py-4 border-b border-slate-100 flex items-center justify-between">
                        <span class="text-sm font-bold text-slate-900">Total Pembayaran:</span>
                        <span class="text-xl font-extrabold text-blue-600 font-['Space_Grotesk']" id="total-label">
                            Rp 25.000
                        </span>
                    </div>

                    <!-- Terms agreement checkbox -->
                    <div class="pt-4 space-y-4">
                        <label class="flex items-start gap-2.5 cursor-pointer text-[11px] text-slate-600 leading-snug">
                            <input type="checkbox" id="agree-terms" checked class="mt-0.5 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                            <span>
                                Saya menyetujui <a href="{{ route('kebijakan') }}" target="_blank" class="text-blue-600 underline font-semibold">Kebijakan Sewa</a> dan bersedia mengembalikan alat sebelum pukul 17:00 di loket Unit VI Lantai 1.
                            </span>
                        </label>

                        <button type="button" id="btn-submit-booking" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-bold text-xs rounded-xl shadow-md shadow-blue-500/20 transition-all flex items-center justify-center gap-2">
                            <span>Ajukan Pemesanan Sekarang</span>
                            <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
                        </button>
                    </div>

                    <div class="mt-4 pt-4 border-t border-slate-100 text-[11px] text-slate-400 text-center">
                        Metode bayar QRIS / Tunai di loket setelah disetujui petugas Sarpras.
                    </div>
                </div>
            </div>

        </div>

    </div>
</main>

<!-- BOOKING SUCCESS MODAL -->
<div id="booking-success-modal" class="hidden fixed inset-0 z-50 overflow-y-auto bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-md w-full overflow-hidden shadow-2xl border border-slate-100 animate-in fade-in zoom-in-95 duration-150 p-6 sm:p-8 text-center">
        <div class="w-16 h-16 rounded-2xl bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto mb-4">
            <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"/></svg>
        </div>

        <h3 class="text-xl font-extrabold text-slate-900 font-['Space_Grotesk'] mb-2">
            Pengajuan Booking Berhasil!
        </h3>
        <p class="text-xs text-slate-600 leading-relaxed mb-6">
            Pemesanan Anda telah tercatat dengan kode <strong class="text-blue-600 font-mono text-sm">GH-2026-1030</strong>. Silakan pantau status persetujuan di halaman <strong>Pesanan Saya</strong> dan siapkan pembayaran QRIS saat pengambilan di loket Unit VI Lantai 1.
        </p>

        <div class="space-y-3">
            <a href="{{ route('mahasiswa.pesanan') }}" class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-xs transition-colors block">
                Buka Halaman Pesanan Saya
            </a>
            <a href="{{ route('mahasiswa.dashboard') }}" class="w-full py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-colors block">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const startDate = document.getElementById('start-date');
        const endDate = document.getElementById('end-date');
        const durationLabel = document.getElementById('duration-label');
        const subtotalLabel = document.getElementById('subtotal-label');
        const totalLabel = document.getElementById('total-label');
        const unitPrice = 25000;

        function updateDuration() {
            if (!startDate.value || !endDate.value) return;
            const start = new Date(startDate.value);
            const end = new Date(endDate.value);
            const diffTime = end - start;
            let days = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            if (days < 1) days = 1;

            durationLabel.textContent = `${days} Hari (${days * 24} Jam)`;
            const total = days * unitPrice;
            const formatted = 'Rp ' + total.toLocaleString('id-ID');
            subtotalLabel.textContent = formatted;
            totalLabel.textContent = formatted;
        }

        if (startDate && endDate) {
            startDate.addEventListener('change', updateDuration);
            endDate.addEventListener('change', updateDuration);
        }

        // Submit Booking Button
        const submitBtn = document.getElementById('btn-submit-booking');
        const successModal = document.getElementById('booking-success-modal');
        const agreeCheck = document.getElementById('agree-terms');

        if (submitBtn && successModal) {
            submitBtn.addEventListener('click', function () {
                if (agreeCheck && !agreeCheck.checked) {
                    alert('Harap setujui Kebijakan Penyewaan Perbanas Institute terlebih dahulu.');
                    return;
                }
                successModal.classList.remove('hidden');
            });
        }

        // Remove item simulation
        const removeBtn = document.getElementById('btn-remove-item');
        const cartCard = document.getElementById('cart-item-card');
        if (removeBtn && cartCard) {
            removeBtn.addEventListener('click', function () {
                if (confirm('Apakah Anda yakin ingin membatalkan alat ini dari keranjang?')) {
                    cartCard.innerHTML = `
                        <div class="py-12 text-center">
                            <div class="w-12 h-12 rounded-2xl bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
                                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                            </div>
                            <h4 class="text-sm font-bold text-slate-800">Keranjang Sewa Kosong</h4>
                            <p class="text-xs text-slate-500 mt-1 mb-4">Pilih peralatan yang Anda butuhkan melalui katalog kampus.</p>
                            <a href="{{ route('katalog') }}" class="px-4 py-2 bg-blue-600 text-white font-bold text-xs rounded-xl">Jelajahi Katalog</a>
                        </div>
                    `;
                    subtotalLabel.textContent = 'Rp 0';
                    totalLabel.textContent = 'Rp 0';
                    submitBtn.disabled = true;
                    submitBtn.classList.add('opacity-50', 'cursor-not-allowed');
                }
            });
        }
    });
</script>
@endsection
