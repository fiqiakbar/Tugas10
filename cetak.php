<?php
include "koneksi.inc.php";
?>

<?php
$no=1;
$sql= mysqli_query($conn, "select * from kontak order by nama");
while($data=mysqli_fetch_array($sql)){
 
    echo "<table width='100%' cellpadding='2' cellspacing='0' border='1'> 
    <tr> 
    <th>No</th> 
    <th>Nama</th> 
    <th>Jenis Kelamin</th> 
    <th>Email</th> 
    <th>Alamat</th> 
    <th>Kota</th> 
    <th>Pesan</th>"; 
    $no=1; 
    foreach($sql as $hasil){     echo "<tr>     <td>$no</td> 
    <td>".$hasil['nama']."</td> 
    <td>".$hasil['jkel']."</td> 
    <td>".$hasil['email']."</td> 
    <td>".$hasil['alamat']."</td> 
    <td>".$hasil['kota']."</td> 
    <td>".$hasil['pesan']."</td>  
    </tr>"; 
    $no++; 
} 
echo "</table>"; 
?> 

<?php
}
?>
<body>
	<div id="profile">
		<b id="logout"><a href="logout.php">Silahkan klik Logout</a></b>
	</div>
</body>

</table>
