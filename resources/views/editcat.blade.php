@extends('template')

@section('content')
<h3>Edit Data Cat</h3>

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

<form action="/cat/update" method="post">
    @csrf
    <input type="hidden" name="ID" value="{{ $cat->ID }}">

    <div class="mb-3">
        <label>Merk Cat</label>
        <input type="text" name="merkcat" class="form-control" value="{{ $cat->merkcat }}" required>
    </div>

    <div class="mb-3">
        <label>Harga Cat</label>
        <input type="number" name="hargacat" class="form-control" value="{{ $cat->hargacat }}" required>
    </div>

    <div class="mb-3">
        <label>Tersedia</label>
        <select name="tersedia" class="form-control" required>
            <option value="1" {{ $cat->tersedia ? 'selected' : '' }}>Ya</option>
            <option value="0" {{ !$cat->tersedia ? 'selected' : '' }}>Tidak</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Berat (kg)</label>
        <input type="number" step="0.01" name="berat" class="form-control" value="{{ $cat->berat }}" required>
    </div>

    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
</form>
@endsection
