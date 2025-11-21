<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    // TAMPILKAN SEMUA DATA
    public function index()
    {
        $jabatans = Jabatan::paginate(10);
        return view('jabatan.index', compact('jabatans'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('jabatan.create');
    }

    // SIMPAN DATA BARU
    public function store(Request $request)
{
    $request->validate([
        'nama_jabatan' => 'required',
    ]);

    // ambil jabatan terakhir
    $last = Jabatan::orderBy('id', 'desc')->first();

    // generate kode otomatis
    $nextNumber = $last ? $last->id + 1 : 1; 
    $kode = 'JBT-' . str_pad($nextNumber, 3, '0', STR_PAD_LEFT);

    Jabatan::create([
        'kode_jabatan' => $kode,
        'nama_jabatan' => $request->nama_jabatan,
    ]);

    return redirect()->route('jabatan.index')
        ->with('success', 'Data jabatan berhasil ditambahkan.');
}


    // FORM EDIT
    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('jabatan.edit', compact('jabatan'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::findOrFail($id);

        $request->validate([
            'nama_jabatan' => 'required',
        ]);

        $jabatan->update([
            'nama_jabatan' => $request->nama_jabatan,
        ]);

        return redirect()->route('jabatan.index')
            ->with('success', 'Data jabatan berhasil diperbarui.');
    }


    // HAPUS DATA
    public function destroy($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        $jabatan->delete();

        return redirect()->route('jabatan.index')
            ->with('success', 'Data jabatan berhasil dihapus.');
    }
}
