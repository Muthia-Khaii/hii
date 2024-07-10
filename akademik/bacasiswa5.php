<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1><strong>Tambah Data Siswa</strong></h1>
    <form action="prosestambah.php" method="POST">
        
        <label for="nis">NIS   :</label>
        <input type="text" id="NIS" name="NIS"><br><br>
        
        <label for="nama">Nama:</label>
        <input type="text" id="Nama" name="Nama"><br><br>
        
        <label>Jenis Kelamin:</label><br>
        <input type="radio" id="laki-laki" name="Jkel" value="Laki-laki">
        <label for="laki-laki">Laki-laki</label>
        <input type="radio" id="perempuan" name="Jkel" value="Perempuan">
        <label for="perempuan">Perempuan</label><br><br>
        
        <label>Jurusan:</label><br>
        <input type="radio" id="rpl" name="Jurusan" value="RPL">
        <label for="rpl">RPL</label>
        <input type="radio" id="upw" name="Jurusan" value="UPW">
        <label for="upw">UPW</label>
        <input type="radio" id="ph" name="Jurusan" value="PH">
        <label for="ph">PH</label>
        <input type="radio" id="tbg" name="Jurusan" value="TBG">
        <label for="tbg">TBG</label>
        <input type="radio" id="tbs" name="Jurusan" value="TBS">
        <label for="tbs">TBS</label><br><br>
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>