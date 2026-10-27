<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes - GearHub Perbanas Institute
|--------------------------------------------------------------------------
*/

// Halaman Utama / Landing Page
Route::get('/', [PageController::class, 'beranda'])->name('beranda');

// Halaman Katalog Peralatan & Detail
Route::get('/katalog', [PageController::class, 'katalog'])->name('katalog');
Route::get('/katalog/{id}', [PageController::class, 'katalogDetail'])->name('katalog.detail');

// Halaman Menu Navigasi Lainnya (Slicing Pages)
Route::get('/cara-menyewa', [PageController::class, 'caraMenyewa'])->name('cara-menyewa');
Route::get('/kebijakan', [PageController::class, 'kebijakan'])->name('kebijakan');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/kontak', [PageController::class, 'kontak'])->name('kontak');

// Halaman Autentikasi Mahasiswa
Route::get('/masuk', [PageController::class, 'login'])->name('login');
Route::get('/daftar', [PageController::class, 'register'])->name('register');

// Halaman Portal Mahasiswa (Student Area)
Route::get('/mahasiswa', [PageController::class, 'mahasiswaDashboard'])->name('mahasiswa.dashboard');
Route::get('/mahasiswa/pesanan', [PageController::class, 'mahasiswaPesanan'])->name('mahasiswa.pesanan');
Route::get('/mahasiswa/riwayat', [PageController::class, 'mahasiswaRiwayat'])->name('mahasiswa.riwayat');
Route::get('/mahasiswa/profil', [PageController::class, 'mahasiswaProfil'])->name('mahasiswa.profil');
Route::get('/mahasiswa/keranjang', [PageController::class, 'mahasiswaKeranjang'])->name('mahasiswa.keranjang');

// Halaman Portal Admin & Petugas Loket (Gedung Unit VI Lantai 1)
Route::get('/admin', [PageController::class, 'adminDashboard'])->name('admin.dashboard');
Route::get('/admin/antrean', [PageController::class, 'adminDashboard'])->name('admin.antrean');
Route::get('/admin/persetujuan', [PageController::class, 'adminDashboard'])->name('admin.persetujuan');
Route::get('/admin/inventaris', [PageController::class, 'adminDashboard'])->name('admin.inventaris');
Route::get('/admin/verifikasi-mahasiswa', [PageController::class, 'adminDashboard'])->name('admin.verifikasi');

// Halaman Portal Operator Loket (Meja Pelayanan Gedung Unit VI Lantai 1)
Route::get('/operator', [PageController::class, 'operatorDashboard'])->name('operator.dashboard');
Route::get('/operator/antrean', [PageController::class, 'operatorDashboard'])->name('operator.antrean');
Route::get('/operator/serah-terima', [PageController::class, 'operatorDashboard'])->name('operator.serah-terima');
Route::get('/operator/pengembalian', [PageController::class, 'operatorDashboard'])->name('operator.pengembalian');
Route::get('/operator/brankas-ktm', [PageController::class, 'operatorDashboard'])->name('operator.brankas-ktm');


