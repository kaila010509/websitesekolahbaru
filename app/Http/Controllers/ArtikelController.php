<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    // Menampilkan semua artikel
    public function index()
    {
        $artikel = Artikel::latest()->get();

        return view('admin.artikel', compact('artikel'));
    }


    // Menampilkan halaman tambah artikel
    public function create()
    {
        return view('admin.artikel-tambah');
    }


    // Menyimpan artikel baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        $namaGambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('images/artikel'),
                $namaGambar
            );
        }


        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $namaGambar,
        ]);


        return redirect('/dashboard/artikel')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }


    // Menampilkan halaman edit
    public function edit($id)
    {
        $artikel = Artikel::findOrFail($id);

        return view('admin.artikel-edit', compact('artikel'));
    }


    // Mengupdate artikel
    public function update(Request $request, $id)
    {
        $artikel = Artikel::findOrFail($id);


        $request->validate([
            'judul' => 'required|string|max:255',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        $namaGambar = $artikel->gambar;


        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $artikel->gambar &&
                file_exists(public_path('images/artikel/' . $artikel->gambar))
            ) {
                unlink(
                    public_path('images/artikel/' . $artikel->gambar)
                );
            }


            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('images/artikel'),
                $namaGambar
            );
        }


        $artikel->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $namaGambar,
        ]);


        return redirect('/dashboard/artikel')
            ->with('success', 'Artikel berhasil diperbarui.');
    }


    // Menghapus artikel
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);


        if (
            $artikel->gambar &&
            file_exists(public_path('images/artikel/' . $artikel->gambar))
        ) {
            unlink(
                public_path('images/artikel/' . $artikel->gambar)
            );
        }


        $artikel->delete();


        return redirect('/dashboard/artikel')
            ->with('success', 'Artikel berhasil dihapus.');
    }
}