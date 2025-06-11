@extends('template')

@section('content')

<h3>Tambah Data Karyawan</h3>

<a href="{{ route('karyawan.index') }}" class="btn btn-info mb-3">Kembali</a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('karyawan.store') }}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-group row">
        <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="kodepegawai" value="{{ old('kodepegawai') }}" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="namalengkap" value="{{ old('namalengkap') }}" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="divisi" value="{{ old('divisi') }}" required>
        </div>
    </div>

    <div class="form-group row">
        <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="departemen" value="{{ old('departemen') }}" required>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-success">Simpan Data</button>
        </div>
    </div>
</form>

@endsection
