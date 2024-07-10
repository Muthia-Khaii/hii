<?php
require_once 'koneksiakad.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    $koneksi = koneksiAkademik();
    $sql = "UPDATE user SET nama = '$nama'";

    // Update password only if it's provided
    if (!empty($password)) {
        $passmd5 = md5($password);
        $sql .= ", password = '$passmd5'";
    }

    $sql .= " WHERE username = '$username'";

    if (mysqli_query($koneksi, $sql)) {
        echo "Data user berhasil diupdate.";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    echo "<br><a href='bacauser.php'>Kembali ke Daftar User</a>";
} else {
    echo "Invalid request method.";
}
?>