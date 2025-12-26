<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Manajemen Karyawan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
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

        .content {
            padding: 30px;
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
        <div class="col-2 p-0">
            <x-sidebar />
        </div>

        <!-- MAIN CONTENT -->
        <div class="col-10">

            <!-- NAVBAR -->
            <x-navbar />

            <!-- PAGE CONTENT -->
            <div class="content">
                {{ $slot }}
            </div>

        </div>

    </div>
</div>
</body>
</html>
