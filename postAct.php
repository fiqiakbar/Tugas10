<?php
date_default_timezone_set('Asia/Jakarta'); 
echo "<center>Nama : ".$_POST['nama']."</center><br>";
echo "<center>Email : ".$_POST['email']."</center><br>";
echo "<center>Waktu Login: ".date('l, d-m-Y  H:i:s')."</center><br>";
?>

