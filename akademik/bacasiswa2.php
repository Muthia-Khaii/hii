<?php
require_once 'crudsiswa.php';

$semuaSiswa = bacaSemuaSiswa();

if ($semuaSiswa) {
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head>";
    echo "<title>Daftar Siswa</title>";
    echo "<link rel='stylesheet' href='stylesiswa.css'>"; // Tautan ke file CSS
    echo "</head>";
    echo "<body>";


    echo "<a href='bacasiswa5.php'>Tambah Siswa</a>"; // Tombol untuk menambah siswa
    echo "<table border='1'>";
    echo "<tr><th>NIS</th><th>Nama</th><th>Jenis Kelamin</th><th>Jurusan</th><th>Aksi</th></tr>";
    
    foreach ($semuaSiswa as $siswa) {
        echo "<tr>";
        echo "<td>" . $siswa['NIS'] . "</td>";
        echo "<td>" . $siswa['Nama'] . "</td>";
        echo "<td>" . $siswa['Jkel'] . "</td>";
        echo "<td>" . $siswa['Jurusan'] . "</td>";
        echo "<td><a href='editsiswa.php?nis=" . $siswa['NIS'] . "'>Edit</a> | <a href='hapus.php?nis=" . $siswa['NIS'] . "'>Hapus</a></td>";
        echo "</tr>";
    }
    
    echo "</table>";

} else {
    echo "Tidak ada data siswa.";
}
?>