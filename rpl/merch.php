<!DOCTYPE html>
<?php 
require_once("connect.php"); 
?>
<html>
<head>
	<title>Merchandise</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!-- Custom styles for this template -->
	<!-- <link rel="stylesheet" href="css/carousel.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
		<h2 style="margin-top: 0px;">Merchandise</h2>   
		
		<?php
		$q = mysqli_query($conn, "select * from produk where jenis = 2") or die(mysqli_error($conn));
		$jum_row = mysqli_num_rows($q);
		while ($jum_row > 0){
			$count = 0;
			$html = "<div class='row'>";
			$html_nested = "";
			while ($count < 3 && $row = mysqli_fetch_assoc($q)){
				$aname = $row["produk_name"];
				$aartist = $row["produk_artist"];
				$arelease = $row["produk_release"];
				$aprice = $row["produk_price"];
				$apath = $row["produk_path"];
				$aid=$row["produk_id"];
				$html_nested .= 
				"<div class='col-sm-4'>
					<div class='panel panel-danger'>
						<div class='panel-heading' align='center'>".$aname."<br>".$aartist."</div>
						<div class='panel-body'><img src='".$apath."' class='img-responsive' style='width:100%' alt='Image'></div>
						<div class='panel-footer' align='center'>
							<div>Release Date : ".$arelease."</div>
							<div>Price : Rp ".$aprice."</div>
							<div>
								<a href='order.php?id=$aid'>
									<button type='button' class='btn btn-default'>Order Now</button>
								</a>
							</div>
						</div>
					</div>
				</div>";
				$count++; $jum_row--;
			}
			$html .= $html_nested;
			$html .= "</div>";
			echo $html;
		}
		?>

	</div><br>

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