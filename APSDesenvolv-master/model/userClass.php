<?php
class User {
  // Properties
  public $firstName;
  public $lastName;
  public $email;
  public $password;
  public $picture;

  // Methods

  function getFirstName() {
    return $this->firstName;
  }
  function setFirstName($firstName) {
    $this->firstName = $firstName;
  }
  function getLastName() {
    return $this->lastName;
  }
  function setLastName($name) {
    $this->lastName = $lastName;
  }
  function getEmail() {
    return $this->email;
  }
  function setEmail($name) {
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
  function getFullName(){
      return getFirstName()  + ` ` + getLastName();
  }
}
?>