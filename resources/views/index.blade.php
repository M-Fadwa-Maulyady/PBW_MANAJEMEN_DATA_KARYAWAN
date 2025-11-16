@extends('layout')

@section('content')
<div class="card shadow">
  <div class="card-body">
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="fw-bold">Daftar Karyawan</h4>
      <a href="{{ route('karyawan.create') }}" class="btn btn-success">+ Tambah Karyawan</a>
    </div>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" class="mb-3">
      <input type="text" name="search" class="form-control" placeholder="Cari karyawan...">
    </form>

    <table class="table table-bordered table-striped">
      <thead class="table-primary text-center">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jabatan</th>
          <th>Alamat</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @forelse($karyawans as $key => $karyawan)
        <tr>
          <td>{{ $key + 1 }}</td>
          <td>{{ $karyawan->nama }}</td>
          <td>{{ $karyawan->email }}</td>
          <td>{{ $karyawan->jabatan }}</td>
          <td>{{ $karyawan->alamat }}</td>
          <td class="text-center">
            <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning btn-sm">Edit</a>
            <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
            </form>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="6" class="text-center text-muted">Belum ada data karyawan</td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
