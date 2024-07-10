<?php
require_once 'koneksiakad.php';

function bacaSiswa($sql){
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil) == 0){
        mysqli_close($koneksi);
        return null;
    }
    $i = 0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['NIS'] = $baris['NIS'];
        $data[$i]['Nama'] = $baris['Nama'];
        $data[$i]['Jkel'] = $baris['Jkel'];
        $data[$i]['Jurusan'] = $baris['Jurusan'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaSemuaSiswa(){
    $sql = "SELECT * FROM siswa";
    return bacaSiswa($sql);
}

function editSiswa(){
    $sql = "SELECT * FROM siswa";
    return bacaSiswa($sql);
}

function hapusSiswa(){
    $sql = "SELECT * FROM siswa";
    return bacaSiswa($sql);
}


function bacaSiswaPerJurusan($jurusan){
    $sql = "SELECT * FROM siswa WHERE Jurusan = '$jurusan'";
    return bacaSiswa($sql);
}

function cariSiswaDariNIS($nis){
    $sql = "SELECT * FROM siswa WHERE NIS = '$nis'";
    return bacaSiswa($sql);
}

function tambahSiswa($nis,$nama,$jkel,$jurusan){
    $koneksi = koneksiAkademik();
    $sql = "insert into siswa values('$nis','$nama','$jkel','$jurusan')";
    $hasil=0;
    if(mysqli_query($koneksi,$sql));
    $hasil=1;
    mysqli_close($koneksi);
    return $hasil;
}

?>
</body>
</html>