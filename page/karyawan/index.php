<?php
require '../../config/config.php';
require '../../config/koneksi.php';
?>

<!doctype html>
<html lang="en">

<?php
include '../../templates/head.php';
?>

<?php
include '../../templates/navbar.php';
?>

<body>
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Karyawan</h1>
    <!--card-->
    <section class="container">
      <div class="card">
        <div class="card-header">
      <a href="tambah.php" class="btn bg-primary ml-3" style="color: white; margin-left: 10px;">Tambah</a>
        </div>
         <div class="card-body">
         <table style="width:100%;" class="table" id="example" class="table table-striped">
  <thead style="background-color: salmon;">
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIK</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Mulai</th>
      <th scope="col">Gaji Pokok</th>
      <th scope="col">Status Karyawan</th>
      <th scope="col">Bagian</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $no = 1;
    $karyawan = $koneksi->query("SELECT * FROM karyawan ORDER BY nik DESC");
     $karyawan = $koneksi->query("SELECT * FROM karyawan");
            while ($data = $karyawan->fetch_array()){

    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $data['nik'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['tanggal_mulai'] ?></td>
        <td><?= $data['gaji_pokok'] ?></td>
        <td><?= $data['status_karyawan'] ?></td>
        <td><?= $data['bagian_id'] ?></td>
        <td>
          <a href="edit.php?id=<?= $data['nik'] ?>" class="btn bg-success" style="color: white;">Edit</a>
          <a href="proses.php?id=<?= $data['nik'] ?>" class="btn bg-danger" style="color: white;">Hapus</a>
        </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
         </div>
      </div>
    </section>
    <?php
    include '../../templates/script.php';
    ?>

    <?php 
    include '../../templates/script.php';
    ?>
    <!--end footer-->
    <!--End card-->
    <?php
    include '../../templates/script.php';
?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>
</html>

<script>
  new DataTable('#example');
</script>