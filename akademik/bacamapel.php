<?php
include("koneksi.php"); // Pastikan file koneksi.php ada dan berfungsi dengan baik.
echo"<br>";
$sql = "SELECT * FROM matapelajaran"; // Perbaiki spasi setelah tanda bintang (*).
$hasil = mysqli_query($koneksi, $sql); // Pastikan variabel $koneksi tersedia.

if(mysqli_num_rows($hasil) > 0) {
    while($baris = mysqli_fetch_assoc($hasil)) {
        $kodemapel = $baris['kodemapel'];
        $namamapel = $baris['namamapel'];
        $jlmjam = $baris['jmljam'];
        echo "Kodemapel : $kodemapel, Namamapel : $namamapel <br>";
    }
} else {
    echo "Tidak ada record";
}
?>