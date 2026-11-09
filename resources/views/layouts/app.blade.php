<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard')</title>

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
            --ma-teal: #1B2F4B;
            --ma-teal-dark: #14233B;
            --ma-teal-deep: #0D182B;
            --ma-dark: #0E1B30;
            --ma-dark-deep: #0A1424;
            --ma-navy: #1E3A5C;
            --ma-gold: #D97706;
            --ma-gold-light: #F59E0B;
            --ma-blue: #2563EB;
            --ma-bg: #F1F4F5;
            --ma-surface: #FFFFFF;
            --ma-border: #DDE3E6;
            --ma-text-dark: #22333B;
            --ma-text-muted: #6B7A85;
            --ma-success: #10B981;
            --ma-warning: #F59E0B;
            --ma-danger: #EF4444;
            --sidebar-width: 264px;
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

        /* ================= Top Navbar (Teal) ================= */
        .top-navbar {
            background: var(--ma-teal);
            color: #FFFFFF;
            padding: 0.75rem 1.5rem;
            position: sticky;
            top: 0;
            z-index: 1050;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.10);
            min-height: 58px;
        }

        .top-navbar .brand-logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .top-navbar .brand-logo img {
            width: 38px;
            height: 38px;
            background: #FFFFFF;
            border-radius: 50%;
            padding: 2px;
        }

        .top-navbar .brand-logo .brand-title {
            font-size: 1.2rem;
            font-weight: 700;
            letter-spacing: 1.2px;
            margin: 0;
            line-height: 1.1;
        }

        .top-navbar .brand-logo .brand-subtitle {
            font-size: 0.62rem;
            letter-spacing: 0.6px;
            opacity: 0.85;
            margin: 0;
            text-transform: uppercase;
        }

        .top-navbar .nav-icon-btn {
            background: rgba(255,255,255,0.10);
            border: 1px solid rgba(255,255,255,0.22);
            color: #FFFFFF;
            width: 38px;
            height: 38px;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 1rem;
            transition: background 0.2s;
        }

        .top-navbar .nav-icon-btn:hover {
            background: rgba(255,255,255,0.22);
        }

        .top-navbar .nav-avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.85rem;
            color: #FFFFFF;
            background: rgba(255,255,255,0.18);
            border: 1px solid rgba(255,255,255,0.35);
        }

        .top-navbar .user-name {
            font-size: 0.82rem;
            font-weight: 600;
            line-height: 1.1;
        }

        .top-navbar .user-role {
            font-size: 0.66rem;
            opacity: 0.85;
        }

        /* ================= Sidebar (Dark) ================= */
        #sidebar {
            width: var(--sidebar-width);
            min-height: calc(100vh - 58px);
            background: linear-gradient(180deg, var(--ma-dark) 0%, var(--ma-dark-deep) 100%);
            color: #CFD8DC;
            position: fixed;
            top: 58px;
            left: 0;
            bottom: 0;
            z-index: 1040;
            transition: all 0.3s ease;
            box-shadow: 4px 0 16px rgba(0, 0, 0, 0.12);
            overflow-y: auto;
        }

        /* User card at top of sidebar */
        .sidebar-user {
            padding: 1.15rem 1.15rem 1.25rem;
            background: rgba(0, 0, 0, 0.22);
            border-bottom: 1px solid rgba(255,255,255,0.08);
        }

        .sidebar-user .user-row {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .sidebar-user .user-photo {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--ma-teal) 0%, var(--ma-teal-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: #FFFFFF;
            flex-shrink: 0;
            border: 2px solid rgba(255,255,255,0.25);
        }

        .sidebar-user .user-name {
            font-size: 0.9rem;
            font-weight: 600;
            color: #FFFFFF;
            line-height: 1.25;
        }

        .sidebar-user .user-role {
            font-size: 0.7rem;
            color: #FCD34D;
            text-transform: uppercase;
            letter-spacing: 0.6px;
            font-weight: 600;
        }

        .sidebar-user .user-contact {
            margin-top: 0.9rem;
            font-size: 0.72rem;
            color: #A7B5BE;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .sidebar-user .user-contact span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .sidebar-user .user-contact i {
            color: var(--ma-teal);
            width: 14px;
            text-align: center;
        }

        /* Role switcher in sidebar */
        .sidebar-rolebox {
            margin: 0.9rem 1.15rem 0;
            padding: 0.7rem 0.8rem;
            background: rgba(255,255,255,0.04);
            border: 1px solid rgba(255,255,255,0.10);
            border-radius: 8px;
        }

        .sidebar-rolebox .label {
            font-size: 0.64rem;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #94A3B8;
            margin-bottom: 4px;
        }

        .sidebar-menu {
            padding: 0.75rem 0 1rem;
        }

        .menu-header {
            font-size: 0.66rem;
            text-transform: uppercase;
            letter-spacing: 1.1px;
            font-weight: 700;
            color: #7C8B94;
            padding: 0.9rem 1.4rem 0.4rem;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 0.62rem 1.4rem;
            color: #CBD5E1;
            text-decoration: none;
            font-size: 0.86rem;
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
            background: linear-gradient(90deg, rgba(27, 47, 75, 0.30) 0%, rgba(27, 47, 75, 0.04) 100%);
            border-left-color: var(--ma-gold);
            font-weight: 600;
        }

        .sidebar-link i {
            font-size: 1.1rem;
            color: #94A3B8;
            width: 20px;
            text-align: center;
            transition: color 0.2s;
        }

        .sidebar-link:hover i,
        .sidebar-link.active i {
            color: #F59E0B;
        }

        .sidebar-badge {
            margin-left: auto;
            font-size: 0.7rem;
            padding: 2px 7px;
            border-radius: 9999px;
            font-weight: 600;
        }

        .sidebar-submenu-toggle .sidebar-chev { margin-left: auto; transition: transform 0.2s; font-size: 0.85rem; color: #94A3B8; }
        .sidebar-submenu-toggle[aria-expanded="true"] .sidebar-chev { transform: rotate(90deg); }
        .sidebar-sub { padding-left: 2.4rem; font-size: 0.8rem; }
        .sidebar-sub i, .sidebar-sub .sidebar-sub-dot { color: #94A3B8; }

        .sidebar-footer {
            padding: 0.85rem 1.4rem 1.1rem;
            margin-top: 1rem;
            border-top: 1px solid rgba(255,255,255,0.08);
            text-align: center;
            font-size: 0.7rem;
            color: #7C8B94;
        }

        .submenu-collapse { display: none; }
        .submenu-collapse.show { display: block; }
        .sidebar-submenu-toggle .sidebar-chev { color: #94A3B8; font-size: 0.85rem; }

        /* ================= Main Content ================= */
        #content-wrapper {
            margin-left: var(--sidebar-width);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            transition: all 0.3s ease;
        }

        /* Profile header band (dark) */
        .profile-header {
            background: linear-gradient(135deg, var(--ma-dark) 0%, var(--ma-navy) 60%, var(--ma-teal-deep) 100%);
            color: #FFFFFF;
            padding: 1.4rem 1.75rem;
            border-bottom: 4px solid var(--ma-gold);
        }

        .profile-header .ph-photo {
            width: 72px;
            height: 72px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--ma-teal) 0%, var(--ma-teal-dark) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.8rem;
            color: #FFFFFF;
            flex-shrink: 0;
            border: 3px solid rgba(255,255,255,0.35);
            box-shadow: 0 4px 12px rgba(0,0,0,0.25);
        }

        .profile-header .ph-name {
            font-size: 1.15rem;
            font-weight: 700;
            line-height: 1.2;
        }

        .profile-header .ph-jabatan {
            font-size: 0.82rem;
            color: #FCD34D;
            font-weight: 500;
        }

        .profile-header .ph-nip {
            font-size: 0.72rem;
            color: #A7B5BE;
        }

        .profile-header .ph-contact {
            font-size: 0.74rem;
            color: #CFD8DC;
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 3px;
        }

        .profile-header .ph-contact i {
            color: var(--ma-teal);
        }

        /* Breadcrumb bar */
        .breadcrumb-bar {
            background: var(--ma-surface);
            border-bottom: 1px solid var(--ma-border);
            padding: 0.85rem 1.75rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .breadcrumb-bar .breadcrumb {
            font-size: 0.8rem;
            margin: 0;
        }

        .breadcrumb-bar .breadcrumb-item + .breadcrumb-item::before {
            content: "/";
            color: var(--ma-text-muted);
        }

        .breadcrumb-bar .breadcrumb-item a {
            color: var(--ma-teal);
            font-weight: 500;
        }

        .breadcrumb-bar .breadcrumb-item.active {
            color: var(--ma-text-muted);
            font-weight: 500;
        }

        .btn-kembali {
            background: #FFFFFF;
            border: 1px solid var(--ma-border);
            color: var(--ma-text-dark);
            font-size: 0.78rem;
            font-weight: 500;
            padding: 0.35rem 0.85rem;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-kembali:hover {
            background: var(--ma-bg);
        }

        /* Main body container */
        main.sik-page {
            padding: 1.5rem 1.75rem;
            flex-grow: 1;
        }

        /* ================= Table Chrome ================= */
        .table-card {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }

        .table-band {
            background: linear-gradient(135deg, var(--ma-teal) 0%, var(--ma-teal-dark) 100%);
            color: #FFFFFF;
            padding: 0.9rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .table-band h2 {
            font-size: 1rem;
            font-weight: 600;
            margin: 0;
        }

        .table-band .sub {
            font-size: 0.72rem;
            opacity: 0.85;
        }

        .table-toolbar {
            padding: 0.8rem 1.25rem;
            border-bottom: 1px solid var(--ma-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .table-toolbar .left,
        .table-toolbar .right {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-wrap: wrap;
        }

        .btn-tool {
            background: #FFFFFF;
            border: 1px solid var(--ma-border);
            color: var(--ma-text-dark);
            font-size: 0.76rem;
            font-weight: 500;
            padding: 0.3rem 0.7rem;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-tool:hover {
            background: var(--ma-bg);
            border-color: var(--ma-teal);
            color: var(--ma-teal);
        }

        .table-band-tabs {
            display: flex;
            gap: 4px;
            flex-wrap: wrap;
        }

        .tab-teal {
            background: rgba(255,255,255,0.10);
            border: 1px solid rgba(255,255,255,0.25);
            color: #FFFFFF;
            font-size: 0.74rem;
            font-weight: 500;
            padding: 0.3rem 0.75rem;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
        }

        .tab-teal:hover {
            background: rgba(255,255,255,0.22);
            color: #FFFFFF;
        }

        .tab-teal.active {
            background: #FFFFFF;
            color: var(--ma-teal-dark);
            border-color: #FFFFFF;
            font-weight: 600;
        }

        /* Photo / file slot (Foto Profil, Foto Korpi, Foto Formal, etc.) */
        .photo-slot {
            border: 1px solid var(--ma-border);
            background: #F4F6F7;
            border-radius: 6px;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 1rem;
        }

        .photo-slot .img-box {
            background: #FFFFFF;
            border: 1px solid var(--ma-border);
            padding: 6px;
            display: inline-block;
            max-width: 200px;
        }

        .photo-slot .img-box img {
            max-width: 100%;
            display: block;
        }

        .photo-slot .slot-actions {
            position: absolute;
            bottom: 8px;
            right: 8px;
            display: flex;
            gap: 6px;
        }

        .photo-slot .slot-actions .icon-btn {
            width: 28px;
            height: 28px;
            background: #FFFFFF;
        }

        /* Detail label + value table (BIODATA / KELAHIRAN style) */
        .detail-table {
            width: 100%;
            border-collapse: collapse;
        }

        .detail-table td {
            padding: 0.55rem 0.9rem;
            border-bottom: 1px solid var(--ma-border);
            font-size: 0.84rem;
            vertical-align: top;
        }

        .detail-table td.label {
            width: 40%;
            text-align: right;
            font-weight: 700;
            color: var(--ma-text-dark);
        }

        .detail-table td.value {
            text-align: left;
            color: var(--ma-text-dark);
        }

        .detail-table tr.section td {
            background: #F1F4F5;
            font-weight: 700;
            text-align: left;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.76rem;
            color: var(--ma-teal-dark);
        }

        .badge-valid {
            background: #ECFDF5;
            color: #047857;
            border: 1px solid #6EE7B7;
            font-size: 0.7rem;
            font-weight: 600;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .table-toolbar .showing {
            font-size: 0.74rem;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            color: var(--ma-text-muted);
            font-weight: 600;
        }

        .table-custom {
            border-collapse: separate;
            border-spacing: 0;
            width: 100%;
        }

        .table-custom thead th {
            background: var(--ma-teal);
            color: #FFFFFF;
            font-weight: 600;
            font-size: 0.76rem;
            text-transform: uppercase;
            letter-spacing: 0.4px;
            padding: 0.75rem 1rem;
            white-space: nowrap;
        }

        .table-custom td {
            padding: 0.7rem 1rem;
            border-bottom: 1px solid var(--ma-border);
            vertical-align: middle;
            font-size: 0.84rem;
        }

        .table-custom tbody tr:hover td {
            background-color: #FDF6E3;
        }

        .table-custom tbody tr:last-child td {
            border-bottom: none;
        }

        .not-set {
            color: var(--ma-danger);
            font-style: italic;
            font-size: 0.8rem;
        }

        .table-empty {
            padding: 2.5rem 1rem;
            text-align: center;
            color: var(--ma-text-muted);
            font-size: 0.85rem;
        }

        .table-empty i {
            font-size: 2rem;
            display: block;
            margin-bottom: 0.5rem;
            opacity: 0.4;
        }

        /* Toolbar buttons */
        .btn-teal {
            background: var(--ma-gold);
            color: #1B2F4B;
            border: 1px solid var(--ma-gold);
            font-size: 0.8rem;
            font-weight: 500;
            padding: 0.35rem 0.8rem;
            border-radius: 6px;
        }

        .btn-teal:hover {
            background: #B45309;
            color: #FFFFFF;
            border-color: #B45309;
        }

        .btn-ghost {
            background: #FFFFFF;
            color: var(--ma-text-dark);
            border: 1px solid var(--ma-border);
            font-size: 0.8rem;
            font-weight: 500;
            padding: 0.35rem 0.8rem;
            border-radius: 6px;
        }

        .btn-ghost:hover {
            background: var(--ma-bg);
        }

        .btn-outline-teal {
            background: #FFFFFF;
            color: var(--ma-teal);
            border: 1px solid var(--ma-teal);
            font-size: 0.8rem;
            font-weight: 500;
            padding: 0.35rem 0.8rem;
            border-radius: 6px;
        }

        .btn-outline-teal:hover {
            background: var(--ma-gold);
            color: #1B2F4B;
        }

        .icon-btn {
            width: 30px;
            height: 30px;
            border-radius: 6px;
            border: 1px solid var(--ma-border);
            background: #FFFFFF;
            color: var(--ma-text-muted);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
        }

        .icon-btn:hover {
            background: var(--ma-bg);
            color: var(--ma-teal);
            border-color: var(--ma-teal);
        }

        .icon-btn.danger:hover {
            color: var(--ma-danger);
            border-color: var(--ma-danger);
            background: #FEF2F2;
        }

        /* ================= Forms ================= */
        .form-card {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 8px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
            padding: 1.5rem 1.5rem;
        }

        .form-card .card-title {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: var(--ma-teal);
            margin-bottom: 1.1rem;
            padding-bottom: 0.6rem;
            border-bottom: 2px solid var(--ma-gold);
            display: inline-block;
        }

        .form-card-header {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.75rem;
        }

        .form-card-header h6 {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--ma-text-dark);
        }

        .input-underline {
            background: transparent;
            border: none;
            border-bottom: 1.5px solid var(--ma-border);
            border-radius: 0;
            padding: 0.45rem 0.25rem;
            font-size: 0.88rem;
            color: var(--ma-text-dark);
            width: 100%;
        }

        .input-underline:focus {
            outline: none;
            border-bottom-color: var(--ma-gold);
            box-shadow: none;
        }

        .input-underline::placeholder {
            color: #9AA8B1;
        }

        .form-label {
            font-size: 0.76rem;
            font-weight: 600;
            color: var(--ma-text-muted);
            text-transform: uppercase;
            letter-spacing: 0.4px;
            margin-bottom: 0.25rem;
        }

        .input-bordered {
            border: 1px solid var(--ma-border);
            border-radius: 6px;
            background: #FFFFFF;
            font-size: 0.88rem;
            padding: 0.45rem 0.7rem;
            color: var(--ma-text-dark);
            width: 100%;
        }

        .input-bordered:focus {
            outline: none;
            border-color: var(--ma-gold);
            box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.15);
        }

        .validation-error {
            color: var(--ma-danger);
            font-size: 0.76rem;
            margin-top: 4px;
        }

        .file-drop {
            border: 2px dashed var(--ma-border);
            border-radius: 8px;
            padding: 1.2rem;
            text-align: center;
            background: #FAFBFB;
        }

        .file-drop .empty {
            color: var(--ma-text-muted);
            font-size: 0.8rem;
        }

        /* ================= Cards & KPI Widgets ================= */
        .card-stat {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 8px;
            padding: 1.15rem 1.1rem;
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
            width: 44px;
            height: 44px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            background: #FEF3C7;
            color: var(--ma-teal);
        }

        .card-stat-icon.bg-success { background: #ECFDF5; color: var(--ma-success); }
        .card-stat-icon.bg-warning { background: #FEF3C7; color: var(--ma-warning); }
        .card-stat-icon.bg-danger { background: #FEE2E2; color: var(--ma-danger); }
        .card-stat-icon.bg-primary { background: #EFF6FF; color: var(--ma-blue); }

        .card-stat-title {
            font-size: 0.74rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: var(--ma-text-muted);
            font-weight: 600;
            margin-bottom: 4px;
        }

        .card-stat-value {
            font-size: 1.6rem;
            font-weight: 700;
            color: var(--ma-text-dark);
            line-height: 1.1;
        }

        .card-stat-sub {
            font-size: 0.74rem;
            color: var(--ma-text-muted);
            margin-top: 4px;
        }

        .card-stat-progress {
            height: 4px;
            background: var(--ma-teal);
            border-radius: 2px;
            margin-top: 10px;
        }

        /* ================= Accordion (Kamus) ================= */
        .accordion-item.table-card {
            border: 1px solid var(--ma-border);
            border-radius: 8px;
            overflow: hidden;
        }
        .accordion-item.table-card:not(:first-child) {
            margin-top: -1px;
        }
        .accordion-button {
            background: var(--ma-surface);
            font-size: 0.88rem;
            box-shadow: none;
        }
        .accordion-button:not(.collapsed) {
            background: #FEF3C7;
            color: var(--ma-teal-dark);
            box-shadow: inset 0 -2px 0 var(--ma-gold);
        }
        .accordion-button::after {
            filter: invert(40%);
        }
        .accordion-button:focus {
            box-shadow: 0 0 0 3px rgba(27, 47, 75, 0.15);
        }
        .accordion-item.table-card .accordion-body {
            background: var(--ma-surface);
        }

        /* ================= Custom Badges ================= */
        .badge-status {
            font-size: 0.72rem;
            font-weight: 600;
            padding: 0.3rem 0.65rem;
            border-radius: 6px;
            letter-spacing: 0.3px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            white-space: nowrap;
        }

        .badge-tervalidasi { background: #FEF3C7; color: var(--ma-teal-dark); border: 1px solid #FDE68A; }
        .badge-sesuai { background: #ECFDF5; color: #065F46; border: 1px solid #A7F3D0; }
        .badge-belum-lengkap { background: #FFFBEB; color: #92400E; border: 1px solid #FDE68A; }
        .badge-perlu-pembaruan { background: #FEF3C7; color: #B45309; border: 1px solid #FCD34D; }
        .badge-tidak-sesuai { background: #FEF2F2; color: #991B1B; border: 1px solid #FECACA; }
        .badge-tidak-berlaku { background: #F1F5F9; color: #475569; border: 1px solid #CBD5E1; }

        .badge-selesai { background: #ECFDF5; color: #047857; border: 1px solid #6EE7B7; }
        .badge-proses { background: #EFF6FF; color: #1D4ED8; border: 1px solid #93C5FD; }
        .badge-diverifikasi { background: #FAF5FF; color: #6B21A8; border: 1px solid #D8B4FE; }
        .badge-belum { background: #FFF1F2; color: #BE123C; border: 1px solid #FDA4AF; }

        .badge-code { background: #F1F5F9; color: var(--ma-text-muted); border: 1px solid var(--ma-border); font-family: "Courier New", monospace; }
        .badge-kelompok { background: #FEF3C7; color: var(--ma-teal-dark); border: 1px solid #FDE68A; }

        /* ================= Detail Views (Label + Value) ================= */
        .detail-row {
            display: grid;
            grid-template-columns: 240px 1fr;
            gap: 0.75rem;
            padding: 0.65rem 0;
            border-bottom: 1px dashed var(--ma-border);
        }

        .detail-row:last-child {
            border-bottom: none;
        }

        .detail-row .label {
            font-size: 0.78rem;
            font-weight: 600;
            color: var(--ma-text-muted);
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .detail-row .value {
            font-size: 0.88rem;
            color: var(--ma-text-dark);
        }

        @media (max-width: 767.98px) {
            .detail-row {
                grid-template-columns: 1fr;
                gap: 0.25rem;
            }
        }

        /* ================= Flash Alerts ================= */
        .flash-alert {
            border-radius: 8px;
            padding: 0.85rem 1rem;
            font-size: 0.85rem;
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1rem;
            border: 1px solid transparent;
        }

        .flash-alert.success { background: #ECFDF5; color: #047857; border-color: #6EE7B7; }
        .flash-alert.error { background: #FEF2F2; color: #B91C1C; border-color: #FECACA; }
        .flash-alert.info { background: #EFF6FF; color: #1D4ED8; border-color: #93C5FD; }

        /* ================= Footer ================= */
        .site-footer {
            background: var(--ma-surface);
            border-top: 1px solid var(--ma-border);
            padding: 0.85rem 1.75rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            font-size: 0.74rem;
            color: var(--ma-text-muted);
        }

        .site-footer .left {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        /* Accents */
        .ma-gold-accent-line {
            height: 3px;
            background: linear-gradient(90deg, var(--ma-teal) 0%, var(--ma-gold) 50%, var(--ma-teal) 100%);
        }

        /* Legacy helpers kept for backward compat */
        .btn-ma-navy {
            background-color: var(--ma-dark);
            color: #FFFFFF;
            border: 1px solid var(--ma-dark);
            font-weight: 500;
        }

        .btn-ma-navy:hover {
            background-color: var(--ma-dark-deep);
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

        .satker-badge {
            background: rgba(255,255,255,0.12);
            color: #FFFFFF;
            border: 1px solid rgba(255,255,255,0.30);
            padding: 0.35rem 0.75rem;
            border-radius: 6px;
            font-size: 0.76rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .period-pill {
            background: rgba(255,255,255,0.10);
            color: #FFFFFF;
            border: 1px solid rgba(255,255,255,0.25);
            padding: 0.35rem 0.75rem;
            border-radius: 6px;
            font-size: 0.76rem;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
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

        /* ================= Page banner (dark navy, ref 25-31) ================= */
        .banner-page {
            background: linear-gradient(135deg, var(--ma-dark) 0%, var(--ma-dark-deep) 100%);
            color: #FFFFFF;
            border-radius: 10px;
            padding: 1.15rem 1.5rem;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .banner-page .bp-left {
            display: flex;
            align-items: center;
            gap: 14px;
            min-width: 0;
        }

        .banner-page .bp-photo {
            width: 62px;
            height: 62px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid rgba(255,255,255,0.35);
            flex-shrink: 0;
            background: #FFFFFF;
            display: block;
        }

        .banner-page .bp-name {
            font-family: 'Outfit', sans-serif;
            font-size: 1.02rem;
            font-weight: 600;
            line-height: 1.3;
            margin: 0 0 3px;
        }

        .banner-page .bp-name em {
            font-style: normal;
            display: block;
            font-family: 'Inter', sans-serif;
            font-size: 0.74rem;
            font-weight: 400;
            color: #94A3B8;
        }

        .banner-page .bp-crumb {
            color: var(--ma-gold-light);
            font-size: 0.78rem;
            font-weight: 500;
            letter-spacing: 0.4px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
        }

        .banner-page .bp-crumb .bi {
            font-size: 0.6rem;
        }

        .banner-page .bp-actions {
            display: flex;
            gap: 8px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-page {
            font-size: 0.78rem;
            font-weight: 500;
            padding: 0.4rem 0.9rem;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            border: 1px solid transparent;
            text-decoration: none;
        }

        .btn-page.btn-ghost-light {
            background: transparent;
            border-color: rgba(255,255,255,0.35);
            color: #FFFFFF;
        }

        .btn-page.btn-ghost-light:hover {
            background: rgba(255,255,255,0.10);
            color: #FFFFFF;
        }

        .btn-page.btn-accent {
            background: var(--ma-gold);
            color: #1B2F4B;
        }

        .btn-page.btn-accent:hover {
            background: #B45309;
            color: #FFFFFF;
        }

        /* ================= Form card (2-card underline form, ref 5-7, 26-27) ================= */
        .form-card {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }

        .form-card-header {
            background: linear-gradient(135deg, var(--ma-teal) 0%, var(--ma-teal-dark) 100%);
            color: #FFFFFF;
            padding: 0.9rem 1.4rem;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .form-card-header .fch-title {
            font-family: 'Outfit', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .form-card-header .fch-sub {
            font-size: 0.7rem;
            opacity: 0.8;
        }

        .form-card-body {
            padding: 1.5rem 1.4rem;
        }

        .field-underline {
            position: relative;
            padding-top: 16px;
            margin-bottom: 26px;
        }

        .field-underline label {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 0.74rem;
            font-weight: 600;
            color: var(--ma-text-muted);
            text-transform: uppercase;
            letter-spacing: 0.4px;
        }

        .field-underline .fval {
            font-size: 0.92rem;
            font-weight: 500;
            color: var(--ma-text-dark);
            padding-bottom: 8px;
            border-bottom: 1px solid #C9D2D6;
            display: block;
            min-height: 22px;
        }

        .field-underline .fval.muted {
            color: #9AA5AB;
            font-weight: 400;
        }

        .field-underline .required {
            color: var(--ma-danger);
            font-weight: 700;
        }

        .field-underline input,
        .field-underline select {
            width: 100%;
            border: none;
            border-bottom: 1px solid #C9D2D6;
            background: transparent;
            padding: 0.35rem 0 0.4rem;
            font-size: 0.9rem;
            color: var(--ma-text-dark);
            outline: none;
            border-radius: 0;
            box-shadow: none;
        }

        .field-underline input:focus,
        .field-underline select:focus {
            border-bottom: 2px solid var(--ma-gold);
        }

        .field-underline select {
            appearance: none;
            -webkit-appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236B7A85' d='M2 4l4 4 4-4'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 4px center;
            padding-right: 22px;
        }

        .field-underline .ferror {
            color: var(--ma-danger);
            font-size: 0.72rem;
            margin-top: 4px;
            display: none;
        }

        .field-underline.invalid input,
        .field-underline.invalid select {
            border-bottom-color: var(--ma-danger);
        }

        .field-underline.invalid .ferror {
            display: block;
        }

        .field-underline.invalid label {
            color: var(--ma-danger);
        }

        .form-footer {
            border-top: 1px solid var(--ma-border);
            padding: 1rem 1.4rem;
            display: flex;
            justify-content: flex-end;
            gap: 10px;
            background: #F8FAFB;
        }

        .btn-teal {
            background: var(--ma-gold);
            border: 1px solid var(--ma-gold);
            color: #1B2F4B;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 0.45rem 1.25rem;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .btn-teal:hover {
            background: #B45309;
            border-color: #B45309;
            color: #FFFFFF;
        }

        .btn-cancel {
            background: #FFFFFF;
            border: 1px solid var(--ma-border);
            color: var(--ma-text-dark);
            font-size: 0.82rem;
            font-weight: 500;
            padding: 0.45rem 1.1rem;
            border-radius: 6px;
        }

        .btn-cancel:hover {
            background: var(--ma-bg);
        }

        /* ================= List panel (Daftar Saudara / Riwayat NIP, ref 25, 28) ================= */
        .list-panel {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }

        .list-panel .lp-head {
            background: linear-gradient(135deg, var(--ma-teal) 0%, var(--ma-teal-dark) 100%);
            color: #FFFFFF;
            padding: 0.9rem 1.4rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
        }

        .list-panel .lp-head h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 0.98rem;
            font-weight: 600;
            margin: 0;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .list-panel .lp-body {
            padding: 1.25rem 1.4rem;
        }

        .lp-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            padding: 0.95rem 0;
            border-bottom: 1px solid var(--ma-border);
        }

        .lp-row:last-child {
            border-bottom: none;
        }

        .lp-row .lp-main .lp-title {
            font-size: 0.92rem;
            font-weight: 600;
            color: var(--ma-text-dark);
            margin: 0 0 2px;
        }

        .lp-row .lp-main .lp-sub {
            font-size: 0.78rem;
            color: var(--ma-text-muted);
            margin: 0;
        }

        .empty-state {
            text-align: center;
            padding: 2.5rem 1.5rem;
            color: var(--ma-text-muted);
        }

        .empty-state .es-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 14px;
            border-radius: 50%;
            background: #EEF1F2;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.6rem;
            color: #9AA5AB;
        }

        .empty-state h3 {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--ma-text-dark);
            margin: 0 0 4px;
        }

        .empty-state p {
            font-size: 0.8rem;
            margin: 0;
        }

        /* ================= Big profile banner (ref 1, 2-4) ================= */
        .profile-banner {
            background: linear-gradient(120deg, var(--ma-dark-deep) 0%, #1B2F4B 60%, #0E1B30 100%);
            border-radius: 12px;
            padding: 1.75rem 2rem;
            color: #FFFFFF;
            margin-bottom: 1rem;
            position: relative;
            overflow: hidden;
        }

        .profile-banner::after {
            content: "";
            position: absolute;
            right: -80px;
            top: -80px;
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(217,119,6,0.14) 0%, transparent 70%);
        }

        .profile-banner .pb-wrap {
            display: flex;
            gap: 1.5rem;
            align-items: flex-start;
            position: relative;
            z-index: 1;
        }

        .profile-banner .pb-photo {
            width: 128px;
            height: 128px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--ma-gold-light);
            flex-shrink: 0;
            background: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.4rem;
            font-weight: 700;
            color: var(--ma-gold-light);
            position: relative;
        }

        .profile-banner .pb-photo .pb-badge {
            position: absolute;
            top: 6px;
            right: 6px;
            width: 26px;
            height: 26px;
            border-radius: 50%;
            background: #DC2626;
            color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.75rem;
            font-weight: 700;
            border: 2px solid var(--ma-dark-deep);
        }

        .profile-banner .pb-name {
            font-family: 'Outfit', sans-serif;
            font-size: 1.55rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            margin: 0 0 8px;
            color: #FFFFFF;
        }

        .profile-banner .pb-detail {
            font-size: 0.82rem;
            color: #C8D4DC;
            line-height: 1.75;
        }

        .profile-banner .pb-detail .pb-strong {
            color: #FFFFFF;
            font-weight: 600;
        }

        .profile-banner .pb-unggah {
            color: var(--ma-gold-light);
            font-size: 0.78rem;
            font-weight: 500;
            text-decoration: none;
            display: inline-block;
            margin-top: 6px;
            border-bottom: 1px dashed rgba(217,119,6,0.5);
        }

        .profile-banner .pb-right {
            margin-left: auto;
            text-align: right;
            font-size: 0.82rem;
            color: #C8D4DC;
            line-height: 2;
            flex-shrink: 0;
        }

        .profile-banner .pb-right i {
            color: var(--ma-gold-light);
            margin-right: 6px;
        }

        /* Gold section bar with breadcrumb (>> ... << Kembali) */
        .crumb-gold {
            background: #FFFFFF;
            border: 1px solid var(--ma-border);
            border-radius: 8px;
            padding: 0.65rem 1.25rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            margin-bottom: 1.25rem;
        }

        .crumb-gold .cg-text {
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--ma-gold);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .crumb-gold .cg-text .bi {
            font-size: 0.7rem;
        }

        .crumb-gold .cg-back {
            font-size: 0.78rem;
            font-weight: 500;
            color: var(--ma-text-muted);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 5px;
        }

        .crumb-gold .cg-back:hover {
            color: var(--ma-teal);
        }

        /* Icon module grid (Data Pokok / Riwayat Pekerjaan) */
        .section-module {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 12px;
            padding: 1.5rem 1.75rem 1.75rem;
            margin-bottom: 1.25rem;
        }

        .section-module h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: #0F172A;
            margin: 0 0 1.25rem;
        }

        .module-grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 1.5rem 1rem;
        }

        .module-item {
            text-align: center;
            position: relative;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        .module-item .mi-icon {
            width: 76px;
            height: 76px;
            margin: 0 auto 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.1rem;
            color: #1F2937;
            transition: transform 0.15s ease, color 0.15s ease;
        }

        .module-item:hover .mi-icon {
            transform: translateY(-3px);
            color: var(--ma-teal);
        }

        .module-item .mi-label {
            font-size: 0.82rem;
            font-weight: 500;
            color: var(--ma-text-dark);
        }

        .module-item .mi-badge {
            position: absolute;
            top: 2px;
            left: 50%;
            margin-left: 22px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: #DC2626;
            color: #FFFFFF;
            font-size: 0.68rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #FFFFFF;
        }

        @media (max-width: 991.98px) {
            .module-grid {
                grid-template-columns: repeat(3, 1fr);
            }
            .profile-banner .pb-right {
                display: none;
            }
        }

        /* ================= Detail panel with teal header (ref 2-4, 8-16) ================= */
        .detail-panel {
            background: var(--ma-surface);
            border: 1px solid var(--ma-border);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.03);
        }

        .detail-panel .dp-head {
            background: var(--ma-teal);
            color: #FFFFFF;
            border-bottom: 3px solid var(--ma-gold);
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 0.85rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            padding: 0.65rem 1.25rem;
        }

        .detail-panel .dp-body {
            padding: 1.25rem;
        }

        /* Mini toolbar row (Perbarui / DRH / Monitoring / Log / Refresh) */
        .mini-toolbar {
            display: flex;
            gap: 0.35rem;
            margin-bottom: 0.85rem;
            flex-wrap: wrap;
        }

        .mini-toolbar .mt-btn {
            font-size: 0.75rem;
            font-weight: 500;
            padding: 0.3rem 0.7rem;
            color: var(--ma-text-dark);
            background: #FFFFFF;
            border: 1px solid var(--ma-border);
            border-radius: 3px;
            display: inline-flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }

        .mini-toolbar .mt-btn:hover {
            background: var(--ma-bg);
            color: var(--ma-teal);
        }

        .mini-toolbar .mt-btn.active {
            background: #FFFFFF;
            color: var(--ma-text-dark);
        }

        .mini-toolbar .mt-btn .bi {
            font-size: 0.85rem;
        }

        /* Dual-column detail layout (BIO DATA | KELAHIRAN) */
        .detail-cols {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
        }

        @media (max-width: 767.98px) {
            .detail-cols {
                grid-template-columns: 1fr;
            }
        }

        /* Biodata photo tiles (ref 2) */
        .bd-photo-grid { display: flex; flex-direction: column; gap: 0; }
        .bd-photo-tile {
            display: grid; grid-template-columns: 110px 1fr; align-items: center; gap: 0.75rem;
            padding: 1rem 0.9rem; min-height: 190px;
        }
        .bd-photo-tile:first-child { background: #ECECEC; border-bottom: 1px solid #E5E7EB; }
        .bd-photo-tile:last-child { background: #FFFFFF; }
        .bdt-label { font-size: 0.82rem; font-weight: 600; color: #111827; text-align: left; }
        .bdt-media {
            background: #FFFFFF;
            border: 1px solid #E5E7EB;
            min-height: 158px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 10px;
        }
        .bd-photo-tile:last-child .bdt-media { border: 1px solid #E5E7EB; }
        .bdt-frame {
            width: 96px; height: 128px; border: 1px solid #9AA5AB;
            display: flex; align-items: center; justify-content: center;
            font-weight: 800; font-size: 1.4rem;
        }
        .bdt-frame-yellow { background: #F5C518; color: #1F2937; }
        .bdt-frame-bluebg { background: #1D5FBF; color: #FFFFFF; }
        .bdt-placeholder { color: #9AA5AB; font-size: 0.78rem; text-align: center; width: 100%; padding: 30px 12px; }
        .bdt-actions { position: absolute; right: 8px; bottom: 8px; display: flex; gap: 3px; }
        .bdt-btn {
            width: 24px; height: 24px; border: 1px solid #D1D5DB; background: #FFFFFF;
            border-radius: 2px; font-size: 0.7rem; color: #374151;
            display: inline-flex; align-items: center; justify-content: center; cursor: pointer;
        }
        .bdt-btn:hover { background: #F9FAFB; color: var(--ma-teal); }
        .detail-panel .dp-body { padding: 0; }

        .crumb-gold .cg-seg { color: var(--ma-text-muted); }
        .crumb-gold .cg-seg-strong { color: var(--ma-teal); font-weight: 600; }

        /* ================= Detail Biodata (ref 3, Perbarui) ================= */
        .biodata-detail-cols { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; align-items: start; }
        @media (max-width: 767.98px) { .biodata-detail-cols { grid-template-columns: 1fr; } }
        .biodata-card { background: #FFFFFF; border: 1px solid var(--ma-border); border-radius: 6px; overflow: hidden; }
        .biodata-card .edoc-row { display: flex; align-items: center; gap: 8px; padding: 0.65rem 1rem; border-bottom: 1px solid var(--ma-border); background: #FFFFFF; font-size: 0.82rem; color: #DC2626; }
        .biodata-card .edoc-row i { color: #6B7280; font-size: 0.9rem; }
        .biodata-card .edoc-row span { font-style: italic; }
        .biodata-table { width: 100%; border-collapse: collapse; }
        .biodata-table td { padding: 0.55rem 1rem; border-bottom: 1px solid #E5E7EB; font-size: 0.83rem; vertical-align: middle; }
        .biodata-table tr:last-child td { border-bottom: none; }
        .biodata-table td.bd-label { width: 38%; text-align: right; font-weight: 700; color: #111827; }
        .biodata-table td.bd-value { text-align: left; color: #111827; }
        .biodata-table tr.bd-grey td { background: #ECECEC; }
        .biodata-table tr.bd-section td { background: #F8FAFB; font-weight: 700; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.4px; color: #111827; }
        .biodata-table a.bd-link { color: var(--ma-teal); text-decoration: none; }
        .biodata-table a.bd-link:hover { text-decoration: underline; }
        .biodata-table .not-set { color: #DC2626; font-style: italic; font-size: 0.82rem; }
        .mini-toolbar .mt-btn.active-perbarui { background: #FFFFFF; border-color: var(--ma-teal); color: var(--ma-teal); font-weight: 600; }

        /* ================= Daftar Alamat (ref 4) ================= */
        .daftar-panel { background: #FFFFFF; border: 1px solid #D9E2E6; border-radius: 4px; overflow: hidden; margin-bottom: 1.25rem; }
        .daftar-head { background: linear-gradient(90deg, #1B2F4B 0%, #2C5282 100%); color: #FFFFFF; border-bottom: 3px solid #D97706; padding: 0.6rem 1rem; display: flex; justify-content: space-between; align-items: center; gap: 10px; }
        .daftar-head .dh-left { font-size: 0.85rem; font-weight: 700; letter-spacing: 1px; display: flex; align-items: center; gap: 8px; text-transform: uppercase; }
        .daftar-head .dh-right { font-size: 0.78rem; font-weight: 600; letter-spacing: 0.3px; text-transform: uppercase; }
        .daftar-note { position: relative; padding: 0.7rem 1rem; border-bottom: 1px solid #E5E7EB; text-align: center; font-size: 0.82rem; color: #111827; background: #FFFFFF; min-height: 44px; display: flex; align-items: center; justify-content: center; }
        .daftar-note .dn-actions { position: absolute; right: 0.75rem; top: 50%; transform: translateY(-50%); display: flex; gap: 4px; }
        .daftar-btn { width: 32px; height: 32px; border: 1px solid #D1D5DB; background: #FFFFFF; color: #374151; border-radius: 3px; display: inline-flex; align-items: center; justify-content: center; font-size: 0.9rem; cursor: pointer; }
        .daftar-btn:hover { background: #F3F4F6; }
        .daftar-btn.primary { background: #D97706; border-color: #D97706; color: #1B2F4B; }
        .daftar-btn.primary:hover { background: #B45309; color: #FFFFFF; }
        .daftar-table-wrap { overflow-x: auto; }
        .daftar-table { width: 100%; border-collapse: collapse; min-width: 820px; }
        .daftar-table thead th { background: #1B2F4B; color: #FFFFFF; font-size: 0.76rem; font-weight: 700; letter-spacing: 0.4px; text-transform: uppercase; padding: 0.65rem 0.85rem; text-align: left; white-space: nowrap; }
        .daftar-table tbody td { padding: 0.65rem 0.85rem; border-bottom: 1px solid #E5E7EB; font-size: 0.82rem; color: #111827; vertical-align: middle; }
        .daftar-table tbody tr:hover td { background: #F8FAFB; }
        .daftar-table .aksi i { color: #D97706; font-size: 0.95rem; margin-right: 10px; cursor: pointer; }
        .daftar-table .aksi i:hover { color: #B45309; }
        .badge-terverifikasi { background: #1B2F4B; color: #FFFFFF; font-size: 0.72rem; font-weight: 600; padding: 0.2rem 0.55rem; border-radius: 3px; }
        .daftar-empty { padding: 1rem; background: #F4F5F5; min-height: 160px; }

        /* ================= Tambah Daftar Alamat (ref 5) ================= */
        .alamat-form-cols { display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; align-items: start; margin-bottom: 1.25rem; }
        @media (max-width: 767.98px) { .alamat-form-cols { grid-template-columns: 1fr; } }
        .alamat-card { background: #FFFFFF; border: 1px solid #E5E7EB; border-radius: 6px; padding: 1.25rem 1.5rem 1.5rem; }
        .af-grid { display: grid; gap: 0 1.25rem; }
        .af-grid.cols-2 { grid-template-columns: 1fr 1fr; }
        .af-grid.cols-3 { grid-template-columns: 1fr 1fr 1fr; }
        .af-field { padding-top: 20px; margin-bottom: 22px; position: relative; }
        .af-field label { position: absolute; top: 0; left: 0; font-size: 0.82rem; font-weight: 600; color: #111827; }
        .af-field label .required { color: #DC2626; }
        .af-field input, .af-field select, .af-field textarea { width: 100%; border: none; border-bottom: 2px solid #1B2F4B; background: transparent; padding: 0.3rem 0 0.35rem; font-size: 0.88rem; color: #111827; outline: none; border-radius: 0; }
        .af-field input::placeholder, .af-field textarea::placeholder, .af-field select:invalid { color: #9AA5AB; }
        .af-field input:focus, .af-field select:focus, .af-field textarea:focus { border-bottom-color: #D97706; }
        .af-field select { appearance: none; -webkit-appearance: none; background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%236B7280' d='M2 4l4 4 4-4'/%3E%3C/svg%3E"); background-repeat: no-repeat; background-position: right 4px center; padding-right: 22px; cursor: pointer; }
        .af-field textarea { resize: vertical; min-height: 36px; }
        .af-homebase { display: flex; align-items: stretch; gap: 0; }
        .af-homebase input { border: 1px solid #D1D5DB; border-bottom: 1px solid #D1D5DB; width: 64px; padding: 0.35rem 0.5rem; border-radius: 3px 0 0 3px; }
        .af-homebase input:focus { border-color: #D97706; }
        .af-homebase button { border: 1px solid #D1D5DB; border-left: none; background: #F3F4F6; color: #374151; font-size: 0.82rem; padding: 0.35rem 0.9rem; border-radius: 0 3px 3px 0; cursor: pointer; }
        .af-homebase button.active { background: #D97706; border-color: #D97706; color: #1B2F4B; font-weight: 600; }
        .btn-simpan-green { background: #D97706; border: 1px solid #D97706; color: #1B2F4B; font-size: 0.82rem; font-weight: 600; padding: 0.45rem 1.1rem; border-radius: 4px; display: inline-flex; align-items: center; gap: 7px; cursor: pointer; float: right; }
        .btn-simpan-green:hover { background: #B45309; color: #FFFFFF; }
        .kartu-form-wrap { max-width: 820px; margin-bottom: 1.25rem; }
        .file-edoc-box { border: 1px solid #E5E7EB; border-radius: 3px; min-height: 190px; position: relative; background: #FFFFFF; margin-top: 4px; }
        .file-edoc-box .edoc-empty { position: absolute; left: 10px; bottom: 10px; font-size: 0.8rem; color: #DC2626; font-style: italic; display: flex; align-items: center; gap: 6px; }
        .file-edoc-box .edoc-empty i { color: #6B7280; font-style: normal; font-size: 1rem; }
        .file-edoc-box .edoc-upload { position: absolute; right: 10px; bottom: 10px; width: 30px; height: 30px; background: #D97706; border: none; border-radius: 3px; color: #1B2F4B; display: inline-flex; align-items: center; justify-content: center; cursor: pointer; font-size: 0.9rem; }
        /* ================= Tambah Riwayat NIP (ref 29-31) ================= */
        .af-dategroup { display: flex; align-items: center; background: #EBEEF0; border-radius: 3px; padding: 0 6px 0 10px; min-height: 32px; }
        .af-field .af-dategroup input { border: none; background: transparent; flex: 1; padding: 0.3rem 0; font-size: 0.85rem; }
        .af-dategroup .dg-x { background: none; border: none; color: #374151; font-size: 0.95rem; padding: 2px 6px; cursor: pointer; }
        .af-dategroup .dg-sep { width: 1px; height: 20px; background: #D1D5DB; margin: 0 4px; }
        .af-dategroup .dg-cal { background: none; border: none; color: #374151; font-size: 0.95rem; padding: 2px 4px; cursor: pointer; }
        .nip-select { width: 100%; border: 1px solid #D1D5DB; border-radius: 3px; padding: 0.35rem 0.5rem; font-size: 0.88rem; color: #111827; background: #FFFFFF; outline: none; }
        .nip-select:focus { border-color: #D97706; }
        .nip-select.invalid { border-color: #DC2626; }
        .ferror-red { color: #DC2626; font-size: 0.8rem; font-weight: 600; margin-top: 4px; }
        .nip-sk-box { border: 1px solid #D1D5DB; border-radius: 3px; min-height: 230px; background: #FFFFFF; }
    </style>
    @stack('styles')
</head>
<body>
@php
    use App\Services\AccessControl;
    $currentRole = AccessControl::currentRole();
    $currentLabel = AccessControl::currentRoleLabel();
    $roleNames = [
        'admin' => ['initial' => 'AD', 'name' => 'Ahmad Fauzi, S.Kom', 'jabatan' => 'Administratur SIKEP MA-RI', 'nip' => '197503142000031001'],
        'petugas' => ['initial' => 'OP', 'name' => 'Rina Anggraini, S.E.', 'jabatan' => 'Petugas Kepegawaian', 'nip' => '198805122014032002'],
        'reviewer' => ['initial' => 'RV', 'name' => 'Dewi Lestari, S.E.', 'jabatan' => 'Reviewer / Pimpinan Satker', 'nip' => '198210102006042001'],
    ];
    $profile = $roleNames[$currentRole] ?? $roleNames['admin'];
@endphp

<!-- ================= TOP NAVBAR (TEAL) ================= -->
<header class="top-navbar d-flex align-items-center justify-content-between gap-3">
    <div class="d-flex align-items-center gap-3">
        <button class="nav-icon-btn d-lg-none" id="sidebarToggle" aria-label="Toggle sidebar">
            <i class="bi bi-list"></i>
        </button>
        <div class="brand-logo">
            <img src="{{ asset('images/logo-ma.svg') }}" alt="Lambang Mahkamah Agung RI" onerror="this.style.display='none'">
            <div>
                <h1 class="brand-title brand-font">SIKEP</h1>
                <p class="brand-subtitle">Mahkamah Agung RI</p>
            </div>
        </div>
    </div>

    <div class="d-flex align-items-center gap-3">
        <div class="satker-badge d-none d-xl-flex">
            <i class="bi bi-bank"></i>
            <span>SN: PN Surabaya</span>
        </div>
        <div class="period-pill d-none d-md-flex">
            <i class="bi bi-calendar2-range"></i>
            <span>Periode: Semester I 2026</span>
        </div>
        <button class="nav-icon-btn" title="Notifikasi">
            <i class="bi bi-bell"></i>
        </button>
        <button class="btn border-0 bg-transparent text-white p-0 d-flex align-items-center gap-2" type="button" data-bs-toggle="dropdown" data-bs-boundary="viewport">
            <div class="nav-avatar">{{ $profile['initial'] }}</div>
            <div class="d-none d-lg-block text-start lh-1">
                <div class="user-name">{{ $profile['name'] }}</div>
                <div class="user-role">{{ $currentLabel }}</div>
            </div>
            <i class="bi bi-chevron-down small d-none d-lg-block"></i>
        </button>
        <div class="dropdown-menu dropdown-menu-end" style="min-width: 220px;">
            <div class="px-3 py-2 border-bottom">
                <div class="fw-bold text-dark">{{ $profile['name'] }}</div>
                <div class="small text-muted">{{ $currentLabel }}</div>
            </div>
            <div class="px-3 py-2 small border-bottom">
                <div class="fw-semibold text-muted" style="font-size: 0.66rem; text-transform: uppercase; letter-spacing: 0.6px;">Ubah Peran (RBAC)</div>
                <div class="d-flex flex-column gap-1 mt-1">
                    <a class="dropdown-item py-1 px-1 small {{ $currentRole === 'admin' ? 'active bg-white text-primary fw-semibold' : '' }}" href="{{ route('role.switch', 'admin') }}">
                        <i class="bi bi-shield-check me-2"></i>Administrator
                    </a>
                    <a class="dropdown-item py-1 px-1 small {{ $currentRole === 'petugas' ? 'active bg-white text-warning fw-semibold' : '' }}" href="{{ route('role.switch', 'petugas') }}">
                        <i class="bi bi-person-workspace me-2"></i>Petugas Kepegawaian
                    </a>
                    <a class="dropdown-item py-1 px-1 small {{ $currentRole === 'reviewer' ? 'active bg-white text-success fw-semibold' : '' }}" href="{{ route('role.switch', 'reviewer') }}">
                        <i class="bi bi-award-fill me-2"></i>Reviewer / Pimpinan
                    </a>
                </div>
            </div>
            <hr class="dropdown-divider">
            <a class="dropdown-item py-2 px-3 small" href="{{ route('dashboard') }}"><i class="bi bi-grid me-2"></i>Dashboard Saya</a>
            <a class="dropdown-item py-2 px-3 small" href="{{ route('pembaruan.index') }}"><i class="bi bi-clock-history me-2"></i>Riwayat Aktivitas</a>
            <hr class="dropdown-divider">
            <a class="dropdown-item py-2 px-3 small text-danger" href="{{ route('login') }}"><i class="bi bi-box-arrow-right me-2"></i>Keluar (Logout)</a>
        </div>
    </div>
</header>

<!-- ================= SIDEBAR (DARK) ================= -->
<aside id="sidebar">
    <div class="sidebar-user">
        <div class="user-row">
            <div class="user-photo">
                <i class="bi bi-person-fill"></i>
            </div>
            <div class="d-flex flex-column">
                <div class="user-name">{{ $profile['name'] }}</div>
                <div class="user-role">{{ $currentLabel }}</div>
            </div>
        </div>
        <div class="user-contact">
            <span><i class="bi bi-envelope"></i> {{ $profile['name'] }}@ma.go.id</span>
            <span><i class="bi bi-telephone"></i> (021) 571-2245 ext. {{ substr($profile['initial'], 0, 1) === 'A' ? '101' : (substr($profile['initial'],0,1) === 'O' ? '204' : '302') }}</span>
            <span><i class="bi bi-hash"></i> NIP. {{ $profile['nip'] }}</span>
        </div>
    </div>

    <div class="sidebar-menu">
        <a href="{{ route('home') }}" class="sidebar-link {{ request()->routeIs('home') ? 'active' : '' }}">
            <i class="bi bi-house-door-fill"></i>
            <span>Home</span>
        </a>

        <a href="{{ route('monitoring.index') }}" class="sidebar-link {{ request()->routeIs('monitoring.*') ? 'active' : '' }}">
            <i class="bi bi-clipboard-data-fill"></i>
            <span>Presensi Online</span>
        </a>

        <a href="{{ route('dashboard') }}" class="sidebar-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <i class="bi bi-person-badge-fill"></i>
            <span>Profil Pegawai</span>
        </a>

        <a href="{{ route('pegawai.index') }}" class="sidebar-link {{ request()->routeIs('pegawai.*') ? 'active' : '' }}">
            <i class="bi bi-people-fill"></i>
            <span>Administrasi Pegawai</span>
            <i class="bi bi-chevron-right sidebar-chev"></i>
        </a>
    </div>

    <div class="sidebar-footer">
        <div class="fw-semibold" style="color: #CFD8DC;">SIKEP v.3.1.0</div>
        <div>Biro Kepegawaian MA-RI</div>
    </div>
</aside>

<!-- ================= MAIN CONTENT ================= -->
<div id="content-wrapper">
    @yield('profile_header')

    @yield('breadcrumb')

    <!-- Flash Messages -->
    <div class="px-3 px-lg-4 pt-3">
        @if(session('error'))
            <div class="flash-alert error">
                <i class="bi bi-slash-circle-fill fs-5"></i>
                <div><strong>Perhatian:</strong> {{ session('error') }}</div>
                <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="alert" aria-label="Close" style="color: inherit;"></button>
            </div>
        @endif

        @if(session('success'))
            <div class="flash-alert success">
                <i class="bi bi-check-circle-fill fs-5"></i>
                <div>{{ session('success') }}</div>
            </div>
        @endif

        @if(session('info'))
            <div class="flash-alert info">
                <i class="bi bi-info-circle-fill fs-5"></i>
                <div>{{ session('info') }}</div>
            </div>
        @endif
    </div>

    <main class="sik-page">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="site-footer mt-auto">
        <div class="left">
            <span>SIKEP <strong>v.3.1.0</strong>. Hak Cipta &copy; 2026 Mahkamah Agung Republik Indonesia</span>
            <span class="d-none d-md-inline">|</span>
            <span class="d-none d-md-inline">IP Anda: 111.68.25.138</span>
        </div>
        <div class="d-flex gap-3">
            <span><i class="bi bi-shield-check" style="color: var(--ma-teal);"></i> Sistem RBAC Aktif</span>
            <span><i class="bi bi-database-check" style="color: var(--ma-teal);"></i> Sinkronisasi SIKEP</span>
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
