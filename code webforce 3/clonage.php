<?php
class Owner
{
 public $firstname;

 public $name;

 public $phone;
}

 class Cat
 {
     public $greetings = ["Hello","Salut","Hola"];

     public $name;

     public $age;

     public $weight;

     public $owner;

     public function sayHello(){
        $i= random_int(0,2); 
        $gr = $this->greetings[$i];
        return "the cats says : $gr";
     }
 }
$owner=new Owner();
$owner->name="Bob";


 $cat = new Cat();
 $cat->name = "Patou";
 $cat->owner = $owner;

echo 'le nom de $cat est ' .$cat->name.'<br>';
echo 'le nom de proprietaire est ' .$cat->owner->name.'<br>';

 $catCopie = clone $cat;
 echo 'le nom de $catCopie est:'.$catCopie->name.'<br>';

 echo "Renommage"."<br>";
 $catCopie->name = "Machin";

 echo 'lenom de $chat est ' .$cat->name.'<br>';
 echo 'lenom de $chat est ' .$catCopie->name.'<br>';

 echo 'le nom du proprietaire de $cat est ' .$cat->owner->name.'<br>';
 echo 'le nom de proprietaire de $catCopie est ' .$catCopie->owner->name.'<br>';

echo "Renommage Owner de catCopie en Jean.... <br/>";
$catCopie->owner->nom = "Jean";

echo 'Le nom du  Owner de $cat est : ' . $cat->owner->nom. "<br/>" ;
echo 'Le nom du  Owner de $catCopie est : ' . $catCopie->owner->nom. "<br/>" ;

 