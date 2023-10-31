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
    <h1 style="margin-top: 20px; margin-bottom: 20px; text-align: center;">Tambah Data Karyawan</h1>
    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
      <div class="card">
         <div class="card-body bg-dark">
            <div class="form-group row">
                <!--input-->
                <div class="row mb-3">
                <label class="col-2" style="color: white;">NIK</label>
                <div class="col-4">
                    <input name="nik" class="form-control" type="number" placeholder="NIK">
                </div>
                </div>
                <!-- end input -->
                 
                <!--input-->
                <div class="row mb-3">
                <label class="col-2" style="color: white;">Nama</label>
                <div class="col-5">
                    <input name="nama" class="form-control" type="text" placeholder="Nama">
                </div>
                </div>
                <!-- end input -->

                <!--input-->
                <div class="row mb-3">
                <label class="col-2" style="color: white;">Tanggal Mulai</label>
                <div class="col-2">
                    <input name="tanggal_mulai" class="form-control" type="date" placeholder="Tanggal Mulai">
                </div>
                </div>
                <!-- end input -->

                <!--input-->
                <div class="row mb-3">
                <label class="col-2" style="color: white;">Gaji Pokok</label>
                <div class="col-3">
                    <input name="gaji_pokok" class="form-control" type="number" placeholder="Gaji Pokok">
                </div>
                </div>
                <!-- end input -->

                <!--input-->
                <div class="row mb-3">
                <label class="col-2" style="color: white;">Status Karyawan</label>
                <div class="col-10">
                    <select class="col-2" name="status_karyawan" id="">
                        <option value=" ">-- Pilih --</option>
                        <option value="TETAP">TETAP</option>
                        <option value="KONTRAK">KONTRAK</option>
                        <option value="MAGANG">MAGANG</option>
                    </select>
                </div>
                </div>
                <!-- end input -->

                <!--input-->
                <div class="row mb-3">
                <label class="col-2" style="color: white;">Bagian</label>
                <div class="col-2">
                    <select class="form-control" name="bagian_id" id="">
                    <option value=" ">-- Pilih --</option>
                       <?php
                            $bagian = $koneksi->query('SELECT * FROM bagian');

                            foreach($bagian AS $row){

                        ?>
                        <option value="<?= $row['id']?>"><?= $row['nama'] ?></option>
                            <?php }?>
                    </select>
                </div>
                </div>
                <!-- end input -->
            </div>
         </div>
         <div class="card-footer">
            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
         </div>
      </div>
        </form>
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