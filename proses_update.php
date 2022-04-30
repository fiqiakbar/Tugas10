<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nip_karyawan = $_POST['nip_karyawan'];
  $nama_karyawan = $_POST['nama_karyawan'];
  $alamat_karyawan = $_POST['alamat_karyawan'];
  $no_hp = $_POST['no_hp'];
$q = $conn->query("UPDATE data_karyawan SET nama_karyawan = '$nama_karyawan', alamat_karyawan = '$alamat_karyawan', no_hp = '$no_hp' WHERE nip_karyawan = '$nip_karyawan'");
if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data karyawan berhasil diubah'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data karyawan gagal diubah'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}