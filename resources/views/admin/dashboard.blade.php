<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Admin - SMKN 4 Kota Bogor</title>

    {{-- BOOTSTRAP CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- CSS UTAMA ADMIN --}}
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">

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

                <img src="{{ asset('images/logo sekolah.jpg') }}"
                    alt="Logo SMKN 4"
                    class="school-logo">

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

                <a href="/dashboard" class="active">

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

                <a href="/dashboard/artikel">

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

            <a href="/logout">

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


        {{-- TOPBAR --}}

        <header class="admin-topbar">

            <h4>
                Dashboard
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

        </header>



        {{-- =================================================
             CONTENT DASHBOARD
        ================================================== --}}

        <section class="admin-content">


            {{-- JUDUL --}}

            <div class="page-heading">

                <h2>
                    Selamat Datang, Admin 👋
                </h2>

                <p>
                    Kelola website SMKN 4 Kota Bogor melalui dashboard admin.
                </p>

            </div>



            {{-- =================================================
                 STAT CARD
            ================================================== --}}

            <div class="row g-4 mb-4">


                {{-- GALERI --}}

                <div class="col-md-4">

                    <a href="/dashboard/galeri"
                        class="dashboard-link">

                        <div class="dashboard-card">

                            <div class="card-body">

                                <div class="d-flex align-items-center gap-3">


                                    <div class="dashboard-icon icon-blue">

                                        <i class="fa-solid fa-image"></i>

                                    </div>


                                    <div>

                                        <h6 class="mb-1">
                                            Galeri
                                        </h6>

                                        <h3 class="text-primary mb-1">
                                            {{ $jumlahGaleri }}
                                        </h3>

                                        <small class="text-secondary">
                                            Foto Galeri
                                        </small>

                                    </div>


                                </div>

                            </div>

                        </div>

                    </a>

                </div>



                {{-- ARTIKEL --}}

                <div class="col-md-4">

                    <a href="/dashboard/artikel"
                        class="dashboard-link">

                        <div class="dashboard-card">

                            <div class="card-body">

                                <div class="d-flex align-items-center gap-3">


                                    <div class="dashboard-icon icon-green">

                                        <i class="fa-solid fa-newspaper"></i>

                                    </div>


                                    <div>

                                        <h6 class="mb-1">
                                            Artikel
                                        </h6>

                                        <h3 class="text-success mb-1">
                                            {{ $jumlahArtikel }}
                                        </h3>

                                        <small class="text-secondary">
                                            Artikel
                                        </small>

                                    </div>


                                </div>

                            </div>

                        </div>

                    </a>

                </div>



                {{-- KONTAK --}}

                <div class="col-md-4">

                    <a href="/dashboard/kontak"
                        class="dashboard-link">

                        <div class="dashboard-card">

                            <div class="card-body">

                                <div class="d-flex align-items-center gap-3">


                                    <div class="dashboard-icon icon-orange">

                                        <i class="fa-solid fa-envelope"></i>

                                    </div>


                                    <div>

                                        <h6 class="mb-1">
                                            Pesan Masuk
                                        </h6>

                                        <h3 class="text-warning mb-1">
                                            {{ $jumlahPesan }}
                                        </h3>

                                        <small class="text-secondary">
                                            Pesan dari Pengunjung
                                        </small>

                                    </div>


                                </div>

                            </div>

                        </div>

                    </a>

                </div>


            </div>



            {{-- =================================================
                 PANEL BAWAH
            ================================================== --}}

            <div class="row g-4">


                {{-- ARTIKEL TERBARU --}}

                <div class="col-lg-7">

                    <div class="dashboard-panel">

                        <div class="dashboard-panel-title">

                            <i class="fa-solid fa-newspaper"></i>

                            <span>
                                Artikel Terbaru
                            </span>

                        </div>


                        <div class="p-3">

                            @forelse($artikel as $item)

                                <div class="dashboard-article-item">

                                    <div class="dashboard-article-image">

                                        @if($item->gambar)

                                            <img
                                                src="{{ asset('images/artikel/' . $item->gambar) }}"
                                                alt="{{ $item->judul }}">

                                        @endif

                                    </div>


                                    <div class="dashboard-article-info">

                                        <h5>
                                            {{ $item->judul }}
                                        </h5>

                                        <p class="dashboard-article-date">
                                            {{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}
                                        </p>

                                        <p class="dashboard-article-description">
                                            {{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 90) }}
                                        </p>

                                    </div>

                                </div>

                            @empty

                                <p class="text-muted mb-0">
                                    Belum ada artikel.
                                </p>

                            @endforelse


                            <div class="text-center mt-3">

                                <a href="/dashboard/artikel"
                                    class="btn btn-primary btn-sm">

                                    Kelola Artikel

                                </a>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- PESAN TERBARU --}}

                <div class="col-lg-5">

                    <div class="dashboard-panel">

                        <div class="dashboard-panel-title">

                            <i class="fa-solid fa-envelope"></i>

                            <span>
                                Pesan Terbaru
                            </span>

                        </div>


                        <div class="p-3">

                            @forelse($pesan as $item)

                                <div class="dashboard-message-item">

                                    <h5>
                                        {{ $item->subjek }}
                                    </h5>

                                    <p>
                                        {{ $item->nama }}
                                    </p>

                                    <small>
                                        {{ $item->created_at ? $item->created_at->format('d M Y, H:i') : '-' }}
                                    </small>

                                </div>

                            @empty

                                <p class="text-muted mb-0">
                                    Belum ada pesan masuk.
                                </p>

                            @endforelse


                            <div class="text-center mt-3">

                                <a href="/dashboard/kontak"
                                    class="btn btn-primary btn-sm">

                                    Lihat Pesan

                                </a>

                            </div>

                        </div>

                    </div>

                </div>


            </div>


        </section>


    </main>

</div>


<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>