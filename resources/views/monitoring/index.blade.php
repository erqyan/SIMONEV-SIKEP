@extends('layouts.app')

@section('title', 'Daftar Monitoring SIKEP')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Aktivitas Monitoring &amp; Evaluasi Data SIKEP</h2>
            <p class="text-muted small mb-0">Pelaksanaan Checklist Parameter Kamus Data Kepegawaian Mahkamah Agung RI</p>
        </div>
        <div class="mt-3 mt-md-0">
            <a href="{{ route('monitoring.show', 3) }}" class="btn btn-teal btn-sm d-inline-flex align-items-center gap-2">
                <i class="bi bi-play-circle-fill"></i> Lanjutkan Monitoring Terakhir
            </a>
        </div>
    </div>

    <!-- KPI Stats -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-md-3">
            <div class="card-stat h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="card-stat-icon bg-primary"><i class="bi bi-people"></i></div>
                    <div>
                        <div class="card-stat-title">Total Pegawai</div>
                        <div class="card-stat-value">48</div>
                        <div class="card-stat-sub">Orang ASN</div>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;"><div class="progress-bar bg-primary" style="width: 100%"></div></div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="card-stat-icon bg-success"><i class="bi bi-check-circle"></i></div>
                    <div>
                        <div class="card-stat-title">Sudah Selesai Dinilai</div>
                        <div class="card-stat-value text-success">36</div>
                        <div class="card-stat-sub">75% dari total</div>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;"><div class="progress-bar bg-success" style="width: 75%"></div></div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="card-stat-icon bg-warning"><i class="bi bi-hourglass-split"></i></div>
                    <div>
                        <div class="card-stat-title">Sedang Berlangsung</div>
                        <div class="card-stat-value">8</div>
                        <div class="card-stat-sub">Dalam proses</div>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;"><div class="progress-bar bg-warning" style="width: 17%"></div></div>
            </div>
        </div>
        <div class="col-6 col-md-3">
            <div class="card-stat h-100">
                <div class="d-flex align-items-center gap-3">
                    <div class="card-stat-icon bg-danger"><i class="bi bi-clock-history"></i></div>
                    <div>
                        <div class="card-stat-title">Belum Dimonitor</div>
                        <div class="card-stat-value text-danger">4</div>
                        <div class="card-stat-sub">Perlu dijadwalkan</div>
                    </div>
                </div>
                <div class="progress mt-3" style="height: 4px;"><div class="progress-bar bg-danger" style="width: 8%"></div></div>
            </div>
        </div>
    </div>

    <!-- Monitoring Table -->
    <div class="table-card">
        <!-- Toolbar -->
        <div class="table-toolbar">
            <div class="left">
                <span class="table-band-title" style="color: var(--ma-text-dark);">
                    <i class="bi bi-clipboard2-check me-2" style="color: var(--ma-teal);"></i><span style="font-weight: 700; font-size: 1rem;">Status Pelaksanaan Monitoring Pegawai</span>
                </span>
                <span class="period-pill ms-2">Semester I 2026</span>
            </div>
            <div class="right d-flex align-items-center gap-2">
                <span class="badge badge-status badge-belum-lengkap"><i class="bi bi-info-circle"></i> 35 Subkelompok Parameter</span>
                <a href="{{ route('monitoring.show', 3) }}" class="btn btn-teal btn-sm">
                    <i class="bi bi-play-fill me-1"></i> Lanjut Monitoring
                </a>
            </div>
        </div>

        <!-- Filter Row -->
        <div style="padding: 0.85rem 1.25rem; border-bottom: 1px solid var(--ma-border); background: var(--ma-bg);">
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Cari nama pegawai, NIP, atau nomor register...">
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="form-select form-select-sm">
                        <option value="">Semua Unit Kerja</option>
                        <option>Kepaniteraan</option>
                        <option>Kesekretariatan</option>
                        <option>Hakim / Pimpinan</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select form-select-sm">
                        <option value="">Semua Status</option>
                        <option>Selesai &amp; Diverifikasi</option>
                        <option>Dalam Proses</option>
                        <option>Butuh Tindak Lanjut</option>
                    </select>
                </div>
                <div class="col-md-2 d-flex align-items-end">
                    <button class="btn btn-sm btn-outline-teal w-100">
                        <i class="bi bi-funnel me-1"></i> Terapkan
                    </button>
                </div>
            </div>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-custom table-striped mb-0 align-middle">
                <thead>
                    <tr>
                        <th style="width: 45px;" class="text-center">No</th>
                        <th>Nomor Register</th>
                        <th>Nama Pegawai &amp; NIP</th>
                        <th>Petugas Pemeriksa</th>
                        <th>Tanggal Terakhir</th>
                        <th>Hasil Parameter</th>
                        <th>Status</th>
                        <th class="text-end" style="width: 170px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $rows = [
                            [
                                'no' => 1, 'reg' => 'MNV/2026/001', 'id' => 3,
                                'nama' => 'Budi Santoso, S.H., M.H.',
                                'nip' => '198003112006041008',
                                'jabatan' => 'Panitera Pengganti',
                                'petugas' => 'Admin Kepegawaian',
                                'tanggal' => '15 Okt 2026',
                                'sesuai' => 32, 'temuan' => 1,
                                'status' => 'proses', 'statusLabel' => 'Dalam Proses',
                                'action' => 'Buka Form', 'icon' => 'bi-pencil-square',
                                'temuanClass' => 'badge-tidak-sesuai',
                            ],
                            [
                                'no' => 2, 'reg' => 'MNV/2026/002', 'id' => 2,
                                'nama' => 'Ahmad Fauzi, S.H.',
                                'nip' => '198504122011011003',
                                'jabatan' => 'Hakim Pratama',
                                'petugas' => 'Admin Kepegawaian',
                                'tanggal' => '14 Okt 2026',
                                'sesuai' => 29, 'temuan' => 2,
                                'status' => 'belum', 'statusLabel' => 'Butuh Tindak Lanjut',
                                'action' => 'Buka Form', 'icon' => 'bi-pencil-square',
                                'temuanClass' => 'badge-belum-lengkap',
                            ],
                            [
                                'no' => 3, 'reg' => 'MNV/2026/003', 'id' => 1,
                                'nama' => 'Dr. H. Ridwan Mansyur, S.H., M.H.',
                                'nip' => '196205121987031001',
                                'jabatan' => 'Ketua Pengadilan',
                                'petugas' => 'Kasubbag Kepegawaian',
                                'tanggal' => '10 Okt 2026',
                                'sesuai' => 35, 'temuan' => 0,
                                'status' => 'diverifikasi', 'statusLabel' => 'Selesai &amp; Diverifikasi',
                                'action' => 'Lihat Rekap', 'icon' => 'bi-eye',
                                'temuanClass' => 'badge-tidak-berlaku',
                            ],
                        ];
                    @endphp

                    @foreach($rows as $r)
                    <tr>
                        <td class="text-center text-muted">{{ $r['no'] }}</td>
                        <td><span class="badge bg-light text-dark border font-monospace">{{ $r['reg'] }}</span></td>
                        <td>
                            <div class="fw-semibold text-dark">{{ $r['nama'] }}</div>
                            <div class="small text-muted">NIP: {{ $r['nip'] }} &bull; {{ $r['jabatan'] }}</div>
                        </td>
                        <td>{{ $r['petugas'] }}</td>
                        <td>{{ $r['tanggal'] }}</td>
                        <td>
                            <span class="badge badge-status badge-sesuai">{{ $r['sesuai'] }} Sesuai</span>
                            <span class="badge badge-status {{ $r['temuanClass'] }}">{{ $r['temuan'] }} Temuan</span>
                        </td>
                        <td>
                            @if($r['status'] === 'diverifikasi')
                                <span class="badge badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> {{ $r['statusLabel'] }}</span>
                            @elseif($r['status'] === 'proses')
                                <span class="badge badge-status badge-proses"><i class="bi bi-hourglass-split"></i> {{ $r['statusLabel'] }}</span>
                            @else
                                <span class="badge badge-status badge-belum"><i class="bi bi-exclamation-circle"></i> {{ $r['statusLabel'] }}</span>
                            @endif
                        </td>
                        <td class="text-end">
                            <a href="{{ route('monitoring.show', $r['id']) }}" class="btn btn-sm {{ $r['status'] === 'diverifikasi' ? 'btn-outline-teal' : 'btn-teal' }}">
                                <i class="bi {{ $r['icon'] }} me-1"></i> {{ $r['action'] }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <div style="padding: 0.85rem 1.25rem; border-top: 1px solid var(--ma-border); background: #FAFBFC;" class="d-flex justify-content-between align-items-center small text-muted flex-wrap gap-2">
            <div>Menampilkan <strong>3</strong> dari <strong>48</strong> pelaksanaan monitoring</div>
            <nav aria-label="Page navigation">
                <ul class="pagination pagination-sm mb-0">
                    <li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
    </div>

</div>
@endsection
