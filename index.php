<?php
// panggil koneksinya
require_once 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Program Data</title>
</head>
<body>
  <h1>Program Pengisian Data Karyawan</h1>
  
  <!-- 
  Create atau menambahkan data baru 
  Data akan dikirimkan ke add.php untuk diproses
  -->
  <form method="post" action="add.php">
    <input type="number" name="nip_karyawan" placeholder="Masukkan NIP">
    <input type="text" name="nama_karyawan" placeholder="Nama Lengkap">
    <input type="text" name="alamat_karyawan" placeholder="Masukkan Alamat">
    <input type="number" name="no_hp" placeholder="Masukkan Nomer HP">
    <input type="submit" name="submit" value="Tambah Data">
  </form><br/>
<!-- Read atau menampilkan data dari database -->
  <table border="1">
    <tr>
      <th>No.</th> <th>NIP</th>
      <th>Nama Karyawan</th>
      <th>Alamat Karyawan</th>
      <th>No HP</th>
      <th colspan="2">Aktivitas</th>
    </tr>
<?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM data_karyawan");
$no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['nip_karyawan'] ?></td>
      <td><?= $dt['nama_karyawan'] ?></td>
      <td><?= $dt['alamat_karyawan'] ?></td>
      <td><?= $dt['no_hp'] ?></td>
      <td><a href="update.php?id=<?= $dt['nip_karyawan'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['nip_karyawan'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
    </tr>
<?php
    endwhile;
    ?>
</table>
</body>
</html>