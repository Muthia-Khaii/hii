<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mapel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* Warna latar belakang */
            margin: 0;
            padding: 0;
        }
        h1 {
            color: #333; /* Warna judul */
            text-align: center;
            margin-top: 50px;
        }
        form {
            background-color: #fff; /* Warna latar belakang form */
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            color: #333; /* Warna teks label */
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #ffb6c1; /* Warna latar belakang tombol */
            color: #fff; /* Warna teks tombol */
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #ff6b81; /* Warna latar belakang tombol saat hover */
        }
    </style>
</head>
<body>
    <h1><strong>Tambah Data Mapel</strong></h1>
    <form action="prosestambah.php" method="POST">
        
        <label for="kodemapel">Kode Mapel   :</label>
        <input type="text" id="kodemapel" name="kodemapel"><br><br>
        
        <label for="namamapel">Nama Mapel:</label>
        <input type="text" id="namamapel" name="namamapel"><br><br>

        <label for="jmljam">Jumlah Jam:</label>
        <input type="text" id="jmljam" name="jmljam"><br><br>
        
        <input type="submit" value="Kirim">
    </form>
</body>
</html>
