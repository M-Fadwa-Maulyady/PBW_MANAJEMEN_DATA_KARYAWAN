<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    // TAMPILKAN SEMUA DATA
    public function index(Request $request)
    {
        $query = Karyawan::with('jabatan');

        if ($request->search) {
            $query->where(function ($q) use ($request) {
                $q->where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('email', 'like', '%' . $request->search . '%')
                ->orWhereHas('jabatan', function ($q2) use ($request) {
                    $q2->where('nama_jabatan', 'like', '%' . $request->search . '%');
                });
            });
        }

        $karyawans = $query->paginate(10)->withQueryString();

        return view('karyawan.index', compact('karyawans'));
    }


    // FORM TAMBAH
    public function create()
    {
        $jabatans = Jabatan::all();
        return view('karyawan.create', compact('jabatans'));
    }


    // SIMPAN DATA BARU
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:karyawans',
            'jabatan_id' => 'required|exists:jabatans,id',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        Karyawan::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan_id' => $request->jabatan_id,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('karyawan.index')
            ->with('success', 'Data karyawan berhasil ditambahkan.');
    }


    // FORM EDIT
    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $jabatans = Jabatan::all();

        return view('karyawan.edit', compact('karyawan', 'jabatans'));
    }


    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $request->validate([
            'nama' => 'required',
            'email' => 'required|email|unique:karyawans,email,' . $id,
            'jabatan_id' => 'required|exists:jabatans,id',
            'alamat' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        $karyawan->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'jabatan_id' => $request->jabatan_id,
            'alamat' => $request->alamat,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

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
