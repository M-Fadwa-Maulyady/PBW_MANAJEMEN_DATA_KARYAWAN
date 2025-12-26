<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Data Karyawan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>

<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold text-blue-600">
            Sistem Karyawan
        </h1>

        <a href="{{ route('login') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            Login Admin
        </a>
    </div>
</nav>

<!-- HERO -->
<section class="bg-gradient-to-r from-blue-600 to-indigo-600 text-white">
    <div class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h2 class="text-4xl font-bold mb-4">
                Kelola Data Karyawan <br> Lebih Mudah & Terstruktur
            </h2>
            <p class="text-lg mb-6 text-blue-100">
                Sistem informasi untuk mengelola data karyawan, jabatan,
                laporan, dan pencetakan data secara efisien.
            </p>

            <a href="{{ route('login') }}"
               class="inline-block bg-white text-blue-600 font-semibold
                      px-6 py-3 rounded shadow hover:bg-gray-100 transition">
                Masuk ke Sistem
            </a>
        </div>

        <div class="hidden md:block">
            <img src="{{ asset('img/ilustrasi.png') }}"
                 alt="Ilustrasi Sistem"
                 class="w-full">
        </div>
    </div>
</section>

<!-- FITUR -->
<section class="max-w-7xl mx-auto px-6 py-20">
    <h3 class="text-3xl font-bold text-center mb-12">
        Fitur Utama Sistem
    </h3>

    <div class="grid md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <i class="fa-solid fa-users text-3xl text-blue-600 mb-4"></i>
            <h4 class="font-semibold text-xl mb-2">Manajemen Karyawan</h4>
            <p class="text-gray-600">
                Tambah, edit, hapus, dan cari data karyawan dengan mudah.
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <i class="fa-solid fa-briefcase text-3xl text-blue-600 mb-4"></i>
            <h4 class="font-semibold text-xl mb-2">Manajemen Jabatan</h4>
            <p class="text-gray-600">
                Kelola data jabatan secara terstruktur dan konsisten.
            </p>
        </div>

        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
            <i class="fa-solid fa-file-lines text-3xl text-blue-600 mb-4"></i>
            <h4 class="font-semibold text-xl mb-2">Laporan & Cetak</h4>
            <p class="text-gray-600">
                Lihat laporan karyawan dan cetak data dengan tampilan rapi.
            </p>
        </div>
    </div>
</section>

<form method="GET" class="flex justify-center mb-10">
    <select name="jabatan_id"
            onchange="this.form.submit()"
            class="px-4 py-2 rounded border border-gray-300">
        <option value="">Semua Jabatan</option>
        @foreach ($jabatans as $jabatan)
            <option value="{{ $jabatan->id }}"
                {{ request('jabatan_id') == $jabatan->id ? 'selected' : '' }}>
                {{ $jabatan->nama_jabatan }}
            </option>
        @endforeach
    </select>
</form>


<!-- DAFTAR KARYAWAN (PUBLIK) -->
<section class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-6 py-20">

        <h3 class="text-3xl font-bold text-center mb-4">
            Daftar Karyawan
        </h3>

        <p class="text-center text-gray-600 mb-12">
            Informasi karyawan yang ditampilkan terbatas pada nama dan jabatan.
        </p>

        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach ($karyawans as $karyawan)
            <div class="bg-white rounded-lg shadow p-6 text-center
                        hover:shadow-lg transition">

                <div class="w-16 h-16 mx-auto mb-4 flex items-center
                            justify-center rounded-full bg-blue-100 text-blue-600">
                    <i class="fa-solid fa-user text-2xl"></i>
                </div>

                <h4 class="text-lg font-semibold">
                    {{ $karyawan->nama }}
                </h4>

                <p class="text-gray-500">
                    {{ $karyawan->jabatan->nama_jabatan }}
                </p>
            </div>
            @endforeach
        </div>

        <p class="text-center text-sm text-gray-500 mt-10">
            *Data ditampilkan secara terbatas untuk keperluan informasi.
        </p>

    </div>
</section>


<!-- CTA -->
<section class="bg-blue-600 text-white">
    <div class="max-w-7xl mx-auto px-6 py-16 text-center">
        <h3 class="text-3xl font-bold mb-4">
            Siap Mengelola Data Karyawan?
        </h3>
        <p class="mb-6 text-blue-100">
            Masuk ke sistem dan mulai kelola data secara profesional.
        </p>

        <a href="{{ route('login') }}"
           class="bg-white text-blue-600 font-semibold
                  px-8 py-3 rounded shadow hover:bg-gray-100 transition">
            Login Sekarang
        </a>
    </div>
</section>

<section class="bg-white">
    <div class="max-w-4xl mx-auto px-6 py-16">

        <h3 class="text-3xl font-bold text-center mb-4">
            Buku Tamu & Saran
        </h3>

        <p class="text-center text-gray-600 mb-8">
            Silakan tinggalkan pesan atau saran untuk pengembangan sistem.
        </p>

        <form action="{{ route('guestbook.store') }}" method="POST"
              class="bg-gray-50 p-6 rounded-lg shadow">
            @csrf

            <div class="mb-4">
                <label class="block mb-1 font-medium">Nama (opsional)</label>
                <input type="text" name="nama"
                       class="w-full px-4 py-2 rounded border">
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-medium">Pesan / Saran</label>
                <textarea name="pesan" rows="4" required
                          class="w-full px-4 py-2 rounded border"></textarea>
            </div>

            <button class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700">
                Kirim Pesan
            </button>
        </form>

    </div>
</section>


<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-400">
    <div class="max-w-7xl mx-auto px-6 py-6 text-center">
        <p>
            © {{ date('Y') }} Sistem Informasi Data Karyawan.  
            Dibuat oleh <span class="text-white font-semibold">Kelompok 4</span>.
        </p>
    </div>
</footer>

</body>
</html>
