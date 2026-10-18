@extends('layouts.app')

@section('title', 'Form Monitoring Pegawai')

@section('content')
<div class="container-fluid px-0">

    <!-- Top Navigation / Breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('monitoring.index') }}" class="text-decoration-none">Monitoring SIKEP</a></li>
                <li class="breadcrumb-item active" aria-current="page">Form Checklist Pemeriksaan</li>
            </ol>
        </nav>
        <a href="{{ route('monitoring.index') }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar
        </a>
    </div>

    <!-- Header Pegawai Banner -->
    <div class="card border-0 shadow-sm rounded-3 mb-4 overflow-hidden">
        <div class="card-body p-4 bg-white">
            <div class="row align-items-center">
                <div class="col-md-8 d-flex align-items-center gap-3">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center fw-bold fs-3" style="width: 64px; height: 64px;">
                        BS
                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <h4 class="fw-bold text-dark mb-0">Budi Santoso, S.H., M.H.</h4>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25">PNS Aktif</span>
                        </div>
                        <div class="text-muted small">
                            <span><i class="bi bi-person-vcard me-1"></i> NIP: <strong>198003112006041008</strong></span> &bull; 
                            <span><i class="bi bi-award me-1"></i> Pangkat/Golongan: <strong>Pembina (IV/a)</strong></span>
                        </div>
                        <div class="text-muted small mt-1">
                            <span><i class="bi bi-briefcase me-1"></i> Jabatan: <strong>Panitera Pengganti</strong></span> &bull; 
                            <span><i class="bi bi-building me-1"></i> Unit: <strong>Kepaniteraan Perdata</strong></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-md-end mt-3 mt-md-0 border-start ps-md-4">
                    <div class="small text-muted mb-1">Skor Kepatuhan SIKEP</div>
                    <div class="d-flex align-items-center justify-content-md-end gap-2 mb-2">
                        <div class="fs-3 fw-bold text-success">88.5%</div>
                        <div class="small text-muted text-start lh-1">
                            <div>31 / 35</div>
                            <div style="font-size: 0.7rem;">Subkelompok Sesuai</div>
                        </div>
                    </div>
                    <div class="progress" style="height: 6px;">
                        <div class="progress-bar bg-success" style="width: 88.5%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Kelompok Nav Tabs (5 Kelompok Utama) -->
    <ul class="nav nav-pills nav-fill bg-white p-2 rounded-3 shadow-sm border mb-4" id="kelompokTabs" role="tablist">
        <li class="nav-item">
            <button class="nav-link active fw-semibold text-start py-2" id="tab-a" data-bs-toggle="pill" data-bs-target="#content-a">
                <span class="d-block small text-muted text-uppercase" style="font-size: 0.68rem;">Kelompok A</span>
                <span><i class="bi bi-person-lines-fill text-primary me-1"></i> Data Pokok</span>
                <span class="badge bg-success float-end ms-2">9/9</span>
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link fw-semibold text-start py-2" id="tab-b" data-bs-toggle="pill" data-bs-target="#content-b">
                <span class="d-block small text-muted text-uppercase" style="font-size: 0.68rem;">Kelompok B</span>
                <span><i class="bi bi-briefcase-fill text-primary me-1"></i> Riwayat Kerja</span>
                <span class="badge bg-warning text-dark float-end ms-2">7/8</span>
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link fw-semibold text-start py-2" id="tab-c" data-bs-toggle="pill" data-bs-target="#content-c">
                <span class="d-block small text-muted text-uppercase" style="font-size: 0.68rem;">Kelompok C</span>
                <span><i class="bi bi-mortarboard-fill text-primary me-1"></i> Kompetensi</span>
                <span class="badge bg-success float-end ms-2">7/7</span>
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link fw-semibold text-start py-2" id="tab-d" data-bs-toggle="pill" data-bs-target="#content-d">
                <span class="d-block small text-muted text-uppercase" style="font-size: 0.68rem;">Kelompok D</span>
                <span><i class="bi bi-star-fill text-primary me-1"></i> Penilaian Kinerja</span>
                <span class="badge bg-success float-end ms-2">6/6</span>
            </button>
        </li>
        <li class="nav-item">
            <button class="nav-link fw-semibold text-start py-2" id="tab-e" data-bs-toggle="pill" data-bs-target="#content-e">
                <span class="d-block small text-muted text-uppercase" style="font-size: 0.68rem;">Kelompok E</span>
                <span><i class="bi bi-shield-fill text-primary me-1"></i> Lain-Lain</span>
                <span class="badge bg-warning text-dark float-end ms-2">4/5</span>
            </button>
        </li>
    </ul>

    <!-- Subkelompok Quick Selector & Action Panel -->
    <div class="row g-4">
        <!-- Sidebar Subkelompok List -->
        <div class="col-lg-3">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-white border-bottom py-3">
                    <h6 class="fw-bold text-dark mb-0 small text-uppercase" style="letter-spacing: 0.5px;">
                        <i class="bi bi-list-nested me-1"></i> Subkelompok Kelompok A
                    </h6>
                </div>
                <div class="list-group list-group-flush small" id="subkelompokList">
                    <a href="#sub-a1" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center active bg-light text-dark border-start border-3 border-primary fw-semibold">
                        <span>A.1 Biodata Pribadi</span>
                        <i class="bi bi-check-circle-fill text-success"></i>
                    </a>
                    <a href="#sub-a2" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>A.2 Alamat & Domisili</span>
                        <i class="bi bi-check-circle-fill text-success"></i>
                    </a>
                    <a href="#sub-a3" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>A.3 Kartu (Karpeg, KPE, BPJS)</span>
                        <i class="bi bi-check-circle-fill text-success"></i>
                    </a>
                    <a href="#sub-a4" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-danger fw-semibold bg-danger bg-opacity-10">
                        <span>A.4 Pasangan (Suami/Istri)</span>
                        <i class="bi bi-exclamation-circle-fill text-danger"></i>
                    </a>
                    <a href="#sub-a5" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>A.5 Anak Kandung / Angkat</span>
                        <i class="bi bi-check-circle-fill text-success"></i>
                    </a>
                    <a href="#sub-a6" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>A.6 Orang Tua Kandung</span>
                        <i class="bi bi-check-circle-fill text-success"></i>
                    </a>
                    <a href="#sub-a7" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>A.7 Saudara Kandung</span>
                        <i class="bi bi-check-circle-fill text-success"></i>
                    </a>
                    <a href="#sub-a8" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>A.8 Perubahan NIP (BKN)</span>
                        <span class="badge bg-secondary">N/A</span>
                    </a>
                    <a href="#sub-a9" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                        <span>A.9 Perubahan Nama Sah</span>
                        <span class="badge bg-secondary">N/A</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Main Inspection Parameter Form -->
        <div class="col-lg-9">
            <form action="#" onsubmit="event.preventDefault(); alert('Hasil monitoring berhasil disimpan!');">
                <div class="card border-0 shadow-sm rounded-3 mb-4">
                    <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h6 class="fw-bold text-dark mb-0">Subkelompok A.4: Pasangan (Suami/Istri)</h6>
                            <small class="text-muted">Pemeriksaan integritas data ikatan perkawinan dan dokumen otentik KUA / Catatan Sipil</small>
                        </div>
                        <span class="badge bg-warning bg-opacity-10 text-warning border border-warning">1 Temuan Aktif</span>
                    </div>

                    <div class="card-body p-4">
                        <!-- Parameter 1: Nama Lengkap Pasangan -->
                        <div class="p-3 border rounded-3 mb-3 bg-light bg-opacity-25">
                            <div class="d-md-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <div class="fw-bold text-dark">1. Nama Lengkap Pasangan</div>
                                    <div class="small text-muted"><i class="bi bi-file-earmark-text me-1"></i> Sumber Pembanding: <strong>Buku Nikah / Akta Perkawinan Sah</strong></div>
                                </div>
                                <span class="badge bg-success bg-opacity-10 text-success border border-success">Parameter Wajib</span>
                            </div>

                            <div class="row g-2 mb-3 small">
                                <div class="col-md-6">
                                    <div class="p-2 bg-white border rounded">
                                        <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase;">Data Eksisting di SIKEP:</div>
                                        <div class="fw-semibold text-dark">Nurul Hidayati, S.Pd.</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-2 bg-white border rounded">
                                        <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase;">Data Menurut Dokumen Fisik:</div>
                                        <div class="fw-semibold text-dark">Nurul Hidayati, S.Pd.</div>
                                    </div>
                                </div>
                            </div>

                            <label class="form-label small fw-semibold text-muted d-block mb-1">Hasil Evaluasi:</label>
                            <div class="d-flex flex-wrap gap-2">
                                <input type="radio" class="btn-check" name="status_param_1" id="p1_sesuai" checked>
                                <label class="btn btn-outline-success btn-sm" for="p1_sesuai"><i class="bi bi-check-lg me-1"></i> Sesuai</label>

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
                        <div class="p-3 border border-danger border-opacity-50 rounded-3 mb-3 bg-danger bg-opacity-10">
                            <div class="d-md-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <div class="fw-bold text-dark">2. Nomor Induk Kependudukan (NIK) Pasangan</div>
                                    <div class="small text-muted"><i class="bi bi-file-earmark-text me-1"></i> Sumber Pembanding: <strong>KTP Pasangan / Kartu Keluarga</strong></div>
                                </div>
                                <span class="badge bg-danger">Temuan Terdaftar</span>
                            </div>

                            <div class="row g-2 mb-3 small">
                                <div class="col-md-6">
                                    <div class="p-2 bg-white border border-danger border-opacity-25 rounded">
                                        <div class="text-danger" style="font-size: 0.72rem; text-transform: uppercase;">Data Eksisting di SIKEP:</div>
                                        <div class="fw-bold text-danger">3201xxxxxxxx00 (Terpotong 14 Digit)</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-2 bg-white border border-success border-opacity-25 rounded">
                                        <div class="text-success" style="font-size: 0.72rem; text-transform: uppercase;">Data Benar (KTP Fisik):</div>
                                        <div class="fw-bold text-success">3201025508820002 (Lengkap 16 Digit)</div>
                                    </div>
                                </div>
                            </div>

                            <label class="form-label small fw-semibold text-muted d-block mb-1">Hasil Evaluasi:</label>
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
                            <div class="bg-white p-3 rounded-2 border border-danger border-opacity-25 shadow-sm">
                                <div class="d-flex align-items-center gap-2 mb-2 text-danger fw-bold small">
                                    <i class="bi bi-pencil-fill"></i> Rincian Temuan & Rencana Tindak Lanjut:
                                </div>
                                <div class="row g-2 mb-2">
                                    <div class="col-md-8">
                                        <label class="form-label small text-muted mb-0">Uraian Temuan Ketidaksesuaian</label>
                                        <input type="text" class="form-control form-control-sm" value="NIK Pasangan terpotong 14 digit, belum diunggah scan KTP terbaru">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="form-label small text-muted mb-0">Batas Waktu Tindak Lanjut</label>
                                        <input type="date" class="form-control form-control-sm" value="2026-10-30">
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label class="form-label small text-muted mb-0">Rekomendasi Tindakan Perbaikan</label>
                                    <input type="text" class="form-control form-control-sm" value="Lakukan koreksi NIK 16 digit pada SIKEP dan lampirkan scan e-KTP pasangan">
                                </div>
                                <div class="row g-2 align-items-center">
                                    <div class="col-md-6">
                                        <label class="form-label small text-muted mb-0">Upload Berkas Bukti Pendukung (PDF/JPG)</label>
                                        <input type="file" class="form-control form-control-sm">
                                    </div>
                                    <div class="col-md-6 pt-md-3">
                                        <span class="badge bg-warning text-dark"><i class="bi bi-hourglass-split me-1"></i> Status: Dalam Proses Pengerjaan</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Parameter 3: Tanggal Pernikahan -->
                        <div class="p-3 border rounded-3 mb-3 bg-light bg-opacity-25">
                            <div class="d-md-flex justify-content-between align-items-start mb-2">
                                <div>
                                    <div class="fw-bold text-dark">3. Tanggal Pernikahan & Nomor Buku Nikah</div>
                                    <div class="small text-muted"><i class="bi bi-file-earmark-text me-1"></i> Sumber Pembanding: <strong>Buku Nikah KUA / Akta Catatan Sipil</strong></div>
                                </div>
                                <span class="badge bg-success bg-opacity-10 text-success border border-success">Parameter Wajib</span>
                            </div>

                            <div class="row g-2 mb-3 small">
                                <div class="col-md-6">
                                    <div class="p-2 bg-white border rounded">
                                        <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase;">Data Eksisting di SIKEP:</div>
                                        <div class="fw-semibold text-dark">12 Agustus 2010 (No: 452/VIII/2010)</div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="p-2 bg-white border rounded">
                                        <div class="text-muted" style="font-size: 0.72rem; text-transform: uppercase;">Data Menurut Dokumen Fisik:</div>
                                        <div class="fw-semibold text-dark">12 Agustus 2010 (No: 452/VIII/2010)</div>
                                    </div>
                                </div>
                            </div>

                            <label class="form-label small fw-semibold text-muted d-block mb-1">Hasil Evaluasi:</label>
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
                    <div class="card-footer bg-white border-top py-3 d-flex justify-content-between align-items-center">
                        <span class="small text-muted"><i class="bi bi-info-circle me-1"></i> Terakhir disimpan: 15 Okt 2026, 14:32 WIB</span>
                        <div class="d-flex gap-2 align-items-center">
                            @if(\App\Services\AccessControl::can('input_monitoring'))
                                <button type="button" class="btn btn-sm btn-outline-secondary" onclick="alert('Draf checklist tersimpan.')">
                                    <i class="bi bi-floppy me-1"></i> Simpan Draf
                                </button>
                                <button type="submit" class="btn btn-sm btn-ma-gold">
                                    <i class="bi bi-check2-circle me-1"></i> Simpan Hasil & Perbarui Status
                                </button>
                            @else
                                <span class="badge bg-light text-muted border px-3 py-2">
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
@endsection
