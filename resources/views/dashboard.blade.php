<x-layoutAdmin>
    <div class="d-flex justify-content-between mb-4">
        <h2>Daftar Karyawan</h2>
        <button class="btn btn-primary">+ Tambah Karyawan</button>
      </div>

      <div class="card-custom">
        <div class="d-flex justify-content-between mb-3">
          <input type="text" class="form-control w-25" placeholder="Cari karyawan..." />
        </div>

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
            <tr>
              <td>Contoh Nama</td>
              <td>email@mail.com</td>
              <td>Manager</td>
              <td>Jakarta</td>
              <td>
                <button class="btn btn-warning btn-sm">Edit</button>
                <button class="btn btn-danger btn-sm">Hapus</button>
              </td>
            </tr>
          </tbody>
        </table>
</x-layoutAdmin>