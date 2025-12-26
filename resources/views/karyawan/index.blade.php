<x-layoutAdmin>
    <style>
        @media print {

            /* sembunyikan semua */
            body * {
                visibility: hidden;
            }

            /* tampilkan hanya tabel karyawan */
            .card-custom, .card-custom * {
                visibility: visible;
            }

            .card-custom {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
            }

            /* sembunyikan sidebar & tombol */
            .sidebar,
            .btn,
            nav {
                display: none !important;
            }
            /* hanya muncul saat print */
            .print-only {
                display: none;
                }

            @media print {
                .print-only {
                    display: block;
                    font-weight: bold;
                }

                /* sembunyikan sidebar & tombol */
                .sidebar,
                .btn,
                nav {
                    display: none !important;
                }

                /* fokuskan area tabel */
                body * {
                    visibility: hidden;
                }

                .card-custom, .card-custom * {
                    visibility: visible;
                }

                .card-custom {
                    position: absolute;
                    left: 0;
                    top: 0;
                    width: 100%;
                }
            }
        
            .pagination .page-link {
                border-radius: 6px;
                margin: 0 3px;
            }

            .pagination .active .page-link {
                background-color: #2563eb;
                border-color: #2563eb;
            }

        }   

    </style>
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

            <button onclick="window.print()" class="btn btn-secondary">
                <i class="fa-solid fa-print"></i> Cetak
            </button>
        </div>


        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <h3 class="text-center mb-3 print-only">
            Data Karyawan
        </h3>

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
                    <td>{{ $karyawan->jabatan->nama_jabatan }}</td>
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

        <div class="d-flex justify-content-center mt-4">
            {{ $karyawans->links() }}
        </div>
    </div>

</x-layoutAdmin>
