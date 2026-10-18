@extends('layouts.app')

@section('title', 'Manajemen Temuan & Tindak Lanjut')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Daftar Temuan & Status Tindak Lanjut</h2>
            <p class="text-muted small mb-0">Pengawasan Ketidaksesuaian Data SIKEP hingga Tuntas dan Terverifikasi Pimpinan</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <button class="btn btn-outline-secondary btn-sm" onclick="window.print()">
                <i class="bi bi-printer me-1"></i> Cetak Matriks Temuan
            </button>
        </div>
    </div>

    <!-- Filter Card -->
    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-body p-3">
            <div class="row g-2 align-items-center">
                <div class="col-md-3">
                    <label class="form-label small text-muted mb-1">Periode Monitoring</label>
                    <select class="form-select form-select-sm">
                        <option value="2026-sem1">Semester I 2026 (Aktif)</option>
                        <option value="2025-sem2">Semester II 2025</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label small text-muted mb-1">Kelompok Kamus</label>
                    <select class="form-select form-select-sm">
                        <option value="">Semua Kelompok (A - E)</option>
                        <option value="A">A. Data Pokok</option>
                        <option value="B">B. Riwayat Pekerjaan</option>
                        <option value="C">C. Pengembangan Kompetensi</option>
                        <option value="D">D. Penilaian Kinerja</option>
                        <option value="E">E. Lain-Lain</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label small text-muted mb-1">Status Tindak Lanjut</label>
                    <select class="form-select form-select-sm">
                        <option value="">Semua Status</option>
                        <option value="belum">Belum Ditindaklanjuti</option>
                        <option value="proses">Dalam Proses</option>
                        <option value="selesai">Selesai (Menunggu Review)</option>
                        <option value="diverifikasi">Diverifikasi Pimpinan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label class="form-label small text-muted mb-1">Cari Pegawai / Temuan</label>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Nama atau parameter...">
                        <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Table of Findings -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold text-dark mb-0"><i class="bi bi-exclamation-triangle-fill text-warning me-2"></i>Matriks Temuan Aktif Periode Semester I 2026</h6>
            <span class="badge bg-light text-dark border">Total <strong>14</strong> Temuan Aktif</span>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Kode & Pegawai</th>
                        <th>Kelompok / Parameter</th>
                        <th>Uraian Temuan & Rekomendasi</th>
                        <th>Batas Waktu</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <span class="badge bg-light text-muted border mb-1">TMN/2026/001</span>
                            <div class="fw-bold text-dark">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">Hakim Pratama</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">C. Kompetensi</span>
                            <div class="fw-semibold text-dark mt-1">C.1 Ijazah S2 Magister Hukum</div>
                        </td>
                        <td>
                            <div class="text-dark small fw-semibold">Gelar S2 belum tercatat di data SIKEP pusat.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1 text-primary"></i> Rekomendasi: Unggah SK Pencantuman Gelar & Scan Ijazah Asli.</div>
                        </td>
                        <td>
                            <span class="text-danger fw-semibold"><i class="bi bi-clock me-1"></i>25 Okt 2026</span>
                            <div class="small text-danger">Tersisa 7 Hari</div>
                        </td>
                        <td><span class="badge badge-status badge-belum">Belum Ditindaklanjuti</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 1) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <span class="badge bg-light text-muted border mb-1">TMN/2026/002</span>
                            <div class="fw-bold text-dark">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">Pengelola Perkara</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">B. Riwayat Kerja</span>
                            <div class="fw-semibold text-dark mt-1">B.3 SK Kenaikan Pangkat (III/a)</div>
                        </td>
                        <td>
                            <div class="text-dark small fw-semibold">TMT Pangkat tertera berbeda dengan SK Pengangkatan.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1 text-primary"></i> Rekomendasi: Koreksi TMT Pangkat di menu Riwayat Pangkat SIKEP.</div>
                        </td>
                        <td>
                            <span class="text-dark"><i class="bi bi-clock me-1"></i>28 Okt 2026</span>
                            <div class="small text-muted">Tersisa 10 Hari</div>
                        </td>
                        <td><span class="badge badge-status badge-proses">Dalam Proses</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 2) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <span class="badge bg-light text-muted border mb-1">TMN/2026/003</span>
                            <div class="fw-bold text-dark">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">Panitera Pengganti</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">A. Data Pokok</span>
                            <div class="fw-semibold text-dark mt-1">A.4 NIK & Buku Nikah Pasangan</div>
                        </td>
                        <td>
                            <div class="text-dark small fw-semibold">NIK istri terpotong 14 digit di sistem.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1 text-primary"></i> Rekomendasi: Lengkapi 16 digit NIK dan lampirkan scan e-KTP.</div>
                        </td>
                        <td>
                            <span class="text-dark"><i class="bi bi-clock me-1"></i>30 Okt 2026</span>
                            <div class="small text-muted">Tersisa 12 Hari</div>
                        </td>
                        <td><span class="badge badge-status badge-selesai">Selesai (Menunggu Review)</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 3) }}" class="btn btn-sm btn-outline-info">
                                <i class="bi bi-eye me-1"></i> Lihat Status
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">4</td>
                        <td>
                            <span class="badge bg-light text-muted border mb-1">TMN/2026/004</span>
                            <div class="fw-bold text-dark">Hendrawan, S.Kom.</div>
                            <div class="small text-muted">Pranata Komputer</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">E. Lain-Lain</span>
                            <div class="small text-muted mt-1">E.4 Tanda Terima LHKASN</div>
                        </td>
                        <td>
                            <div class="text-dark small fw-semibold">Tanda terima lapor harta kekayaan tahun 2025 belum diunggah.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1 text-primary"></i> Rekomendasi: Unggah bukti tanda terima pelaporan LHKASN.</div>
                        </td>
                        <td>
                            <span class="text-danger fw-semibold"><i class="bi bi-clock me-1"></i>22 Okt 2026</span>
                            <div class="small text-danger">Tersisa 4 Hari</div>
                        </td>
                        <td><span class="badge badge-status badge-belum">Belum Ditindaklanjuti</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 4) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
