<?php 
define("IPK", 3.4); 
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Beasiswa</title>
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
                    <a class="nav-link active" href="#">Daftar Beasiswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="hasil.php">Lihat Hasil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h2 class="mb-4 text-center">Formulir Pendaftaran Beasiswa</h2>
    <p class="text-center">Silakan isi formulir berikut untuk mendaftar beasiswa:</p>

    <form action="proses_daftar.php" method="post" enctype="multipart/form-data" class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label class="form-label">Nama:</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email:</label>
            <input type="email" name="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">No. HP:</label>
            <input type="text" name="nohp" class="form-control" pattern="\d+" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Semester:</label>
            <select name="semester" class="form-select">
                <?php for ($i = 1; $i <= 8; $i++) echo "<option value='$i'>$i</option>"; ?>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">IPK:</label>
            <input type="text" class="form-control" value="<?php echo IPK; ?>" readonly>
        </div>

        <?php if (IPK >= 3): ?>
            <div class="mb-3">
                <label class="form-label">Jenis Beasiswa:</label>
                <select name="beasiswa" class="form-select">
                    <option value="Akademik">Akademik</option>
                    <option value="Non-Akademik">Non-Akademik</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Upload Berkas:</label>
                <input type="file" name="berkas" class="form-control" accept=".pdf,.jpg,.jpeg,.zip" required>
            </div>

            <div class="d-grid">
                <input type="submit" class="btn btn-success" value="Daftar">
            </div>
        <?php else: ?>
            <div class="alert alert-danger mt-4" role="alert">
                Maaf, IPK Anda di bawah 3. Tidak memenuhi syarat beasiswa.
            </div>
        <?php endif; ?>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
