<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Beranda - SMKN 4 Kota Bogor</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- FONT --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- CSS WEBSITE --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    {{-- ================= NAVBAR ================= --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">

            <a class="navbar-brand d-flex align-items-center gap-2" href="/beranda">
                <img src="{{ asset('images/logo sekolah.jpg') }}"
                    alt="Logo SMKN 4"
                    class="navbar-logo">

                <div>
                    <strong>SMKN 4</strong>
                    <small>KOTA BOGOR</small>
                </div>
            </a>

            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a class="nav-link active" href="/beranda">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/profil">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/galeri">
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/artikel">
                            Artikel
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/kontak">
                            Kontak
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <a href="/login" class="btn btn-primary btn-login">
                            Login Admin
                        </a>
                    </li>

                </ul>

            </div>
        </div>
    </nav>


    {{-- ================= HERO ================= --}}
    <section class="hero-section">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <span class="hero-label">
                        SMK NEGERI 4 KOTA BOGOR
                    </span>

                    <h1>
                        Mewujudkan Generasi
                        <span>Terampil dan Berprestasi</span>
                    </h1>

                    <p>
                        SMK Negeri 4 Kota Bogor merupakan sekolah kejuruan
                        yang berkomitmen memberikan pendidikan berkualitas
                        serta membekali siswa dengan keterampilan untuk
                        menghadapi dunia kerja dan masa depan.
                    </p>

                    <div class="hero-buttons">

                        <a href="/profil" class="btn btn-primary btn-hero">
                            Tentang Sekolah
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="/galeri" class="btn btn-outline-primary btn-hero-outline">
                            Lihat Galeri
                        </a>

                    </div>

                </div>

                <div class="col-lg-5 mt-5 mt-lg-0">

                    <div class="hero-image-card">

                        <img src="{{ asset('images/logo sekolah.jpg') }}"
                            alt="SMKN 4 Kota Bogor">

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= SAMBUTAN ================= --}}
    <section class="welcome-section">

        <div class="container">

            <div class="section-title text-center">

                <span>SELAMAT DATANG</span>

                <h2>
                    Selamat Datang di
                    <strong>SMKN 4 Kota Bogor</strong>
                </h2>

                <p>
                    Mengenal lebih dekat sekolah dan berbagai kegiatan
                    yang ada di SMKN 4 Kota Bogor.
                </p>

            </div>


            <div class="row align-items-center mt-5">

                <div class="col-lg-5 mb-4 mb-lg-0">

                    <div class="welcome-image">

                        <img src="{{ asset('images/logo sekolah.jpg') }}"
                            alt="SMKN 4 Kota Bogor">

                    </div>

                </div>


                <div class="col-lg-7">

                    <div class="welcome-content">

                        <h3>
                            Pendidikan untuk Masa Depan
                        </h3>

                        <p>
                            SMKN 4 Kota Bogor terus mengembangkan
                            pendidikan yang sesuai dengan kebutuhan
                            perkembangan teknologi dan dunia industri.
                        </p>

                        <p>
                            Melalui berbagai program pembelajaran,
                            kegiatan sekolah, dan pengembangan keterampilan,
                            siswa diharapkan mampu menjadi generasi yang
                            kompeten, kreatif, disiplin, dan bertanggung jawab.
                        </p>

                        <a href="/profil" class="btn btn-primary">
                            Selengkapnya
                            <i class="fa-solid fa-arrow-right ms-1"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= FITUR ================= --}}
    <section class="feature-section">

        <div class="container">

            <div class="section-title text-center">

                <span>INFORMASI SEKOLAH</span>

                <h2>
                    Jelajahi SMKN 4 Kota Bogor
                </h2>

                <p>
                    Temukan berbagai informasi mengenai kegiatan dan
                    perkembangan sekolah.
                </p>

            </div>


            <div class="row g-4 mt-4">

                <div class="col-md-4">

                    <a href="/galeri" class="feature-link">

                        <div class="feature-card">

                            <div class="feature-icon blue">
                                <i class="fa-solid fa-image"></i>
                            </div>

                            <h4>Galeri</h4>

                            <p>
                                Lihat berbagai dokumentasi kegiatan
                                dan aktivitas siswa di sekolah.
                            </p>

                            <span>
                                Lihat Galeri
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>

                        </div>

                    </a>

                </div>


                <div class="col-md-4">

                    <a href="/artikel" class="feature-link">

                        <div class="feature-card">

                            <div class="feature-icon green">
                                <i class="fa-solid fa-newspaper"></i>
                            </div>

                            <h4>Artikel</h4>

                            <p>
                                Baca berita dan informasi terbaru
                                mengenai kegiatan sekolah.
                            </p>

                            <span>
                                Baca Artikel
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>

                        </div>

                    </a>

                </div>


                <div class="col-md-4">

                    <a href="/kontak" class="feature-link">

                        <div class="feature-card">

                            <div class="feature-icon orange">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <h4>Kontak</h4>

                            <p>
                                Hubungi SMKN 4 Kota Bogor untuk
                                mendapatkan informasi lebih lanjut.
                            </p>

                            <span>
                                Hubungi Kami
                                <i class="fa-solid fa-arrow-right"></i>
                            </span>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>


    {{-- ================= FOOTER ================= --}}
    <footer class="footer-section">

        <div class="container">

            <div class="row">

                <div class="col-lg-6 mb-4 mb-lg-0">

                    <div class="footer-brand">

                        <img src="{{ asset('images/logo sekolah.jpg') }}"
                            alt="Logo SMKN 4">

                        <div>
                            <h5>SMKN 4 Kota Bogor</h5>
                            <p>
                                Sekolah Menengah Kejuruan Negeri 4 Kota Bogor.
                            </p>
                        </div>

                    </div>

                </div>


                <div class="col-lg-6 text-lg-end">

                    <h6>Menu</h6>

                    <div class="footer-menu">

                        <a href="/beranda">Beranda</a>
                        <a href="/profil">Profil</a>
                        <a href="/galeri">Galeri</a>
                        <a href="/artikel">Artikel</a>
                        <a href="/kontak">Kontak</a>

                    </div>

                </div>

            </div>


            <hr>

            <p class="footer-bottom">
                © {{ date('Y') }} SMKN 4 Kota Bogor. All Rights Reserved.
            </p>

        </div>

    </footer>


    {{-- BOOTSTRAP JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>