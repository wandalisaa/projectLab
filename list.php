<?php
include('include/koneksi.php');
session_start();
// create
if ($_GET['aksi'] == 'tambah') {
    // init var

    $sql = "INSERT INTO `todo` (`id`, `id_user`, `judul`, `deskripsi`, `tempat`, `waktu`, `kategori`, `status`) VALUES (NULL, '".$id_user."', '".$judul."', '".$keterangan."', '".$tempat."', '".$waktu."', '".$kategori."', 'belum selesai');";   
    $result = mysqli_query($conn, $sql );
    
    if ($result) {
        // set session
        
        header("Location: dashboard.php");
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
}

// update
if ($_GET['aksi'] == 'edit' ) {
    
}

// read
if ($_GET['aksi']) {
    
}


?>