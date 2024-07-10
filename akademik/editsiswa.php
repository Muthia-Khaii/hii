<?php
require_once 'crudsiswa.php';

if (isset($_GET['nis'])) {
    $nis = $_GET['nis'];
    $siswa = cariSiswaDariNIS($nis);

    if ($siswa) {
        $siswa = $siswa[0];
    } else {
        echo "Data siswa tidak ditemukan.";
        exit;
    }
} else {
    echo "NIS tidak disediakan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>
    <h2>Edit Data Siswa</h2>
    <form action="prosesedit_siswa.php" method="post">
        <input type="hidden" name="nis" value="<?php echo $siswa['NIS']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $siswa['Nama']; ?>"><br><br>
        <label for="jkel">Jenis Kelamin:</label>
        <input type="text" id="jkel" name="jkel" value="<?php echo $siswa['Jkel']; ?>"><br><br>
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" value="<?php echo $siswa['Jurusan']; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
    <a href="bacasiswa2.php">Kembali</a>
</body>
</html>