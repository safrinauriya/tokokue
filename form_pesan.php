<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PESAN</title>
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

	<center>
	<div class="container mg-6" style="width: 70%">
    <center><h4 class="bg-dark text-white" style="height: 70px ; padding: 5px ;font-size: 38px">Pemesanan Kue</h4></center>
    <div>
        
            <table class="table table-bordered"width="100%" border="1">
            <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksistok.php";
            $num = mysqli_affected_rows($connect);
            $no=0;
            $query=mysqli_query($connect, "SELECT * FROM tb_kue ORDER BY id DESC");
            while($data=   mysqli_fetch_array($query)){
            $no++;
            ?>
            <tr>
                <td><?php echo $no?></td>
                <td><?php echo $data['nama']?></td>
                <td><?php echo $data['stok']?></td>
                <td><?php echo $data['harga']?></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
   
    <center><form action="transaksi.php" method="POST">
	<center><h1> FORM PEMESANAN KUE</h1></center>
	<hr>
        <table width="70%" border="0">
			<div class="form-group">
                <label><td>Pilih Barang</td></label>
                <td class="form-control">
                    <?php
                    $selBar=mysqli_query($connect, "SELECT * FROM tb_kue ORDER BY nama ");        
                    echo '<select name="id_kue" required>';    
                    echo '<option value="">...</option>';    
                    while ($rowbar = mysqli_fetch_array($selBar)) {    
                    echo '<option value="'.$rowbar['id'].'">'.$rowbar['nama'].'</option>';    
                    }    
                    echo '</select>';
                    ?>
                </td>
			</div>
			<div class="form-group">
			<tr>
                <td>Nomor Antrian</td>
                <td><input type="text" name="nomor" maxlength="32" class="form-control" required /></td>
            </tr>
			</div>
			<div class="form-group">
			<tr>
                <td>Jumlah</td>
                <td><input type="text" name="jumlah" maxlength="11" class="form-control" required /></td>
            </tr>
			</div>
            <tr height="36">
                <td></td>
                <td> <br><input type="submit" name="Submit" value="Submit" class="btn btn-primary"/> <input type="reset" value="Reset" class="btn btn-danger"/></td>
            </tr>
		</table>
	</form></center>
	</div>
	</center>




</body>
</html>