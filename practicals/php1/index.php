<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PHP Class Demo</title>
</head>
<body>
<?php
	
	include_once 'class/Student.php';

	$student = new Student('Ben', new DateTime('1967-12-13'), array('CS101', 'CS105', 'WD202'));

	echo("<p>The student's name is: ");
	echo $student->name;
	echo("</p><p>The student's age is: ");
	echo $student->age;
	echo("</p><p>The student's class list is: ");
	echo $student->classList;
	echo ("</p>");
?>
</body>
</html>