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


    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if($password !== $password2){
        echo "<script>alert('Password tidak sesuai');location='registrasi_pembeli.php'</script>";
        return false;
    }
   

    $query = "INSERT INTO pembeli (id_pembeli,username,email,password) 
    VALUES ('','$username','$email','$password')";

    $result = mysqli_query($connect,$query);
    $num = mysqli_affected_rows($connect);

    if($num>0){
        echo "<script>alert('Berhasil registrasi,silahkan login');</script>";
    echo "<script>location='login_pembeli.php';</script>"; 
    }else{
        echo "<script>alert('Gagal registrasi,ulangi lagi');</script>";
        echo "<script>location='registrasi_pembeli.php';</script>"; 
    }
    
?>
</body>
</html>