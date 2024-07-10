<?php
// Include the CRUD functions
require_once 'crudmp.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $kodemapel = $_POST['kodemapel'];
    $namamapel = $_POST['namamapel'];
    $jmljam = $_POST['jmljam'];
    
    // Insert data into the database
    $result = tambahMapel($kodemapel, $namamapel, $jmljam);
    
    // Check if the insertion was successful
    if ($result) {
        // Redirect to bacamapel2.php on success
        header("Location: bacamapel2.php");
        exit;
    } else {
        echo "Gagal menambahkan data siswa.";
    }
} else {
    // Redirect back to the form if accessed directly
    header("Location: tambah_data_siswa.php");
    exit;
}
?>