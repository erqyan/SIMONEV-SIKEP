@extends('layouts.app')

@section('title', 'Ruang Verifikasi & Approval Pimpinan')

@section('content')
<div class="container-fluid px-0">

    <!-- Header Section -->
    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Ruang Verifikasi & Approval Pimpinan</h2>
            <p class="text-muted small mb-0">Pemeriksaan dan Pengesahan Keabsahan Dokumen Bukti Pemutakhiran Data SIKEP</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <span class="badge bg-warning bg-opacity-25 text-dark border border-warning px-3 py-2 d-flex align-items-center gap-2">
                <i class="bi bi-bell-fill text-warning"></i> <strong>5 Berkas</strong> Menunggu Verifikasi Anda
            </span>
        </div>
    </div>

    <!-- Verification Pending Cards -->
    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
            <h6 class="fw-bold text-dark mb-0"><i class="bi bi-shield-check text-primary me-2"></i>Daftar Pengajuan Tindak Lanjut Menunggu Persetujuan</h6>
            <span class="badge bg-primary">Perlu Review</span>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Pegawai & Temuan Asal</th>
                        <th>Perubahan Data Dilakukan</th>
                        <th>Dokumen Bukti Scan</th>
                        <th>Petugas Pengaju</th>
                        <th class="text-end" style="min-width: 220px;">Keputusan Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <span class="badge bg-light text-muted border mb-1">TMN/2026/001</span>
                            <div class="fw-bold text-dark">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">Ijazah S2 Magister Hukum</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Pembaruan Riwayat Pendidikan:</div>
                            <div class="small text-muted"><del class="text-danger">S1 Hukum</del> &rarr; <span class="text-success fw-bold">S2 Magister Hukum</span></div>
                            <div class="text-muted" style="font-size: 0.72rem;">SK Pencantuman Gelar BKN No: 128/PG/BKN/2026</div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#modalPreviewDoc">
                                <i class="bi bi-file-earmark-pdf-fill"></i>
                                <span>Ijazah_S2_Ahmad.pdf</span>
                            </button>
                            <div class="text-muted" style="font-size: 0.72rem; margin-top: 2px;">Ukuran: 1.4 MB (Sah)</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Admin Kepegawaian</div>
                            <div class="text-muted" style="font-size: 0.72rem;">18 Okt 2026, 10:15 WIB</div>
                        </td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-danger" onclick="const note = prompt('Tuliskan alasan pengembalian/revisi:'); if(note) alert('Berkas dikembalikan kepada petugas dengan catatan: ' + note);">
                                    <i class="bi bi-x-circle me-1"></i> Tolak / Revisi
                                </button>
                                <button class="btn btn-success" onclick="alert('Verifikasi berhasil disetujui! Status data kini resmi diverifikasi.'); location.reload();">
                                    <i class="bi bi-check-circle-fill me-1"></i> Setujui (Verify)
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <span class="badge bg-light text-muted border mb-1">TMN/2026/005</span>
                            <div class="fw-bold text-dark">Dewi Lestari, S.E.</div>
                            <div class="small text-muted">Penilaian Kinerja / SKP 2025</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Upload Formulir Evaluasi Kinerja 2025:</div>
                            <div class="small text-muted">Predikat Kinerja: <span class="text-success fw-bold">Sangat Baik</span></div>
                            <div class="text-muted" style="font-size: 0.72rem;">Ditandatangani oleh Sekretaris Pengadilan</div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-danger d-flex align-items-center gap-1" data-bs-toggle="modal" data-bs-target="#modalPreviewDoc">
                                <i class="bi bi-file-earmark-pdf-fill"></i>
                                <span>SKP_2025_Dewi_Lestari.pdf</span>
                            </button>
                            <div class="text-muted" style="font-size: 0.72rem; margin-top: 2px;">Ukuran: 2.1 MB (Lengkap TTD)</div>
                        </td>
                        <td>
                            <div class="small fw-semibold text-dark">Petugas Monev</div>
                            <div class="text-muted" style="font-size: 0.72rem;">17 Okt 2026, 15:30 WIB</div>
                        </td>
                        <td class="text-end">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-outline-danger" onclick="prompt('Tuliskan alasan pengembalian/revisi:');">
                                    <i class="bi bi-x-circle me-1"></i> Tolak / Revisi
                                </button>
                                <button class="btn btn-success" onclick="alert('Verifikasi SKP disetujui.'); location.reload();">
                                    <i class="bi bi-check-circle-fill me-1"></i> Setujui (Verify)
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Modal Preview Dokumen Bukti -->
<div class="modal fade" id="modalPreviewDoc" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-dark text-white">
                <h6 class="modal-title small fw-semibold"><i class="bi bi-file-earmark-pdf-fill text-danger me-2"></i>Penampil Dokumen Bukti Digital SIKEP</h6>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4 text-center bg-light">
                <div class="p-5 border rounded bg-white shadow-sm" style="min-height: 380px;">
                    <i class="bi bi-file-earmark-check-fill text-success fs-1 mb-2 d-block"></i>
                    <h5 class="fw-bold text-dark">Salinan Bukti Ijazah Magister Hukum & SK Gelar</h5>
                    <p class="text-muted small">Universitas Indonesia &bull; No Ijazah: 451/MH/2025 &bull; Terlegalisir Sah</p>
                    <div class="alert alert-info small d-inline-block text-start mt-3">
                        <div><strong>Validasi Keaslian Dokumen:</strong></div>
                        <div>&bull; Tanda Tangan Dekan & Rektor: Terverifikasi</div>
                        <div>&bull; SK Pencantuman Gelar BKN: No. 128/PG/BKN/2026 tanggal 10 Januari 2026</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer bg-white">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tutup Preview</button>
                <button type="button" class="btn btn-sm btn-primary" onclick="alert('Membuka dokumen asli di tab baru.');">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Buka Layar Penuh
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
