<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Kontak - SMKN 4 Kota Bogor</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- Poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    {{-- CSS Website --}}
    <link rel="stylesheet"
        href="{{ asset('css/style.css') }}">
</head>

<body>

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
@endif


    {{-- =====================================================
        NAVBAR
    ====================================================== --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-white website-navbar">

        <div class="container">

            <a href="/beranda" class="navbar-brand website-brand">

                <img
                    src="{{ asset('images/logo.svg') }}"
                    alt="Logo SMKN 4">

                <strong>
                    SMKN 4 Bogor
                </strong>

            </a>


            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">

                <span class="navbar-toggler-icon"></span>

            </button>


            <div
                class="collapse navbar-collapse"
                id="navbarMenu">

                <ul class="navbar-nav ms-auto align-items-lg-center">


                    <li class="nav-item">

                        <a
                            href="/beranda"
                            class="nav-link">

                            Beranda

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            href="/profil"
                            class="nav-link">

                            Profil

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            href="/galeri"
                            class="nav-link">

                            Galeri

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            href="/artikel"
                            class="nav-link">

                            Artikel

                        </a>

                    </li>


                    <li class="nav-item">

                        <a
                            href="/kontak"
                            class="nav-link active">

                            Kontak

                        </a>

                    </li>


                    <li class="nav-item ms-lg-2 mt-2 mt-lg-0">

                        <a
                            href="/login"
                            class="login-button">

                            Login

                        </a>

                    </li>


                </ul>

            </div>

        </div>

    </nav>



    {{-- =====================================================
        HERO KONTAK
    ====================================================== --}}

    <section class="kontak-hero">

        <div class="kontak-hero-overlay"></div>

        <div class="container">

            <div class="kontak-hero-content">

                <div class="kontak-breadcrumb">
                    Home/Kontak
                </div>

                <h1>
                    Kontak Kami
                </h1>

                <p>
                    Hubungi kami untuk mendapatkan informasi lebih
                    lanjut mengenai SMK Negeri 4 Bogor.
                </p>

            </div>

        </div>

    </section>



    {{-- =====================================================
        KONTAK UTAMA
    ====================================================== --}}

    <section class="kontak-section">

        <div class="container">

            <div class="row g-5">


                {{-- =================================================
                    FORM KONTAK
                ================================================== --}}

                <div class="col-lg-7">

                    <form action="{{ url('/kontak') }}" method="POST">
    @csrf

    {{-- NAMA --}}
    <div class="kontak-form-group">
        <label for="nama">
            Nama Lengkap
        </label>

        <input
            type="text"
            id="nama"
            name="nama"
            class="form-control kontak-input"
            placeholder="Masukkan Nama Lengkap"
            value="{{ old('nama') }}"
            required>
    </div>

    {{-- EMAIL --}}
    <div class="kontak-form-group">
        <label for="email">
            Email
        </label>

        <input
            type="email"
            id="email"
            name="email"
            class="form-control kontak-input"
            placeholder="Masukkan Email"
            value="{{ old('email') }}"
            required>
    </div>

    {{-- SUBJEK --}}
    <div class="kontak-form-group">
        <label for="subjek">
            Subjek
        </label>

        <input
            type="text"
            id="subjek"
            name="subjek"
            class="form-control kontak-input"
            placeholder="Masukkan Subjek"
            value="{{ old('subjek') }}"
            required>
    </div>

    {{-- PESAN --}}
    <div class="kontak-form-group">
        <label for="pesan">
            Pesan
        </label>

        <textarea
            id="pesan"
            name="pesan"
            class="form-control kontak-textarea"
            placeholder="Tulis Pesan Anda Disini..."
            required>{{ old('pesan') }}</textarea>
    </div>

    {{-- BUTTON --}}
    <button
        type="submit"
        class="kontak-submit">

        Kirim Pesan

    </button>

</form>

                </div>



                {{-- =================================================
                    INFORMASI KONTAK
                ================================================== --}}

                <div class="col-lg-5">

                    <div class="kontak-info">

                        <h2>
                            Informasi Kontak
                        </h2>



                        {{-- ALAMAT --}}

                        <div class="kontak-info-item">

                            <div class="kontak-info-icon">

                                <i class="fa-solid fa-location-dot"></i>

                            </div>


                            <div>

                                <h6>
                                    Alamat
                                </h6>

                                <p>
                                    Jalan Raya Tajur, Kampung Buntar,
                                    RT 02 / RW 08, Kelurahan Muarasari,
                                    Kecamatan Bogor Selatan, Kota Bogor,
                                    Jawa Barat, kode pos 16137
                                </p>

                            </div>

                        </div>



                        {{-- TELEPON --}}

                        <div class="kontak-info-item">

                            <div class="kontak-info-icon">

                                <i class="fa-solid fa-phone"></i>

                            </div>


                            <div>

                                <h6>
                                    Telepon
                                </h6>

                                <p>
                                    +62 821 226 2442
                                </p>

                            </div>

                        </div>



                        {{-- EMAIL --}}

                        <div class="kontak-info-item">

                            <div class="kontak-info-icon">

                                <i class="fa-solid fa-envelope"></i>

                            </div>


                            <div>

                                <h6>
                                    Email
                                </h6>

                                <p>
                                    smkn4@smkn4bogor.sch.id
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            {{-- =================================================
                GOOGLE MAPS
            ================================================== --}}

            <div class="kontak-map">

                <iframe
                    src="https://www.google.com/maps?q=SMKN%204%20Kota%20Bogor&output=embed"
                    width="100%"
                    height="400"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>


        </div>

    </section>



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



    {{-- Bootstrap JS --}}

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>


</body>

</html>