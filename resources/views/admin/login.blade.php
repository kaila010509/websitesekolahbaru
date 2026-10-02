<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - SMK Negeri 4 Kota Bogor</title>

    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body class="login-page">

    <div class="login-background"></div>

    <!-- Logo -->
    <img
        src="{{ asset('images/logo.svg') }}"
        alt="Logo SMKN 4"
        class="login-logo-top"
    >

    <div class="login-container">

        <!-- Bagian kiri -->
        <div class="login-welcome">
            <h1>Selamat Datang</h1>
            <p>Di SMK Negeri 4 Kota Bogor</p>
        </div>

        <!-- Card Login -->
        <div class="login-card">

            <form action="{{ url('/login') }}" method="POST">
                @csrf

                <div class="login-form-group">
                    <label for="nama">Nama</label>
                    <input
                        type="text"
                        id="nama"
                        name="nama"
                        placeholder="Masukkan Nama"
                        value="{{ old('nama') }}"
                        required
                    >
                </div>

                <div class="login-form-group">
                    <label for="password">Kata Sandi</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan Kata Sandi"
                        required
                    >
                </div>

                <div class="login-remember">
                    <label>
                        <input type="checkbox" name="remember">
                        <span>Ingatkan Saya</span>
                    </label>
                </div>

                @if(session('error'))
                    <div class="login-error">
                        {{ session('error') }}
                    </div>
                @endif

                <button type="submit" class="login-button">
                    Masuk
                </button>

                <a href="#" class="login-forgot">
                    Lupa Kata Sandi
                </a>

            </form>

        </div>

    </div>

</body>
</html>