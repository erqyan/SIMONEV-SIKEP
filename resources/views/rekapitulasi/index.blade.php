@extends('layouts.app')

@section('title', 'Rekapitulasi Data Monitoring')

@section('content')
<div class="container-fluid px-0">

    <!-- Header + Toolbar -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Matriks Rekapitulasi Monitoring SIKEP</h2>
                <small class="text-muted">Tabulasi komparasi tingkat kepatuhan data kepegawaian seluruh aparatur satker</small>
            </div>
            <div class="right">
                <button class="btn-tool" onclick="alert('Mengekspor matriks ke format Excel (.xlsx)...');">
                    <i class="bi bi-file-earmark-excel"></i> Ekspor Excel
                </button>
                <a href="{{ route('laporan.index') }}" class="btn-tool" style="color:var(--ma-teal); border-color:var(--ma-teal);">
                    <i class="bi bi-file-earmark-pdf"></i> Buka Laporan Monev
                </a>
                <span class="period-pill">Semester I 2026</span>
            </div>
        </div>
    </div>

    <!-- KPI summary -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Rata-Rata Kepatuhan</div>
                        <div class="card-stat-value text-success">81.8%</div>
                        <div class="card-stat-sub">Standar KMA: 85.0%</div>
                    </div>
                    <div class="card-stat-icon bg-success"><i class="bi bi-percent"></i></div>
                </div>
                <div class="card-stat-progress" style="width:81.8%; background:var(--ma-success);"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Pegawai Memenuhi Standar</div>
                        <div class="card-stat-value">29</div>
                        <div class="card-stat-sub">&ge; 85% kepatuhan</div>
                    </div>
                    <div class="card-stat-icon bg-primary"><i class="bi bi-check2-all"></i></div>
                </div>
                <div class="card-stat-progress" style="width:60%;"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Perlu Pemutakhiran</div>
                        <div class="card-stat-value" style="color:var(--ma-warning);">15</div>
                        <div class="card-stat-sub">70% &ndash; 84% kepatuhan</div>
                    </div>
                    <div class="card-stat-icon bg-warning"><i class="bi bi-arrow-repeat"></i></div>
                </div>
                <div class="card-stat-progress" style="width:31%; background:var(--ma-warning);"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Atensi Khusus</div>
                        <div class="card-stat-value text-danger">4</div>
                        <div class="card-stat-sub">&lt; 70% kepatuhan</div>
                    </div>
                    <div class="card-stat-icon bg-danger"><i class="bi bi-exclamation-octagon-fill"></i></div>
                </div>
                <div class="card-stat-progress" style="width:8%; background:var(--ma-danger);"></div>
            </div>
        </div>
    </div>

    <!-- Matriks tabel -->
    <div class="table-card">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h6 class="fw-bold mb-0"><i class="bi bi-table me-2" style="color:var(--ma-teal);"></i>Matriks Capaian Kepatuhan 5 Kelompok Data</h6>
            </div>
            <div class="right">
                <span class="text-muted small">Periode: <strong style="color:var(--ma-teal);">Semester I 2026</strong></span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-custom table-striped mb-0 text-center">
                <thead>
                    <tr>
                        <th style="width:45px;" rowspan="2" class="align-middle text-start">No</th>
                        <th rowspan="2" class="text-start align-middle">Nama Pegawai &amp; NIP</th>
                        <th colspan="5" style="background:#FEF3C7; color:var(--ma-teal-dark);">Persentase Kepatuhan per Kelompok Data</th>
                        <th rowspan="2" class="align-middle">Total Skor</th>
                        <th rowspan="2" class="align-middle">Status Akhir</th>
                    </tr>
                    <tr>
                        <th>A. Data Pokok</th>
                        <th>B. Riwayat Kerja</th>
                        <th>C. Kompetensi</th>
                        <th>D. Penilaian</th>
                        <th>E. Lain-Lain</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted text-start">1</td>
                        <td class="text-start">
                            <div class="fw-bold">Dr. H. Ridwan Mansyur, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 196205121987031001 &bull; Ketua</div>
                        </td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">100%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">95%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">95%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">90%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">100%</span></td>
                        <td><span class="badge" style="background:#ECFDF5; color:#047857; border:1px solid #6EE7B7; font-size:0.8rem;">96.0%</span></td>
                        <td><span class="badge-status badge-diverifikasi">Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted text-start">2</td>
                        <td class="text-start">
                            <div class="fw-bold">Dewi Lestari, S.E.</div>
                            <div class="small text-muted">NIP: 198811252014022003 &bull; Kasubbag Ortala</div>
                        </td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">100%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">100%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">100%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">100%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">100%</span></td>
                        <td><span class="badge" style="background:#ECFDF5; color:#047857; border:1px solid #6EE7B7; font-size:0.8rem;">100%</span></td>
                        <td><span class="badge-status badge-diverifikasi">Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted text-start">3</td>
                        <td class="text-start">
                            <div class="fw-bold">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 198003112006041008 &bull; Panitera Pengganti</div>
                        </td>
                        <td><span style="color:var(--ma-warning);" class="fw-bold">88%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">90%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">90%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">85%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">90%</span></td>
                        <td><span class="badge" style="background:#ECFDF5; color:#047857; border:1px solid #6EE7B7; font-size:0.8rem;">88.5%</span></td>
                        <td><span class="badge-status badge-proses">Tindak Lanjut</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted text-start">4</td>
                        <td class="text-start">
                            <div class="fw-bold">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">NIP: 198504122011011003 &bull; Hakim Pratama</div>
                        </td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">95%</span></td>
                        <td><span style="color:var(--ma-warning);" class="fw-bold">80%</span></td>
                        <td><span style="color:var(--ma-danger);" class="fw-bold">65%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">85%</span></td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">85%</span></td>
                        <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D; font-size:0.8rem;">82.0%</span></td>
                        <td><span class="badge-status badge-proses">Tindak Lanjut</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted text-start">5</td>
                        <td class="text-start">
                            <div class="fw-bold">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">NIP: 199009182015032004 &bull; Pengelola Perkara</div>
                        </td>
                        <td><span style="color:var(--ma-success);" class="fw-bold">90%</span></td>
                        <td><span style="color:var(--ma-danger);" class="fw-bold">60%</span></td>
                        <td><span style="color:var(--ma-warning);" class="fw-bold">75%</span></td>
                        <td><span style="color:var(--ma-warning);" class="fw-bold">70%</span></td>
                        <td><span style="color:var(--ma-warning);" class="fw-bold">75%</span></td>
                        <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D; font-size:0.8rem;">74.0%</span></td>
                        <td><span class="badge-status badge-proses">Tindak Lanjut</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted text-start">6</td>
                        <td class="text-start">
                            <div class="fw-bold">Hendrawan, S.Kom.</div>
                            <div class="small text-muted">NIP: 199305142019031005 &bull; Pranata Komputer</div>
                        </td>
                        <td><span style="color:var(--ma-warning);" class="fw-bold">70%</span></td>
                        <td><span style="color:var(--ma-danger);" class="fw-bold">55%</span></td>
                        <td><span style="color:var(--ma-danger);" class="fw-bold">60%</span></td>
                        <td><span style="color:var(--ma-danger);" class="fw-bold">50%</span></td>
                        <td><span style="color:var(--ma-warning);" class="fw-bold">65%</span></td>
                        <td><span class="badge" style="background:#FEE2E2; color:#B91C1C; border:1px solid #FECACA; font-size:0.8rem;">60.0%</span></td>
                        <td><span class="badge-status badge-belum">Belum Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Legend -->
        <div style="display:flex; gap:1.25rem; flex-wrap:wrap; padding:0.85rem 1rem; border-top:1px solid var(--ma-border); font-size:0.75rem; color:var(--ma-text-muted);">
            <span><span style="display:inline-block; width:10px; height:10px; border-radius:2px; background:#6EE7B7; me-1"></span>&ge; 85% Patuh</span>
            <span><span style="display:inline-block; width:10px; height:10px; border-radius:2px; background:#FCD34D;"></span>70&ndash;84% Perlu Pemutakhiran</span>
            <span><span style="display:inline-block; width:10px; height:10px; border-radius:2px; background:#FECACA;"></span>&lt; 70% Atensi Khusus</span>
        </div>
    </div>

</div>
@endsection
