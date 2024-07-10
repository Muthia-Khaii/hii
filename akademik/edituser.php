<?php
require_once 'cruduser.php';

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $user = cariUserDariUsername($username);

    if ($user) {
        $user = $user;
    } else {
        echo "Data user tidak ditemukan.";
        exit;
    }
} else {
    echo "Username tidak disediakan.";
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>
    <h2>Edit Data User</h2>
    <form action="prosesedituser.php" method="post">
        <input type="hidden" name="username" value="<?php echo $user['username']; ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $user['nama']; ?>"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Update">
    </form>
    <a href="bacauser.php">Kembali</a>
</body>
</html>