<?php
    class Cat{

        public static $counter= 0;

        private $name;
        private $age;

        public function __construct(string $name,int $age){
            self::$counter;
            $this->age = $age;
            $this->name = $name;
          
        }
        
        public static function staticMethod(string $foo){
            return "foo";
        }

        public function __toString(){
            return "le nom du chat est : {$this->name}";
        }

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

?>