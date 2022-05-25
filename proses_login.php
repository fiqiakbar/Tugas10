<?php
session_start();
$conn = mysqli_connect("localhost","root","","20082010162");
$username = $_POST['username'];
$password = $_POST['password'];
$login =$_POST['login'];

if(isset($login)){

    if(empty($username) or empty($password)){

        echo "<script>alert('Form tidak boleh kosong!!! Silakan ulangi lagi'); </script>";
        header('location:index.php');
    }else{

        $query = mysqli_query($conn ,"select * from users where username = '$username' and password = '$password'");
        if(mysqli_num_rows($query) > 0){
            echo "Selamat datang admin";

            $r = mysqli_fetch_array($query);
            $_SESSION['username'] = $r['username'];

            header("location:cetak.php");
        }else{

            header("location:index.php");
        }
    }
}

?>