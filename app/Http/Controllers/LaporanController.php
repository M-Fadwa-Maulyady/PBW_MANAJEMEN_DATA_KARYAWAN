<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function karyawan(Request $request)
    {
        $query = Karyawan::with('jabatan');

        if ($request->search) {
            $query->where('nama', 'like', "%{$request->search}%")
                ->orWhere('email', 'like', "%{$request->search}%");
        }

        $karyawans = $query->paginate(10);

        return view('laporan.karyawan', compact('karyawans'));
    }


    public function jabatan(Request $request)
    {
        $query = Jabatan::withCount('karyawans');

        if ($request->search) {
            $query->where('nama_jabatan', 'like', "%{$request->search}%")
                ->orWhere('kode_jabatan', 'like', "%{$request->search}%");
        }

        $jabatans = $query->paginate(10);

        return view('laporan.jabatan', compact('jabatans'));
    }

}
