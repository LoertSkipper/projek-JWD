<?php
require 'vendor/autoload.php';
require 'koneksi.php';
use Respect\Validation\Validator as v;
define("IPK", 3.4);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama     = $_POST['nama'];
    $email    = $_POST['email'];
    $nohp     = $_POST['nohp'];
    $semester = $_POST['semester'];
    $beasiswa = $_POST['beasiswa'] ?? '';
    $status   = "belum diverifikasi";
    $ipk      = IPK;

    if (!v::email()->validate($email)) {
        exit("Email tidak valid");
    }

    if (!v::digit()->validate($nohp)) {
        exit("Nomor HP harus angka semua");
    }

    if (!v::intVal()->between(1, 8)->validate($semester)) {
        exit("Semester tidak valid");
    }

    if (!is_dir('uploads')) {
        mkdir('uploads');
    }

    $uploadName = basename($_FILES['berkas']['name']);
    $uploadPath = 'uploads/' . $uploadName;
    move_uploaded_file($_FILES['berkas']['tmp_name'], $uploadPath);

    $data = "$nama|$email|$nohp|$semester|$ipk|$beasiswa|$uploadName|$status\n";

    $sql = "INSERT INTO pendaftar (nama, email, nohp, semester, ipk, beasiswa, berkas, status)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$nama, $email, $nohp, $semester, $ipk, $beasiswa, $uploadName, $status]);
        header("Location: hasil.php");
        exit();
        
}
?>