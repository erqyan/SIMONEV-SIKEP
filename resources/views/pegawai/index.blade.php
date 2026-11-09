@extends('layouts.app')

@section('title', 'Master Data Pegawai')

@section('content')
<!-- Table Card -->
<div class="table-card mb-4">
    <!-- Toolbar -->
    <div class="table-toolbar">
        <div class="left">
            <span class="table-band-title" style="color: var(--ma-text-dark);">
                <i class="bi bi-people me-2" style="color: var(--ma-teal);"></i><span style="font-weight: 700; font-size: 1rem;">Master Data Pegawai</span>
            </span>
            <span class="table-band-sub" style="font-size: 0.72rem; color: var(--ma-text-muted);">Daftar Aparatur Sipil Negara &amp; Rekapitulasi Progres Monitoring Periode Ini</span>
        </div>
        <div class="right d-flex align-items-center gap-2">
            <button class="btn-tool" onclick="alert('Sinkronisasi data master pegawai dengan SIKEP Mahkamah Agung berhasil dilakukan.');">
                <i class="bi bi-arrow-repeat"></i> Sinkronisasi SIKEP
            </button>
            <button class="btn btn-teal btn-sm" data-bs-toggle="modal" data-bs-target="#modalTambahPegawai">
                <i class="bi bi-person-plus-fill me-1"></i> Tambah Pegawai
            </button>
        </div>
    </div>

    <!-- Filter Row -->
    <div style="padding: 0.85rem 1.25rem; border-bottom: 1px solid var(--ma-border); background: var(--ma-bg);">
        <div class="row g-2">
            <div class="col-md-4">
                <div class="input-group input-group-sm">
                    <span class="input-group-text bg-white"><i class="bi bi-search"></i></span>
                    <input type="text" class="form-control" placeholder="Cari nama pegawai atau NIP 18 digit...">
                </div>
            </div>
            <div class="col-md-3">
                <select class="form-select form-select-sm">
                    <option value="">Semua Unit Kerja / Bagian</option>
                    <option value="kepaniteraan">Kepaniteraan</option>
                    <option value="kesekretariatan">Kesekretariatan</option>
                    <option value="hakim">Hakim / Pimpinan</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select form-select-sm">
                    <option value="">Semua Status Monitoring</option>
                    <option value="sudah">Telah Dimonitor (Selesai)</option>
                    <option value="proses">Dalam Pemeriksaan</option>
                    <option value="belum">Belum Dimonitor</option>
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
                    <th>Identitas Pegawai</th>
                    <th>Jabatan &amp; Unit Kerja</th>
                    <th>Pangkat / Golongan</th>
                    <th>Status SIKEP</th>
                    <th>Skor Kepatuhan</th>
                    <th class="text-end" style="width: 140px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $pegawaiList = [
                        [
                            'id' => 1,
                            'nama' => 'Dr. H. Ridwan Mansyur, S.H., M.H.',
                            'nip' => '196205121987031001',
                            'jabatan' => 'Ketua Pengadilan',
                            'unit' => 'Pimpinan',
                            'gol' => 'Pembina Utama (IV/e)',
                            'status_monev' => 'diverifikasi',
                            'kepatuhan' => 96,
                            'temuan' => 0
                        ],
                        [
                            'id' => 2,
                            'nama' => 'Ahmad Fauzi, S.H.',
                            'nip' => '198504122011011003',
                            'jabatan' => 'Hakim Pratama',
                            'unit' => 'Kamar Pidana',
                            'gol' => 'Pembina (IV/a)',
                            'status_monev' => 'proses',
                            'kepatuhan' => 82,
                            'temuan' => 2
                        ],
                        [
                            'id' => 3,
                            'nama' => 'Budi Santoso, S.H., M.H.',
                            'nip' => '198003112006041008',
                            'jabatan' => 'Panitera Pengganti',
                            'unit' => 'Kepaniteraan Perdata',
                            'gol' => 'Pembina (IV/a)',
                            'status_monev' => 'proses',
                            'kepatuhan' => 88,
                            'temuan' => 1
                        ],
                        [
                            'id' => 4,
                            'nama' => 'Siti Aminah, A.Md.',
                            'nip' => '199009182015032004',
                            'jabatan' => 'Pengelola Perkara',
                            'unit' => 'Kepaniteraan Hukum',
                            'gol' => 'Penata Muda (III/a)',
                            'status_monev' => 'proses',
                            'kepatuhan' => 74,
                            'temuan' => 3
                        ],
                        [
                            'id' => 5,
                            'nama' => 'Hendrawan, S.Kom.',
                            'nip' => '199305142019031005',
                            'jabatan' => 'Pranata Komputer Ahli Pertama',
                            'unit' => 'Sub Bagian PTIP',
                            'gol' => 'Penata Muda Tk. I (III/b)',
                            'status_monev' => 'belum',
                            'kepatuhan' => 60,
                            'temuan' => 4
                        ],
                        [
                            'id' => 6,
                            'nama' => 'Dewi Lestari, S.E.',
                            'nip' => '198811252014022003',
                            'jabatan' => 'Kasubbag Kepegawaian & Ortala',
                            'unit' => 'Kesekretariatan',
                            'gol' => 'Penata Tk. I (III/d)',
                            'status_monev' => 'diverifikasi',
                            'kepatuhan' => 100,
                            'temuan' => 0
                        ]
                    ];
                @endphp

                @foreach($pegawaiList as $idx => $p)
                <tr>
                    <td class="text-center text-muted">{{ $idx + 1 }}</td>
                    <td>
                        <div class="fw-semibold text-dark">{{ $p['nama'] }}</div>
                        <div class="small text-muted font-monospace">NIP: {{ $p['nip'] }}</div>
                    </td>
                    <td>
                        <div class="fw-semibold text-dark">{{ $p['jabatan'] }}</div>
                        <div class="small text-muted">{{ $p['unit'] }}</div>
                    </td>
                    <td>
                        <span class="badge bg-light text-dark border">{{ $p['gol'] }}</span>
                    </td>
                    <td>
                        @if($p['status_monev'] === 'diverifikasi')
                            <span class="badge badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> Diverifikasi</span>
                        @elseif($p['status_monev'] === 'proses')
                            <span class="badge badge-status badge-proses"><i class="bi bi-hourglass-split"></i> {{ $p['temuan'] }} Temuan</span>
                        @else
                            <span class="badge badge-status badge-belum"><i class="bi bi-clock"></i> Belum Dimonitor</span>
                        @endif
                    </td>
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <div class="progress flex-grow-1" style="height: 6px; width: 60px;">
                                <div class="progress-bar {{ $p['kepatuhan'] >= 85 ? 'bg-success' : ($p['kepatuhan'] >= 70 ? 'bg-warning' : 'bg-danger') }}"
                                     style="width: {{ $p['kepatuhan'] }}%"></div>
                            </div>
                            <span class="fw-semibold small {{ $p['kepatuhan'] >= 85 ? 'text-success' : ($p['kepatuhan'] >= 70 ? 'text-warning' : 'text-danger') }}">
                                {{ $p['kepatuhan'] }}%
                            </span>
                        </div>
                    </td>
                    <td class="text-end">
                        <div class="btn-group btn-group-sm">
                            <a href="{{ route('monitoring.show', $p['id']) }}" class="btn btn-teal" title="Buka Form Monitoring">
                                <i class="bi bi-clipboard-check me-1"></i> Monitoring
                            </a>
                            <a href="{{ route('pegawai.show', $p['id']) }}" class="btn btn-outline-teal" title="Lihat Profil Lengkap">
                                <i class="bi bi-person-lines-fill"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <div style="padding: 0.85rem 1.25rem; border-top: 1px solid var(--ma-border); background: #FAFBFC;" class="d-flex justify-content-between align-items-center small text-muted flex-wrap gap-2">
        <div>Menampilkan <strong>6</strong> dari <strong>48</strong> data aparatur</div>
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

<!-- Modal Tambah Pegawai -->
<div class="modal fade" id="modalTambahPegawai" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title fw-bold text-dark"><i class="bi bi-person-plus-fill me-2 text-primary" style="color: var(--ma-teal);"></i>Tambah Pegawai Satker</h6>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4">
                <form action="#" onsubmit="event.preventDefault(); alert('Pegawai baru berhasil ditambahkan.'); location.reload();">
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nomor Induk Pegawai (NIP)</label>
                        <input type="text" class="form-control input-bordered" placeholder="Contoh: 198501012010011001" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nama Lengkap &amp; Gelar</label>
                        <input type="text" class="form-control input-bordered" placeholder="Contoh: Budi Santoso, S.H., M.H." required>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Pangkat / Golongan</label>
                            <input type="text" class="form-control input-bordered" placeholder="Penata Muda (III/a)" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-semibold">Jenis Kelamin</label>
                            <select class="form-select input-bordered">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Jabatan</label>
                        <input type="text" class="form-control input-bordered" placeholder="Contoh: Panitera Pengganti" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-semibold">Unit Kerja / Ruangan</label>
                        <input type="text" class="form-control input-bordered" placeholder="Contoh: Kepaniteraan Pidana" required>
                    </div>
                    <div class="d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-sm btn-ghost" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-sm btn-teal">Simpan Pegawai</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
