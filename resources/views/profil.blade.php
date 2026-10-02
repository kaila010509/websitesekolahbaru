<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil Sekolah - SMKN 4 Kota Bogor</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- FONT POPPINS --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- CSS WEBSITE --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    {{-- =====================================================
        NAVBAR
    ====================================================== --}}
    <nav class="navbar navbar-expand-lg bg-white website-navbar">

        <div class="container">

            <a href="/beranda" class="navbar-brand website-brand">

                <img src="{{ asset('images/logo.svg') }}"
                    alt="Logo SMKN 4">

                <strong>SMKN 4 Bogor</strong>

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
                        <a href="/beranda" class="nav-link">
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/profil" class="nav-link active">
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
        HERO PROFIL
    ====================================================== --}}
    <section class="profil-hero">

        <div class="profil-hero-overlay"></div>

        <div class="container profil-hero-content">

            <div class="profil-breadcrumb">
                Home/Profil
            </div>

            <h1>
                Profil Sekolah
            </h1>

            <p>
                Mengenal Lebih Dekat SMK Negeri 4 Kota Bogor
            </p>

        </div>

    </section>


    {{-- =====================================================
        KONTEN PROFIL
    ====================================================== --}}
    <main class="profil-content">

        <div class="container">


            {{-- =================================================
                SEJARAH SEKOLAH
            ================================================== --}}
            <section class="sejarah-section">

                <h2>
                    Sejarah Sekolah
                </h2>

                <div class="profil-title-line"></div>

                <p>
                    SMK Negeri 4 Kota Bogor merupakan salah satu sekolah
                    menengah kejuruan di Kota Bogor yang berkomitmen
                    mencetak lulusan yang unggul, berkarakter, dan siap
                    bersaing di dunia kerja.
                </p>

                <p>
                    Dengan berbagai program keahlian serta didukung tenaga
                    pendidik yang profesional, sekolah terus mengembangkan
                    kualitas pendidikan melalui pembelajaran, praktik
                    industri, dan kegiatan pengembangan karakter.
                </p>

            </section>


            {{-- =================================================
                VISI & MISI
            ================================================== --}}
            <section class="visi-misi-profil">

                <div class="row g-4">

                    {{-- VISI --}}
                    <div class="col-lg-5">

                        <div class="profil-info-card visi-card">

                            <h3>
                                <span class="profil-info-icon">
                                    <i class="fa-solid fa-eye"></i>
                                </span>

                                Visi
                            </h3>

                            <p>
                                Menjadi sekolah kejuruan yang unggul dalam
                                menghasilkan lulusan yang kompeten, berkarakter,
                                mandiri, dan mampu bersaing di dunia kerja.
                            </p>

                        </div>

                    </div>


                    {{-- MISI --}}
                    <div class="col-lg-7">

                        <div class="profil-info-card misi-card">

                            <h3>
                                <span class="profil-info-icon">
                                    <i class="fa-solid fa-bullseye"></i>
                                </span>

                                Misi
                            </h3>

                            <ul>

                                <li>
                                    Meningkatkan kompetensi peserta didik
                                    sesuai dengan kebutuhan dunia kerja.
                                </li>

                                <li>
                                    Membentuk peserta didik yang disiplin, 
                                    bertanggung jawab, dan berkarakter.
                                </li>

                                <li>
                                    Mengembangkan kreativitas dan kemampuan
                                    teknologi peserta didik.
                                </li>

                                <li>
                                    Meningkatkan kerja sama dengan dunia usaha
                                    dan dunia industri.
                                </li>

                            </ul>

                        </div>

                    </div>

                </div>

            </section>


            {{-- =================================================
                SAMBUTAN KEPALA SEKOLAH
            ================================================== --}}
            <section class="kepala-section">

                <div class="row g-4 align-items-stretch">

                    {{-- SAMBUTAN --}}
                    <div class="col-lg-8">

                        <div class="sambutan-card">

                            <h2>
                                Sambutan Kepala Sekolah
                            </h2>

                            <div class="sambutan-content">

                                <p>
                                    <i class="fa-solid fa-circle"></i>
                                    Selamat datang di website SMK Negeri 4
                                    Kota Bogor. Website ini menjadi media
                                    informasi resmi sekolah yang menyajikan
                                    berbagai informasi mengenai profil,
                                    program keahlian, kegiatan, prestasi,
                                    serta layanan sekolah.
                                </p>

                                <p>
                                    <i class="fa-solid fa-circle"></i>
                                    Semoga website ini dapat memberikan
                                    manfaat dan menjadi sarana komunikasi
                                    yang baik bagi seluruh masyarakat.
                                </p>

                                <p class="nama-kepala">
                                    Kepala Sekolah SMK Negeri 4 Kota Bogor
                                </p>

                            </div>

                        </div>

                    </div>


                    {{-- FOTO KEPALA SEKOLAH --}}
                    <div class="col-lg-4">

                        <div class="kepala-photo-card">

                            <img src="{{ asset('images/kepsek.png') }}"
                                alt="Kepala Sekolah">

                        </div>

                    </div>

                </div>

            </section>


        </div>

    </main>


    {{-- =====================================================
        FOOTER
    ====================================================== --}}

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


    {{-- BOOTSTRAP JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>