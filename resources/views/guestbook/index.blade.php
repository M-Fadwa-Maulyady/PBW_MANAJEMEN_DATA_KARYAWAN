<x-layoutAdmin>
    <style>
        .pagination .page-link {
            border-radius: 6px;
            margin: 0 3px;
        }

        .pagination .active .page-link {
            background-color: #2563eb;
            border-color: #2563eb;
        }
    </style>
    <div class="d-flex justify-content-between mb-4">
        <h2>Buku Tamu</h2>
    </div>

    <div class="card-custom">

        {{-- Flash Message --}}
        @if(session('success'))
            <div class="alert alert-success mb-3">
                {{ session('success') }}
            </div>
        @endif

        {{-- Table --}}
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th style="width: 60px;">No</th>
                    <th style="width: 180px;">Nama</th>
                    <th>Pesan / Saran</th>
                    <th style="width: 160px;">Tanggal</th>
                    <th style="width: 120px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($guestbooks as $i => $guest)
                <tr>
                    <td>{{ $guestbooks->firstItem() + $i }}</td>
                    <td>
                        {{ $guest->nama ?? 'Anonim' }}
                    </td>
                    <td>
                        {{ $guest->pesan }}
                    </td>
                    <td>
                        {{ $guest->created_at->format('d M Y H:i') }}
                    </td>
                    <td>
                        <form action="{{ route('guestbook.destroy', $guest->id) }}"
                              method="POST"
                              onsubmit="return confirm('Yakin hapus pesan ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">
                        Belum ada pesan dari pengunjung.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $guestbooks->links() }}
        </div>

    </div>

</x-layoutAdmin>
