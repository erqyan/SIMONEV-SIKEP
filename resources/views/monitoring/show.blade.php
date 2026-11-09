@extends('layouts.app')

@section('title', 'Form Monitoring Pegawai')

@section('content')
<div class="container-fluid px-0">

    <!-- Pegawai Profile Banner (mirip ref: avatar circle + NIP + status + progress kepatuhan) -->
    <div class="table-card mb-4">
        <div style="padding: 1.25rem; display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: center;">
            <div class="d-flex align-items-center gap-3">
                <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold fs-3"
                     style="width: 72px; height: 72px; background: #FEF3C7; color: var(--ma-teal-dark); border: 2px solid var(--ma-teal); flex-shrink: 0;">
                    BS
                </div>
                <div>
                    <div class="d-flex align-items-center gap-2 flex-wrap">
                        <span class="fw-bold text-dark" style="font-size: 1.1rem;">Budi Santoso, S.H., M.H.</span>
                        <span class="badge badge-status badge-tervalidasi"><i class="bi bi-patch-check-fill"></i> PNS Aktif</span>
                        <span class="badge badge-status badge-proses"><i class="bi bi-hourglass-split"></i> Monitoring Berlangsung</span>
                    </div>
                    <div class="small text-muted mt-1">
                        <span><i class="bi bi-person-vcard me-1"></i> NIP: <strong>198003112006041008</strong></span>
                        &nbsp;•&nbsp;
                        <span><i class="bi bi-briefcase me-1"></i> Panitera Pengganti</span>
                        &nbsp;•&nbsp;
                        <span><i class="bi bi-building me-1"></i> Kepaniteraan Perdata</span>
                    </div>
                    <div class="small text-muted">
                        <span><i class="bi bi-award me-1"></i> Pembina (IV/a)</span>
                        &nbsp;•&nbsp;
                        <span><i class="bi bi-clock me-1"></i> Register: <strong class="font-monospace">MNV/2026/001</strong></span>
                    </div>
                </div>
            </div>

            <div class="ms-auto" style="min-width: 220px;">
                <div class="d-flex align-items-center gap-3">
                    <div>
                        <div class="small text-muted text-uppercase fw-semibold" style="letter-spacing: 0.4px;">Skor Kepatuhan SIKEP</div>
                        <div class="fs-4 fw-bold text-success">88<span style="font-size: 1rem;">%</span></div>
                    </div>
                    <div style="flex: 1; min-width: 120px;">
                        <div class="progress" style="height: 6px; border-radius: 3px;">
                            <div class="progress-bar bg-success" style="width: 88%;"></div>
                        </div>
                        <div class="small text-muted mt-1">31 / 35 subkelompok sesuai</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="padding: 0.75rem 1.25rem; background: var(--ma-bg); border-top: 1px solid var(--ma-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 0.5rem;">
            <div class="d-flex align-items-center gap-2 small">
                <span class="text-muted">Tindak lanjut:</span>
                <span class="badge badge-status badge-sesuai"><i class="bi bi-check-lg"></i> 29 Selesai</span>
                <span class="badge badge-status badge-belum-lengkap"><i class="bi bi-hourglass-split"></i> 4 Dalam Proses</span>
                <span class="badge badge-status badge-tidak-sesuai"><i class="bi bi-exclamation-triangle-fill"></i> 2 Temuan Aktif</span>
            </div>
            <div class="d-flex align-items-center gap-2 small">
                <span class="badge badge-status badge-tervalidasi"><i class="bi bi-file-earmark-text"></i> 3 Berkas Lampiran</span>
                <a href="{{ route('monitoring.index') }}" class="btn btn-outline-teal btn-sm"><i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar</a>
            </div>
        </div>
    </div>

    <!-- Kelompok Nav Tabs (5 Kelompok Utama) -->
    <div class="table-card mb-4 overflow-hidden">
        <div class="table-toolbar">
            <div class="left">
                <span style="color: var(--ma-text-dark); font-weight: 700; font-size: 0.95rem;">
                    <i class="bi bi-clipboard2-check me-2" style="color: var(--ma-teal);"></i>Pemeriksaan Checklist Parameter Kamus Data
                </span>
            </div>
            <div class="right">
                <button class="btn btn-ghost btn-sm" onclick="document.querySelectorAll('.btn-quick-sesuai')[0].click()" type="button">
                    <i class="bi bi-check2-all me-1"></i> Tandai Semua Sesuai
                </button>
                <a href="{{ route('monitoring.index') }}" class="btn btn-outline-teal btn-sm"><i class="bi bi-x-lg me-1"></i> Tutup</a>
            </div>
        </div>

        <ul class="nav" id="kelompokTabs" role="tablist" style="background: #FFFFFF; border-bottom: 1px solid var(--ma-border);">
            <li class="nav-item" role="presentation">
                <button class="nav-link tab-teal active text-start" id="tab-a" data-bs-toggle="tab" data-bs-target="#content-a" type="button" role="tab">
                    <span class="d-block small text-muted" style="font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.5px;">Kelompok A</span>
                    <span class="d-flex align-items-center gap-2">
                        <i class="bi bi-person-lines-fill"></i> Data Pokok
                        <span class="badge badge-status badge-sesuai">9/9</span>
                    </span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link tab-teal text-start" id="tab-b" data-bs-toggle="tab" data-bs-target="#content-b" type="button" role="tab">
                    <span class="d-block small text-muted" style="font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.5px;">Kelompok B</span>
                    <span class="d-flex align-items-center gap-2">
                        <i class="bi bi-briefcase-fill"></i> Riwayat Kerja
                        <span class="badge badge-status badge-belum-lengkap">7/8</span>
                    </span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link tab-teal text-start" id="tab-c" data-bs-toggle="tab" data-bs-target="#content-c" type="button" role="tab">
                    <span class="d-block small text-muted" style="font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.5px;">Kelompok C</span>
                    <span class="d-flex align-items-center gap-2">
                        <i class="bi bi-mortarboard-fill"></i> Kompetensi
                        <span class="badge badge-status badge-sesuai">7/7</span>
                    </span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link tab-teal text-start" id="tab-d" data-bs-toggle="tab" data-bs-target="#content-d" type="button" role="tab">
                    <span class="d-block small text-muted" style="font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.5px;">Kelompok D</span>
                    <span class="d-flex align-items-center gap-2">
                        <i class="bi bi-star-fill"></i> Penilaian Kinerja
                        <span class="badge badge-status badge-sesuai">6/6</span>
                    </span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link tab-teal text-start" id="tab-e" data-bs-toggle="tab" data-bs-target="#content-e" type="button" role="tab">
                    <span class="d-block small text-muted" style="font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.5px;">Kelompok E</span>
                    <span class="d-flex align-items-center gap-2">
                        <i class="bi bi-shield-fill"></i> Lain-Lain
                        <span class="badge badge-status badge-belum-lengkap">4/5</span>
                    </span>
                </button>
            </li>
        </ul>

        <!-- Subkelompok Quick Selector & Action Panel -->
        <div class="row g-4" style="padding: 1.5rem; background: var(--ma-bg);">
            <!-- Sidebar Subkelompok List -->
            <div class="col-lg-4">
                <div class="table-card h-100 overflow-hidden">
                    <div class="table-toolbar" style="padding: 0.85rem 1.1rem;">
                        <div class="left">
                            <span style="font-weight: 700; font-size: 0.85rem; color: var(--ma-text-dark);">
                                <i class="bi bi-list-nested me-1" style="color: var(--ma-teal);"></i>Subkelompok Kelompok A
                            </span>
                        </div>
                        <div class="right">
                            <span class="badge badge-status badge-tervalidasi">9 Item</span>
                        </div>
                    </div>
                    <div class="list-group list-group-flush small" id="subkelompokList">
                        <a href="#sub-a1" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center fw-semibold" style="border-left: 3px solid var(--ma-teal); background: #FFFFFF;">
                            <span>A.1 Biodata Pribadi</span>
                            <i class="bi bi-check-circle-fill text-success"></i>
                        </a>
                        <a href="#sub-a2" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border-left: 3px solid transparent;">
                            <span>A.2 Alamat &amp; Domisili</span>
                            <i class="bi bi-check-circle-fill text-success"></i>
                        </a>
                        <a href="#sub-a3" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border-left: 3px solid transparent;">
                            <span>A.3 Kartu (Karpeg, KPE, BPJS)</span>
                            <i class="bi bi-check-circle-fill text-success"></i>
                        </a>
                        <a href="#sub-a4" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center fw-semibold text-danger bg-danger bg-opacity-10" style="border-left: 3px solid var(--ma-danger);">
                            <span>A.4 Pasangan (Suami/Istri)</span>
                            <i class="bi bi-exclamation-circle-fill text-danger"></i>
                        </a>
                        <a href="#sub-a5" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border-left: 3px solid transparent;">
                            <span>A.5 Anak Kandung / Angkat</span>
                            <i class="bi bi-check-circle-fill text-success"></i>
                        </a>
                        <a href="#sub-a6" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border-left: 3px solid transparent;">
                            <span>A.6 Orang Tua Kandung</span>
                            <i class="bi bi-check-circle-fill text-success"></i>
                        </a>
                        <a href="#sub-a7" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border-left: 3px solid transparent;">
                            <span>A.7 Saudara Kandung</span>
                            <i class="bi bi-check-circle-fill text-success"></i>
                        </a>
                        <a href="#sub-a8" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border-left: 3px solid transparent;">
                            <span>A.8 Perubahan NIP (BKN)</span>
                            <span class="badge badge-status badge-tidak-berlaku">N/A</span>
                        </a>
                        <a href="#sub-a9" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" style="border-left: 3px solid transparent;">
                            <span>A.9 Perubahan Nama Sah</span>
                            <span class="badge badge-status badge-tidak-berlaku">N/A</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Inspection Parameter Form -->
            <div class="col-lg-8">
                <form action="#" onsubmit="event.preventDefault(); alert('Hasil monitoring berhasil disimpan!');">
                    <div class="table-card overflow-hidden">
                        <div class="table-toolbar">
                            <div class="left">
                                <span style="font-weight: 700; font-size: 0.95rem; color: var(--ma-text-dark);">
                                    Subkelompok A.4: Pasangan (Suami/Istri)
                                </span>
                                <span class="period-pill ms-2">Pemeriksaan Oktober 2026</span>
                            </div>
                            <div class="right">
                                <span class="badge badge-status badge-tidak-sesuai"><i class="bi bi-exclamation-triangle-fill"></i> 1 Temuan Aktif</span>
                            </div>
                        </div>

                        <div style="padding: 1.5rem; background: #FFFFFF;">
                            <p class="small text-muted mb-4"><i class="bi bi-file-earmark-text me-1" style="color: var(--ma-teal);"></i> Pemeriksaan integritas data ikatan perkawinan dan dokumen otentik KUA / Catatan Sipil</p>

                            <!-- Parameter 1: Nama Lengkap Pasangan -->
                            <div class="p-3 rounded-3 mb-3" style="border: 1px solid var(--ma-border); background: var(--ma-bg);">
                                <div class="d-md-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.92rem;">1. Nama Lengkap Pasangan</div>
                                        <div class="small text-muted"><i class="bi bi-file-earmark-text me-1"></i> Sumber Pembanding: <strong>Buku Nikah / Akta Perkawinan Sah</strong></div>
                                    </div>
                                    <span class="badge badge-status badge-sesuai">Parameter Wajib</span>
                                </div>

                                <div class="row g-2 mb-3 small">
                                    <div class="col-md-6">
                                        <div class="p-2 bg-white rounded-2" style="border: 1px solid var(--ma-border);">
                                            <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.3px;">Data Eksisting di SIKEP:</div>
                                            <div class="fw-semibold text-dark">Nurul Hidayati, S.Pd.</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-2 bg-white rounded-2" style="border: 1px solid var(--ma-border);">
                                            <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.3px;">Data Menurut Dokumen Fisik:</div>
                                            <div class="fw-semibold text-dark">Nurul Hidayati, S.Pd.</div>
                                        </div>
                                    </div>
                                </div>

                                <label class="form-label d-block mb-1">Hasil Evaluasi:</label>
                                <div class="d-flex flex-wrap gap-2">
                                    <input type="radio" class="btn-check" name="status_param_1" id="p1_sesuai" checked>
                                    <label class="btn btn-outline-success btn-sm btn-quick-sesuai" for="p1_sesuai"><i class="bi bi-check-lg me-1"></i> Sesuai</label>

                                    <input type="radio" class="btn-check" name="status_param_1" id="p1_belum">
                                    <label class="btn btn-outline-warning btn-sm" for="p1_belum">Belum Lengkap</label>

                                    <input type="radio" class="btn-check" name="status_param_1" id="p1_update">
                                    <label class="btn btn-outline-warning btn-sm" for="p1_update">Perlu Pembaruan</label>

                                    <input type="radio" class="btn-check" name="status_param_1" id="p1_beda">
                                    <label class="btn btn-outline-danger btn-sm" for="p1_beda">Tidak Sesuai</label>

                                    <input type="radio" class="btn-check" name="status_param_1" id="p1_na">
                                    <label class="btn btn-outline-secondary btn-sm" for="p1_na">N/A</label>
                                </div>
                            </div>

                            <!-- Parameter 2: NIK Pasangan (ADA TEMUAN) -->
                            <div class="p-3 rounded-3 mb-3" style="border: 1px solid var(--ma-danger); background: #FEF2F2;">
                                <div class="d-md-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.92rem;">2. Nomor Induk Kependudukan (NIK) Pasangan</div>
                                        <div class="small text-muted"><i class="bi bi-file-earmark-text me-1"></i> Sumber Pembanding: <strong>KTP Pasangan / Kartu Keluarga</strong></div>
                                    </div>
                                    <span class="badge badge-status badge-tidak-sesuai"><i class="bi bi-exclamation-triangle-fill"></i> Temuan Terdaftar</span>
                                </div>

                                <div class="row g-2 mb-3 small">
                                    <div class="col-md-6">
                                        <div class="p-2 bg-white rounded-2" style="border: 1px solid var(--ma-danger);">
                                            <div class="text-danger" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.3px;">Data Eksisting di SIKEP:</div>
                                            <div class="fw-bold text-danger">3201xxxxxxxx00 (Terpotong 14 Digit)</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-2 bg-white rounded-2" style="border: 1px solid var(--ma-success);">
                                            <div class="text-success" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.3px;">Data Benar (KTP Fisik):</div>
                                            <div class="fw-bold text-success">3201025508820002 (Lengkap 16 Digit)</div>
                                        </div>
                                    </div>
                                </div>

                                <label class="form-label d-block mb-1">Hasil Evaluasi:</label>
                                <div class="d-flex flex-wrap gap-2 mb-3">
                                    <input type="radio" class="btn-check" name="status_param_2" id="p2_sesuai">
                                    <label class="btn btn-outline-success btn-sm" for="p2_sesuai"><i class="bi bi-check-lg me-1"></i> Sesuai</label>

                                    <input type="radio" class="btn-check" name="status_param_2" id="p2_belum">
                                    <label class="btn btn-outline-warning btn-sm" for="p2_belum">Belum Lengkap</label>

                                    <input type="radio" class="btn-check" name="status_param_2" id="p2_update">
                                    <label class="btn btn-outline-warning btn-sm" for="p2_update">Perlu Pembaruan</label>

                                    <input type="radio" class="btn-check" name="status_param_2" id="p2_beda" checked>
                                    <label class="btn btn-danger btn-sm" for="p2_beda"><i class="bi bi-exclamation-triangle-fill me-1"></i> Tidak Sesuai</label>

                                    <input type="radio" class="btn-check" name="status_param_2" id="p2_na">
                                    <label class="btn btn-outline-secondary btn-sm" for="p2_na">N/A</label>
                                </div>

                                <!-- Drawer Form Temuan & Rekomendasi -->
                                <div class="bg-white p-3 rounded-2 shadow-sm" style="border: 1px solid var(--ma-danger);">
                                    <div class="d-flex align-items-center gap-2 mb-3 text-danger fw-bold small">
                                        <i class="bi bi-pencil-fill"></i> Rincian Temuan &amp; Rencana Tindak Lanjut:
                                    </div>
                                    <div class="row g-2 mb-2">
                                        <div class="col-md-8">
                                            <label class="form-label mb-1">Uraian Temuan Ketidaksesuaian</label>
                                            <input type="text" class="form-control form-control-sm input-bordered" value="NIK Pasangan terpotong 14 digit, belum diunggah scan KTP terbaru">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="form-label mb-1">Batas Waktu Tindak Lanjut</label>
                                            <input type="date" class="form-control form-control-sm input-bordered" value="2026-10-30">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label mb-1">Rekomendasi Tindakan Perbaikan</label>
                                        <input type="text" class="form-control form-control-sm input-bordered" value="Lakukan koreksi NIK 16 digit pada SIKEP dan lampirkan scan e-KTP pasangan">
                                    </div>
                                    <div class="row g-2 align-items-center">
                                        <div class="col-md-6">
                                            <label class="form-label mb-1">Upload Berkas Bukti Pendukung (PDF/JPG)</label>
                                            <input type="file" class="form-control form-control-sm input-bordered">
                                        </div>
                                        <div class="col-md-6 pt-md-3">
                                            <span class="badge badge-status badge-belum-lengkap"><i class="bi bi-hourglass-split"></i> Status: Dalam Proses Pengerjaan</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Parameter 3: Tanggal Pernikahan -->
                            <div class="p-3 rounded-3 mb-3" style="border: 1px solid var(--ma-border); background: var(--ma-bg);">
                                <div class="d-md-flex justify-content-between align-items-start mb-2">
                                    <div>
                                        <div class="fw-bold text-dark" style="font-size: 0.92rem;">3. Tanggal Pernikahan &amp; Nomor Buku Nikah</div>
                                        <div class="small text-muted"><i class="bi bi-file-earmark-text me-1"></i> Sumber Pembanding: <strong>Buku Nikah KUA / Akta Catatan Sipil</strong></div>
                                    </div>
                                    <span class="badge badge-status badge-sesuai">Parameter Wajib</span>
                                </div>

                                <div class="row g-2 mb-3 small">
                                    <div class="col-md-6">
                                        <div class="p-2 bg-white rounded-2" style="border: 1px solid var(--ma-border);">
                                            <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.3px;">Data Eksisting di SIKEP:</div>
                                            <div class="fw-semibold text-dark">12 Agustus 2010 (No: 452/VIII/2010)</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="p-2 bg-white rounded-2" style="border: 1px solid var(--ma-border);">
                                            <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.3px;">Data Menurut Dokumen Fisik:</div>
                                            <div class="fw-semibold text-dark">12 Agustus 2010 (No: 452/VIII/2010)</div>
                                        </div>
                                    </div>
                                </div>

                                <label class="form-label d-block mb-1">Hasil Evaluasi:</label>
                                <div class="d-flex flex-wrap gap-2">
                                    <input type="radio" class="btn-check" name="status_param_3" id="p3_sesuai" checked>
                                    <label class="btn btn-outline-success btn-sm" for="p3_sesuai"><i class="bi bi-check-lg me-1"></i> Sesuai</label>

                                    <input type="radio" class="btn-check" name="status_param_3" id="p3_belum">
                                    <label class="btn btn-outline-warning btn-sm" for="p3_belum">Belum Lengkap</label>

                                    <input type="radio" class="btn-check" name="status_param_3" id="p3_update">
                                    <label class="btn btn-outline-warning btn-sm" for="p3_update">Perlu Pembaruan</label>

                                    <input type="radio" class="btn-check" name="status_param_3" id="p3_beda">
                                    <label class="btn btn-outline-danger btn-sm" for="p3_beda">Tidak Sesuai</label>

                                    <input type="radio" class="btn-check" name="status_param_3" id="p3_na">
                                    <label class="btn btn-outline-secondary btn-sm" for="p3_na">N/A</label>
                                </div>
                            </div>
                        </div>

                        <!-- Footer Action Buttons (Role-Aware) -->
                        <div style="padding: 0.85rem 1.25rem; background: var(--ma-bg); border-top: 1px solid var(--ma-border); display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 0.5rem;">
                            <span class="small text-muted"><i class="bi bi-info-circle me-1"></i> Terakhir disimpan: 15 Okt 2026, 14:32 WIB</span>
                            <div class="d-flex gap-2 align-items-center">
                                @if(\App\Services\AccessControl::can('input_monitoring'))
                                    <button type="button" class="btn btn-outline-teal btn-sm" onclick="alert('Draf checklist tersimpan.')">
                                        <i class="bi bi-floppy me-1"></i> Simpan Draf
                                    </button>
                                    <button type="submit" class="btn btn-teal btn-sm">
                                        <i class="bi bi-check2-circle me-1"></i> Simpan Hasil &amp; Perbarui Status
                                    </button>
                                @else
                                    <span class="badge badge-status badge-tidak-berlaku px-3 py-2">
                                        <i class="bi bi-eye me-1"></i> Mode Peninjauan (Hanya Petugas yang Berwenang Mengubah)
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@push('scripts')
<script>
    document.querySelectorAll('[data-bs-toggle="tab"]').forEach(function (tab) {
        tab.addEventListener('click', function () {
            document.querySelectorAll('.tab-teal').forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
        });
    });
</script>
@endpush
