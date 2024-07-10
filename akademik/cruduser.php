<?php
require_once 'koneksiakad.php';
function cariUserDariUsername($username){
    $koneksi= koneksiAkademik();
    $sql="SELECT * FROM user WHERE username='$username' ";
    $hasil = mysqli_query($koneksi, $sql);
    $total=mysqli_num_rows($hasil);
    if(mysqli_num_rows($hasil)>0){
        $baris=mysqli_fetch_assoc($hasil);
        $data['username']=$baris['username'];
        $data['password']=$baris['password'];
        $data['nama']=$baris['nama'];
        mysqli_close($koneksi);
        return $data;
    }else{
        mysqli_close($koneksi);
        return null;
    }
}
function bacaSemuaUser(){
    $sql = "SELECT * FROM user";
    return bacaUser($sql);
}

function bacaUser($sql){
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil) == 0){
        mysqli_close($koneksi);
        return null;
    }
    $i = 0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['username'] = $baris['username'];
        $data[$i]['nama'] = $baris['nama'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function otentikasi($username, $password){
    $dataUser=array();
    $passmd5 = md5($password);
    $dataUser = cariUserDariUsername($username);
    if($dataUser!=null){
        if($passmd5==$dataUser['password']){
            return true;
        } else{
            return false;
        }
        } else{
            return false;
        }
}
