<?php
	include 'inc/head.inc.php';
?>

	<!--Header-->
	<header>
		<div class='container-fluid'>
			<div class='jumbotron text-center'>
				<h1>Shawpify</h1>

				<?php
					if(isset($_SESSION['username'])){
						echo '<p>Welcome back, '.$_SESSION['username'];
					} else {
						echo '<p>Offering a large range of products from consumer electronics to cars</p>';
					}
				?>
				
			</div>
		</div>
	</header>
	
	
	
	<!--Body-->
	<main>
		<div class='container'>
			<div class='row'>

				<div class='col-md-3'>
					<p class='lead'>Product Range</p>
					
					<p>Computers</p>
					<div class='list-group'>
						<a href='#' class='list-group-item'>Category 1</a>
						<a href='#' class='list-group-item'>Category 2</a>
						<a href='#' class='list-group-item'>Category 3</a>
					</div>
					
					<p>Cars</p>
					<div class='list-group'>
						<a href='#' class='list-group-item'>Category 4</a>
						<a href='#' class='list-group-item'>Category 5</a>
						<a href='#' class='list-group-item'>Category 6</a>
					</div>
				</div>

				<div class='col-md-9'>
					<div class='row carousel-holder'>
						<div class='col-md-12'>
							<!--Carousel-->
							<div id='carousel' class='carousel slide' data-ride='carousel'>
								<ol class='carousel-indicators'>
									<li data-target='#carousel' data-slide-to='0' class='active'></li>
									<li data-target='#carousel' data-slide-to='1' class='active'></li>
									<li data-target='#carousel' data-slide-to='2' class='active'></li>
								</ol>
								<div class='carousel-inner text-center'>
									<div class='item active'>
										<img class='slide-image img-responsive center-block' src='img/car1.jpg' alt='Red car' >
									</div>
									<div class='item'>
										<img class='slide-image img-responsive center-block' src='img/car2.jpg' alt='Black car' >
									</div>
									<div class='item'>
										<img class='slide-image img-responsive center-block' src='img/car3.jpg' alt='Purple car' >
									</div>
								</div>
								<a class='left carousel-control' href='#carousel' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></a>

								<a class='right carousel-control' href='#carousel' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></a>
							</div>

						</div>
					</div>

					<div id='products' class='row'>
						<!--Thumbnails-->
						<?php
							include_once 'inc/template.php';
							$thumbnail = new Template('product_thumbnail.html', $contentExample);
							
							for ($i=0; $i < $thumbnail->noOfResults; $i++) { 
								echo "<div class='col-md-4'>";
								echo $thumbnail->output();
								echo "</div>";
							}							
						?>
					</div>

					<div class="row">
						<div class='text-center'>
							<nav aria-label='Page navigation'>
								<ul class='pagination'>
									<li>
										<a href='#' aria-label='Previous'>
											<span aria-hidden='true'>&laquo;</span>
										</a>
									</li>
									<li><a href='#'>1</a></li>
									<li><a href='#'>2</a></li>
									<li><a href='#'>3</a></li>
									<li><a href='#'>4</a></li>
									<li><a href='#'>5</a></li>
									<li>
										<a href='#' aria-label='Previous'>
											<span aria-hidden='true'>&raquo;</span>
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
<?php
	include 'inc/foot.inc.php';
?>