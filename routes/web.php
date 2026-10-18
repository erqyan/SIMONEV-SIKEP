<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimonevWebController;

// Halaman Utama & Autentikasi
Route::get('/', [SimonevWebController::class, 'index'])->name('home');
Route::get('/login', [SimonevWebController::class, 'login'])->name('login');
Route::post('/login', [SimonevWebController::class, 'authenticate'])->name('login.post');
Route::get('/role-switch/{role}', [SimonevWebController::class, 'switchRole'])->name('role.switch');

// Dashboard Eksekutif KPI
Route::get('/dashboard', [SimonevWebController::class, 'dashboard'])->name('dashboard');

// Master Data Pegawai
Route::get('/pegawai', [SimonevWebController::class, 'pegawai'])->name('pegawai.index');
Route::get('/pegawai/{id}', [SimonevWebController::class, 'showPegawai'])->name('pegawai.show');

// Pelaksanaan Monitoring SIKEP (Form Checklist)
Route::get('/monitoring', [SimonevWebController::class, 'monitoring'])->name('monitoring.index');
Route::get('/monitoring/{id}', [SimonevWebController::class, 'showMonitoring'])->name('monitoring.show');

// Manajemen Temuan & Tindak Lanjut
Route::get('/temuan', [SimonevWebController::class, 'temuan'])->name('temuan.index');
Route::get('/temuan/{id}', [SimonevWebController::class, 'showTemuan'])->name('temuan.show');

// Riwayat Pembaruan Data & Audit Trail
Route::get('/pembaruan-data', [SimonevWebController::class, 'pembaruan'])->name('pembaruan.index');

// Ruang Verifikasi & Approval Pimpinan
Route::get('/verifikasi', [SimonevWebController::class, 'verifikasi'])->name('verifikasi.index');

// Rekapitulasi Matriks Capaian
Route::get('/rekapitulasi', [SimonevWebController::class, 'rekapitulasi'])->name('rekapitulasi.index');

// Pusat Generator Laporan Monev Resmi (PDF / Excel)
Route::get('/laporan', [SimonevWebController::class, 'laporan'])->name('laporan.index');

// Master Kamus Monitoring (5 Kelompok & 35 Subkelompok)
Route::get('/kamus-monitoring', [SimonevWebController::class, 'kamus'])->name('kamus.index');

// Pengguna & Role Akses
Route::get('/pengguna', [SimonevWebController::class, 'pengguna'])->name('pengguna.index');

// Pengaturan Satker & Periode
Route::get('/pengaturan', [SimonevWebController::class, 'pengaturan'])->name('pengaturan.index');
