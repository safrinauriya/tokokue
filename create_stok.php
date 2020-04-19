<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    include "koneksistok.php";

    $kode = $_GET ['kode'];
    $nama = $_GET ['nama'];
    $lokasi = $_GET ['lokasi'];
    $stok = $_GET ['stok'];
    $harga = $_GET ['harga'];

    $query = "INSERT INTO tb_kue(id,kode,nama,lokasi,stok,harga) 
    VALUES ('','$kode','$nama','$lokasi','$stok','$harga')";

    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "<script>alert('Anda berhasil menambah data');location='stok.php'</script>";
    }else{
        header("location:form_admin.php?submit=gagal");
    }
    
?>
</body>
</html>