<?php

/*
$_POST['username']
$_POST['email']
$_POST['password']
*/

// test if required data is posted
if (!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password'])){
	die("Data error");
}

// validate data
if(strlen($_POST['username']) > 150){
	die("username too long!");
}

if (!strpos($_POST['email'], '@')){
	die("Invalid email address");
}


include_once 'config.php';

$conn = new mysqli(SERVER_NAME, USERNAME, PASSWORD, DATABASE);

if ($conn->connect_error){
	die("Connection failed".$conn->connect_error);
}

$username = $_POST['username'];

// Test if username exists
$stmt = $conn->prepare("SELECT count(*) FROM `users` WHERE `username` = ?");
$stmt->bind_param("s", $username);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
if ($count>0) {
	die("Error: username already exists");
}
$stmt->close();

// Insert new user record
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$stmt = $conn->prepare("INSERT INTO `users` (`username`, `email`, `password`) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);
$stmt->execute();
$conn->close();

header("Location: ../signin.php");
