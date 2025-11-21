<x-layoutAdmin>

    <div class="d-flex justify-content-between mb-4">
        <h2>Daftar Jabatan</h2>
        <a href="{{ route('jabatan.create') }}" class="btn btn-primary">
            + Tambah Jabatan
        </a>
    </div>

    <div class="card-custom">
        <div class="d-flex justify-content-between mb-3">
            <form action="{{ route('jabatan.index') }}" method="GET" class="w-25">
                <input type="text" name="search" class="form-control"
                    placeholder="Cari jabatan..." value="{{ request('search') }}">
            </form>
        </div>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Kode Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th style="width: 150px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jabatans as $jabatan)
                <tr>
                    <td>{{ $jabatan->kode_jabatan }}</td>
                    <td>{{ $jabatan->nama_jabatan }}</td>
                    <td>
                        <a href="{{ route('jabatan.edit', $jabatan->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('jabatan.destroy', $jabatan->id) }}" method="POST" class="d-inline">
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
            {{ $jabatans->links() }}
        </div>
    </div>

</x-layoutAdmin>
