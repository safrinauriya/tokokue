<?php
session_start();
if(!isset($_SESSION['cart'])){
 $_SESSION['cart'] = array();
}
unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
 .product_image{
  height:200px;
 }
 .product_name{
  height:80px; 
  padding-left:20px; 
  padding-right:20px;
 }
 .product_footer{
  padding-left:20px; 
  padding-right:20px;
 }
</style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



 <br/>
 <div class="container">
  <nav class="navbar navbar-default">
   <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">PILIHAN</span>
      <span class="icon-bar">Navigasi</span>
      <span class="icon-bar">Pilihan</span>
     </button>
     <a class="navbar-brand" href="#">Shopping Cart</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
      <!-- left nav here -->
     </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="view_cart.php"><span class="badge"><?php echo count($_SESSION['cart']); ?></span> Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
     </ul>
    </div>
   </div>
  </nav>
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#form_modal"><span class="glyphicon glyphicon-plus"></span> Add Product</button>
  </p>
  <?php
  //info message
  if(isset($_SESSION['message'])){
   ?>
   <div class="row">
    <div class="col-sm-6 col-sm-offset-6">
     <div class="alert alert-info text-center">
      <?php echo $_SESSION['message']; ?>
     </div>
    </div>
   </div>
   <?php
   unset($_SESSION['message']);
  }


  //connection
  $conn = new mysqli('localhost', 'root', '', 'kue');

  $sql = "SELECT * FROM produk";
  $query = $conn->query($sql);
  $inc = 4;
  while($row = $query->fetch_assoc()){
   $inc = ($inc == 4) ? 1 : $inc + 1; 
   if($inc == 1) echo "<div class='row text-center'>";  
   ?>
   <div class="col-sm-3">
    <div class="panel panel-default">
     <div class="panel-body">
      <div class="row product_image">
       <img src="<?php echo $row['photo'] ?>" width="80%" height="auto">
      </div>
      <div class="row product_name">
       <h4><?php echo $row['nama']; ?></h4>
      </div>
      <div class="row product_footer">
       <p class="pull-left"><b><?php echo $row['harga']; ?></b></p>
       <span class="pull-right"><a href="add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Cart</a></span>
      </div>
     </div>
    </div>
   </div>
   <?php
  }
  if($inc == 1) echo "<div></div><div></div><div></div></div>"; 
  if($inc == 2) echo "<div></div><div></div></div>"; 
  if($inc == 3) echo "<div></div></div>";
  
  //end product row 
  ?>

 </div>

   <div class="modal fade" id="form_modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form action="save_query.php" method="POST" enctype="multipart/form-data">
    <div class="modal-content">
     <div class="modal-body">
      <div class="col-md-2"></div>
      <div class="col-md-8">
       <div class="form-group">
        <label>Product Name</label>
        <input class="form-control" type="text" name="nama">
       </div>
       <div class="form-group">
        <label>Product Price</label>
        <input class="form-control" type="number" name="harga">
       </div>
       <div class="form-group">
        <label>Product Photo</label>
        <input class="form-control" type="file" name="photo">
       </div>
      </div>
     </div>
     <div style="clear:both;"></div>
     <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Close</button>
      <button name="save" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span> Save</button>
     </div>
    </div>
   </form>
  </div>
 </div>
</body>
</html>