@extends('layouts.app')

@section('title', 'Laporan Monitoring & Evaluasi SIKEP')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Penyusunan & Generator Laporan Monev Resmi</h2>
            <p class="text-muted small mb-0">Dokumen Naskah Dinas Evaluasi Kualitas Data SIKEP Berstandar Mahkamah Agung RI</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <button class="btn btn-outline-secondary btn-sm" onclick="window.print()">
                <i class="bi bi-printer me-1"></i> Cetak Dokumen
            </button>
            <button class="btn btn-outline-success btn-sm" onclick="alert('Mengunduh Laporan Monev format Excel...');">
                <i class="bi bi-file-earmark-excel me-1"></i> Unduh Excel
            </button>
            <button class="btn btn-danger btn-sm" onclick="alert('Mengunduh Naskah Dinas Laporan Monev format PDF...');">
                <i class="bi bi-file-earmark-pdf-fill me-1"></i> Unduh PDF Resmi
            </button>
        </div>
    </div>

    <!-- Filter Generator Bar -->
    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-body p-3">
            <div class="row g-3 align-items-center">
                <div class="col-md-3">
                    <label class="form-label small fw-semibold text-muted mb-1">Periode Waktu Laporan</label>
                    <select class="form-select form-select-sm">
                        <option value="sem1-2026">Januari 2026 s.d Juni 2026 (Semester I)</option>
                        <option value="tri1-2026">Januari s.d Maret 2026 (Triwulan I)</option>
                        <option value="tri2-2026">April s.d Juni 2026 (Triwulan II)</option>
                        <option value="th-2025">Tahun Anggaran 2025 (Tahunan)</option>
                    </select>
                </div>
                <div class="col-md-4">
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
                <div class="col-md-3">
                    <label class="form-label small fw-semibold text-muted mb-1">Pejabat Penandatangan</label>
                    <select class="form-select form-select-sm">
                        <option value="ketua">Ketua Pengadilan & Kasubbag Ortala</option>
                        <option value="sekretaris">Sekretaris Pengadilan</option>
                    </select>
                </div>
                <div class="col-md-2 text-md-end pt-md-3">
                    <button class="btn btn-sm btn-primary w-100" onclick="alert('Laporan berhasil diperbarui.');">
                        <i class="bi bi-arrow-repeat me-1"></i> Perbarui Draf
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Ringkasan Statistik Otomatis Laporan -->
    <div class="row g-2 mb-4">
        <div class="col-6 col-md-2">
            <div class="p-2 bg-white border rounded text-center">
                <div class="text-muted" style="font-size: 0.72rem;">TOTAL PEGAWAI</div>
                <div class="fw-bold text-dark fs-5">48</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="p-2 bg-white border rounded text-center">
                <div class="text-muted" style="font-size: 0.72rem;">TELAH DIMONITOR</div>
                <div class="fw-bold text-primary fs-5">36 (75%)</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="p-2 bg-white border rounded text-center">
                <div class="text-muted" style="font-size: 0.72rem;">PARAMETER SESUAI</div>
                <div class="fw-bold text-success fs-5">1.148</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="p-2 bg-white border rounded text-center">
                <div class="text-muted" style="font-size: 0.72rem;">TOTAL TEMUAN</div>
                <div class="fw-bold text-danger fs-5">42</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="p-2 bg-white border rounded text-center">
                <div class="text-muted" style="font-size: 0.72rem;">TEMUAN SELESAI</div>
                <div class="fw-bold text-info fs-5">28 (66.7%)</div>
            </div>
        </div>
        <div class="col-6 col-md-2">
            <div class="p-2 bg-white border rounded text-center">
                <div class="text-muted" style="font-size: 0.72rem;">DALAM TINDAK LANJUT</div>
                <div class="fw-bold text-warning fs-5">14 (33.3%)</div>
            </div>
        </div>
    </div>

    <!-- LIVE PREVIEW NASKAH DINAS RESMI MAHKAMAH AGUNG -->
    <div class="card border-0 shadow-lg rounded-3 mb-5 mx-auto bg-white" style="max-width: 900px;">
        <div class="card-body p-5">

            <!-- KOP SURAT NASKAH DINAS -->
            <div class="text-center border-bottom border-dark border-3 pb-3 mb-4 position-relative">
                <div class="d-flex align-items-center justify-content-center gap-3">
                    <img src="{{ asset('images/logo-ma.svg') }}" alt="Logo MA" style="width: 75px; height: 75px;">
                    <div>
                        <h5 class="fw-bold text-dark mb-0 text-uppercase" style="letter-spacing: 1px;">MAHKAMAH AGUNG REPUBLIK INDONESIA</h5>
                        <h6 class="fw-bold text-dark mb-0 text-uppercase" style="letter-spacing: 0.8px;">PENGADILAN TINGGI JAWA BARAT</h6>
                        <h5 class="fw-bold text-dark mb-1 text-uppercase" style="letter-spacing: 1px;">PENGADILAN NEGERI KELAS IA CONTOH</h5>
                        <div class="text-muted small" style="font-size: 0.75rem;">Jl. Keadilan Agung No. 1 &bull; Telp: (021) 87654321 &bull; Website: www.pn-contoh.go.id</div>
                    </div>
                </div>
            </div>

            <!-- JUDUL LAPORAN -->
            <div class="text-center my-4">
                <h5 class="fw-bold text-dark text-uppercase mb-1" style="text-decoration: underline;">
                    LAPORAN MONITORING DAN EVALUASI DATA SIKEP
                </h5>
                <div class="fw-semibold text-dark small">Nomor: W11.U1/1425/KP.01.2/X/2026</div>
                <div class="text-muted small">Periode: Semester I Tahun Anggaran 2026</div>
            </div>

            <!-- BAB I: PENDAHULUAN -->
            <div class="mb-4">
                <h6 class="fw-bold text-dark mb-2 text-uppercase">BAB I. PENDAHULUAN</h6>
                <p class="small text-dark text-justify mb-2" style="line-height: 1.6;">
                    <strong>1.1 Dasar Hukum:</strong> Pelaksanaan monitoring dan evaluasi data kepegawaian ini berpedoman pada Undang-Undang Nomor 20 Tahun 2023 tentang Aparatur Sipil Negara, Peraturan Mahkamah Agung RI, serta Keputusan Sekretaris Mahkamah Agung RI tentang Pedoman Pengelolaan Sistem Informasi Kepegawaian (SIKEP) di Lingkungan Mahkamah Agung RI dan Badan Peradilan di Bawahnya.
                </p>
                <p class="small text-dark text-justify mb-2" style="line-height: 1.6;">
                    <strong>1.2 Maksud dan Tujuan:</strong> Memberikan penjaminan mutu dan kepastian bahwa seluruh riwayat aparatur sipil negara tercatat akurat, mutakhir, dan dilengkapi bukti fisik otentik pada aplikasi SIKEP.
                </p>
                <p class="small text-dark text-justify mb-2" style="line-height: 1.6;">
                    <strong>1.3 Ruang Lingkup:</strong> Pemeriksaan mencakup 5 Kelompok Utama dan 35 Subkelompok data kepegawaian terhadap 48 personil pada Pengadilan Negeri Kelas IA Contoh.
                </p>
            </div>

            <!-- BAB II: REKAPITULASI CAPAIAN -->
            <div class="mb-4">
                <h6 class="fw-bold text-dark mb-2 text-uppercase">BAB II. REKAPITULASI HASIL MONITORING</h6>
                <p class="small text-dark mb-2">Berdasarkan hasil uji silang antara dokumen fisik portofolio kepegawaian dengan data aplikasi SIKEP, diperoleh rekapitulasi sebagai berikut:</p>
                
                <table class="table table-bordered table-sm small mb-3 text-center">
                    <thead class="table-light">
                        <tr>
                            <th style="width: 40px;">No</th>
                            <th class="text-start">Kelompok Data Monitoring</th>
                            <th style="width: 110px;">Subkelompok</th>
                            <th style="width: 110px;">Parameter Sesuai</th>
                            <th style="width: 90px;">Temuan</th>
                            <th style="width: 100px;">Kepatuhan (%)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td class="text-start">Kelompok A: Data Pokok</td>
                            <td>9 Subkelompok</td>
                            <td>412 Parameter</td>
                            <td>8 Temuan</td>
                            <td><strong class="text-success">92.0%</strong></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="text-start">Kelompok B: Riwayat Pekerjaan</td>
                            <td>8 Subkelompok</td>
                            <td>265 Parameter</td>
                            <td>12 Temuan</td>
                            <td><strong class="text-success">78.0%</strong></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td class="text-start">Kelompok C: Pengembangan Kompetensi</td>
                            <td>7 Subkelompok</td>
                            <td>198 Parameter</td>
                            <td>9 Temuan</td>
                            <td><strong class="text-success">85.0%</strong></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="text-start">Kelompok D: Penilaian Kinerja</td>
                            <td>6 Subkelompok</td>
                            <td>142 Parameter</td>
                            <td>7 Temuan</td>
                            <td><strong class="text-warning">64.0%</strong></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td class="text-start">Kelompok E: Lain-Lain (LHKPN, Cuti, dll)</td>
                            <td>5 Subkelompok</td>
                            <td>131 Parameter</td>
                            <td>6 Temuan</td>
                            <td><strong class="text-success">90.0%</strong></td>
                        </tr>
                        <tr class="table-light fw-bold">
                            <td colspan="3" class="text-start">Rata-Rata Capaian Satuan Kerja</td>
                            <td>1.148 Parameter</td>
                            <td>42 Temuan</td>
                            <td><span class="badge bg-success fs-6">81.8%</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- BAB III: EVALUASI & TINDAK LANJUT -->
            <div class="mb-4">
                <h6 class="fw-bold text-dark mb-2 text-uppercase">BAB III. EVALUASI DAN TINDAK LANJUT</h6>
                <p class="small text-dark text-justify" style="line-height: 1.6;">
                    Dari 42 total temuan yang teridentifikasi, sebanyak <strong>28 temuan (66.7%)</strong> telah ditindaklanjuti dan diverifikasi oleh pejabat penilai. Sisa <strong>14 temuan (33.3%)</strong> dalam tahap perbaikan data SIKEP dan pengumpulan berkas fisik scan ijazah/SK dari pegawai bersangkutan dengan tenggat waktu penyelesaian akhir bulan berjalan.
                </p>
            </div>

            <!-- BAB IV: KESIMPULAN & REKOMENDASI -->
            <div class="mb-5">
                <h6 class="fw-bold text-dark mb-2 text-uppercase">BAB IV. KESIMPULAN DAN REKOMENDASI</h6>
                <ol class="small text-dark ps-3 mb-0" style="line-height: 1.6;">
                    <li>Tata kelola dan akurasi data SIKEP pada Pengadilan Negeri Kelas IA Contoh telah mencapai kategori <strong>BAIK (81.8%)</strong>.</li>
                    <li>Sub Bagian Kepegawaian agar secara berkala melakukan rekonsiliasi data setiap triwulan.</li>
                    <li>Seluruh aparatur diimbau segera menyerahkan salinan legalisir dokumen mutasi/ijazah paling lambat 7 hari kalender setelah diterbitkan.</li>
                </ol>
            </div>

            <!-- BLOK TANDA TANGAN DINAS -->
            <div class="row pt-3 text-center small text-dark">
                <div class="col-6">
                    <div>Mengetahui / Memeriksa,</div>
                    <div class="fw-semibold">Kasubbag Kepegawaian & Ortala</div>
                    <div style="height: 75px;" class="d-flex align-items-center justify-content-center">
                        <span class="badge bg-light text-muted border border-dashed px-3 py-2">[ Tanda Tangan Elektronik / Basah ]</span>
                    </div>
                    <div class="fw-bold text-decoration-underline">DEWI LESTARI, S.E.</div>
                    <div>NIP: 198811252014022003</div>
                </div>
                <div class="col-6">
                    <div>Ditetapkan di: Contoh, {{ date('d F Y') }}</div>
                    <div class="fw-semibold">Ketua Pengadilan Negeri Kelas IA Contoh</div>
                    <div style="height: 75px;" class="d-flex align-items-center justify-content-center">
                        <span class="badge bg-light text-muted border border-dashed px-3 py-2">[ Tanda Tangan Elektronik / Basah ]</span>
                    </div>
                    <div class="fw-bold text-decoration-underline">DR. H. RIDWAN MANSYUR, S.H., M.H.</div>
                    <div>NIP: 196205121987031001</div>
                </div>
            </div>

        </div>
    </div>

</div>
@endsection
