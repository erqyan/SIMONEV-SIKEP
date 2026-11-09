@extends('layouts.app')

@section('title', 'Profil Pegawai')

@section('content')
<div class="container-fluid px-0">

    <!-- Big Navy Profile Banner -->
    <div class="profile-banner">
        <div class="pb-wrap">
            <div class="pb-photo">
                @if(isset($foto))
                    <img src="{{ $foto }}" alt="Foto Profil" style="width:100%;height:100%;object-fit:cover;border-radius:50%;">
                @else
                    ND
                @endif
                <span class="pb-badge">2</span>
            </div>
            <div style="min-width:0;">
                <h1 class="pb-name">Novita Diastuti, S.Kom</h1>
                <div class="pb-detail">
                    Penata Layanan Operasional, Subbagian Kepegawaian, Organisasi, dan Tata Laksana
                    Pengadilan Negeri Yogyakarta Kelas IA<br>
                    Penata Muda Tingkat I (III/b)<br>
                    198911262015032003<br>
                    Kab. Solok, 26 November 1989
                </div>
                <a href="#" class="pb-unggah">[unggah foto]</a>
            </div>
            <div class="pb-right">
                <div><i class="bi bi-telephone"></i> 081325151283</div>
                <div><i class="bi bi-envelope"></i> novita.diastuti@mahkamahagung.go.id</div>
            </div>
        </div>
    </div>

    <!-- Gold Breadcrumb + Kembali -->
    <div class="crumb-gold">
        <span class="cg-text">
            <span class="cg-seg">Daftar Hakim/Pegawai</span>
            &nbsp;&gt;&gt;&nbsp;
            <span class="cg-seg-strong">Data Pegawai</span>
            <span id="crumb-detail">
            </span>
        </span>
        <a href="{{ route('pegawai.index') }}" class="cg-back" id="cg-back">
            &laquo; Kembali
        </a>
    </div>

    <!-- Data Pokok -->
    <div class="section-module" id="module-data-pokok">
        <h2>Data Pokok</h2>
        <div class="module-grid">
            <a class="module-item" href="#tab-biodata" data-toggle="tab">
                <div class="mi-icon"><i class="bi bi-file-earmark-person"></i><span class="mi-badge">2</span></div>
                <div class="mi-label">Biodata</div>
            </a>
            <a class="module-item" href="#tab-alamat">
                <div class="mi-icon"><i class="bi bi-house-heart"></i></div>
                <div class="mi-label">Alamat</div>
            </a>
            <a class="module-item" href="#tab-kartu">
                <div class="mi-icon"><i class="bi bi-clipboard2-pulse"></i></div>
                <div class="mi-label">Kartu</div>
            </a>
            <a class="module-item" href="#tab-pasangan">
                <div class="mi-icon"><i class="bi bi-people-fill"></i></div>
                <div class="mi-label">Pasangan</div>
            </a>
            <a class="module-item" href="#tab-anak">
                <div class="mi-icon"><i class="bi bi-people"></i></div>
                <div class="mi-label">Anak</div>
            </a>
            <a class="module-item" href="#tab-orangtua">
                <div class="mi-icon"><i class="bi bi-person-lines-fill"></i></div>
                <div class="mi-label">Orang Tua</div>
            </a>
            <a class="module-item" href="#tab-saudara">
                <div class="mi-icon"><i class="bi bi-diagram-3-fill"></i></div>
                <div class="mi-label">Saudara</div>
            </a>
            <a class="module-item" href="#tab-perubahan-nip">
                <div class="mi-icon"><i class="bi bi-credit-card-2-front"></i></div>
                <div class="mi-label">Perubahan NIP</div>
            </a>
            <a class="module-item" href="#tab-perubahan-nama">
                <div class="mi-icon"><i class="bi bi-person-badge"></i></div>
                <div class="mi-label">Perubahan Nama</div>
            </a>
        </div>
    </div>

    <!-- Riwayat Pekerjaan -->
    <div class="section-module" id="module-riwayat">
        <h2>Riwayat Pekerjaan</h2>
        <div class="module-grid">
            <a class="module-item" href="#tab-cpns">
                <div class="mi-icon"><i class="bi bi-person-vcard"></i></div>
                <div class="mi-label">CPNS</div>
            </a>
            <a class="module-item" href="#tab-pns">
                <div class="mi-icon"><i class="bi bi-person-check"></i></div>
                <div class="mi-label">PNS</div>
            </a>
            <a class="module-item" href="#tab-pangkat">
                <div class="mi-icon"><i class="bi bi-person-bounding-box"></i></div>
                <div class="mi-label">Pangkat</div>
            </a>
            <a class="module-item" href="#tab-jabatan">
                <div class="mi-icon"><i class="bi bi-person-lines-fill" style="position:relative;"><span class="mi-badge" style="position:absolute;top:-8px;left:100%;margin-left:-4px;">2</span></i></div>
                <div class="mi-label">Jabatan</div>
            </a>
            <a class="module-item" href="#tab-pmk">
                <div class="mi-icon"><i class="bi bi-calendar-month-fill"></i></div>
                <div class="mi-label">PMK</div>
            </a>
            <a class="module-item" href="#tab-kgb">
                <div class="mi-icon"><i class="bi bi-cash-stack" style="color:#0EA5E9;"></i></div>
                <div class="mi-label">KGB</div>
            </a>
        </div>
    </div>

    <!-- Sub-panels: shown by clicking module-item. Default hidden. -->
    <div id="tab-biodata" class="module-view d-none">
        <div class="mini-toolbar mb-3">
            <button class="mt-btn" id="btn-perbarui" type="button" onclick="showBiodataDetail()"><i class="bi bi-pencil"></i> Perbarui</button>
            <button class="mt-btn"><i class="bi bi-clipboard2-check"></i> DRH</button>
            <button class="mt-btn"><i class="bi bi-monitor"></i> Monitoring</button>
            <button class="mt-btn"><i class="bi bi-journal-text"></i> Log</button>
            <button class="mt-btn"><i class="bi bi-arrow-repeat"></i> Refresh</button>
        </div>

        <div id="biodata-photos">
        <div class="detail-cols">
            <div class="detail-panel">
                <div class="dp-head">BIO DATA</div>
                <div class="dp-body">
                    <div class="bd-photo-grid">
                        <div class="bd-photo-tile">
                            <div class="bdt-label">Foto Profil</div>
                            <div class="bdt-media">
                                <div class="bdt-frame bdt-frame-yellow">ND</div>
                                <div class="bdt-actions">
                                    <button type="button" class="bdt-btn"><i class="bi bi-plus"></i></button>
                                    <button type="button" class="bdt-btn"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="bd-photo-tile">
                            <div class="bdt-label">Foto Formal</div>
                            <div class="bdt-media">
                                <div class="bdt-placeholder">[unggah foto]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="detail-panel">
                <div class="dp-head">KELAHIRAN</div>
                <div class="dp-body">
                    <div class="bd-photo-grid">
                        <div class="bd-photo-tile">
                            <div class="bdt-label">Foto Korpi</div>
                            <div class="bdt-media">
                                <div class="bdt-frame bdt-frame-bluebg">ND</div>
                                <div class="bdt-actions">
                                    <button type="button" class="bdt-btn"><i class="bi bi-plus"></i></button>
                                    <button type="button" class="bdt-btn"><i class="bi bi-search"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="bd-photo-tile">
                            <div class="bdt-label">Akta Lahir</div>
                            <div class="bdt-media">
                                <div class="bdt-placeholder">[unggah dokumen]</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div><!-- /#biodata-photos -->

        <div id="biodata-detail" class="d-none">
            <div class="biodata-detail-cols">
                <div class="biodata-card">
                    <div class="edoc-row"><i class="bi bi-file-earmark-text"></i><span>(Tidak ada edoc)</span></div>
                    <table class="biodata-table">
                        <tbody>
                            <tr><td class="bd-label">NIP/NRP</td><td class="bd-value">198911262015032003</td></tr>
                            <tr><td class="bd-label">Nama Lengkap</td><td class="bd-value">NOVITA DIASTUTI, S.Kom</td></tr>
                            <tr><td class="bd-label">Tempat Tanggal Lahir</td><td class="bd-value">Kab. Solok, 26 November 1989</td></tr>
                            <tr><td class="bd-label">NIK</td><td class="bd-value">3402136611890002 <span class="badge-valid" style="float:right;"><i class="bi bi-check-circle"></i> Sudah Terverifikasi</span></td></tr>
                            <tr><td class="bd-label">Jenis Pegawai</td><td class="bd-value">PNS</td></tr>
                            <tr><td class="bd-label">Gol. Ruang</td><td class="bd-value">Penata Muda Tingkat I (III/b)</td></tr>
                            <tr><td class="bd-label">Nomor Handphone</td><td class="bd-value">081325151283</td></tr>
                            <tr><td class="bd-label">Nomor Telepon</td><td class="bd-value"></td></tr>
                            <tr><td class="bd-label">Email Pribadi</td><td class="bd-value"><a class="bd-link" href="mailto:novita895@gmail.com">novita895@gmail.com</a></td></tr>
                            <tr><td class="bd-label">Email Domain MA</td><td class="bd-value"><a class="bd-link" href="mailto:novita.diastuti@mahkamahagung.go.id">novita.diastuti@mahkamahagung.go.id</a></td></tr>
                            <tr class="bd-section"><td colspan="2">INFORMASI BANK</td></tr>
                            <tr><td class="bd-label">Bank</td><td class="bd-value">BANK BRI</td></tr>
                            <tr><td class="bd-label">Cabang</td><td class="bd-value">WUKIR SARI</td></tr>
                            <tr><td class="bd-label">Nama Rekening</td><td class="bd-value">NOVITA DIASTUTI</td></tr>
                            <tr><td class="bd-label">Nomor Rekening</td><td class="bd-value">744601000367536</td></tr>
                        </tbody>
                    </table>
                </div>

                <div class="biodata-card">
                    <div class="edoc-row"><i class="bi bi-file-earmark-text"></i><span>(Tidak ada edoc)</span></div>
                    <table class="biodata-table">
                        <tbody>
                            <tr><td class="bd-label">Jenis Kelamin</td><td class="bd-value">Wanita</td></tr>
                            <tr><td class="bd-label">Agama</td><td class="bd-value">Islam</td></tr>
                            <tr><td class="bd-label">Suku Bangsa</td><td class="bd-value">Suku Jawa</td></tr>
                            <tr><td class="bd-label">Status Perkawinan</td><td class="bd-value">Kawin</td></tr>
                            <tr><td class="bd-label">Hobi</td><td class="bd-value">Traveling, shoping, kuliner</td></tr>
                            <tr><td class="bd-label">Tinggi/Berat Badan</td><td class="bd-value">168 Cm / 65 Kg</td></tr>
                            <tr><td class="bd-label">Golongan Darah</td><td class="bd-value">B</td></tr>
                            <tr><td class="bd-label">Warna Kulit</td><td class="bd-value">Kuning Langsat</td></tr>
                            <tr class="bd-grey"><td class="bd-label">Bentuk Muka</td><td class="bd-value">Oval</td></tr>
                            <tr><td class="bd-label">Rambut</td><td class="bd-value"><span class="not-set">(tidak diset)</span></td></tr>
                            <tr><td class="bd-label">Ciri Khusus</td><td class="bd-value"></td></tr>
                            <tr><td class="bd-label">Cacat Tubuh</td><td class="bd-value"></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div id="tab-alamat" class="module-view d-none">
        <div id="alamat-list">
        <div class="daftar-panel">
            <div class="daftar-head">
                <div class="dh-left"><i class="bi bi-list-ul"></i> DAFTAR</div>
                <div class="dh-right">SHOWING <strong>1-1</strong> OF <strong>1</strong> ITEM.</div>
            </div>
            <div class="daftar-note">
                <span>* Setiap pegawai hanya memiliki satu alamat homebase</span>
                <div class="dn-actions">
                    <button type="button" class="daftar-btn primary" title="Tambah" onclick="showAlamatForm()"><i class="bi bi-plus"></i></button>
                    <button type="button" class="daftar-btn" title="Refresh"><i class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="daftar-btn" title="Export"><i class="bi bi-download"></i></button>
                </div>
            </div>
            <div class="daftar-table-wrap">
                <table class="daftar-table">
                    <thead>
                        <tr>
                            <th style="width:48px;">NO</th>
                            <th>HOME BASE <i class="bi bi-arrow-down-up" style="font-size:0.7rem; margin-left:4px;"></i></th>
                            <th>JENIS ALAMAT</th>
                            <th>ALAMAT</th>
                            <th>KABUPATEN</th>
                            <th>STATUS VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bukan</td>
                            <td>Milik Pribadi yang Bersangkutan</td>
                            <td>KARANGANOM</td>
                            <td>Bantul (Bantul)</td>
                            <td><span class="badge-terverifikasi">Terverifikasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="daftar-empty"></div>
        </div>
        </div><!-- /#alamat-list -->

        <div id="alamat-form" class="d-none">
            <div class="alamat-form-cols">
                <div class="alamat-card">
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Home Base <span class="required">*</span></label>
                            <div class="af-homebase">
                                <input type="text" placeholder="" aria-label="Home Base">
                                <button type="button" class="active">Bukan</button>
                            </div>
                        </div>
                        <div class="af-field">
                            <label>Jenis Alamat <span class="required">*</span></label>
                            <select required>
                                <option value="" selected>Pilih Jenis Alamat</option>
                                <option>Milik Pribadi yang Bersangkutan</option>
                                <option>Keluarga</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="af-field">
                        <label>Propinsi</label>
                        <select><option value="" selected>Pilih Propinsi</option><option>DI Yogyakarta</option><option>Jawa Barat</option><option>Jawa Timur</option></select>
                    </div>
                    <div class="af-field">
                        <label>Kabupaten</label>
                        <select><option value="" selected>Pilih Kabupaten</option><option>Bantul (Bantul)</option><option>Yogyakarta (Kota)</option></select>
                    </div>
                    <div class="af-field">
                        <label>Kecamatan</label>
                        <select><option value="" selected>Pilih Kecamatan</option><option>Sewon</option><option>Depok</option></select>
                    </div>
                </div>
                <div class="alamat-card">
                    <div class="af-grid cols-3">
                        <div class="af-field"><label>RT</label><input type="text"></div>
                        <div class="af-field"><label>RW</label><input type="text"></div>
                        <div class="af-field"><label>Nomor Telepon</label><input type="text"></div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field"><label>Kelurahan</label><input type="text"></div>
                        <div class="af-field"><label>Kode Pos</label><input type="text"></div>
                    </div>
                    <div class="af-field">
                        <label>Alamat <span class="required">*</span></label>
                        <textarea rows="1" placeholder="Ketikkan keterangan"></textarea>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-simpan-green" onclick="simpanAlamat()"><i class="bi bi-save"></i> Simpan</button>
        </div>
    </div>

    <div id="tab-kartu" class="module-view d-none">
        <div id="kartu-list">
        <div class="daftar-panel">
            <div class="daftar-head">
                <div class="dh-left"><i class="bi bi-list-ul"></i> KARTU</div>
                <div class="dh-right">SHOWING <strong>1-7</strong> OF <strong>7</strong> ITEMS.</div>
            </div>
            <div class="daftar-note">
                <span></span>
                <div class="dn-actions">
                    <button type="button" class="daftar-btn primary" title="Tambah" onclick="showKartuForm()"><i class="bi bi-plus"></i></button>
                    <button type="button" class="daftar-btn" title="Refresh"><i class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="daftar-btn" title="Export"><i class="bi bi-download"></i></button>
                </div>
            </div>
            <div class="daftar-table-wrap">
                <table class="daftar-table">
                    <thead>
                        <tr>
                            <th style="width:48px;">NO</th>
                            <th>JENIS KARTU <i class="bi bi-arrow-down-up" style="font-size:0.7rem; margin-left:4px;"></i></th>
                            <th>NO. KARTU</th>
                            <th>KETERANGAN</th>
                            <th>STATUS VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>ASKES/BPJS Kesehatan</td><td>0000197588891</td><td><span class="not-set">(tidak diset)</span></td><td><span class="badge-terverifikasi">Terverifikasi</span></td><td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-text" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td></tr>
                        <tr><td>2</td><td>NPWP</td><td>99.984.707.2-543.000</td><td><span class="not-set">(tidak diset)</span></td><td><span class="badge-terverifikasi">Terverifikasi</span></td><td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-text" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td></tr>
                        <tr><td>3</td><td>KTP</td><td>3402136611890002</td><td><span class="not-set">(tidak diset)</span></td><td><span class="badge-terverifikasi">Terverifikasi</span></td><td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-text" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td></tr>
                        <tr><td>4</td><td>KORPRI</td><td>-</td><td><span class="not-set">(tidak diset)</span></td><td><span class="badge-terverifikasi">Terverifikasi</span></td><td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-text" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td></tr>
                        <tr><td>5</td><td>TASPEN</td><td>891126150320030</td><td><span class="not-set">(tidak diset)</span></td><td><span class="badge-terverifikasi">Terverifikasi</span></td><td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-text" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td></tr>
                        <tr><td>6</td><td>Kartu Istri/Suami</td><td>BB 01029984</td><td><span class="not-set">(tidak diset)</span></td><td><span class="badge-terverifikasi">Terverifikasi</span></td><td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-text" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td></tr>
                        <tr><td>7</td><td>Kartu Pegawai</td><td>B01028573</td><td><span class="not-set">(tidak diset)</span></td><td><span class="badge-terverifikasi">Terverifikasi</span></td><td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-text" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td></tr>
                    </tbody>
                </table>
            </div>
            <div class="daftar-empty"></div>
        </div>
        </div><!-- /#kartu-list -->

        <div id="kartu-form" class="d-none">
            <div class="kartu-form-wrap">
                <div class="alamat-card">
                    <div class="af-field">
                        <label>Jenis Kartu <span class="required">*</span></label>
                        <select required style="border:1px solid #D1D5DB; border-bottom:1px solid #D1D5DB; border-radius:3px; padding:0.45rem 2rem 0.45rem 0.6rem;">
                            <option value="" selected>Pilih Jenis Kartu</option>
                            <option>ASKES/BPJS Kesehatan</option>
                            <option>NPWP</option>
                            <option>KTP</option>
                            <option>KORPRI</option>
                            <option>TASPEN</option>
                            <option>Kartu Istri/Suami</option>
                            <option>Kartu Pegawai</option>
                        </select>
                    </div>
                    <div class="af-field">
                        <label>No. Kartu <span class="required">*</span></label>
                        <input type="text">
                    </div>
                    <div class="af-field">
                        <label>Keterangan</label>
                        <textarea rows="1" placeholder="Ketikkan keterangan"></textarea>
                    </div>
                    <div class="af-field" style="margin-bottom:0;">
                        <label>File Kartu</label>
                        <div class="file-edoc-box">
                            <span class="edoc-empty"><i class="bi bi-file-earmark-text"></i>(Tidak ada edoc)</span>
                            <button type="button" class="edoc-upload" title="Unggah"><i class="bi bi-upload"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-simpan-green" onclick="simpanKartu()"><i class="bi bi-save"></i> Simpan</button>
        </div>
    </div>

    <div id="tab-pasangan" class="module-view d-none">
        <div id="pasangan-list">
        <div class="daftar-panel">
            <div class="daftar-head">
                <div class="dh-left"><i class="bi bi-list-ul"></i> PASANGAN</div>
                <div class="dh-right">SHOWING <strong>1-1</strong> OF <strong>1</strong> ITEM.</div>
            </div>
            <div class="daftar-note">
                <span></span>
                <div class="dn-actions">
                    <button type="button" class="daftar-btn primary" title="Tambah" onclick="showPasanganForm()"><i class="bi bi-plus"></i></button>
                    <button type="button" class="daftar-btn" title="Refresh"><i class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="daftar-btn" title="Export"><i class="bi bi-download"></i></button>
                </div>
            </div>
            <div class="daftar-table-wrap">
                <table class="daftar-table">
                    <thead>
                        <tr>
                            <th style="width:48px;">NO</th>
                            <th>NAMA PASANGAN <i class="bi bi-arrow-down-up" style="font-size:0.7rem; margin-left:4px;"></i></th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR <i class="bi bi-arrow-down-up" style="font-size:0.7rem; margin-left:4px;"></i></th>
                            <th>PEKERJAAN</th>
                            <th>STATUS VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NAFI'UDDIN,SH</td>
                            <td>Bantul</td>
                            <td>01 Desember 1983</td>
                            <td>ASN Instansi Luar</td>
                            <td><span class="badge-terverifikasi">Tervalidasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-pdf text-danger" title="Dokumen"></i><i class="bi bi-file-earmark-image" title="Foto"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="daftar-empty"></div>
        </div>
        </div><!-- /#pasangan-list -->

        <div id="pasangan-form" class="d-none">
            <div class="alamat-form-cols">
                <div class="alamat-card">
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Tanggal Menikah</label>
                            <input type="text" placeholder="Pilih Tanggal">
                        </div>
                        <div class="af-field">
                            <label>Pekerjaan</label>
                            <select>
                                <option>Bapak/Ibu Rumah Tangga</option>
                                <option>ASN Instansi Luar</option>
                                <option>PNS</option>
                                <option>TNI</option>
                                <option>Polri</option>
                                <option>Pegawai Swasta</option>
                                <option>Pedagang</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="af-field">
                        <label>Nama <span class="required">*</span></label>
                        <input type="text">
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Nomor Kartu Suami</label>
                            <input type="text">
                        </div>
                        <div class="af-field">
                            <label>Pasangan Ke</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="af-grid cols-3">
                        <div class="af-field">
                            <label>Status Perkawinan <span class="required">*</span></label>
                            <select required><option selected>Kawin</option><option>Belum Kawin</option><option>Cerai</option><option>Meninggal</option></select>
                        </div>
                        <div class="af-field">
                            <label>Masih Hidup <span class="required">*</span></label>
                            <select required><option selected>Ya</option><option>Tidak</option></select>
                        </div>
                        <div class="af-field">
                            <label>Berhak Tunjangan <span class="required">*</span></label>
                            <select required><option selected>Ya</option><option>Tidak</option></select>
                        </div>
                    </div>
                    <div class="af-field" style="margin-bottom:0;">
                        <label>Buku Nikah</label>
                        <div style="border:1px solid #D1D5DB; border-top:1px solid #1B2F4B; min-height:110px; background:#fff;"></div>
                    </div>
                </div>
                <div class="alamat-card">
                    <div class="af-field">
                        <label>Foto</label>
                        <div style="border:1px solid #D1D5DB; border-top:1px solid #1B2F4B; min-height:110px; background:#fff;"></div>
                    </div>
                    <div class="file-edoc-box" style="margin-bottom:1rem;">
                        <span class="edoc-empty"><i class="bi bi-file-earmark-text"></i>(Tidak ada edoc)</span>
                        <button type="button" class="edoc-upload" title="Unggah"><i class="bi bi-folder2-open"></i></button>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Tempat Lahir</label>
                            <input type="text" placeholder="Ketik Tempat">
                        </div>
                        <div class="af-field">
                            <label>Tanggal Lahir</label>
                            <input type="text" placeholder="Pilih Tanggal">
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>No HP</label>
                            <input type="text">
                        </div>
                        <div class="af-field">
                            <label>NIK</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Agama</label>
                            <select><option value="" selected>Pilih Agama</option><option>Islam</option><option>Kristen</option><option>Katolik</option><option>Hindu</option><option>Buddha</option></select>
                        </div>
                        <div class="af-field">
                            <label>Pendidikan Terakhir</label>
                            <select><option value="" selected>Pilih Pendidikan Terakhir</option><option>SD</option><option>SMP</option><option>SMA</option><option>S1</option><option>S2</option><option>S3</option></select>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-simpan-green" onclick="simpanPasangan()"><i class="bi bi-save"></i> Simpan</button>
        </div>
    </div>

    <div id="tab-anak" class="module-view d-none">
        <div id="anak-list">
        <div class="daftar-panel">
            <div class="daftar-head">
                <div class="dh-left"><i class="bi bi-people"></i> ANAK</div>
                <div class="dh-right">SHOWING <strong>1-1</strong> OF <strong>1</strong> ITEM.</div>
            </div>
            <div class="daftar-note">
                <span></span>
                <div class="dn-actions">
                    <button type="button" class="daftar-btn primary" title="Tambah" onclick="showAnakForm()"><i class="bi bi-plus"></i></button>
                    <button type="button" class="daftar-btn" title="Refresh"><i class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="daftar-btn" title="Export"><i class="bi bi-download"></i></button>
                </div>
            </div>
            <div class="daftar-table-wrap">
                <table class="daftar-table">
                    <thead>
                        <tr>
                            <th style="width:48px;">NO</th>
                            <th>NAMA ANAK</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR</th>
                            <th>PEKERJAAN</th>
                            <th>STATUS VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>NAFI'UDDIN,SH</td>
                            <td>Bantul</td>
                            <td>01 Desember 1983</td>
                            <td>ASN Instansi Luar</td>
                            <td><span class="badge-terverifikasi">Tervalidasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-pdf text-danger" title="Dokumen"></i><i class="bi bi-file-earmark-image" title="Foto"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="daftar-empty"></div>
        </div>
        </div><!-- /#anak-list -->

        <div id="anak-form" class="d-none">
            <div class="alamat-form-cols">
                <div class="alamat-card">
                    <div class="af-field">
                        <label>Hubungan Keluarga <span class="required">*</span></label>
                        <select required><option selected>Anak Kandung</option><option>Anak Sambung</option><option>Anak Angkat</option><option>Anak Tiri</option></select>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Anak Ke</label>
                            <input type="text">
                        </div>
                        <div class="af-field">
                            <label>Pekerjaan</label>
                            <select>
                                <option selected>Belum Bekerja</option>
                                <option>Pilih Pekerjaan</option>
                                <option>ASN MA</option>
                                <option>ASN Instansi Luar</option>
                                <option>Pegawai Swasta</option>
                                <option>Bapak/Ibu Rumah Tangga</option>
                                <option>Pelajar/Mahasiswa</option>
                                <option>Calon ASN</option>
                                <option>TNI/POLRI</option>
                                <option>Pensiunan</option>
                                <option>Honorer</option>
                                <option>Wiraswasta</option>
                                <option>Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="af-field">
                        <label>Nama <span class="required">*</span></label>
                        <input type="text">
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Berhak Tunjangan <span class="required">*</span></label>
                            <select required><option selected>Ya</option><option>Tidak</option></select>
                        </div>
                        <div class="af-field">
                            <label>Status Perkawinan <span class="required">*</span></label>
                            <select required><option selected>Belum Kawin</option><option>Kawin</option><option>Cerai</option><option>Meninggal</option></select>
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Masih Hidup <span class="required">*</span></label>
                            <select required><option selected>Ya</option><option>Tidak</option></select>
                        </div>
                        <div class="af-field" style="margin-bottom:0;">
                            <label>Akta Lahir</label>
                            <div style="border:1px solid #D1D5DB; border-top:1px solid #1B2F4B; min-height:110px; background:#fff;"></div>
                            <div class="file-edoc-box">
                                <span class="edoc-empty"><i class="bi bi-file-earmark-text"></i>(Tidak ada edoc)</span>
                                <button type="button" class="edoc-upload" title="Unggah"><i class="bi bi-folder2-open"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alamat-card">
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Tempat Lahir</label>
                            <input type="text" placeholder="Ketik Tempat">
                        </div>
                        <div class="af-field">
                            <label>Tanggal Lahir</label>
                            <input type="text" placeholder="Pilih Tanggal">
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Jenis Kelamin <span class="required">*</span></label>
                            <select required><option value="" selected>Pilih Jenis Kelamin</option><option>Laki-Laki</option><option>Perempuan</option></select>
                        </div>
                        <div class="af-field">
                            <label>Agama</label>
                            <select><option value="" selected>Pilih Agama</option><option>Islam</option><option>Kristen</option><option>Katolik</option><option>Hindu</option><option>Buddha</option></select>
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>NIK</label>
                            <input type="text">
                        </div>
                        <div class="af-field">
                            <label>Pendidikan Terakhir</label>
                            <select><option value="" selected>Pilih Pendidikan Terakhir</option><option>SD</option><option>SMP</option><option>SMA</option><option>S1</option><option>S2</option><option>S3</option></select>
                        </div>
                    </div>
                    <div class="af-field" style="margin-bottom:0;">
                        <label>Foto Anak</label>
                        <div style="border:1px solid #D1D5DB; border-top:1px solid #1B2F4B; min-height:110px; background:#fff;"></div>
                        <div class="file-edoc-box">
                            <span class="edoc-empty"><i class="bi bi-file-earmark-text"></i>(Tidak ada edoc)</span>
                            <button type="button" class="edoc-upload" title="Unggah"><i class="bi bi-folder2-open"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-simpan-green" onclick="simpanAnak()"><i class="bi bi-save"></i> Simpan</button>
        </div>
    </div><!-- /#tab-anak -->

    <div id="tab-orangtua" class="module-view d-none">
        <div id="ortu-list">
        <div class="daftar-panel">
            <div class="daftar-head">
                <div class="dh-left"><i class="bi bi-list"></i> ORANG TUA</div>
                <div class="dh-right">SHOWING <strong>1-4</strong> OF <strong>4</strong> ITEMS.</div>
            </div>
            <div class="daftar-note">
                <span></span>
                <div class="dn-actions">
                    <button type="button" class="daftar-btn primary" title="Tambah" onclick="showOrtuForm()"><i class="bi bi-plus"></i></button>
                    <button type="button" class="daftar-btn" title="Refresh"><i class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="daftar-btn" title="Export"><i class="bi bi-download"></i></button>
                </div>
            </div>
            <div class="daftar-table-wrap">
                <table class="daftar-table">
                    <thead>
                        <tr>
                            <th style="width:48px;">NO</th>
                            <th>HUBUNGAN KELUARGA</th>
                            <th>NAMA ORANG TUA</th>
                            <th>TEMPAT LAHIR</th>
                            <th>TANGGAL LAHIR <i class="bi bi-arrow-down-up" style="font-size:.65rem;"></i></th>
                            <th>PEKERJAAN</th>
                            <th>STATUS VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Bapak Mertua</td>
                            <td>SUKAMTO</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td>09 Januari 1947</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td><span class="badge-terverifikasi">Tervalidasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-pdf text-danger" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ibu Mertua</td>
                            <td>SITI AISYAH</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td>04 Oktober 1955</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td><span class="badge-terverifikasi">Tervalidasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-pdf text-danger" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Bapak Kandung</td>
                            <td>BUDI SUROSO</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td>23 Oktober 1965</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td><span class="badge-terverifikasi">Tervalidasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-pdf text-danger" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Ibu Kandung</td>
                            <td>SRI MULYATI</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td>17 Maret 1967</td>
                            <td><span class="not-set">(tidak diset)</span></td>
                            <td><span class="badge-terverifikasi">Tervalidasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-pdf text-danger" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="daftar-empty"></div>
        </div>
        </div><!-- /#ortu-list -->

        <div id="ortu-form" class="d-none">
            <div class="alamat-form-cols">
                <div class="alamat-card">
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Hubungan Keluarga <span class="required">*</span></label>
                            <select required><option value="" selected>Pilih Hubungan Keluarga</option><option>Bapak Kandung</option><option>Ibu Kandung</option><option>Bapak Mertua</option><option>Ibu Mertua</option></select>
                        </div>
                        <div class="af-field">
                            <label>Pekerjaan</label>
                            <select>
                                <option selected>Bapak/Ibu Rumah Tangga</option>
                                <option>Pilih Pekerjaan</option>
                                <option>ASN MA</option>
                                <option>ASN Instansi Luar</option>
                                <option>Pegawai Swasta</option>
                                <option>Pelajar/Mahasiswa</option>
                                <option>Calon ASN</option>
                                <option>TNI/POLRI</option>
                                <option>Pensiunan</option>
                                <option>Belum Bekerja</option>
                                <option>Honorer</option>
                                <option>Wiraswasta</option>
                                <option>Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="af-field">
                        <label>Nama <span class="required">*</span></label>
                        <input type="text">
                    </div>
                    <div class="af-grid cols-3">
                        <div class="af-field">
                            <label>Masih Hidup <span class="required">*</span></label>
                            <select required><option selected>Ya</option><option>Tidak</option></select>
                        </div>
                        <div class="af-field">
                            <label>Status Perkawinan <span class="required">*</span></label>
                            <select required><option selected>Kawin</option><option>Belum Kawin</option><option>Cerai</option><option>Meninggal</option></select>
                        </div>
                        <div class="af-field" style="margin-bottom:0;">
                            <label>Tanggal Menikah</label>
                            <input type="text" placeholder="Pilih Tanggal">
                        </div>
                    </div>
                </div>
                <div class="alamat-card">
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Tempat Lahir</label>
                            <input type="text" placeholder="Ketik Tempat">
                        </div>
                        <div class="af-field">
                            <label>Tanggal Lahir</label>
                            <input type="text" placeholder="Pilih Tanggal">
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>No HP</label>
                            <input type="text">
                        </div>
                        <div class="af-field">
                            <label>NIK</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Agama</label>
                            <select><option value="" selected>Pilih Agama</option><option>Islam</option><option>Kristen</option><option>Katolik</option><option>Hindu</option><option>Buddha</option></select>
                        </div>
                        <div class="af-field" style="margin-bottom:0;">
                            <label>Foto</label>
                            <div style="border:1px solid #D1D5DB; border-top:1px solid #1B2F4B; min-height:110px; background:#fff;"></div>
                            <div class="file-edoc-box">
                                <span class="edoc-empty"><i class="bi bi-file-earmark-text"></i>(Tidak ada edoc)</span>
                                <button type="button" class="edoc-upload" title="Unggah"><i class="bi bi-folder2-open"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-simpan-green" onclick="simpanOrtu()"><i class="bi bi-save"></i> Simpan</button>
        </div>
    </div>

    <div id="tab-saudara" class="module-view d-none">
        <div id="saudara-list">
        <div class="daftar-panel">
            <div class="daftar-head">
                <div class="dh-left"><i class="bi bi-list"></i> DAFTAR SAUDARA</div>
                <div class="dh-right">SHOWING <strong>1-1</strong> OF <strong>1</strong> ITEM.</div>
            </div>
            <div class="daftar-note">
                <span></span>
                <div class="dn-actions">
                    <button type="button" class="daftar-btn primary" title="Tambah" onclick="showSaudaraForm()"><i class="bi bi-plus"></i></button>
                    <button type="button" class="daftar-btn" title="Refresh"><i class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="daftar-btn" title="Export"><i class="bi bi-download"></i></button>
                </div>
            </div>
            <div class="daftar-table-wrap">
                <table class="daftar-table">
                    <thead>
                        <tr>
                            <th style="width:48px;">NO</th>
                            <th>HUBUNGAN KELUARGA</th>
                            <th>NAMA SAUDARA</th>
                            <th>JENIS KELAMIN</th>
                            <th>PEKERJAAN</th>
                            <th>STATUS VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Saudara Kandung</td>
                            <td>RIDHO DWI SAPUTRA</td>
                            <td>Pria</td>
                            <td>TNI/POLRI</td>
                            <td><span class="badge-terverifikasi">Tervalidasi</span></td>
                            <td class="aksi" style="white-space:nowrap;"><i class="bi bi-file-earmark-pdf text-danger" title="Dokumen"></i><i class="bi bi-eye" title="Lihat"></i><i class="bi bi-pencil" title="Ubah"></i><i class="bi bi-trash" title="Hapus"></i><i class="bi bi-person" title="Profil"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="daftar-empty"></div>
        </div>
        </div><!-- /#saudara-list -->

        <div id="saudara-form" class="d-none">
            <div class="alamat-form-cols">
                <div class="alamat-card">
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Hubungan Keluarga <span class="required">*</span></label>
                            <select required>
                                <option selected>Saudara Kandung</option>
                                <option>Saudara Tiri</option>
                                <option>Saudara Ipar</option>
                                <option>Saudara Mertua</option>
                            </select>
                        </div>
                        <div class="af-field">
                            <label>Pekerjaan</label>
                            <select>
                                <option>Pilih Pekerjaan</option>
                                <option>ASN MA</option>
                                <option>ASN Instansi Luar</option>
                                <option>Pegawai Swasta</option>
                                <option>Bapak/Ibu Rumah Tangga</option>
                                <option>Pelajar/Mahasiswa</option>
                                <option>Calon ASN</option>
                                <option>TNI/POLRI</option>
                                <option>Pensiunan</option>
                                <option>Belum Bekerja</option>
                                <option>Honorer</option>
                                <option>Wiraswasta</option>
                                <option selected>Lain-lain</option>
                            </select>
                        </div>
                    </div>
                    <div class="af-field">
                        <label>Nama <span class="required">*</span></label>
                        <input type="text">
                    </div>
                    <div class="af-grid cols-3">
                        <div class="af-field">
                            <label>Masih Hidup <span class="required">*</span></label>
                            <select required><option selected>Ya</option><option>Tidak</option></select>
                        </div>
                        <div class="af-field">
                            <label>Status Perkawinan <span class="required">*</span></label>
                            <select required><option selected>Kawin</option><option>Belum Kawin</option><option>Cerai</option><option>Meninggal</option></select>
                        </div>
                        <div class="af-field" style="margin-bottom:0;">
                            <label>Tanggal Menikah</label>
                            <input type="text" placeholder="Pilih Tanggal">
                        </div>
                    </div>
                </div>
                <div class="alamat-card">
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Tempat Lahir</label>
                            <input type="text" placeholder="Ketik Tempat">
                        </div>
                        <div class="af-field">
                            <label>Tanggal Lahir</label>
                            <input type="text" placeholder="Pilih Tanggal">
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Jenis Kelamin <span class="required">*</span></label>
                            <select required><option value="" selected>Pilih Jenis Kelamin</option><option>Pria</option><option>Wanita</option></select>
                        </div>
                        <div class="af-field">
                            <label>Agama</label>
                            <select><option value="" selected>Pilih Agama</option><option>Islam</option><option>Kristen</option><option>Katolik</option><option>Hindu</option><option>Buddha</option></select>
                        </div>
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>No HP</label>
                            <input type="text">
                        </div>
                        <div class="af-field">
                            <label>NIK</label>
                            <input type="text">
                        </div>
                    </div>
                    <div class="af-field" style="margin-bottom:0;">
                        <label>Foto</label>
                        <div style="border:1px solid #D1D5DB; border-top:1px solid #1B2F4B; min-height:110px; background:#fff;"></div>
                        <div class="file-edoc-box">
                            <span class="edoc-empty"><i class="bi bi-file-earmark-text"></i>(Tidak ada edoc)</span>
                            <button type="button" class="edoc-upload" title="Unggah"><i class="bi bi-folder2-open"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-simpan-green" onclick="simpanSaudara()"><i class="bi bi-save"></i> Simpan</button>
        </div><!-- /#saudara-form -->
    </div>

    <div id="tab-perubahan-nip" class="module-view d-none">
        <div id="perubahan-nip-list">
        <div class="daftar-panel">
            <div class="daftar-head">
                <div class="dh-left"><i class="bi bi-list"></i> RIWAYAT PERUBAHAN NIP</div>
            </div>
            <div class="daftar-note">
                <span></span>
                <div class="dn-actions">
                    <button type="button" class="daftar-btn primary" title="Tambah" onclick="showPerubahanNipForm()"><i class="bi bi-plus"></i></button>
                    <button type="button" class="daftar-btn" title="Refresh"><i class="bi bi-arrow-repeat"></i></button>
                    <button type="button" class="daftar-btn" title="Export"><i class="bi bi-download"></i></button>
                </div>
            </div>
            <div class="daftar-table-wrap">
                <table class="daftar-table">
                    <thead>
                        <tr>
                            <th style="width:48px;">NO</th>
                            <th>JENIS NIP</th>
                            <th>NIP LAMA</th>
                            <th>NIP BARU</th>
                            <th>NO SK</th>
                            <th>TANGGAL SK</th>
                            <th>TMT NIP BARU <i class="bi bi-arrow-down" style="font-size:0.7rem; margin-left:4px;"></i></th>
                            <th>STATUS VALIDASI</th>
                            <th>AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="9">Tidak ada data yang ditemukan.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="daftar-empty"></div>
        </div>
        </div><!-- /#perubahan-nip-list -->

        <div id="perubahan-nip-form" class="d-none">
            <div class="alamat-form-cols">
                <div class="alamat-card">
                    <div class="af-field">
                        <label>NIP Baru <span class="required">*</span></label>
                        <input type="text" placeholder="Ketik NIP" maxlength="18">
                    </div>
                    <div class="af-grid cols-2">
                        <div class="af-field">
                            <label>Tanggal SK</label>
                            <div class="af-dategroup">
                                <input type="text" placeholder="DD/MM/YYYY">
                                <button type="button" class="dg-x" title="Hapus"><i class="bi bi-x"></i></button>
                                <div class="dg-sep"></div>
                                <button type="button" class="dg-cal" title="Pilih Tanggal"><i class="bi bi-calendar3"></i></button>
                            </div>
                        </div>
                        <div class="af-field">
                            <label>Jenis NIP <span class="required">*</span></label>
                            <select class="nip-select" required id="form-jenis-nip">
                                <option value="">Pilih Jenis NIP</option>
                                <option>NIP Baru</option>
                                <option>NIP Lama</option>
                            </select>
                        </div>
                    </div>
                    <div class="af-field" style="margin-bottom:0;">
                        <label>Alasan Perubahan</label>
                        <textarea rows="3" placeholder="Ketikkan keterangan"></textarea>
                    </div>
                </div>
                <div class="alamat-card">
                    <div class="af-field">
                        <label>No SK</label>
                        <input type="text" placeholder="Nomor Surat Keputusan">
                    </div>
                    <div class="af-field">
                        <label>TMT NIP Baru</label>
                        <div class="af-dategroup">
                            <input type="text" placeholder="DD/MM/YYYY">
                            <button type="button" class="dg-x" title="Hapus"><i class="bi bi-x"></i></button>
                            <div class="dg-sep"></div>
                            <button type="button" class="dg-cal" title="Pilih Tanggal"><i class="bi bi-calendar3"></i></button>
                        </div>
                    </div>
                    <div class="af-field">
                        <label>SK</label>
                        <div class="nip-sk-box"></div>
                        <div class="file-edoc-box mt-2">
                            <span class="edoc-empty"><i class="bi bi-file-earmark-text"></i>(Tidak ada edoc)</span>
                            <button type="button" class="edoc-upload" title="Unggah"><i class="bi bi-folder2-open"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-simpan-green" onclick="simpanPerubahanNIP()"><i class="bi bi-save"></i> Simpan</button>
        </div><!-- /#perubahan-nip-form -->
    </div>

    <!-- Collapsible forms -->
    <div class="collapse" id="collapse-biodata">
        <div class="form-card mb-4">
            <div class="form-card-header">
                <div>
                    <div class="fch-title"><i class="bi bi-person-lines-fill"></i> Tambah Biodata</div>
                    <div class="fch-sub">Lengkapi data pokok di bawah. Kolom bertanda * wajib diisi.</div>
                </div>
            </div>
            <div class="form-card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="field-underline"><label>Nama Lengkap <span class="required">*</span></label>
                            <input placeholder="Nama sesuai identitas"><div class="ferror">Nama lengkap tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>Tempat, Tanggal Lahir <span class="required">*</span></label>
                            <input placeholder="mis. Jakarta, 05/01/1985"><div class="ferror">Tempat dan tanggal lahir tidak boleh kosong.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-underline"><label>Agama <span class="required">*</span></label>
                            <select required>
                                <option value="">-- Pilih --</option>
                                <option>Islam</option><option>Kristen</option><option>Katolik</option>
                                <option>Hindu</option><option>Buddha</option>
                            </select><div class="ferror">Agama tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>Pendidikan Terakhir</label>
                            <select>
                                <option value="">-- Pilih --</option>
                                <option>S1</option><option>S2</option><option>S3</option><option>D4</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-footer">
                <button class="btn-cancel" data-bs-toggle="collapse" data-bs-target="#collapse-biodata">Batal</button>
                <button class="btn-teal" onclick="simpanUmum(this,'collapse-biodata')">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapse-alamat">
        <div class="form-card mb-4">
            <div class="form-card-header">
                <div>
                    <div class="fch-title"><i class="bi bi-house-heart"></i> Tambah Alamat</div>
                    <div class="fch-sub">Lengkapi data alamat di bawah. Kolom bertanda * wajib diisi.</div>
                </div>
            </div>
            <div class="form-card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="field-underline"><label>Jenis Alamat <span class="required">*</span></label>
                            <select required>
                                <option value="">-- Pilih --</option>
                                <option>KTP / Domisili</option><option>Tempat Tinggal</option><option>Tempat Kerja</option>
                            </select><div class="ferror">Jenis alamat tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>Kode Pos</label>
                            <input placeholder="5 digit"><div class="ferror">Kode pos minimal 5 digit.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-underline"><label>Alamat Lengkap <span class="required">*</span></label>
                            <input placeholder="Jalan, nomor, RT/RW"><div class="ferror">Alamat lengkap tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>Telepon</label>
                            <input placeholder="08xxxxxxxxxx">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-footer">
                <button class="btn-cancel" data-bs-toggle="collapse" data-bs-target="#collapse-alamat">Batal</button>
                <button class="btn-teal" onclick="simpanUmum(this,'collapse-alamat')">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapse-saudara">
        <div class="form-card mb-4">
            <div class="form-card-header">
                <div>
                    <div class="fch-title"><i class="bi bi-person-plus"></i> Tambah Daftar Saudara</div>
                    <div class="fch-sub">Hubungan darah/sekandung yang akan dilaporkan.</div>
                </div>
            </div>
            <div class="form-card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="field-underline"><label>Nama Lengkap <span class="required">*</span></label>
                            <input placeholder="Nama sesuai identitas"><div class="ferror">Nama lengkap tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>Hubungan <span class="required">*</span></label>
                            <select required>
                                <option value="">-- Pilih --</option>
                                <option>Istri/Suami</option><option>Anak</option><option>Orang Tua</option>
                                <option>Bersaudara</option><option>Mertua</option><option>Ipar</option>
                            </select><div class="ferror">Hubungan tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>Pekerjaan</label>
                            <select>
                                <option value="">-- Pilih --</option>
                                <option>PNS</option><option>Pegawai Swasta</option><option>Pengusaha</option>
                                <option>Pelajar</option><option>Pensiunan</option><option>Lainnya</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-underline"><label>NIK</label>
                            <input placeholder="16 digit NIK" maxlength="16"><div class="ferror">NIK harus 16 digit.</div>
                        </div>
                        <div class="field-underline"><label>Tempat, Tanggal Lahir</label>
                            <input placeholder="mis. Jakarta, 05/01/1985">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-footer">
                <button class="btn-cancel" data-bs-toggle="collapse" data-bs-target="#collapse-saudara">Batal</button>
                <button class="btn-teal" onclick="simpanUmum(this,'collapse-saudara')">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>

    <div class="collapse" id="collapse-riwayat-nip">
        <div class="form-card mb-4">
            <div class="form-card-header">
                <div>
                    <div class="fch-title"><i class="bi bi-clock-history"></i> Tambah Riwayat NIP</div>
                    <div class="fch-sub">Catat perubahan NIP beserta jenis dan tanggal mutasi.</div>
                </div>
            </div>
            <div class="form-card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="field-underline"><label>Jenis NIP <span class="required">*</span></label>
                            <select required id="nip-jenis">
                                <option value="">-- Pilih --</option>
                                <option>NIP Asli</option><option>NIP Baru</option><option>Perbaikan NIP</option>
                            </select>
                            <div class="ferror">Jenis NIP tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>NIP Baru</label>
                            <input placeholder="18 digit NIP" maxlength="18">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="field-underline"><label>Tanggal Efektif <span class="required">*</span></label>
                            <input type="date" required>
                            <div class="ferror">Tanggal efektif tidak boleh kosong.</div>
                        </div>
                        <div class="field-underline"><label>Keterangan</label>
                            <input placeholder="Opsional">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-footer">
                <button class="btn-cancel" data-bs-toggle="collapse" data-bs-target="#collapse-riwayat-nip">Batal</button>
                <button class="btn-teal" onclick="simpanRiwayatNIP(this)">
                    <i class="bi bi-save"></i> Simpan
                </button>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
function setCrumbDetail(label){
    var el = document.getElementById('crumb-detail');
    if(!el) return;
    el.innerHTML = label ? ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">'+label+'</span>' : '';
}

function openModuleView(target){
    var panel = document.querySelector(target);
    if(!panel) return;
    document.querySelectorAll('.module-view').forEach(function(p){ p.classList.add('d-none'); });
    panel.classList.remove('d-none');
    document.querySelectorAll('.section-module').forEach(function(p){ p.classList.add('d-none'); });
    var labels = {
        'tab-biodata': 'Detail Biodata',
        'tab-alamat': 'Daftar Alamat',
        'tab-kartu': 'Detail Kartu',
        'tab-pasangan': 'Pasangan',
        'tab-anak': 'Anak',
        'tab-orangtua': 'Orang Tua',
        'tab-saudara': 'Daftar Saudara',
        'tab-perubahan-nip': 'Riwayat Perubahan NIP',
        'tab-perubahan-nama': 'Detail Perubahan Nama',
        'tab-cpns': 'Detail CPNS',
        'tab-pns': 'Detail PNS',
        'tab-pangkat': 'Detail Pangkat',
        'tab-jabatan': 'Detail Jabatan',
        'tab-pmk': 'Detail PMK',
        'tab-kgb': 'Detail KGB'
    };
    var id = target.replace('#','');
    setCrumbDetail(labels[id] || '');
    if(id === 'tab-biodata'){ showBiodataPhotos(); }
    if(id === 'tab-alamat'){ showAlamatList(true); }
    if(id === 'tab-kartu'){ showKartuList(true); }
    if(id === 'tab-pasangan'){ showPasanganList(true); }
    if(id === 'tab-anak'){ showAnakList(true); }
    if(id === 'tab-orangtua'){ showOrtuList(true); }
    if(id === 'tab-saudara'){ showSaudaraList(true); }
    if(id === 'tab-perubahan-nip'){ showPerubahanNipList(true); }
    window.scrollTo({top: 0, behavior:'smooth'});
}

function showBiodataPhotos(){
    var photos = document.getElementById('biodata-photos');
    var detail = document.getElementById('biodata-detail');
    var toolbar = document.querySelector('#tab-biodata .mini-toolbar');
    if(photos) photos.classList.remove('d-none');
    if(detail) detail.classList.add('d-none');
    if(toolbar) toolbar.classList.remove('d-none');
    var btn = document.getElementById('btn-perbarui');
    if(btn) btn.classList.remove('active-perbarui');
}

function showBiodataDetail(){
    var photos = document.getElementById('biodata-photos');
    var detail = document.getElementById('biodata-detail');
    var toolbar = document.querySelector('#tab-biodata .mini-toolbar');
    if(photos) photos.classList.add('d-none');
    if(detail) detail.classList.remove('d-none');
    if(toolbar) toolbar.classList.add('d-none');
    var btn = document.getElementById('btn-perbarui');
    if(btn) btn.classList.add('active-perbarui');
}

function showAlamatForm(){
    var list = document.getElementById('alamat-list');
    var form = document.getElementById('alamat-form');
    if(list) list.classList.add('d-none');
    if(form) form.classList.remove('d-none');
    var el = document.getElementById('crumb-detail');
    if(el) el.innerHTML = ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg">Daftar Alamat</span> &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">Tambah Daftar Alamat</span>';
    window.scrollTo({top: 0, behavior:'smooth'});
}

function showAlamatList(silent){
    var list = document.getElementById('alamat-list');
    var form = document.getElementById('alamat-form');
    if(list) list.classList.remove('d-none');
    if(form) form.classList.add('d-none');
    if(!silent) setCrumbDetail('Daftar Alamat');
}

function simpanAlamat(){
    showAlamatList();
    showAlert('Daftar alamat berhasil disimpan.');
}

function showKartuForm(){
    var list = document.getElementById('kartu-list');
    var form = document.getElementById('kartu-form');
    if(list) list.classList.add('d-none');
    if(form) form.classList.remove('d-none');
    var el = document.getElementById('crumb-detail');
    if(el) el.innerHTML = ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg">Kartu</span> &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">Tambah Kartu</span>';
    window.scrollTo({top: 0, behavior:'smooth'});
}

function showKartuList(silent){
    var list = document.getElementById('kartu-list');
    var form = document.getElementById('kartu-form');
    if(list) list.classList.remove('d-none');
    if(form) form.classList.add('d-none');
    if(!silent) setCrumbDetail('Kartu');
}

function simpanKartu(){
    showKartuList();
    showAlert('Kartu berhasil disimpan.');
}

function showPasanganForm(){
    var list = document.getElementById('pasangan-list');
    var form = document.getElementById('pasangan-form');
    if(list) list.classList.add('d-none');
    if(form) form.classList.remove('d-none');
    var el = document.getElementById('crumb-detail');
    if(el) el.innerHTML = ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg">Pasangan</span> &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">Tambah Pasangan</span>';
    window.scrollTo({top: 0, behavior:'smooth'});
}

function showPasanganList(silent){
    var list = document.getElementById('pasangan-list');
    var form = document.getElementById('pasangan-form');
    if(list) list.classList.remove('d-none');
    if(form) form.classList.add('d-none');
    if(!silent) setCrumbDetail('Pasangan');
}

function simpanPasangan(){
    showPasanganList();
    showAlert('Pasangan berhasil disimpan.');
}

function showAnakForm(){
    var list = document.getElementById('anak-list');
    var form = document.getElementById('anak-form');
    if(list) list.classList.add('d-none');
    if(form) form.classList.remove('d-none');
    var el = document.getElementById('crumb-detail');
    if(el) el.innerHTML = ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg">Anak</span> &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">Tambah Anak</span>';
    window.scrollTo({top: 0, behavior:'smooth'});
}

function showAnakList(silent){
    var list = document.getElementById('anak-list');
    var form = document.getElementById('anak-form');
    if(list) list.classList.remove('d-none');
    if(form) form.classList.add('d-none');
    if(!silent) setCrumbDetail('Anak');
}

function simpanAnak(){
    showAnakList();
    showAlert('Anak berhasil disimpan.');
}

function showOrtuForm(){
    var list = document.getElementById('ortu-list');
    var form = document.getElementById('ortu-form');
    if(list) list.classList.add('d-none');
    if(form) form.classList.remove('d-none');
    var el = document.getElementById('crumb-detail');
    if(el) el.innerHTML = ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg">Orang Tua</span> &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">Tambah Orang Tua</span>';
    window.scrollTo({top: 0, behavior:'smooth'});
}

function showOrtuList(silent){
    var list = document.getElementById('ortu-list');
    var form = document.getElementById('ortu-form');
    if(list) list.classList.remove('d-none');
    if(form) form.classList.add('d-none');
    if(!silent) setCrumbDetail('Orang Tua');
}

function simpanOrtu(){
    showOrtuList();
    showAlert('Orang tua berhasil disimpan.');
}

function showSaudaraList(silent){
    var list = document.getElementById('saudara-list');
    var form = document.getElementById('saudara-form');
    if(list) list.classList.remove('d-none');
    if(form) form.classList.add('d-none');
    if(!silent) setCrumbDetail('Daftar Saudara');
}

function showSaudaraForm(){
    var list = document.getElementById('saudara-list');
    var form = document.getElementById('saudara-form');
    if(list) list.classList.add('d-none');
    if(form) form.classList.remove('d-none');
    var el = document.getElementById('crumb-detail');
    if(el) el.innerHTML = ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg">Daftar Saudara</span> &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">Tambah Daftar Saudara</span>';
    window.scrollTo({top: 0, behavior:'smooth'});
}

function simpanSaudara(){
    showSaudaraList();
    showAlert('Saudara berhasil disimpan.');
}

function showPerubahanNipList(silent){
    var list = document.getElementById('perubahan-nip-list');
    var form = document.getElementById('perubahan-nip-form');
    if(list) list.classList.remove('d-none');
    if(form) form.classList.add('d-none');
    if(!silent) setCrumbDetail('Riwayat Perubahan NIP');
}

function showPerubahanNipForm(){
    var list = document.getElementById('perubahan-nip-list');
    var form = document.getElementById('perubahan-nip-form');
    if(list) list.classList.add('d-none');
    if(form) form.classList.remove('d-none');
    var el = document.getElementById('crumb-detail');
    if(el) el.innerHTML = ' &nbsp;&gt;&gt;&nbsp; <span class="cg-seg">Riwayat Perubahan NIP</span> &nbsp;&gt;&gt;&nbsp; <span class="cg-seg-strong">Tambah Riwayat Perubahan NIP</span>';
    window.scrollTo({top: 0, behavior:'smooth'});
}

function simpanPerubahanNIP(){
    var sel = document.getElementById('form-jenis-nip');
    var oldErr = document.getElementById('form-jenis-nip-error');
    if(oldErr) oldErr.remove();
    if(sel && sel.value === ''){
        sel.classList.add('invalid');
        var err = document.createElement('div');
        err.className = 'ferror-red';
        err.id = 'form-jenis-nip-error';
        err.textContent = 'Jenis NIP tidak boleh kosong.';
        sel.after(err);
        sel.focus();
        return;
    }
    if(sel) sel.classList.remove('invalid');
    showPerubahanNipList();
    showAlert('Riwayat Perubahan NIP berhasil disimpan.');
}

function initPerbarui(){
    var btn = document.getElementById('btn-perbarui');
    if(btn && !btn.dataset.bound){
        btn.dataset.bound = '1';
        btn.addEventListener('click', function(){ showBiodataDetail(); });
    }
}
initPerbarui();
document.addEventListener('DOMContentLoaded', initPerbarui);

function closeModuleView(e){
    e.preventDefault();
    document.querySelectorAll('.module-view').forEach(function(p){ p.classList.add('d-none'); });
    document.querySelectorAll('.section-module').forEach(function(p){ p.classList.remove('d-none'); });
    showBiodataPhotos();
    showAlamatList(true);
    showKartuList(true);
    showPasanganList(true);
    showAnakList(true);
    showOrtuList(true);
    showSaudaraList(true);
    showPerubahanNipList(true);
    setCrumbDetail('');
    window.scrollTo({top: 0, behavior:'smooth'});
}

var cgBack = document.getElementById('cg-back');
if(cgBack){
    cgBack.addEventListener('click', function(e){
        var nipForm = document.getElementById('perubahan-nip-form');
        var nipOpen = document.getElementById('tab-perubahan-nip');
        if(nipOpen && !nipOpen.classList.contains('d-none') && nipForm && !nipForm.classList.contains('d-none')){
            e.preventDefault();
            showPerubahanNipList();
            return;
        }
        var saudaraForm = document.getElementById('saudara-form');
        var saudaraOpen = document.getElementById('tab-saudara');
        if(saudaraOpen && !saudaraOpen.classList.contains('d-none') && saudaraForm && !saudaraForm.classList.contains('d-none')){
            e.preventDefault();
            showSaudaraList();
            return;
        }
        var ortuForm = document.getElementById('ortu-form');
        var ortuOpen = document.getElementById('tab-orangtua');
        if(ortuOpen && !ortuOpen.classList.contains('d-none') && ortuForm && !ortuForm.classList.contains('d-none')){
            e.preventDefault();
            showOrtuList();
            return;
        }
        var anakForm = document.getElementById('anak-form');
        var anakOpen = document.getElementById('tab-anak');
        if(anakOpen && !anakOpen.classList.contains('d-none') && anakForm && !anakForm.classList.contains('d-none')){
            e.preventDefault();
            showAnakList();
            return;
        }
        var pasanganForm = document.getElementById('pasangan-form');
        var pasanganOpen = document.getElementById('tab-pasangan');
        if(pasanganOpen && !pasanganOpen.classList.contains('d-none') && pasanganForm && !pasanganForm.classList.contains('d-none')){
            e.preventDefault();
            showPasanganList();
            return;
        }
        var kartuForm = document.getElementById('kartu-form');
        var kartuOpen = document.getElementById('tab-kartu');
        if(kartuOpen && !kartuOpen.classList.contains('d-none') && kartuForm && !kartuForm.classList.contains('d-none')){
            e.preventDefault();
            showKartuList();
            return;
        }
        var alamatForm = document.getElementById('alamat-form');
        var alamatOpen = document.getElementById('tab-alamat');
        if(alamatOpen && !alamatOpen.classList.contains('d-none') && alamatForm && !alamatForm.classList.contains('d-none')){
            e.preventDefault();
            showAlamatList();
            return;
        }
        var open = document.querySelector('.module-view:not(.d-none)');
        if(open){ closeModuleView(e); }
    });
}

// Show sub-view when a module-item is clicked (single-page toggle)
document.querySelectorAll('.module-item').forEach(function(item){
    item.addEventListener('click', function(e){
        var target = this.getAttribute('href');
        var panel = document.querySelector(target);
        if(panel){
            e.preventDefault();
            openModuleView(target);
        }
    });
});

// Deep-link support: open sub-view from URL hash (e.g. /dashboard#tab-biodata)
(function(){
    var hash = window.location.hash;
    if(hash){
        var panel = document.querySelector(hash);
        if(panel){
            document.querySelectorAll('.module-view').forEach(function(p){ p.classList.add('d-none'); });
            openModuleView(hash);
        }
    }
})();

function simpanUmum(btn, collapseId){
    var form = btn.closest('.form-card');
    var ok = true;
    form.querySelectorAll('[required]').forEach(function(el){
        var box = el.closest('.field-underline');
        if(!el.value){ box.classList.add('invalid'); ok = false; }
        else { box.classList.remove('invalid'); }
    });
    if(ok){
        document.getElementById(collapseId).classList.remove('show');
        showAlert('Data berhasil disimpan.');
    }
}

function simpanRiwayatNIP(btn){
    var form = btn.closest('.form-card');
    var jenis = document.getElementById('nip-jenis');
    var box = jenis.closest('.field-underline');
    var ok = jenis.value !== '';
    if(!ok){
        box.classList.add('invalid');
        box.querySelector('.ferror').textContent = 'Jenis NIP tidak boleh kosong.';
        return;
    }
    box.classList.remove('invalid');
    form.querySelectorAll('[required]').forEach(function(el){
        if(!el.value){ el.closest('.field-underline').classList.add('invalid'); ok = false; }
    });
    if(ok){
        document.getElementById('collapse-riwayat-nip').classList.remove('show');
        showAlert('Riwayat NIP berhasil dicatat.');
    }
}

function showAlert(msg){
    var d = document.createElement('div');
    d.className = 'alert alert-success alert-dismissible py-2 px-3 mb-3';
    d.style.cssText = 'border-left:4px solid #1B2F4B;font-size:.85rem;';
    d.innerHTML = '<i class="bi bi-check-circle-fill me-2"></i>'+msg+
        '<button type="button" class="btn-close ms-2" data-bs-dismiss="alert"></button>';
    document.querySelector('.section-module').before(d);
    setTimeout(function(){ d.remove(); }, 4000);
}
</script>
@endpush
@endsection
