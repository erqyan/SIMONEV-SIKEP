@extends('layouts.app')

@section('title', 'Pengaturan Satker & Periode')

@section('content')
<div class="container-fluid px-0">

    <!-- Header -->
    <div class="table-card mb-4">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Pengaturan Satker &amp; Periode Monitoring</h2>
                <small class="text-muted">Konfigurasi identitas satuan kerja dan siklus pelaksanaan evaluasi data</small>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <!-- Periode Monitoring -->
        <div class="col-lg-7">
            <div class="table-card">
                <div class="table-toolbar mb-0">
                    <div class="left">
                        <h6 class="fw-bold mb-0"><i class="bi bi-calendar-range me-2" style="color:var(--ma-teal);"></i>Daftar Periode Monitoring</h6>
                    </div>
                    <div class="right">
                        <button class="btn-outline-teal btn btn-sm" style="color:var(--ma-teal); border-color:var(--ma-teal);" onclick="alert('Form buka periode baru...');">
                            <i class="bi bi-plus-lg me-1"></i> Buka Periode Baru
                        </button>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-custom mb-0">
                        <thead>
                            <tr>
                                <th>Nama Periode</th>
                                <th>Tahun &amp; Tipe</th>
                                <th>Rentang Tanggal</th>
                                <th>Status</th>
                                <th class="text-end" style="width:150px;">Aksi Kunci</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="fw-bold">Semester I 2026</span></td>
                                <td>2026 &bull; Semester</td>
                                <td class="small text-muted">01 Jan 2026 s.d 30 Jun 2026</td>
                                <td><span class="badge-status badge-selesai">Aktif (Terbuka)</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D; font-size:0.78rem;"
                                            onclick="confirm('Kunci periode ini? Setelah dikunci data tidak dapat diubah lagi.')">
                                        <i class="bi bi-lock me-1"></i> Kunci Periode
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="fw-bold">Semester II 2025</span></td>
                                <td>2025 &bull; Semester</td>
                                <td class="small text-muted">01 Jul 2025 s.d 31 Des 2025</td>
                                <td><span class="badge-status" style="background:#F1F5F9; color:#475569; border:1px solid #CBD5E1;">Terkunci (Final)</span></td>
                                <td class="text-end">
                                    <button class="btn btn-sm text-muted" style="background:#F4F6F7; border:1px solid var(--ma-border); color:var(--ma-text-muted); font-size:0.78rem;" disabled>
                                        <i class="bi bi-lock-fill"></i> Terkunci
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Identitas Satker -->
        <div class="col-lg-5">
            <div class="table-card">
                <div class="table-toolbar mb-0">
                    <div class="left">
                        <h6 class="fw-bold mb-0"><i class="bi bi-bank me-2" style="color:var(--ma-teal);"></i>Identitas Satuan Kerja</h6>
                    </div>
                </div>
                <div style="padding:1.25rem;">
                    <form action="#" onsubmit="event.preventDefault(); alert('Identitas satker berhasil disimpan.');">
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Nama Satuan Kerja</label>
                            <input type="text" class="form-control form-control-sm input-bordered" value="Pengadilan Negeri / Pengadilan Agama Contoh Kelas IA" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Wilayah Hukum / Pengadilan Tingkat Banding</label>
                            <input type="text" class="form-control form-control-sm input-bordered" value="Pengadilan Tinggi Jawa Barat" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Kode Unik Satker</label>
                            <input type="text" class="form-control form-control-sm input-bordered" value="099124" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label small fw-semibold text-muted">Alamat Kantor</label>
                            <textarea class="form-control form-control-sm input-bordered" rows="2">Jl. Keadilan Agung No. 1, Telp: (021) 87654321</textarea>
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn-teal btn btn-sm">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
