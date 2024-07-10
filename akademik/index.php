<?php
session_start();
if(!isset($_SESSION['namauser'])){
    header("Location: login.php");
    exit;
}
$namaUser = $_SESSION['namauser'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #f0f0f0, #d9d9d9);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        h1 {
            color: #333;
            font-size: 2.5em;
            margin-bottom: 40px;
        }
        .button {
            display: inline-block;
            padding: 20px 30px; /* Memperbesar ukuran tombol */
            font-size: 1.2em;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            border: none;
            border-radius: 50px; /* Mengubah border-radius untuk bentuk yang lebih bulat */
            box-shadow: 0 5px rgba(0, 0, 0, 0.2);
            margin: 10px;
            transition: all 0.3s ease;
        }
        .button:hover {
            box-shadow: 0 3px rgba(0, 0, 0, 0.1);
            transform: translateY(-3px);
        }
        /* Menyesuaikan warna tombol sesuai dengan permintaan */
        .pink { background-color: #ffb6c1; } /* Pink pastel */
        .blue { background-color: #87cefa; } /* Biru pastel */
        .yellow { background-color: #ffcb6b; } /* Kuning pastel */
        .red { background-color: #ff4b5c; } /* Merah untuk tombol logout */

        /* Grid layout untuk tombol */
        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Menyesuaikan ukuran tombol */
            gap: 20px;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Menyesuaikan tata letak logout ke pojok kanan */
        .logout-container {
            margin-top: auto;
            display: flex;
            justify-content: flex-end;
            align-items: flex-end;
        }

        /* Mengubah ukuran dan bentuk tombol logout menjadi bulat */
        .logout-button {
            display: inline-block;
            padding: 15px;
            font-size: 1.2em;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            border: none;
            border-radius: 50%; /* Membuat tombol logout menjadi bulat */
            box-shadow: 0 5px rgba(0, 0, 0, 0.2);
            margin: 10px;
            transition: all 0.3s ease;
        }
        .logout-button:hover {
            box-shadow: 0 3px rgba(0, 0, 0, 0.1);
            transform: translateY(-3px);
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Selamat datang <?php echo $namaUser; ?>!</h1> <!-- Pesan selamat datang dengan nama pengguna -->
        <div class="button-container">
            <a href="bacasiswa2.php" class="button pink">Baca Siswa</a>
            <a href="bacamapel2.php" class="button blue">Mata Pelajaran</a>
            <a href="bacauser.php" class="button yellow">Baca User</a>
        </div>
        <div class="logout-container"> <!-- Container untuk tombol logout -->
            <a href="logout.php" class="logout-button red">Logout</a>
        </div>
    </div>

</body>
</html>
