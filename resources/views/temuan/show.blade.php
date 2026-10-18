@extends('layouts.app')

@section('title', 'Detail & Form Tindak Lanjut Temuan')

@section('content')
<div class="container-fluid px-0">

    <!-- Top Breadcrumb -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('temuan.index') }}" class="text-decoration-none">Daftar Temuan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tindak Lanjut TMN/2026/001</li>
            </ol>
        </nav>
        <a href="{{ route('temuan.index') }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar Temuan
        </a>
    </div>

    <div class="row g-4">
        <!-- Left Column: Detail Temuan -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-3 mb-4">
                <div class="card-header bg-white border-bottom py-3">
                    <span class="badge bg-danger mb-1">Tingkat Urgensi: Tinggi</span>
                    <h5 class="fw-bold text-dark mb-0">TMN/2026/001: Ijazah S2 Magister Hukum Belum Tercatat</h5>
                </div>
                <div class="card-body p-4">
                    <div class="mb-3">
                        <label class="text-muted small fw-semibold text-uppercase d-block" style="font-size: 0.72rem;">Pegawai Terkait</label>
                        <div class="fw-bold text-dark fs-6">Ahmad Fauzi, S.H.</div>
                        <div class="small text-muted">NIP: 198504122011011003 &bull; Hakim Pratama</div>
                    </div>

                    <div class="mb-3">
                        <label class="text-muted small fw-semibold text-uppercase d-block" style="font-size: 0.72rem;">Kelompok & Parameter Kamus</label>
                        <span class="badge bg-light text-primary border">Kelompok C. Pengembangan Kompetensi</span>
                        <div class="small fw-semibold text-dark mt-1">C.1 Pendidikan Formal (Jenjang Magister / S2)</div>
                    </div>

                    <div class="mb-3">
                        <label class="text-muted small fw-semibold text-uppercase d-block" style="font-size: 0.72rem;">Uraian Temuan Ketidaksesuaian</label>
                        <div class="p-3 bg-light rounded-3 text-dark small border">
                            Pada aplikasi SIKEP Pusat, pendidikan terakhir tercatat masih Sarjana Hukum (S1). Padahal ybs telah lulus program Magister Hukum (S2) dan telah mengantongi ijazah sah.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="text-muted small fw-semibold text-uppercase d-block" style="font-size: 0.72rem;">Rekomendasi Tindakan</label>
                        <div class="p-3 bg-primary bg-opacity-10 text-primary rounded-3 small border border-primary border-opacity-25">
                            <i class="bi bi-lightbulb-fill me-1"></i> Input riwayat pendidikan S2 pada menu Pendidikan SIKEP, unggah scan SK Pencantuman Gelar dari BKN/MA, dan lampirkan scan ijazah serta transkrip asli.
                        </div>
                    </div>

                    <div class="row g-2 text-muted small border-top pt-3">
                        <div class="col-6">
                            <div>Tanggal Ditemukan:</div>
                            <strong class="text-dark">14 Oktober 2026</strong>
                        </div>
                        <div class="col-6">
                            <div>Batas Waktu:</div>
                            <strong class="text-danger">25 Oktober 2026</strong>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Status Timeline Card -->
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-white border-bottom py-3">
                    <h6 class="fw-bold text-dark mb-0 small text-uppercase" style="letter-spacing: 0.5px;">
                        <i class="bi bi-diagram-3-fill me-1 text-primary"></i> Siklus Tahapan Status
                    </h6>
                </div>
                <div class="card-body p-4">
                    <div class="position-relative ps-4 border-start border-2 border-primary">
                        <div class="mb-3 position-relative">
                            <i class="bi bi-check-circle-fill text-success position-absolute" style="left: -25px; top: 0;"></i>
                            <div class="fw-bold text-dark small">1. Temuan Dicatat</div>
                            <div class="text-muted" style="font-size: 0.75rem;">14 Okt 2026 oleh Petugas Kepegawaian</div>
                        </div>
                        <div class="mb-3 position-relative">
                            <i class="bi bi-record-circle-fill text-primary position-absolute" style="left: -25px; top: 0;"></i>
                            <div class="fw-bold text-primary small">2. Dalam Proses Tindak Lanjut</div>
                            <div class="text-muted" style="font-size: 0.75rem;">Tahap aktif saat ini (Menyiapkan Dokumen)</div>
                        </div>
                        <div class="mb-3 position-relative opacity-50">
                            <i class="bi bi-circle text-muted position-absolute" style="left: -25px; top: 0;"></i>
                            <div class="fw-bold text-dark small">3. Diajukan Selesai</div>
                            <div class="text-muted" style="font-size: 0.75rem;">Menunggu verifikasi pimpinan satker</div>
                        </div>
                        <div class="position-relative opacity-50">
                            <i class="bi bi-circle text-muted position-absolute" style="left: -25px; top: 0;"></i>
                            <div class="fw-bold text-dark small">4. Diverifikasi & Selesai</div>
                            <div class="text-muted" style="font-size: 0.75rem;">Disetujui dan masuk laporan resmi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Form Realisasi Tindak Lanjut & Upload Bukti -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="fw-bold text-dark mb-0"><i class="bi bi-pencil-square text-primary me-2"></i>Form Realisasi Tindak Lanjut & Pemutakhiran</h6>
                        <small class="text-muted">Isi tindakan perbaikan di SIKEP dan unggah berkas bukti sah</small>
                    </div>
                    <span class="badge bg-warning text-dark"><i class="bi bi-hourglass-split me-1"></i> Sedang Dikerjakan</span>
                </div>

                <div class="card-body p-4">
                    <form action="#" onsubmit="event.preventDefault(); alert('Tindak lanjut berhasil diajukan untuk verifikasi pimpinan!'); window.location.href='{{ route('temuan.index') }}';">
                        
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-dark">Uraian Tindakan Perbaikan yang Telah Dilakukan di SIKEP <span class="text-danger">*</span></label>
                            <textarea class="form-control small" rows="3" placeholder="Jelaskan langkah yang telah Anda lakukan..." required>Telah dilakukan entry riwayat pendidikan S2 Magister Hukum pada menu Riwayat Pendidikan di aplikasi SIKEP. Nilai akreditasi A, IPK 3.85, nomor ijazah 451/MH/2025.</textarea>
                        </div>

                        <!-- Audit Trail Data Lama vs Baru -->
                        <div class="p-3 bg-light rounded-3 border mb-3">
                            <div class="fw-bold text-dark small mb-2"><i class="bi bi-arrow-left-right text-primary me-1"></i> Rekam Jejak Pembaruan Data (Audit Trail):</div>
                            <div class="row g-2 mb-2">
                                <div class="col-md-6">
                                    <label class="form-label small text-muted mb-0">Nilai Data Lama (Sebelumnya)</label>
                                    <input type="text" class="form-control form-control-sm bg-white" value="S1 - Ilmu Hukum" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small text-muted mb-0">Nilai Data Baru (Setelah Koreksi) <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" value="S2 - Magister Ilmu Hukum" required>
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="col-md-7">
                                    <label class="form-label small text-muted mb-0">Dasar Surat / Dokumen Perubahan <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-sm" value="SK Pencantuman Gelar BKN No: 128/PG/BKN/2026" required>
                                </div>
                                <div class="col-md-5">
                                    <label class="form-label small text-muted mb-0">Tanggal Pembaruan di SIKEP <span class="text-danger">*</span></label>
                                    <input type="date" class="form-control form-control-sm" value="{{ date('Y-m-d') }}" required>
                                </div>
                            </div>
                        </div>

                        <!-- Upload Berkas Bukti -->
                        <div class="mb-4">
                            <label class="form-label small fw-semibold text-dark">Unggah Dokumen Bukti Pendukung (PDF/Scan Ijazah) <span class="text-danger">*</span></label>
                            <div class="border border-2 border-dashed rounded-3 p-4 text-center bg-light bg-opacity-50">
                                <i class="bi bi-cloud-arrow-up-fill fs-2 text-primary d-block mb-1"></i>
                                <span class="small fw-semibold text-dark d-block">Pilih file atau seret file PDF/JPG ke sini</span>
                                <span class="text-muted" style="font-size: 0.75rem;">Maksimal ukuran file: 5 MB (Format: .pdf, .jpg, .png)</span>
                                <input type="file" class="form-control form-control-sm mt-3 mx-auto" style="max-width: 300px;">
                            </div>
                            <div class="mt-2 small text-muted d-flex align-items-center gap-2">
                                <i class="bi bi-file-earmark-pdf text-danger fs-5"></i>
                                <span>Contoh file terpilih: <strong>Scan_Ijazah_S2_Ahmad_Fauzi.pdf</strong> (1.4 MB)</span>
                            </div>
                        </div>

                        <!-- Catatan untuk Reviewer / Pimpinan -->
                        <div class="mb-4">
                            <label class="form-label small fw-semibold text-dark">Catatan Petugas untuk Reviewer / Kasubbag</label>
                            <input type="text" class="form-control form-control-sm" placeholder="Catatan opsional kepada pimpinan sebelum diverifikasi...">
                        </div>

                        <!-- Submit Buttons (Role-Aware) -->
                        <div class="d-flex justify-content-between align-items-center border-top pt-3">
                            <a href="{{ route('temuan.index') }}" class="btn btn-sm btn-light border">Batal</a>
                            <div class="d-flex gap-2">
                                @if(\App\Services\AccessControl::can('input_tindak_lanjut'))
                                    <button type="button" class="btn btn-sm btn-outline-secondary" onclick="alert('Draf tindak lanjut disimpan sementara.')">
                                        <i class="bi bi-floppy me-1"></i> Simpan Draf
                                    </button>
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="bi bi-send-check-fill me-1"></i> Ajukan untuk Verifikasi Pimpinan
                                    </button>
                                @elseif(\App\Services\AccessControl::can('do_verification'))
                                    <button type="button" class="btn btn-sm btn-outline-danger" onclick="alert('Berkas tindak lanjut dikembalikan kepada petugas untuk revisi.'); window.location.href='{{ route('temuan.index') }}';">
                                        <i class="bi bi-x-circle me-1"></i> Tolak / Minta Revisi
                                    </button>
                                    <button type="button" class="btn btn-sm btn-success" onclick="alert('Hasil perbaikan diverifikasi dan disetujui!'); window.location.href='{{ route('temuan.index') }}';">
                                        <i class="bi bi-check-circle-fill me-1"></i> Sahkan & Setujui (Verify)
                                    </button>
                                @else
                                    <span class="badge bg-light text-muted border px-3 py-2">
                                        <i class="bi bi-info-circle me-1"></i> Mode Pemantauan Administrator
                                    </span>
                                @endif
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
