@extends('layouts.app')

@section('title', 'Profil Saya - GearHub Perbanas Institute')

@section('content')
<main class="min-h-screen bg-slate-50 py-8 lg:py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Breadcrumbs -->
        <nav class="flex items-center gap-2 text-xs text-slate-500 mb-6" aria-label="Breadcrumb">
            <a href="{{ route('mahasiswa.dashboard') }}" class="hover:text-blue-600 transition-colors">Portal Mahasiswa</a>
            <svg class="w-3.5 h-3.5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
            <span class="text-slate-800 font-semibold">Profil Saya</span>
        </nav>

        <!-- Top Profile Hero Card -->
        <div class="bg-white rounded-3xl border border-slate-200/80 p-6 sm:p-8 shadow-xs mb-8">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-6">
                <div class="flex items-center gap-5">
                    <div class="relative">
                        <div class="w-20 h-20 sm:w-24 sm:h-24 rounded-2xl bg-gradient-to-tr from-blue-700 to-blue-500 text-white font-extrabold flex items-center justify-center text-2xl sm:text-3xl shadow-md shadow-blue-500/20 font-['Space_Grotesk']">
                            DP
                        </div>
                        <span class="absolute -bottom-1 -right-1 w-6 h-6 rounded-full bg-emerald-500 border-2 border-white flex items-center justify-center text-white" title="Akun Terverifikasi">
                            <svg class="w-3.5 h-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3"><polyline points="20 6 9 17 4 12"/></svg>
                        </span>
                    </div>

                    <div>
                        <div class="flex flex-wrap items-center gap-2.5 mb-1">
                            <h1 class="text-xl sm:text-2xl font-extrabold text-slate-900 font-['Space_Grotesk'] tracking-tight">
                                {{ $student['name'] }}
                            </h1>
                            <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-bold bg-emerald-50 text-emerald-700 border border-emerald-200/60">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                Terverifikasi Aktif
                            </span>
                        </div>
                        <p class="text-xs sm:text-sm text-slate-600 font-medium">
                            NIM {{ $student['nim'] }} &bull; {{ $student['prodi'] }} ({{ $student['fakultas'] }})
                        </p>
                        <p class="text-xs text-slate-400 mt-1">
                            Institut Perbanas Jakarta &bull; Terdaftar sejak Angkatan {{ $student['angkatan'] }}
                        </p>
                    </div>
                </div>

                <!-- Fast Quick Action -->
                <div class="flex items-center gap-3">
                    <a href="{{ route('mahasiswa.pesanan') }}" class="px-4 py-2.5 bg-slate-100 hover:bg-slate-200 text-slate-700 text-xs font-bold rounded-xl transition-colors">
                        Lihat Pesanan Saya
                    </a>
                    <a href="{{ route('login') }}" class="px-4 py-2.5 bg-red-50 hover:bg-red-100 text-red-600 text-xs font-bold rounded-xl transition-colors inline-flex items-center gap-1.5">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        <span>Keluar</span>
                    </a>
                </div>
            </div>

            <!-- Profile Summary Badges -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 mt-8 pt-6 border-t border-slate-100">
                <div>
                    <span class="text-xs text-slate-400 block font-medium">Status Peminjaman</span>
                    <span class="text-base font-bold text-slate-900 mt-0.5 block">Akun Bersih</span>
                    <span class="text-[11px] text-emerald-600 font-semibold">Bebas denda & sanksi</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-medium">Peminjaman Sukses</span>
                    <span class="text-base font-bold text-slate-900 mt-0.5 block">4 Transaksi</span>
                    <span class="text-[11px] text-slate-500">100% tepat waktu</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-medium">Verifikasi KTM</span>
                    <span class="text-base font-bold text-emerald-600 mt-0.5 block">Valid (Aktif)</span>
                    <span class="text-[11px] text-slate-500">Loket Unit VI Lantai 1</span>
                </div>
                <div>
                    <span class="text-xs text-slate-400 block font-medium">Batas Maksimal Pinjam</span>
                    <span class="text-base font-bold text-blue-600 mt-0.5 block">2 Alat Bersamaan</span>
                    <span class="text-[11px] text-slate-500">Ketentuan akademik</span>
                </div>
            </div>
        </div>

        <!-- Tabbed Navigation -->
        <div class="flex items-center gap-2 border-b border-slate-200 mb-8 overflow-x-auto scrollbar-none">
            <button type="button" class="profile-tab-btn active px-5 py-3 border-b-2 border-blue-600 text-blue-600 font-bold text-sm transition-colors" data-target="tab-personal">
                Data Diri & Kontak
            </button>
            <button type="button" class="profile-tab-btn px-5 py-3 border-b-2 border-transparent text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" data-target="tab-ktm">
                KTM & Validasi Akademik
            </button>
            <button type="button" class="profile-tab-btn px-5 py-3 border-b-2 border-transparent text-slate-500 hover:text-slate-800 font-medium text-sm transition-colors" data-target="tab-security">
                Keamanan & Password
            </button>
        </div>

        <!-- Success Toast Notification (Hidden by default) -->
        <div id="save-alert" class="hidden mb-6 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 text-xs font-semibold flex items-center justify-between animate-in fade-in">
            <div class="flex items-center gap-2">
                <svg class="w-4 h-4 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                <span id="alert-message">Perubahan data profil berhasil disimpan ke sistem GearHub Perbanas.</span>
            </div>
            <button type="button" onclick="document.getElementById('save-alert').classList.add('hidden')" class="text-emerald-700 hover:text-emerald-900 font-bold">
                Tutup
            </button>
        </div>

        <!-- TAB CONTENT 1: DATA DIRI & KONTAK -->
        <div id="tab-personal" class="profile-tab-panel">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main Form (2 cols) -->
                <div class="lg:col-span-2 bg-white rounded-3xl border border-slate-200/80 p-6 sm:p-8 shadow-xs">
                    <h2 class="text-lg font-bold text-slate-900 font-['Space_Grotesk'] mb-6">
                        Informasi Pribadi Mahasiswa
                    </h2>

                    <form id="profile-form" class="space-y-5">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Nama Lengkap</label>
                                <input type="text" value="{{ $student['name'] }}" class="w-full px-3.5 py-2.5 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900 font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Nomor Induk Mahasiswa (NIM)</label>
                                <input type="text" value="{{ $student['nim'] }}" disabled class="w-full px-3.5 py-2.5 text-xs bg-slate-100 border border-slate-200 rounded-xl text-slate-500 font-mono cursor-not-allowed">
                                <span class="text-[10px] text-slate-400 mt-1 block">Terkunci otomatis oleh data PDDikti Perbanas</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Email Mahasiswa (@perbanas.ac.id)</label>
                                <input type="email" value="{{ $student['email'] }}" disabled class="w-full px-3.5 py-2.5 text-xs bg-slate-100 border border-slate-200 rounded-xl text-slate-500 cursor-not-allowed">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Nomor WhatsApp Aktif</label>
                                <input type="tel" value="{{ $student['phone'] }}" class="w-full px-3.5 py-2.5 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900 font-medium">
                                <span class="text-[10px] text-slate-400 mt-1 block">Digunakan untuk notifikasi pengembalian alat</span>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Fakultas</label>
                                <input type="text" value="{{ $student['fakultas'] }}" disabled class="w-full px-3.5 py-2.5 text-xs bg-slate-100 border border-slate-200 rounded-xl text-slate-500 cursor-not-allowed">
                            </div>
                            <div>
                                <label class="block text-xs font-semibold text-slate-600 mb-1">Program Studi</label>
                                <input type="text" value="{{ $student['prodi'] }}" disabled class="w-full px-3.5 py-2.5 text-xs bg-slate-100 border border-slate-200 rounded-xl text-slate-500 cursor-not-allowed">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-semibold text-slate-600 mb-1">Alamat Domisili Jakarta</label>
                            <textarea rows="2" class="w-full px-3.5 py-2.5 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900 font-medium">{{ $student['alamat'] }}</textarea>
                        </div>

                        <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                            <button type="reset" class="px-5 py-2.5 border border-slate-200 text-slate-600 hover:bg-slate-50 text-xs font-bold rounded-xl transition-colors">
                                Batalkan
                            </button>
                            <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-sm shadow-blue-500/20 transition-all">
                                Simpan Perubahan Data
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Right Sidebar Guidance (1 col) -->
                <div class="space-y-6">
                    <div class="bg-blue-50/70 rounded-3xl border border-blue-100 p-6">
                        <div class="w-10 h-10 rounded-xl bg-blue-600 text-white flex items-center justify-center mb-4">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                        </div>
                        <h3 class="text-sm font-bold text-slate-900 font-['Space_Grotesk'] mb-2">
                            Ketentuan Data Mahasiswa
                        </h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-4">
                            Nama dan NIM disinkronisasi dengan database kemahasiswaan Perbanas Institute. Jika terdapat kekeliruan data akademik, silakan lapor langsung ke Loket Sarpras di Gedung Unit VI Lantai 1 atau bagian BAA.
                        </p>
                        <div class="p-3 bg-white rounded-xl border border-blue-200/60 text-[11px] text-blue-900 font-medium">
                            Loket Sarpras Buka: Senin s.d. Jumat (08:30 - 17:00 WIB)
                        </div>
                    </div>

                    <div class="bg-white rounded-3xl border border-slate-200/80 p-6 shadow-xs">
                        <h3 class="text-sm font-bold text-slate-900 font-['Space_Grotesk'] mb-3">
                            Kontak Darurat Tersimpan
                        </h3>
                        <div class="space-y-2.5 text-xs text-slate-600">
                            <div class="flex justify-between">
                                <span class="text-slate-400">Dosen Pembimbing:</span>
                                <span class="font-bold text-slate-800">Dr. Ir. Wahyudi, M.Kom</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-slate-400">Status Pembimbing:</span>
                                <span class="text-emerald-600 font-semibold">Tervalidasi BAA</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB CONTENT 2: KTM & VALIDASI AKADEMIK -->
        <div id="tab-ktm" class="profile-tab-panel hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <!-- Visual KTM Digital Card -->
                <div class="bg-gradient-to-br from-slate-900 via-blue-950 to-blue-900 rounded-3xl p-6 sm:p-8 text-white shadow-xl relative overflow-hidden">
                    <div class="absolute -right-12 -bottom-12 w-56 h-56 rounded-full bg-blue-500/10 blur-2xl"></div>

                    <div class="flex items-center justify-between pb-6 border-b border-white/10 relative z-10">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white font-bold">
                                GH
                            </div>
                            <div>
                                <span class="text-xs font-bold tracking-wider uppercase text-blue-300 block">KTM DIGITAL VERIFIED</span>
                                <span class="text-sm font-extrabold font-['Space_Grotesk']">PERBANAS INSTITUTE</span>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold bg-emerald-500/20 text-emerald-300 border border-emerald-400/30">
                            VALID 2026/2027
                        </span>
                    </div>

                    <div class="py-6 flex items-center gap-5 relative z-10">
                        <div class="w-20 h-24 rounded-xl bg-white/10 border border-white/20 flex items-center justify-center text-white/80 font-bold text-xl">
                            DP
                        </div>
                        <div class="space-y-1">
                            <h3 class="text-lg font-bold font-['Space_Grotesk'] text-white">{{ $student['name'] }}</h3>
                            <p class="text-xs font-mono text-blue-200">NIM: {{ $student['nim'] }}</p>
                            <p class="text-xs text-slate-300">{{ $student['prodi'] }}</p>
                            <p class="text-[11px] text-slate-400">{{ $student['fakultas'] }}</p>
                        </div>
                    </div>

                    <div class="pt-4 border-t border-white/10 flex items-center justify-between text-[11px] text-slate-400 relative z-10">
                        <span>Barcode Identitas Peralatan:</span>
                        <span class="font-mono text-white font-bold tracking-widest">||| | |||| | ||| ||</span>
                    </div>
                </div>

                <!-- Verification Detail & Upload -->
                <div class="bg-white rounded-3xl border border-slate-200/80 p-6 sm:p-8 shadow-xs space-y-5">
                    <h2 class="text-lg font-bold text-slate-900 font-['Space_Grotesk']">
                        Status Verifikasi Mahasiswa
                    </h2>

                    <div class="p-4 bg-emerald-50 rounded-2xl border border-emerald-200 flex items-start gap-3">
                        <svg class="w-5 h-5 text-emerald-600 shrink-0 mt-0.5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        <div class="text-xs text-emerald-900">
                            <span class="font-bold block text-sm mb-0.5">KTM Aktif & Terverifikasi Sarpras</span>
                            Berkas identitas fisik KTM telah diverifikasi langsung oleh petugas loket di Gedung Unit VI Lantai 1 Perbanas Institute. Akun Anda memiliki izin penuh peminjaman fasilitas kampus.
                        </div>
                    </div>

                    <div class="space-y-3 text-xs text-slate-600">
                        <div class="flex justify-between py-2 border-b border-slate-100">
                            <span class="text-slate-400">Tanggal Verifikasi Terakhir:</span>
                            <span class="font-bold text-slate-800">12 September 2026</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-slate-100">
                            <span class="text-slate-400">Petugas Pemverifikasi:</span>
                            <span class="font-bold text-slate-800">Hendra Saputra (Loket Sarpras)</span>
                        </div>
                        <div class="flex justify-between py-2 border-b border-slate-100">
                            <span class="text-slate-400">Masa Berlaku Verifikasi:</span>
                            <span class="font-bold text-blue-600">Sampai Akhir Semester Genap 2027</span>
                        </div>
                    </div>

                    <div class="pt-3">
                        <button type="button" class="w-full py-2.5 border border-slate-200 hover:border-blue-600 hover:text-blue-600 text-slate-700 text-xs font-bold rounded-xl transition-colors">
                            Perbarui / Unggah Ulang Foto KTM Fisik
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB CONTENT 3: KEAMANAN & PASSWORD -->
        <div id="tab-security" class="profile-tab-panel hidden">
            <div class="max-w-2xl bg-white rounded-3xl border border-slate-200/80 p-6 sm:p-8 shadow-xs">
                <h2 class="text-lg font-bold text-slate-900 font-['Space_Grotesk'] mb-2">
                    Ubah Password Akun
                </h2>
                <p class="text-xs text-slate-600 mb-6">
                    Gunakan kombinasi minimal 8 karakter dengan huruf, angka, dan simbol untuk menjaga keamanan akun portal Anda.
                </p>

                <form id="password-form" class="space-y-4">
                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1">Password Saat Ini</label>
                        <input type="password" required placeholder="Masukkan password lama" class="w-full px-3.5 py-2.5 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1">Password Baru</label>
                        <input type="password" required placeholder="Minimal 8 karakter" class="w-full px-3.5 py-2.5 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900">
                    </div>

                    <div>
                        <label class="block text-xs font-semibold text-slate-600 mb-1">Konfirmasi Password Baru</label>
                        <input type="password" required placeholder="Ulangi password baru" class="w-full px-3.5 py-2.5 text-xs bg-white border border-slate-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-600 text-slate-900">
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-end gap-3">
                        <button type="submit" class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white text-xs font-bold rounded-xl shadow-sm shadow-blue-500/20 transition-all">
                            Perbarui Password
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Tab switching logic
        const tabBtns = document.querySelectorAll('.profile-tab-btn');
        const tabPanels = document.querySelectorAll('.profile-tab-panel');
        const alertBox = document.getElementById('save-alert');
        const alertMsg = document.getElementById('alert-message');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                const target = this.getAttribute('data-target');

                tabBtns.forEach(b => {
                    b.classList.remove('active', 'border-blue-600', 'text-blue-600', 'font-bold');
                    b.classList.add('border-transparent', 'text-slate-500', 'font-medium');
                });
                this.classList.add('active', 'border-blue-600', 'text-blue-600', 'font-bold');
                this.classList.remove('border-transparent', 'text-slate-500', 'font-medium');

                tabPanels.forEach(p => p.classList.add('hidden'));
                const activePanel = document.getElementById(target);
                if (activePanel) activePanel.classList.remove('hidden');
            });
        });

        // Form submit handlers
        const profileForm = document.getElementById('profile-form');
        if (profileForm) {
            profileForm.addEventListener('submit', function (e) {
                e.preventDefault();
                alertMsg.textContent = 'Perubahan data diri berhasil disimpan ke database mahasiswa Perbanas.';
                alertBox.classList.remove('hidden');
                window.scrollTo({ top: 100, behavior: 'smooth' });
            });
        }

        const passwordForm = document.getElementById('password-form');
        if (passwordForm) {
            passwordForm.addEventListener('submit', function (e) {
                e.preventDefault();
                alertMsg.textContent = 'Password berhasil diperbarui. Silakan gunakan password baru pada sesi masuk berikutnya.';
                alertBox.classList.remove('hidden');
                passwordForm.reset();
                window.scrollTo({ top: 100, behavior: 'smooth' });
            });
        }
    });
</script>
@endsection
