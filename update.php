<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM data_karyawan WHERE nip_karyawan = '$id'");
foreach ($q as $dt) :
  ?>
<h1>Data Pegawai - Program</h1>
  <h2>Halaman Ubah Data</h2>
<form action="proses_update.php" method="post">
    <input type="hidden" name="nip_karyawan" value="<?= $dt['nip_karyawan'] ?>">
    <input type="text" name="nama_karyawan" value="<?= $dt['nama_karyawan'] ?>">
    <input type="text" name="alamat_karyawan" value="<?= $dt['alamat_karyawan'] ?>">
    <input type="number" name="no_hp" value="<?= $dt['no_hp'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}