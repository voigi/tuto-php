<?php

   class Cat{
       private $name;
       private $poids;
       private $age;
       private $admission;

        public  function getName(){
            return $this->name;
        }
        public  function setName(string $name){
            $this->name = $name;
        }
        public  function getPoids(){
        return $this->poids;
        }
            public  function setPoids(float $poids){
                $this->poids = $poids;
        }
       public  function getAge(){
           return $this->age;
        }
        public  function setAge(int $age){
            $this->age = $age;
        }
        public  function getAdmission(){
            return $this->admission;
        }
        public  function setAdmission(\DateTime $admission){
            $this->admission = $admission;
        }
        public function __construct(string $name,float $poids,int $age){
            $this->name = $name;
            $this->poids = $poids;
            $this->age = $age;
        }
   }
  
?>