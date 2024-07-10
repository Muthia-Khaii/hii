<?php
require_once 'cruduser.php';

$semuaUser = bacaSemuaUser();

if ($semuaUser) {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Daftar User</title>";
    echo "<link rel='stylesheet' href='styleuser.css'>"; // Tautan ke file CSS
    echo "</head>";
    echo "<body>";


    echo "<a href='tambahuser.php'>Tambah User</a>"; // Tombol untuk menambah user
    echo "<table border='1'>";
    echo "<tr><th>Username</th><th>Nama</th><th>Aksi</th></tr>";
    
    foreach ($semuaUser as $user) {
        echo "<tr>";
        echo "<td>" . $user['username'] . "</td>";
        echo "<td>" . $user['nama'] . "</td>";
        echo "<td><a href='edituser.php?username=" . $user['username'] . "'>Edit</a> | <a href='hapususer.php?username=" . $user['username'] . "'>Hapus</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";

} else {
    echo "Tidak ada data user.";
}
?>