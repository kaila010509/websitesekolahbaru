<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Edit Foto - Admin SMKN 4 Kota Bogor</title>

    <link rel="stylesheet"
        href="{{ asset('css/admin.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>

<body>

<div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="admin-sidebar">

        <div class="school-brand">

            <div class="school-logo-wrapper">

                <img
                    src="{{ asset('images/logo sekolah.jpg') }}"
                    alt="Logo SMKN 4"
                    class="school-logo">

            </div>

            <h5>SMKN 4</h5>
            <small>KOTA BOGOR</small>

        </div>

        <div class="admin-menu-title">
            Menu Admin
        </div>

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

            <h4>
                Edit Foto
            </h4>

            <!-- ADMIN PROFILE -->
            <div class="admin-profile">

                <div class="admin-profile-button" onclick="toggleAdminMenu()">

                    <i class="fa-solid fa-circle-user"></i>

                    <strong>
                        Admin
                    </strong>

                    <i class="fa-solid fa-caret-down"></i>

                </div>

                <div class="admin-dropdown" id="adminDropdown">

                    <div class="admin-dropdown-title">
                        Admin
                    </div>

                    <a href="/login">

                        <i class="fa-solid fa-right-from-bracket"></i>

                        <span>
                            Logout
                        </span>

                    </a>

                </div>

            </div>

        </div>


        <!-- CONTENT -->
        <div class="gallery-page">

            <div class="page-heading">

                <h2>
                    Edit Foto
                </h2>

                <p>
                    Ubah informasi foto galeri SMKN 4 Kota Bogor.
                </p>

            </div>


            <!-- FORM -->
            <div class="gallery-card">

                <div class="gallery-card-header">

                    <h5>
                        <i class="fa-solid fa-pen"></i>
                        Edit Foto Galeri
                    </h5>

                </div>


                <form
                    action="/dashboard/galeri/{{ $galeri->id }}"
                    method="POST"
                    enctype="multipart/form-data"
                    class="p-4">

                    @csrf
                    @method('PUT')


                    <!-- JUDUL -->
                    <div class="mb-3">

                        <label class="form-label">
                            Judul Foto
                        </label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control"
                            value="{{ $galeri->judul }}"
                            required>

                    </div>


                    <!-- KATEGORI -->
                    <div class="mb-3">

                        <label class="form-label">
                            Kategori
                        </label>

                        <select
                            name="kategori"
                            class="form-select"
                            required>

                            <option value="Kegiatan"
                                {{ $galeri->kategori == 'Kegiatan' ? 'selected' : '' }}>
                                Kegiatan
                            </option>

                            <option value="Prestasi"
                                {{ $galeri->kategori == 'Prestasi' ? 'selected' : '' }}>
                                Prestasi
                            </option>

                            <option value="Ekstrakurikuler"
                                {{ $galeri->kategori == 'Ekstrakurikuler' ? 'selected' : '' }}>
                                Ekstrakurikuler
                            </option>

                            <option value="Fasilitas"
                                {{ $galeri->kategori == 'Fasilitas' ? 'selected' : '' }}>
                                Fasilitas
                            </option>

                            <!-- PRODUK -->
                            <option value="Produk"
                                {{ $galeri->kategori == 'Produk' ? 'selected' : '' }}>
                                Produk
                            </option>

                        </select>

                    </div>


                    <!-- FOTO SAAT INI -->
                    <div class="mb-3">

                        <label class="form-label">
                            Foto Saat Ini
                        </label>

                        <div>

                            <img
                                src="{{ asset('images/galeri/' . $galeri->gambar) }}"
                                alt="{{ $galeri->judul }}"
                                style="
                                    width: 180px;
                                    height: 120px;
                                    object-fit: cover;
                                    border-radius: 8px;
                                    border: 1px solid #ddd;
                                ">

                        </div>

                    </div>


                    <!-- GANTI FOTO -->
                    <div class="mb-3">

                        <label class="form-label">
                            Ganti Foto
                        </label>

                        <input
                            type="file"
                            name="gambar"
                            class="form-control"
                            accept=".jpg,.jpeg,.png,.webp">

                        <small class="text-muted">
                            Kosongkan jika tidak ingin mengganti foto.
                        </small>

                    </div>


                    <!-- KETERANGAN -->
                    <div class="mb-4">

                        <label class="form-label">
                            Deskripsi (Opsional)
                        </label>

                        <textarea
                            name="keterangan"
                            class="form-control"
                            rows="5">{{ $galeri->keterangan }}</textarea>

                    </div>


                    <!-- BUTTON -->
                    <div class="d-flex gap-2">

                        <button
                            type="submit"
                            class="btn btn-primary">

                            <i class="fa-solid fa-floppy-disk me-1"></i>
                            Simpan Perubahan

                        </button>

                        <a
                            href="/dashboard/galeri"
                            class="btn btn-secondary">

                            <i class="fa-solid fa-xmark me-1"></i>
                            Batal

                        </a>

                    </div>

                </form>

            </div>

        </div>

    </main>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
function toggleAdminMenu() {
    const dropdown = document.getElementById('adminDropdown');

    dropdown.classList.toggle('show');
}

document.addEventListener('click', function(event) {

    const profile = document.querySelector('.admin-profile');
    const dropdown = document.getElementById('adminDropdown');

    if (profile && !profile.contains(event.target)) {
        dropdown.classList.remove('show');
    }

});
</script>

</body>

</html>