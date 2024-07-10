<?php
session_start();
if(!isset($_SESSION['namauser'])){
  
    header("Location: login.php");
    exit;
}
$namaUser = $_SESSION['namauser'];
?>

<?php
require_once 'crudmp.php';

$semuaMapel = bacaSemuaMapel();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mata Pelajaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 90%; /* Memperbesar lebar container */
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333; /* Warna teks */
        }
        a.button {
            display: inline-block;
            padding: 10px 20px;
            margin-bottom: 20px;
            background: #ffb6c1; /* Pink pastel */
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Efek hover */
        }
        a.button:hover {
            background-color: #ff6b81; /* Pink tua saat hover */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px; /* Memperbesar padding */
            text-align: left;
        }
        th {
            background-color: #ffb6c1; /* Pink pastel */
            color: white; /* Warna teks putih */
        }
        tr:nth-child(even) {
            background-color: #ffcb6b; /* Kuning pastel */
        }
        tr:hover {
            background-color: #ff6b81; /* Pink tua saat hover */
        }
        .action-links a {
            margin-right: 10px;
            text-decoration: none;
            color: #007BFF;
        }
        .action-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang <?php echo $namaUser; ?>!</h1> <!-- Pesan selamat datang dengan nama pengguna -->
        <a href="bacamapel5.php" class="button">Tambah Mapel</a>
        <?php
        if ($semuaMapel) {
            echo "<table>";
            echo "<tr><th>Kode Mapel</th><th>Nama Mapel</th><th>Jumlah Jam</th><th>Aksi</th></tr>";
            
            foreach ($semuaMapel as $mapel) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($mapel['kodemapel']) . "</td>";
                echo "<td>" . htmlspecialchars($mapel['namamapel']) . "</td>";
                echo "<td>" . htmlspecialchars($mapel['jmljam']) . "</td>";
                echo "<td class='action-links'><a href='edit.php?kodemapel=" . htmlspecialchars($mapel['kodemapel']) . "'>Edit</a> | <a href='hapus.php?kodemapel=" . htmlspecialchars($mapel['kodemapel']) . "'>Hapus</a></td>";
                echo "</tr>";
            }
            
            echo "</table>";
        } else {
            echo "<p>Tidak ada data mapel.</p>";
        }
        ?>
    </div>
</body>
</html>
