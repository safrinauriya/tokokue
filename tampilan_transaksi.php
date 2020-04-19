<html>
<head>
    <title>Data Kue</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: blanchedalmond;">
        <a class="navbar-brand" href="#">FRIN'S BAKERY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item ">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            <li class="nav-item active">
                <a class="nav-link" href="login.php">Admin</a>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#tentangkami" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Our Products
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="pemesanan.html">CAKES</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">BREADS</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">DESSERT</a>
              </li>
          </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a href="index.html" class="btn btn-danger  mr-sm-2">LOGOUT</a>
              </li>
            </ul>
          </div>
      </nav>
<br>
<br>
<br>
    <div class="container mg-4">
    <h4 class="bg-dark text-white" style="height: 70px ; padding: 10px ;font-size: 38px">ADMIN FRIN'S BAKERY</h4>
    <div class="row no-gutters">
        <div class="col-md-2 mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active" href="stok.php">Data Barang</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="tampilantransaksi.php">Data Pembelian</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="data_pembeli.php">Data Pembeli</a><hr class="bg-secondary">
                </li>
              </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3>Data Pembelian</h3><hr>
            <table class="table table-bordered"width="530" border="1">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID OUT</th>
                <th scope="col">ID KUE</th>
                <th scope="col">NOMOR</th>
                <th scope="col">LOKASI</th>
                <th colspan="3" scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
           
           include "koneksistok.php";
           $query = "SELECT * FROM tb_out";
           $sql = mysqli_query($connect, $query); 
           
           while($data = mysqli_fetch_array($sql)){
               echo "<tr>";
               echo"<td>".$data['id_out']."</td>";
               echo"<td>".$data['id_kue']."</td>";
               echo"<td>".$data['nomor']."</td>";
               echo"<td>".$data['jumlah']."</td>";
               echo"<td><a href='delete_data.php?id_out".$data['id_out']."'class='btn btn-danger' onclick='return confirm(\"Apakah anda yakin ingin menghapus data?\")'>Hapus Data</a></td>";
               echo "</tr>";
}
?>
            
        </tbody>
    </table>
    </div>
</body>
</html>