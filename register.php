<?php
// include('header.php');

// if (isset()) {
//     if ( == 'admin') {
//         header("Location: manage.php");
//     }else if ( == 'user'){
//         header("Location: dashboard.php");
//     }
// }
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
            <form id="form" method="POST" action="user.php?aksi=register">
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="nama" id="nama" name="nama" required />
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
    $('').blur(function(){
        var email = $(this).val();
        $.ajax({
            type    : 'POST',
            url     : '',
            data    : 'email='+email,
            success : function(data){
                $('#validasi-email').html(data);
            }
        })
    });

    $('#form').submit(function(){
       
        if ($('').val().length  < 8) {
        $('').html('<p class="text-danger"> </p>');
        return false;
       } 

    });
});

</script>
<?php
include('footer.php');
?>