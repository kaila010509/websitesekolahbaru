<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TPFL - SMK Negeri 4 Kota Bogor</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    {{-- CSS WEBSITE --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- FONT AWESOME --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body class="jurusan-page">

    {{-- =========================
         NAVBAR
    ========================== --}}
    <nav class="jurusan-navbar">
        <div class="container">

            <div class="jurusan-navbar-brand">
                <img src="{{ asset('images/logo.svg') }}"
                    alt="Logo SMKN 4 Kota Bogor">

                <span>SMKN 4 Bogor</span>
            </div>

        </div>
    </nav>


    {{-- =========================
         HERO
    ========================== --}}
    <section class="jurusan-hero tpfl-hero">

        <div class="container">

            <div class="jurusan-hero-content">

                <small>Jurusan Sekolah</small>

                <h1>
                    Teknik Pemesinan Dan
                    <br>
                    Fabrikasi Logam (TPFL)
                </h1>

                <p>
                    Lebih Dekat Dengan Jurusan TPFL
                </p>

            </div>

        </div>

    </section>


    {{-- =========================
         TENTANG JURUSAN
    ========================== --}}
    <section class="jurusan-content">

        <div class="container">

            <h2>Tentang Jurusan</h2>

            <p>
                Teknik Pemesinan dan Fabrikasi Logam (TPFL) merupakan
                jurusan yang mempelajari proses pembuatan dan pengolahan
                berbagai komponen menggunakan mesin dan teknik fabrikasi.
                Siswa dibekali keterampilan dalam membaca gambar teknik,
                melakukan pengukuran, mengoperasikan mesin, serta mengolah
                berbagai jenis material.
                Pembelajaran dilakukan melalui teori dan praktik agar siswa
                mampu menggunakan peralatan dan mesin dengan tepat,
                memahami proses kerja, serta menghasilkan komponen yang
                sesuai dengan standar dan kebutuhan dunia industri.
            </p>


            {{-- =========================
                 KOMPETENSI
            ========================== --}}
            <div class="jurusan-skills">

                {{-- 1 --}}
                <div class="jurusan-skill-card">

                    <div class="skill-icon">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>

                    <h3>Gambar Teknik</h3>

                    <p>
                        Membaca dan membuat gambar teknik.
                    </p>

                </div>


                {{-- 2 --}}
                <div class="jurusan-skill-card">

                    <div class="skill-icon">
                        <i class="fa-solid fa-ruler-combined"></i>
                    </div>

                    <h3>Pengukuran</h3>

                    <p>
                        Mengukur komponen secara tepat.
                    </p>

                </div>


                {{-- 3 --}}
                <div class="jurusan-skill-card">

                    <div class="skill-icon">
                        <i class="fa-solid fa-gears"></i>
                    </div>

                    <h3>Mesin Bubut</h3>

                    <p>
                        Mengoperasikan mesin bubut.
                    </p>

                </div>


                {{-- 4 --}}
                <div class="jurusan-skill-card">

                    <div class="skill-icon">
                        <i class="fa-solid fa-fire-flame-simple"></i>
                    </div>

                    <h3>Pengelasan</h3>

                    <p>
                        Mempelajari teknik pengelasan.
                    </p>

                </div>

            </div>

        </div>

    </section>


    {{-- =========================
         FOOTER
    ========================== --}}
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

</body>

</html>