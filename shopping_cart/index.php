<?php
	session_start();
	//initialize cart if not set or is unset
	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}

	//unset qunatity
	unset($_SESSION['qty_array']);
?>
<!DOCTYPE html>
<html>

<head>
 <meta charset="utf-8">
 <title>Create Shopping Cart using Session in PHP/MySQL</title>
 <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
  integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
 <style>
 body {
  margin-top: 25px;
 }

 .product_image {
  height: 200px;
 }

 .product_name {
  height: 80px;
  padding-left: 20px;
  padding-right: 20px;
 }

 .product_footer {
  padding-left: 20px;
  padding-right: 20px;
 }
 </style>
</head>

<body>
 <div class="container">
  <nav class="navbar navbar-default">
   <div class="container-fluid">
    <div class="navbar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
      data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>
     <a class="navbar-brand" href="#">Create Shopping Cart using Session in PHP/MySQL</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav">
      <!-- left nav here -->
     </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="view_cart.php"> Shopping Cart <span class="glyphicon glyphicon-shopping-cart"></span></a></li>
      <li><span class="badge"><?php echo count($_SESSION['cart']); ?></span></li>
     </ul>
    </div>
   </div>
  </nav>
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
		//end info message
		//fetch our products	
		//connection
		$conn = new mysqli('localhost', 'root', '', 'shopping');

		$sql = "SELECT * FROM products";
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
      <img src="<?php echo $row['photo'] ?>" width="200px" height="200px">
     </div>
     <div class="row product_name">
      <h4><?php echo $row['name']; ?></h4>
     </div>
     <div class="row product_footer">
      <p class="pull-left"><b><?php echo $row['price']; ?></b></p>
      <span class="pull-right"><a href="add_cart.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-sm"><span
         class="glyphicon glyphicon-plus"></span> Cart</a></span>
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


 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
  integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
</body>

</html>