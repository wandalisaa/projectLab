<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--========== Boostrap ==========-->
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!--========== CSS ==========-->
    <link rel="stylesheet" href="asset/css/style.css">
    <!-- ============== Bar Icon ================= -->
    <link rel="shortcut icon" href="asset/img/code.png" type="image/x-icon">
    <title>Project Lab</title>
    <!-- ================ Font =====/ ============ -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <!-- ================ JS ================== -->
    <script src="asset/js/jquery-3.2.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

</head>
<?php
$url = $_SERVER['REQUEST_URI'];
session_start();
?>

<body>
    <!-- Header -->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light px-5">
            <a class="navbar-brand mr-5" href="#">LAB PW</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php
                if (isset($_SESSION['level'])) { ?>
                    <?php
                    if ($_SESSION['level'] == 'admin') {
                    ?>
                        <ul class="navbar-nav ">
                            <li class="nav-item active ">
                                <a class="nav-link" href="manage.php">
                                    Manage
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav justify-content-end w-100">
                            <li class="nav-item ">
                                <a class="nav-link" href="user.php?aksi=logout">
                                    <button class="btn btn-primary">Logout</button>
                                </a>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                    <?php
                    if ($_SESSION['level'] == 'user') {
                    ?>
                        <ul class="navbar-nav ">
                            <li class="nav-item <?php echo $url == '/proLab/dashboard.php' ? 'active' : NULL; ?> ">
                                <a class="nav-link" href="dashboard.php">
                                    Dashboard
                                </a>
                            </li>
                        </ul>
                        <ul class="navbar-nav justify-content-end w-100">
                            <li class="nav-item ">
                                <a class="nav-link" href="user.php?aksi=logout">
                                    <button class="btn btn-primary">Logout</button>
                                </a>
                            </li>
                        </ul>
                    <?php
                    }
                    ?>
                <?php } 
                else {
                ?>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav justify-content-end w-100">
                        <li class="nav-item ">
                            <a class="nav-link" href="register.php">
                                <button class="btn btn-light">Register</button>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="login.php">
                                <button class="btn btn-primary">Login</button>
                            </a>
                        </li>
                    </ul>
                <?php
                }
                ?>
            </div>
        </nav>
    </div>