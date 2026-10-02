<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Kontak - Admin SMKN 4 Kota Bogor</title>

    <link rel="stylesheet"
        href="{{ asset('css/admin.css') }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

    <!-- SIDEBAR -->

    <aside class="admin-sidebar">

        <div class="school-brand">

            <div class="school-logo-wrapper">

                <img
                    src="{{ asset('images/logo sekolah.jpg') }}"
                    alt="Logo SMKN 4"
                    class="school-logo">

            </div>

            <h5>SMKN 4</h5>

            <small>KOTA BOGOR</small>

        </div>

        <div class="admin-menu-title">
            Menu Admin
        </div>

        <ul class="admin-menu">

            <li>
                <a href="/dashboard">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/dashboard/galeri">
                    <i class="fa-solid fa-image"></i>
                    <span>Galeri</span>
                </a>
            </li>

            <li>
                <a href="/dashboard/artikel">
                    <i class="fa-solid fa-newspaper"></i>
                    <span>Artikel</span>
                </a>
            </li>

            <li>
                <a href="/dashboard/kontak" class="active">
                    <i class="fa-solid fa-envelope"></i>
                    <span>Kontak</span>
                </a>
            </li>

        </ul>

        <!-- LOGOUT -->

        <div class="admin-logout">

            <a href="/logout">

                <i class="fa-solid fa-right-from-bracket"></i>

                <span>
                    Logout
                </span>

            </a>

        </div>

    </aside>


    <!-- MAIN -->

    <main class="admin-main">

        <!-- TOPBAR -->

        <div class="admin-topbar">

            <h4>
                Kontak
            </h4>

            <div class="admin-profile">

                <i class="fa-solid fa-circle-user"></i>

                <strong>
                    Admin
                </strong>

            </div>

        </div>


        <!-- CONTENT -->

        <div class="gallery-page">

            <!-- JUDUL -->

            <div class="page-heading">

                <h2>
                    Pesan Masuk
                </h2>

                <p>
                    Kelola pesan yang dikirim melalui halaman kontak website.
                </p>

            </div>


            <!-- CARD -->

            <div class="gallery-card">

                <!-- HEADER -->

                <div
                    style="
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 25px;
                    ">

                    <h5
                        style="
                            margin: 0;
                            display: flex;
                            align-items: center;
                            font-weight: 600;
                        ">

                        <i
                            class="fa-solid fa-envelope"
                            style="
                                color: #2161e8;
                                margin-right: 10px;
                            ">
                        </i>

                        Pesan Masuk

                    </h5>


                    <span class="message-badge">

                        {{ $pesan->count() }} Pesan

                    </span>

                </div>


                <!-- DAFTAR PESAN -->

                @if($pesan->count() > 0)

                    <div class="table-responsive">

                        <table class="admin-table">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Nama</th>

                                    <th>Email</th>

                                    <th>Subjek</th>

                                    <th>Pesan</th>

                                    <th>Tanggal</th>

                                    <th>Aksi</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach($pesan as $item)

                                    <tr>

                                        <td>
                                            {{ $loop->iteration }}
                                        </td>

                                        <td>
                                            <strong>{{ $item->nama }}</strong>
                                        </td>

                                        <td>
                                            {{ $item->email }}
                                        </td>

                                        <td>
                                            {{ $item->subjek }}
                                        </td>

                                        <td>
                                            {{ $item->pesan }}
                                        </td>

                                        <td>
                                            {{ $item->created_at->format('d M Y, H:i') }}
                                        </td>

                                        <td>

                                            <form
                                                action="{{ url('/dashboard/kontak/' . $item->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus pesan ini?')">

                                                @csrf

                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="btn btn-danger btn-sm"
                                                    title="Hapus">

                                                    <i class="fa-solid fa-trash"></i>

                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                @else

                    <!-- EMPTY -->

                    <div class="empty-content">

                        <i class="fa-regular fa-envelope"></i>

                        <p>
                            Belum ada pesan masuk.
                        </p>

                    </div>

                @endif

            </div>

        </div>

    </main>

</div>

</body>

</html>