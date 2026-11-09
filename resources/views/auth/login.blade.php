<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk - SIMONEV SIKEP Mahkamah Agung RI</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Outfit:wght@600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --ma-navy: #0E1B30;
            --ma-navy-dark: #0A1424;
            --ma-teal: #1B2F4B;
            --ma-teal-dark: #14233B;
            --ma-gold: #D97706;
            --ma-gold-light: #F59E0B;
        }
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #0A1424 0%, #0E1B30 50%, #1E3A5C 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            color: #E2E8F0;
        }
        .login-card {
            background: #FFFFFF;
            color: var(--ma-navy-dark);
            border-radius: 12px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.35);
            max-width: 440px;
            width: 100%;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .login-header {
            background: linear-gradient(180deg, var(--ma-navy-dark) 0%, var(--ma-navy) 100%);
            padding: 2.25rem 2rem 1.75rem 2rem;
            text-align: center;
            position: relative;
        }
        .login-header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--ma-gold) 0%, var(--ma-gold-light) 50%, var(--ma-gold) 100%);
        }
        .login-logo {
            width: 72px;
            height: 72px;
            filter: drop-shadow(0 4px 8px rgba(0,0,0,0.4));
            margin-bottom: 0.85rem;
        }
        .login-title {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.45rem;
            color: #FFFFFF;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }
        .login-subtitle {
            font-size: 0.78rem;
            color: var(--ma-gold-light);
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 600;
            margin: 0;
        }
        .login-body {
            padding: 2rem 2rem 2.25rem 2rem;
        }
        .form-control,
        .form-select {
            border-radius: 8px;
            padding: 0.7rem 0.9rem;
            border: 1px solid #CBD5E1;
            font-size: 0.92rem;
        }
        .form-control:focus,
        .form-select:focus {
            border-color: var(--ma-teal);
            box-shadow: 0 0 0 3px rgba(27, 47, 75, 0.15);
        }
        .input-group-text {
            background: #F4F6F7;
            border: 1px solid #CBD5E1;
            border-right: none;
            color: #64748B;
            border-radius: 8px 0 0 8px;
        }
        .input-group .form-control {
            border-radius: 0 8px 8px 0;
        }
        .btn-masuk {
            background: linear-gradient(180deg, #F59E0B 0%, var(--ma-gold) 100%);
            color: #1B2F4B;
            font-weight: 600;
            padding: 0.75rem;
            border-radius: 8px;
            border: none;
            transition: all 0.2s;
        }
        .btn-masuk:hover {
            background: linear-gradient(180deg, var(--ma-gold) 0%, #B45309 100%);
            color: #FFFFFF;
            transform: translateY(-1px);
        }
        .quick-role-btn {
            background: #F4F6F7;
            border: 1px solid #CBD5E1;
            border-radius: 6px;
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.4rem 0.6rem;
            color: #475569;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            transition: all 0.15s;
        }
        .quick-role-btn:hover {
            background: #FEF3C7;
            color: var(--ma-teal-dark);
            border-color: #FDE68A;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <img src="{{ asset('images/logo-ma.svg') }}" alt="Logo MA" class="login-logo">
            <h1 class="login-title">SIMONEV SIKEP</h1>
            <p class="login-subtitle">Mahkamah Agung Republik Indonesia</p>
            <div class="text-white-50 small mt-1" style="font-size: 0.75rem;">Sistem Monitoring dan Evaluasi Kepegawaian</div>
        </div>

        <div class="login-body">
            <form action="{{ route('login.post') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label fw-semibold small text-muted">Satuan Kerja / Instansi</label>
                    <select class="form-select form-control" name="satker">
                        <option value="PN-01">Pengadilan Negeri / Agama Kelas IA</option>
                        <option value="PT-01">Pengadilan Tinggi Jawa Barat</option>
                        <option value="MA-01">Biro Kepegawaian Mahkamah Agung RI</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold small text-muted">Username / NIP</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" name="username" value="admin" placeholder="Masukkan username atau NIP" required>
                    </div>
                </div>

                <div class="mb-4">
                    <div class="d-flex justify-content-between align-items-center mb-1">
                        <label class="form-label fw-semibold small text-muted mb-0">Kata Sandi</label>
                        <a href="#" class="small text-decoration-none text-muted" onclick="alert('Silakan hubungi Administrator IT Satuan Kerja untuk reset password.')">Lupa?</a>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-key"></i></span>
                        <input type="password" class="form-control" name="password" value="password" placeholder="Masukkan kata sandi" required>
                    </div>
                </div>

                <div class="d-grid mb-4">
                    <button type="submit" class="btn btn-masuk">
                        <i class="bi bi-box-arrow-in-right me-2"></i> Masuk ke Sistem
                    </button>
                </div>

                <!-- Quick Demo Login Helpers -->
                <div class="border-top pt-3">
                    <div class="text-center text-muted small fw-semibold mb-2" style="font-size: 0.72rem; text-transform: uppercase; letter-spacing: 0.5px;">
                        Akses Cepat Uji Coba (Demo Role)
                    </div>
                    <div class="d-flex justify-content-center gap-2 flex-wrap">
                        <a href="{{ route('role.switch', 'admin') }}" class="quick-role-btn">
                            <i class="bi bi-shield-fill" style="color:var(--ma-teal);"></i> Administrator
                        </a>
                        <a href="{{ route('role.switch', 'petugas') }}" class="quick-role-btn">
                            <i class="bi bi-person-workspace" style="color:var(--ma-gold);"></i> Petugas
                        </a>
                        <a href="{{ route('role.switch', 'reviewer') }}" class="quick-role-btn">
                            <i class="bi bi-award-fill" style="color:var(--ma-teal-dark);"></i> Reviewer/Pimpinan
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <div class="bg-light py-2 px-3 border-top text-center text-muted small" style="font-size: 0.75rem;">
            <div>Satker: <strong>Pengadilan Negeri / Pengadilan Agama</strong> &bull; Tahun {{ date('Y') }}</div>
        </div>
    </div>

</body>
</html>
