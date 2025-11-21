<x-layoutAdmin>
<h2 class="mb-4">Tambah Jabatan</h2>


<div class="card-custom">
<form action="{{ route('jabatan.store') }}" method="POST">
@csrf


<div class="mb-3">
<label>Nama Jabatan</label>
<input type="text" name="nama_jabatan" class="form-control" required>
</div>


<button class="btn btn-success">Simpan</button>
<a href="{{ route('jabatan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
</x-layoutAdmin>