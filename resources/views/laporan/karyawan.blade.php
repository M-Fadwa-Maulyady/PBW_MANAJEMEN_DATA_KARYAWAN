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
        <h2>Laporan Data Karyawan</h2>
    </div>

    <div class="card-custom">

        {{-- Search --}}
        <div class="d-flex justify-content-between mb-3">
            <form action="{{ route('laporan.karyawan') }}" method="GET" class="w-25">
                <input type="text" name="search" class="form-control"
                       placeholder="Cari karyawan..."
                       value="{{ request('search') }}">
            </form>
            <button onclick="window.print()" class="btn btn-secondary">
                <i class="fa-solid fa-print"></i> Cetak
            </button>
        </div>
        <h3 class="text-center mb-3 print-only">
            Laporan Data Karyawan
        </h3>
        {{-- Table --}}
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th style="width:60px;">No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jabatan</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($karyawans as $i => $karyawan)
                <tr>
                    <td>{{ $karyawans->firstItem() + $i }}</td>
                    <td>{{ $karyawan->nama }}</td>
                    <td>{{ $karyawan->email }}</td>
                    <td>
                        {{ $karyawan->jabatan->kode_jabatan }}
                        - {{ $karyawan->jabatan->nama_jabatan }}
                    </td>
                    <td>{{ $karyawan->alamat }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Data karyawan tidak ditemukan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $karyawans->links() }}
        </div>

    </div>

</x-layoutAdmin>
