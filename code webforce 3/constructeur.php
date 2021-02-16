<?php
     class Cat
     {
        private $name;
        private $age;
        private $owner;

        public  function getAge(){
            return $this->age;
        }
        public  function setAge(int $age){
            $this->age = $age;
        }
        public  function getName(){
            return $this->name;
        }
        public  function setName(string $name){
            $this->name = $name;
        }
        public  function getOwner(){
            return $this->owner;
        }
        public  function setOwner(Owner $owner){
            $this->owner = $owner;
        }
        public function __construct(string $name,int $age,Owner $owner){
            $this->name = $name;
            $this->age = $age;
            $this->owner = $owner;
        }
    }
    class Owner
        {
        private $firstname;
        private $name;
        private $phone;

        public  function getFirstname(){
            return $this->firstname;
        }
        public  function setFirstname(string $firstname){
            $this->firstname = $firstname;
        }
        public  function getName(){
            return $this->name;
        }
        public  function setName(string $name){
            $this->name = $name;
        }
        public  function getPhone(){
            return $this->phone;
        }
        public  function setPhone(string $phone){
            $this->phone = $phone;
        }
        public function __construct(string $firstname,string $name,string $phone){
            $this->firstname = $firstname;
            $this->name = $name;
            $this->phone = $phone;
        }
    }
    $gerard = new Owner("Gerard","Blanchard","06.00.00.00.02");
    $cat = new Cat("Minette",5,$gerard);
    echo 'nom de $cat : ' .$cat->getName().'<br>';
    echo 'nom du posseseur de chat : ' .$cat->getOwner()->getName().'<br>';

    echo 'prenom de $owner : ' .$gerard->getFirstname().'<br>';
    echo 'nom de $owner : ' .$gerard->getName().'<br>';
    echo 'telephone de $owner : ' .$gerard->getPhone().'<br>';

?>