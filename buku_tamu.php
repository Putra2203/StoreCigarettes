<?php include "header.php"; ?>

<?php 
  if(isset($_POST['nama'])) {

  $nama = $_POST ['nama'];
  $email = $_POST ['email'];
  $nope = $_POST ['nope'];

  $simpan = mysqli_query($koneksi, "INSERT INTO csbukutamu VALUES ('','$nama','$email','$nope')");

  }
?>

      <!--Buku tammu-->
      <form class="row g-1" method="POST" action="">
      <div class="container">
      <div class="col-md-6">
            <label class="form-label">Nama</label>
            <input name="nama" type="text" class="form-control" id="inputCity" placeholder="Nama..." style="margin-left: 50px;" required>
        </div>
        <div class="col-md-6">
          <label class="form-label">Email</label>
          <input name="email" type="text" class="form-control" id="inputCity" placeholder="Email..." style="margin-left: 55px;" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">No. Ponsel</label>
            <input name="nope" type="text" class="form-control" id="inputCity" placeholder="No. Ponsel..." style="margin-left: 18px;" required>
          </div>
        <div class="col-12">
          <button type="submit" value="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
      <!--Tabel-->
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">No. Hp</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <?php
    $tampil = mysqli_query($koneksi, "SELECT * FROM csbukutamu order by id desc");
    $no = 1;
    while ($data = mysqli_fetch_array($tampil)) {
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $data['nama'] ?></td>
      <td><?= $data['email'] ?></td>
      <td><?= $data['nope'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>

<?php include "footer.php"; ?>