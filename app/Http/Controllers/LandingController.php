<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $jabatans = Jabatan::all();

        $karyawans = Karyawan::with('jabatan')
            ->when($request->jabatan_id, function ($query) use ($request) {
                $query->where('jabatan_id', $request->jabatan_id);
            })
            ->select('id', 'nama', 'jabatan_id')
            ->latest()
            ->take(9)
            ->get();

        return view('landing', compact('karyawans', 'jabatans'));
    }
}
