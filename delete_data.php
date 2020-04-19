<?php
include 'koneksistok.php';

$id_out = $_GET['id_out'];
$query="DELETE FROM tb_out WHERE id_out='$id_out'";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0){
    header("location:tampilan_transaksi.php");
}else{
    echo "Gagal hapus data <br>".mysqli_connect_error();
    echo "<a href='tampilan_transaksi.php'>Lihat Data</a>"; 
} 


?>