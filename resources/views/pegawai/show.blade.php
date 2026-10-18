@extends('layouts.app')

@section('title', 'Detail Profil Pegawai')

@section('content')
<div class="container-fluid px-0">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 small">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="{{ route('pegawai.index') }}" class="text-decoration-none">Data Pegawai</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profil Pegawai</li>
            </ol>
        </nav>
        <a href="{{ route('pegawai.index') }}" class="btn btn-sm btn-outline-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Master Pegawai
        </a>
    </div>

    <!-- Profile Header Card -->
    <div class="card border-0 shadow-sm rounded-3 mb-4">
        <div class="card-body p-4">
            <div class="d-md-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center gap-3">
                    <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-2" style="width: 72px; height: 72px;">
                        BS
                    </div>
                    <div>
                        <div class="d-flex align-items-center gap-2 mb-1">
                            <h4 class="fw-bold text-dark mb-0">Budi Santoso, S.H., M.H.</h4>
                            <span class="badge bg-success bg-opacity-10 text-success border border-success">PNS Aktif</span>
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
                <div class="mt-3 mt-md-0 d-flex gap-2">
                    <a href="{{ route('monitoring.show', 3) }}" class="btn btn-ma-gold btn-sm d-flex align-items-center gap-1">
                        <i class="bi bi-clipboard-check-fill"></i> Buka Checklist Monitoring
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs Information -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-header bg-white border-bottom py-3">
            <ul class="nav nav-tabs card-header-tabs" id="pegawaiTab" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active fw-semibold" id="bio-tab" data-bs-toggle="tab" data-bs-target="#bio-pane">Ringkasan Data Pokok</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link fw-semibold" id="karir-tab" data-bs-toggle="tab" data-bs-target="#karir-pane">Riwayat Jabatan & Pangkat</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link fw-semibold" id="history-tab" data-bs-toggle="tab" data-bs-target="#history-pane">Catatan Hasil Monitoring Periode Ini</button>
                </li>
            </ul>
        </div>
        <div class="card-body p-4">
            <div class="tab-content" id="pegawaiTabContent">
                <!-- Tab 1: Bio -->
                <div class="tab-pane fade show active" id="bio-pane">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <table class="table table-sm table-borderless small mb-0">
                                <tr><th style="width: 170px;" class="text-muted">Tempat, Tanggal Lahir</th><td>Bogor, 11 Maret 1980</td></tr>
                                <tr><th class="text-muted">Jenis Kelamin</th><td>Laki-laki</td></tr>
                                <tr><th class="text-muted">Agama</th><td>Islam</td></tr>
                                <tr><th class="text-muted">Pendidikan Terakhir</th><td>S2 Magister Hukum (Universitas Indonesia)</td></tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table table-sm table-borderless small mb-0">
                                <tr><th style="width: 170px;" class="text-muted">Nomor Karpeg</th><td>M. 129482</td></tr>
                                <tr><th class="text-muted">NPWP</th><td>08.123.456.7-412.000</td></tr>
                                <tr><th class="text-muted">Nama Pasangan</th><td>Nurul Hidayati, S.Pd.</td></tr>
                                <tr><th class="text-muted">Jumlah Anak</th><td>2 Orang Anak Kandung</td></tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Tab 2: Karir -->
                <div class="tab-pane fade" id="karir-pane">
                    <div class="small text-muted">
                        Riwayat SK CPNS (TMT 01/04/2006) &rarr; SK PNS (TMT 01/05/2007) &rarr; Kenaikan Pangkat Penata Muda Tk. I (III/b) &rarr; Penata (III/c) &rarr; Penata Tk. I (III/d) &rarr; Pembina (IV/a, TMT 01/10/2022).
                    </div>
                </div>
                <!-- Tab 3: History -->
                <div class="tab-pane fade" id="history-pane">
                    <div class="alert alert-info small mb-0">
                        <i class="bi bi-info-circle-fill me-1"></i> Ditemukan 1 parameter non-sesuai pada Subkelompok A.4 (NIK Pasangan). Sedang dalam proses tindak lanjut oleh petugas.
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
