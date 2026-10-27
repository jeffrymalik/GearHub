<header class="sticky top-0 z-40 bg-white/95 backdrop-blur-md border-b border-slate-200/90 transition-all">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-20 flex items-center justify-between">
        <!-- Brand Logo -->
        <a href="{{ request()->is('mahasiswa*') ? route('mahasiswa.dashboard') : route('beranda') }}" class="flex items-center gap-3 group focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg py-1" aria-label="GearHub Perbanas Institute">
            <div class="w-10 h-10 rounded-xl bg-blue-600 flex items-center justify-center text-white shadow-md shadow-blue-500/20 group-hover:scale-105 transition-transform">
                <!-- Hexagon Gear SVG -->
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M12 2l7.5 4.33v8.66L12 22l-7.5-4.33V6.33L12 2z"/>
                    <circle cx="12" cy="12" r="3.2"/>
                    <path d="M12 6.5v2m0 7v2m4.76-7.24l-1.42 1.42m-4.94 4.94l-1.42 1.42m7.78 0l-1.42-1.42m-4.94-4.94l-1.42-1.42"/>
                </svg>
            </div>
            <div class="flex flex-col">
                <span class="text-xl font-extrabold tracking-tight text-slate-900 font-['Space_Grotesk'] leading-tight">
                    Gear<span class="text-blue-600">Hub</span>
                </span>
                <span class="text-[9px] uppercase tracking-widest font-bold text-slate-500">
                    PERBANAS INSTITUTE
                </span>
            </div>
        </a>

        @if(request()->is('mahasiswa*'))
            <!-- 1. STUDENT LOGGED IN NAVIGATION LINKS -->
            <nav class="hidden lg:flex items-center gap-7" aria-label="Menu Mahasiswa">
                <a href="{{ route('mahasiswa.dashboard') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('mahasiswa.dashboard') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Dashboard
                </a>
                <a href="{{ route('katalog') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('katalog*') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Katalog
                </a>
                <a href="{{ route('mahasiswa.pesanan') }}" 
                   class="text-sm transition-colors py-1 relative inline-flex items-center gap-1.5 {{ request()->routeIs('mahasiswa.pesanan') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    <span>Pesanan Saya</span>
                    <span class="px-1.5 py-0.5 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">2</span>
                </a>
                <a href="{{ route('mahasiswa.riwayat') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('mahasiswa.riwayat') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Riwayat Pemesanan
                </a>
                <a href="{{ route('mahasiswa.profil') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('mahasiswa.profil') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Profil
                </a>
            </nav>

            <!-- 2. STUDENT RIGHT ACTIONS: SEARCH, CART, PROFIL DROPDOWN -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Search Button -->
                <button id="open-search-modal-btn" type="button" class="p-2 text-slate-500 hover:text-blue-600 hover:bg-slate-100 rounded-lg transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600" aria-label="Buka Pencarian Alat">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

                <!-- Cart Button with Counter Badge -->
                <a href="{{ route('mahasiswa.keranjang') }}" class="p-2 text-slate-600 hover:text-blue-600 hover:bg-slate-100 rounded-xl transition-colors relative focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600" aria-label="Keranjang Sewa" title="Keranjang Sewa">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span class="absolute top-1 right-1 w-4 h-4 rounded-full bg-blue-600 text-white text-[10px] font-bold flex items-center justify-center shadow-xs">
                        1
                    </span>
                </a>

                <!-- Profil Dropdown Menu -->
                <div class="relative pl-2 border-l border-slate-200" id="user-menu-wrapper">
                    <button type="button" id="user-dropdown-toggle" class="flex items-center gap-2.5 p-1 rounded-xl hover:bg-slate-100 transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600" aria-expanded="false" aria-haspopup="true">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-blue-700 to-blue-500 text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                            DP
                        </div>
                        <div class="text-left hidden md:block leading-tight">
                            <span class="text-xs font-bold text-slate-900 block">Dimas Pratama</span>
                            <span class="text-[10px] text-slate-500 block">2112000123</span>
                        </div>
                        <svg class="w-3.5 h-3.5 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>

                    <!-- Dropdown Content -->
                    <div id="user-dropdown-card" class="hidden absolute right-0 mt-2 w-56 bg-white rounded-2xl shadow-xl border border-slate-100 py-2 z-50 animate-in fade-in zoom-in-95 duration-150">
                        <div class="px-4 py-2.5 border-b border-slate-100">
                            <span class="text-xs font-bold text-slate-900 block">Dimas Pratama</span>
                            <span class="text-[10px] text-slate-500 block truncate">dimas.pratama@perbanas.ac.id</span>
                            <span class="inline-block mt-1 px-2 py-0.5 rounded text-[9px] font-bold bg-emerald-50 text-emerald-700">
                                S1 Informatika (FTI)
                            </span>
                        </div>

                        <a href="{{ route('mahasiswa.profil') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                            <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>
                            <span>Profil Saya</span>
                        </a>

                        <a href="{{ route('mahasiswa.pesanan') }}" class="flex items-center justify-between px-4 py-2.5 text-xs text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                </svg>
                                <span>Pesanan Saya</span>
                            </div>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] font-bold bg-amber-100 text-amber-800">2</span>
                        </a>

                        <a href="{{ route('mahasiswa.keranjang') }}" class="flex items-center justify-between px-4 py-2.5 text-xs text-slate-700 hover:text-blue-600 hover:bg-slate-50 transition-colors">
                            <div class="flex items-center gap-2.5">
                                <svg class="w-4 h-4 text-slate-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                </svg>
                                <span>Keranjang Sewa</span>
                            </div>
                            <span class="px-1.5 py-0.2 rounded-full text-[10px] font-bold bg-blue-100 text-blue-700">1</span>
                        </a>

                        <div class="my-1.5 border-t border-slate-100"></div>

                        <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-2.5 px-4 py-2 text-xs font-semibold text-slate-700 hover:text-blue-600 hover:bg-blue-50/50 transition-colors">
                            <svg class="w-4 h-4 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            <span>Panel Admin</span>
                        </a>

                        <a href="{{ route('operator.dashboard') }}" class="flex items-center gap-2.5 px-4 py-2 text-xs font-semibold text-amber-700 hover:text-amber-800 hover:bg-amber-50 transition-colors">
                            <svg class="w-4 h-4 text-amber-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 2l7.5 4.33v8.66L12 22l-7.5-4.33V6.33L12 2z"/><circle cx="12" cy="12" r="3.2"/>
                            </svg>
                            <span>Panel Operator Loket</span>
                        </a>

                        <a href="{{ route('login') }}" class="flex items-center gap-2.5 px-4 py-2.5 text-xs font-semibold text-red-600 hover:bg-red-50 transition-colors">
                            <svg class="w-4 h-4 text-red-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            <span>Keluar (Logout)</span>
                        </a>
                    </div>
                </div>
            </div>

        @else
            <!-- 3. PUBLIC DESKTOP NAVIGATION LINKS -->
            <nav class="hidden lg:flex items-center gap-7" aria-label="Menu Utama">
                <a href="{{ route('beranda') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('beranda') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Beranda
                </a>
                <a href="{{ route('katalog') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('katalog*') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Katalog
                </a>
                <a href="{{ route('cara-menyewa') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('cara-menyewa') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Cara Menyewa
                </a>
                <a href="{{ route('kebijakan') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('kebijakan') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Kebijakan
                </a>
                <a href="{{ route('faq') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('faq') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    FAQ
                </a>
                <a href="{{ route('kontak') }}" 
                   class="text-sm transition-colors py-1 relative {{ request()->routeIs('kontak') ? 'text-blue-600 font-semibold after:content-[\'\'] after:absolute after:bottom-0 after:left-0 after:w-full after:h-0.5 after:bg-blue-600' : 'text-slate-600 hover:text-blue-600 font-medium' }}">
                    Kontak
                </a>
            </nav>

            <!-- 4. PUBLIC RIGHT ACTION ITEMS (LOGIN & REGISTER) -->
            <div class="hidden sm:flex items-center gap-3">
                <!-- Search Button -->
                <button id="open-search-modal-btn" type="button" class="p-2 text-slate-500 hover:text-blue-600 hover:bg-slate-100 rounded-lg transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600" aria-label="Buka Pencarian Alat">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

                <!-- Masuk Button (Ghost / Outline) -->
                <a href="{{ route('login') }}" class="px-4 py-2 border border-blue-600 text-blue-600 hover:bg-blue-50 font-semibold rounded-lg text-sm transition-colors focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    Masuk
                </a>

                <!-- Daftar Button (Solid Blue) -->
                <a href="{{ route('register') }}" class="px-5 py-2 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg text-sm transition-colors shadow-sm shadow-blue-500/20 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600">
                    Daftar
                </a>
            </div>
        @endif

        <!-- Mobile Menu Toggle Button -->
        <div class="flex items-center gap-2 lg:hidden">
            @if(request()->is('mahasiswa*'))
                <!-- Mobile Cart Shortcut -->
                <a href="{{ route('mahasiswa.keranjang') }}" class="p-2 text-slate-600 hover:text-blue-600 relative">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                    </svg>
                    <span class="absolute top-1 right-1 w-4 h-4 rounded-full bg-blue-600 text-white text-[10px] font-bold flex items-center justify-center">1</span>
                </a>
            @endif

            <button id="mobile-search-btn" class="p-2 text-slate-600 hover:text-blue-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-label="Cari Peralatan">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
            </button>
            <button id="mobile-menu-toggle" type="button" class="p-2 text-slate-700 hover:text-blue-600 focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-600 rounded-lg" aria-expanded="false" aria-controls="mobile-menu-drawer" aria-label="Toggle navigasi menu">
                <svg id="hamburger-open-icon" class="w-6 h-6 block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                <svg id="hamburger-close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>
        </div>
    </div>

    <!-- Mobile Drawer Menu -->
    <div id="mobile-menu-drawer" class="hidden lg:hidden bg-white border-b border-slate-200 px-6 py-5 space-y-3 shadow-lg">
        @if(request()->is('mahasiswa*'))
            <!-- Student Mobile Menu Items -->
            <div class="pb-3 border-b border-slate-100 flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-blue-600 text-white font-bold flex items-center justify-center text-xs">
                    DP
                </div>
                <div>
                    <span class="text-sm font-bold text-slate-900 block">Dimas Pratama</span>
                    <span class="text-xs text-slate-500 block">2112000123 &bull; S1 Informatika</span>
                </div>
            </div>

            <a href="{{ route('mahasiswa.dashboard') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('mahasiswa.dashboard') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Dashboard
            </a>
            <a href="{{ route('katalog') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('katalog*') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Katalog
            </a>
            <a href="{{ route('mahasiswa.pesanan') }}" class="flex items-center justify-between py-2 text-base font-semibold {{ request()->routeIs('mahasiswa.pesanan') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                <span>Pesanan Saya</span>
                <span class="px-2 py-0.5 rounded-full text-xs font-bold bg-amber-100 text-amber-800">2</span>
            </a>
            <a href="{{ route('mahasiswa.riwayat') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('mahasiswa.riwayat') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Riwayat Pemesanan
            </a>
            <a href="{{ route('mahasiswa.keranjang') }}" class="flex items-center justify-between py-2 text-base font-semibold {{ request()->routeIs('mahasiswa.keranjang') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                <span>Keranjang Sewa</span>
                <span class="px-2 py-0.5 rounded-full text-xs font-bold bg-blue-100 text-blue-700">1</span>
            </a>
            <a href="{{ route('mahasiswa.profil') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('mahasiswa.profil') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Profil Saya
            </a>

            <div class="pt-3 border-t border-slate-100 space-y-2">
                <a href="{{ route('admin.dashboard') }}" class="flex items-center justify-center gap-2 w-full py-2.5 bg-blue-50 text-blue-700 font-semibold rounded-lg text-sm hover:bg-blue-100 transition-colors">
                    <svg class="w-4 h-4 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                    </svg>
                    <span>Masuk Panel Admin Loket</span>
                </a>
                <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 w-full py-2.5 bg-red-50 text-red-600 font-semibold rounded-lg text-sm hover:bg-red-100 transition-colors">
                    <span>Keluar (Logout)</span>
                </a>
            </div>
        @else
            <!-- Public Mobile Menu Items -->
            <a href="{{ route('beranda') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('beranda') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Beranda
            </a>
            <a href="{{ route('katalog') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('katalog*') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Katalog
            </a>
            <a href="{{ route('cara-menyewa') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('cara-menyewa') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Cara Menyewa
            </a>
            <a href="{{ route('kebijakan') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('kebijakan') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Kebijakan
            </a>
            <a href="{{ route('faq') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('faq') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                FAQ
            </a>
            <a href="{{ route('kontak') }}" class="block text-base font-semibold py-2 {{ request()->routeIs('kontak') ? 'text-blue-600' : 'text-slate-700 hover:text-blue-600' }}">
                Kontak
            </a>

            <div class="pt-4 border-t border-slate-100 flex flex-col gap-2.5">
                <a href="{{ route('login') }}" class="text-center w-full py-2.5 border border-blue-600 text-blue-600 font-semibold rounded-lg text-sm">
                    Masuk
                </a>
                <a href="{{ route('register') }}" class="text-center w-full py-2.5 bg-blue-600 text-white font-semibold rounded-lg text-sm">
                    Daftar Akun Baru
                </a>
            </div>
        @endif
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Toggle User Dropdown in Navbar
        const toggleBtn = document.getElementById('user-dropdown-toggle');
        const dropdownCard = document.getElementById('user-dropdown-card');

        if (toggleBtn && dropdownCard) {
            toggleBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                const isHidden = dropdownCard.classList.contains('hidden');
                if (isHidden) {
                    dropdownCard.classList.remove('hidden');
                    toggleBtn.setAttribute('aria-expanded', 'true');
                } else {
                    dropdownCard.classList.add('hidden');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                }
            });

            // Close when clicking outside
            document.addEventListener('click', function (e) {
                if (!document.getElementById('user-menu-wrapper').contains(e.target)) {
                    dropdownCard.classList.add('hidden');
                    toggleBtn.setAttribute('aria-expanded', 'false');
                }
            });
        }
    });
</script>
