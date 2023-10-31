<?php
require '../../config/config.php';
require '../../config/koneksi.php';

if (isset($_POST['simpan'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $status_karyawan = $_POST['status_karyawan'];
    $bagian_id = $_POST['bagian_id'];

    $submit = $koneksi->prepare("INSERT INTO karyawan (nik, nama, tanggal_mulai, gaji_pokok, status_karyawan, bagian_id) VALUES (?, ?, ?, ?, ?, ?)");
    $submit->bind_param("ssssss", $nik, $nama, $tanggal_mulai, $gaji_pokok, $status_karyawan, $bagian_id);

    if ($submit->execute()) {
        echo '<script type="text/javascript">';
        echo 'alert("Data Telah Disimpan");';
        echo 'window.location.href = "../karyawan";';
        echo '</script>';
    } else {
        echo "Gagal menyimpan data: " . $submit->error;
    }
}
?>
