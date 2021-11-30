<?php
include('include/koneksi.php');
session_start();
// create
if ($_GET['aksi'] == 'tambah') {

    $id_user = $_SESSION['id'];
    $judul = $_POST['judul'];
    $tempat = $_POST['tempat'];
    $waktu = $_POST['waktu'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];

    $sql = "INSERT INTO `todo` (`id`, `id_user`, `judul`, `deskripsi`, `tempat`, `waktu`, `kategori`, `status`) VALUES (NULL, '".$id_user."', '".$judul."', '".$keterangan."', '".$tempat."', '".$waktu."', '".$kategori."', 'belum selesai');";   
    $result = mysqli_query($conn, $sql );
    
    if ($result) {
        unset($_SESSION['suksesList']);
        $_SESSION['suksesList'] = 'list berhasil dibuat!';
        header("Location: dashboard.php");
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
}

// update
if ($_GET['aksi'] == 'edit' ) {

    $id = $_GET['id'];
    $id_user = $_SESSION['id'];
    $judul = $_POST['judul'];
    $tempat = $_POST['tempat'];
    $waktu = $_POST['waktu'];
    $kategori = $_POST['kategori'];
    $keterangan = $_POST['keterangan'];
    $status = $_POST['status'];

    $sql = "UPDATE `todo` SET `id_user`= '$id_user', `judul`= '$judul', `deskripsi`= '$keterangan' , `tempat`= '$tempat', `waktu`='$waktu', `kategori` = '$kategori', `status`= '$status' WHERE id = '$id';";   
    $result = mysqli_query($conn, $sql );
    
    if ($result) {
        unset($_SESSION['suksesList']);
        $_SESSION['suksesList'] = 'list berhasil diupdate!';
        header("Location: dashboard.php");
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
}

// delete
if ($_GET['aksi'] == 'hapus') {

    $id = $_GET['id'];

    $sql = "";   
    $result = mysqli_query($conn, $sql );
    
    if ($result) {
        unset($_SESSION['suksesList']);
        $_SESSION['suksesList'] = 'list berhasil dihapus!';
        header("Location: dashboard.php");
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
}

// selesai
if ($_GET['aksi'] == 'selesai') {

    $id = $_GET['id'];

    $sql = "";   
    $result = mysqli_query($conn, $sql );
    
    if ($result) {
        unset($_SESSION['suksesList']);
        $_SESSION['suksesList'] = 'list berhasil diselesaikan!';
        header("Location: dashboard.php");
    } else {
        echo("Error description: " . mysqli_error($conn));
    }
}


?>