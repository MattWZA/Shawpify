<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Basics</title>
</head>
<body>
<?php
	/*
	$myArray = array('Hello','Goodbye','Good Day!');

	// Control systems
	
	echo('<ul>');
	for($i=0; $i<sizeof($myArray); $i++){
		echo 
		'<li>'.$myArray[$i].'</li>';
	}
	echo('</ul>');

	echoString('This is a test');
	function echoString($string){
		echo '<p>'.$string.'</p>';
	}
	*/

	include 'phpobjects.php';

	$myInstance = new MyClass("This is instance 1");
	$newInstance = new MyClass("This is instance 2");

	$myInstance->displayFoo();
	$newInstance->displayFoo();
?>
</body>
</html>