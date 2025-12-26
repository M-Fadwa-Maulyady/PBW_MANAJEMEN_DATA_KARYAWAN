<x-layoutAdmin>
<h2 class="mb-4">Tambah Karyawan</h2>


<div class="card-custom">
<form action="{{ route('karyawan.store') }}" method="POST">
@csrf


<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" required>
</div>


<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>


<div class="mb-3">
    <label>Jabatan</label>
    <select name="jabatan_id" class="form-control" required>
        <option value="">-- Pilih Jabatan --</option>
        @foreach ($jabatans as $jabatan)
            <option value="{{ $jabatan->id }}">
                {{ $jabatan->kode_jabatan }} - {{ $jabatan->nama_jabatan }}
            </option>
        @endforeach
    </select>
</div>


<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control" required></textarea>
</div>


<div class="mb-3">
<label>Tanggal Lahir</label>
<input type="date" name="tanggal_lahir" class="form-control" required>
</div>


<button class="btn btn-success">Simpan</button>
<a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
</x-layoutAdmin>