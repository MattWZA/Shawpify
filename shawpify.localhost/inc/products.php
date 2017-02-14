<?php
	require('product.php');

	header('Content-Type: application/json');


	$products = array();

	array_push($products, new Product('First Product', 50000, 5, 4, array('First Product Image 1', 'First Product Image 2', 'First Product Image 3')));
	array_push($products, new Product('Second Product', 50000, 5, 4, array('Second Product Image 1', 'Second Product Image 2', 'Second Product Image 3')));
	array_push($products, new Product('Third Product', 50000, 5, 4, array('Third Product Image 1', 'Third Product Image 2', 'Third Product Image 3')));
	array_push($products, new Product('Forth Product', 50000, 5, 4, array('Forth Product Image 1', 'Forth Product Image 2', 'Forth Product Image 3')));
	array_push($products, new Product('Fifth Product', 50000, 5, 4, array('Fifth Product Image 1', 'Fifth Product Image 2', 'Fifth Product Image 3')));
	array_push($products, new Product('Sixth Product', 50000, 5, 4, array('Sixth Product Image 1', 'Sixth Product Image 2', 'Sixth Product Image 3')));

	echo json_encode($products);