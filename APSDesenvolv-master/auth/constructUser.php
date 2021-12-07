<?php
session_start();
include("../model/userClass.php");

$row = $_SESSION['row'];

$user = new User;

$user->setUserID($row[0]);
$user->setFirstName($row[1]);
$user->setLastName($row[2]);
$user->setEmail($row[3]);


$fullName = $user->getFirstName()." ".$user->getLastName();
$userId = $user->getUserID();
$email = $user->getEmail();

$_SESSION['userId'] = $userId;
$_SESSION['fullName'] = $fullName;
$_SESSION['email'] = $email;

header('Location: ../home.php');
exit();