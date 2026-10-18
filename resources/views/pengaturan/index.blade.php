@extends('layouts.app')

@section('title', 'Pengaturan Satker & Periode')

@section('content')
<div class="container-fluid px-0">

    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Pengaturan Satker & Periode Monitoring</h2>
            <p class="text-muted small mb-0">Konfigurasi Identitas Satuan Kerja dan Siklus Pelaksanaan Evaluasi Data</p>
        </div>
    </div>

    <div class="row g-4">
        <!-- Periode Monitoring Management -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-3 mb-4">
                <div class="card-header bg-white border-bottom py-3 d-flex justify-content-between align-items-center">
                    <h6 class="fw-bold text-dark mb-0"><i class="bi bi-calendar-range text-primary me-2"></i>Daftar Periode Monitoring</h6>
                    <button class="btn btn-sm btn-outline-primary" onclick="alert('Form buka periode baru...');">
                        <i class="bi bi-plus-lg me-1"></i> Buka Periode Baru
                    </button>
                </div>
                <div class="table-responsive">
                    <table class="table table-custom mb-0">
                        <thead>
                            <tr>
                                <th>Nama Periode</th>
                                <th>Tahun & Tipe</th>
                                <th>Rentang Tanggal</th>
                                <th>Status</th>
                                <th class="text-end">Aksi Kunci</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-bold text-dark">Semester I 2026</span></td>
                                <td>2026 &bull; Semester</td>
                                <td class="small text-muted">01 Jan 2026 s.d 30 Jun 2026</td>
                                <td><span class="badge bg-success">Aktif (Terbuka)</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-outline-warning py-1 px-2" onclick="confirm('Kunci periode ini? Setelah dikunci data tidak dapat diubah lagi.')">
                                        <i class="bi bi-lock me-1"></i> Kunci Periode
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold text-dark">Semester II 2025</span></td>
                                <td>2025 &bull; Semester</td>
                                <td class="small text-muted">01 Jul 2025 s.d 31 Des 2025</td>
                                <td><span class="badge bg-secondary">Terkunci (Final)</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm btn-light border py-1 px-2 text-muted" disabled>
                                        <i class="bi bi-lock-fill"></i> Terkunci
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Identitas Satker Card -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-3">
                <div class="card-header bg-white border-bottom py-3">
                    <h6 class="fw-bold text-dark mb-0"><i class="bi bi-bank text-primary me-2"></i>Identitas Satuan Kerja</h6>
                </div>
                <div class="card-body p-4">
                    <form action="#" onsubmit="event.preventDefault(); alert('Identitas satker berhasil disimpan.');">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Nama Satuan Kerja</label>
                            <input type="text" class="form-control form-control-sm" value="Pengadilan Negeri / Pengadilan Agama Contoh Kelas IA" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Wilayah Hukum / Pengadilan Tingkat Banding</label>
                            <input type="text" class="form-control form-control-sm" value="Pengadilan Tinggi Jawa Barat" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Kode Unik Satker</label>
                            <input type="text" class="form-control form-control-sm" value="099124" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Alamat Kantor</label>
                            <textarea class="form-control form-control-sm" rows="2">Jl. Keadilan Agung No. 1, Telp: (021) 87654321</textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-sm btn-ma-navy">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
