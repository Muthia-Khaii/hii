<?php
session_start();
function cekLogin() {
    if(isset($_SESSION['namauser'])) {
        header("Location: index.php"); 
        exit;
    }
}

// Panggil fungsi cekLogin
cekLogin();

if(array_key_exists('error', $_GET)){
    echo "<p class='error'>Salah Username dan Password</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Tambahkan gaya CSS Anda di sini */
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="loginindex.php" method="post">
        <p>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>
        </p>
        <p>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </p>
        <p>
            <input type="submit" value="Login">
        </p>
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    </form>
</body>
</html>