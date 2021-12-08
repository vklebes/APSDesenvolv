<?php
session_start();
include("connection.php");

$FirstName = mysqli_real_escape_string($connection, trim($_POST['firstName']));
$LastName = mysqli_real_escape_string($connection, trim($_POST['lastName']));
$Email = mysqli_real_escape_string($connection, trim($_POST['email']));
$Picture = mysqli_real_escape_string($connection, trim(($_POST['picture'])));
$userId = $_SESSION['userId'];
$Picture = base64_decode($Picture);

$sql = "UPDATE users SET FirstName = '$FirstName' , LastName = '$LastName' , Email = '$Email', Picture = '$Picture' WHERE user_id = '$userId'";

if($connection->query($sql) === TRUE) {
	$_SESSION['register_status'] = true;
}
else{
    echo 'error';
}

$connection->close();

// header('Location: ../home.php');
// exit;
?> 