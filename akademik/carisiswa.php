<!DOCTYPE html>
<html lang="en">
<head>
<body style="background-color: #B0E0E6;">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Siswa</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <form method="POST" action="">
        <label for="nis">NIS:</label>
        <br>
        <input type="text" id="nis" name="nis">
        <button type="submit" name="submit">Cari</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        require_once 'crudsiswa.php';
        $nis = $_POST['nis'];
        $hasil = cariSiswaDariNis($nis);
        
        if(is_array($hasil)){
            echo "<h3>Data Siswa</h3>";
            echo "NIS: " . $hasil['NIS'] . "<br>";
            echo "Nama: " . $hasil['Nama'] . "<br>";
            echo "Jenis Kelamin: " . $hasil['Jkel'] . "<br>";
            echo "Jurusan: " . $hasil['Jurusan'] . "<br>";
        } else {
            echo "<p>$hasil</p>";
        }
    }
    ?>
</body>
</html>