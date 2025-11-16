@extends('layout')

@section('content')
<div class="card shadow">
  <div class="card-body">
    <h4 class="fw-bold mb-3">Edit Data Karyawan</h4>

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" value="{{ $karyawan->nama }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" value="{{ $karyawan->email }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Jabatan</label>
        <input type="text" name="jabatan" value="{{ $karyawan->jabatan }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" required>{{ $karyawan->alamat }}</textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" value="{{ $karyawan->tanggal_lahir }}" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>
@endsection
