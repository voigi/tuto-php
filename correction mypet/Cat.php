<?php

class Cat {

  private $id;
  private $name;
  private $age;
  private $weigth;
  private $admissionDate;

  public function getId(){
      return $this->id;
  }

  public function setId(int $id){
    $this->id = $id;
  }

  public function getName(){
    return $this->name;
  }

  public function setName(string $name){
    $this->name = $name;
  }

  public function getAge(){
    return $this->age;
  }

  public function setAge($age){
    $this->age = $age;
  }

  public function getWeigth(){
    return $this->weigth;
  }

  public function setWeigth(float $weigth){
    $this->weigth = $weigth;
  }

  public function getAdmissionDate(){
    return $this->admissionDate;
  }

  public function setAdmissionDate(\DateTime $admissionDate){
    $this->admissionDate = $admissionDate;
  }

}
