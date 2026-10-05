<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    // Menampilkan semua foto
    public function index()
    {
        $galeri = Galeri::latest()->get();

        return view('admin.galeri', compact('galeri'));
    }

    // Halaman tambah foto
    public function create()
    {
        return view('admin.galeri-tambah');
    }

    // Menyimpan foto baru
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',

            // Produk ditambahkan di sini
            'kategori' => 'required|in:Kegiatan,Prestasi,Ekstrakurikuler,Fasilitas,Produk',

            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'keterangan' => 'nullable|string',
        ]);

        $namaGambar = null;

        if ($request->hasFile('gambar')) {

            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('images/galeri'),
                $namaGambar
            );
        }

        Galeri::create([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $namaGambar,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/dashboard/galeri')
            ->with('success', 'Foto galeri berhasil ditambahkan.');
    }

    // Halaman edit
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);

        return view('admin.galeri-edit', compact('galeri'));
    }

    // Update foto
    public function update(Request $request, $id)
    {
        $galeri = Galeri::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',

            // Produk juga ditambahkan di sini
            'kategori' => 'required|in:Kegiatan,Prestasi,Ekstrakurikuler,Fasilitas,Produk',

            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'keterangan' => 'nullable|string',
        ]);

        $namaGambar = $galeri->gambar;

        // Jika mengganti foto
        if ($request->hasFile('gambar')) {

            if (
                $galeri->gambar &&
                file_exists(
                    public_path('images/galeri/' . $galeri->gambar)
                )
            ) {
                unlink(
                    public_path('images/galeri/' . $galeri->gambar)
                );
            }

            $gambar = $request->file('gambar');

            $namaGambar = time() . '_' . $gambar->getClientOriginalName();

            $gambar->move(
                public_path('images/galeri'),
                $namaGambar
            );
        }

        $galeri->update([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'gambar' => $namaGambar,
            'keterangan' => $request->keterangan,
        ]);

        return redirect('/dashboard/galeri')
            ->with('success', 'Foto galeri berhasil diperbarui.');
    }

    // Hapus foto
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);

        if (
            $galeri->gambar &&
            file_exists(
                public_path('images/galeri/' . $galeri->gambar)
            )
        ) {
            unlink(
                public_path('images/galeri/' . $galeri->gambar)
            );
        }

        $galeri->delete();

        return redirect('/dashboard/galeri')
            ->with('success', 'Foto galeri berhasil dihapus.');
    }
}