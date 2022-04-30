<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
  $nip_karyawan = $_POST['nip_karyawan'];
  $nama_karyawan = $_POST['nama_karyawan'];
  $alamat_karyawan = $_POST['alamat_karyawan'];
  $no_hp = $_POST['no_hp'];
// id_produk bernilai '' karena kita set auto increment
  $q = $conn->query("INSERT INTO data_karyawan VALUES ('$nip_karyawan', '$nama_karyawan', '$alamat_karyawan', '$no_hp')");
if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data karyawan berhasil ditambahkan'); window.location.href='index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data karyawan gagal ditambahkan'); window.location.href='index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}
