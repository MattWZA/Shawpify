<?php
	session_start();
?>
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
	<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' integrity='sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN' crossorigin='anonymous'>
	
	<!--Custom CSS-->
	<link rel='stylesheet' href='styles/shawpify.css'>
  </head>
  
  <body>
	
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
					<?php
						if(isset($_SESSION['username'])){
							echo "<li><a href='signout.php'><span class='glyphicon glyphicon-user'></span> Sign Out</a></li>";
						} else {
							echo "<li><a href='signin.php'><span class='glyphicon glyphicon-user'></span> Sign In</a></li>";
						}
					?>
					
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