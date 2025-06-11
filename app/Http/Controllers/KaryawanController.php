<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    // Menampilkan semua data karyawan
    public function index(Request $request)
    {
        // Ambil parameter 'cari' dari URL
        $cari = $request->cari;

        // Jika ada parameter pencarian
        if ($cari) {
            $karyawan = DB::table('karyawan')
                ->where('namalengkap', 'like', "%" . $cari . "%")
                ->orWhere('divisi', 'like', "%" . $cari . "%")
                ->orWhere('departemen', 'like', "%" . $cari . "%")
                ->paginate(10);  // Pagination dengan 10 data per halaman
        } else {
            // Ambil semua data karyawan jika tidak ada pencarian
            $karyawan = DB::table('karyawan')->paginate(10);  // Pagination dengan 10 data per halaman
        }

        return view('index3', compact('karyawan'));  // Kirim data ke view
    }

    // Menampilkan form tambah data karyawan
    public function create()
    {
        return view('tambahkaryawan');  // Menampilkan form tambah data karyawan
    }

    // Menyimpan data karyawan baru
    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|unique:karyawan',  // Pastikan kodepegawai unik
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);

        // Simpan data baru ke tabel karyawan
        DB::table('karyawan')->insert([
            'kodepegawai' => $request->kodepegawai,
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('karyawan.index');  // Redirect ke halaman index
    }

    // Menampilkan form edit data karyawan
    public function edit($kodepegawai)
    {
        // Ambil data karyawan berdasarkan kodepegawai
        $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();


    }

    // Mengupdate data karyawan
    public function update(Request $request, $kodepegawai)
    {
        $request->validate([
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ]);

        // Perbarui data karyawan berdasarkan kodepegawai
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->update([
            'namalengkap' => $request->namalengkap,
            'divisi' => $request->divisi,
            'departemen' => $request->departemen,
        ]);

        return redirect()->route('karyawan.index');  // Redirect ke halaman index
    }

    // Menghapus data karyawan
    public function destroy($kodepegawai)
    {
        // Hapus data karyawan berdasarkan kodepegawai
        DB::table('karyawan')->where('kodepegawai', $kodepegawai)->delete();

        return redirect()->route('karyawan.index');  // Redirect ke halaman index
    }
}
