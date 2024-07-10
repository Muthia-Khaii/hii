<?php
   
   Function koneksiAkademik(){
       $servername = "localhost";
       $username = "root";
       $password = "";
       $dbname = "akademik";

       $koneksi = mysqli_connect($servername, $username, $password, $dbname);

       if(!$koneksi){
        die("Koneksi gagal!!!" . mysqli_connect_error());
       }
       return $koneksi;
    }
?>