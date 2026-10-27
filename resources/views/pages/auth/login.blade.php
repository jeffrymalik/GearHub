@extends('layouts.app')

@section('title', 'Masuk ke GearHub - Platform Penyewaan Peralatan Perbanas Institute')
@section('meta_description', 'Masuk ke akun GearHub kamu untuk mulai menyewa berbagai peralatan kampus dengan mudah, aman, dan transparan.')

@section('content')
<div class="min-h-[calc(100vh-80px)] flex flex-col lg:flex-row">
    
    <!-- LEFT COLUMN: Campus Hero Visual & Key Features (50% width on Desktop) -->
    <div class="relative w-full lg:w-1/2 bg-[#0c1e3d] text-white flex flex-col justify-center px-6 sm:px-12 lg:px-16 py-16 lg:py-24 overflow-hidden min-h-[460px] lg:min-h-full">
        <!-- Campus Image Backdrop -->
        <div class="absolute inset-0 bg-cover bg-center opacity-45 mix-blend-luminosity pointer-events-none scale-105" style="background-image: url('/images/hero-campus.jpg');"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-[#071326] via-[#0c1e3d]/90 to-[#0c1e3d]/60 pointer-events-none"></div>

        <!-- Left Content Area -->
        <div class="relative z-10 max-w-lg space-y-8">
            <!-- Decorative Blue Bar -->
            <div class="w-12 h-1 bg-blue-500 rounded-full"></div>

            <div class="space-y-3">
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight font-['Space_Grotesk'] leading-tight">
                    Selamat Datang di<br>
                    <span class="text-blue-500">GearHub</span>
                </h1>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed">
                    Masuk ke akun kamu untuk mulai menyewa berbagai peralatan kampus dengan mudah, aman, dan transparan.
                </p>
            </div>

            <!-- 3 Value Proposition Bullets -->
            <div class="space-y-6 pt-2">
                <!-- Bullet 1: Akses Katalog Lengkap -->
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
                            Akses Katalog Lengkap
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                            Jelajahi berbagai peralatan kampus kapan saja.
                        </p>
                    </div>
                </div>

                <!-- Bullet 2: Kelola Pemesanan -->
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
                            Kelola Pemesanan
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                            Pantau jadwal, pembayaran, dan status penyewaan.
                        </p>
                    </div>
                </div>

                <!-- Bullet 3: Akun Terverifikasi -->
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-2xl bg-blue-600/20 border border-blue-400/30 text-blue-400 flex items-center justify-center shrink-0 shadow-inner">
                        <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <path d="M9 12l2 2 4-4"></path>
                        </svg>
                    </div>
                    <div>
                        <h2 class="text-base font-bold text-white tracking-tight">
                            Akun Terverifikasi
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 mt-0.5">
                            Aman dan hanya untuk mahasiswa Perbanas Institute.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- RIGHT COLUMN: Login Form Area (50% width on Desktop) -->
    <div class="w-full lg:w-1/2 bg-slate-50/70 flex items-center justify-center px-6 sm:px-12 lg:px-16 py-12 lg:py-24">
        <div class="max-w-md w-full">
            
            <!-- White Floating Card -->
            <div class="bg-white border border-slate-200/90 rounded-3xl p-8 sm:p-10 shadow-sm space-y-8">
                
                <!-- Card Header -->
                <div class="space-y-2">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 tracking-tight font-['Space_Grotesk']">
                        Masuk ke <span class="text-blue-600">GearHub</span>
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Gunakan akun kamu untuk mengakses layanan penyewaan peralatan kampus.
                    </p>
                </div>

                <!-- Login Form -->
                <form id="login-form" class="space-y-5">
                    
                    <!-- Email / NIM Field -->
                    <div>
                        <label for="login-identifier" class="block text-xs font-semibold text-slate-700 mb-2">
                            Email atau NIM
                        </label>
                        <div class="relative rounded-xl shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                            </div>
                            <input 
                                type="text" 
                                id="login-identifier" 
                                required 
                                placeholder="Masukkan email atau NIM kamu" 
                                class="w-full pl-10 pr-4 py-3 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                            >
                        </div>
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="login-password" class="block text-xs font-semibold text-slate-700 mb-2">
                            Password
                        </label>
                        <div class="relative rounded-xl shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                                <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                            </div>
                            <input 
                                type="password" 
                                id="login-password" 
                                required 
                                placeholder="Masukkan password kamu" 
                                class="w-full pl-10 pr-11 py-3 bg-white border border-slate-200 rounded-xl text-xs sm:text-sm text-slate-800 placeholder-slate-400 focus:outline-none focus:border-blue-600 focus:ring-1 focus:ring-blue-600 transition-colors"
                            >
                            <!-- Password Toggle Eye Button -->
                            <button 
                                type="button" 
                                id="toggle-password-btn" 
                                class="absolute inset-y-0 right-0 pr-3.5 flex items-center text-slate-400 hover:text-slate-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-r-xl"
                                aria-label="Lihat atau sembunyikan password"
                            >
                                <svg id="eye-icon" class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <svg id="eye-off-icon" class="w-4 h-4 hidden" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
                                    <line x1="1" y1="1" x2="23" y2="23"></line>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Forgot Password Link (Right aligned) -->
                    <div class="flex justify-end pt-0.5">
                        <a href="#" class="text-xs font-semibold text-blue-600 hover:text-blue-700 hover:underline transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded">
                            Lupa password?
                        </a>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit" 
                        id="login-submit-btn" 
                        class="w-full py-3.5 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl text-xs sm:text-sm transition-all shadow-md shadow-blue-500/20 flex items-center justify-center gap-2 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600"
                    >
                        <span>Masuk</span>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>

                </form>

                <!-- Bottom Registration Redirect Link -->
                <div class="pt-2 text-center text-xs text-slate-500">
                    Belum punya akun? 
                    <a href="{{ route('register') }}" class="font-bold text-blue-600 hover:text-blue-700 hover:underline transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded ml-1 inline-flex items-center gap-1">
                        <span>Daftar di sini</span>
                        <span>&rarr;</span>
                    </a>
                </div>

            </div>

        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Password visibility toggle
        const toggleBtn = document.getElementById('toggle-password-btn');
        const passwordInput = document.getElementById('login-password');
        const eyeIcon = document.getElementById('eye-icon');
        const eyeOffIcon = document.getElementById('eye-off-icon');

        if (toggleBtn && passwordInput) {
            toggleBtn.addEventListener('click', function () {
                const isPassword = passwordInput.getAttribute('type') === 'password';
                if (isPassword) {
                    passwordInput.setAttribute('type', 'text');
                    eyeIcon.classList.add('hidden');
                    eyeOffIcon.classList.remove('hidden');
                } else {
                    passwordInput.setAttribute('type', 'password');
                    eyeIcon.classList.remove('hidden');
                    eyeOffIcon.classList.add('hidden');
                }
            });
        }

        // Form submit feedback
        const form = document.getElementById('login-form');
        const submitBtn = document.getElementById('login-submit-btn');

        if (form && submitBtn) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                submitBtn.disabled = true;
                submitBtn.innerHTML = `
                    <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path>
                    </svg>
                    <span>Memproses...</span>
                `;

                setTimeout(() => {
                    // Demo simulation: Redirect to student home portal
                    window.location.href = "{{ route('mahasiswa.dashboard') }}";
                }, 800);
            });
        }
    });
</script>
@endpush
