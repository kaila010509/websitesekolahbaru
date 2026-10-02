<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Artikel & Berita - SMK Negeri 4 Kota Bogor</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    >

    <!-- Google Font -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <!-- CSS Website -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <nav class="navbar navbar-expand-lg website-navbar">
        <div class="container">

            <a href="{{ url('/') }}" class="navbar-brand website-brand">
                <img
                    src="{{ asset('images/logo.svg') }}"
                    alt="Logo SMKN 4 Kota Bogor"
                >

                <strong>
                    SMK NEGERI 4 KOTA BOGOR
                </strong>
            </a>

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu"
                aria-controls="navbarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarMenu">

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/') }}"
                        >
                            Beranda
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/profil') }}"
                        >
                            Profil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/galeri') }}"
                        >
                            Galeri
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            href="{{ url('/artikel') }}"
                        >
                            Artikel
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ url('/kontak') }}"
                        >
                            Kontak
                        </a>
                    </li>

                    <li class="nav-item ms-lg-3">
                        <a
                            href="{{ url('/login') }}"
                            class="login-button"
                        >
                            Login
                        </a>
                    </li>

                </ul>

            </div>

        </div>
    </nav>


    <!-- =====================================================
         HERO ARTIKEL
    ====================================================== -->

    <section class="artikel-hero">

        <div class="artikel-hero-overlay"></div>

        <div class="container">

            <div class="artikel-hero-content">

                <h1>
                    ARTIKEL &amp; BERITA
                </h1>

                <p>
                    Informasi dan berita terbaru seputar SMK Negeri 4 Kota Bogor
                </p>

            </div>

        </div>

    </section>


    <!-- =====================================================
         DAFTAR ARTIKEL
    ====================================================== -->

    <section class="artikel-section">

        <div class="container">

            <div class="row g-4">

                @forelse($artikel as $item)

                    <div class="col-12 col-md-6">

                        <article class="artikel-card">

                            {{-- FOTO --}}
                            @if($item->gambar)
                                <img
                                    src="{{ asset('images/artikel/' . $item->gambar) }}"
                                    alt="{{ $item->judul }}"
                                >
                            @else
                                <div class="artikel-no-image">
                                    <i class="fa-regular fa-newspaper"></i>
                                </div>
                            @endif


                            {{-- ISI CARD --}}
                            <div class="artikel-card-content">

                                <h3>
                                    {{ $item->judul }}
                                </h3>

                                <div class="artikel-date">
                                    <i class="fa-regular fa-calendar"></i>

                                    {{ $item->created_at
                                        ? $item->created_at->format('d F Y')
                                        : '-'
                                    }}
                                </div>

                                <p>
                                    {{ Str::limit(strip_tags($item->isi), 180) }}
                                </p>

                                <a
                                    href="{{ url('/artikel/' . $item->id) }}"
                                    class="artikel-detail-link"
                                >
                                    Lihat Detail

                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>

                            </div>

                        </article>

                    </div>

                @empty

                    <div class="col-12">

                        <div class="artikel-empty">

                            <i class="fa-regular fa-newspaper"></i>

                            <p>
                                Belum ada artikel atau berita.
                            </p>

                        </div>

                    </div>

                @endforelse

            </div>

        </div>

    </section>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

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

    <!-- Bootstrap JS -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    </script>

</body>
</html>