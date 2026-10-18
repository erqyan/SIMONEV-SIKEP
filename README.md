# SIMONEV-SIKEP
### Sistem Monitoring dan Evaluasi SIKEP - Mahkamah Agung Republik Indonesia

Aplikasi internal penjaminan mutu (*data quality assurance*), pemantauan, dan evaluasi data kepegawaian SIKEP di lingkungan Mahkamah Agung Republik Indonesia dan Badan Peradilan di bawahnya.

---

## 🏛️ Fitur Utama Sistem

- **Kamus Monitoring Berstandar (5 Kelompok & 35 Subkelompok)**: Mengacu pada seluruh pilar data kepegawaian (Data Pokok, Riwayat Pekerjaan, Pengembangan Kompetensi, Penilaian Kinerja, dan Lain-Lain).
- **Role-Based Access Control (RBAC)**: Pemisahan peran yang tegas antara:
  - **Administrator**: Manajemen master, kamus parameter, periode, dan akun pengguna.
  - **Petugas Kepegawaian**: Pelaksanaan checklist monitoring, manajemen temuan, pembaruan data, dan upload bukti dukung.
  - **Reviewer / Pimpinan**: Pengawasan capaian, verifikasi/approval perbaikan data, dan pengesahan laporan.
- **Siklus Tindak Lanjut Tertutup**:
  $$\text{Monitoring} \longrightarrow \text{Temuan} \longrightarrow \text{Tindak Lanjut} \longrightarrow \text{Verifikasi Pimpinan} \longrightarrow \text{Laporan Otomatis}$$
- **Audit Trail & Immutability**: Pencatatan histori perubahan data (nilai lama vs baru, tanggal, dasar SK/dokumen, dan petugas).
- **Generator Naskah Dinas Laporan Monev Resmi**: Pratinjau langsung dan ekspor naskah dinas formal format Mahkamah Agung RI (Cover, Bab I s.d Bab V, tabel matriks, serta kolom tanda tangan).

---

## 🚀 Panduan Menjalankan Proyek Secara Lokal

### Prasyarat
- PHP 8.2+ (Kompatibel dengan XAMPP Windows PHP 8.2 & Linux Ubuntu PHP 8.5)
- Composer 2.x
- MySQL 8.0+ / MariaDB 10.6+ (Bawaan XAMPP MySQL)

### Langkah Instalasi (Windows CMD / PowerShell / XAMPP)

Buka Command Prompt (CMD) atau PowerShell di folder proyek, lalu jalankan:

```cmd
:: 1. Salin konfigurasi environment (Gunakan copy untuk Windows)
copy .env.example .env

:: 2. Pasang dependensi proyek
composer install

:: 3. Generate Application Key
php artisan key:generate

:: 4. Migrasi Database (Pastikan database simonev_sikep telah dibuat di phpMyAdmin / MySQL)
php artisan migrate

:: 5. Jalankan Local Server
php artisan serve
```

> **Untuk pengguna Linux / macOS:** Perintah langkah 1 dapat menggunakan `cp .env.example .env`.

Buka aplikasi di peramban pada alamat: **`http://localhost:8000`**.
