<?php

class Owner
{
 public $firstname;

 public $name;

 public $phone;
}
function doSomethingWithInteger(int $i){
    $i *= 2;
}
function doSomethingWithObjet(Owner $o){
    $o->name = "Julien";
}

   $i = 2;
   $i2 = $i;
   $i2++;

   echo '$id vaut :' .$i .'<br>';
   echo '$id2 vaut :' .$i2 .'<br>';

$objet= new Owner();
$objet->name = "Bob";

echo 'le nom de $objet est' .$objet->name .'<br>';

$objet2=$objet;
$objet2->name = "Bertrant";


echo 'le nom de $objet est ' . $objet2->name . "<br />";

echo 'le nom de $objet est ' . $objet->name . "<br />";

$foo = new Owner();
$foo->name = "Foo";
echo $foo->name . '<br>';
doSomethingWithObjet($foo);
echo $foo->name . '<br>';

?>