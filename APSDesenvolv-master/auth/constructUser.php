<?php
session_start();

include("../model/userClass.php");

$row = $_SESSION['row'];

$user = new User;

$user->setFirstName("Gabriel");

printf($user->getFullName());
