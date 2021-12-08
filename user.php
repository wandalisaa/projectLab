<?php

include('include/koneksi.php');


// Register
if ($_GET['aksi'] == 'register') {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $level = 'user';
    // Hashing Password
    $password = md5($pass);

    // Upload foto
    $gambar = $_FILES['gambar']['name'];

    $eks_dibolehkan = ['png', 'jpg']; // ekstensi yang diperbolehkan
    $x = explode('.', $gambar); // memisahkan nama file dengan ekstensi
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar']['tmp_name'];

    // cek ekstensi yang dibolehkan
    if (in_array($ekstensi, $eks_dibolehkan) === true) {

        if(move_uploaded_file($file_tmp , 'asset/upload/' . $gambar)){
            $sql = "INSERT INTO `user` (`id` , `nama`, `email` , `foto` , `level`, `password`) VALUES ( null , '" . $nama . "' , '" . $email . "' , '".$gambar."' , '" . $level . "' , '" . $password . "')";

            $result = mysqli_query($conn, $sql) or die;
    
            session_start();
    
            if ($result) {
    
                $_SESSION['sukses'] = 'Registrasi Berhasil , Silahkan login';
            } else {
    
                $_SESSION['gagal'] = 'Registrasi Gagal';
            }
    
            header("location: login.php");
        }else{
            echo "<p class='text-primary'>gagal Upload</p>";
        } // memindahkan file gambar
    }
}


// Login
if ($_GET['aksi'] == 'login') {

    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $login = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' and password='$password'");
    $cek = mysqli_num_rows($login);

    session_start();

    if ($cek > 0) {

        while ($log = $login->fetch_array(MYSQLI_ASSOC)) {

            $_SESSION['id'] = $log['id'];
            $_SESSION['nama'] = $log['nama'];
            $_SESSION['email'] = $log['email'];
            $_SESSION['level'] = $log['level'];
            $_SESSION['foto'] = $log['foto'];
        }
        $_SESSION['sukses'] = 'Selamat Datang!' . $nama;

        if ($_SESSION['level'] == 'admin') {
            header("Location: manage.php");
        } else {
            header("Location: dashboard.php");
        }
    } else {
        session_unset();
        $_SESSION['gagal'] = 'email atau Kata Sandi Salah!';
        header("Location: login.php");
    }
}

// logout
if ($_GET['aksi'] == 'logout') {
    session_start();

    session_destroy();
    header("location: index.php");
}

// Validasi
if ($_GET['aksi'] == 'validasi') {

    $email = $_POST['email'];
    $sql = "SELECT * from user where email = '$email'";
    $process = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($process);
    if ($num == 0) {
        echo "<p class='text-primary'>email masih tersedia</p>";
    } else {
        echo " <p class='text-danger'>email tidak tersedia</p>";
    }

    // hapus
    if ($_GET['aksi'] == 'hapus') {

        $id = $_GET['id'];
        $sql = "DELETE FROM user WHERE id = $id";
        $process = mysqli_query($conn, $sql);

        if ($process) {
            header("location: manage.php");
        }
    }
}
