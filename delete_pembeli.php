<?php
include 'koneksistok.php';

$id_pembeli = $_GET['id_pembeli'];
$query="DELETE FROM pembeli WHERE id_pembeli='$id_pembeli'";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    header("location:tampilan_transaksi.php");
}else{
    echo "Gagal hapus data <br>".mysqli_connect_error();
    echo "<a href='tampilan_transaksi.php'>Lihat Data</a>"; 
} 


?>