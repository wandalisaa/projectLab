<?php

include('include/koneksi.php');


// Register
if( $_GET['aksi'] == 'register' ){

    

    $password = md5($pass);
    
	$sql = "INSERT INTO `user` (`id` , `nama`, `email` , `foto` , `level`, `password`) VALUES ( null , '".$nama."' , '".$email."' , '' , '".$level."' , '".$password."')";
 
    $result = mysqli_query($conn, $sql) or die ;

    session_start();

	if ($result){

       

    }else{


    }

    header("location: login.php");
}


// Login
if( $_GET['aksi'] == 'login' ){


    $login = mysqli_query($conn , "SELECT * FROM user WHERE email='$email' and password='$password'");
    $cek = mysqli_num_rows($login);
    
    session_start();

    if($cek > 0){

    while($log = $login->fetch_array(MYSQLI_ASSOC)) {


    
    }
    $_SESSION['sukses'] = 'Selamat Datang!'.$nama;

    if ($_SESSION['level'] == 'admin') {
        header("Location: manage.php");
    }else{
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
	

	header("location: index.php");

}

// Validasi
if ($_GET['aksi'] == 'validasi') {

    
    $sql = "SELECT * from user where email = '$email'";
    $process = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($process);

    if($num == 0){
        echo "<p class='text-primary'>email masih tersedia</p>";
    }else{
        echo " <p class='text-danger'>email tidak tersedia</p>";
    }

}
