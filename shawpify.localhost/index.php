<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Shawpify demo site</title>

    <!--Bootstrap CSS-->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' integrity='sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u' crossorigin='anonymous'>
	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->

	<!--Font-Awesome-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
	<!--Custom CSS-->
	<link rel='stylesheet' href='styles/shawpify.css'>
  </head>
  <body>
	
	<!--Header-->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>Shawpify</h1>
				<p>Offering a large range of products from consumer electronics to cars</p>
			</div>
		</div>
	</header>
	
	<!--Nav-->
	<nav class='navbar navbar-fixed-top navbar-inverse'>
		<div class='container-fluid'>
			<!--brand and toggle-->
			<header class='navbar-header'>
				<a class='navbar-brand' href='/'>
					Shawpify Home
				</a>
				<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#menu'>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>
			</header>
			
			<!--Menu-->
			<div id='menu' class='collapse navbar-collapse'>
				<ul class='nav navbar-nav'>
					<li><a href='#'>Products</a></li>
					<li><a href='#'>Deals</a></li>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='#'><span class='glyphicon glyphicon-user'></span> Sign In</a></li>
					<li><a href='#'><span class='glyphicon glyphicon-shopping-cart'></span> Cart</a></li>
					<li>
						<form class='navbar-form' action='#' method='POST'>
							<div class='input-group'>
								<input type='text' class='form-control' placeholder='Search for a product' />
								<span class='input-group-btn'>
								<button type='submit' class='btn btn-primary'><span class='glyphicon glyphicon-search'></span></button>
								</span>
							</div>
						</form>
					</li>
				<ul>
			
			</div>
		</div>
	</nav>
	
	<!--Body-->
	<main>
		<div class='container'>
			<div class='row'>

				<div class='col-md-3'>
					<p class="lead">Product Range</p>
					
					<p>Computers</p>
					<div class="list-group">
						<a href="#" class="list-group-item">Category 1</a>
						<a href="#" class="list-group-item">Category 2</a>
						<a href="#" class="list-group-item">Category 3</a>
					</div>
					
					<p>Cars</p>
					<div class="list-group">
						<a href="#" class="list-group-item">Category 4</a>
						<a href="#" class="list-group-item">Category 5</a>
						<a href="#" class="list-group-item">Category 6</a>
					</div>
				</div>

				<div class="col-md-9">
					<div class="row carousel-holder">
						<div class="col-md-12">
							<!--Carousel-->
							<div id="carousel" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel" data-slide-to="0" class="active"></li>
									<li data-target="#carousel" data-slide-to="1" class="active"></li>
									<li data-target="#carousel" data-slide-to="2" class="active"></li>
								</ol>
								<div class="carousel-inner text-center">
									<div class="item active">
										<img class="slide-image img-responsive center-block" src="img/car1.jpg" alt="Red car" >
									</div>
									<div class="item">
										<img class="slide-image img-responsive center-block" src="img/car2.jpg" alt="Black car" >
									</div>
									<div class="item">
										<img class="slide-image img-responsive center-block" src="img/car3.jpg" alt="Purple car" >
									</div>
								</div>
								<a class='left carousel-control' href='#carousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></a>

								<a class='right carousel-control' href='#carousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></a>
							</div>

						</div>
					</div>

					<div class="row">
						<!--Thumbnails-->
						<div class="col-md-4">
							<div class="thumbnail">
								<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
								<div class="caption">
									<h4 class="pull-right">$35,000</h4>
									<h4><a href="inc/productimages.php">First Product</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna.</p>
								</div>
								<div class="ratings">
									<p class="pull-right">15 reviews</p>
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="thumbnail">
								<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
								<div class="caption">
									<h4 class="pull-right">$35,000</h4>
									<h4><a href="inc/productimages.php">Second Product</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna.</p>
								</div>
								<div class="ratings">
									<p class="pull-right">15 reviews</p>
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="thumbnail">
								<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
								<div class="caption">
									<h4 class="pull-right">$35,000</h4>
									<h4><a href="inc/productimages.php">Third Product</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna.</p>
								</div>
								<div class="ratings">
									<p class="pull-right">15 reviews</p>
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="thumbnail">
								<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
								<div class="caption">
									<h4 class="pull-right">$35,000</h4>
									<h4><a href="inc/productimages.php">Forth Product</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna.</p>
								</div>
								<div class="ratings">
									<p class="pull-right">15 reviews</p>
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="thumbnail">
								<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
								<div class="caption">
									<h4 class="pull-right">$35,000</h4>
									<h4><a href="inc/productimages.php">Fith Product</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna.</p>
								</div>
								<div class="ratings">
									<p class="pull-right">15 reviews</p>
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="thumbnail">
								<img src='http://placehold.it/320x150' alt='Thumbnail Image'>
								<div class="caption">
									<h4 class="pull-right">$35,000</h4>
									<h4><a href="inc/productimages.php">Sixth Product</a></h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam enim odio, accumsan non ex at, fermentum lacinia urna.</p>
								</div>
								<div class="ratings">
									<p class="pull-right">15 reviews</p>
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star-empty"></span>
									</p>
								</div>
							</div>
						</div>
						
						<div class="text-center">
							<nav aria-label="Page navigation">
								<ul class="pagination">
									<li>
										<a href="#" aria-label="Previous">
											<span aria-hidden="true">&laquo;</span>
										</a>
									</li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li>
										<a href="#" aria-label="Previous">
											<span aria-hidden="true">&raquo;</span>
										</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</main>
	
	<!--Footer-->
	<footer class='text-center'>
		<nav class='navbar navbar-inverse navbar-fixed-bottom'>
			<div class='container-fluid'>
				<ul class='nav navbar-nav'>
					<li class='navbar-text'>
						<?php echo "Copyright &copy; " . date("Y") . " Shaw Academy"; ?>
					</li>
					<li><a href='https://www.facebook.com' target='_blank'><i class='fa fa-facebook'></i></a></li>
					<li><a href='https://plus.google.com' target='_blank'><i class='fa fa-google'></i></a></li>
					<li><a href='https://www.twitter.com' target='_blank'><i class='fa fa-twitter'></i></a></li>
				</ul>
				<ul class='nav navbar-nav navbar-right'>
					<li><a href='#'>Contact us</a></li>
					<li><a href='#'>Terms &amp; Conditions</a></li>
				</ul>
			</div>			
		</nav>
	</footer>

	<!--JAVASCRIPT-->

    <!--JQuery-->
	<script src='https://code.jquery.com/jquery-3.1.1.min.js' integrity='sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=' crossorigin='anonymous'></script>

	<!--Bootstrap JS-->
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' integrity='sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa' crossorigin='anonymous'></script>
	
	<!--Custom JS-->
	<script src='js/app.js'></script>
  </body>
</html>