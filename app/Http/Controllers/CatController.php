<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatController extends Controller
{
    public function index()
    {
        $cat = DB::table('cat')->paginate(10);
        return view('cat', ['cat' => $cat]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $cat = DB::table('cat')
            ->where('merkcat', 'like', "%" . $cari . "%")
            ->paginate();

        return view('cat', ['cat' => $cat]);
    }

    public function tambah()
    {
        return view('tambahcat');
    }

    public function store(Request $request)
    {
        $request->validate([
            'merkcat' => 'required|string|max:25',
            'hargacat' => 'required|integer|min:0',
            'tersedia' => 'required|in:0,1',
            'berat' => 'required|numeric|min:0'
        ]);

        DB::table('cat')->insert([
            'merkcat' => $request->merkcat,
            'hargacat' => $request->hargacat,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/cat');
    }

    public function edit($id)
    {
        $cat = DB::table('cat')->where('ID', $id)->first();
        if (!$cat) abort(404);

        return view('editcat', ['cat' => $cat]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'ID' => 'required|integer|exists:cat,ID',
            'merkcat' => 'required|string|max:25',
            'hargacat' => 'required|integer|min:0',
            'tersedia' => 'required|in:0,1',
            'berat' => 'required|numeric|min:0'
        ]);

        DB::table('cat')->where('ID', $request->ID)->update([
            'merkcat' => $request->merkcat,
            'hargacat' => $request->hargacat,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/cat');
    }

    public function hapus($id)
    {
        DB::table('cat')->where('ID', $id)->delete();
        return redirect('/cat');
    }
}
