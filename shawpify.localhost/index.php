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
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	
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
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse velit ligula, cursus at consectetur et, laoreet aliquet leo. Praesent tincidunt nisl sit amet erat egestas molestie bibendum eu nunc. Aenean porttitor dui eleifend lacus consequat rutrum nec vel est. Sed et sodales felis. Vivamus dignissim neque est, quis gravida diam aliquet id. Morbi id efficitur tellus. In at nibh id urna dictum suscipit sed eu justo.</p>

			<p>Mauris porttitor dolor nec sapien mattis, vel auctor neque suscipit. Ut ullamcorper, nunc at dignissim pretium, arcu arcu condimentum ante, sed scelerisque leo augue sit amet sapien. Phasellus ut tortor fringilla, dapibus nisl a, dignissim lorem. Ut suscipit nisl sem, eu rutrum justo ultrices et. Cras condimentum erat eget justo facilisis, in efficitur arcu volutpat. Sed quis interdum nisl, ac malesuada lorem. Phasellus porttitor scelerisque ligula, at maximus ex hendrerit ac. Proin metus nisi, egestas at auctor ac, commodo sit amet augue. Duis rutrum dolor hendrerit quam rhoncus, in ornare sem finibus. Ut enim enim, vehicula id sodales eget, molestie et enim. Nunc vel ullamcorper enim, at pulvinar lorem.</p>

			<p>Aenean id mi non odio posuere pharetra posuere et massa. Phasellus id finibus purus. Aliquam pretium convallis nibh, vitae lobortis felis maximus eu. Nunc ac lorem finibus, sollicitudin turpis vestibulum, varius eros. Integer scelerisque scelerisque nulla ac egestas. Etiam ultrices purus maximus pharetra ornare. Vestibulum tempor elementum ex, sed pulvinar orci. Nullam lorem massa, suscipit in auctor at, tincidunt sit amet libero. Etiam rutrum dui ligula, suscipit vehicula tellus pharetra ut. Aenean ut leo quis turpis vulputate convallis sit amet et elit. Mauris efficitur sit amet mi nec convallis. Suspendisse in vestibulum quam, eget laoreet nisl. Duis pellentesque nisl in fermentum condimentum. Fusce eget ullamcorper urna, id aliquam tortor.</p>
		</div>
	</main>
	
	<!--Footer-->
	<footer class='text-center'>
		<nav class='navbar navbar-inverse navbar-fixed-bottom'>
			<div class='container-fluid'>
				<ul class='nav navbar-nav'>
					<li class='navbar-text'>&copy Copyright <span class='thisYear'></span> Shaw Academy</li>
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
	<script src='scripts/app.js'></script>
  </body>
</html>