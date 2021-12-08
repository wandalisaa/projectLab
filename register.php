<?php
include('header.php');

if (isset($_SESSION['level'])) {
    if ($_SESSION['level'] == 'admin') {
        header("Location: manage.php");
    }else if ($_SESSION['level'] == 'user'){
        header("Location: dashboard.php");
    }
}
?>

<div class="container" style="height: 91vh;">
    <!-- Form-->
    <div class="form" id="login">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Register</h1>
            </div>
            <div class="form-content">
            <form id="form" method="POST" action="user.php?aksi=register" enctype="multipart/form-data">
            <div class="form-group">
                        <label for="foto">Photo Profile</label>
                        <input type="file" id="foto" name="gambar" required />
                        <div id="validasi-foto"></div>
                    </div>
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" id="nama" name="nama" required />
                        <div id="validasi-nama"></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" required />
                        <div id="validasi-email"></div>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="pass" name="pass" required />
                        <div id="validasi-password"></div>
                    </div>
                    <div class="form-group">
                        <button type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    $(document).ready(function(){
    $('#email').blur(function(){
        var email = $(this).val();
        $.ajax({
            type    : 'POST',
            url     : 'user.php?aksi=validasi',
            data    : 'email='+email,
            success : function(data){
                $('#validasi-email').html(data);
            }
        })
    });

    $('#form').submit(function(){
       
        if ($('#nama').val().length  < 8) {
        $('#validasi-nama').html('<p class="text-danger">Silahkan isi nama anda min. 8 karakter </p>');
        return false;
       } 

       if ($('#email').val().length  == 0) {
        $('#validasi-email').html('<p class="text-danger">Silahkan isi email anda </p>');
        return false;
       } 

       if ($('#pass').val().length  < 8) {
        $('#validasi-password').html('<p class="text-danger">Silahkan isi password anda min. 8 karakter </p>');
        return false;
       } 
    });
});

</script>
<?php
include('footer.php');
?>