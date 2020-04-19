<?php
include 'koneksiregister.php';

$id=$_GET['id'];

$query="DELETE FROM tb_kue WHERE id='$id'";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    header("location:stok.php");
}else{
    echo "Gagal hapus data <br>".mysqli_connect_error();
    echo "<a href='tampil.php'>Lihat Data</a>"; 
} 


?>