<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
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

      <div class="row no-gutters mt-5">
        <div class="col-md-2 mt-2 pr-3 pt-4">
            <ul class="nav flex-column ml-3 mb-5">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Data Stok Kue</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Data Pembeli</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Data Pemasukan</a><hr class="bg-secondary">
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Data Pengeluaran</a><hr class="bg-secondary">
                  </li>
              </ul>
        </div>
        <div class="col-md-10 p-5 pt-2">
            <h3>DATA STOK KUE</h3><hr>
            <table class="table table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Kue</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Harga</th>
                    <th colspan="3" scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                        include "koneksiregister.php";
                        $query = "SELECT * FROM stok";
                        $sql = mysqli_query($connect, $query); 
                        
                        while($data = mysqli_fetch_array($sql)){
                            echo "<tr>";
                            echo"<td>".$data['id']."</td>";
                            echo"<td>".$data['nama_kue']."</td>";
                            echo"<td>".$data['stok']."</td>";
                            echo"<td>".$data['harga']."</td>";
                            echo"<td><a href='form_updatestok.php?id=".$data['id']."'class='btn btn-success'>Edit Data</a></td>";
                            echo"<td><a href='delete_stok.php?id=".$data['id']."'class='btn btn-danger' onclick='return confirm(\"Apakah anda yakin ingin menghapus data?\")'>Hapus Data</a></td>";
                            echo "</tr>";
    }
    ?>
                </tbody>
              </table>
        </div>
      </div>


</body>
</html>