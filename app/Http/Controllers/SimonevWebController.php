<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Services\AccessControl;

class SimonevWebController extends Controller
{
    public function index(): RedirectResponse
    {
        return redirect()->route('dashboard');
    }

    public function login(): View
    {
        return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $input = strtolower((string)$request->input('username'));
        
        $roleKey = match(true) {
            str_contains($input, 'petugas') => AccessControl::ROLE_PETUGAS,
            str_contains($input, 'reviewer') || str_contains($input, 'pimpinan') => AccessControl::ROLE_REVIEWER,
            default => AccessControl::ROLE_ADMIN
        };

        session([
            'active_role_key' => $roleKey,
            'active_role' => AccessControl::currentRoleLabel()
        ]);

        return redirect()->route('dashboard')->with('success', 'Selamat datang! Anda masuk sebagai ' . AccessControl::currentRoleLabel());
    }

    public function switchRole(string $role): RedirectResponse
    {
        $roleKey = match($role) {
            'petugas' => AccessControl::ROLE_PETUGAS,
            'reviewer', 'pimpinan' => AccessControl::ROLE_REVIEWER,
            default => AccessControl::ROLE_ADMIN
        };

        session([
            'active_role_key' => $roleKey,
            'active_role' => AccessControl::currentRoleLabel()
        ]);

        return redirect()->route('dashboard')->with('info', 'Peran antarmuka dialihkan ke: ' . AccessControl::currentRoleLabel() . '. Menu dan hak akses telah disesuaikan.');
    }

    public function dashboard(): View
    {
        return view('dashboard.index');
    }

    public function pegawai(): View
    {
        return view('pegawai.index');
    }

    public function showPegawai(int $id): View
    {
        return view('pegawai.show', ['id' => $id]);
    }

    public function monitoring(): View
    {
        return view('monitoring.index');
    }

    public function showMonitoring(int $id): View
    {
        return view('monitoring.show', ['id' => $id]);
    }

    public function temuan(): View
    {
        return view('temuan.index');
    }

    public function showTemuan(int $id): View
    {
        return view('temuan.show', ['id' => $id]);
    }

    public function pembaruan(): View
    {
        return view('pembaruan.index');
    }

    public function verifikasi(): View|RedirectResponse
    {
        if (!AccessControl::hasMenuAccess('verifikasi')) {
            return redirect()->route('dashboard')->with('error', 'Akses Ditolak: Menu Verifikasi & Approval hanya diperuntukkan bagi Reviewer / Pimpinan Satker.');
        }

        return view('verifikasi.index');
    }

    public function rekapitulasi(): View
    {
        return view('rekapitulasi.index');
    }

    public function laporan(): View|RedirectResponse
    {
        if (!AccessControl::hasMenuAccess('laporan')) {
            return redirect()->route('dashboard')->with('error', 'Akses Ditolak: Pengesahan & Pengunduhan Laporan Monev Resmi memerlukan hak akses Reviewer/Pimpinan atau Administrator.');
        }

        return view('laporan.index');
    }

    public function kamus(): View|RedirectResponse
    {
        if (!AccessControl::hasMenuAccess('kamus')) {
            return redirect()->route('dashboard')->with('error', 'Akses Ditolak: Pengelolaan Kamus Parameter Monitoring hanya dapat diakses oleh Administrator Satker.');
        }

        return view('kamus.index');
    }

    public function pengguna(): View|RedirectResponse
    {
        if (!AccessControl::hasMenuAccess('pengguna')) {
            return redirect()->route('dashboard')->with('error', 'Akses Ditolak: Manajemen Pengguna & Role hanya dapat diakses oleh Administrator Satker.');
        }

        return view('pengguna.index');
    }

    public function pengaturan(): View|RedirectResponse
    {
        if (!AccessControl::hasMenuAccess('pengaturan')) {
            return redirect()->route('dashboard')->with('error', 'Akses Ditolak: Pengaturan Satker & Penguncian Periode hanya dapat diakses oleh Administrator Satker.');
        }

        return view('pengaturan.index');
    }
}
