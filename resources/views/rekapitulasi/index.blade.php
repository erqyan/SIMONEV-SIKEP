@extends('layouts.app')

@section('title', 'Rekapitulasi Data Monitoring')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Matriks Rekapitulasi Monitoring SIKEP</h2>
            <p class="text-muted small mb-0">Tabulasi Komparasi Tingkat Kepatuhan Data Kepegawaian Seluruh Aparatur Satker</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <button class="btn btn-outline-success btn-sm" onclick="alert('Mengekspor matriks ke format Excel (.xlsx)...');">
                <i class="bi bi-file-earmark-excel me-1"></i> Ekspor Excel
            </button>
            <a href="{{ route('laporan.index') }}" class="btn btn-ma-navy btn-sm">
                <i class="bi bi-file-earmark-pdf me-1"></i> Buka Laporan Monev
            </a>
        </div>
    </div>

    <!-- Summary Box -->
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 text-center">
                <div class="text-muted small fw-semibold">RATA-RATA KEPATUHAN</div>
                <div class="fs-3 fw-bold text-success mt-1">81.8%</div>
                <div class="small text-muted">Standar KMA: 85.0%</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 text-center">
                <div class="text-muted small fw-semibold">PEGAWAI MEMENUHI STANDAR</div>
                <div class="fs-3 fw-bold text-primary mt-1">29 Pegawai</div>
                <div class="small text-muted">&ge; 85% Kepatuhan</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 text-center">
                <div class="text-muted small fw-semibold">PERLU PEMUTAKHIRAN</div>
                <div class="fs-3 fw-bold text-warning mt-1">15 Pegawai</div>
                <div class="small text-muted">70% - 84% Kepatuhan</div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-0 shadow-sm rounded-3 p-3 text-center">
                <div class="text-muted small fw-semibold">ATENSI KHUSUS</div>
                <div class="fs-3 fw-bold text-danger mt-1">4 Pegawai</div>
                <div class="small text-muted">&lt; 70% Kepatuhan</div>
            </div>
        </div>
    </div>

    <!-- Matrix Table -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold text-dark mb-0"><i class="bi bi-table text-primary me-2"></i>Matriks Capaian Kepatuhan 5 Kelompok Data</h6>
            <div class="small text-muted">Periode: <strong>Semester I 2026</strong></div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-custom mb-0 text-center">
                <thead>
                    <tr>
                        <th style="width: 45px;" rowspan="2" class="align-middle">No</th>
                        <th rowspan="2" class="text-start align-middle">Nama Pegawai & NIP</th>
                        <th colspan="5" class="bg-light">Persentase Kepatuhan per Kelompok Data</th>
                        <th rowspan="2" class="align-middle">Total Skor</th>
                        <th rowspan="2" class="align-middle">Status Akhir</th>
                    </tr>
                    <tr class="small">
                        <th style="width: 100px;">A. Data Pokok</th>
                        <th style="width: 100px;">B. Riwayat Kerja</th>
                        <th style="width: 100px;">C. Kompetensi</th>
                        <th style="width: 100px;">D. Penilaian</th>
                        <th style="width: 100px;">E. Lain-Lain</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td class="text-start">
                            <div class="fw-bold text-dark">Dr. H. Ridwan Mansyur, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 196205121987031001 &bull; Ketua</div>
                        </td>
                        <td><span class="text-success fw-bold">100%</span></td>
                        <td><span class="text-success fw-bold">95%</span></td>
                        <td><span class="text-success fw-bold">95%</span></td>
                        <td><span class="text-success fw-bold">90%</span></td>
                        <td><span class="text-success fw-bold">100%</span></td>
                        <td><span class="badge bg-success fs-6">96.0%</span></td>
                        <td><span class="badge badge-status badge-diverifikasi">Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td class="text-start">
                            <div class="fw-bold text-dark">Dewi Lestari, S.E.</div>
                            <div class="small text-muted">NIP: 198811252014022003 &bull; Kasubbag Ortala</div>
                        </td>
                        <td><span class="text-success fw-bold">100%</span></td>
                        <td><span class="text-success fw-bold">100%</span></td>
                        <td><span class="text-success fw-bold">100%</span></td>
                        <td><span class="text-success fw-bold">100%</span></td>
                        <td><span class="text-success fw-bold">100%</span></td>
                        <td><span class="badge bg-success fs-6">100%</span></td>
                        <td><span class="badge badge-status badge-diverifikasi">Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td class="text-start">
                            <div class="fw-bold text-dark">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 198003112006041008 &bull; Panitera Pengganti</div>
                        </td>
                        <td><span class="text-warning fw-bold">88%</span></td>
                        <td><span class="text-success fw-bold">90%</span></td>
                        <td><span class="text-success fw-bold">90%</span></td>
                        <td><span class="text-success fw-bold">85%</span></td>
                        <td><span class="text-success fw-bold">90%</span></td>
                        <td><span class="badge bg-success fs-6">88.5%</span></td>
                        <td><span class="badge badge-status badge-proses">Tindak Lanjut</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">4</td>
                        <td class="text-start">
                            <div class="fw-bold text-dark">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">NIP: 198504122011011003 &bull; Hakim Pratama</div>
                        </td>
                        <td><span class="text-success fw-bold">95%</span></td>
                        <td><span class="text-warning fw-bold">80%</span></td>
                        <td><span class="text-danger fw-bold">65%</span></td>
                        <td><span class="text-success fw-bold">85%</span></td>
                        <td><span class="text-success fw-bold">85%</span></td>
                        <td><span class="badge bg-warning text-dark fs-6">82.0%</span></td>
                        <td><span class="badge badge-status badge-proses">Tindak Lanjut</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">5</td>
                        <td class="text-start">
                            <div class="fw-bold text-dark">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">NIP: 199009182015032004 &bull; Pengelola Perkara</div>
                        </td>
                        <td><span class="text-success fw-bold">90%</span></td>
                        <td><span class="text-danger fw-bold">60%</span></td>
                        <td><span class="text-warning fw-bold">75%</span></td>
                        <td><span class="text-warning fw-bold">70%</span></td>
                        <td><span class="text-warning fw-bold">75%</span></td>
                        <td><span class="badge bg-warning text-dark fs-6">74.0%</span></td>
                        <td><span class="badge badge-status badge-proses">Tindak Lanjut</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">6</td>
                        <td class="text-start">
                            <div class="fw-bold text-dark">Hendrawan, S.Kom.</div>
                            <div class="small text-muted">NIP: 199305142019031005 &bull; Pranata Komputer</div>
                        </td>
                        <td><span class="text-warning fw-bold">70%</span></td>
                        <td><span class="text-danger fw-bold">55%</span></td>
                        <td><span class="text-danger fw-bold">60%</span></td>
                        <td><span class="text-danger fw-bold">50%</span></td>
                        <td><span class="text-warning fw-bold">65%</span></td>
                        <td><span class="badge bg-danger fs-6">60.0%</span></td>
                        <td><span class="badge badge-status badge-belum">Belum Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
