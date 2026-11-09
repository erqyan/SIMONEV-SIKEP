@extends('layouts.app')

@section('title', 'Kamus & Matriks Monitoring SIKEP')

@section('content')
<div class="container-fluid px-0">

    <!-- Header + Toolbar -->
    <div class="table-card mb-3">
        <div class="table-toolbar mb-0">
            <div class="left">
                <h2 class="h5 fw-bold mb-0">Master Kamus Monitoring SIKEP</h2>
                <small class="text-muted">Struktur standar 5 kelompok utama, 35 subkelompok, dan indikator parameter evaluasi data</small>
            </div>
            <div class="right">
                <button class="btn-teal btn btn-sm" onclick="alert('Form tambah parameter baru...');">
                    <i class="bi bi-plus-lg me-1"></i> Tambah Parameter
                </button>
            </div>
        </div>
    </div>

    <!-- 5 Kelompok Accordion -->
    <div class="accordion" id="accordionKamus">

        <!-- Kelompok A -->
        <div class="accordion-item table-card mb-3 overflow-hidden" style="border-radius:8px;">
            <h2 class="accordion-header" id="headingA">
                <button class="accordion-button py-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseA" aria-expanded="true">
                    <span class="badge-kelompok badge badge-status me-2" style="font-size:0.8rem;">A</span>
                    <span class="text-uppercase" style="letter-spacing:0.3px;">Kelompok A: Data Pokok (9 Subkelompok)</span>
                </button>
            </h2>
            <div id="collapseA" class="accordion-collapse collapse show" data-bs-parent="#accordionKamus">
                <div class="accordion-body p-0">
                    <div class="table-responsive">
                        <table class="table table-custom table-sm mb-0">
                            <thead>
                                <tr>
                                    <th style="width:80px;">Kode</th>
                                    <th style="width:200px;">Nama Subkelompok</th>
                                    <th>Indikator Parameter yang Dinilai</th>
                                    <th>Dokumen Sumber Pembanding Sah</th>
                                    <th style="width:100px;">Sifat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge-code badge">A.1</span></td>
                                    <td class="fw-bold">Biodata Pribadi</td>
                                    <td>NIP 18 Digit, Nama Lengkap, Gelar Depan, Gelar Belakang, Tempat &amp; Tanggal Lahir, Jenis Kelamin, Agama, Golongan Darah</td>
                                    <td>KTP Asli / Kartu Keluarga / Akta Lahir / Ijazah Pertama</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.2</span></td>
                                    <td class="fw-bold">Alamat &amp; Domisili</td>
                                    <td>Alamat Lengkap KTP, Domisili Riil, RT/RW, Kelurahan, Kecamatan, Kab/Kota, Kode Pos, Nomor Kontak HP</td>
                                    <td>KTP / Surat Keterangan Domisili</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.3</span></td>
                                    <td class="fw-bold">Kartu Identitas ASN</td>
                                    <td>Nomor Kartu Pegawai (Karpeg), KPE, NPWP 16 Digit, Nomor BPJS Kesehatan, BPJS Ketenagakerjaan/Taspen</td>
                                    <td>Fisik Kartu / Surat Keterangan Resmi</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.4</span></td>
                                    <td class="fw-bold">Pasangan (Suami/Istri)</td>
                                    <td>Nama Lengkap Pasangan, NIK 16 Digit, Status Pekerjaan, Tanggal Pernikahan, Nomor Akta/Buku Nikah, Karis/Karsu</td>
                                    <td>Buku Nikah KUA / Akta Perkawinan Catatan Sipil</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.5</span></td>
                                    <td class="fw-bold">Anak Kandung/Angkat</td>
                                    <td>Nama Anak, NIK, Tanggal Lahir, Status Hak Tunjangan Gaji (KP4), Surat Keterangan Kuliah/Belum Menikah</td>
                                    <td>Akta Kelahiran Anak / Kartu Keluarga</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.6</span></td>
                                    <td class="fw-bold">Orang Tua Kandung</td>
                                    <td>Nama Ayah Kandung, Nama Ibu Kandung, Tempat/Tanggal Lahir, Status Masih Hidup / Meninggal Dunia</td>
                                    <td>Kartu Keluarga Orang Tua / Akta Kelahiran Pegawai</td>
                                    <td><span class="badge" style="background:#F1F5F9; color:#475569; border:1px solid #CBD5E1;">Opsional</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.7</span></td>
                                    <td class="fw-bold">Saudara Kandung</td>
                                    <td>Nama Saudara, Hubungan Saudara, Tempat/Tanggal Lahir</td>
                                    <td>Kartu Keluarga Orang Tua</td>
                                    <td><span class="badge" style="background:#F1F5F9; color:#475569; border:1px solid #CBD5E1;">Opsional</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.8</span></td>
                                    <td class="fw-bold">Perubahan NIP</td>
                                    <td>Konversi NIP Lama (9 digit) ke NIP Baru (18 digit), Tanggal Penetapan BKN</td>
                                    <td>Surat Keputusan Konversi NIP BKN</td>
                                    <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D;">Kondisional</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">A.9</span></td>
                                    <td class="fw-bold">Perubahan Nama Sah</td>
                                    <td>Riwayat ganti nama resmi, dasar penetapan pengadilan negeri / akta catatan sipil</td>
                                    <td>Penetapan Pengadilan Negeri Sah</td>
                                    <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D;">Kondisional</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelompok B -->
        <div class="accordion-item table-card mb-3 overflow-hidden" style="border-radius:8px;">
            <h2 class="accordion-header" id="headingB">
                <button class="accordion-button collapsed py-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseB">
                    <span class="badge-kelompok badge badge-status me-2" style="font-size:0.8rem;">B</span>
                    <span class="text-uppercase" style="letter-spacing:0.3px;">Kelompok B: Riwayat Pekerjaan (8 Subkelompok)</span>
                </button>
            </h2>
            <div id="collapseB" class="accordion-collapse collapse" data-bs-parent="#accordionKamus">
                <div class="accordion-body p-0">
                    <div class="table-responsive">
                        <table class="table table-custom table-sm mb-0">
                            <thead>
                                <tr>
                                    <th style="width:80px;">Kode</th>
                                    <th style="width:200px;">Nama Subkelompok</th>
                                    <th>Indikator Parameter yang Dinilai</th>
                                    <th>Dokumen Sumber Pembanding Sah</th>
                                    <th style="width:100px;">Sifat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><span class="badge-code badge">B.1</span></td>
                                    <td class="fw-bold">CPNS</td>
                                    <td>Nomor SK CPNS, TMT CPNS, Pejabat Penetap, SPMT CPNS, Formasi Jabatan</td>
                                    <td>SK Pengangkatan CPNS &amp; SPMT Asli</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">B.2</span></td>
                                    <td class="fw-bold">PNS</td>
                                    <td>Nomor SK PNS, TMT PNS, Tanggal Sumpah PNS, Berita Acara Sumpah, Hasil Uji Kesehatan</td>
                                    <td>SK PNS &amp; Berita Acara Sumpah</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">B.3</span></td>
                                    <td class="fw-bold">Pangkat / Golongan</td>
                                    <td>Seluruh Riwayat Kenaikan Pangkat, Golongan Ruang, TMT Pangkat, Tanggal &amp; Nomor SK</td>
                                    <td>SK Kenaikan Pangkat Terakhir s.d Pertama</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">B.4</span></td>
                                    <td class="fw-bold">Jabatan</td>
                                    <td>Jabatan Struktural / Fungsional / Pelaksana, TMT Jabatan, Tanggal Pelantikan, Berita Acara</td>
                                    <td>SK Mutasi/Promosi, SPMT, &amp; BA Pelantikan</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">B.5</span></td>
                                    <td class="fw-bold">PMK (Peninjauan Masa Kerja)</td>
                                    <td>Nomor SK Penetapan PMK BKN, Masa Kerja Tambahan (Tahun &amp; Bulan), TMT Berlaku</td>
                                    <td>SK Penetapan PMK BKN</td>
                                    <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D;">Kondisional</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">B.6</span></td>
                                    <td class="fw-bold">KGB (Kenaikan Gaji Berkala)</td>
                                    <td>Nomor Surat Pemberitahuan KGB Terakhir, TMT KGB, Besaran Gaji Pokok Baru, MKG</td>
                                    <td>Surat Keterangan KGB Terakhir</td>
                                    <td><span class="badge-status badge-selesai">Wajib</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">B.7</span></td>
                                    <td class="fw-bold">Persetujuan Tenaga Teknis</td>
                                    <td>Surat Persetujuan / SK Pengangkatan Tenaga Teknis Peradilan (Hakim, Panitera, Jurusita)</td>
                                    <td>SK Dirjen Terkait (Badilum / Badilag / Badilmiltun)</td>
                                    <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D;">Kondisional</span></td>
                                </tr>
                                <tr>
                                    <td><span class="badge-code badge">B.8</span></td>
                                    <td class="fw-bold">Pensiun / Berhenti</td>
                                    <td>Batas Usia Pensiun (BUP), Nomor SK Pensiun BKN/Presiden, TMT Berhenti</td>
                                    <td>SK Pemberhentian / Pensiun Sah</td>
                                    <td><span class="badge" style="background:#FEF3C7; color:#B45309; border:1px solid #FCD34D;">Kondisional</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelompok C -->
        <div class="accordion-item table-card mb-3 overflow-hidden" style="border-radius:8px;">
            <h2 class="accordion-header" id="headingC">
                <button class="accordion-button collapsed py-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseC">
                    <span class="badge-kelompok badge badge-status me-2" style="font-size:0.8rem;">C</span>
                    <span class="text-uppercase" style="letter-spacing:0.3px;">Kelompok C: Pengembangan Kompetensi (7 Subkelompok)</span>
                </button>
            </h2>
            <div id="collapseC" class="accordion-collapse collapse" data-bs-parent="#accordionKamus">
                <div class="accordion-body p-3 small" style="color:var(--ma-text-muted);">
                    Memuat 7 Subkelompok: <strong class="text-dark">C.1 Pendidikan Formal, C.2 Tugas/Izin Belajar, C.3 Profesi/Keahlian, C.4 Pelatihan/Diklat, C.5 Sertifikasi Kompetensi, C.6 Kemampuan Bahasa, C.7 Hasil Uji Asesmen Kompetensi.</strong> Seluruh parameter mewajibkan verifikasi ijazah terakreditasi dan SK Pencantuman Gelar BKN.
                </div>
            </div>
        </div>

        <!-- Kelompok D -->
        <div class="accordion-item table-card mb-3 overflow-hidden" style="border-radius:8px;">
            <h2 class="accordion-header" id="headingD">
                <button class="accordion-button collapsed py-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseD">
                    <span class="badge-kelompok badge badge-status me-2" style="font-size:0.8rem;">D</span>
                    <span class="text-uppercase" style="letter-spacing:0.3px;">Kelompok D: Penilaian Kinerja (6 Subkelompok)</span>
                </button>
            </h2>
            <div id="collapseD" class="accordion-collapse collapse" data-bs-parent="#accordionKamus">
                <div class="accordion-body p-3 small" style="color:var(--ma-text-muted);">
                    Memuat 6 Subkelompok: <strong class="text-dark">D.1 Sasaran Kinerja Pegawai (SKP), D.2 DP3 Historis, D.3 Penetapan Angka Kredit (PAK), D.4 Penghargaan (Satyalancana Karya Satya), D.5 Prestasi Kerja Kedinasan, D.6 Ujian Dinas / Penyesuaian Ijazah.</strong>
                </div>
            </div>
        </div>

        <!-- Kelompok E -->
        <div class="accordion-item table-card mb-3 overflow-hidden" style="border-radius:8px;">
            <h2 class="accordion-header" id="headingE">
                <button class="accordion-button collapsed py-3 fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseE">
                    <span class="badge-kelompok badge badge-status me-2" style="font-size:0.8rem;">E</span>
                    <span class="text-uppercase" style="letter-spacing:0.3px;">Kelompok E: Lain-Lain (5 Subkelompok)</span>
                </button>
            </h2>
            <div id="collapseE" class="accordion-collapse collapse" data-bs-parent="#accordionKamus">
                <div class="accordion-body p-3 small" style="color:var(--ma-text-muted);">
                    Memuat 5 Subkelompok: <strong class="text-dark">E.1 Medical Check-Up (Kesehatan), E.2 Organisasi Kedinasan (IKAHI, IPASPI, KORPRI), E.3 Izin Perjalanan Luar Negeri / Setneg, E.4 Kepatuhan Pelaporan LHKPN (KPK) &amp; LHKASN, E.5 Riwayat Cuti dan Izin Resmi.</strong>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
