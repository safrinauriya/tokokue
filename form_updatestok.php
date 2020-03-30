
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .container{
        width: 45%;
        margin-top: 9%;
		margin-bottom: 9%;
        box-shadow: 0 3px 20px rgba(0,0,0,0.3);
        padding: 40px;
    }
    button{
        width: 49%;
    }
</style>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php
include 'koneksiregister.php';

$id = $_GET ['id'];
$query = "SELECT * FROM stok WHERE id = '$id'";
$result = $connect->query($query);
$row = $result->fetch_assoc();
?>

<div class="container">
    <form action="update_stok.php" method="POST">
    <center><h1>PENGUBAHAN DATA STOK KUE</h1></center>
    <hr>
    
    <div class="form-group">
        <td><label for="nama_kue">Nama Kue</label></td>
        <td><input type="text" name="nama_kue" id="nama_kue" value="<?php echo $row['nama_kue'];?>" class="form-control"></td>
    </div>
    <div class="form-group">
        <td><label for="stok">Stok</label></td>
        <td><input type="text" name="stok" id="stok" value="<?php echo $row['stok']; ?>" class="form-control"></td>
    </div>
    <div class="form-group">
        <td><label for="harga">Harga</label></td>
        <td><input type="text" name="harga" id="harga" value="<?php echo $row['harga'];?>" class="form-control"></td>
    </div>
    

        <td><input type="hidden" name="id" value="<?php echo $row['id'];?>" class="form-control"></td>
        <center><button type="submit" name="btnSimpan" value="Simpan" class="btn btn-primary">SIMPAN</button></center>
    
    </form>
    </div>
</body>
</html>