<?php

	//Test if username and password POST variables are set
	if(!isset($_POST['username']) || !isset($_POST['password'])){
		die("Error: incorrect POST variables");
	}

	//Here onwards, $_POST['username'] and $_POST['password'] actually exist

	session_start();

	//password checking vs database stored password value for the account that has the same username as the username posted value

	//make sure that the POST variables are safe because a hacker could feasibly pretend to be our login page


	$_SESSION['username'] = $_POST['username'];
	$_SESSION['isPremiumMember'] = true;
	
	header("Location: index.php");
