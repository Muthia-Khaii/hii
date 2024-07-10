<?php
require_once 'koneksiakad.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jkel = $_POST['jkel'];
    $jurusan = $_POST['jurusan'];

    $koneksi = koneksiAkademik();
    $sql = "UPDATE siswa SET Nama = '$nama', Jkel = '$jkel', Jurusan = '$jurusan' WHERE NIS = '$nis'";

    if (mysqli_query($koneksi, $sql)) {
        mysqli_close($koneksi);
        header("Location: bacasiswa2.php");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
        mysqli_close($koneksi);
    }
} else {
    echo "Invalid request method.";
}
?>
