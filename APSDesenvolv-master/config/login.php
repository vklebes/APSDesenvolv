<?php
include('connection.php');

if(empty($_POST['email']})) || empty($_POST{'password'})) {
    header('Location: pages/index.php');
    exit();
}

$email = mysql_real_escape_string($_POST[$connection,'email']);
$password = mysql_real_escape_string($_POST[$connection,'password']);
 
$query = "SELECT * FROM users WHERE Email = $email and Password = $password;"