<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "koneksiregister.php";

    $nama_kue = $_GET ['nama_kue'];
    $stok = $_GET ['stok'];
    $harga = $_GET ['harga'];

    $query = "INSERT INTO stok (nama_kue,stok,harga) 
    VALUES ('$nama_kue','$stok','$harga')";

    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "Berhasil tambah data";
        echo "<a href='tampil.php'> Lihat Data </a>";
    }else{
        echo "Gagal tambah data".mysqli_error($connect);
        echo "<a href='tampil.php'> Lihat Data </a>";
    }
    
?>
</body>
</html>