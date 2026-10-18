@extends('layouts.app')

@section('title', 'Daftar Monitoring SIKEP')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Aktivitas Monitoring & Evaluasi Data SIKEP</h2>
            <p class="text-muted small mb-0">Pelaksanaan Checklist Parameter Kamus Data Kepegawaian Mahkamah Agung RI</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <a href="{{ route('monitoring.show', 3) }}" class="btn btn-ma-gold btn-sm d-flex align-items-center gap-2">
                <i class="bi bi-play-circle-fill"></i> Lanjutkan Monitoring Terakhir
            </a>
        </div>
    </div>

    <!-- Quick Stats Bar -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="p-3 bg-white border rounded-3 shadow-sm d-flex align-items-center gap-3">
                <div class="bg-primary bg-opacity-10 text-primary p-3 rounded-3 fs-4"><i class="bi bi-people"></i></div>
                <div>
                    <div class="text-muted small">Total Pegawai</div>
                    <div class="fs-4 fw-bold text-dark">48 Orang</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white border rounded-3 shadow-sm d-flex align-items-center gap-3">
                <div class="bg-success bg-opacity-10 text-success p-3 rounded-3 fs-4"><i class="bi bi-check-circle"></i></div>
                <div>
                    <div class="text-muted small">Sudah Selesai Dinilai</div>
                    <div class="fs-4 fw-bold text-success">36 Pegawai</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white border rounded-3 shadow-sm d-flex align-items-center gap-3">
                <div class="bg-warning bg-opacity-10 text-warning p-3 rounded-3 fs-4"><i class="bi bi-hourglass-split"></i></div>
                <div>
                    <div class="text-muted small">Sedang Berlangsung</div>
                    <div class="fs-4 fw-bold text-warning">8 Pegawai</div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="p-3 bg-white border rounded-3 shadow-sm d-flex align-items-center gap-3">
                <div class="bg-danger bg-opacity-10 text-danger p-3 rounded-3 fs-4"><i class="bi bi-clock-history"></i></div>
                <div>
                    <div class="text-muted small">Belum Dimonitor</div>
                    <div class="fs-4 fw-bold text-danger">4 Pegawai</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Monitoring Table -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold text-dark mb-0"><i class="bi bi-clipboard2-check text-primary me-2"></i>Status Pelaksanaan Monitoring Pegawai (Semester I 2026)</h6>
            <span class="badge bg-light text-muted border">35 Subkelompok Parameter</span>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Nomor Register</th>
                        <th>Nama Pegawai & NIP</th>
                        <th>Petugas Pemeriksa</th>
                        <th>Tanggal Terakhir</th>
                        <th>Hasil Parameter</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td><span class="badge bg-light text-dark border">MNV/2026/001</span></td>
                        <td>
                            <div class="fw-bold text-dark">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 198003112006041008 &bull; Panitera Pengganti</div>
                        </td>
                        <td>Admin Kepegawaian</td>
                        <td>15 Okt 2026</td>
                        <td>
                            <span class="badge badge-status badge-sesuai me-1">32 Sesuai</span>
                            <span class="badge badge-status badge-tidak-sesuai">1 Temuan</span>
                        </td>
                        <td><span class="badge badge-status badge-proses">Dalam Proses</span></td>
                        <td class="text-end">
                            <a href="{{ route('monitoring.show', 3) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square me-1"></i> Buka Form
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td><span class="badge bg-light text-dark border">MNV/2026/002</span></td>
                        <td>
                            <div class="fw-bold text-dark">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">NIP: 198504122011011003 &bull; Hakim Pratama</div>
                        </td>
                        <td>Admin Kepegawaian</td>
                        <td>14 Okt 2026</td>
                        <td>
                            <span class="badge badge-status badge-sesuai me-1">29 Sesuai</span>
                            <span class="badge badge-status badge-belum-lengkap">2 Temuan</span>
                        </td>
                        <td><span class="badge badge-status badge-belum">Butuh Tindak Lanjut</span></td>
                        <td class="text-end">
                            <a href="{{ route('monitoring.show', 2) }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil-square me-1"></i> Buka Form
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td><span class="badge bg-light text-dark border">MNV/2026/003</span></td>
                        <td>
                            <div class="fw-bold text-dark">Dr. H. Ridwan Mansyur, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 196205121987031001 &bull; Ketua Pengadilan</div>
                        </td>
                        <td>Kasubbag Kepegawaian</td>
                        <td>10 Okt 2026</td>
                        <td>
                            <span class="badge badge-status badge-sesuai me-1">35 Sesuai</span>
                            <span class="badge badge-status badge-tidak-berlaku">0 Temuan</span>
                        </td>
                        <td><span class="badge badge-status badge-diverifikasi">Selesai & Diverifikasi</span></td>
                        <td class="text-end">
                            <a href="{{ route('monitoring.show', 1) }}" class="btn btn-sm btn-outline-secondary">
                                <i class="bi bi-eye me-1"></i> Lihat Rekap
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
