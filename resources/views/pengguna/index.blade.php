@extends('layouts.app')

@section('title', 'Manajemen Pengguna & Hak Akses')

@section('content')
<div class="container-fluid px-0">

    <!-- Header + Toolbar -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Manajemen Pengguna &amp; Hak Akses <span class="badge-code badge badge-status ms-2">RBAC</span></h2>
                <small class="text-muted">Pengaturan otorisasi administrator, petugas kepegawaian, dan reviewer/pimpinan</small>
            </div>
            <div class="right">
                <button class="btn-teal btn btn-sm" onclick="alert('Form tambah user baru...');">
                    <i class="bi bi-person-plus-fill me-1"></i> Tambah Pengguna
                </button>
            </div>
        </div>

        <!-- KPI pengguna -->
        <div class="row g-3" style="padding:1rem 1rem 0;">
            <div class="col-md-4">
                <div class="card-stat">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-stat-title">Total Pengguna</div>
                            <div class="card-stat-value">3</div>
                            <div class="card-stat-sub">Akun terdaftar aktif</div>
                        </div>
                        <div class="card-stat-icon"><i class="bi bi-people-fill"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-stat">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-stat-title">Peran Tersedia</div>
                            <div class="card-stat-value">3</div>
                            <div class="card-stat-sub">Admin &bull; Petugas &bull; Reviewer</div>
                        </div>
                        <div class="card-stat-icon bg-primary"><i class="bi bi-shield-fill-check"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-stat">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="card-stat-title">Satuan Kerja</div>
                            <div class="card-stat-value">1</div>
                            <div class="card-stat-sub">PN / PA Kelas IA Contoh</div>
                        </div>
                        <div class="card-stat-icon bg-success"><i class="bi bi-building"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabel pengguna -->
    <div class="table-card">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h6 class="fw-bold mb-0"><i class="bi bi-person-lines-fill me-2" style="color:var(--ma-teal);"></i>Daftar Pengguna Sistem</h6>
            </div>
            <div class="right">
                <span class="text-muted small">Total <strong style="color:var(--ma-teal);">3</strong> pengguna</span>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width:45px;">No</th>
                        <th>Nama Pengguna</th>
                        <th>Username / Email</th>
                        <th>Peran (Role)</th>
                        <th>Satuan Kerja</th>
                        <th>Status Akun</th>
                        <th class="text-end" style="width:80px;">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <div class="fw-bold">Ahmad Fauzi, S.Kom</div>
                            <div class="small text-muted">NIP: 198801152014031002</div>
                        </td>
                        <td>
                            <div class="fw-semibold">admin.sikep</div>
                            <div class="small text-muted">ahmad.fauzi@mahkamahagung.go.id</div>
                        </td>
                        <td><span class="badge" style="background:#1E3A5C; color:#fff;">Administrator</span></td>
                        <td>PN / PA Kelas IA Contoh</td>
                        <td><span class="badge-status badge-selesai"><i class="bi bi-dot"></i> Aktif</span></td>
                        <td class="text-end">
                            <button class="icon-btn" title="Edit Pengguna" onclick="alert('Form edit pengguna Ahmad Fauzi...');"><i class="bi bi-pencil"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <div class="fw-bold">Rina Anggraini, S.E.</div>
                            <div class="small text-muted">NIP: 199203102018012001</div>
                        </td>
                        <td>
                            <div class="fw-semibold">petugas.kepegawaian</div>
                            <div class="small text-muted">rina.a@mahkamahagung.go.id</div>
                        </td>
                        <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D;">Petugas Kepegawaian</span></td>
                        <td>PN / PA Kelas IA Contoh</td>
                        <td><span class="badge-status badge-selesai"><i class="bi bi-dot"></i> Aktif</span></td>
                        <td class="text-end">
                            <button class="icon-btn" title="Edit Pengguna" onclick="alert('Form edit pengguna Rina Anggraini...');"><i class="bi bi-pencil"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <div class="fw-bold">Dewi Lestari, S.E.</div>
                            <div class="small text-muted">NIP: 198811252014022003 &bull; Kasubbag Ortala</div>
                        </td>
                        <td>
                            <div class="fw-semibold">reviewer.ortala</div>
                            <div class="small text-muted">dewi.lestari@mahkamahagung.go.id</div>
                        </td>
                        <td><span class="badge" style="background:#ECFDF5; color:#047857; border:1px solid #6EE7B7;">Reviewer / Pimpinan</span></td>
                        <td>PN / PA Kelas IA Contoh</td>
                        <td><span class="badge-status badge-selesai"><i class="bi bi-dot"></i> Aktif</span></td>
                        <td class="text-end">
                            <button class="icon-btn" title="Edit Pengguna" onclick="alert('Form edit pengguna Dewi Lestari...');"><i class="bi bi-pencil"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
