<?php
session_start();
include('connection.php');

if(empty($_POST['email']) || empty($_POST['password'])){
    header('Location: ../index.php');
    exit();
};

$email = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']);

$query = "select * from users where email='{$email}' and password = md5('{$password}')";
$result = mysqli_query($connection, $query);

$row = mysqli_num_rows($result);

if($row == 1){
    $_SESSION['email'] = $email;
    header('Location: ../home.php');
    exit();
}
else{
    $_SESSION['not_auth'] = true;
	header('Location: ../index.php');
	exit();
}