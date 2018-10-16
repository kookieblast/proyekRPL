<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>KPop Store</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!-- Custom styles for this template -->
	<!-- <link rel="stylesheet" href="css/carousel.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<style>
  		.box{
  			border-radius: 15px;
  			background-color: white;
  			width: 500px;
  			padding: 20px;
  			border: 1px solid #CDDFF4;
  			margin: 30px auto 0 auto;
  			transition:all 5s;
  			/*background: linear-gradient(45deg,white,black);*/
  			/*background: radial-gradient(white,black);*/
  		}
  		h1{
  			text-align: center;
  		}
  		.header{
  			background-color: #CDDFF4;
  			border-radius: 5%;
  			margin: 0 auto 0 auto;
  			font-weight: bold;
  			width: 520px;
  			padding: 10px;
  			opacity: 0.95;
  			transition:all 2.5s;
  		}
  		body{
  			background-image: url(images/bg_monstax.jpg);
  			background-size: 100%;
  		}
  	</style>
</head>
<body id="here">	
	<nav class="navbar navbar-default" style="background-color: #CDDFF4">
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
					<?php require_once("connect.php");
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

	<!-- Wrap the rest of the page in another container to center all the content -->
	<div class="container marketing">
		<!-- Three columns of text below the carousel -->
		<div class="header">
			<h1>About Us</h1>
		</div>
		<div class="box">
			<p>Website ini merupakan website yang dirancang untuk menjual Merchandise dan berbagai macam album K-Pop di Indonesia dan merupakan Website Shopping yang terpercaya</p>
			<p>Website ini dibuat oleh : <br>
				Gunawan Novita<br>
				Amadea<br>
				Karina Shelvi<br>
				Valerie Caroline</p>
			<p>Disclaimer : website ini adalah proyek untuk mata kuliah Rekayasa Perangkat Lunak. Segala konten dalam website ini adalah fiksi.</p>
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
