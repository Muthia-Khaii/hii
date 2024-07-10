<?php
session_start();
include 'cruduser.php';
$username=$_POST['username'];
$password=$_POST['password'];
echo "$username, $password<br.";

if(otentikasi($username, $password)){
    $_SESSION['username']=$username;
    $dataUser=array();
    $dataUser=cariUserDariUsername($username);
    $_SESSION['namauser']=$dataUser['nama'];
    header("location:index.php");
}else{
    header("location:login.php?error");
}
?>