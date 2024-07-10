<?php
require_once 'koneksiakad.php';

function bacaMapel($sql){
    $data = array();
    $koneksi = koneksiAkademik();
    $hasil = mysqli_query($koneksi, $sql);
    if(mysqli_num_rows($hasil) == 0){
        mysqli_close($koneksi);
        return null;
    }
    $i = 0;
    while($baris = mysqli_fetch_assoc($hasil)){
        $data[$i]['kodemapel'] = $baris['kodemapel'];
        $data[$i]['namamapel'] = $baris['namamapel'];
        $data[$i]['jmljam'] = $baris['jmljam'];
        $i++;
    }
    mysqli_close($koneksi);
    return $data;
}

function bacaSemuaMapel(){
    $sql = "SELECT * FROM matapelajaran";
    return bacaMapel($sql);
}


function cariMapelDariKode($kodemapel){
    $sql = "SELECT * FROM matapelajaran WHERE kodemapel = '$kodemapel'";
    return bacaMapel($sql);
}

function tambahMapel($kodemapel,$namamapel,$jmljam){
    $koneksi = koneksiAkademik();
    $sql = "insert into matapelajaran values('$kodemapel','$namamapel','$jmljam')";
    $hasil=0;
    if(mysqli_query($koneksi,$sql));
    $hasil=1;
    mysqli_close($koneksi);
    return $hasil;
}


function hapusMapel($kodemapel) {
    $koneksi = koneksiakademik(); // Menggunakan fungsi koneksiakademik() untuk mendapatkan koneksi ke database

    $sql = "DELETE FROM matapelajaran WHERE kodemapel = '$kodemapel'";
    if (!mysqli_query($koneksi, $sql)) {
        die('Error: ' . mysqli_error($koneksi));
    }
    
    $hasil = mysqli_affected_rows($koneksi); 
    mysqli_close($koneksi); 
}

function editMapel($kodemapel, $namamapel, $jmljam) {
    $koneksi = koneksiAkademik();

    $sql = "UPDATE matapelajaran SET namamapel='$namamapel', jmljam='$jmljam' WHERE kodemapel='$kodemapel'";
    
    if (!mysqli_query($koneksi, $sql)) {
        die('Error: ' . mysqli_error($koneksi));
    }

    $hasil = mysqli_affected_rows($koneksi);
    mysqli_close($koneksi);

    return $hasil;
}



?>
</body>
</html>
