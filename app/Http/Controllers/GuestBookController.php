<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestBook;

class GuestBookController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pesan' => 'required'
        ]);

        GuestBook::create([
            'nama' => $request->nama,
            'pesan' => $request->pesan
        ]);

        return back()->with('success', 'Terima kasih atas masukannya 🙏');
    }

    public function index()
    {
        $guestbooks = \App\Models\GuestBook::latest()->paginate(10);
        return view('guestbook.index', compact('guestbooks'));
    }

    public function destroy($id)
    {
        \App\Models\GuestBook::findOrFail($id)->delete();
        return back()->with('success', 'Pesan berhasil dihapus.');
    }

}
