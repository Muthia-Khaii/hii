<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body style="background-color: 	#E6E6FA;">
    <h2>Daftar Siswa</h2>
    <form action="" method="post">
        <label>Pilih Jurusan:</label><br>
        <input type="radio" id="rpl" name="jurusan" value="RPL">
        <label for="rpl">RPL</label><br>
        <input type="radio" id="ph" name="jurusan" value="PH">
        <label for="tkj">PH</label><br>
        <input type="radio" id="tbg" name="jurusan" value="TBG">
        <label for="mm">TBG</label><br>
        <input type="radio" id="tbs" name="jurusan" value="TBS">
        <label for="mm">TBS</label><br>
        <input type="radio" id="upw" name="jurusan" value="UPW">
        <label for="mm">UPW</label><br>
        <!-- Tambahkan radio button untuk opsi jurusan lain sesuai kebutuhan -->
        <br>
        <input type="submit" name="submit" value="Tampilkan">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $jurusan = $_POST['jurusan'];
        require_once 'crudsiswa.php';
        $data = bacaSiswaPerJurusan($jurusan);
        if($data){
            echo "<h3>Data Siswa Jurusan $jurusan:</h3>";
            echo "<table border='1'>";
            echo "<tr><th>NIS</th><th>Nama</th><th>Jenis Kelamin</th><th>Jurusan</th></tr>";
            foreach($data as $siswa){
                echo "<tr>";
                echo "<td>".$siswa['NIS']."</td>";
                echo "<td>".$siswa['Nama']."</td>";
                echo "<td>".$siswa['Jkel']."</td>";
                echo "<td>".$siswa['Jurusan']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Tidak ada data siswa untuk jurusan $jurusan";
        }
    }
    ?>

</body>
</html>
