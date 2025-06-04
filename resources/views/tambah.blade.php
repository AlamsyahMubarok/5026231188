@extends('template')
@section('content')

	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
<div class="row">
        <div class="col-3">
            Nama
        </div>
            <div class="col-8">
                <input type="text" name="nama" class="form-control" required>
            </div>
    </div>
<div class="row">
        <div class="col-3">
            Jabatan
        </div>
            <div class="col-8">
                <input type="text" name="jabatan" class="form-control" required>
            </div>
    </div>
	<div class="row">
        <div class="col-3">
            Umur
        </div>
            <div class="col-8">
                <input type="text" name="umur" class="form-control" required>
            </div>
    </div>
	<div class="row">
        <div class="col-3">
            Alamat
        </div>
            <div class="col-8">
                <input type="text" name="alamat" class="form-control" required>
            </div>
    </div>
    <input type="submit" value="Simpan Data" class="btn btn-success">
	</form>


@endsection
