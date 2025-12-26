<x-layoutAdmin>

    <h2 class="mb-4">Dashboard</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card-custom">
                <h5>Total Karyawan</h5>
                <h2>{{ \App\Models\Karyawan::count() }}</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <h5>Total Jabatan</h5>
                <h2>{{ \App\Models\Jabatan::count() }}</h2>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-custom">
                <h5>Total Buku Tamu</h5>
                <h2>{{ \App\Models\GuestBook::count() }}</h2>
            </div>
        </div>
    </div>

</x-layoutAdmin>
