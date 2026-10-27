<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getInventory()
    {
        return [
            'canon-90d' => [
                'id' => 'canon-90d',
                'name' => 'Canon EOS 90D',
                'category' => 'Kamera & Fotografi',
                'category_slug' => 'kamera',
                'price' => 75000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/canon-90d.jpg',
                'featured' => true,
                'description' => 'Kamera DSLR dengan resolusi tinggi untuk dokumentasi kegiatan.',
                'specs' => [
                    'Sensor: 32.5MP APS-C CMOS Sensor',
                    'Autofokus: Dual Pixel CMOS AF 45 Cross-Type',
                    'Video: 4K 30p & Full HD 120p high-speed',
                    'Layar: 3.0" Vari-Angle Touchscreen LCD'
                ],
                'includes' => [
                    '1x Bodi Kamera Canon EOS 90D',
                    '1x Lensa Canon EF-S 18-135mm IS USM',
                    '2x Baterai Original Canon LP-E6N',
                    '1x Dual Fast Charger',
                    '1x SanDisk Extreme Pro 64GB',
                    '1x Tas Kamera Padded'
                ]
            ],
            'thinkpad-t14' => [
                'id' => 'thinkpad-t14',
                'name' => 'Lenovo ThinkPad T14',
                'category' => 'Komputer & IT',
                'category_slug' => 'komputer',
                'price' => 90000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/thinkpad-t14.jpg',
                'featured' => true,
                'description' => 'Laptop untuk kebutuhan presentasi dan pekerjaan.',
                'specs' => [
                    'Prosesor: Intel Core i7 11th Gen Turbo 4.7GHz',
                    'Memori: 16GB DDR4 RAM Dual Channel',
                    'Penyimpanan: 512GB M.2 NVMe PCIe SSD',
                    'Layar: 14.0" Full HD IPS Anti-Glare'
                ],
                'includes' => [
                    '1x Unit Laptop Lenovo ThinkPad T14',
                    '1x Adaptor Fast Charger 65W Type-C',
                    '1x Mouse Wireless Logitech',
                    '1x Tas Laptop Padded'
                ]
            ],
            'epson-e500' => [
                'id' => 'epson-e500',
                'name' => 'Epson EB-E500',
                'category' => 'Multimedia & Presentasi',
                'category_slug' => 'multimedia',
                'price' => 50000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/epson-e500.jpg',
                'featured' => true,
                'description' => 'Proyektor untuk presentasi dan pemutaran video.',
                'specs' => [
                    'Kecerahan: 3300 ANSI Lumens',
                    'Resolusi: XGA (1024 x 768) native',
                    'Teknologi: 3LCD 3-Chip System',
                    'Rasio Kontras: 15.000:1'
                ],
                'includes' => [
                    '1x Unit Proyektor Epson EB-E500',
                    '1x Kabel Power AC 5 Meter',
                    '1x Kabel HDMI 10 Meter',
                    '1x Remote Control Wireless',
                    '1x Tas Jinjing Proyektor'
                ]
            ],
            'yamaha-dbr10' => [
                'id' => 'yamaha-dbr10',
                'name' => 'Yamaha DBR10 + Mixer',
                'category' => 'Audio & Sound System',
                'category_slug' => 'audio',
                'price' => 80000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/yamaha-dbr10.svg',
                'featured' => true,
                'description' => 'Speaker aktif dengan kualitas suara jernih.',
                'specs' => [
                    'Output Power: 700W Dynamic Class-D',
                    'Driver: 10" Cone Woofer + 1" Voice Coil',
                    'Mixer: Console 4-Channel dengan input Bluetooth & XLR',
                    'Coverage: Sangat ideal untuk aula dan seminar indoor'
                ],
                'includes' => [
                    '2x Speaker Aktif Yamaha DBR10',
                    '1x Mini Audio Mixer Console',
                    '2x Stand Tripod Besi',
                    'Kabel Power & Audio Komplit'
                ]
            ],
            'sony-a6400' => [
                'id' => 'sony-a6400',
                'name' => 'Sony A6400',
                'category' => 'Kamera & Fotografi',
                'category_slug' => 'kamera',
                'price' => 80000,
                'status' => 'Sedang Disewa',
                'status_type' => 'rented',
                'image' => '/images/sony-a6400.svg',
                'featured' => false,
                'description' => 'Mirrorless camera untuk foto dan video berkualitas tinggi.',
                'specs' => [
                    'Sensor: 24.2MP APS-C Exmor CMOS',
                    'Autofokus: Real-Time Eye AF & Real-Time Tracking',
                    'Video: 4K HDR 30p no pixel binning',
                    'Layar: 180° Tiltable Touch LCD (Selfie / Vlogging)'
                ],
                'includes' => [
                    '1x Bodi Sony Alpha 6400',
                    '1x Lensa Sony 16-50mm f/3.5-5.6 OSS',
                    '2x Baterai NP-FW50',
                    '1x SD Card SanDisk 64GB V30',
                    '1x Tas Kamera'
                ]
            ],
            'tripod-manfrotto' => [
                'id' => 'tripod-manfrotto',
                'name' => 'Tripod Manfrotto',
                'category' => 'Kamera & Fotografi',
                'category_slug' => 'kamera',
                'price' => 25000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/tripod-manfrotto.svg',
                'featured' => false,
                'description' => 'Tripod profesional dan stabil untuk berbagai kebutuhan.',
                'specs' => [
                    'Bahan: Aluminium Alloy kokoh & ringan',
                    'Head: Fluid Video Pan Head 2-Way halus',
                    'Maksimal Beban: Hingga 5 kg',
                    'Tinggi Maksimal: 165 cm'
                ],
                'includes' => [
                    '1x Tripod Manfrotto Heavy Duty',
                    '1x Quick Release Plate',
                    '1x Pan Handle Grip',
                    '1x Tas Jinjing Tripod'
                ]
            ],
            'rode-wireless' => [
                'id' => 'rode-wireless',
                'name' => 'RODE Wireless Go II',
                'category' => 'Audio & Sound System',
                'category_slug' => 'audio',
                'price' => 40000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/rode-wireless.svg',
                'featured' => false,
                'description' => 'Microphone wireless untuk wawancara dan konten video.',
                'specs' => [
                    'Sistem: Dual Channel Wireless Microphone (2 TX + 1 RX)',
                    'Jangkauan: Hingga 200 meter transmisi 2.4GHz',
                    'Onboard Recording: Lebih dari 40 jam memori internal',
                    'Baterai: Baterai lithium-ion internal hingga 7 jam'
                ],
                'includes' => [
                    '2x Transmitter Clip-on RODE',
                    '1x Receiver RODE',
                    '3x Kabel SC5 3.5mm TRS & USB-C',
                    '2x Furry Windshield Bulu',
                    '1x Pouch Case'
                ]
            ],
            'tenda-lipat-3x3' => [
                'id' => 'tenda-lipat-3x3',
                'name' => 'Tenda Lipat 3x3 m',
                'category' => 'Event & Kegiatan',
                'category_slug' => 'event',
                'price' => 100000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/tent-canopy.jpg',
                'featured' => false,
                'description' => 'Tenda untuk kegiatan outdoor dan acara kampus.',
                'specs' => [
                    'Ukuran: 3 x 3 Meter',
                    'Rangka: Besi hollow powder-coated tahan cuaca',
                    'Bahan Atap: Parasut Oxford D600 waterproof & anti-UV',
                    'Sistem: Buka tutup cepat dalam 2 menit'
                ],
                'includes' => [
                    '1x Rangka Tenda Lipat 3x3',
                    '1x Kain Terpal Atap Tahan Air',
                    '4x Pasak Tanah & Tali Pengikat',
                    '1x Cover Tas Rangka'
                ]
            ],
            'lighting-set' => [
                'id' => 'lighting-set',
                'name' => 'Lighting Set',
                'category' => 'Event & Kegiatan',
                'category_slug' => 'event',
                'price' => 60000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/lighting-set.svg',
                'featured' => false,
                'description' => 'Paket lampu LED untuk fotografi dan videografi.',
                'specs' => [
                    'Tipe: Dual Bi-Color LED Panel Lights',
                    'Temperatur Warna: 3200K - 5600K stepless dimmer',
                    'CRI: 96+ untuk akurasi warna natural',
                    'Stand: 2x Light Stand Aluminium tinggi 2 meter'
                ],
                'includes' => [
                    '2x LED Panel Light + Barn Doors',
                    '2x Light Stand Kokoh 2M',
                    '2x Power Adaptor AC & Kabel Panjang',
                    '1x Tas Padded Jinjing'
                ]
            ],
            'tv-55' => [
                'id' => 'tv-55',
                'name' => 'LED TV 55 inch',
                'category' => 'Multimedia & Presentasi',
                'category_slug' => 'multimedia',
                'price' => 150000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/tv-55.svg',
                'featured' => false,
                'description' => 'Layar besar untuk presentasi unit acara.',
                'specs' => [
                    'Ukuran Layar: 55 Inch Ultra HD 4K',
                    'Panel: IPS Widescreen 178° viewing angle',
                    'Input Port: 3x HDMI, 2x USB, LAN, Audio Out',
                    'Fitur: Wireless Screen Mirroring dari laptop/smartphone'
                ],
                'includes' => [
                    '1x Unit LED TV 55" 4K',
                    '1x Desktop Base Stand / Standing Bracket',
                    '1x Kabel HDMI 5M & Kabel Power 5M',
                    '1x Remote Control Smart TV'
                ]
            ],
            'printer-a3' => [
                'id' => 'printer-a3',
                'name' => 'Printer A3',
                'category' => 'Lainnya',
                'category_slug' => 'lainnya',
                'price' => 30000,
                'status' => 'Dalam Perawatan',
                'status_type' => 'maintenance',
                'image' => '/images/printer-a3.svg',
                'featured' => false,
                'description' => 'Printer untuk kebutuhan administrasi kegiatan.',
                'specs' => [
                    'Format Kertas: Hingga A3+ borderless',
                    'Fungsi: Print, Scan, Copy (All-in-One)',
                    'Koneksi: USB & Wi-Fi Direct',
                    'Tinta: EcoTank kapasitas cetak tinggi'
                ],
                'includes' => [
                    '1x Unit Printer Multifungsi A3',
                    '1x Kabel USB Data Printer',
                    '1x Kabel Power AC',
                    'Kondisi Tinta Full Siap Cetak'
                ]
            ],
            'doc-camera' => [
                'id' => 'doc-camera',
                'name' => 'Document Camera',
                'category' => 'Multimedia & Presentasi',
                'category_slug' => 'multimedia',
                'price' => 50000,
                'status' => 'Tersedia',
                'status_type' => 'available',
                'image' => '/images/doc-camera.svg',
                'featured' => false,
                'description' => 'Kamera dokumen untuk presentasi dan pembelajaran.',
                'specs' => [
                    'Sensor: 8MP Ultra High Definition',
                    'Pencahayaan: Built-in LED Multi-Level Illumination',
                    'Struktur: Multi-Joint Articulated Arm fleksibel',
                    'Koneksi: Plug-and-play USB ke PC / HDMI ke Proyektor'
                ],
                'includes' => [
                    '1x Unit Document Visualizer Camera',
                    '1x Kabel USB Type-A to Type-B',
                    '1x Kabel HDMI 3 Meter',
                    '1x Anti-Glare Scanning Sheet Pad'
                ]
            ]
        ];
    }

    private function getSidebarCategories()
    {
        return [
            ['name' => 'Semua Kategori', 'slug' => 'all', 'count' => 86, 'icon' => 'all'],
            ['name' => 'Kamera & Fotografi', 'slug' => 'kamera', 'count' => 12, 'icon' => 'camera'],
            ['name' => 'Audio & Sound System', 'slug' => 'audio', 'count' => 10, 'icon' => 'audio'],
            ['name' => 'Multimedia & Presentasi', 'slug' => 'multimedia', 'count' => 15, 'icon' => 'multimedia'],
            ['name' => 'Komputer & IT', 'slug' => 'komputer', 'count' => 8, 'icon' => 'komputer'],
            ['name' => 'Event & Kegiatan', 'slug' => 'event', 'count' => 20, 'icon' => 'event'],
            ['name' => 'Lainnya', 'slug' => 'lainnya', 'count' => 11, 'icon' => 'lainnya'],
        ];
    }

    private function getCategories()
    {
        return [
            [
                'name' => 'Kamera & Foto-Fotografi',
                'slug' => 'kamera',
                'count' => '12+ peralatan',
                'image' => '/images/canon-90d.jpg'
            ],
            [
                'name' => 'Audio & Sound System',
                'slug' => 'audio',
                'count' => '10+ peralatan',
                'image' => '/images/yamaha-dbr10.svg'
            ],
            [
                'name' => 'Multimedia & Presentasi',
                'slug' => 'multimedia',
                'count' => '15+ peralatan',
                'image' => '/images/epson-e500.jpg'
            ],
            [
                'name' => 'Komputer & IT',
                'slug' => 'komputer',
                'count' => '8+ peralatan',
                'image' => '/images/thinkpad-t14.jpg'
            ],
            [
                'name' => 'Event & Kegiatan',
                'slug' => 'event',
                'count' => '20+ peralatan',
                'image' => '/images/tent-canopy.jpg'
            ],
            [
                'name' => 'Lainnya',
                'slug' => 'lainnya',
                'count' => '11+ peralatan',
                'image' => '/images/toolbox.svg'
            ],
        ];
    }

    public function beranda()
    {
        $allInventory = $this->getInventory();
        // Featured 4 items matching mockup
        $featuredKeys = ['canon-90d', 'epson-e500', 'yamaha-dbr10', 'thinkpad-t14'];
        $featured = array_intersect_key($allInventory, array_flip($featuredKeys));
        $categories = $this->getCategories();

        return view('pages.beranda', [
            'featured' => $featured,
            'categories' => $categories,
            'inventory' => $allInventory
        ]);
    }

    public function katalog(Request $request)
    {
        $allInventory = $this->getInventory();
        $category = $request->query('kategori', 'all');
        $search = $request->query('cari');
        $statusFilter = $request->query('status'); // 'available', 'rented', 'maintenance'
        $maxPrice = $request->query('max_price');
        $sort = $request->query('sort', 'terbaru');

        $filtered = $allInventory;

        // Filter by category
        if ($category && $category !== 'all') {
            $filtered = array_filter($filtered, fn($item) => $item['category_slug'] === $category);
        }

        // Filter by search query
        if ($search) {
            $s = strtolower(trim($search));
            $filtered = array_filter($filtered, function ($item) use ($s) {
                return str_contains(strtolower($item['name']), $s) ||
                       str_contains(strtolower($item['category']), $s) ||
                       str_contains(strtolower($item['description']), $s);
            });
        }

        // Filter by status if selected
        if ($statusFilter && $statusFilter !== 'all') {
            $filtered = array_filter($filtered, fn($item) => $item['status_type'] === $statusFilter);
        }

        // Filter by price
        if ($maxPrice && is_numeric($maxPrice)) {
            $filtered = array_filter($filtered, fn($item) => $item['price'] <= (int)$maxPrice);
        }

        // Sort items
        if ($sort === 'termurah') {
            uasort($filtered, fn($a, $b) => $a['price'] <=> $b['price']);
        } elseif ($sort === 'termahal') {
            uasort($filtered, fn($a, $b) => $b['price'] <=> $a['price']);
        } elseif ($sort === 'a-z') {
            uasort($filtered, fn($a, $b) => strcmp($a['name'], $b['name']));
        }

        return view('pages.katalog', [
            'inventory' => $filtered,
            'allInventory' => $allInventory,
            'sidebarCategories' => $this->getSidebarCategories(),
            'currentCategory' => $category,
            'searchQuery' => $search,
            'currentStatus' => $statusFilter,
            'currentSort' => $sort,
            'totalCount' => count($allInventory),
            'displayedCount' => count($filtered)
        ]);
    }

    public function katalogDetail($id)
    {
        $allInventory = $this->getInventory();

        if (!isset($allInventory[$id])) {
            abort(404, 'Peralatan tidak ditemukan.');
        }

        $item = $allInventory[$id];
        $related = array_filter($allInventory, fn($g) => $g['id'] !== $id);

        return view('pages.detail', [
            'item' => $item,
            'related' => array_slice($related, 0, 3)
        ]);
    }

    public function caraMenyewa()
    {
        return view('pages.cara-menyewa');
    }

    public function kebijakan()
    {
        return view('pages.kebijakan');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function kontak()
    {
        return view('pages.kontak');
    }

    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function mahasiswaDashboard()
    {
        $student = [
            'name' => 'Dimas Pratama',
            'nim' => '2112000123',
            'prodi' => 'S1 Informatika',
            'fakultas' => 'Fakultas Teknologi Informasi',
            'status' => 'Terverifikasi Aktif',
            'email' => 'dimas.pratama@perbanas.ac.id',
            'phone' => '0812-3456-7890',
            'avatar' => null, // initials avatar
        ];

        // Active rentals currently held by student
        $activeRentals = [
            [
                'id' => 'canon-90d',
                'name' => 'Canon EOS 90D + Lensa 18-135mm USM',
                'booking_code' => 'GH-2610-001',
                'category' => 'Kamera & Fotografi',
                'image' => '/images/canon-90d.jpg',
                'start_date' => '26 Okt 2026, 15:30 WIB',
                'due_date' => 'Hari ini (27 Okt 2026), 17:00 WIB',
                'remaining_hours' => '2 Jam 30 Menit Tersisa',
                'is_urgent' => true,
                'location' => 'Unit Sarana dan Prasarana (Gedung Unit VI Lantai 1)',
                'fee' => 75000,
                'status' => 'Sedang Dipinjam',
                'status_badge' => 'active',
            ]
        ];

        // Bookings waiting for payment
        $pendingPayments = [
            [
                'id' => 'epson-e500',
                'name' => 'Epson EB-E500 Projector 3300 Lumens',
                'booking_code' => 'GH-2710-089',
                'category' => 'Multimedia & Presentasi',
                'image' => '/images/epson-e500.jpg',
                'rental_period' => '29 Okt 2026 (08:00 - 17:00 WIB)',
                'amount' => 50000,
                'expires_in' => '01:45:10',
                'payment_methods' => ['QRIS', 'Virtual Account'],
                'status' => 'Menunggu Pembayaran',
                'status_badge' => 'warning',
            ]
        ];

        // Approved bookings ready for pickup
        $readyPickups = [
            [
                'id' => 'rode-wireless',
                'name' => 'RODE Wireless Go II Dual Channel',
                'booking_code' => 'GH-2810-044',
                'category' => 'Audio & Sound System',
                'image' => '/images/rode-wireless.svg',
                'pickup_date' => 'Besok, 28 Okt 2026 (09:00 WIB)',
                'location' => 'Loket Unit VI Lantai 1',
                'payment_status' => 'Lunas (QRIS)',
                'status' => 'Siap Diambil di Loket',
                'status_badge' => 'info',
            ]
        ];

        // Past rental history
        $recentHistory = [
            [
                'id' => 'thinkpad-t14',
                'name' => 'Lenovo ThinkPad T14 Gen 2',
                'booking_code' => 'GH-1810-022',
                'image' => '/images/thinkpad-t14.jpg',
                'date' => '18 Okt - 20 Okt 2026',
                'fee' => 180000,
                'status' => 'Selesai & Dikembalikan',
                'status_badge' => 'success',
                'return_note' => 'Kondisi lengkap dan baik, tidak ada denda.',
            ]
        ];

        // Recommendations from inventory
        $allInventory = $this->getInventory();
        $recommended = [
            $allInventory['yamaha-dbr10'],
            $allInventory['tv-55'],
            $allInventory['tent-canopy'] ?? $allInventory['lighting-set'],
        ];

        return view('pages.mahasiswa.dashboard', [
            'student' => $student,
            'activeRentals' => $activeRentals,
            'pendingPayments' => $pendingPayments,
            'readyPickups' => $readyPickups,
            'recentHistory' => $recentHistory,
            'recommended' => $recommended,
        ]);
    }

    public function mahasiswaPesanan()
    {
        $student = [
            'name' => 'Dimas Pratama',
            'nim' => '2112000123',
            'prodi' => 'S1 Informatika',
            'fakultas' => 'Fakultas Teknologi Informasi',
            'status' => 'Terverifikasi Aktif',
            'email' => 'dimas.pratama@perbanas.ac.id',
            'phone' => '0812-3456-7890',
        ];

        return view('pages.mahasiswa.pesanan', [
            'student' => $student,
        ]);
    }

    public function mahasiswaRiwayat()
    {
        $student = [
            'name' => 'Dimas Pratama',
            'nim' => '2112000123',
            'prodi' => 'S1 Informatika',
            'fakultas' => 'Fakultas Teknologi Informasi',
            'status' => 'Terverifikasi Aktif',
            'email' => 'dimas.pratama@perbanas.ac.id',
            'phone' => '0812-3456-7890',
        ];

        $historyOrders = [
            [
                'id' => 'GH-2026-1018',
                'item_name' => 'Lenovo ThinkPad T14 Gen 2',
                'category' => 'Komputer & IT',
                'image' => '/images/thinkpad-t14.jpg',
                'rent_period' => '18 Okt 2026 - 20 Okt 2026',
                'duration' => '2 Hari',
                'return_date' => '20 Okt 2026, 16:30 WIB',
                'location' => 'Loket Sarpras, Gedung Unit VI Lantai 1',
                'total_fee' => 180000,
                'status' => 'Selesai',
                'condition' => 'Sangat Baik',
                'notes' => 'Unit lengkap beserta charger 65W dan tas. Dikembalikan tepat waktu tanpa denda.',
                'invoice_no' => 'INV/20261020/GH/0421',
            ],
            [
                'id' => 'GH-2026-0925',
                'item_name' => 'Epson EB-E500 3300 Lumens',
                'category' => 'Multimedia & Proyektor',
                'image' => '/images/epson-e500.jpg',
                'rent_period' => '25 Sep 2026 - 26 Sep 2026',
                'duration' => '1 Hari',
                'return_date' => '26 Sep 2026, 15:45 WIB',
                'location' => 'Loket Sarpras, Gedung Unit VI Lantai 1',
                'total_fee' => 50000,
                'status' => 'Selesai',
                'condition' => 'Baik & Bersih',
                'notes' => 'Kabel HDMI 10m, kabel power, remote wireless dan tas jinjing lengkap.',
                'invoice_no' => 'INV/20260926/GH/0388',
            ],
            [
                'id' => 'GH-2026-0910',
                'item_name' => 'Sony Alpha 6400 Mirrorless + Lens',
                'category' => 'Kamera & Fotografi',
                'image' => '/images/sony-a6400.svg',
                'rent_period' => '10 Sep 2026 - 12 Sep 2026',
                'duration' => '2 Hari',
                'return_date' => '12 Sep 2026, 14:10 WIB',
                'location' => 'Loket Sarpras, Gedung Unit VI Lantai 1',
                'total_fee' => 160000,
                'status' => 'Selesai',
                'condition' => 'Baik',
                'notes' => 'Sensor bersih, 2 unit baterai NP-FW50 dan memory card 64GB kembali utuh.',
                'invoice_no' => 'INV/20260912/GH/0312',
            ],
            [
                'id' => 'GH-2026-0814',
                'item_name' => 'Yamaha DBR10 + Mixer 4-Ch',
                'category' => 'Audio & Sound System',
                'image' => '/images/yamaha-dbr10.svg',
                'rent_period' => '14 Agu 2026 - 15 Agu 2026',
                'duration' => '1 Hari',
                'return_date' => '15 Agu 2026, 17:00 WIB',
                'location' => 'Loket Sarpras, Gedung Unit VI Lantai 1',
                'total_fee' => 80000,
                'status' => 'Selesai',
                'condition' => 'Baik',
                'notes' => 'Speaker dan tripod besi kembali lengkap untuk kegiatan Himpunan.',
                'invoice_no' => 'INV/20260815/GH/0255',
            ],
            [
                'id' => 'GH-2026-0720',
                'item_name' => 'Tripod Manfrotto Heavy Duty',
                'category' => 'Kamera & Aksesori',
                'image' => '/images/tripod-manfrotto.svg',
                'rent_period' => '20 Jul 2026',
                'duration' => '1 Hari',
                'return_date' => '-',
                'location' => 'Gedung Unit VI Lantai 1',
                'total_fee' => 0,
                'status' => 'Dibatalkan',
                'condition' => '-',
                'notes' => 'Dibatalkan pemesan sebelum pengambilan barang. Jadwal kegiatan diundur oleh prodi.',
                'invoice_no' => '-',
            ]
        ];

        return view('pages.mahasiswa.riwayat', [
            'student' => $student,
            'historyOrders' => $historyOrders,
        ]);
    }

    public function mahasiswaProfil()
    {
        $student = [
            'name' => 'Dimas Pratama',
            'nim' => '2112000123',
            'prodi' => 'S1 Informatika',
            'fakultas' => 'Fakultas Teknologi Informasi',
            'status' => 'Terverifikasi Aktif',
            'email' => 'dimas.pratama@perbanas.ac.id',
            'phone' => '0812-3456-7890',
            'alamat' => 'Jl. Karet Pedurenan No. 45, Setiabudi, Jakarta Selatan',
            'gender' => 'Laki-laki',
            'tgl_lahir' => '2003-08-15',
            'angkatan' => '2021',
        ];

        return view('pages.mahasiswa.profil', [
            'student' => $student,
        ]);
    }

    public function mahasiswaKeranjang()
    {
        $allInventory = $this->getInventory();
        $cartItems = [
            [
                'item' => $allInventory['tripod-manfrotto'],
                'days' => 1,
                'start_date' => '2026-10-30',
                'end_date' => '2026-10-31',
                'subtotal' => 25000,
            ]
        ];

        return view('pages.mahasiswa.keranjang', [
            'cartItems' => $cartItems,
            'total' => 25000,
        ]);
    }

    public function adminDashboard()
    {
        $adminStaff = [
            'name' => 'Admin GearHub',
            'role' => 'Administrator',
            'unit' => 'Perbanas Institute',
        ];

        $kpis = [
            'total_produk' => [
                'val' => '124',
                'change' => '+5%',
                'trend' => 'up',
            ],
            'pemesanan_aktif' => [
                'val' => '18',
                'change' => '+12%',
                'trend' => 'up',
            ],
            'mahasiswa_terdaftar' => [
                'val' => '342',
                'change' => '+8%',
                'trend' => 'up',
            ],
            'total_denda' => [
                'val' => 'Rp 1.250.000',
                'change' => '-3%',
                'trend' => 'down',
            ]
        ];

        $chartTrend = [
            ['date' => '23 Okt', 'orders' => 4, 'revenue' => 2.8],
            ['date' => '24 Okt', 'orders' => 8, 'revenue' => 5.0],
            ['date' => '25 Okt', 'orders' => 10, 'revenue' => 4.2],
            ['date' => '26 Okt', 'orders' => 10, 'revenue' => 5.8],
            ['date' => '27 Okt', 'orders' => 15, 'revenue' => 7.2],
            ['date' => '28 Okt', 'orders' => 13, 'revenue' => 6.8],
            ['date' => '29 Okt', 'orders' => 14, 'revenue' => 7.5],
        ];

        $categories = [
            ['name' => 'Kamera & Fotografi', 'pct' => 28, 'color' => '#4318FF'],
            ['name' => 'Audio & Sound System', 'pct' => 22, 'color' => '#EF4444'],
            ['name' => 'Multimedia & IT', 'pct' => 18, 'color' => '#0284C7'],
            ['name' => 'Komputer & Laptop', 'pct' => 13, 'color' => '#10B981'],
            ['name' => 'Perlengkapan Acara', 'pct' => 11, 'color' => '#F59E0B'],
            ['name' => 'Lainnya', 'pct' => 8, 'color' => '#94A3B8'],
        ];

        $recentOrders = [
            [
                'no' => 1,
                'student' => 'Andi Pratama',
                'avatar' => 'AP',
                'item' => 'Kamera Sony A6400',
                'borrow_date' => '29 Okt 2025',
                'return_date' => '31 Okt 2025',
                'status' => 'Menunggu',
                'status_type' => 'warning',
            ],
            [
                'no' => 2,
                'student' => 'Siti Nurhaliza',
                'avatar' => 'SN',
                'item' => 'Speaker JBL PartyBox',
                'borrow_date' => '28 Okt 2025',
                'return_date' => '30 Okt 2025',
                'status' => 'Disetujui',
                'status_type' => 'success',
            ],
            [
                'no' => 3,
                'student' => 'Budi Santoso',
                'avatar' => 'BS',
                'item' => 'Laptop ASUS ROG',
                'borrow_date' => '27 Okt 2025',
                'return_date' => '29 Okt 2025',
                'status' => 'Diproses',
                'status_type' => 'info',
            ],
            [
                'no' => 4,
                'student' => 'Dewi Lestari',
                'avatar' => 'DL',
                'item' => 'Mic Wireless Saramonic',
                'borrow_date' => '27 Okt 2025',
                'return_date' => '28 Okt 2025',
                'status' => 'Disetujui',
                'status_type' => 'success',
            ],
            [
                'no' => 5,
                'student' => 'Rizky Maulana',
                'avatar' => 'RM',
                'item' => 'Proyektor Epson',
                'borrow_date' => '26 Okt 2025',
                'return_date' => '29 Okt 2025',
                'status' => 'Selesai',
                'status_type' => 'secondary',
            ]
        ];

        $adminTasks = [
            [
                'title' => 'Verifikasi Mahasiswa',
                'desc' => 'Periksa pendaftaran mahasiswa baru',
                'count' => 5,
                'color' => 'blue',
                'badge_color' => 'text-rose-500 bg-rose-50',
            ],
            [
                'title' => 'Pemesanan',
                'desc' => 'Konfirmasi pemesanan yang masuk',
                'count' => 7,
                'color' => 'orange',
                'badge_color' => 'text-orange-500 bg-orange-50',
            ],
            [
                'title' => 'Pengembalian',
                'desc' => 'Barang yang perlu dikonfirmasi pengembaliannya',
                'count' => 3,
                'color' => 'sky',
                'badge_color' => 'text-sky-500 bg-sky-50',
            ],
            [
                'title' => 'Denda',
                'desc' => 'Denda yang belum diverifikasi',
                'count' => 2,
                'color' => 'purple',
                'badge_color' => 'text-purple-500 bg-purple-50',
            ],
        ];

        $lowStock = [
            ['name' => 'DJI Osmo Mobile 6', 'category' => 'Multimedia & IT', 'stock' => 2, 'image' => '/images/placeholder.svg'],
            ['name' => 'Sony FE 50mm f/1.8', 'category' => 'Kamera & Fotografi', 'stock' => 1, 'image' => '/images/placeholder.svg'],
            ['name' => 'Mixer Audio Yamaha', 'category' => 'Audio & Sound System', 'stock' => 1, 'image' => '/images/yamaha-dbr10.svg'],
            ['name' => 'Proyektor Epson', 'category' => 'Multimedia & IT', 'stock' => 3, 'image' => '/images/epson-e500.jpg'],
            ['name' => 'Laptop ASUS ROG', 'category' => 'Komputer & Laptop', 'stock' => 4, 'image' => '/images/thinkpad-t14.jpg'],
        ];

        $recentActivities = [
            [
                'title' => 'Mahasiswa baru diverifikasi',
                'meta' => 'A/N 248, 29 Okt 2025 09:45',
                'color' => 'emerald',
            ],
            [
                'title' => 'Pemesanan kamera disetujui',
                'meta' => 'Andi Pratama, 29 Okt 2025 08:32',
                'color' => 'blue',
            ],
            [
                'title' => 'Denda dibayarkan',
                'meta' => 'Denda keterlambatan - Rp 150.000, 28 Okt 2025 16:20',
                'color' => 'amber',
            ],
            [
                'title' => 'Produk baru ditambahkan',
                'meta' => 'DJI Osmo Mobile 6, 28 Okt 2025 14:05',
                'color' => 'purple',
            ],
        ];

        return view('pages.admin.dashboard', [
            'adminStaff' => $adminStaff,
            'kpis' => $kpis,
            'chartTrend' => $chartTrend,
            'categories' => $categories,
            'recentOrders' => $recentOrders,
            'adminTasks' => $adminTasks,
            'lowStock' => $lowStock,
            'recentActivities' => $recentActivities,
        ]);
    }

    public function operatorDashboard()
    {
        $operatorStaff = [
            'name' => 'Hendra Saputra',
            'nip' => '20180455',
            'role' => 'Petugas Loket Meja 1',
            'unit' => 'Biro Sarana & Prasarana',
            'location' => 'Gedung Unit VI Lantai 1',
            'shift' => 'Shift Pagi (08:30 - 17:00 WIB)',
        ];

        $kpis = [
            'antrean_ambil' => [
                'val' => '5',
                'change' => '+12%',
                'trend' => 'up',
            ],
            'tenggat_kembali' => [
                'val' => '3',
                'change' => '17:00 WIB',
                'trend' => 'neutral',
            ],
            'ktm_ditahan' => [
                'val' => '14',
                'change' => '+2 kartu',
                'trend' => 'up',
            ],
            'kas_meja' => [
                'val' => 'Rp 150.000',
                'change' => 'Siap setor',
                'trend' => 'up',
            ]
        ];

        $chartTrend = [
            ['date' => '23 Okt', 'orders' => 4, 'returns' => 3],
            ['date' => '24 Okt', 'orders' => 8, 'returns' => 7],
            ['date' => '25 Okt', 'orders' => 10, 'returns' => 9],
            ['date' => '26 Okt', 'orders' => 10, 'returns' => 8],
            ['date' => '27 Okt', 'orders' => 15, 'returns' => 14],
            ['date' => '28 Okt', 'orders' => 13, 'returns' => 12],
            ['date' => '29 Okt', 'orders' => 14, 'returns' => 13],
        ];

        $categories = [
            ['name' => 'Siap di Meja Loket', 'pct' => 45, 'color' => '#2563EB'],
            ['name' => 'Sedang Dipinjam Mhs', 'pct' => 30, 'color' => '#10B981'],
            ['name' => 'Menunggu Cek Fisik', 'pct' => 15, 'color' => '#F59E0B'],
            ['name' => 'Maintenance Loket', 'pct' => 10, 'color' => '#EF4444'],
        ];

        $recentOrders = [
            [
                'no' => 1,
                'student' => 'Andi Pratama',
                'avatar' => 'AP',
                'item' => 'Kamera Sony A6400',
                'service_type' => 'Ambil Alat',
                'date' => 'Hari Ini, 10:00 WIB',
                'status' => 'Menunggu Datang',
                'status_type' => 'warning',
                'drawer' => 'Laci A-02',
            ],
            [
                'no' => 2,
                'student' => 'Siti Nurhaliza',
                'avatar' => 'SN',
                'item' => 'Speaker JBL PartyBox',
                'service_type' => 'Ambil Alat',
                'date' => 'Hari Ini, 11:30 WIB',
                'status' => 'Siap Diserahkan',
                'status_type' => 'success',
                'drawer' => 'Laci B-01',
            ],
            [
                'no' => 3,
                'student' => 'Budi Santoso',
                'avatar' => 'BS',
                'item' => 'Laptop ASUS ROG',
                'service_type' => 'Ambil Alat',
                'date' => 'Hari Ini, 13:00 WIB',
                'status' => 'Diproses',
                'status_type' => 'info',
                'drawer' => 'Laci A-05',
            ],
            [
                'no' => 4,
                'student' => 'Dewi Lestari',
                'avatar' => 'DL',
                'item' => 'Mic Wireless Saramonic',
                'service_type' => 'Kembali Alat',
                'date' => 'Hari Ini, 15:30 WIB',
                'status' => 'Siap Diserahkan',
                'status_type' => 'success',
                'drawer' => 'Laci C-01',
            ],
            [
                'no' => 5,
                'student' => 'Rizky Maulana',
                'avatar' => 'RM',
                'item' => 'Proyektor Epson',
                'service_type' => 'Kembali Alat',
                'date' => 'Hari Ini, 16:45 WIB',
                'status' => 'Selesai & BAST',
                'status_type' => 'secondary',
                'drawer' => 'KTM Diserahkan',
            ]
        ];

        $operatorTasks = [
            [
                'title' => 'Serah Terima Pengambilan',
                'desc' => 'Periksa fisik unit & tahan KTM asli',
                'count' => 5,
                'color' => 'blue',
            ],
            [
                'title' => 'Pemeriksaan Pengembalian',
                'desc' => 'Tes fungsi, terbitkan BAST & kembalikan KTM',
                'count' => 3,
                'color' => 'orange',
            ],
            [
                'title' => 'Brankas Jaminan KTM',
                'desc' => 'Kartu fisik tersimpan di laci loket',
                'count' => 14,
                'color' => 'sky',
            ],
            [
                'title' => 'Setoran Kas Denda',
                'desc' => 'Denda keterlambatan siap setor ke kas',
                'count' => 2,
                'color' => 'purple',
            ],
        ];

        $ktmSafebox = [
            ['slot' => 'Slot A-04', 'student' => 'Dimas Pratama', 'item' => 'Canon EOS 90D', 'time' => '25 Okt 2026'],
            ['slot' => 'Slot B-02', 'student' => 'Bagas Wicaksono', 'item' => 'Sony Alpha 6400', 'time' => '25 Okt 2026'],
            ['slot' => 'Slot A-09', 'student' => 'Rendy Pratama', 'item' => 'Proyektor Epson', 'time' => '26 Okt 2026'],
            ['slot' => 'Slot C-01', 'student' => 'Annisa Zahra', 'item' => 'Rode Wireless GO II', 'time' => '26 Okt 2026'],
            ['slot' => 'Slot B-04', 'student' => 'Nadia Safitri', 'item' => 'ThinkPad T14', 'time' => '27 Okt 2026'],
        ];

        $recentActivities = [
            [
                'title' => 'Serah terima Canon EOS 90D berhasil',
                'meta' => 'Dimas Pratama (2112000123), 29 Okt 2025 09:45',
                'color' => 'emerald',
            ],
            [
                'title' => 'KTM fisik disimpan di Slot Laci A-04',
                'meta' => 'Dimas Pratama, 29 Okt 2025 09:46',
                'color' => 'blue',
            ],
            [
                'title' => 'Pengembalian ThinkPad T14 tervalidasi',
                'meta' => 'Nadia Safitri, BAST selesai, 28 Okt 2025 15:00',
                'color' => 'amber',
            ],
            [
                'title' => 'KTM diserahkan balik ke mahasiswa',
                'meta' => 'Nadia Safitri (2012000088), 28 Okt 2025 15:02',
                'color' => 'purple',
            ],
        ];

        return view('pages.operator.dashboard', [
            'operatorStaff' => $operatorStaff,
            'kpis' => $kpis,
            'chartTrend' => $chartTrend,
            'categories' => $categories,
            'recentOrders' => $recentOrders,
            'operatorTasks' => $operatorTasks,
            'ktmSafebox' => $ktmSafebox,
            'recentActivities' => $recentActivities,
        ]);
    }
}



