<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Menampilkan semua data keranjangbelanja
    public function index()
    {
        // Mengambil data dari table keranjangbelanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        // $keranjangbelanja = DB::table('keranjangbelanja')->paginate(10);

        // Mengirim data keranjangbelanja ke view indexkeranjangbelanja
        return view('indexkeranjangbelanja',['keranjangbelanja' => $keranjangbelanja]);
    }

    // Menampilkan form untuk menambah data keranjangbelanja
    public function tambah()
    {
        // Memanggil view tambahkeranjangbelanja
        return view('tambahkeranjangbelanja');
    }

    // Menyimpan data ke table keranjangbelanja
    public function store(Request $request)
    {
        // Validasi input data
        $validated = $request->validate([
            'KodeBarang' => 'required|numeric',  // KodeBarang harus berupa angka
            'Jumlah' => 'required|integer',      // Jumlah harus berupa angka
            'Harga' => 'required|integer'        // Harga harus berupa angka
        ]);

        // Insert data ke table keranjangbelanja
        DB::table('keranjangbelanja')->insert([
            'KodeBarang' => $request->KodeBarang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga
        ]);

        // Alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }

    // Menghapus data keranjangbelanja berdasarkan ID
    public function hapus($ID)
    {
        // Menghapus data keranjangbelanja berdasarkan ID yang dipilih
        DB::table('keranjangbelanja')->where('ID', $ID)->delete();

        // Alihkan halaman ke halaman keranjangbelanja
        return redirect('/keranjangbelanja');
    }
}
