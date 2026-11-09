@extends('layouts.app')

@section('title', 'Riwayat Pembaruan Data SIKEP (Audit Trail)')

@section('content')
<div class="container-fluid px-0">

    <!-- Header + Toolbar -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Riwayat Pembaruan Data SIKEP <span class="badge-code badge badge-status ms-2">Audit Trail</span></h2>
                <small class="text-muted">Catatan kronologis mutasi &amp; perubahan data kepegawaian beserta dokumen pendukung sah</small>
            </div>
            <div class="right">
                <button class="btn-tool" onclick="alert('Log audit trail berhasil diekspor.');">
                    <i class="bi bi-file-earmark-excel"></i> Ekspor Log Excel
                </button>
                <span class="period-pill">Semester I 2026</span>
            </div>
        </div>

        <!-- alert integritas -->
        <div style="display:flex; align-items:center; gap:0.85rem; padding:0.85rem 1rem; border-top:1px solid var(--ma-border); background:#ECFDF5; color:#047857;">
            <i class="bi bi-shield-check" style="font-size:1.4rem;"></i>
            <div class="small">
                <strong>Integritas Audit Trail Terjamin:</strong> Seluruh riwayat perubahan pada halaman ini bersifat <em>immutable</em> (tidak dapat diubah atau dihapus) guna menjamin akuntabilitas pengawasan internal Mahkamah Agung RI.
            </div>
        </div>
    </div>

    <!-- KPI kecil -->
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Total Pembaruan Tercatat</div>
                        <div class="card-stat-value">28</div>
                        <div class="card-stat-sub">Semester I 2026</div>
                    </div>
                    <div class="card-stat-icon bg-primary"><i class="bi bi-journals"></i></div>
                </div>
                <div class="card-stat-progress" style="width:100%;"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Diverifikasi Pimpinan</div>
                        <div class="card-stat-value text-success">22</div>
                        <div class="card-stat-sub">79% dari total tercatat</div>
                    </div>
                    <div class="card-stat-icon bg-success"><i class="bi bi-patch-check-fill"></i></div>
                </div>
                <div class="card-stat-progress" style="width:79%; background:var(--ma-success);"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Menunggu Verifikasi</div>
                        <div class="card-stat-value">6</div>
                        <div class="card-stat-sub">Dalam antrean reviewer</div>
                    </div>
                    <div class="card-stat-icon"><i class="bi bi-hourglass-split"></i></div>
                </div>
                <div class="card-stat-progress" style="width:21%;"></div>
            </div>
        </div>
    </div>

    <!-- Tabel audit trail -->
    <div class="table-card">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h6 class="fw-bold mb-0"><i class="bi bi-clock-history me-2" style="color:var(--ma-teal);"></i>Histori Perubahan Data</h6>
            </div>
            <div class="right">
                <span class="text-muted small">Menampilkan <strong>4</strong> dari <strong style="color:var(--ma-teal);">28</strong> pembaruan</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width:45px;">No</th>
                        <th>Pegawai Terkait</th>
                        <th>Bidang Data</th>
                        <th>Nilai Data Lama</th>
                        <th>Nilai Data Baru</th>
                        <th>Dasar Dokumen / SK</th>
                        <th>Petugas &amp; Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <div class="fw-bold">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">NIP: 198504122011011003</div>
                        </td>
                        <td><span class="badge badge-kelompok">Pendidikan Formal</span></td>
                        <td><span style="color:var(--ma-danger);"><del>S1 Hukum</del></span></td>
                        <td><span class="fw-bold" style="color:var(--ma-success);">S2 Magister Hukum</span></td>
                        <td>
                            <div class="small fw-semibold">SK Pencantuman Gelar BKN</div>
                            <div class="small text-muted">No: 128/PG/BKN/2026</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Admin Kepegawaian</div>
                            <div class="small text-muted">18 Okt 2026, 10:15 WIB</div>
                        </td>
                        <td><span class="badge-status badge-proses">Diajukan</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <div class="fw-bold">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 198003112006041008</div>
                        </td>
                        <td><span class="badge badge-kelompok">Data Pokok / Pasangan</span></td>
                        <td><span style="color:var(--ma-danger);"><del>3201xxxxxxxx00 (14 Digit)</del></span></td>
                        <td><span class="fw-bold" style="color:var(--ma-success);">3201025508820002 (16 Digit)</span></td>
                        <td>
                            <div class="small fw-semibold">e-KTP &amp; Kartu Keluarga</div>
                            <div class="small text-muted">Kec. Cibinong No: 3201/KK/2024</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Operator SIKEP</div>
                            <div class="small text-muted">15 Okt 2026, 14:40 WIB</div>
                        </td>
                        <td><span class="badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <div class="fw-bold">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">NIP: 199009182015032004</div>
                        </td>
                        <td><span class="badge badge-kelompok">Pangkat / Golongan</span></td>
                        <td><span style="color:var(--ma-danger);"><del>TMT 01/10/2024</del></span></td>
                        <td><span class="fw-bold" style="color:var(--ma-success);">TMT 01/04/2024</span></td>
                        <td>
                            <div class="small fw-semibold">SK Kenaikan Pangkat BKN</div>
                            <div class="small text-muted">No: 00452/BKN/KP/2024</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Admin Kepegawaian</div>
                            <div class="small text-muted">13 Okt 2026, 09:20 WIB</div>
                        </td>
                        <td><span class="badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">4</td>
                        <td>
                            <div class="fw-bold">Hendrawan, S.Kom.</div>
                            <div class="small text-muted">NIP: 199305142019031005</div>
                        </td>
                        <td><span class="badge badge-kelompok">Pelatihan &amp; Diklat</span></td>
                        <td><span class="small text-muted">(Kosong / Belum Ada)</span></td>
                        <td><span class="fw-bold" style="color:var(--ma-success);">Diklat Cyber Security BSSN</span></td>
                        <td>
                            <div class="small fw-semibold">Sertifikat Pusdiklat MA</div>
                            <div class="small text-muted">No: STTPL-892/MA/2026</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Admin Kepegawaian</div>
                            <div class="small text-muted">11 Okt 2026, 11:05 WIB</div>
                        </td>
                        <td><span class="badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> Diverifikasi</span></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div style="display:flex; justify-content:space-between; align-items:center; padding:0.85rem 1rem; border-top:1px solid var(--ma-border);">
            <div class="small text-muted">Menampilkan 1 - 4 dari <strong>28</strong> pembaruan</div>
            <div class="d-flex gap-1">
                <button class="btn btn-sm btn-outline-teal" disabled><i class="bi bi-chevron-left"></i></button>
                <button class="btn btn-sm btn-teal">1</button>
                <button class="btn btn-sm btn-outline-teal">2</button>
                <button class="btn btn-sm btn-outline-teal">3</button>
                <button class="btn btn-sm btn-outline-teal">&hellip;</button>
                <button class="btn btn-sm btn-outline-teal"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>

</div>
@endsection
