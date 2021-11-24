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
     $data = $conn->query("SELECT * FROM user WHERE level = 'user';");
     $jumlah = mysqli_num_rows($data);
     $no = 1;
?>

<div class="container" style="min-height: 100vh;">
    <div class="jumbotron bg-dark text-white">
        <h1 class="display-4">Selamat Datang Admin!</h1>
        <p class="lead">Jumlah User : <?=$jumlah?></p>
        <hr class="my-4">
    </div>
    <table class="table" id="myTable">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th>Foto</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
<?php
while($user = $data->fetch_array(MYSQLI_ASSOC)): ?>
    <tr>
      <td><?=$no++?></td>
      <td></td>
      <td><?=$user['nama']?></td>
      <td><?=$user['email']?></td>
      <td>
        <a href="" class="btn btn-danger">hapus</a>
      </td>
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