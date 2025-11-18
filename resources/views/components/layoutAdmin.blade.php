<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manajemen Karyawan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


  <style>
    body {
      background: #f3f5f7;
    }
    .sidebar {
      height: 100vh;
      background: #1e1f26;
      color: white;
      padding: 25px;
    }
    .sidebar h2 {
      font-size: 22px;
      margin-bottom: 25px;
    }
    .sidebar a {
      display: block;
      color: #ddd;
      margin-bottom: 12px;
      text-decoration: none;
      font-size: 16px;
    }
    .sidebar a:hover {
      color: white;
    }
    .content {
      padding: 35px;
    }
    .card-custom {
      border-radius: 12px;
      box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
      padding: 25px;
      background: white;
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">

    <!-- SIDEBAR -->
    <x-sidebar></x-sidebar>

    <!-- MAIN CONTENT -->
    <div class="col-10 content">

        {{ $slot }}
      
        <x-navbar></x-navbar>
      </div>

    </div>
  </div>
</div>
</body>
</html>
