<?php
require_once 'koneksiakad.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];

    $koneksi = koneksiAkademik();
    $sql = "DELETE FROM user WHERE username = '$username'";

    if (mysqli_query($koneksi, $sql)) {
        echo "User berhasil dihapus.";
        header("Location: bacauser.php");
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
    echo "<br><a href='bacauser.php'>Kembali ke Daftar User</a>";
} else {
    echo "Username tidak disediakan.";
}
?>