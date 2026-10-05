<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Galeri - SMKN 4 Bogor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    {{-- ================= NAVBAR ================= --}}
    <nav class="navbar navbar-expand-lg website-navbar">

        <div class="container">

            <a href="{{ url('/beranda') }}" class="website-brand">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo SMKN 4 Bogor">
                <strong>SMKN 4 Bogor</strong>
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/beranda') }}">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/profil') }}">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('/galeri') }}">
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/artikel') }}">
                            Artikel
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kontak') }}">
                            Kontak
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a class="login-button" href="{{ url('/login') }}">
                            Login
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    {{-- ================= HERO ================= --}}
    <section class="galeri-hero">

        <div class="galeri-hero-overlay"></div>

        <div class="container">

            <div class="galeri-hero-content">

                <div class="galeri-breadcrumb">
                    Home/Galeri
                </div>

                <h1>
                    Galeri Kegiatan
                </h1>

                <p>
                    Dokumentasi kegiatan SMK Negeri 4 Kota Bogor
                </p>

            </div>

        </div>

    </section>


    {{-- ================= GALERI ================= --}}
    <section class="galeri-section">

        <div class="container">

            {{-- FILTER --}}
            <div class="galeri-filter">

                <a href="{{ url('/galeri') }}"
                    class="galeri-filter-btn {{ request('kategori') == null ? 'active' : '' }}">
                    Semua
                </a>

                <a href="{{ url('/galeri?kategori=Kegiatan') }}"
                    class="galeri-filter-btn {{ request('kategori') == 'Kegiatan' ? 'active' : '' }}">
                    Kegiatan Sekolah
                </a>

                <a href="{{ url('/galeri?kategori=Prestasi') }}"
                    class="galeri-filter-btn {{ request('kategori') == 'Prestasi' ? 'active' : '' }}">
                    Prestasi
                </a>

                <a href="{{ url('/galeri?kategori=Ekstrakurikuler') }}"
                    class="galeri-filter-btn {{ request('kategori') == 'Ekstrakurikuler' ? 'active' : '' }}">
                    Ekstrakurikuler
                </a>

                <a href="{{ url('/galeri?kategori=Fasilitas') }}"
                    class="galeri-filter-btn {{ request('kategori') == 'Fasilitas' ? 'active' : '' }}">
                    Fasilitas
                </a>

                {{-- PRODUK --}}
                <a href="{{ url('/galeri?kategori=Produk') }}"
                    class="galeri-filter-btn {{ request('kategori') == 'Produk' ? 'active' : '' }}">
                    Produk
                </a>

            </div>


            {{-- FOTO --}}
            <div class="row g-4">

                @forelse($galeri as $item)

                    <div class="col-12 col-md-4">

                        <div class="galeri-card">

                            <img
                                src="{{ asset('images/galeri/' . $item->gambar) }}"
                                alt="{{ $item->judul }}"
                            >

                            @if(request('kategori'))

                                <div class="galeri-info">

                                    <h5>
                                        {{ $item->judul }}
                                    </h5>

                                    @if($item->keterangan)

                                        <p>
                                            {{ $item->keterangan }}
                                        </p>

                                    @endif

                                </div>

                            @endif

                        </div>

                    </div>

                @empty

                    <div class="col-12">

                        <div class="text-center py-5">

                            <p class="text-muted mb-0">
                                Belum ada foto galeri.
                            </p>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>

    </section>


    {{-- ================= FOOTER ================= --}}
    <footer class="website-footer">

        <div class="container">

            <div class="row align-items-start">

                {{-- LOGO --}}
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

                    <div class="footer-brand">

                        <img src="{{ asset('images/logo.svg') }}"
                            alt="Logo SMKN 4">

                        <h5>
                            SMK Negeri 4
                            <br>
                            Kota Bogor
                        </h5>

                    </div>

                </div>


                {{-- ALAMAT --}}
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">

                    <h6>
                        Alamat
                    </h6>

                    <p>
                        <a href="https://www.google.com/maps/search/?api=1&query=SMKN+4+Kota+Bogor"
                           target="_blank"
                           rel="noopener noreferrer">

                            Jalan Raya Tajur, Kampung Buntar,
                            <br>
                            RT 02 / RW 08, Kelurahan Muarasari,
                            <br>
                            Kecamatan Bogor Selatan, Kota Bogor,
                            <br>
                            Jawa Barat, kode pos 16137

                        </a>
                    </p>

                </div>


                {{-- KONTAK --}}
                <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">

                    <h6>
                        Kontak
                    </h6>

                    <p>
                        <a href="tel:+628212262442">
                            +62 821 226 2442
                        </a>
                    </p>

                    <p>
                        <a href="mailto:smkn4@smkn4bogor.sch.id">
                            smkn4@smkn4bogor.sch.id
                        </a>
                    </p>

                </div>


                {{-- SOSIAL MEDIA --}}
                <div class="col-lg-2 col-md-6">

                    <h6>
                        Ikuti Kami
                    </h6>

                    <div class="social-icons">

                        <a href="https://www.instagram.com/smkn4kotabogor?stkn=MWIwY29oc3NyZHY3dg=="
                           target="_blank"
                           rel="noopener noreferrer">

                            <i class="fa-brands fa-instagram"></i>

                        </a>

                        <a href="https://youtube.com/@smknegeri4bogor905?si=C0qatYui4hdp2GdY"
                           target="_blank"
                           rel="noopener noreferrer">

                            <i class="fa-brands fa-youtube"></i>

                        </a>

                        <a href="https://www.tiktok.com/@smkn4kotabogor?_r=1&_t=ZS-99pkHq8soJM"
                           target="_blank"
                           rel="noopener noreferrer">

                            <i class="fa-brands fa-tiktok"></i>

                        </a>

                    </div>

                </div>

            </div>


            {{-- COPYRIGHT --}}
            <div class="footer-bottom">

                Copyright © {{ date('Y') }} - SMKN 4 Kota Bogor

            </div>

        </div>

    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>