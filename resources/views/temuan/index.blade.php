@extends('layouts.app')

@section('title', 'Manajemen Temuan & Tindak Lanjut')

@section('content')
<div class="container-fluid px-0">

    <!-- Header + Filter Toolbar -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-3">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Matriks Temuan &amp; Tindak Lanjut</h2>
                <small class="text-muted">Pengawasan ketidaksesuaian data SIKEP hingga tuntas dan terverifikasi pimpinan</small>
            </div>
            <div class="right">
                <button class="btn-tool" onclick="window.print()">
                    <i class="bi bi-printer"></i> Cetak Matriks Temuan
                </button>
                <span class="period-pill">Semester I 2026</span>
            </div>
        </div>

        <!-- Filter row -->
        <div style="display:flex; gap:0.75rem; flex-wrap:wrap; padding:0.85rem 1rem; border-top:1px solid var(--ma-border);">
            <div style="flex:1 1 180px;">
                <label class="form-label small fw-semibold text-muted mb-1">Periode Monitoring</label>
                <select class="form-select form-select-sm input-bordered">
                    <option selected>Semester I 2026 (Aktif)</option>
                    <option>Semester II 2025</option>
                </select>
            </div>
            <div style="flex:1 1 180px;">
                <label class="form-label small fw-semibold text-muted mb-1">Kelompok Kamus</label>
                <select class="form-select form-select-sm input-bordered">
                    <option selected>Semua Kelompok (A - E)</option>
                    <option>A. Data Pokok</option>
                    <option>B. Riwayat Pekerjaan</option>
                    <option>C. Pengembangan Kompetensi</option>
                    <option>D. Penilaian Kinerja</option>
                    <option>E. Lain-Lain</option>
                </select>
            </div>
            <div style="flex:1 1 180px;">
                <label class="form-label small fw-semibold text-muted mb-1">Status Tindak Lanjut</label>
                <select class="form-select form-select-sm input-bordered">
                    <option selected>Semua Status</option>
                    <option>Belum Ditindaklanjuti</option>
                    <option>Dalam Proses</option>
                    <option>Selesai (Menunggu Review)</option>
                    <option>Diverifikasi Pimpinan</option>
                </select>
            </div>
            <div style="flex:2 1 240px;">
                <label class="form-label small fw-semibold text-muted mb-1">Cari Pegawai / Temuan</label>
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control input-bordered" placeholder="Nama pegawai, kode temuan, atau parameter...">
                    <button class="btn btn-teal" type="button"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- KPI cards -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Temuan Aktif</div>
                        <div class="card-stat-value">14</div>
                        <div class="card-stat-sub">Periode Semester I 2026</div>
                    </div>
                    <div class="card-stat-icon bg-primary"><i class="bi bi-exclamation-triangle-fill"></i></div>
                </div>
                <div class="card-stat-progress" style="width:62%;"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Belum Ditindaklanjuti</div>
                        <div class="card-stat-value text-danger">6</div>
                        <div class="card-stat-sub">42% dari total aktif</div>
                    </div>
                    <div class="card-stat-icon bg-danger"><i class="bi bi-hourglass-split"></i></div>
                </div>
                <div class="card-stat-progress" style="width:42%; background:var(--ma-danger);"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Dalam Proses</div>
                        <div class="card-stat-value">4</div>
                        <div class="card-stat-sub">Menyiapkan dokumen perbaikan</div>
                    </div>
                    <div class="card-stat-icon"><i class="bi bi-arrow-repeat"></i></div>
                </div>
                <div class="card-stat-progress" style="width:29%;"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Selesai / Diverifikasi</div>
                        <div class="card-stat-value text-success">4</div>
                        <div class="card-stat-sub">29% â€” tunggu review pimpinan</div>
                    </div>
                    <div class="card-stat-icon bg-success"><i class="bi bi-check-circle-fill"></i></div>
                </div>
                <div class="card-stat-progress" style="width:29%; background:var(--ma-success);"></div>
            </div>
        </div>
    </div>

    <!-- Table of Findings -->
    <div class="table-card">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h6 class="fw-bold mb-0"><i class="bi bi-exclamation-triangle-fill me-2" style="color:var(--ma-gold);"></i>Matriks Temuan Aktif Periode Semester I 2026</h6>
            </div>
            <div class="right">
                <span class="text-muted small">Total <strong style="color:var(--ma-teal);">14</strong> Temuan Aktif</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Kode &amp; Pegawai</th>
                        <th>Kelompok / Parameter</th>
                        <th>Uraian Temuan &amp; Rekomendasi</th>
                        <th>Batas Waktu</th>
                        <th>Status</th>
                        <th class="text-end" style="width:130px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <span class="badge badge-code mb-1">TMN/2026/001</span>
                            <div class="fw-bold">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">Hakim Pratama</div>
                        </td>
                        <td>
                            <span class="badge badge-kelompok">C. Kompetensi</span>
                            <div class="fw-semibold mt-1">C.1 Ijazah S2 Magister Hukum</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Gelar S2 belum tercatat di data SIKEP pusat.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1" style="color:var(--ma-teal);"></i> Unggah SK Pencantuman Gelar &amp; scan ijazah asli.</div>
                        </td>
                        <td>
                            <span class="fw-semibold" style="color:var(--ma-danger);"><i class="bi bi-clock me-1"></i>25 Okt 2026</span>
                            <div class="small" style="color:var(--ma-danger);">Tersisa 7 Hari</div>
                        </td>
                        <td><span class="badge-status badge-belum">Belum</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 1) }}" class="btn btn-sm btn-teal">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <span class="badge badge-code mb-1">TMN/2026/002</span>
                            <div class="fw-bold">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">Pengelola Perkara</div>
                        </td>
                        <td>
                            <span class="badge badge-kelompok">B. Riwayat Kerja</span>
                            <div class="fw-semibold mt-1">B.3 SK Kenaikan Pangkat (III/a)</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">TMT Pangkat tertera berbeda dengan SK Pengangkatan.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1" style="color:var(--ma-teal);"></i> Koreksi TMT Pangkat di menu Riwayat Pangkat SIKEP.</div>
                        </td>
                        <td>
                            <span class="fw-semibold"><i class="bi bi-clock me-1"></i>28 Okt 2026</span>
                            <div class="small text-muted">Tersisa 10 Hari</div>
                        </td>
                        <td><span class="badge-status badge-proses">Dalam Proses</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 2) }}" class="btn btn-sm btn-teal">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <span class="badge badge-code mb-1">TMN/2026/003</span>
                            <div class="fw-bold">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">Panitera Pengganti</div>
                        </td>
                        <td>
                            <span class="badge badge-kelompok">A. Data Pokok</span>
                            <div class="fw-semibold mt-1">A.4 NIK &amp; Buku Nikah Pasangan</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">NIK istri terpotong 14 digit di sistem.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1" style="color:var(--ma-teal);"></i> Lengkapi 16 digit NIK dan lampirkan scan e-KTP.</div>
                        </td>
                        <td>
                            <span class="fw-semibold"><i class="bi bi-clock me-1"></i>30 Okt 2026</span>
                            <div class="small text-muted">Tersisa 12 Hari</div>
                        </td>
                        <td><span class="badge-status badge-selesai">Selesai</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 3) }}" class="btn btn-sm btn-outline-teal">
                                <i class="bi bi-eye me-1"></i> Lihat Status
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">4</td>
                        <td>
                            <span class="badge badge-code mb-1">TMN/2026/004</span>
                            <div class="fw-bold">Hendrawan, S.Kom.</div>
                            <div class="small text-muted">Pranata Komputer</div>
                        </td>
                        <td>
                            <span class="badge badge-kelompok">E. Lain-Lain</span>
                            <div class="small text-muted mt-1">E.4 Tanda Terima LHKASN</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Tanda terima lapor harta kekayaan tahun 2025 belum diunggah.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1" style="color:var(--ma-teal);"></i> Unggah bukti tanda terima pelaporan LHKASN.</div>
                        </td>
                        <td>
                            <span class="fw-semibold" style="color:var(--ma-danger);"><i class="bi bi-clock me-1"></i>22 Okt 2026</span>
                            <div class="small" style="color:var(--ma-danger);">Tersisa 4 Hari</div>
                        </td>
                        <td><span class="badge-status badge-belum">Belum</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 4) }}" class="btn btn-sm btn-teal">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">5</td>
                        <td>
                            <span class="badge badge-code mb-1">TMN/2026/005</span>
                            <div class="fw-bold">Dewi Lestari, S.E.</div>
                            <div class="small text-muted">Bendahara Harian</div>
                        </td>
                        <td>
                            <span class="badge badge-kelompok">D. Penilaian Kinerja</span>
                            <div class="fw-semibold mt-1">D.2 SPP 2025 Belum Diinput</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Surat Perintah Perjalanan dinas Juli 2025 belum dimasukkan.</div>
                            <div class="small text-muted mt-1"><i class="bi bi-arrow-return-right me-1" style="color:var(--ma-teal);"></i> Input SPP &amp; lampirkan scan bukti pengisian.</div>
                        </td>
                        <td>
                            <span class="fw-semibold" style="color:var(--ma-success);"><i class="bi bi-check2-all me-1"></i>Selesai 21 Okt</span>
                            <div class="small text-muted">Diverifikasi pimpinan</div>
                        </td>
                        <td><span class="badge-status badge-diverifikasi">Diverifikasi</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 5) }}" class="btn btn-sm btn-ghost">
                                <i class="bi bi-eye me-1"></i> Riwayat
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div style="display:flex; justify-content:space-between; align-items:center; padding:0.85rem 1rem; border-top:1px solid var(--ma-border);">
            <div class="small text-muted">Menampilkan 1 - 5 dari <strong>14</strong> temuan</div>
            <div class="d-flex gap-1">
                <button class="btn btn-sm btn-outline-teal" disabled><i class="bi bi-chevron-left"></i></button>
                <button class="btn btn-sm btn-teal">1</button>
                <button class="btn btn-sm btn-outline-teal">2</button>
                <button class="btn btn-sm btn-outline-teal">3</button>
                <button class="btn btn-sm btn-outline-teal"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>

</div>
@endsection

