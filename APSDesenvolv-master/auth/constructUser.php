<?php
session_start();
include("../model/userClass.php");

$row = $_SESSION['row'];

$user = new User;

$user->setUserID($row[0]);
$user->setFirstName($row[1]);
$user->setLastName($row[2]);
$user->setEmail($row[3]);
$user->setPicture($row[6]);

$firstName = $user->getFirstName();
$lastName = $user->getLastName();
$fullName = $firstName." ".$lastName;
$userId = $user->getUserID();
$email = $user->getEmail();
$picture = $user->getPicture();

$_SESSION['userId'] = $userId;
$_SESSION['firstName'] = $firstName;
$_SESSION['lastName'] = $lastName;
$_SESSION['fullName'] = $fullName;
$_SESSION['email'] = $email;
$_SESSION['picture'] = $picture;
//echo base64_encode($_SESSION['picture']);

header('Location: ../home.php');
exit();