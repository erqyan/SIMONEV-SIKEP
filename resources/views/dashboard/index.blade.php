@extends('layouts.app')

@section('title', 'Dashboard Monitoring & Evaluasi SIKEP')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Dashboard Eksekutif & Ringkasan KPI</h2>
            <p class="text-muted small mb-0">Pemantauan Real-Time Kualitas, Validitas, dan Kepatuhan Data Kepegawaian SIKEP</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <a href="{{ route('monitoring.index') }}" class="btn btn-ma-gold btn-sm d-flex align-items-center gap-2">
                <i class="bi bi-plus-circle-fill"></i> Mulai Monitoring Pegawai
            </a>
            <a href="{{ route('laporan.index') }}" class="btn btn-outline-secondary btn-sm d-flex align-items-center gap-2">
                <i class="bi bi-file-earmark-pdf"></i> Ekspor Laporan Monev
            </a>
        </div>
    </div>

    <!-- 4 KPI Stat Cards -->
    <div class="row g-3 mb-4">
        <!-- Stat 1: Total Pegawai -->
        <div class="col-sm-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="card-stat-title">Total Pegawai</div>
                        <div class="card-stat-value">48</div>
                        <div class="card-stat-sub">
                            <span class="text-dark fw-semibold">42 PNS</span> &bull; <span class="text-muted">6 PPPK/Honorer</span>
                        </div>
                    </div>
                    <div class="card-stat-icon bg-primary bg-opacity-10 text-primary">
                        <i class="bi bi-people-fill"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%"></div>
                </div>
            </div>
        </div>

        <!-- Stat 2: Telah Dimonitor -->
        <div class="col-sm-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="card-stat-title">Telah Dimonitor</div>
                        <div class="card-stat-value text-success">36 <span class="fs-6 text-muted fw-normal">/ 48</span></div>
                        <div class="card-stat-sub text-success">
                            <i class="bi bi-graph-up-arrow"></i> <strong>75.0%</strong> Capaian Semester I
                        </div>
                    </div>
                    <div class="card-stat-icon bg-success bg-opacity-10 text-success">
                        <i class="bi bi-clipboard-check-fill"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 75%"></div>
                </div>
            </div>
        </div>

        <!-- Stat 3: Temuan Aktif -->
        <div class="col-sm-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="card-stat-title">Temuan Butuh Aksi</div>
                        <div class="card-stat-value text-danger">14</div>
                        <div class="card-stat-sub text-danger">
                            <i class="bi bi-exclamation-circle-fill"></i> <strong>4</strong> Kritis &bull; 10 Dalam Proses
                        </div>
                    </div>
                    <div class="card-stat-icon bg-danger bg-opacity-10 text-danger">
                        <i class="bi bi-exclamation-triangle-fill"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 35%"></div>
                </div>
            </div>
        </div>

        <!-- Stat 4: Temuan Selesai & Diverifikasi -->
        <div class="col-sm-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <div class="card-stat-title">Temuan Selesai</div>
                        <div class="card-stat-value text-primary">28</div>
                        <div class="card-stat-sub text-primary">
                            <i class="bi bi-patch-check-fill"></i> <strong>23</strong> Terverifikasi &bull; 5 Menunggu Review
                        </div>
                    </div>
                    <div class="card-stat-icon bg-info bg-opacity-10 text-info">
                        <i class="bi bi-check2-all"></i>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 66.7%"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row g-3 mb-4">
        <!-- Chart 1: Kepatuhan per 5 Kelompok -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-3 h-100">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fw-bold text-dark mb-0"><i class="bi bi-bar-chart-fill text-primary me-2"></i>Persentase Kelengkapan Data SIKEP per Kelompok</h6>
                        <small class="text-muted">Berdasarkan 5 Pilar Master Kamus Monitoring</small>
                    </div>
                    <span class="badge bg-light text-dark border">Rata-rata: <strong>81.8%</strong></span>
                </div>
                <div class="card-body">
                    <canvas id="kelompokChart" height="230"></canvas>
                </div>
                <div class="card-footer bg-light bg-opacity-50 border-top py-2 small d-flex justify-content-between text-muted">
                    <span>Target Standar Mahkamah Agung: &ge; 85%</span>
                    <a href="{{ route('kamus.index') }}" class="text-decoration-none">Lihat Matriks Kamus &rarr;</a>
                </div>
            </div>
        </div>

        <!-- Chart 2: Status Temuan & Tren -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-3 h-100">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fw-bold text-dark mb-0"><i class="bi bi-pie-chart-fill text-warning me-2"></i>Komposisi Status Tindak Lanjut</h6>
                        <small class="text-muted">Total 42 Catatan Temuan Periode Ini</small>
                    </div>
                </div>
                <div class="card-body d-flex flex-column justify-content-center">
                    <div style="max-height: 210px;" class="d-flex justify-content-center">
                        <canvas id="statusChart"></canvas>
                    </div>
                    <div class="mt-3 pt-2 border-top small text-center text-muted">
                        <span class="badge badge-status badge-diverifikasi me-1">Diverifikasi: 23</span>
                        <span class="badge badge-status badge-proses me-1">Proses: 10</span>
                        <span class="badge badge-status badge-belum">Belum Ditindak: 4</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Urgent Action Items Table -->
    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
            <div>
                <h6 class="fw-bold text-dark mb-0"><i class="bi bi-bell-fill text-danger me-2"></i>Daftar Temuan Membutuhkan Tindak Lanjut Segera</h6>
                <small class="text-muted">Temuan berstatus belum selesai atau mendekati batas waktu</small>
            </div>
            <a href="{{ route('temuan.index') }}" class="btn btn-sm btn-outline-primary">
                Lihat Semua Temuan (14) &rarr;
            </a>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width: 50px;">No</th>
                        <th>Pegawai</th>
                        <th>Kelompok / Subkelompok</th>
                        <th>Parameter & Uraian Masalah</th>
                        <th>Batas Waktu</th>
                        <th>Urgensi</th>
                        <th>Status</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <div class="fw-bold text-dark">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">NIP: 198504122011011003 &bull; Hakim Pratama</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">C. Pengembangan Kompetensi</span>
                            <div class="small text-muted mt-1">C.1 Pendidikan Formal</div>
                        </td>
                        <td>
                            <div class="fw-semibold text-dark">Ijazah S2 Magister Hukum</div>
                            <div class="small text-muted">SK Pencantuman Gelar & Ijazah S2 belum diunggah ke SIKEP</div>
                        </td>
                        <td>
                            <span class="text-danger fw-semibold"><i class="bi bi-clock me-1"></i>25 Okt 2026</span>
                            <div class="small text-danger">Sisa 7 Hari</div>
                        </td>
                        <td><span class="badge bg-danger">Tinggi</span></td>
                        <td><span class="badge badge-status badge-belum">Belum Ditindak</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 1) }}" class="btn btn-sm btn-primary py-1 px-2">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <div class="fw-bold text-dark">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">NIP: 199009182015032004 &bull; Pengelola Perkara</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">B. Riwayat Pekerjaan</span>
                            <div class="small text-muted mt-1">B.3 Pangkat/Golongan</div>
                        </td>
                        <td>
                            <div class="fw-semibold text-dark">SK Kenaikan Pangkat Penata Muda (III/a)</div>
                            <div class="small text-muted">TMT Pangkat tertera pada SIKEP berbeda 1 bulan dibanding SK fisik</div>
                        </td>
                        <td>
                            <span class="text-dark"><i class="bi bi-clock me-1"></i>28 Okt 2026</span>
                            <div class="small text-muted">Sisa 10 Hari</div>
                        </td>
                        <td><span class="badge bg-warning text-dark">Sedang</span></td>
                        <td><span class="badge badge-status badge-proses">Dalam Proses</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 2) }}" class="btn btn-sm btn-primary py-1 px-2">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <div class="fw-bold text-dark">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 198003112006041008 &bull; Panitera Pengganti</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">A. Data Pokok</span>
                            <div class="small text-muted mt-1">A.4 Pasangan</div>
                        </td>
                        <td>
                            <div class="fw-semibold text-dark">Buku Nikah / NIK Pasangan</div>
                            <div class="small text-muted">NIK istri belum diinput dan scan buku nikah belum dilampirkan</div>
                        </td>
                        <td>
                            <span class="text-dark"><i class="bi bi-clock me-1"></i>30 Okt 2026</span>
                            <div class="small text-muted">Sisa 12 Hari</div>
                        </td>
                        <td><span class="badge bg-info text-white">Rendah</span></td>
                        <td><span class="badge badge-status badge-proses">Dalam Proses</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 3) }}" class="btn btn-sm btn-primary py-1 px-2">
                                <i class="bi bi-pencil-square me-1"></i> Tindak Lanjut
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">4</td>
                        <td>
                            <div class="fw-bold text-dark">Hendrawan, S.Kom.</div>
                            <div class="small text-muted">NIP: 199305142019031005 &bull; Pranata Komputer</div>
                        </td>
                        <td>
                            <span class="badge bg-light text-primary border">E. Lain-Lain</span>
                            <div class="small text-muted mt-1">E.4 LHKPN / LHKASN</div>
                        </td>
                        <td>
                            <div class="fw-semibold text-dark">Tanda Terima LHKASN Tahun 2025</div>
                            <div class="small text-muted">Bukti pelaporan belum diunggah ke menu pelaporan harta kekayaan</div>
                        </td>
                        <td>
                            <span class="text-danger fw-semibold"><i class="bi bi-clock me-1"></i>22 Okt 2026</span>
                            <div class="small text-danger">Sisa 4 Hari</div>
                        </td>
                        <td><span class="badge bg-danger">Tinggi</span></td>
                        <td><span class="badge badge-status badge-belum">Belum Ditindak</span></td>
                        <td class="text-end">
                            <a href="{{ route('temuan.show', 4) }}" class="btn btn-sm btn-primary py-1 px-2">
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

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function() {
    // 1. Chart Kepatuhan Kelompok
    const ctxKelompok = document.getElementById('kelompokChart').getContext('2d');
    new Chart(ctxKelompok, {
        type: 'bar',
        data: {
            labels: ['A. Data Pokok', 'B. Riwayat Kerja', 'C. Kompetensi', 'D. Penilaian Kinerja', 'E. Lain-Lain'],
            datasets: [
                {
                    label: 'Capaian Valid (%)',
                    data: [92, 78, 85, 64, 90],
                    backgroundColor: '#1E3A8A',
                    borderRadius: 6,
                    barPercentage: 0.6
                },
                {
                    label: 'Target Standar MA (%)',
                    data: [85, 85, 85, 85, 85],
                    type: 'line',
                    borderColor: '#D97706',
                    borderWidth: 2,
                    borderDash: [5, 5],
                    fill: false,
                    pointRadius: 0
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                y: {
                    min: 0,
                    max: 100,
                    ticks: { callback: v => v + '%' }
                }
            },
            plugins: {
                legend: { position: 'top' },
                tooltip: { callbacks: { label: ctx => ctx.dataset.label + ': ' + ctx.raw + '%' } }
            }
        }
    });

    // 2. Chart Status Temuan
    const ctxStatus = document.getElementById('statusChart').getContext('2d');
    new Chart(ctxStatus, {
        type: 'doughnut',
        data: {
            labels: ['Diverifikasi (23)', 'Dalam Proses (10)', 'Menunggu Review (5)', 'Belum Ditindak (4)'],
            datasets: [{
                data: [23, 10, 5, 4],
                backgroundColor: ['#10B981', '#2563EB', '#F59E0B', '#EF4444'],
                borderWidth: 2,
                borderColor: '#FFFFFF'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { position: 'bottom', labels: { boxWidth: 12, font: { size: 11 } } }
            },
            cutout: '68%'
        }
    });
});
</script>
@endpush
