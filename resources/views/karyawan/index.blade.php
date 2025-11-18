<x-layoutAdmin>

    <div class="d-flex justify-content-between mb-4">
        <h2>Daftar Karyawan</h2>
        <a href="{{ route('karyawan.create') }}" class="btn btn-primary">
            + Tambah Karyawan
        </a>
    </div>

    <div class="card-custom">
        <div class="d-flex justify-content-between mb-3">
            <form action="{{ route('karyawan.index') }}" method="GET" class="w-25">
                <input type="text" name="search" class="form-control"
                    placeholder="Cari karyawan..." value="{{ request('search') }}">
            </form>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                    <th style="width: 150px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($karyawans as $karyawan)
                <tr>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->email }}</td>
                    <td>{{ $karyawan->jabatan }}</td>
                    <td>{{ $karyawan->alamat }}</td>
                    <td>
                        <a href="{{ route('karyawan.edit', $karyawan->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('karyawan.destroy', $karyawan->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            {{ $karyawans->links() }}
        </div>
    </div>

</x-layoutAdmin>
