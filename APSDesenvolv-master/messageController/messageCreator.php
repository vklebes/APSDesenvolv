<?php
session_start();
include("messageConnection.php");
include("../model/messageClass.php");

$messageObjct = new Message;

$messageObjct->setAnime(mysqli_real_escape_string($connection, trim($_POST['anime'])));
$messageObjct->setMessage(mysqli_real_escape_string($connection, trim($_POST['message'])));
$messageObjct->setAuthor(mysqli_real_escape_string($connection, trim($_SESSION['fullName'])));
$messageObjct->setAuthorId(mysqli_real_escape_string($connection, trim($_SESSION['userId'])));
$messageObjct->setLikes(mysqli_real_escape_string($connection, 0));

$author = $messageObjct->getAuthor();
$authorId = $messageObjct->getAuthorId();
$anime = $messageObjct->getAnime();
$message = $messageObjct->getMessage();
$likes = $messageObjct->getLikes();


$sql = "INSERT INTO message (Author, AuthorId, Anime, Message, Likes) VALUES ('$author', '$authorId', '$anime', '$message','$likes');";

if($connection->query($sql) === TRUE) {
	$_SESSION['registerMessage_status'] = true;
}

$connection->close();

header('Location: ../home.php');
exit;
?> 