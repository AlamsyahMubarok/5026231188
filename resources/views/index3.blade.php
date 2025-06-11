@extends('template')

@section('content')

<h3>Data Karyawan</h3>

<a href="{{ route('karyawan.create') }}" class="btn btn-primary mb-3">+ Tambah Data</a>

<p>Cari Data Karyawan:</p>
<form action="{{ route('karyawan.index') }}" method="GET" class="mb-3">
    <input type="text" class="form-control" name="cari" placeholder="Cari Karyawan..." value="{{ request('cari') }}">
    <input type="submit" class="btn btn-info mt-2" value="CARI">
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ strtoupper($k->divisi) }}</td>
            <td>{{ strtolower($k->departemen) }}</td> <!-- Menampilkan departemen dalam huruf kecil -->
            <td>
                <form action="{{ route('karyawan.destroy', $k->kodepegawai) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Menampilkan pagination -->
{{ $karyawan->links() }}  <!-- Pagination -->

@endsection
