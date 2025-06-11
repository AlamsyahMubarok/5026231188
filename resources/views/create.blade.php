<!-- resources/views/karyawan/create.blade.php -->
<form action="{{ route('karyawan.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="kodepegawai" class="form-label">Kode Pegawai</label>
        <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" required>
    </div>
    <div class="mb-3">
        <label for="namalengkap" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control" id="namalengkap" name="namalengkap" required>
    </div>
    <div class="mb-3">
        <label for="divisi" class="form-label">Divisi</label>
        <input type="text" class="form-control" id="divisi" name="divisi" required>
    </div>
    <div class="mb-3">
        <label for="departemen" class="form-label">Departemen</label>
        <input type="text" class="form-control" id="departemen" name="departemen" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>
