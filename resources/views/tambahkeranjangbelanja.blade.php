@extends('template')

@section('content')
    <h3>Tambah Pembelian</h3>

    <a href="/keranjangbelanja" class="btn btn-info"> Kembali</a>

    <br/>
    <br/>

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}
        <div class="row my-2">
            <div class="col-3">
                Kode Barang
            </div>
            <div class="col-8">
                <input type="number" name="KodeBarang" required="required" class="form-control" min="1" step="1" />
                <!-- 'min' untuk memastikan input angka lebih dari atau sama dengan 1 -->
                <!-- 'step' untuk memastikan hanya angka bulat yang bisa diinput -->
            </div>
        </div>

        <div class="row my-2">
            <div class="col-3">
                Jumlah Pembelian
            </div>
            <div class="col-8">
                <input type="number" name="Jumlah" required="required" class="form-control" min="1" step="1" />
                <!-- Sama seperti KodeBarang, memastikan input hanya angka bulat -->
            </div>
        </div>

        <div class="row my-2">
            <div class="col-3">
                Harga per Item
            </div>
            <div class="col-8">
                <input type="number" name="Harga" required="required" class="form-control" min="1" step="1" />
                <!-- Sama seperti yang lainnya, hanya angka bulat yang diterima -->
            </div>
        </div>

        <div class="row my-2">
            <div class="col-3">
                <input type="submit" value="Beli" class="btn btn-success">
            </div>
        </div>
    </form>
@endsection
