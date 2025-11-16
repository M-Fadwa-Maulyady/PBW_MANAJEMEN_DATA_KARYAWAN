<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Aplikasi Data Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand fw-bold" href="{{ url('/karyawan') }}">Data Karyawan</a>
  </div>
</nav>

<div class="container mt-4">
  @yield('content')
</div>

<footer class="bg-primary text-white text-center py-2 mt-5">
  <p class="mb-0">&copy; 2025 - Sistem Penyimpanan Data Karyawan</p>
</footer>

</body>
</html>
