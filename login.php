<?php
include('header.php');
include('include/koneksi.php');

if (isset($_SESSION['level'])) {
    if ( $_SESSION['level'] == 'admin') {
        header("Location: manage.php");
    }else if ( $_SESSION['level'] == 'user'){
        header("Location: dashboard.php");
    }
}
?>

<div class="container" style="height: 91vh;">
<?php if (isset($_SESSION['sukses'])) { ?>
<div class="alert alert-primary" role="alert">
  <?=$_SESSION['sukses']; ?>
</div>
<?php }else if(isset($_SESSION['gagal'])){ ?>
<div class="alert alert-danger" role="alert">
  <?=$_SESSION['gagal']; ?>
</div>
<?php } ?>

    <!-- Form-->
    <div class="form" id="login">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Login</h1>
            </div>
            <div class="form-content">
                <form method="POST" action="user.php?aksi=login">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" required />
                    </div>
                    <div class="form-group">
                        <button type="submit">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>