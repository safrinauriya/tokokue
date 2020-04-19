<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"select*from pembeli where username='$username' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek>0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    echo "<script>alert('Anda berhasil login');location='pemesanan.php'</script>";

}else{
    header("location:login_pembeli.php?submit=gagal");

}
?>