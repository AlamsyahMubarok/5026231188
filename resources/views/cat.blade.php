@extends('template')
@section('content')

<h3>Data Cat</h3>

<a href="/cat/tambah" class="btn btn-primary mb-3">+ Tambah Cat Baru</a>

<p>Cari Data Cat:</p>
<form action="/cat/cari" method="GET" class="mb-3">
    <input type="text" class="form-control" name="cari" placeholder="Cari cat ..." value="{{ request('cari') }}">
    <input type="submit" class="btn btn-info mt-2" value="CARI">
</form>

<table class="table table-striped">
    <tr>
        <th>ID</th>
        <th>Merk Cat</th>
        <th>Harga</th>
        <th>Tersedia</th>
        <th>Berat (kg)</th>
        <th>Aksi</th>
    </tr>
    @foreach($cat as $p)
    <tr>
        <td>{{ $p->ID }}</td>
        <td>{{ $p->merkcat }}</td>
        <td>{{ $p->hargacat }}</td>
        <td>{{ $p->tersedia ? 'Ya' : 'Tidak' }}</td>
        <td>{{ $p->berat }}</td>
        <td>
            <a href="/cat/edit/{{ $p->ID }}" class="btn btn-success btn-sm">Edit</a>
            |
            <a href="/cat/hapus/{{ $p->ID }}" class="btn btn-danger btn-sm">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

{{ $cat->links() }}

@endsection
