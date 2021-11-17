
<?php
include('header.php');
include('include/koneksi.php');

// if (isset()) {
//     if ( == 'admin') {
//         header("Location: manage.php");
//     }else if ( == 'user'){
//         header("Location: dashboard.php");
//     }
// }

?>


    <!-- Main Content -->
    <div class="main-content">
        <!-- Banner -->
        <div class="banner p-5 mx-5">
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-center">
                    <img src="asset/img/code.png" width="350px" alt="" srcset="">
                </div>
                <div class="col-lg-6 col-sm-12 text-primary">
                    <h1>Ayo Belajar Pemprograman Web ! :)</h1>
                    <button class="btn btn-lg btn-light ">Ayo Mulai Belajar </button>
                </div>
            </div>
        </div>

        <!-- Icon -->
        <div class="icon my-3">
            <div class="row my-5">
                <div class="col-3  text-center">
                    <img src="asset/img/facebook.png" width="50px" alt="" srcset="">
                </div>
                <div class="col-3  text-center">
                    <img src="asset/img/google.png" width="50px" alt="" srcset="">
                </div>
                <div class="col-3  text-center">
                    <img src="asset/img/instagram.png" width="50px" alt="" srcset="">
                </div>
                <div class="col-3  text-center">
                    <img src="asset/img/twitter.png" width="50px" alt="" srcset="">
                </div>
            </div>
        </div>

        <!-- Card -->
        <div class="card-fitur container text-center">
            <h6>FITUR</h6>
            <h4 class="mb-5">PRAKTIKUM PEMPROGRAMAN WEB</h4>
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="card p-3">
                        <img class="card-img-top w-50 m-auto" src="asset/img/gamepad.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Gaming </h5>
                            <p class="card-text">structured form of play, usually undertaken for entertainment or fun, and sometimes used as an educational tool.</p>
                            <a href="#" class="btn btn-primary">Lets Play</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card p-3">
                        <img class="card-img-top w-50 m-auto" src="asset/img/burger.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Food </h5>
                            <p class="card-text">any substance consumed to provide nutritional support for an organism. Food is usually of plant, animal or fungal origin, and contains essential</p>
                            <a href="#" class="btn btn-primary">Lets eat</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="card p-3">
                        <img class="card-img-top w-50 m-auto" src="asset/img/comment.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Chat </h5>
                            <p class="card-text">the process of communicating, interacting and/or exchanging messages over the Internet. </p>
                            <a href="#" class="btn btn-primary">Lets Chat</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('footer.php');
?>