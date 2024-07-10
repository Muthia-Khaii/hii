<?php
include("koneksi.php"); // Pastikan file koneksi.php ada dan berfungsi dengan baik.
echo"<br>";
$sql = "SELECT * FROM siswa"; // Perbaiki spasi setelah tanda bintang (*).
$hasil = mysqli_query($koneksi, $sql); // Pastikan variabel $koneksi tersedia.

if(mysqli_num_rows($hasil) > 0) {
    while($baris = mysqli_fetch_assoc($hasil)) {
        $nis = $baris['NIS'];
        $nama = $baris['Nama'];
        echo "NIS : $nis, Nama : $nama <br>";
    }
} else {
    echo "Tidak ada record";
}
?>