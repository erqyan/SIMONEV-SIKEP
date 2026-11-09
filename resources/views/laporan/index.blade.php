@extends('layouts.app')

@section('title', 'Laporan Monitoring & Evaluasi SIKEP')

@section('content')
<div class="container-fluid px-0">

    <!-- Header + Toolbar -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Penyusunan &amp; Generator Laporan Monev Resmi</h2>
                <small class="text-muted">Dokumen naskah dinas evaluasi kualitas data SIKEP berstandar Mahkamah Agung RI</small>
            </div>
            <div class="right">
                <button class="btn-tool" onclick="window.print()">
                    <i class="bi bi-printer"></i> Cetak Dokumen
                </button>
                <button class="btn-tool" onclick="alert('Mengunduh Laporan Monev format Excel...');">
                    <i class="bi bi-file-earmark-excel"></i> Unduh Excel
                </button>
                <button class="btn-tool" style="background:var(--ma-teal); color:#fff; border-color:var(--ma-teal);"
                        onclick="alert('Mengunduh Naskah Dinas Laporan Monev format PDF...');">
                    <i class="bi bi-file-earmark-pdf-fill"></i> Unduh PDF Resmi
                </button>
            </div>
        </div>

        <!-- Filter generator bar -->
        <div style="display:flex; gap:0.75rem; flex-wrap:wrap; padding:0.85rem 1rem; border-top:1px solid var(--ma-border); align-items:end;">
            <div style="flex:1 1 240px;">
                <label class="form-label small fw-semibold text-muted mb-1">Periode Waktu Laporan</label>
                <select class="form-select form-select-sm input-bordered">
                    <option value="sem1-2026" selected>Januari 2026 s.d Juni 2026 (Semester I)</option>
                    <option value="tri1-2026">Januari s.d Maret 2026 (Triwulan I)</option>
                    <option value="tri2-2026">April s.d Juni 2026 (Triwulan II)</option>
                    <option value="th-2025">Tahun Anggaran 2025 (Tahunan)</option>
                </select>
            </div>
            <div style="flex:2 1 320px;">
                <label class="form-label small fw-semibold text-muted mb-1">Format Jenis Laporan</label>
                <div class="d-flex gap-3 pt-1">
                    <div class="form-check form-check-inline small">
                        <input class="form-check-input" type="radio" name="jenisLap" id="j1">
                        <label class="form-check-label" for="j1">Bulanan</label>
                    </div>
                    <div class="form-check form-check-inline small">
                        <input class="form-check-input" type="radio" name="jenisLap" id="j2">
                        <label class="form-check-label" for="j2">Triwulan</label>
                    </div>
                    <div class="form-check form-check-inline small">
                        <input class="form-check-input" type="radio" name="jenisLap" id="j3" checked>
                        <label class="form-check-label fw-bold" for="j3">Semester</label>
                    </div>
                    <div class="form-check form-check-inline small">
                        <input class="form-check-input" type="radio" name="jenisLap" id="j4">
                        <label class="form-check-label" for="j4">Tahunan</label>
                    </div>
                </div>
            </div>
            <div style="flex:1 1 220px;">
                <label class="form-label small fw-semibold text-muted mb-1">Pejabat Penandatangan</label>
                <select class="form-select form-select-sm input-bordered">
                    <option value="ketua">Ketua Pengadilan &amp; Kasubbag Ortala</option>
                    <option value="sekretaris">Sekretaris Pengadilan</option>
                </select>
            </div>
            <button class="btn-teal btn btn-sm" onclick="alert('Laporan berhasil diperbarui.');">
                <i class="bi bi-arrow-repeat me-1"></i> Perbarui Draf
            </button>
        </div>
    </div>

    <!-- Statistik ringkas -->
    <div class="row g-2 mb-4">
        <div class="col-6 col-md-2">
            <div class="card-stat" style="padding:0.85rem 1rem; text-align:center;">
                <div class="card-stat-title" style="text-align:left;">Total Pegawai</div>
                <div class="card-stat-value">48</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="card-stat" style="padding:0.85rem 1rem; text-align:center;">
                <div class="card-stat-title" style="text-align:left;">Telah Dimonitor</div>
                <div class="card-stat-value" style="color:var(--ma-teal);">36</div>
                <div class="card-stat-sub">(75%)</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="card-stat" style="padding:0.85rem 1rem; text-align:center;">
                <div class="card-stat-title" style="text-align:left;">Parameter Sesuai</div>
                <div class="card-stat-value text-success">1.148</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="card-stat" style="padding:0.85rem 1rem; text-align:center;">
                <div class="card-stat-title" style="text-align:left;">Total Temuan</div>
                <div class="card-stat-value text-danger">42</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="card-stat" style="padding:0.85rem 1rem; text-align:center;">
                <div class="card-stat-title" style="text-align:left;">Temuan Selesai</div>
                <div class="card-stat-value" style="color:#0891B2;">28</div>
                <div class="card-stat-sub">(66.7%)</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="card-stat" style="padding:0.85rem 1rem; text-align:center;">
                <div class="card-stat-title" style="text-align:left;">Dalam Tindak Lanjut</div>
                <div class="card-stat-value" style="color:var(--ma-warning);">14</div>
                <div class="card-stat-sub">(33.3%)</div>
            </div>
        </div>
    </div>

    <!-- NASKAH DINAS PREVIEW -->
    <div class="table-card mb-4" style="max-width:900px; margin:0 auto; box-shadow:0 4px 20px rgba(0,0,0,0.06);">
        <div style="padding:2.5rem;">

            <!-- Kop Surat -->
            <div class="text-center border-bottom pb-3 mb-4" style="border-bottom-width:3px; border-color:var(--ma-text-dark);">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <img src="{{ asset('images/logo-ma.svg') }}" alt="Logo MA" style="width:75px; height:75px;">
                    <div>
                        <div class="fw-bold text-dark text-uppercase" style="letter-spacing:1px; font-size:1.05rem;">MAHKAMAH AGUNG REPUBLIK INDONESIA</div>
                        <div class="fw-bold text-dark text-uppercase" style="letter-spacing:0.8px; font-size:0.95rem;">PENGADILAN TINGGI JAWA BARAT</div>
                        <div class="fw-bold text-dark text-uppercase mb-1" style="letter-spacing:1px;">PENGADILAN NEGERI KELAS IA CONTOH</div>
                        <div class="text-muted small" style="font-size:0.75rem;">Jl. Keadilan Agung No. 1 &bull; Telp: (021) 87654321 &bull; Website: www.pn-contoh.go.id</div>
                    </div>
                </div>
            </div>

            <!-- Judul -->
            <div class="text-center mb-4">
                <div class="fw-bold text-uppercase" style="text-decoration:underline;">LAPORAN MONITORING DAN EVALUASI DATA SIKEP</div>
                <div class="fw-semibold small mt-1">Nomor: W11.U1/1425/KP.01.2/X/2026</div>
                <div class="text-muted small">Periode: Semester I Tahun Anggaran 2026</div>
            </div>

            <!-- BAB I -->
            <div class="mb-4">
                <div class="fw-bold text-uppercase mb-2">BAB I. PENDAHULUAN</div>
                <p class="small text-justify mb-2" style="line-height:1.6;">
                    <strong>1.1 Dasar Hukum:</strong> Pelaksanaan monitoring dan evaluasi data kepegawaian ini berpedoman pada Undang-Undang Nomor 20 Tahun 2023 tentang Aparatur Sipil Negara, Peraturan Mahkamah Agung RI, serta Keputusan Sekretaris Mahkamah Agung RI tentang Pedoman Pengelolaan Sistem Informasi Kepegawaian (SIKEP) di Lingkungan Mahkamah Agung RI dan Badan Peradilan di Bawahnya.
                </p>
                <p class="small text-justify mb-2" style="line-height:1.6;">
                    <strong>1.2 Maksud dan Tujuan:</strong> Memberikan penjaminan mutu dan kepastian bahwa seluruh riwayat aparatur sipil negara tercatat akurat, mutakhir, dan dilengkapi bukti fisik otentik pada aplikasi SIKEP.
                </p>
                <p class="small text-justify mb-0" style="line-height:1.6;">
                    <strong>1.3 Ruang Lingkup:</strong> Pemeriksaan mencakup 5 Kelompok Utama dan 35 Subkelompok data kepegawaian terhadap 48 personil pada Pengadilan Negeri Kelas IA Contoh.
                </p>
            </div>

            <!-- BAB II -->
            <div class="mb-4">
                <div class="fw-bold text-uppercase mb-2">BAB II. REKAPITULASI HASIL MONITORING</div>
                <p class="small mb-2">Berdasarkan hasil uji silang antara dokumen fisik portofolio kepegawaian dengan data aplikasi SIKEP, diperoleh rekapitulasi sebagai berikut:</p>

                <div class="table-responsive mb-3">
                    <table class="table table-custom table-sm small mb-0 text-center">
                        <thead>
                            <tr>
                                <th style="width:40px;">No</th>
                                <th class="text-start">Kelompok Data Monitoring</th>
                                <th style="width:110px;">Subkelompok</th>
                                <th style="width:110px;">Parameter Sesuai</th>
                                <th style="width:90px;">Temuan</th>
                                <th style="width:100px;">Kepatuhan (%)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="text-start">Kelompok A: Data Pokok</td>
                                <td>9 Subkelompok</td>
                                <td>412 Parameter</td>
                                <td>8 Temuan</td>
                                <td><strong style="color:var(--ma-success);">92.0%</strong></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-start">Kelompok B: Riwayat Pekerjaan</td>
                                <td>8 Subkelompok</td>
                                <td>265 Parameter</td>
                                <td>12 Temuan</td>
                                <td><strong style="color:var(--ma-success);">78.0%</strong></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td class="text-start">Kelompok C: Pengembangan Kompetensi</td>
                                <td>7 Subkelompok</td>
                                <td>198 Parameter</td>
                                <td>9 Temuan</td>
                                <td><strong style="color:var(--ma-success);">85.0%</strong></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-start">Kelompok D: Penilaian Kinerja</td>
                                <td>6 Subkelompok</td>
                                <td>142 Parameter</td>
                                <td>7 Temuan</td>
                                <td><strong style="color:var(--ma-warning);">64.0%</strong></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td class="text-start">Kelompok E: Lain-Lain (LHKPN, Cuti, dll)</td>
                                <td>5 Subkelompok</td>
                                <td>131 Parameter</td>
                                <td>6 Temuan</td>
                                <td><strong style="color:var(--ma-success);">90.0%</strong></td>
                            </tr>
                            <tr style="background:#F4F6F7; font-weight:700;">
                                <td colspan="3" class="text-start">Rata-Rata Capaian Satuan Kerja</td>
                                <td>1.148 Parameter</td>
                                <td>42 Temuan</td>
                                <td><span class="badge" style="background:#ECFDF5; color:#047857; border:1px solid #6EE7B7;">81.8%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- BAB III -->
            <div class="mb-4">
                <div class="fw-bold text-uppercase mb-2">BAB III. EVALUASI DAN TINDAK LANJUT</div>
                <p class="small text-justify mb-0" style="line-height:1.6;">
                    Dari 42 total temuan yang teridentifikasi, sebanyak <strong>28 temuan (66.7%)</strong> telah ditindaklanjuti dan diverifikasi oleh pejabat penilai. Sisa <strong>14 temuan (33.3%)</strong> dalam tahap perbaikan data SIKEP dan pengumpulan berkas fisik scan ijazah/SK dari pegawai bersangkutan dengan tenggat waktu penyelesaian akhir bulan berjalan.
                </p>
            </div>

            <!-- BAB IV -->
            <div class="mb-5">
                <div class="fw-bold text-uppercase mb-2">BAB IV. KESIMPULAN DAN REKOMENDASI</div>
                <ol class="small ps-3 mb-0" style="line-height:1.8;">
                    <li>Tata kelola dan akurasi data SIKEP pada Pengadilan Negeri Kelas IA Contoh telah mencapai kategori <strong>BAIK (81.8%)</strong>.</li>
                    <li>Sub Bagian Kepegawaian agar secara berkala melakukan rekonsiliasi data setiap triwulan.</li>
                    <li>Seluruh aparatur diimbau segera menyerahkan salinan legalisir dokumen mutasi/ijazah paling lambat 7 hari kalender setelah diterbitkan.</li>
                </ol>
            </div>

            <!-- Blok TTD -->
            <div class="row pt-3 text-center small">
                <div class="col-6">
                    <div>Mengetahui / Memeriksa,</div>
                    <div class="fw-semibold">Kasubbag Kepegawaian &amp; Ortala</div>
                    <div style="height:75px;" class="d-flex align-items-center justify-content-center">
                        <span class="badge badge-status" style="background:#F1F5F9; color:#64748B; border:1px dashed #CBD5E1; padding:0.4rem 0.9rem;">[ Tanda Tangan Elektronik / Basah ]</span>
                    </div>
                    <div class="fw-bold text-decoration-underline">DEWI LESTARI, S.E.</div>
                    <div>NIP: 198811252014022003</div>
                </div>
                <div class="col-6">
                    <div>Ditetapkan di: Contoh, {{ date('d F Y') }}</div>
                    <div class="fw-semibold">Ketua Pengadilan Negeri Kelas IA Contoh</div>
                    <div style="height:75px;" class="d-flex align-items-center justify-content-center">
                        <span class="badge badge-status" style="background:#F1F5F9; color:#64748B; border:1px dashed #CBD5E1; padding:0.4rem 0.9rem;">[ Tanda Tangan Elektronik / Basah ]</span>
                    </div>
                    <div class="fw-bold text-decoration-underline">DR. H. RIDWAN MANSYUR, S.H., M.H.</div>
                    <div>NIP: 196205121987031001</div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
