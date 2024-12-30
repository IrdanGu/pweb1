<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracer Alumni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        .jumbotron-bg {
            background: url('fkom.jpg') center/cover;
            color: white;
            text-shadow: 1px 1px 2px black;
        }
    </style>
</head>

<body>
    <header class="jumbotron-bg text-center py-5">
        <div class="container">
            <h1 class="display-4">Universitas Kuningan</h1>
            <p class="lead">Situs Pencarian Alumni Fakultas Ilmu Komputer</p>
        </div>
    </header>
    <div class="container-fluid my-4">
        <div class="row">
            <aside class="col-md-2">
                <nav class="nav flex-column bg-light p-3">
                    <a class="nav-link" href="?menu=form">Tambah Alumni</a>
                    <a class="nav-link" href="?menu=data">Lihat Data Alumni</a>
                </nav>
            </aside>
            <main class="col-md-10">
                <?php
                if (isset($_GET['menu'])) {
                    include $_GET['menu'] === 'form' ? 'alumni_form.php' : ($_GET['menu'] === 'data' ? 'alumni_data.php' : '');
                } else {
                    echo "<p>Selamat datang di sistem tracer alumni. Pilih menu di sebelah kiri untuk memulai.</p>";
                }
                ?>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>