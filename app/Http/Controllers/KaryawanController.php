<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // TAMPILKAN SEMUA DATA
    public function index()
    {
        $karyawans = Karyawan::paginate(10);
        return view('karyawan.index', compact('karyawans'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('karyawan.create');
    }

    // SIMPAN DATA BARU
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:karyawans',
            'jabatan' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        Karyawan::create($request->all());

        return redirect()->route('karyawan.index')
            ->with('success', 'Data karyawan berhasil ditambahkan.');
    }

    // FORM EDIT
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('karyawan.edit', compact('karyawan'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:karyawans,email,'.$id,
            'jabatan' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')
            ->with('success', 'Data karyawan berhasil diperbarui.');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')
            ->with('success', 'Data karyawan berhasil dihapus.');
    }
}
