<?php
include('header.php');
include('include/koneksi.php');

if ( $_SESSION['level'] == 'admin') {
    header("Location: manage.php");
}else if ( $_SESSION['level'] != 'user'){
    header("Location: index.php");
}
?>
<div class="container" style="min-height: 100vh;">
    <div class="jumbotron bg-light text-dark">
        <h1 class="display-4">Selamat Datang <?=$_SESSION['nama']?></h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
</div>
<?php
include('footer.php');
?>