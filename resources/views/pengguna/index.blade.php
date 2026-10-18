@extends('layouts.app')

@section('title', 'Manajemen Pengguna & Hak Akses')

@section('content')
<div class="container-fluid px-0">

    <div class="d-md-flex justify-content-between align-items-center mb-4">
        <div>
            <h2 class="h4 fw-bold text-dark mb-1">Manajemen Pengguna & Hak Akses (RBAC)</h2>
            <p class="text-muted small mb-0">Pengaturan Otorisasi Administrator, Petugas Kepegawaian, dan Reviewer/Pimpinan</p>
        </div>
        <div class="mt-3 mt-md-0 d-flex gap-2">
            <button class="btn btn-ma-navy btn-sm" onclick="alert('Form tambah user baru...');">
                <i class="bi bi-person-plus-fill me-1"></i> Tambah Pengguna
            </button>
        </div>
    </div>

    <!-- Table of Users -->
    <div class="card border-0 shadow-sm rounded-3">
        <div class="table-responsive">
            <table class="table table-custom mb-0">
                <thead>
                    <tr>
                        <th style="width: 45px;">No</th>
                        <th>Nama Pengguna</th>
                        <th>Username / Email</th>
                        <th>Peran (Role)</th>
                        <th>Satuan Kerja</th>
                        <th>Status Akun</th>
                        <th class="text-end">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-muted">1</td>
                        <td>
                            <div class="fw-bold text-dark">Ahmad Fauzi, S.Kom</div>
                            <div class="small text-muted">NIP: 198801152014031002</div>
                        </td>
                        <td>
                            <div class="fw-semibold">admin.sikep</div>
                            <div class="small text-muted">ahmad.fauzi@mahkamahagung.go.id</div>
                        </td>
                        <td><span class="badge bg-primary">Administrator</span></td>
                        <td>PN / PA Kelas IA Contoh</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-secondary py-1 px-2"><i class="bi bi-pencil"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">2</td>
                        <td>
                            <div class="fw-bold text-dark">Rina Anggraini, S.E.</div>
                            <div class="small text-muted">NIP: 199203102018012001</div>
                        </td>
                        <td>
                            <div class="fw-semibold">petugas.kepegawaian</div>
                            <div class="small text-muted">rina.a@mahkamahagung.go.id</div>
                        </td>
                        <td><span class="badge bg-warning text-dark">Petugas Kepegawaian</span></td>
                        <td>PN / PA Kelas IA Contoh</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-secondary py-1 px-2"><i class="bi bi-pencil"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted">3</td>
                        <td>
                            <div class="fw-bold text-dark">Dewi Lestari, S.E.</div>
                            <div class="small text-muted">NIP: 198811252014022003 &bull; Kasubbag Ortala</div>
                        </td>
                        <td>
                            <div class="fw-semibold">reviewer.ortala</div>
                            <div class="small text-muted">dewi.lestari@mahkamahagung.go.id</div>
                        </td>
                        <td><span class="badge bg-success">Reviewer / Pimpinan</span></td>
                        <td>PN / PA Kelas IA Contoh</td>
                        <td><span class="badge bg-success">Aktif</span></td>
                        <td class="text-end">
                            <button class="btn btn-sm btn-outline-secondary py-1 px-2"><i class="bi bi-pencil"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
