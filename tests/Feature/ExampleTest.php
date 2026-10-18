<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_home_redirects_to_dashboard(): void
    {
        $response = $this->get('/');
        $response->assertRedirect('/dashboard');
    }

    public function test_admin_role_access(): void
    {
        $response = $this->withSession(['active_role_key' => 'admin'])->get('/kamus-monitoring');
        $response->assertStatus(200);

        $response = $this->withSession(['active_role_key' => 'admin'])->get('/pengguna');
        $response->assertStatus(200);

        $response = $this->withSession(['active_role_key' => 'admin'])->get('/pengaturan');
        $response->assertStatus(200);

        // Admin cannot directly access reviewer-only verification action
        $response = $this->withSession(['active_role_key' => 'admin'])->get('/verifikasi');
        $response->assertRedirect('/dashboard');
    }

    public function test_petugas_role_access_and_restrictions(): void
    {
        // Petugas can access operational menus
        $response = $this->withSession(['active_role_key' => 'petugas'])->get('/dashboard');
        $response->assertStatus(200);

        $response = $this->withSession(['active_role_key' => 'petugas'])->get('/monitoring');
        $response->assertStatus(200);

        $response = $this->withSession(['active_role_key' => 'petugas'])->get('/temuan');
        $response->assertStatus(200);

        // Petugas CANNOT access verification, reports, kamus, users, or settings
        $restricted = ['/verifikasi', '/laporan', '/kamus-monitoring', '/pengguna', '/pengaturan'];
        foreach ($restricted as $url) {
            $response = $this->withSession(['active_role_key' => 'petugas'])->get($url);
            $response->assertRedirect('/dashboard');
        }
    }

    public function test_reviewer_role_access_and_restrictions(): void
    {
        // Reviewer CAN access verification and reports
        $response = $this->withSession(['active_role_key' => 'reviewer'])->get('/verifikasi');
        $response->assertStatus(200);

        $response = $this->withSession(['active_role_key' => 'reviewer'])->get('/laporan');
        $response->assertStatus(200);

        // Reviewer CANNOT access admin-only configuration
        $adminOnly = ['/kamus-monitoring', '/pengguna', '/pengaturan'];
        foreach ($adminOnly as $url) {
            $response = $this->withSession(['active_role_key' => 'reviewer'])->get($url);
            $response->assertRedirect('/dashboard');
        }
    }
}
