<?php

session_start();
$_SESSION = array();
$params = session_get_cookie_params();
//unsert the session cookie by setting a time in the distant past
setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
session_destroy();

?>

<?php
	include "inc/head.inc.php";
?>

	<!--Header-->
	<header>
		<div class="container">
			<h1>Log Out</h1>
		</div>
	</header>
	
	
	<!--Body-->
	<main class="container">
		<p>You have been successfully logged out</p>
		<a href="signin.php" class="btn btn-primary">Log back in</a>
	</main>
	
<!--Footer-->
<?php
	include "inc/foot.inc.php";
?>