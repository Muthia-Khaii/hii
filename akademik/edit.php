<?php
require_once 'crudmp.php';

// Pastikan parameter kode mapel diterima dari URL
if(isset($_GET['kodemapel'])) {
    $kodemapel = $_GET['kodemapel'];

    // Ambil data mata pelajaran berdasarkan kode mapel
    $mapel = cariMapelDariKode($kodemapel);

    if($mapel) {
        // Tampilkan form untuk mengedit mata pelajaran
        echo "<!DOCTYPE html>";
        echo "<html lang='en'>";
        echo "<head>";
        echo "<meta charset='UTF-8'>";
        echo "<meta name='viewport' content='width=device-width, initial-scale=1.0'>";
        echo "<title>Edit Mata Pelajaran</title>";
        echo "<style>";
        echo "body {";
        echo "    font-family: Arial, sans-serif;";
        echo "    background-color: #f0f0f0;";
        echo "    margin: 0;";
        echo "    padding: 0;";
        echo "}";
        echo "h2 {";
        echo "    text-align: center;";
        echo "    margin-top: 50px;";
        echo "    color: #333;"; /* Warna judul */
        echo "}";
        echo "form {";
        echo "    max-width: 400px;";
        echo "    margin: 20px auto;";
        echo "    background-color: #fff;"; /* Warna latar belakang form */
        echo "    padding: 20px;";
        echo "    border-radius: 10px;";
        echo "    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);";
        echo "}";
        echo "label {";
        echo "    color: #333;"; /* Warna teks label */
        echo "}";
        echo "input[type='text'], input[type='submit'] {";
        echo "    width: 100%;";
        echo "    padding: 10px;";
        echo "    margin-bottom: 10px;";
        echo "    border: 1px solid #ccc;";
        echo "    border-radius: 5px;";
        echo "    box-sizing: border-box;";
        echo "}";
        echo "input[type='submit'] {";
        echo "    background-color: #ffb6c1;"; /* Warna latar belakang tombol */
        echo "    color: #fff;"; /* Warna teks tombol */
        echo "    cursor: pointer;";
        echo "    transition: background-color 0.3s ease, color 0.3s ease;";
        echo "}";
        echo "input[type='submit']:hover {";
        echo "    background-color: #ff6b81;"; /* Warna latar belakang tombol saat hover */
        echo "}";
        echo "</style>";
        echo "</head>";
        echo "<body>";
        echo "<h2>Edit Mata Pelajaran</h2>";
        echo "<form action='proses_edit.php' method='post'>";
        echo "<input type='hidden' name='kodemapel' value='" . $mapel[0]['kodemapel'] . "'>";
        echo "Nama Mata Pelajaran: <input type='text' name='namamapel' value='" . $mapel[0]['namamapel'] . "'><br>";
        echo "Jumlah Jam: <input type='text' name='jmljam' value='" . $mapel[0]['jmljam'] . "'><br>";
        echo "<input type='submit' value='Simpan'>";
        echo "</form>";
        echo "</body>";
        echo "</html>";
    } else {
        echo "Mata pelajaran tidak ditemukan.";
    }
} else {
    echo "Kode mapel tidak diberikan.";
}
?>
