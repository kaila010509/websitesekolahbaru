<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\GaleriController;
use App\Models\Galeri;
use App\Models\Artikel;


// =====================================================
// LOGIN
// =====================================================

Route::get('/login', function () {

    if (session('admin_logged_in')) {
        return redirect('/dashboard');
    }

    return view('admin.login');

});

Route::post('/login', function (Request $request) {

    $nama = $request->nama;
    $password = $request->password;

    // DATA LOGIN ADMIN
    if ($nama === 'admin' && $password === 'admin123') {

        session([
            'admin_logged_in' => true,
            'admin_nama' => $nama
        ]);

        return redirect('/dashboard');
    }

    return back()->with('error', 'Nama atau kata sandi salah.');

});


// =====================================================
// LOGOUT
// =====================================================

Route::get('/logout', function () {

    session()->forget([
        'admin_logged_in',
        'admin_nama'
    ]);

    return redirect('/beranda');

});


// =====================================================
// DASHBOARD ADMIN
// =====================================================

Route::get('/dashboard', function () {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    // JUMLAH DATA
    $jumlahPesan = \App\Models\Pesan::count();
    $jumlahGaleri = \App\Models\Galeri::count();
    $jumlahArtikel = \App\Models\Artikel::count();

    // DATA TERBARU UNTUK DASHBOARD
    $galeri = \App\Models\Galeri::latest()->take(3)->get();
    $artikel = \App\Models\Artikel::latest()->take(3)->get();
    $pesan = \App\Models\Pesan::latest()->take(3)->get();

    return view('admin.dashboard', compact(
        'jumlahPesan',
        'jumlahGaleri',
        'jumlahArtikel',
        'galeri',
        'artikel',
        'pesan'
    ));

});


// =====================================================
// GALERI ADMIN
// =====================================================

Route::get('/dashboard/galeri', function () {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(GaleriController::class)->index();

});

Route::get('/dashboard/galeri/tambah', function () {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(GaleriController::class)->create();

});

Route::post('/dashboard/galeri', function (Request $request) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(GaleriController::class)->store($request);

});

Route::get('/dashboard/galeri/{id}/edit', function ($id) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(GaleriController::class)->edit($id);

});

Route::put('/dashboard/galeri/{id}', function (Request $request, $id) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(GaleriController::class)->update($request, $id);

});

Route::delete('/dashboard/galeri/{id}', function ($id) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(GaleriController::class)->destroy($id);

});


// =====================================================
// ARTIKEL ADMIN
// =====================================================

Route::get('/dashboard/artikel', function () {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(ArtikelController::class)->index();

});

Route::get('/dashboard/artikel/tambah', function () {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(ArtikelController::class)->create();

});

Route::post('/dashboard/artikel', function (Request $request) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(ArtikelController::class)->store($request);

});

Route::get('/dashboard/artikel/{id}/edit', function ($id) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(ArtikelController::class)->edit($id);

});

Route::put('/dashboard/artikel/{id}', function (Request $request, $id) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(ArtikelController::class)->update($request, $id);

});

Route::delete('/dashboard/artikel/{id}', function ($id) {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(ArtikelController::class)->destroy($id);

});


// =====================================================
// KONTAK ADMIN
// =====================================================

Route::get('/dashboard/kontak', function () {

    if (!session('admin_logged_in')) {
        return redirect('/login');
    }

    return app(\App\Http\Controllers\PesanController::class)->index();

});

Route::delete('/dashboard/kontak/{id}', function ($id) {
    if (!session('admin_logged_in')) return redirect('/login');

    return app(\App\Http\Controllers\PesanController::class)->destroy($id);
});


// =====================================================
// BERANDA
// =====================================================

Route::get('/beranda', function () {

    return view('beranda');

});


// =====================================================
// HALAMAN JURUSAN
// =====================================================

Route::get('/jurusan/pplg', function () {

    return view('jurusan.pplg');

});

Route::get('/jurusan/tjkt', function () {

    return view('jurusan.tjkt');

});

Route::get('/jurusan/tpfl', function () {

    return view('jurusan.tpfl');

});

Route::get('/jurusan/to', function () {

    return view('jurusan.to');

});


// =====================================================
// PROFIL
// =====================================================

Route::get('/profil', function () {

    return view('profil');

});


// =====================================================
// GALERI PUBLIC
// =====================================================

Route::get('/galeri', function () {

    $query = Galeri::latest();

    if (request('kategori')) {
        $query->where('kategori', request('kategori'));
    }

    $galeri = $query->get();

    return view('galeri', compact('galeri'));

});


// =====================================================
// KONTAK PUBLIC
// =====================================================

Route::get('/kontak', function () {

    return view('kontak');

});

Route::post('/kontak', function (Request $request) {

    $request->validate([
        'nama' => 'required',
        'email' => 'required|email',
        'subjek' => 'required',
        'pesan' => 'required',
    ]);

    \App\Models\Pesan::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'subjek' => $request->subjek,
        'pesan' => $request->pesan,
    ]);

    return back()->with('success', 'Pesan berhasil dikirim.');

});


// =====================================================
// ARTIKEL PUBLIC
// =====================================================

Route::get('/artikel', function () {

    $artikel = Artikel::latest()
        ->take(4)
        ->get();

    return view('artikel', compact('artikel'));

});


// =====================================================
// DETAIL ARTIKEL
// =====================================================

Route::get('/artikel/{id}', function ($id) {

    $item = Artikel::findOrFail($id);

    return view('artikel-detail', compact('item'));

});