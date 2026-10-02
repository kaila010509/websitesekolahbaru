<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SMKN 4 Kota Bogor</title>

    {{-- =====================================================
        BOOTSTRAP
    ====================================================== --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- =====================================================
        FONT POPPINS
    ====================================================== --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- =====================================================
        FONT AWESOME
    ====================================================== --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- =====================================================
        CSS WEBSITE
    ====================================================== --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>


    {{-- =====================================================
        NAVBAR
    ====================================================== --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-white website-navbar">

        <div class="container">

            {{-- LOGO + NAMA SEKOLAH --}}
            <a href="/beranda" class="navbar-brand website-brand">

                <img src="{{ asset('images/logo.svg') }}"
                    alt="Logo SMKN 4">

                <div>
                    <strong>SMKN 4 Bogor</strong>
                </div>

            </a>


            {{-- TOMBOL MOBILE --}}
            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

                <span class="navbar-toggler-icon"></span>

            </button>


            {{-- MENU --}}
            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a href="/beranda" class="nav-link active">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/profil" class="nav-link">
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/galeri" class="nav-link">
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/artikel" class="nav-link">
                            Artikel
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/kontak" class="nav-link">
                            Kontak
                        </a>
                    </li>

                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">

                        <a href="/login" class="login-button">
                            Login
                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>



    {{-- =====================================================
        HERO / FOTO LAPANGAN
    ====================================================== --}}
    <section class="hero" style="background-image: url('{{ asset('images/lapangan smkn 4.JPG') }}');">

        <div class="hero-overlay"></div>

        <div class="container hero-container">

            <div class="hero-content">

                <span class="hero-small">
                    Selamat Datang Di
                </span>

                <h1>
                    SMK Negeri 4 Kota Bogor
                </h1>

                <p>
                    Membangun Generasi Unggul, Berkarakter, dan Siap Menghadapi Dunia Kerja.
                </p>


                <div class="hero-buttons">

                    <a href="/profil" class="hero-btn-primary">
                        Lihat Profil Sekolah
                    </a>

                    <a href="/kontak" class="hero-btn-secondary">
                        Hubungi Kami
                    </a>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
        TENTANG SEKOLAH
    ====================================================== --}}
    <section class="about-section">

        <div class="container">

            {{-- JUDUL --}}
            <div class="about-title">

                <h2>
                    Tentang Sekolah
                </h2>

                <div class="title-line"></div>

            </div>


            <div class="row align-items-center">

                {{-- =================================================
                    TEKS TENTANG SEKOLAH
                ================================================== --}}
                <div class="col-lg-6">

                    <div class="about-text">

                        <p>
                            SMKN 4 Kota Bogor merupakan sekolah menengah
                            kejuruan yang berkomitmen mencetak generasi unggul, 
                            terampil, berkarakter, dan siapmenghadapi dunia kerja. 
                        </p>

                        <p>
                            Melalui pendidikan berbasis kompeteni siswa dibekali 
                            pengetahuan dan keterampilan sesuai dengan bidang 
                            keahlian serta kebutuhan dunia industri.
                        </p>

                    </div>

                </div>



                {{-- =================================================
                    3 KEUNGGULAN SEKOLAH
                    IKON DI ATAS TULISAN
                ================================================== --}}
                <div class="col-lg-6">

                    <div class="about-features">


                        {{-- ==============================
                            BERPRESTASI
                        =============================== --}}
                        <div class="about-feature">

                            <div class="about-icon">
                                <i class="fa-solid fa-trophy"></i>
                            </div>

                            <h5>
                                Berprestasi
                            </h5>

                            <p>
                                Mengembangkan potensi siswa.
                            </p>

                        </div>



                        {{-- ==============================
                            BERKARAKTER
                        =============================== --}}
                        <div class="about-feature">

                            <div class="about-icon">
                                <i class="fa-solid fa-shield-halved"></i>
                            </div>

                            <h5>
                                Berkarakter
                            </h5>

                            <p>
                                Menanamkan nilai disiplin & tanggung jawab.
                            </p>

                        </div>



                        {{-- ==============================
                            BERKOMPETEN
                        =============================== --}}
                        <div class="about-feature">

                            <div class="about-icon">
                                <i class="fa-solid fa-lightbulb"></i>
                            </div>

                            <h5>
                                Berkompeten
                            </h5>

                            <p>
                                Menyiapkan skill sesuai kebutuhan industri.
                            </p>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </section>



    {{-- =====================================================
    PROGRAM KEAHLIAN
===================================================== --}}
<section class="program-section">

    <div class="container">

        <div class="section-heading">

            <h2>
                Program Keahlian
            </h2>

        </div>


        <div class="row g-4">


            {{-- =================================================
                TPFL
            ================================================== --}}
            <div class="col-md-6 col-lg-3">

                <div class="program-card">

                    <div class="program-logo">

                        <img src="{{ asset('images/logo_tp.png') }}"
                            alt="TPFL">

                    </div>

                    <h5>
                        TPFL
                    </h5>

                    <p>
                        Teknik Pengelasan dan Fabrikasi Logam.
                    </p>

                    <a href="{{ url('/jurusan/tpfl') }}" class="program-detail">
                        Lihat Detailnya
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>



            {{-- =================================================
                TO
            ================================================== --}}
            <div class="col-md-6 col-lg-3">

                <div class="program-card">

                    <div class="program-logo">

                        <img src="{{ asset('images/logo_to.png') }}"
                            alt="TO">

                    </div>

                    <h5>
                        TO
                    </h5>

                    <p>
                        Teknik Otomotif.
                    </p>

                    <a href="{{ url('/jurusan/to') }}" class="program-detail">
                        Lihat Detailnya
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>



            {{-- =================================================
                PPLG
            ================================================== --}}
            <div class="col-md-6 col-lg-3">

                <div class="program-card">

                    <div class="program-logo">

                        <img src="{{ asset('images/logo_pplg.png') }}"
                            alt="PPLG">

                    </div>

                    <h5>
                        PPLG
                    </h5>

                    <p>
                        Pengembangan Perangkat Lunak dan Gim.
                    </p>

                    <a href="{{ url('/jurusan/pplg') }}" class="program-detail">
                        Lihat Detailnya
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>



            {{-- =================================================
                TJKT
            ================================================== --}}
            <div class="col-md-6 col-lg-3">

                <div class="program-card">

                    <div class="program-logo">

                        <img src="{{ asset('images/logo_tkj.png') }}"
                            alt="TJKT">

                    </div>

                    <h5>
                        TJKT
                    </h5>

                    <p>
                        Teknik Jaringan Komputer dan Telekomunikasi.
                    </p>

                    <a href="{{ url('/jurusan/tjkt') }}" class="program-detail">
                        Lihat Detailnya
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>

            </div>


        </div>

    </div>

</section>



    {{-- =====================================================
        GALERI SEKOLAH
    ====================================================== --}}
    <section class="gallery-home-section">

        <div class="container">

            <div class="gallery-heading">

                <h2>
                    Galeri Sekolah
                </h2>

                <a href="/galeri">

                    Lihat Semua

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="row g-3">


                {{-- FOTO 1 --}}
                <div class="col-md-4">

                    <div class="home-gallery-card">

                        <img src="{{ asset('images/galeri/galeri 1.jpg') }}"
                            alt="Kegiatan Sekolah">

                    </div>

                </div>



                {{-- FOTO 2 --}}
                <div class="col-md-4">

                    <div class="home-gallery-card">

                        <img src="{{ asset('images/galeri/galeri 2.jpg') }}"
                            alt="Kegiatan Sekolah">

                    </div>

                </div>



                {{-- FOTO 3 --}}
                <div class="col-md-4">

                    <div class="home-gallery-card">

                        <img src="{{ asset('images/galeri/galeri 3.jpg') }}"
                            alt="Kegiatan Sekolah">

                    </div>

                </div>


            </div>

        </div>

    </section>


{{-- =====================================================
    FOOTER
===================================================== --}}

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


    {{-- =====================================================
        BOOTSTRAP JS
    ====================================================== --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>