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
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
      		width: 70%;
      		margin: auto;
  		}
		/* GLOBAL STYLES
		-------------------------------------------------- */
		/* Padding below the footer and lighter body text */

		body {
		  padding-top: 3rem;
		  padding-bottom: 3rem;
		  color: black;
		}


		/* CUSTOMIZE THE CAROUSEL
		-------------------------------------------------- */

		/* Carousel base class */
		.carousel {
		  margin-bottom: 4rem;
		}
		/* Since positioning the image, we need to help out the caption */
		.carousel-caption {
		  bottom: 3rem;
		  z-index: 10;
		}

		/* Declare heights because of positioning of img element */
		.carousel-item {
		  height: 32rem;
		  background-color: #777;
		}
		.carousel-item > img {
		  position: absolute;
		  top: 0;
		  left: 0;
		  min-width: 100%;
		  height: 32rem;
		}


		/* MARKETING CONTENT
		-------------------------------------------------- */

		/* Center align the text within the three columns below the carousel */
		.marketing .col-lg-4 {
		  margin-bottom: 1.5rem;
		  text-align: center;
		}
		.marketing h2 {
		  font-weight: 400;
		}
		.marketing .col-lg-4 p {
		  margin-right: .75rem;
		  margin-left: .75rem;
		}
		.rounded-circle{
		  border-radius: 50%;
		}


		/* Featurettes
		------------------------- */

		.featurette-divider {
		  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
		}

		/* Thin out the marketing headings */
		.featurette-heading {
		  font-weight: 300;
		  line-height: 1;
		  letter-spacing: -.05rem;
		}


		/* RESPONSIVE CSS
		-------------------------------------------------- */

		@media (min-width: 40em) {
		  /* Bump up size of carousel content */
		  .carousel-caption p {
		    margin-bottom: 1.25rem;
		    font-size: 1.25rem;
		    line-height: 1.4;
		  }

		  .featurette-heading {
		    font-size: 50px;
		  }
		}

		@media (min-width: 62em) {
		  .featurette-heading {
		    margin-top: 7rem;
		  }
		}

  	</style>
</head>
<body id="here">	
	<nav class="navbar navbar-default navbar-fixed-top" style="background-color: #CDDFF4">
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
	
	<div id="myCarousel" class="carousel slide" data-ride="carousel" style="background-color: #f2f497;">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/wannaone 1-1_0.jpg" alt="Wanna One" style="width:550px; height: 550px;">
				<div class="carousel-caption">
					<h2>Wanna One - Nothing Without You (Repackage)</h2>
					<button type="button" class="btn btn-default">Order Now</button>
				</div>
			</div>

			<div class="item">
				<img src="images/twice-twicetagram.jpg" alt="Twice" style="width:550px; height: 550px;">
				<div class="carousel-caption">
					<h2>Twice - Twicetagram</h2>
					<button type="button" class="btn btn-default">Order Now</button>
				</div>
			</div>

			<div class="item">
				<img src="images/bts-love-yourself.jpg" alt="BTS" style="width:550px; height: 550px;">
				<div class="carousel-caption">
					<h2>BTS - Love Yourself</h2>
					<button type="button" class="btn btn-default">Order Now</button>
				</div>
			</div>

			<div class="item">
				<img src="images/seventeen-ai1.jpg" alt="Seventeen" style="width:550px; height: 550px;">
				<div class="carousel-caption">
					<h2>Seventeen - AI1</h2>
					<button type="button" class="btn btn-default">Order Now</button>
				</div>
			</div>

		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<!-- Wrap the rest of the page in another container to center all the content -->
	<div class="container marketing">
		<!-- Three columns of text below the carousel -->
		<div class="row">
			<div class="col-lg-6" align="center">
				<img class="rounded-circle" src="images/bts.jpg" alt="NewRelease" width="140" height="140">
				<h2>New Release</h2>
				<p>This is the new release's description.</p>
				<p>
					<a class="btn btn-secondary" href="newrelease.php" role="button">View Details</a>
				</p>
			</div>
			<div class="col-lg-6" align="center">
				<img class="rounded-circle" src="images/merchandise.jpg" alt="NewMerchandise" width="140" height="140">
				<h2>New Merchandise</h2>
				<p>This is the merchandise's description.</p>
				<p>
					<a class="btn btn-secondary" href="newmerch.php" role="button">View Details</a>
				</p>
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