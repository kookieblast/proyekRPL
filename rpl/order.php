<!DOCTYPE html>
<?php require_once("connect.php"); 
$id = $_GET["id"];
$p = mysqli_query($conn, "select * from produk where produk_id = $id") or die(mysqli_error($conn));
while($row = mysqli_fetch_assoc($p)){
	$pname = $row["produk_name"];
	$partist = $row["produk_artist"];
	$ppath = $row["produk_path"];
	$pprice = $row["produk_price"];
	$prelease = $row["produk_release"];
}
?>
<html>
<head>
	<title>Order Now</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!-- Custom styles for this template -->
	<!-- <link rel="stylesheet" href="css/carousel.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  		body{
  			background-color: #ff9966;
  		}
  	</style>
</head>
<body id="here">
	<nav class="navbar navbar-default " style="background-color: #CDDFF4" style="margin-bottom: 2px;">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" aria-expanded="true">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">KPop Store</a>
			</div>
			<div class="navbar-collapse collapse in" id="myNavbar" aria-expanded="true" style>
				<ul class="nav navbar-nav navbar-left">
					<li class> <a href="album.php">Album</a></li>
					<li class> <a href="merch.php">Merchandise</a></li>
					<li class> <a href="aboutus.php">About Us</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php
					if(isset($_SESSION["uname"])){
						echo 
						"<li>
							<a href='#'><span class='glyphicon glyphicon-user'></span> ".$_SESSION["uname"]."</a>
						</li>
						<li>
							<a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a>
						</li>";
					} else {
						echo
						"<li>
							<a href='register.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a>
						</li>
						<li>
							<a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a>
						</li>";
					}
					?>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="panel panel-default">
			<div class="row">
				<div class="col-md-6">
					<?php
					echo "<img src='".$ppath."' class='img-responsive' style='width:100%' alt='Image'>";
					?>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12">
							<?php
							echo "<h2>".$partist." - ".$pname."</h2>";
							?>
						</div>
						<div class="col-md-12">
							<p class="description">
								<?php
								echo "
								<div><h4>Release Date : ".$prelease."</h4></div>
								<div><h4>Price : Rp ".$pprice."</h4></div>";
								?>
							</p>
						</div>
						<div class="col-md-12">
							<div style="float: left;">
								Qty : 
								<input type="number" name="qty" style="width: 80px;">&nbsp; &nbsp;
							</div>
							<div style="float: right; margin-right: 310px;">
								<?php
								if(isset($_SESSION["uname"])){
									echo 
									"<a href='#'>
										<button type='button' class='btn btn-default'><span class='glyphicon glyphicon-shopping-cart'></span> Add to Cart</button>
									</a>";
								} else {
									echo 
									"<a href='login.php'>
										<button type='button' class='btn btn-default'><span class='glyphicon glyphicon-shopping-cart'></span> Add to Cart</button>
									</a>";
								}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- FOOTER -->
	<footer class="container-fluid text-center">
		<a href="#here" title="To Top"> 
			<span class="glyphicon glyphicon-chevron-up"> </span>
		</a>
		<p>
			Made by Dea, Karina, Novita, Valerie
		</p>
	</footer>
</body>
</html>