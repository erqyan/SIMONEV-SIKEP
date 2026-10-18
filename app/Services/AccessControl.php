<?php

declare(strict_types=1);

namespace App\Services;

class AccessControl
{
    public const ROLE_ADMIN = 'admin';
    public const ROLE_PETUGAS = 'petugas';
    public const ROLE_REVIEWER = 'reviewer';

    /**
     * Dapatkan role aktif saat ini dari session (default: admin)
     */
    public static function currentRole(): string
    {
        return session('active_role_key', self::ROLE_ADMIN);
    }

    /**
     * Dapatkan label nama peran untuk ditampilkan di UI
     */
    public static function currentRoleLabel(): string
    {
        return match(self::currentRole()) {
            self::ROLE_PETUGAS => 'Petugas Kepegawaian',
            self::ROLE_REVIEWER => 'Reviewer / Pimpinan',
            default => 'Administrator'
        };
    }

    /**
     * Matriks Hak Akses Menu Navigasi
     */
    public static function hasMenuAccess(string $menu): bool
    {
        $role = self::currentRole();

        $matrix = [
            'dashboard'    => [self::ROLE_ADMIN, self::ROLE_PETUGAS, self::ROLE_REVIEWER],
            'pegawai'      => [self::ROLE_ADMIN, self::ROLE_PETUGAS, self::ROLE_REVIEWER],
            'monitoring'   => [self::ROLE_ADMIN, self::ROLE_PETUGAS, self::ROLE_REVIEWER],
            'temuan'       => [self::ROLE_ADMIN, self::ROLE_PETUGAS, self::ROLE_REVIEWER],
            'pembaruan'    => [self::ROLE_ADMIN, self::ROLE_PETUGAS, self::ROLE_REVIEWER],
            'verifikasi'   => [self::ROLE_REVIEWER], // HANYA REVIEWER / PIMPINAN
            'rekapitulasi' => [self::ROLE_ADMIN, self::ROLE_PETUGAS, self::ROLE_REVIEWER],
            'laporan'      => [self::ROLE_ADMIN, self::ROLE_REVIEWER], // ADMIN & PIMPINAN
            'kamus'        => [self::ROLE_ADMIN], // HANYA ADMINISTRATOR
            'pengguna'     => [self::ROLE_ADMIN], // HANYA ADMINISTRATOR
            'pengaturan'   => [self::ROLE_ADMIN], // HANYA ADMINISTRATOR
        ];

        return in_array($role, $matrix[$menu] ?? [], true);
    }

    /**
     * Matriks Hak Akses Aksi Spesifik
     */
    public static function can(string $action): bool
    {
        $role = self::currentRole();

        return match($action) {
            'input_monitoring'  => $role === self::ROLE_PETUGAS,
            'input_tindak_lanjut' => $role === self::ROLE_PETUGAS,
            'do_verification'   => $role === self::ROLE_REVIEWER,
            'manage_master'     => $role === self::ROLE_ADMIN,
            'lock_period'       => $role === self::ROLE_ADMIN,
            'sign_report'       => $role === self::ROLE_REVIEWER,
            default             => false,
        };
    }
}
