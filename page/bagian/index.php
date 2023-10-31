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
    <h2 style="margin: 20px 0px; text-align:center;">Data Bagian</h2>

    <!--card-->
    <section class="container">
        <div class="card">
            <div class="card-header">
                <a href="tambah.php" class="btn bg-primary" style="color: white; margin-left: 10px;">Tambah</a>
            </div>
            <div class="card-body">
                <table class="table" id="example" class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $bagian = $koneksi->query("SELECT * FROM bagian");
                        while ($data = $bagian->fetch_array()) {
                        ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $data['id'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td>
                                    <a href="edit.php?id=<?= $data['id'] ?>" class="btn bg-success" style="color: white;">Edit</a>
                                    <a href="proses.php?id=<?= $data['id'] ?>" class="btn bg-danger" style="color: white;">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
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