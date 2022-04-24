<?php
if (empty($_POST['nama'].$_POST['email'])) {
	header("Location:kelengkapandata.php");
} else {
	echo "<center>Nama :".$_POST['nama']."</center><br>";
	echo "<center>Email :".$_POST['email']."</center><br>";
}
?>