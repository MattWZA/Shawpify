<?php
	session_start();
	if(!isset($_SESSION['isPremiumMember'])) {
		die("Error");
	} else {
		if(!$_SESSION['isPremiumMember']){
			header("Location: index.php");
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Members</title>
</head>
<body>
	<h1>Members area</h1>
	<p>This page is only accessible to members</p>
</body>
</html>