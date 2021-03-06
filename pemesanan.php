<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style>
    .jumbotron{
        margin-top: -120px;
        height: 350px;
        background-color: #ceb8a4;
    }
    .jumbotron .display-4{
        margin-top: 130px;
    }
    .containerhm{
        background-color: #d0836e;
        color: #775954;
        font-family: Arial, Helvetica, sans-serif;
    }
     a{
      color: #775954;
    }
    
    
   

</style>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <a class="navbar-brand" href="#">FRIN'S BAKERY</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Admin</a>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="pemesanan.html" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Our Products
                  <span class="sr-only">(current)</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="pemesanan.html">CAKES </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">BREADS</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">DESSERT</a>
              </li>
          </ul>
        </div>
      
      </nav>
      

      <div class="jumbotron jumbotron-fluid" style="text-align: center;">
        <div class="container">
          <h1 class="display-4">Daftar Menu</h1>
          <p class="lead">FRIN'S BAKERY</p>
        </div>
        <br>
      
        <div>
            <h1 class="display-4" style="background-color:#dcd2c8; text-align: center; height: 80px; font-size: 60px; margin-top: 0px;">•••</h1>
        </div>
      </div>
      <br>
    
              <div class="row no-gutters" style="background-color:#c4bdac;">
                <div class="col-md-2" style="background-color: #925946;">
                    <ul class="list-group list-group-flush p-2 pt-4">
                        <li class="list-group-item text-white" style="background-color: #d0836e; text-align: center;">KATEGORI PRODUK</li>
                        <li class="list-group-item " style="background-color: #dcd2c8;"><a href="pemesanan.html">Cakes</a></li>
                        <li class="list-group-item" style="background-color: #dcd2c8;"><a href="pemesanan.html?halaman=breads">Breads</a></li>
                        <li class="list-group-item" style="background-color: #dcd2c8;"><a href="dessert.html">Dessert</a></li>
                        <li class="list-group-item" style="background-color: #dcd2c8;"><a href="form_pesan.php">Pemesanan</a></li>
                      </ul>
                </div>
                <div class="col-md-10 pt-5">
                    <center><div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" style="width: 80%; ">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="image/cakes.jpg" class="d-block w-100" alt="cakes" style="width: 30px; height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>CAKES</h5>
                              <p>Kami menjual aneka kue dengan bentuk dan cita rasa yang bervariasi sesuai dengan yang anda butuhkan.</p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="image/breads.jpg" class="d-block w-100" alt="breads" style="width: 30px; height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>BREADS</h5>
                              <p>Kami menjual aneka jenis roti dengan berbagai varian rasa sesuai dengan selera anda.
        
                            </p>
                            </div>
                          </div>
                          <div class="carousel-item">
                            <img src="image/dessert.jpg" class="d-block w-100" alt="dessert" style="width: 30px; height: 500px;">
                            <div class="carousel-caption d-none d-md-block">
                              <h5>DESSERT</h5>
                              <p>Kami menjual aneka dessert yang saat ini sangat digemari oleh pecinta makanan manis.</p>
                            </div>
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
        
                      <h4 class="text-center font-weight-bold m-4 ">PRODUK TERBARU</h4>
        
                    
                      <div class="row mx-auto">
                        <div class="card mr-3 ml-4" style="width: 21rem; height: 28rem;">
                            <img src="image/cakes/blackforest.jpg" class="card-img-top" alt="blackforest">
                            <div class="card-body bg-light">
                              <h5 class="card-title">BLACKFOREST</h5>
                              <p class="card-text">Kue ini menggunakan bahan baku dark chocolate, 
                                lalu adanya serutan cokelat sebagai hiasan pada bagian atasnya melambangkan 'black forest'.</p>
                              <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                        <div class="card mr-3 ml-3" style="width: 21rem; height: 28rem;">
                            <img src="image/cakes/cheesecake.jpg" class="card-img-top" alt="cheesecake" style="height: 14rem;">
                            <div class="card-body bg-light">
                              <h5 class="card-title">CHEESE CAKE</h5>
                              <p class="card-text"> Cheesecake adalah kue yang biasanya dimakan sebagai hidangan penutup dan dibuat
                                 dengan mencampurkan keju yang bertekstur lembut, telur, susu, dan gula.</p>
                              <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                        <div class="card mr-3 ml-3" style="width: 21rem; height: 28rem;">
                            <img src="image/cakes/crepes.jpg" class="card-img-top" alt="crepes" style="height: 14rem;">
                            <div class="card-body bg-light">
                              <h5 class="card-title">CREPES</h5>
                              <p class="card-text">Ada sekitar 20 lapis crepes tipis yang disusun menjadi kue dengan dilapisi krim 
                                di setiap layernya lalu disiram dengan cokelat leleh di bagian atasnya.</p>
                              <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                        
        
                       <!-- Penutup Row -->   
                      </div>
        
                      <div class="row mx-auto mt-5">
                        <div class="card mr-3 ml-4" style="width: 21rem; height: 28rem;">
                            <img src="image/cakes/matchacake.png" class="card-img-top" alt="matchacake" style="height: 14rem;">
                            <div class="card-body bg-light">
                              <h5 class="card-title">Matcha Cake</h5>
                              <p class="card-text">Cake teh hijau yang cantik ini sangat menggugah selera. Dengan ditaburi bubuk teh hijau asli.
                                Selain enak, juga cocok untuk Anda yang sedang diet.</p>
                              <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                        <div class="card mr-3 ml-3" style="width: 21rem; height: 28rem;">
                            <img src="image/cakes/operacake.jpg" class="card-img-top" alt="operacake" style="height: 14rem;">
                            <div class="card-body bg-light">
                              <h5 class="card-title">Opera Cake</h5>
                              <p class="card-text">Opera cake merupakan kue yang terbuat dari lapisan sponge cake yang dilapisi dengan sirup kopi, buttercream kopi, dan cokelat. </p>
                              <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                        <div class="card mr-3 ml-3" style="width: 21rem; height: 28rem;">
                            <img src="image/cakes/sachercake.jpg" class="card-img-top" alt="sachercake" style="height: 14rem;">
                            <div class="card-body bg-light">
                              <h5 class="card-title">SACHER CAKE</h5>
                              <p class="card-text"> Sacher cake terbuat dari sponge cake cokelat yang diisi dengan selai aprikot dan dilapisi dengan dark chocolate.
                                <br><br>
                              </p>
                              <a href="#" class="btn btn-primary">Beli</a>
                            </div>
                        </div>
                        
                       <!-- Penutup Row -->   
                      </div>
                      <br><br>
                </div></center>
            </div>
          
         
    <section id="contact" class="contact mb-0" style="background-color:#d0836e;">
              <div class="container">
                <div class="row pt-4 mb-4">
                  <div class="col text-center">
                    <h2>CONTACT US</h2>
                  </div>
                </div>
        
                <div class="row justify-content-center">
                  <div class="col-lg-4">
                    <div class="card text-white bg-secondary mb-2 text-center">
                      <div class="card-body">Contact Us
                        <h5 class="card-title"></h5>
                        <p class="card-text">Silahkan hubungi kami untuk informasi lebih lanjut.</p>
                      </div>
                    </div>
                    <ul class="list-group">
                      <li class="list-group-item"><h3>LOKASI</h3></li>
                      <li class="list-group-item">FRIN'S BAKERY</li>
                      <li class="list-group-item">Jl. Mutiara Indah No. 3 Malang</li>
                      <li class="list-group-item">East Java, Indonesia.</li>
                    </ul>
                  </div>
                  <div class="col-lg-6">
                    <form>
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="password" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="telp">Telp</label>
                        <input type="text" class="form-control" id="telp">
                      </div>
                      <div class="form-group">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" class="form-control"></textarea>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-secondary">Kirim Pesan!</button>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
              
              <footer class="bg-dark text-white">
                <div class="container">
                  <div class="row text-center">
                    <div class="col">
                      <p>Copyright 2020.</p>
                    </div>
                  </div>
                </div>
              </footer>
            </section>
        
           
            
    
</body>
</html>