@extends('layouts.app')

@section('title', 'Detail & Tindak Lanjut Temuan')

@section('content')
<div class="container-fluid px-0">

    <!-- Banner: Temuan code + pegawai + status -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-0" style="padding: 1.25rem 1rem 0;">
            <div class="left">
                <div class="d-flex align-items-center gap-3">
                    <div class="rounded-circle d-flex align-items-center justify-content-center fw-bold fs-3"
                         style="width: 72px; height: 72px; background: #FEF3C7; color: var(--ma-teal-dark); border: 2px solid var(--ma-teal); flex-shrink: 0;">
                        AF
                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-2 flex-wrap">
                            <span class="badge-code badge badge-status">TMN/2026/001</span>
                            <span class="badge-status badge-belum" style="padding:0.2rem 0.55rem;">Belum Ditindaklanjuti</span>
                            <span class="badge" style="background:#FEF3C7;color:#B45309;border:1px solid #FCD34D;">Urgensi Tinggi</span>
                        </div>
                        <h2 class="h5 fw-bold mb-0 mt-1">Ahmad Fauzi, S.H.</h2>
                        <div class="small text-muted">NIP 198504122011011003 &bull; Hakim Pratama &bull; PA Medan Kelas IA</div>
                    </div>
                </div>
            </div>
            <div class="right">
                <div class="text-end me-3" style="max-width:220px;">
                    <div class="small text-muted">Batas Waktu Tuntas</div>
                    <div class="fw-bold" style="color:var(--ma-danger);">25 Okt 2026 &mdash; Tersisa 7 Hari</div>
                </div>
                <a href="{{ route('temuan.index') }}" class="btn-outline-teal btn btn-sm" style="border-color:var(--ma-teal);color:var(--ma-teal);">
                    <i class="bi bi-arrow-left me-1"></i> Kembali
                </a>
            </div>
        </div>
        <!-- progress strip -->
        <div style="padding:0.75rem 1rem; border-top:1px solid var(--ma-border);">
            <div class="d-flex justify-content-between small mb-1">
                <span class="text-muted fw-semibold">Progres Tindak Lanjut</span>
                <span class="fw-bold" style="color:var(--ma-teal);">25%</span>
            </div>
            <div style="height:6px; background:#FEF3C7; border-radius:3px; overflow:hidden;">
                <div style="width:25%; height:100%; background:var(--ma-teal);"></div>
            </div>
        </div>
    </div>

    <!-- Tab section -->
    <div class="table-card">
        <!-- tab nav -->
        <div style="display:flex; gap:0.5rem; padding:0.75rem 1rem 0; border-bottom:1px solid var(--ma-border); flex-wrap:wrap;">
            <div class="tab-teal active">
                <i class="bi bi-journal-text"></i> Detail Temuan
            </div>
            <div class="tab-teal">
                <i class="bi bi-pencil-square"></i> Form Tindak Lanjut
            </div>
            <div class="tab-teal">
                <i class="bi bi-clock-history"></i> Riwayat &amp; Audit Trail
            </div>
        </div>

        <!-- TAB 1: Detail Temuan -->
        <div style="padding:1.25rem 1.25rem 0;">
            <div class="row g-3">
                <div class="col-lg-7">
                    <div class="form-card">
                        <div class="form-card-header">
                            <i class="bi bi-exclamation-triangle-fill" style="color:var(--ma-gold);"></i>
                            <h6 class="mb-0">Uraian Ketidaksesuaian Data SIKEP</h6>
                        </div>
                        <p class="small text-muted mb-2">Ditemukan pada monitoring Semester I 2026 oleh Petugas Kepegawaian.</p>
                        <div style="background:#FFFBEB; border:1px solid #FDE68A; border-left:4px solid var(--ma-gold); border-radius:6px; padding:0.85rem 1rem; font-size:0.85rem; color:#78350F;">
                            Pendidikan terakhir pada SIKEP pusat masih tercatat <strong>S1 Ilmu Hukum</strong>. Padahal ybs. telah menyelesaikan program Magister Hukum (S2), IPK 3.85, nilai akreditasi A, dan telah mengantongi ijazah sah (No. 451/MH/2025).
                        </div>

                        <div class="form-card-header mt-4">
                            <i class="bi bi-lightbulb-fill" style="color:var(--ma-teal);"></i>
                            <h6 class="mb-0">Rekomendasi Tindakan</h6>
                        </div>
                        <ul class="small" style="color:var(--ma-text-muted); margin:0.5rem 0 0; padding-left:1.1rem; line-height:1.9;">
                            <li>Input riwayat pendidikan S2 pada menu <strong class="text-dark">Riwayat Pendidikan</strong> SIKEP.</li>
                            <li>Unggah scan <strong class="text-dark">SK Pencantuman Gelar</strong> dari BKN/MA-RI.</li>
                            <li>Lampirkan scan ijazah dan transkrip nilai asli (format PDF, maks. 5 MB).</li>
                        </ul>
                    </div>

                    <div class="form-card mt-3">
                        <div class="form-card-header">
                            <i class="bi bi-arrow-left-right" style="color:var(--ma-teal);"></i>
                            <h6 class="mb-0">Rekam Jejak Data (Audit Trail)</h6>
                        </div>
                        <div class="detail-table">
                            <div class="detail-row">
                                <div class="label">Nilai Data Lama</div>
                                <div class="value">S1 &ndash; Ilmu Hukum <span class="badge-status badge-belum" style="padding:0.15rem 0.45rem; margin-left:0.5rem;">Ketidaksesuaian</span></div>
                            </div>
                            <div class="detail-row">
                                <div class="label">Nilai Data Target</div>
                                <div class="value">S2 &ndash; Magister Ilmu Hukum</div>
                            </div>
                            <div class="detail-row">
                                <div class="label">Dasar Dokumen</div>
                                <div class="value">SK Pencantuman Gelar BKN No. 128/PG/BKN/2026</div>
                            </div>
                            <div class="detail-row">
                                <div class="label">Periode Terdampak</div>
                                <div class="value">Semester I 2026 &mdash; menunggu koreksi input</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="form-card">
                        <div class="form-card-header">
                            <i class="bi bi-diagram-3-fill" style="color:var(--ma-teal);"></i>
                            <h6 class="mb-0">Siklus Tahapan Status</h6>
                        </div>
                        <div class="position-relative" style="padding-left:1.5rem; border-left:2px solid #FEF3C7; margin-left:0.5rem;">
                            <div class="mb-3 position-relative">
                                <i class="bi bi-check-circle-fill" style="position:absolute; left:-23px; top:1px; color:var(--ma-success); background:var(--ma-surface);"></i>
                                <div class="fw-bold small">Temuan Dicatat</div>
                                <div class="small text-muted">14 Okt 2026 &bull; Rina Anggraini (Petugas)</div>
                            </div>
                            <div class="mb-3 position-relative">
                                <i class="bi bi-record-circle-fill" style="position:absolute; left:-23px; top:1px; color:var(--ma-teal); background:var(--ma-surface);"></i>
                                <div class="fw-bold small" style="color:var(--ma-teal);">Tindak Lanjut &amp; Revisi Data</div>
                                <div class="small text-muted">Tahap aktif &mdash; menyiapkan dokumen perbaikan</div>
                            </div>
                            <div class="mb-3 position-relative">
                                <i class="bi bi-circle" style="position:absolute; left:-23px; top:4px; color:#CBD5E1; background:var(--ma-surface);"></i>
                                <div class="fw-bold small text-muted">Diajukan Selesai</div>
                                <div class="small text-muted">Menunggu submit ke reviewer</div>
                            </div>
                            <div class="position-relative">
                                <i class="bi bi-circle" style="position:absolute; left:-23px; top:4px; color:#CBD5E1; background:var(--ma-surface);"></i>
                                <div class="fw-bold small text-muted">Diverifikasi Pimpinan</div>
                                <div class="small text-muted">Sah dan masuk laporan resmi</div>
                            </div>
                        </div>
                    </div>

                    <div class="form-card mt-3">
                        <div class="form-card-header">
                            <i class="bi bi-info-circle" style="color:var(--ma-text-muted);"></i>
                            <h6 class="mb-0">Informasi Temuan</h6>
                        </div>
                        <div class="detail-table">
                            <div class="detail-row">
                                <div class="label">Kode Temuan</div>
                                <div class="value"><span class="badge-code badge badge-status">TMN/2026/001</span></div>
                            </div>
                            <div class="detail-row">
                                <div class="label">Kelompok Kamus</div>
                                <div class="value"><span class="badge-kelompok badge badge-status">C. Kompetensi</span> C.1 Pendidikan Formal</div>
                            </div>
                            <div class="detail-row">
                                <div class="label">Tanggal Ditemukan</div>
                                <div class="value">14 Oktober 2026</div>
                            </div>
                            <div class="detail-row">
                                <div class="label">Batas Tuntas</div>
                                <div class="value fw-bold" style="color:var(--ma-danger);">25 Oktober 2026 (Tersisa 7 Hari)</div>
                            </div>
                            <div class="detail-row">
                                <div class="label">Penanggung Jawab</div>
                                <div class="value">Rina Anggraini, S.E. &mdash; Petugas Kepegawaian</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TAB 2: Form Tindak Lanjut -->
        <div style="padding:1.25rem 1.25rem 0;">
            <div class="row g-3">
                <div class="col-lg-8">
                    <div class="form-card">
                        <div class="form-card-header d-flex justify-content-between align-items-center">
                            <div class="d-flex align-items-center gap-2">
                                <i class="bi bi-pencil-square" style="color:var(--ma-teal);"></i>
                                <h6 class="mb-0">Realisasi Tindak Lanjut &amp; Pemutakhiran Data</h6>
                            </div>
                            <span class="badge-status badge-proses" style="padding:0.25rem 0.6rem;"><i class="bi bi-hourglass-split"></i> Sedang Dikerjakan</span>
                        </div>

                        <div class="p-3" style="padding:1rem 1.25rem 0;">
                            <label class="form-label small fw-semibold">Uraian Tindakan Perbaikan di SIKEP <span style="color:var(--ma-danger);">*</span></label>
                            <textarea class="form-control input-bordered" rows="3" placeholder="Jelaskan langkah perbaikan yang telah / akan dilakukan..." required>Telah dilakukan entry riwayat pendidikan S2 Magister Hukum pada menu Riwayat Pendidikan di aplikasi SIKEP. Nilai akreditasi A, IPK 3.85, nomor ijazah 451/MH/2025.</textarea>

                            <div class="row g-2 mt-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Nilai Data Baru <span style="color:var(--ma-danger);">*</span></label>
                                    <input type="text" class="form-control form-control-sm input-bordered" value="S2 - Magister Ilmu Hukum" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Dasar Surat / Dokumen <span style="color:var(--ma-danger);">*</span></label>
                                    <input type="text" class="form-control form-control-sm input-bordered" value="SK Pencantuman Gelar BKN No: 128/PG/BKN/2026" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Tanggal Pembaruan di SIKEP <span style="color:var(--ma-danger);">*</span></label>
                                    <input type="date" class="form-control form-control-sm input-bordered" value="{{ date('Y-m-d') }}" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Catatan untuk Reviewer / Kasubbag</label>
                                    <input type="text" class="form-control form-control-sm input-bordered" placeholder="Catatan opsional sebelum diverifikasi...">
                                </div>
                            </div>

                            <!-- upload bukti -->
                            <label class="form-label small fw-semibold mt-4">Unggah Dokumen Bukti (PDF / Scan Ijazah) <span style="color:var(--ma-danger);">*</span></label>
                            <div class="file-drop">
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <div class="fw-semibold small">Pilih file atau seret &amp; lepas ke sini</div>
                                <div class="small text-muted">Maksimal 5 MB &mdash; format .pdf, .jpg, .png</div>
                            </div>
                            <div class="mt-2 d-flex align-items-center gap-2 small">
                                <i class="bi bi-file-earmark-pdf" style="color:var(--ma-danger);"></i>
                                <span>File terpilih: <strong>Scan_Ijazah_S2_Ahmad_Fauzi.pdf</strong> (1.4 MB)</span>
                                <button class="icon-btn danger ms-auto"><i class="bi bi-x-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="form-card">
                        <div class="form-card-header">
                            <i class="bi bi-shield-check" style="color:var(--ma-success);"></i>
                            <h6 class="mb-0">Status &amp; Tindakan</h6>
                        </div>
                        <div class="p-3" style="padding:1rem 1.25rem 0;">
                            <div class="detail-table">
                                <div class="detail-row">
                                    <div class="label">Status Saat Ini</div>
                                    <div class="value"><span class="badge-status badge-belum">Belum Ditindaklanjuti</span></div>
                                </div>
                                <div class="detail-row">
                                    <div class="label">Periode</div>
                                    <div class="value">Semester I 2026</div>
                                </div>
                                <div class="detail-row">
                                    <div class="label">Sistem Notifikasi</div>
                                    <div class="value small">Reminder otomatis terkirim tiap 48 jam sebelum batas</div>
                                </div>
                            </div>

                            <hr style="border-color:var(--ma-border);">

                            @if(\App\Services\AccessControl::can('input_tindak_lanjut'))
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn-teal btn" onclick="alert('Tindak lanjut berhasil diajukan untuk verifikasi pimpinan!'); window.location.href='{{ route('temuan.index') }}';">
                                        <i class="bi bi-send-check-fill me-2"></i>Ajukan untuk Verifikasi Pimpinan
                                    </button>
                                    <button type="button" class="btn-ghost btn" onclick="alert('Draf tindak lanjut disimpan sementara.')">
                                        <i class="bi bi-floppy me-2"></i>Simpan Draf
                                    </button>
                                </div>
                            @elseif(\App\Services\AccessControl::can('do_verification'))
                                <div class="d-grid gap-2">
                                    <button type="button" class="btn-teal btn" style="background:var(--ma-success);" onclick="alert('Hasil perbaikan diverifikasi dan disetujui!'); window.location.href='{{ route('temuan.index') }}';">
                                        <i class="bi bi-check-circle-fill me-2"></i>Sahkan &amp; Setujui (Verifikasi)
                                    </button>
                                    <button type="button" class="btn-ghost btn" style="color:var(--ma-danger); border-color:var(--ma-danger);" onclick="alert('Berkas dikembalikan ke petugas untuk revisi.'); window.location.href='{{ route('temuan.index') }}';">
                                        <i class="bi bi-x-circle me-2"></i>Tolak &amp; Minta Revisi
                                    </button>
                                </div>
                            @else
                                <div class="flash-alert" style="border-left-color:var(--ma-text-muted); background:#F1F5F9; color:var(--ma-text-muted);">
                                    <i class="bi bi-info-circle me-1"></i> Mode Pemantauan Administrator &mdash; tidak dapat edit
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <!-- role-aware footer -->
            <div style="display:flex; justify-content:flex-end; gap:0.5rem; padding:1rem 1.25rem; border-top:1px solid var(--ma-border);">
                <a href="{{ route('temuan.index') }}" class="btn-ghost btn btn-sm">Batal</a>
                @if(\App\Services\AccessControl::can('input_tindak_lanjut') || \App\Services\AccessControl::can('do_verification'))
                    <button type="button" class="btn-teal btn btn-sm" onclick="alert('Perubahan disimpan.'); window.location.href='{{ route('temuan.index') }}';">
                        <i class="bi bi-save me-1"></i> Simpan &amp; Lanjutkan
                    </button>
                @endif
            </div>
        </div>
    </div>

</div>
@endsection
