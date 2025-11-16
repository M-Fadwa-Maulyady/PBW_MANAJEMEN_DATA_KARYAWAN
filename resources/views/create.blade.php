@extends('layout')

@section('content')
<div class="card shadow">
  <div class="card-body">
    <h4 class="fw-bold mb-3">Tambah Data Karyawan</h4>

    <form action="{{ route('karyawan.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Jabatan</label>
        <input type="text" name="jabatan" class="form-control" required>
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control" required>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
      <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
