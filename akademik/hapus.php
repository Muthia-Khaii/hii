<?php
require_once 'crudmp.php';

// Periksa apakah parameter NIS diterima melalui GET
if(isset($_GET['kodemapel'])) {
    $kodemapel = $_GET['kodemapel'];
    
    // Panggil fungsi hapusSiswa dengan NIS yang diberikan
    if (hapusMapel($kodemapel)!=true) {
        echo "Data siswa dengan kodemapel $kodemapel berhasil dihapus.";
        header("Location: bacamapel2.php");
        exit; 
    } else {
        echo "Gagal menghapus data mapel dengan kodemapel $kodemapel."; 
    }
} else {
    echo "Parameter kodemapel tidak ditemukan.";
}
?>
