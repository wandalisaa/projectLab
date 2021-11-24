<?php
include('header.php');
include('include/koneksi.php');
if ($_SESSION['level'] == 'admin') {
    header("Location: manage.php");
} else if ($_SESSION['level'] != 'user') {
    header("Location: index.php");
}
?>

<?php if (isset($_SESSION['suksesList'])) { ?>
<div class="alert alert-primary" role="alert">
  <?=$_SESSION['suksesList']; unset($_SESSION['suksesList']); ?>
</div>
<?php }else if(isset($_SESSION['gagalList'])){ ?>
<div class="alert alert-danger" role="alert">
  <?=$_SESSION['gagalList']; unset($_SESSION['gagalList']); ?>
</div>
<?php } ?>

<!-- Read data -->

<?php
    $id_user = $_SESSION['id'];
     $data = $conn->query("SELECT * FROM todo t WHERE t.id_user = $id_user ORDER BY t.status");
     $jumlah = mysqli_num_rows($data);
?>
<div class="container" style="min-height: 100vh;">
    <div class="jumbotron bg-light text-dark">
        <h1 class="display-4">Selamat Datang <?= $_SESSION['nama'] ?></h1>
        <p class="lead">Jumlah to do list anda : <?=$jumlah?></p>
        <hr class="my-4">
    </div>

    <div class="row">
        <a href="form-list.php" class="btn btn-primary my-3 ml-auto">Tambah List</a>
    </div>

    <div class="row mb-5">
    <?php
    while($list = $data->fetch_array(MYSQLI_ASSOC)):
        ?>
        <div class="col-sm-6 col-lg-4">
            <div class="card">
                <h5 class="card-header w-100"><?=$list['kategori']?>
                <span class="badge badge-primary ml-auto"><?=$list['status']?>
            </span>
        </h5>
                <div class="card-body">
                    <h5 class="card-title"><?=$list['judul']?></h5>
                    <p class="card-text"><?=$list['deskripsi']?></p>
                    <div class="w-100 mb-2">
                        <a href="#" class="badge badge-dark"><?=$list['tempat']?></a>
                        <a href="#" class="badge badge-light"><?=$list['waktu']?></a>
                    </div>
                    <a href="list.php?aksi=edit&id=<?=$list['id']?>" class="btn btn-info float-right mx-1" >
                        <svg  data-toggle="tooltip" data-placement="bottom" title="Edit" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>
                    </a>
                    <a href="list.php?aksi=hapus&id=<?=$list['id']?>" class="btn btn-danger text-white float-right mx-1" data-toggle="tooltip" data-placement="bottom" title="Hapus">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <?php 
        endwhile;
        ?>

    </div>
</div>


<script>

    // tooltip
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })


</script>
<?php
include('footer.php');
?>