<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Galeri - Admin SMKN 4 Kota Bogor</title>

    <link rel="stylesheet"
        href="{{ asset('css/admin.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"> 
</head> 
 
<body> 
 
<div class="admin-layout"> 
 
    <!-- SIDEBAR --> 
    <aside class="admin-sidebar"> 
 
        <!-- LOGO SEKOLAH --> 
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
 
 
        <!-- MENU ADMIN --> 
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
 
 
        <!-- LOGOUT --> 
        <div class="admin-logout"> 
 
            <a href="/login"> 
                <i class="fa-solid fa-right-from-bracket"></i> 
                <span>Logout</span> 
            </a> 
 
        </div> 
 
    </aside> 
 
 
    <!-- MAIN CONTENT --> 
    <main class="admin-main"> 
 
        <!-- TOPBAR --> 
        <div class="admin-topbar"> 
 
            <h4> 
                Galeri 
            </h4> 
 
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
 
            <!-- JUDUL HALAMAN --> 
            <div class="page-heading"> 
 
                <h2> 
                    Galeri 
                </h2> 
 
                <p> 
                    Kelola foto dan dokumentasi SMKN 4 Kota Bogor. 
                </p> 
 
            </div> 
 
 
            <!-- CARD GALERI --> 
            <div class="gallery-card"> 
 
                <!-- HEADER --> 
                <div class="gallery-card-header"> 
 
                    <h5> 
                        <i class="fa-solid fa-images"></i> 
                        Foto Galeri 
                    </h5> 
 
                    <a href="/dashboard/galeri/tambah" 
                       class="btn-admin-primary"> 
 
                        <i class="fa-solid fa-plus"></i> 
 
                        Tambah Foto 
 
                    </a> 
 
                </div> 
 
 
                <!-- DAFTAR FOTO --> 
                @if($galeri->count() > 0) 
 
                    <div class="admin-gallery-grid"> 
 
                        @foreach($galeri as $item) 
 
                            <div class="admin-gallery-item"> 
 
                                <!-- FOTO --> 
                                <div class="admin-gallery-image"> 
 
                                    <img 
                                        src="{{ asset('images/galeri/' . $item->gambar) }}" 
                                        alt="{{ $item->judul }}"> 
 
                                </div> 
 
 
                                <!-- INFORMASI --> 
                                <div class="admin-gallery-info"> 
 
                                    <h6> 
                                        {{ $item->judul }} 
                                    </h6> 
 
                                    <span class="gallery-category"> 
                                        {{ $item->kategori }} 
                                    </span> 
 
                                    @if($item->keterangan) 
                                        <p> 
                                            {{ $item->keterangan }} 
                                        </p> 
                                    @endif 
 
                                </div> 
 
 
                                <!-- AKSI --> 
                                <div class="admin-gallery-actions"> 
 
                                    <a 
                                        href="/dashboard/galeri/{{ $item->id }}/edit" 
                                        class="btn-edit"> 
 
                                        <i class="fa-solid fa-pen"></i> 
                                        Edit 
 
                                    </a> 
 
 
                                    <form 
                                        action="/dashboard/galeri/{{ $item->id }}" 
                                        method="POST" 
                                        onsubmit="return confirm('Yakin ingin menghapus foto ini?');"> 
 
                                        @csrf 
                                        @method('DELETE') 
 
                                        <button 
                                            type="submit" 
                                            class="btn-delete"> 
 
                                            <i class="fa-solid fa-trash"></i> 
                                            Hapus 
 
                                        </button> 
 
                                    </form> 
 
                                </div> 
 
                            </div> 
 
                        @endforeach 
 
                    </div> 
 
                @else 
 
                    <!-- KALAU BELUM ADA FOTO --> 
                    <div class="empty-content"> 
 
                        <i class="fa-regular fa-image"></i> 
 
                        <p> 
                            Belum ada foto galeri. 
                        </p> 
 
 
                    </div> 
 
                @endif 
 
            </div> 
 
        </div> 
 
    </main> 
 
</div> 

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