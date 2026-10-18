<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') - SIMONEV SIKEP MA-RI</title>

    <!-- Google Fonts: Inter & Outfit -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons 1.11.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <!-- Chart.js 4.4 -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>

    <style>
        :root {
            --ma-navy: #0F172A;
            --ma-navy-light: #1E293B;
            --ma-navy-lighter: #334155;
            --ma-gold: #D97706;
            --ma-gold-light: #F59E0B;
            --ma-gold-subtle: #FEF3C7;
            --ma-blue: #2563EB;
            --ma-bg: #F8FAFC;
            --ma-surface: #FFFFFF;
            --ma-border: #E2E8F0;
            --ma-text-dark: #0F172A;
            --ma-text-muted: #64748B;
            --ma-success: #10B981;
            --ma-warning: #F59E0B;
            --ma-danger: #EF4444;
            --sidebar-width: 260px;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--ma-bg);
            color: var(--ma-text-dark);
            overflow-x: hidden;
            font-size: 0.925rem;
        }

        h1, h2, h3, h4, h5, .brand-font {
            font-family: 'Outfit', sans-serif;
        }

        /* Sidebar Styling */
        #sidebar {
            width: var(--sidebar-width);
            min-height: 100vh;
            background: linear-gradient(180deg, var(--ma-navy) 0%, #0B1120 100%);
            color: #E2E8F0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1040;
            transition: all 0.3s ease;
            box-shadow: 4px 0 16px rgba(0, 0, 0, 0.12);
        }

        .sidebar-brand {
            padding: 1.25rem 1.25rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            gap: 12px;
            background: rgba(0, 0, 0, 0.2);
        }

        .sidebar-brand img {
            width: 42px;
            height: 42px;
            filter: drop-shadow(0 2px 4px rgba(0,0,0,0.3));
        }

        .brand-title {
            font-size: 1.15rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: #FFFFFF;
            line-height: 1.2;
            margin: 0;
        }

        .brand-subtitle {
            font-size: 0.72rem;
            color: var(--ma-gold-light);
            text-transform: uppercase;
            letter-spacing: 0.8px;
            font-weight: 600;
            margin: 0;
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .menu-header {
            font-size: 0.68rem;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            font-weight: 700;
            color: #94A3B8;
            padding: 0.85rem 1.5rem 0.35rem 1.5rem;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0.7rem 1.5rem;
            color: #CBD5E1;
            text-decoration: none;
            font-size: 0.88rem;
            font-weight: 500;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }

        .sidebar-link:hover {
            color: #FFFFFF;
            background: rgba(255, 255, 255, 0.05);
            border-left-color: var(--ma-gold);
        }

        .sidebar-link.active {
            color: #FFFFFF;
            background: linear-gradient(90deg, rgba(217, 119, 6, 0.18) 0%, rgba(217, 119, 6, 0.03) 100%);
            border-left-color: var(--ma-gold);
            font-weight: 600;
        }

        .sidebar-link i {
            font-size: 1.15rem;
            color: #94A3B8;
            transition: color 0.2s;
        }

        .sidebar-link:hover i,
        .sidebar-link.active i {
            color: var(--ma-gold-light);
        }

        .sidebar-badge {
            margin-left: auto;
            font-size: 0.72rem;
            padding: 2px 7px;
            border-radius: 9999px;
            font-weight: 600;
        }

        /* Main Content Layout */
        #content-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        /* Top Navbar */
        .top-navbar {
            background: var(--ma-surface);
            border-bottom: 1px solid var(--ma-border);
            padding: 0.75rem 1.75rem;
            position: sticky;
            top: 0;
            z-index: 1020;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.02);
        }

        .satker-badge {
            background: #EFF6FF;
            color: var(--ma-blue);
            border: 1px solid #BFDBFE;
            padding: 0.35rem 0.85rem;
            border-radius: 6px;
            font-size: 0.82rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .period-pill {
            background: var(--ma-gold-subtle);
            color: #92400E;
            border: 1px solid #FDE68A;
            padding: 0.35rem 0.85rem;
            border-radius: 6px;
            font-size: 0.82rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Cards & KPI Widgets */
        .card-stat {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 10px;
            padding: 1.35rem 1.25rem;
            position: relative;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card-stat:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(0,0,0,0.06);
        }

        .card-stat-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.45rem;
        }

        .card-stat-title {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            color: var(--ma-text-muted);
            font-weight: 600;
            margin-bottom: 4px;
        }

        .card-stat-value {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--ma-text-dark);
            line-height: 1.1;
        }

        .card-stat-sub {
            font-size: 0.78rem;
            color: var(--ma-text-muted);
            margin-top: 6px;
        }

        /* Custom Badges */
        .badge-status {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.35rem 0.7rem;
            border-radius: 6px;
            letter-spacing: 0.3px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .badge-sesuai { background: #ECFDF5; color: #065F46; border: 1px solid #A7F3D0; }
        .badge-belum-lengkap { background: #FFFBEB; color: #92400E; border: 1px solid #FDE68A; }
        .badge-perlu-pembaruan { background: #FEF3C7; color: #B45309; border: 1px solid #FCD34D; }
        .badge-tidak-sesuai { background: #FEF2F2; color: #991B1B; border: 1px solid #FECACA; }
        .badge-tidak-berlaku { background: #F1F5F9; color: #475569; border: 1px solid #CBD5E1; }

        .badge-selesai { background: #ECFDF5; color: #047857; border: 1px solid #6EE7B7; }
        .badge-proses { background: #EFF6FF; color: #1D4ED8; border: 1px solid #93C5FD; }
        .badge-diverifikasi { background: #FAF5FF; color: #6B21A8; border: 1px solid #D8B4FE; }
        .badge-belum { background: #FFF1F2; color: #BE123C; border: 1px solid #FDA4AF; }

        /* Tables */
        .table-custom {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
        }

        .table-custom th {
            background-color: #F8FAFC;
            color: #475569;
            font-weight: 600;
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            padding: 0.85rem 1rem;
            border-bottom: 2px solid var(--ma-border);
            white-space: nowrap;
        }

        .table-custom td {
            padding: 0.85rem 1rem;
            border-bottom: 1px solid var(--ma-border);
            vertical-align: middle;
            font-size: 0.88rem;
        }

        .table-custom tbody tr:hover td {
            background-color: #F8FAFC;
        }

        /* Official MA Watermark / Header line */
        .ma-gold-accent-line {
            height: 3px;
            background: linear-gradient(90deg, var(--ma-navy) 0%, var(--ma-gold) 50%, var(--ma-navy) 100%);
        }

        /* Buttons */
        .btn-ma-navy {
            background-color: var(--ma-navy);
            color: #FFFFFF;
            border: 1px solid var(--ma-navy);
            font-weight: 500;
        }
        .btn-ma-navy:hover {
            background-color: #1E293B;
            color: #FFFFFF;
        }

        .btn-ma-gold {
            background: linear-gradient(180deg, #F59E0B 0%, #D97706 100%);
            color: #FFFFFF;
            border: none;
            font-weight: 600;
            box-shadow: 0 2px 4px rgba(217, 119, 6, 0.2);
        }
        .btn-ma-gold:hover {
            background: linear-gradient(180deg, #D97706 0%, #B45309 100%);
            color: #FFFFFF;
        }

        @media (max-width: 991.98px) {
            #sidebar {
                margin-left: calc(-1 * var(--sidebar-width));
            }
            #sidebar.active {
                margin-left: 0;
            }
            #content-wrapper {
                margin-left: 0;
            }
        }
    </style>
    @stack('styles')
</head>
<body>

    @php
        use App\Services\AccessControl;
        $currentRole = AccessControl::currentRole();
        $currentLabel = AccessControl::currentRoleLabel();
    @endphp

    <!-- Sidebar Navigation (Sesuai Hak Akses RBAC) -->
    <aside id="sidebar">
        <div class="sidebar-brand">
            <img src="{{ asset('images/logo-ma.svg') }}" alt="Lambang Mahkamah Agung RI">
            <div>
                <h1 class="brand-title">SIMONEV SIKEP</h1>
                <p class="brand-subtitle">Mahkamah Agung RI</p>
            </div>
        </div>

        <!-- Role Indicator Pill in Sidebar -->
        <div class="px-3 pt-3 pb-1">
            <div class="p-2 rounded-2 text-center small border" style="background: rgba(255,255,255,0.04); border-color: rgba(255,255,255,0.1) !important;">
                <div class="text-muted" style="font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.8px;">Hak Akses Aktif:</div>
                <div class="fw-bold mt-1 text-light">
                    @if($currentRole === 'admin')
                        <i class="bi bi-shield-lock-fill text-primary me-1"></i> Administrator
                    @elseif($currentRole === 'petugas')
                        <i class="bi bi-person-workspace text-warning me-1"></i> Petugas Kepegawaian
                    @else
                        <i class="bi bi-award-fill text-success me-1"></i> Reviewer / Pimpinan
                    @endif
                </div>
            </div>
        </div>

        <div class="sidebar-menu">
            <div class="menu-header">Menu Utama</div>
            
            @if(AccessControl::hasMenuAccess('dashboard'))
            <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2-fill"></i>
                <span>Dashboard KPI</span>
            </a>
            @endif

            @if(AccessControl::hasMenuAccess('pegawai'))
            <a href="{{ route('pegawai.index') }}" class="sidebar-link {{ request()->routeIs('pegawai.*') ? 'active' : '' }}">
                <i class="bi bi-people-fill"></i>
                <span>Data Pegawai</span>
                <span class="sidebar-badge bg-primary text-white">48</span>
            </a>
            @endif

            @if(AccessControl::hasMenuAccess('monitoring'))
            <a href="{{ route('monitoring.index') }}" class="sidebar-link {{ request()->routeIs('monitoring.*') ? 'active' : '' }}">
                <i class="bi bi-clipboard-check-fill"></i>
                <span>Monitoring SIKEP</span>
                @if($currentRole === 'petugas')
                    <span class="sidebar-badge bg-warning text-dark">Input</span>
                @endif
            </a>
            @endif

            <div class="menu-header">Tindak Lanjut & Evaluasi</div>

            @if(AccessControl::hasMenuAccess('temuan'))
            <a href="{{ route('temuan.index') }}" class="sidebar-link {{ request()->routeIs('temuan.*') ? 'active' : '' }}">
                <i class="bi bi-exclamation-triangle-fill"></i>
                <span>Temuan Aktif</span>
                <span class="sidebar-badge bg-warning text-dark">14</span>
            </a>
            @endif

            @if(AccessControl::hasMenuAccess('pembaruan'))
            <a href="{{ route('pembaruan.index') }}" class="sidebar-link {{ request()->routeIs('pembaruan.*') ? 'active' : '' }}">
                <i class="bi bi-clock-history"></i>
                <span>Riwayat Pembaruan</span>
            </a>
            @endif

            {{-- MENU VERIFIKASI: HANYA TAMPIL UNTUK REVIEWER / PIMPINAN --}}
            @if(AccessControl::hasMenuAccess('verifikasi'))
            <a href="{{ route('verifikasi.index') }}" class="sidebar-link {{ request()->routeIs('verifikasi.*') ? 'active' : '' }}">
                <i class="bi bi-patch-check-fill text-success"></i>
                <span class="fw-bold text-white">Verifikasi Pimpinan</span>
                <span class="sidebar-badge bg-success text-white">5 Baru</span>
            </a>
            @endif

            <div class="menu-header">Kompilasi & Pelaporan</div>

            @if(AccessControl::hasMenuAccess('rekapitulasi'))
            <a href="{{ route('rekapitulasi.index') }}" class="sidebar-link {{ request()->routeIs('rekapitulasi.*') ? 'active' : '' }}">
                <i class="bi bi-table"></i>
                <span>Rekapitulasi Data</span>
            </a>
            @endif

            {{-- MENU LAPORAN MONEV: HANYA TAMPIL UNTUK ADMIN & REVIEWER / PIMPINAN --}}
            @if(AccessControl::hasMenuAccess('laporan'))
            <a href="{{ route('laporan.index') }}" class="sidebar-link {{ request()->routeIs('laporan.*') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-pdf-fill"></i>
                <span>Laporan Monev</span>
            </a>
            @endif

            {{-- MENU MASTER & KONFIGURASI: HANYA TAMPIL UNTUK ADMINISTRATOR --}}
            @if(AccessControl::hasMenuAccess('kamus') || AccessControl::hasMenuAccess('pengguna') || AccessControl::hasMenuAccess('pengaturan'))
                <div class="menu-header">Master & Konfigurasi</div>

                @if(AccessControl::hasMenuAccess('kamus'))
                <a href="{{ route('kamus.index') }}" class="sidebar-link {{ request()->routeIs('kamus.*') ? 'active' : '' }}">
                    <i class="bi bi-journal-bookmark-fill"></i>
                    <span>Kamus Monitoring</span>
                </a>
                @endif

                @if(AccessControl::hasMenuAccess('pengguna'))
                <a href="{{ route('pengguna.index') }}" class="sidebar-link {{ request()->routeIs('pengguna.*') ? 'active' : '' }}">
                    <i class="bi bi-shield-lock-fill"></i>
                    <span>Pengguna & Role</span>
                </a>
                @endif

                @if(AccessControl::hasMenuAccess('pengaturan'))
                <a href="{{ route('pengaturan.index') }}" class="sidebar-link {{ request()->routeIs('pengaturan.*') ? 'active' : '' }}">
                    <i class="bi bi-gear-fill"></i>
                    <span>Pengaturan Satker</span>
                </a>
                @endif
            @endif
        </div>

        <div class="p-3 mt-4 border-top border-secondary border-opacity-25 text-center text-muted small">
            <div class="fw-semibold text-light mb-1">SIMONEV SIKEP v1.0.0</div>
            <div>Biro Kepegawaian MA-RI</div>
        </div>
    </aside>

    <!-- Main Content Area -->
    <div id="content-wrapper">
        <!-- Top Navbar -->
        <header class="top-navbar d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-outline-secondary d-lg-none" id="sidebarToggle">
                    <i class="bi bi-list fs-5"></i>
                </button>
                <div class="satker-badge d-none d-md-flex">
                    <i class="bi bi-bank"></i>
                    <span>Pengadilan Negeri / Pengadilan Agama Contoh</span>
                </div>
                <div class="period-pill">
                    <i class="bi bi-calendar2-range"></i>
                    <span>Periode: <strong>Semester I 2026</strong></span>
                </div>
            </div>

            <div class="d-flex align-items-center gap-3">
                <!-- Quick Role Switcher Interactive Selector -->
                <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle d-flex align-items-center gap-2 border shadow-sm {{ $currentRole === 'admin' ? 'btn-light text-primary fw-semibold' : ($currentRole === 'petugas' ? 'btn-light text-warning fw-semibold' : 'btn-light text-success fw-semibold') }}" type="button" data-bs-toggle="dropdown">
                        @if($currentRole === 'admin')
                            <i class="bi bi-shield-lock-fill text-primary"></i>
                        @elseif($currentRole === 'petugas')
                            <i class="bi bi-person-workspace text-warning"></i>
                        @else
                            <i class="bi bi-award-fill text-success"></i>
                        @endif
                        <span>Peran: <strong>{{ $currentLabel }}</strong></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                        <li><h6 class="dropdown-header">Ubah Peran Pengguna (RBAC Simulation):</h6></li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 {{ $currentRole === 'admin' ? 'active bg-primary text-white' : '' }}" href="{{ route('role.switch', 'admin') }}">
                                <i class="bi bi-shield-check"></i>
                                <div>
                                    <div class="fw-bold">Administrator</div>
                                    <small class="{{ $currentRole === 'admin' ? 'text-white-50' : 'text-muted' }}">Kelola Master, Kamus, Periode, User</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 {{ $currentRole === 'petugas' ? 'active bg-warning text-dark' : '' }}" href="{{ route('role.switch', 'petugas') }}">
                                <i class="bi bi-person-workspace"></i>
                                <div>
                                    <div class="fw-bold">Petugas Kepegawaian</div>
                                    <small class="{{ $currentRole === 'petugas' ? 'text-dark-50' : 'text-muted' }}">Input Monitoring, Tindak Lanjut, Upload Bukti</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item d-flex align-items-center gap-2 {{ $currentRole === 'reviewer' ? 'active bg-success text-white' : '' }}" href="{{ route('role.switch', 'reviewer') }}">
                                <i class="bi bi-award-fill"></i>
                                <div>
                                    <div class="fw-bold">Reviewer / Pimpinan</div>
                                    <small class="{{ $currentRole === 'reviewer' ? 'text-white-50' : 'text-muted' }}">Verifikasi & Approval, Pengesahan Laporan</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- User Profile Dropdown -->
                <div class="dropdown">
                    <button class="btn btn-link text-decoration-none p-0 d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown">
                        <div class="text-white rounded-circle d-flex align-items-center justify-content-center fw-bold {{ $currentRole === 'admin' ? 'bg-primary' : ($currentRole === 'petugas' ? 'bg-warning text-dark' : 'bg-success') }}" style="width: 38px; height: 38px; font-size: 0.95rem;">
                            {{ $currentRole === 'admin' ? 'AD' : ($currentRole === 'petugas' ? 'OP' : 'RV') }}
                        </div>
                        <div class="d-none d-lg-block text-start lh-1">
                            <div class="fw-semibold text-dark small">
                                {{ $currentRole === 'admin' ? 'Ahmad Fauzi, S.Kom' : ($currentRole === 'petugas' ? 'Rina Anggraini, S.E.' : 'Dewi Lestari, S.E.') }}
                            </div>
                            <div class="text-muted" style="font-size: 0.72rem;">{{ $currentLabel }}</div>
                        </div>
                        <i class="bi bi-chevron-down text-muted small d-none d-lg-block"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow-sm" style="min-width: 220px;">
                        <li><div class="px-3 py-2 border-bottom">
                            <div class="fw-bold text-dark">{{ $currentRole === 'admin' ? 'Ahmad Fauzi, S.Kom' : ($currentRole === 'petugas' ? 'Rina Anggraini, S.E.' : 'Dewi Lestari, S.E.') }}</div>
                            <div class="small text-muted">Role: <span class="badge bg-secondary">{{ $currentLabel }}</span></div>
                        </div></li>
                        <li><a class="dropdown-item py-2" href="{{ route('dashboard') }}"><i class="bi bi-grid me-2"></i>Dashboard Saya</a></li>
                        <li><a class="dropdown-item py-2" href="{{ route('pembaruan.index') }}"><i class="bi bi-clock-history me-2"></i>Riwayat Aktivitas</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item py-2 text-danger" href="{{ route('login') }}"><i class="bi bi-box-arrow-right me-2"></i>Keluar (Logout)</a></li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="ma-gold-accent-line"></div>

        <!-- Main Body Container -->
        <main class="flex-grow-1 p-3 p-lg-4">
            <!-- Flash Message Alerts -->
            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center gap-2 mb-4 shadow-sm" role="alert">
                    <i class="bi bi-slash-circle-fill fs-5 text-danger"></i>
                    <div><strong>Perhatian:</strong> {{ session('error') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show d-flex align-items-center gap-2 mb-4 shadow-sm" role="alert">
                    <i class="bi bi-check-circle-fill fs-5 text-success"></i>
                    <div>{{ session('success') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if(session('info'))
                <div class="alert alert-info alert-dismissible fade show d-flex align-items-center gap-2 mb-4 shadow-sm" role="alert">
                    <i class="bi bi-info-circle-fill fs-5 text-primary"></i>
                    <div>{{ session('info') }}</div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- Role Badge Notice Banner on Dashboard or Page -->
            <div class="d-flex align-items-center justify-content-between p-2 px-3 rounded-2 mb-3 border bg-white shadow-sm" style="font-size: 0.8rem;">
                <div class="d-flex align-items-center gap-2">
                    <span class="badge {{ $currentRole === 'admin' ? 'bg-primary' : ($currentRole === 'petugas' ? 'bg-warning text-dark' : 'bg-success') }}">
                        {{ $currentLabel }}
                    </span>
                    <span class="text-muted">
                        @if($currentRole === 'admin')
                            Akses Penuh: Manajemen pengguna, periode monitoring, kamus parameter, dan audit data.
                        @elseif($currentRole === 'petugas')
                            Akses Operasional: Input checklist evaluasi, penanganan temuan, pembaruan data, dan upload bukti.
                        @else
                            Akses Penjamin Mutu: Evaluasi progres, verifikasi & approval tindak lanjut, dan pengesahan laporan.
                        @endif
                    </span>
                </div>
                <div class="text-muted small d-none d-md-block">
                    Standard Tata Kelola MA-RI
                </div>
            </div>

            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-white border-top py-3 px-4 text-center text-md-between d-md-flex align-items-center text-muted small">
            <div>
                &copy; {{ date('Y') }} <strong>SIMONEV SIKEP</strong> &mdash; Mahkamah Agung Republik Indonesia. Seluruh hak cipta dilindungi.
            </div>
            <div class="mt-2 mt-md-0 d-flex gap-3 justify-content-center">
                <span><i class="bi bi-shield-check text-success"></i> Sistem RBAC Aktif</span>
                <span><i class="bi bi-database-check text-primary"></i> Sinkronisasi SIKEP</span>
            </div>
        </footer>
    </div>

    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Sidebar Toggle for Mobile
        const sidebarToggle = document.getElementById('sidebarToggle');
        const sidebar = document.getElementById('sidebar');
        if (sidebarToggle && sidebar) {
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('active');
            });
        }
    </script>
    @stack('scripts')
</body>
</html>
