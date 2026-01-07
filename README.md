# Sistem Manajemen Data Karyawan

Aplikasi **Sistem Manajemen Data Karyawan** adalah aplikasi berbasis web untuk mengelola data karyawan, jabatan, laporan, dan buku tamu secara terstruktur dan efisien.

## About Project

Project ini cocok digunakan sebagai **tugas kuliah, portofolio, maupun sistem internal perusahaan skala kecil–menengah**.

---

## ✨ Fitur Utama
- 🔐 Login Admin
- 👥 Manajemen Data Karyawan (Tambah, Edit, Hapus)
- 🧾 Manajemen Data Jabatan
- 📊 Dashboard Admin
- 🖨️ Laporan & Cetak Data
- 📖 Buku Tamu
- 🔎 Filter data karyawan berdasarkan jabatan

---

## 🖼️ Tampilan Aplikasi

### Landing Page
![Landing Page](images/landing-page.png)

### Fitur Utama & Daftar Karyawan
![Fitur Utama](images/fitur-karyawan.png)

### Dashboard Admin
![Dashboard Admin](images/dashboard-admin.png)

---

## 🛠️ Teknologi yang Digunakan
- **Backend** : Laravel
- **Frontend** : Blade Template, Bootstrap
- **Database** : MySQL
- **Server Lokal** : Laragon / XAMPP
- **Bahasa** : PHP

---

## ⚙️ Instalasi & Menjalankan Project

1. Clone repository
```bash
git clone https://github.com/username/nama-repository.git
```

2. Clone repository
```bash
cd nama-repository
```

3. Install dependency
```bash
composer install
```

4. Copy file environment
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Konfigurasi database di file .env
```bash
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

7. Migrasi database
```bash
php artisan migrate
```

8. Jalankan server
```bash
php artisan serve
```

9. Akses aplikasi melalui browser:
```bash
http://127.0.0.1:8000
```



## 👤 Role Pengguna
Admin

Mengelola data karyawan

Mengelola data jabatan

Melihat laporan

Mengelola buku tamu

## 📌 Catatan

Project ini dapat dikembangkan lebih lanjut (export PDF, grafik statistik, multi-role user, dll).

Dibuat sebagai media pembelajaran dan pengelolaan data karyawan.

## 📄 Lisensi

Project ini bersifat open-source dan bebas digunakan untuk keperluan pembelajaran.
