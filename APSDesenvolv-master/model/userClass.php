<?php
class User {
  // Properties
  public $user_id;
  public $firstName;
  public $lastName;
  public $email;
  public $password;
  public $picture;

  // Methods
  function setUserID($user_id) {
    $this->user_id = $user_id;
  }
  function getUserID() {
    return $this->user_id;
  }
  function getFirstName() {
    return $this->firstName;
  }
  function setFirstName($firstName) {
    $this->firstName = $firstName;
  }
  function getLastName() {
    return $this->lastName;
  }
  function setLastName($lastName) {
    $this->lastName = $lastName;
  }
  function getEmail() {
    return $this->email;
  }
  function setEmail($email) {
    $this->email = $email;
  }
  function getPassword() {
    return $this->password;
  }
  function setPassword($password) {
    $this->password = $password;
  }
  function getPicture() {
    return $this->picture;
  }
  function setPicture($picture) {
    $this->picture = $picture;
  }

}
?>