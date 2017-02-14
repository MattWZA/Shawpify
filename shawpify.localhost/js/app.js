$(document).ready(function(){

	// Initialise tooltips
	$('[data-toggle="tooltip"]').tooltip(); 

	// Thumbnail link click to load images
	function setClickHandlers(){
		$('.caption>h4>a').on('click', function(event){
			event.preventDefault();

			$this = $(this);

			
			$.getJSON($this.attr('href'), {product:$this.html()}, function(json){
				$('#carousel').fadeOut(200, function(){
					$carouselImages = $('#carousel .slide-image');

					for (i = 0; i < 3; i++) {
						$($carouselImages[i]).attr("src", json[i]);
					}

					$('#carousel').fadeIn(200);
				})
				
			});
		});
	}



	// Load Products
	$.getJSON('inc/products.php', function(json){
		$products = $('#products');
		$products.find(".col-md-4").remove();
		for(i=0; i<json.length; i++){
			var prod = json[i];
			$prod = $("<div class='col-md-4'></div>");
			$thumb = $("<div class='thumbnail'></div>").appendTo($prod); 
			$("<img src='http://placehold.it/320x150' alt='Thumbnail Image'>").appendTo($thumb);
			$caption = $("<div class='caption'></div>").appendTo($thumb);
			$("<h4 class='pull-right'>$" + prod.price + "</h4>").appendTo($caption);
			$("<h4><a href='inc/productimages.php'>" + prod.name + "</a></h4>").appendTo($caption);
			$ratings = $("<div class='ratings'></div>").appendTo($caption);
			$("<p class='pull-right'>" + prod.reviews +" reviews</p>").appendTo($ratings);
			$stars = $("<p></p>").appendTo($ratings);
			for(j=0; j<5; j++){
				if (j+1 <= prod.rating) {
					$("<span class='glyphicon glyphicon-star'></span>").appendTo($stars);
				} else {
					$("<span class='glyphicon glyphicon-star-empty'></span>").appendTo($stars);
				}
			}

			$products.append($prod);
							
		}

		setClickHandlers();
	});

})

	
