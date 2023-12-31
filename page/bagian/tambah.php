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
    <h2 style="margin: 20px 0px; text-align:center;">Tambah Data Bagian</h2>

    <!--card-->
    <section class="container">
        <form action="proses.php" method="post">
            <div class="card">
                <div class="card-body text-bg-dark p-3">
                    <div class="form-group row">
                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">ID</label>
                            <div class="col-8">
                                <input name="id" type="text" class="form-control" placeholder="ID">
                            </div>
                        </div>
                        <!-- INPUT END -->
                        
                        <!-- INPUT -->
                        <div class="row mb-4">
                            <label class="col-4">Bagian</label>
                            <div class="col-8">
                                <input name="nama" type="text" class="form-control" placeholder="Bagian">
                            </div>
                        </div>
                        <!-- INPUT END -->
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
                </div>
            </div>
        </form>
    </section>
    <!--End card-->

    <?php
    include '../../templates/script.php';
    ?>
</body>

</html>

<script>
    new DataTable('#example');
</script>