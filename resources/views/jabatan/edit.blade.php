<x-layoutAdmin>
<h2 class="mb-4">Edit Jabatan</h2>


<div class="card-custom">
<form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
@csrf
@method('PUT')


<div class="mb-3">
<label>Nama Jabatan</label>
<input type="text" name="nama_jabatan" class="form-control" value="{{ $jabatan->nama_jabatan }}" required>
</div>


<button class="btn btn-primary">Update</button>
<a href="{{ route('jabatan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
</x-layoutAdmin>