<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Artikel - Admin SMKN 4 Kota Bogor</title>

    {{-- BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- CSS UTAMA ADMIN --}}
    <link rel="stylesheet"
        href="{{ asset('css/admin.css') }}">

    {{-- FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body>


<div class="admin-layout">


    {{-- =====================================================
         SIDEBAR ADMIN
    ====================================================== --}}

    <aside class="admin-sidebar">


        {{-- LOGO SEKOLAH --}}

        <div class="school-brand">

            <div class="school-logo-wrapper">
                <img src="{{ asset('images/logo sekolah.jpg') }}" alt="Logo SMKN 4" class="school-logo">
            </div>

            <h5>SMKN 4</h5>

            <small>KOTA BOGOR</small>

        </div>


        {{-- MENU ADMIN --}}

        <div class="admin-menu-title">
            MENU ADMIN
        </div>


        <ul class="admin-menu">


            {{-- DASHBOARD --}}

            <li>

                <a href="/dashboard">

                    <i class="fa-solid fa-house"></i>

                    <span>
                        Dashboard
                    </span>

                </a>

            </li>


            {{-- GALERI --}}

            <li>

                <a href="/dashboard/galeri">

                    <i class="fa-solid fa-image"></i>

                    <span>
                        Galeri
                    </span>

                </a>

            </li>


            {{-- ARTIKEL --}}

            <li>

                <a href="/dashboard/artikel"
                    class="active">

                    <i class="fa-solid fa-newspaper"></i>

                    <span>
                        Artikel
                    </span>

                </a>

            </li>


            {{-- KONTAK --}}

            <li>

                <a href="/dashboard/kontak">

                    <i class="fa-solid fa-envelope"></i>

                    <span>
                        Kontak
                    </span>

                </a>

            </li>


        </ul>


        {{-- LOGOUT --}}

        <div class="admin-logout">

            <a href="/login">

                <i class="fa-solid fa-right-from-bracket"></i>

                <span>
                    Logout
                </span>

            </a>

        </div>


    </aside>



    {{-- =====================================================
         MAIN CONTENT
    ====================================================== --}}

    <main class="admin-main">


        {{-- =================================================
             TOPBAR
        ================================================== --}}

        <div class="admin-topbar">


            <h4>
                Artikel
            </h4>


            <div class="admin-profile dropdown">

    <button
        class="btn p-0 border-0 bg-transparent dropdown-toggle"
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false">

        <i class="fa-solid fa-circle-user"></i>

        <span>
            Admin
        </span>

    </button>

    <ul class="dropdown-menu dropdown-menu-end">

        <li>
            <span class="dropdown-item-text">
                <strong>Admin</strong>
            </span>
        </li>

        <li>
            <hr class="dropdown-divider">
        </li>

        <li>
            <a class="dropdown-item" href="/logout">
                <i class="fa-solid fa-right-from-bracket me-2"></i>
                Logout
            </a>
        </li>

    </ul>

</div>

        </div>



        {{-- =================================================
             CONTENT
        ================================================== --}}

        <div class="article-page">


            {{-- JUDUL HALAMAN --}}

            <div class="page-heading">

                <h2>
                    Artikel
                </h2>

                <p>
                    Kelola artikel dan informasi terbaru
                    SMKN 4 Kota Bogor.
                </p>

            </div>



            {{-- =================================================
                 PESAN SUKSES
            ================================================== --}}

            @if(session('success'))

                <div class="alert-success">

                    <i class="fa-solid fa-circle-check"></i>

                    {{ session('success') }}

                </div>

            @endif



            {{-- =================================================
                 CARD ARTIKEL
            ================================================== --}}

            <div class="article-box">


                {{-- HEADER ARTIKEL --}}

                <div class="article-header">


                    <div>

                        <h5>

                            <i class="fa-solid fa-newspaper"></i>

                            Daftar Artikel

                        </h5>

                    </div>



                    {{-- SATU-SATUNYA TOMBOL TAMBAH ARTIKEL --}}

                    <a href="/dashboard/artikel/tambah"
                        class="btn-admin-primary">

                        <i class="fa-solid fa-plus"></i>

                        Tambah Artikel

                    </a>


                </div>



                {{-- =================================================
                     DAFTAR ARTIKEL
                ================================================== --}}

                @if($artikel->count() > 0)


                    <div class="article-list">


                        @foreach($artikel as $item)


                            <div class="article-item">


                                {{-- =================================================
                                     GAMBAR ARTIKEL
                                ================================================== --}}

                                <div class="article-image">


                                    @if($item->gambar)

                                        <img
                                            src="{{ asset('images/artikel/' . $item->gambar) }}"
                                            alt="{{ $item->judul }}">

                                    @else

                                        <div class="article-no-image">

                                            <i class="fa-regular fa-image"></i>

                                        </div>

                                    @endif


                                </div>



                                {{-- =================================================
                                     INFORMASI ARTIKEL
                                ================================================== --}}

                                <div class="article-info">


                                    <h4>

                                        {{ $item->judul }}

                                    </h4>


                                    <p>

                                        {{ Str::limit(strip_tags($item->isi), 150) }}

                                    </p>


                                    <small>

                                        <i class="fa-regular fa-calendar"></i>

                                        {{ $item->created_at
                                            ? $item->created_at->format('d M Y')
                                            : '-' }}

                                    </small>


                                </div>



                                {{-- =================================================
                                     TOMBOL AKSI
                                ================================================== --}}

                                <div class="article-actions">


                                    {{-- EDIT --}}

                                    <a
                                        href="/dashboard/artikel/{{ $item->id }}/edit"
                                        class="btn-edit"
                                        title="Edit">

                                        <i class="fa-solid fa-pen"></i>

                                    </a>



                                    {{-- HAPUS --}}

                                    <form
                                        action="/dashboard/artikel/{{ $item->id }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">

                                        @csrf

                                        @method('DELETE')


                                        <button
                                            type="submit"
                                            class="btn-delete"
                                            title="Hapus">

                                            <i class="fa-solid fa-trash"></i>

                                        </button>

                                    </form>


                                </div>


                            </div>


                        @endforeach


                    </div>


                @else


                    {{-- =================================================
                         BELUM ADA ARTIKEL
                         TOMBOL TAMBAH DI TENGAH SUDAH DIHAPUS
                    ================================================== --}}

                    <div class="empty-article">


                        <i class="fa-regular fa-newspaper empty-article-icon"></i>


                        <h3>
                            Belum ada artikel
                        </h3>


                        <p>
                            Silakan tambahkan artikel baru
                            untuk ditampilkan di website.
                        </p>


                    </div>


                @endif


            </div>


        </div>


    </main>


</div>



{{-- =====================================================
     BOOTSTRAP JS
====================================================== --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>