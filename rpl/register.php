<!DOCTYPE html>
<?php
require_once("connect.php");
if($_POST){
	$u = $_POST["uname"];
	$e = $_POST["email"];
	$p = $_POST["pass"];
	mysqli_query($conn, "insert into anggota (id, username, email, password) values (0, '$u', '$e', '$p')") or die(mysqli_error($conn));
	header("Location: login.php");
}
?>
<html>
<head>
	<title>Sign Up</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<!-- Custom styles for this template -->
	<!-- <link rel="stylesheet" href="css/carousel.css"> -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<script>
  		function checkForm(form) {
  		    var cek;
  		    if(form.uname.value == "") {
  		      alert("Error: Username cannot be blank!");
  		      form.uname.focus();
  		      cek = false; return cek;
  		    }
  		    re = /^\w+$/;
  		    if(!re.test(form.uname.value)) {
  		      alert("Error: Username must contain only letters, numbers and underscores!");
  		      form.uname.focus();
  		      cek = false; return cek;
  		    }
  		    if(form.pass.value != "" && form.pass.value == form.cpass.value) {
  		      if(!checkPassword(form.pass.value)) {
  		        alert("The password you have entered is not valid!");
  		        form.pass.focus();
  		        cek = false; return cek;
  		      }
  		    } else {
  		      alert("Error: Please check that you've entered and confirmed your password!");
  		      form.pass.focus();
  		      cek = false; return cek;
  		    }
  		    cek = true;
  		    return cek;
  		}
  		  
  	</script>
  	<style>
  		body{
  		  
  		  background-color: #5f5f5f;
  		  background-image: url('images/her.png');
  		  background-size: cover;  background-position: top left;
  		  font-family: Helvetica,arial,sans-serif;
  		}
  		.help{
  		   font-size: 12px;
  		}
  		.register{
  		  border-radius: 15px;
  		  background-color: white;
  		  width: 500px;
  		  padding: 20px;
  		  border: 1px solid #66ffff;
  		  margin: 30px auto 0 auto;
  		  transition:all 5s;
  		  text-align:   center;
  		}
  		.register input[type=text], input[type=password] {
  		  height: 44px;
  		  font-size: 16px;
  		  width: 100%;
  		  margin-bottom: 10px;
  		  background: #fff;
  		  border: 1px solid #d9d9d9;
  		  border-top: 1px solid #c0c0c0;
  		  border-radius: 8px;
  		}
  		.register input[type=submit] {
  		  height: 44px;
  		  font-size: 16px;
  		  width: 100%;
  		  margin-bottom: 10px;
  		  border: 1px solid #d9d9d9;
  		  border-top: 1px solid #c0c0c0;
  		  padding: 0 8px;
  		  margin-bottom: 10px;
  		  position: relative;
  		  border-radius: 8px;
  		}
  		h1{
  		  text-align: center;
  		}
  		input{
  		  width: 480px;
  		  margin-bottom: 25px;
  		  border: 1px solid #008080;
  		  height: 20px;
  		  border-radius: 8px;
  		}
  		input[type=submit]{
  		  width: 100px;
  		  padding-left: 0;
  		  margin-left: 0;
  		  border-radius: 8px;
  		}
  	</style>
</head>
<body>
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
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="register">
			<h2>Sign Up</h2>
			<form method="post" id="regis" action="" onsubmit="return checkForm(this);">
					<input type="text" name="uname" class="form-control" placeholder="Username">
					<input type="text" name="email" class="form-control" placeholder="Email">
					<input type="password" name="pass" class="form-control" placeholder="Password">
					<input type="password" name="cpass" class="form-control" placeholder="Confirm Password">
					<input type="submit" name="submit" value="Sign Up">
			</form>
			<div class="help">
				Already have an account? <a href="login.php">Sign in here</a>
			 </div>
		</div>
	</div>

	<!-- FOOTER -->
	<footer class="container-fluid text-center">
		<a href="#here" title="To Top"> 
			<span class="glyphicon glyphicon-chevron-up"> </span>
		</a>
		<p style="color: #ffffff">
			Made by Dea, Karina, Novita, Valerie
		</p>
	</footer>
</body>
</html>