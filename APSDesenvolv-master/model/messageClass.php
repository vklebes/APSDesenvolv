<?php
class Message {

  public $authorId;
  public $author;
  public $messageId;
  public $message;
  public $anime;
  public $likes;

  function setAuthorId($authorId) {
    $this->authorId = $authorId;
  }
  function getAuthorId() {
    return $this->authorId;
  }
  function setAuthor($author) {
    $this->author = $author;
  }
  function getAuthor() {
    return $this->author;
  }
  function setMessage($message) {
    $this->message = $message;
  }
  function getMessage() {
    return $this->message;
  }
  function getMessageId() {
    return $this->MessageId;
  }
  function setMessageId($messageId) {
    $this->messageId = $messageId;
  }
  function setAnime($anime) {
    $this->anime = $anime;
  }
  function getAnime() {
    return $this->anime;
  }
  function setLikes($likes) {
    $this->likes = $likes;
  }
  function getLikes() {
    return $this->likes;
  }
}
?>