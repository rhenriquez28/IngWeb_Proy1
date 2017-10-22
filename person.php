<?php
class Person {
  private $name;
  private $lastName;
  private $birthdate;
  private $email;
  private $interests[];

  public function getName() {
    return $this->name;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function getLastName(){
    return $this->lastName;
  }

  public function setLastName($lastName){
    $this->lastName = $lastName;
  }

  public function getBirthdate(){
    return $this->birthdate;
  }

  public function setBirthdate($birthdate){
    $this->birthdate = $birthdate;
  }

  public function getEmail(){
    return $this->email;
  }

  public function setEmail($email){
    $this->email = $email;
  }

  public function getInterests(){
    return $this->intersts;
  }

  public function setInterests($interests[]){
    $this->interests = $interests;
  }
}

 ?>
