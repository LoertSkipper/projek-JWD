<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pendaftaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Website Beasiswa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Pilihan Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="daftar.php">Daftar Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Lihat Hasil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h2 class="text-center mb-4">Data Pendaftar Beasiswa</h2>
    <p class="text-center">Berikut adalah data pendaftar beasiswa yang telah masuk:</p>

    <div class="table-responsive">
        <table class="table table-bordered table-striped text-center align-middle">
            <thead class="table-primary">
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Semester</th>
                    <th>IPK</th>
                    <th>Beasiswa</th>
                    <th>Berkas</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require 'koneksi.php';

                $stmt = $pdo->query("SELECT * FROM pendaftar ORDER BY id DESC");
                $data = $stmt->fetchAll();

                if ($data) {
                    foreach ($data as $row) {
                        echo "<tr>";
                        echo "<td>{$row['nama']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['nohp']}</td>";
                        echo "<td>{$row['semester']}</td>";
                        echo "<td>{$row['ipk']}</td>";
                        echo "<td>{$row['beasiswa']}</td>";
                        echo "<td><a href='uploads/{$row['berkas']}' target='_blank' class='btn btn-sm btn-outline-primary'>{$row['berkas']}</a></td>";
                        echo "<td>{$row['status']}</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>Belum ada data pendaftaran.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
