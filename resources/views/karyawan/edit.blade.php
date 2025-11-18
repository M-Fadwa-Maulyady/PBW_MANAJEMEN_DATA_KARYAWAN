<x-layoutAdmin>
<h2 class="mb-4">Edit Karyawan</h2>


<div class="card-custom">
<form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
@csrf
@method('PUT')


<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control" value="{{ $karyawan->nama }}" required>
</div>


<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control" value="{{ $karyawan->email }}" required>
</div>


<div class="mb-3">
<label>Jabatan</label>
<input type="text" name="jabatan" class="form-control" value="{{ $karyawan->jabatan }}" required>
</div>


<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control" required>{{ $karyawan->alamat }}</textarea>
</div>


<div class="mb-3">
<label>Tanggal Lahir</label>
<input type="date" name="tanggal_lahir" class="form-control" value="{{ $karyawan->tanggal_lahir }}" required>
</div>


<button class="btn btn-primary">Update</button>
<a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
</form>
</div>
</x-layoutAdmin>