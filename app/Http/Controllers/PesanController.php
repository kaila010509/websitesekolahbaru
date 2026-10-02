<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function index()
    {
        $pesan = Pesan::latest()->get();

        return view('admin.kontak', compact('pesan'));
    }

    public function show($id)
    {
        $pesan = Pesan::findOrFail($id);

        return view('admin.kontak-detail', compact('pesan'));
    }

    public function destroy($id)
    {
        $pesan = Pesan::findOrFail($id);

        $pesan->delete();

        return redirect('/dashboard/kontak')
            ->with('success', 'Pesan berhasil dihapus.');
    }
}