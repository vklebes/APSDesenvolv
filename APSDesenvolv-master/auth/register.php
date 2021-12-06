<?php
session_start();
include("connection.php");

$FirstName = mysqli_real_escape_string($connection, trim($_POST['firstname']));
$LastName = mysqli_real_escape_string($connection, trim($_POST['lastname']));
$Email = mysqli_real_escape_string($connection, trim($_POST['email']));
$Password = mysqli_real_escape_string($connection, trim(md5($_POST['password'])));

$sql = "select count(*) as total from users where Email = '$Email'";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['user_exists'] = true;
	header('Location: ../index.php');
	exit;
}

$sql = "INSERT INTO users (FirstName, LastName, Email, Password, timestamp) VALUES ('$FirstName', '$LastName', '$Email', '$Password', NOW());";


if($connection->query($sql) === TRUE) {
	$_SESSION['register_status'] = true;
}

$connection->close();

header('Location: ../home.php');
exit;
?>