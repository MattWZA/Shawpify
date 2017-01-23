$(function(){

	// Get current year for copyright 
	$('.thisYear').html(new Date().getFullYear());
	
	// Initialise tooltips
	$('[data-toggle="tooltip"]').tooltip(); 
});