<?php
require_once 'crudmp.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan semua data yang diperlukan diterima dari form
    if (isset($_POST['kodemapel']) && isset($_POST['namamapel']) && isset($_POST['jmljam'])) {
        $kodemapel = $_POST['kodemapel'];
        $namamapel = $_POST['namamapel'];
        $jmljam = $_POST['jmljam'];

        // Panggil fungsi untuk melakukan pengeditan mata pelajaran
        $hasil = editMapel($kodemapel, $namamapel, $jmljam);

        if ($hasil) {
            echo "Data mata pelajaran berhasil diupdate.";
            header("Location: bacamapel2.php"); // Mengarahkan kembali ke bacamapel2.php setelah berhasil memperbarui data
            exit(); // Memastikan tidak ada output lain sebelum pengalihan header
        } else {
            echo "Gagal melakukan update data mata pelajaran.";
        }
    }      
} else {
    echo "Metode yang digunakan bukan POST.";
}
?>