@extends('layouts.app')

@section('title', 'Ruang Verifikasi & Approval Pimpinan')

@section('content')
<div class="container-fluid px-0">

    <!-- Header + Toolbar -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Ruang Verifikasi &amp; Approval Pimpinan</h2>
                <small class="text-muted">Pemeriksaan &amp; pengesahan keabsahan dokumen bukti pemutakhiran data SIKEP</small>
            </div>
            <div class="right">
                <span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D; padding:0.4rem 0.75rem; font-size:0.8rem; font-weight:600; border-radius:8px;">
                    <i class="bi bi-bell-fill me-1"></i><strong>5 Berkas</strong> Menunggu Verifikasi Anda
                </span>
            </div>
        </div>
    </div>

    <!-- KPI antrean -->
    <div class="row g-3 mb-4">
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Antrean Verifikasi</div>
                        <div class="card-stat-value">5</div>
                        <div class="card-stat-sub">Menunggu keputusan pimpinan</div>
                    </div>
                    <div class="card-stat-icon"><i class="bi bi-shield-check"></i></div>
                </div>
                <div class="card-stat-progress" style="width:100%;"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Disetujui Bulan Ini</div>
                        <div class="card-stat-value text-success">12</div>
                        <div class="card-stat-sub">Rata-rata 2,1 hari proses</div>
                    </div>
                    <div class="card-stat-icon bg-success"><i class="bi bi-check-circle-fill"></i></div>
                </div>
                <div class="card-stat-progress" style="width:82%; background:var(--ma-success);"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Ditolak / Revisi</div>
                        <div class="card-stat-value text-danger">2</div>
                        <div class="card-stat-sub">Dikembalikan ke petugas</div>
                    </div>
                    <div class="card-stat-icon bg-danger"><i class="bi bi-x-circle"></i></div>
                </div>
                <div class="card-stat-progress" style="width:14%; background:var(--ma-danger);"></div>
            </div>
        </div>
        <div class="col-6 col-xl-3">
            <div class="card-stat">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <div class="card-stat-title">Dokumen Terlengkap</div>
                        <div class="card-stat-value">94%</div>
                        <div class="card-stat-sub">Bukti scan &amp; tanda tangan sah</div>
                    </div>
                    <div class="card-stat-icon bg-primary"><i class="bi bi-file-earmark-check"></i></div>
                </div>
                <div class="card-stat-progress" style="width:94%;"></div>
            </div>
        </div>
    </div>

    <!-- Tabel pengajuan -->
    <div class="table-card">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h6 class="fw-bold mb-0"><i class="bi bi-shield-check me-2" style="color:var(--ma-teal);"></i>Pengajuan Tindak Lanjut Menunggu Persetujuan</h6>
            </div>
            <div class="right">
                <span class="badge-status badge-proses" style="padding:0.3rem 0.65rem;">Perlu Review</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width:45px;">No</th>
                        <th>Pegawai &amp; Temuan Asal</th>
                        <th>Perubahan Data Dilakukan</th>
                        <th>Dokumen Bukti Scan</th>
                        <th>Petugas Pengaju</th>
                        <th class="text-end" style="min-width:230px;">Keputusan Verifikasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <span class="badge-code badge badge-status mb-1">TMN/2026/001</span>
                            <div class="fw-bold">Ahmad Fauzi, S.H.</div>
                            <div class="small text-muted">Ijazah S2 Magister Hukum</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Pembaruan Riwayat Pendidikan:</div>
                            <div class="small text-muted"><del style="color:var(--ma-danger);">S1 Hukum</del> &rarr; <span class="fw-bold" style="color:var(--ma-success);">S2 Magister Hukum</span></div>
                            <div class="small text-muted">SK Pencantuman Gelar BKN No: 128/PG/BKN/2026</div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-teal d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalPreviewDoc">
                                <i class="bi bi-file-earmark-pdf-fill" style="color:var(--ma-danger);"></i>
                                <span style="font-weight:600;">Ijazah_S2_Ahmad.pdf</span>
                            </button>
                            <div class="small text-muted mt-1">Ukuran: 1.4 MB (Sah)</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Admin Kepegawaian</div>
                            <div class="small text-muted">18 Okt 2026, 10:15 WIB</div>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-1 justify-content-end">
                                <button class="icon-btn danger btn btn-sm" title="Tolak / Minta Revisi"
                                        onclick="const note = prompt('Tuliskan alasan pengembalian/revisi:'); if(note) alert('Berkas dikembalikan kepada petugas dengan catatan: ' + note);">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                                <button class="btn-teal btn btn-sm" style="background:var(--ma-success);"
                                        onclick="alert('Verifikasi berhasil disetujui! Status data kini resmi diverifikasi.'); location.reload();">
                                    <i class="bi bi-check-circle-fill me-1"></i> Setujui
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <span class="badge-code badge badge-status mb-1">TMN/2026/005</span>
                            <div class="fw-bold">Dewi Lestari, S.E.</div>
                            <div class="small text-muted">Penilaian Kinerja / SKP 2025</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Upload Formulir Evaluasi Kinerja 2025:</div>
                            <div class="small text-muted">Predikat Kinerja: <span class="fw-bold" style="color:var(--ma-success);">Sangat Baik</span></div>
                            <div class="small text-muted">Ditandatangani oleh Sekretaris Pengadilan</div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-teal d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalPreviewDoc">
                                <i class="bi bi-file-earmark-pdf-fill" style="color:var(--ma-danger);"></i>
                                <span style="font-weight:600;">SKP_2025_Dewi_Lestari.pdf</span>
                            </button>
                            <div class="small text-muted mt-1">Ukuran: 2.1 MB (Lengkap TTD)</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Petugas Monev</div>
                            <div class="small text-muted">17 Okt 2026, 15:30 WIB</div>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-1 justify-content-end">
                                <button class="icon-btn danger btn btn-sm" title="Tolak / Minta Revisi"
                                        onclick="prompt('Tuliskan alasan pengembalian/revisi:');">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                                <button class="btn-teal btn btn-sm" style="background:var(--ma-success);"
                                        onclick="alert('Verifikasi SKP disetujui.'); location.reload();">
                                    <i class="bi bi-check-circle-fill me-1"></i> Setujui
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <span class="badge-code badge badge-status mb-1">TMN/2026/002</span>
                            <div class="fw-bold">Siti Aminah, A.Md.</div>
                            <div class="small text-muted">Koreksi TMT Pangkat III/a</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Koreksi TMT Kenaikan Pangkat:</div>
                            <div class="small text-muted"><del style="color:var(--ma-danger);">TMT 01/10/2024</del> &rarr; <span class="fw-bold" style="color:var(--ma-success);">TMT 01/04/2024</span></div>
                            <div class="small text-muted">SK Kenaikan Pangkat BKN No: 00452/BKN/KP/2024</div>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-outline-teal d-flex align-items-center gap-2" data-bs-toggle="modal" data-bs-target="#modalPreviewDoc">
                                <i class="bi bi-file-earmark-pdf-fill" style="color:var(--ma-danger);"></i>
                                <span style="font-weight:600;">SK_KP_00452_BKN.pdf</span>
                            </button>
                            <div class="small text-muted mt-1">Ukuran: 0.9 MB (Sah)</div>
                        </td>
                        <td>
                            <div class="small fw-semibold">Rina Anggraini, S.E.</div>
                            <div class="small text-muted">16 Okt 2026, 11:05 WIB</div>
                        </td>
                        <td class="text-end">
                            <div class="d-flex gap-1 justify-content-end">
                                <button class="icon-btn danger btn btn-sm" title="Tolak / Minta Revisi"
                                        onclick="const note = prompt('Tuliskan alasan pengembalian/revisi:'); if(note) alert('Berkas dikembalikan dengan catatan: ' + note);">
                                    <i class="bi bi-x-circle"></i>
                                </button>
                                <button class="btn-teal btn btn-sm" style="background:var(--ma-success);"
                                        onclick="alert('Koreksi TMT diverifikasi dan disetujui.'); location.reload();">
                                    <i class="bi bi-check-circle-fill me-1"></i> Setujui
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div style="display:flex; justify-content:space-between; align-items:center; padding:0.85rem 1rem; border-top:1px solid var(--ma-border);">
            <div class="small text-muted">Menampilkan 1 - 3 dari <strong>5</strong> pengajuan menunggu verifikasi</div>
            <div class="d-flex gap-1">
                <button class="btn btn-sm btn-outline-teal" disabled><i class="bi bi-chevron-left"></i></button>
                <button class="btn btn-sm btn-teal">1</button>
                <button class="btn btn-sm btn-outline-teal">2</button>
                <button class="btn btn-sm btn-outline-teal"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </div>

</div>

<!-- Modal Preview Dokumen Bukti -->
<div class="modal fade" id="modalPreviewDoc" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content" style="border-radius:10px; overflow:hidden;">
            <div class="modal-header" style="background:var(--ma-navy,#0A1424); border-bottom:none;">
                <h6 class="modal-title small fw-semibold text-white"><i class="bi bi-file-earmark-pdf-fill me-2" style="color:#FCA5A5;"></i>Penampil Dokumen Bukti Digital SIKEP</h6>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body p-4 text-center" style="background:#F1F5F9;">
                <div class="p-5 border rounded-3 text-center" style="min-height:380px; background:#fff;">
                    <i class="bi bi-file-earmark-check-fill fs-1 mb-2 d-block" style="color:var(--ma-success);"></i>
                    <h5 class="fw-bold">Salinan Bukti Ijazah Magister Hukum &amp; SK Gelar</h5>
                    <p class="text-muted small">Universitas Indonesia &bull; No Ijazah: 451/MH/2025 &bull; Terlegalisir Sah</p>
                    <div class="small text-start d-inline-block" style="background:#EFF6FF; border:1px solid #93C5FD; border-radius:8px; padding:0.85rem 1rem; color:#1D4ED8;">
                        <div class="fw-bold mb-1"><i class="bi bi-shield-check me-1"></i>Validasi Keaslian Dokumen:</div>
                        <div>&bull; Tanda Tangan Dekan &amp; Rektor: Terverifikasi</div>
                        <div>&bull; SK Pencantuman Gelar BKN: No. 128/PG/BKN/2026 tanggal 10 Januari 2026</div>
                    </div>
                </div>
            </div>
            <div class="modal-footer" style="border-top:1px solid var(--ma-border);">
                <button type="button" class="btn-ghost btn btn-sm" data-bs-dismiss="modal">Tutup Preview</button>
                <button type="button" class="btn-teal btn btn-sm" onclick="alert('Membuka dokumen asli di tab baru.');">
                    <i class="bi bi-box-arrow-up-right me-1"></i> Buka Layar Penuh
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
