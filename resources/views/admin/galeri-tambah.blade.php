<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Foto Galeri - Admin SMKN 4 Kota Bogor</title>

    <!-- Bootstrap 5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS Admin -->
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>

<div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="admin-sidebar">

        <div class="school-brand">
            <div class="school-logo-wrapper">
                <img src="{{ asset('images/logo sekolah.jpg') }}"
                     alt="Logo SMKN 4"
                     class="school-logo">
            </div>

            <h5>SMKN 4</h5>
            <small>KOTA BOGOR</small>
        </div>

        <div class="admin-menu-title">Menu Admin</div>

        <ul class="admin-menu">

            <li>
                <a href="/dashboard">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/dashboard/galeri" class="active">
                    <i class="fa-solid fa-image"></i>
                    <span>Galeri</span>
                </a>
            </li>

            <li>
                <a href="/dashboard/artikel">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Artikel</span>
                </a>
            </li>

            <li>
                <a href="/dashboard/kontak">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Kontak</span>
                </a>
            </li>

        </ul>

        <div class="admin-logout">
            <a href="/login">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </div>

    </aside>


    <!-- MAIN -->
    <main class="admin-main">

        <!-- TOPBAR -->
        <div class="admin-topbar">

            <h4>Tambah Foto Galeri</h4>

            <div class="admin-profile">
                <i class="fa-solid fa-circle-user"></i>
                <strong>Admin</strong>
            </div>

        </div>


        <!-- CONTENT -->
        <div class="gallery-page">

            <!-- HEADING -->
            <div class="page-heading">

                <div>
                    <h2>Tambah Foto Galeri</h2>
                    <p>Form untuk menambahkan foto kegiatan baru.</p>
                </div>

            </div>


            <!-- FORM CARD -->
            <div class="gallery-form-card">

                <form action="/dashboard/galeri"
                      method="POST"
                      enctype="multipart/form-data"
                      class="gallery-form">

                    @csrf


                    <!-- JUDUL -->
                    <div class="gallery-field">

                        <label for="judul">
                            Judul Foto
                        </label>

                        <input
                            type="text"
                            name="judul"
                            id="judul"
                            class="form-control"
                            value="{{ old('judul') }}"
                            placeholder="Masukkan Judul Foto"
                            required
                        >

                        @error('judul')
                            <span class="form-error">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>


                    <!-- KATEGORI -->
                    <div class="gallery-field">

                        <label for="kategori">
                            Kategori
                        </label>

                        <select
                            name="kategori"
                            id="kategori"
                            class="form-select"
                            required
                        >

                            <option value="">
                                Pilih kategori
                            </option>

                            <option value="Kegiatan"
                                {{ old('kategori') == 'Kegiatan' ? 'selected' : '' }}>
                                Kegiatan Sekolah
                            </option>

                            <option value="Prestasi"
                                {{ old('kategori') == 'Prestasi' ? 'selected' : '' }}>
                                Prestasi
                            </option>

                            <option value="Ekstrakurikuler"
                                {{ old('kategori') == 'Ekstrakurikuler' ? 'selected' : '' }}>
                                Ekstrakurikuler
                            </option>

                            <option value="Fasilitas"
                                {{ old('kategori') == 'Fasilitas' ? 'selected' : '' }}>
                                Fasilitas
                            </option>

                        </select>

                        @error('kategori')
                            <span class="form-error">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>


                    <!-- UPLOAD FOTO -->
                    <div class="gallery-field">

                        <label for="gambar">
                            Upload Foto
                        </label>

                        <div class="gallery-upload-box">

                            <i class="fa-solid fa-cloud-arrow-up"></i>

                            <strong>
                                Klik untuk upload foto
                            </strong>

                            <small>
                                Format JPG/JPEG/PNG/WEBP · Maks. 2MB
                            </small>

                            <input
                                type="file"
                                name="gambar"
                                id="gambar"
                                accept=".jpg,.jpeg,.png,.webp"
                                required
                            >

                        </div>

                        @error('gambar')
                            <span class="form-error">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>


                    <!-- DESKRIPSI -->
                    <div class="gallery-field">

                        <label for="keterangan">
                            Deskripsi (Opsional)
                        </label>

                        <textarea
                            name="keterangan"
                            id="keterangan"
                            class="form-control"
                            placeholder="Masukkan deskripsi foto (opsional)"
                        >{{ old('keterangan') }}</textarea>

                        @error('keterangan')
                            <span class="form-error">
                                {{ $message }}
                            </span>
                        @enderror

                    </div>


                    <!-- BUTTON -->
                    <div class="gallery-form-actions">

                        <button
                            type="submit"
                            class="btn btn-primary"
                        >
                            <i class="fa-solid fa-floppy-disk"></i>
                            Simpan
                        </button>

                        <button
                            type="reset"
                            class="btn btn-secondary"
                        >
                            <i class="fa-solid fa-rotate-left"></i>
                            Reset
                        </button>

                    </div>

                </form>

            </div>

        </div>


        <!-- FOOTER -->
        <div class="admin-footer">
            Copyright © 2025 - 2026 SMKN 4
        </div>

    </main>

</div>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>