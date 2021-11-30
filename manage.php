<?php
include('header.php');
include('include/koneksi.php');

if ($_SESSION['level'] == 'user') {
    header("Location: dashboard.php");
}else if ($_SESSION['level'] != 'admin'){
    header("Location: index.php");
}
?>
<?php
     $data = $conn->query("SELECT * FROM user WHERE 1");
     $jumlah = mysqli_num_rows($data);
     $no = 1;
?>

<div class="container" style="min-height: 100vh;">
    <div class="jumbotron bg-dark text-white">
        <h1 class="display-4">Selamat Datang Admin!</h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    </div>
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php
        while($user= $data->fetch_array(MYSQLI_ASSOC)):
            ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><?=$user['nama']?></td>
      <td><?=$user['email']?></td>
    </tr>
<?php endwhile; ?>
  </tbody>
</table>
</div>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
<?php
include('footer.php');
?>