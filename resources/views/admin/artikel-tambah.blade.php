<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Artikel - Admin SMKN 4 Kota Bogor</title>

    <link rel="stylesheet"
        href="{{ asset('css/admin.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>


<body>

<div class="admin-layout">


    {{-- =====================================================
         SIDEBAR
    ====================================================== --}}

    <aside class="admin-sidebar">


        {{-- LOGO SEKOLAH --}}

        <div class="school-brand">

            <div class="school-logo-wrapper">

                <img
                    src="{{ asset('images/logo sekolah.jpg') }}"
                    alt="Logo SMKN 4"
                    class="school-logo">

            </div>

            <h5>
                SMKN 4
            </h5>

            <small>
                KOTA BOGOR
            </small>

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


        {{-- TOPBAR --}}

        <div class="admin-topbar">

            <h4>
                Tambah Artikel
            </h4>


            <div class="admin-profile">

                <i class="fa-solid fa-circle-user"></i>

                <strong>
                    Admin
                </strong>

            </div>

        </div>



        {{-- =================================================
             CONTENT
        ================================================== --}}

        <div class="article-page">


            {{-- JUDUL HALAMAN --}}

            <div class="page-heading">

                <h2>
                    Tambah Artikel
                </h2>

                <p>
                    Tambahkan artikel dan informasi terbaru
                    SMKN 4 Kota Bogor.
                </p>

            </div>



            {{-- =================================================
                 FORM ARTIKEL
            ================================================== --}}

            <div class="article-box">


                {{-- HEADER FORM --}}

                <div class="article-header">

                    <div class="article-title">

                        <i class="fa-solid fa-newspaper"></i>

                        <span>
                            Form Tambah Artikel
                        </span>

                    </div>

                </div>



                {{-- FORM --}}

                <div class="article-form">


                    <form
                        action="/dashboard/artikel"
                        method="POST"
                        enctype="multipart/form-data">

                        @csrf



                        {{-- JUDUL --}}

                        <div class="form-group">

                            <label for="judul">
                                Judul Artikel
                            </label>


                            <input
                                type="text"
                                id="judul"
                                name="judul"
                                value="{{ old('judul') }}"
                                placeholder="Masukkan judul artikel"
                                required>


                            @error('judul')

                                <small class="form-error">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>



                        {{-- ISI --}}

                        <div class="form-group">

                            <label for="isi">
                                Isi Artikel
                            </label>


                            <textarea
                                id="isi"
                                name="isi"
                                rows="8"
                                placeholder="Masukkan isi artikel"
                                required>{{ old('isi') }}</textarea>


                            @error('isi')

                                <small class="form-error">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>



                        {{-- GAMBAR --}}

                        <div class="form-group">

                            <label for="gambar">
                                Gambar Artikel
                            </label>


                            <input
                                type="file"
                                id="gambar"
                                name="gambar"
                                accept="image/jpeg,image/png,image/webp">


                            <small class="form-help">
                                Format JPG, JPEG, PNG, WEBP. Maksimal 2 MB.
                            </small>


                            @error('gambar')

                                <small class="form-error">
                                    {{ $message }}
                                </small>

                            @enderror

                        </div>



                        {{-- TOMBOL --}}

                        <div class="article-form-actions">


                            {{-- SIMPAN --}}

                            <button
                                type="submit"
                                class="btn-tambah">

                                <i class="fa-solid fa-floppy-disk"></i>

                                Simpan Artikel

                            </button>



                            {{-- KEMBALI --}}

                            <a
                                href="/dashboard/artikel"
                                class="btn-kembali">

                                <i class="fa-solid fa-arrow-left"></i>

                                Kembali

                            </a>


                        </div>


                    </form>


                </div>


            </div>


        </div>


    </main>


</div>


</body>

</html>