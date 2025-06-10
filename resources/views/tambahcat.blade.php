@extends('template')
@section('content')

<h3>Tambah Data Cat</h3>

<a href="/cat" class="btn btn-info mb-3">Kembali</a>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $e)
                <li>{{ $e }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/cat/store" method="post">
    @csrf

    <div class="mb-3">
        <label for="merkcat">Merk Cat</label>
        <input type="text" name="merkcat" class="form-control" value="{{ old('merkcat') }}" required>
    </div>

    <div class="mb-3">
        <label for="hargacat">Harga Cat</label>
        <input type="number" name="hargacat" class="form-control" value="{{ old('hargacat') }}" required>
    </div>

    <div class="mb-3">
        <label for="tersedia">Tersedia</label>
        <select name="tersedia" class="form-control" required>
            <option value="">-- Pilih --</option>
            <option value="1" {{ old('tersedia') === "1" ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ old('tersedia') === "0" ? 'selected' : '' }}>Tidak</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="berat">Berat (kg)</label>
        <input type="number" step="0.01" name="berat" class="form-control" value="{{ old('berat') }}" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan Data</button>
</form>

@endsection
