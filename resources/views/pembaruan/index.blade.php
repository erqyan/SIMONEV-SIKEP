@extends('layouts.app')

@section('title', 'Riwayat Pembaruan Data SIKEP (Audit Trail)')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Riwayat Pembaruan Data SIKEP (Audit Trail)</h2>
            <p class="text-muted small mb-0">Catatan Kronologis Mutasi dan Perubahan Data Kepegawaian Beserta Dokumen Pendukung Sah</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <button class="btn btn-outline-secondary btn-sm" onclick="alert('Log audit trail berhasil diekspor.');">
                <i class="bi bi-file-earmark-excel me-1"></i> Ekspor Log Excel
            </button>
        </div>
    </div>

    <!-- Alert Keamanan & Akuntabilitas -->
    <div class="alert alert-light border shadow-sm rounded-3 d-flex align-items-center gap-3 mb-4">
        <i class="bi bi-shield-check text-success fs-3"></i>
        <div class="small">
            <strong>Integritas Audit Trail Terjamin:</strong> Seluruh riwayat perubahan pada halaman ini bersifat <em>immutable</em> (tidak dapat diubah atau dihapus) guna menjamin akuntabilitas pengawasan internal Mahkamah Agung RI.
        </div>
    </div>

    <!-- Table of Audit Trail -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold text-dark mb-0"><i class="bi bi-clock-history text-primary me-2"></i>Histori Perubahan Data (Semester I 2026)</h6>
            <span class="badge bg-light text-dark border">Total <strong>28</strong> Pembaruan Tercatat</span>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Pegawai Terkait</th>
                        <th>Bidang Data</th>
                        <th>Nilai Data Lama</th>
                        <th>Nilai Data Baru</th>
                        <th>Dasar Dokumen / SK</th>
                        <th>Petugas & Tanggal</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <div class="fw-bold text-dark">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">NIP: 198504122011011003</div>
                        </td>
                        <td><span class="badge bg-light text-primary border">Pendidikan Formal</span></td>
                        <td><span class="text-danger"><del>S1 Hukum</del></span></td>
                        <td><span class="text-success fw-bold">S2 Magister Hukum</span></td>
                        <td>
                            <div class="small fw-semibold text-dark">SK Pencantuman Gelar BKN</div>
                            <div class="text-muted" style="font-size: 0.75rem;">No: 128/PG/BKN/2026</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Admin Kepegawaian</div>
                            <div class="text-muted" style="font-size: 0.72rem;">18 Okt 2026, 10:15 WIB</div>
                        </td>
                        <td><span class="badge badge-status badge-selesai">Diajukan</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <div class="fw-bold text-dark">Budi Santoso, S.H., M.H.</div>
                            <div class="small text-muted">NIP: 198003112006041008</div>
                        </td>
                        <td><span class="badge bg-light text-primary border">Data Pokok / Pasangan</span></td>
                        <td><span class="text-danger"><del>3201xxxxxxxx00 (14 Digit)</del></span></td>
                        <td><span class="text-success fw-bold">3201025508820002 (16 Digit)</span></td>
                        <td>
                            <div class="small fw-semibold text-dark">e-KTP & Kartu Keluarga</div>
                            <div class="text-muted" style="font-size: 0.75rem;">Kec. Cibinong No: 3201/KK/2024</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Operator SIKEP</div>
                            <div class="text-muted" style="font-size: 0.72rem;">15 Okt 2026, 14:40 WIB</div>
                        </td>
                        <td><span class="badge badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <div class="fw-bold text-dark">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">NIP: 199009182015032004</div>
                        </td>
                        <td><span class="badge bg-light text-primary border">Pangkat / Golongan</span></td>
                        <td><span class="text-danger"><del>TMT 01/10/2024</del></span></td>
                        <td><span class="text-success fw-bold">TMT 01/04/2024</span></td>
                        <td>
                            <div class="small fw-semibold text-dark">SK Kenaikan Pangkat BKN</div>
                            <div class="text-muted" style="font-size: 0.75rem;">No: 00452/BKN/KP/2024</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Admin Kepegawaian</div>
                            <div class="text-muted" style="font-size: 0.72rem;">13 Okt 2026, 09:20 WIB</div>
                        </td>
                        <td><span class="badge badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> Diverifikasi</span></td>
                    </tr>
                    <tr>
                        <td class="text-muted">4</td>
                        <td>
                            <div class="fw-bold text-dark">Hendrawan, S.Kom.</div>
                            <div class="small text-muted">NIP: 199305142019031005</div>
                        </td>
                        <td><span class="badge bg-light text-primary border">Pelatihan & Diklat</span></td>
                        <td><span class="text-muted">(Kosong / Belum Ada)</span></td>
                        <td><span class="text-success fw-bold">Diklat Cyber Security BSSN</span></td>
                        <td>
                            <div class="small fw-semibold text-dark">Sertifikat Pusdiklat MA</div>
                            <div class="text-muted" style="font-size: 0.75rem;">No: STTPL-892/MA/2026</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Admin Kepegawaian</div>
                            <div class="text-muted" style="font-size: 0.72rem;">11 Okt 2026, 11:05 WIB</div>
                        </td>
                        <td><span class="badge badge-status badge-diverifikasi"><i class="bi bi-patch-check-fill"></i> Diverifikasi</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
