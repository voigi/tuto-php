<?php
    class Cat{
        private $name;
        private $age;

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
    }

   
    $cat = new Cat();
    $cat->setAge(2);
    echo $cat->getAge();
    echo '<br>';
    $cat->setName("Minou");
    echo $cat->getName();

?>