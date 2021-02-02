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

 $john = new Owner();
 $john->firstname = "John";
 $john->name = "Doe";
 $john->phone = "06.00.00.00.00";

 $jane = new Owner();
 $jane->firstname = "Jane";
 $jane->name = "Doe";
 $jane->phone = "06.00.00.00.01";

 $cat1 = new Cat();
 $cat1->name = "Minette";
 $cat1->age = 5;
 $cat1->weight = 3.5;
 $cat1->owner = $john;
 $cat1->greetings = ['Foo','Foofoo','FooBar'];


 $cat2 = new Cat();
 $cat2->name = "Sir la Patoune";
 $cat2->age = 11;
 $cat2->weight = 7;
 $cat2->owner = $jane;

 
 $cat3 = new Cat();
 $cat3->name = "Minou";
 $cat3->age = 1;
 $cat3->weight = 2;
 $cat3->owner = $jane;
 

$cat_array = [$cat1,$cat2,$cat3];

?>
<table border = 1>
 <thead>
    <th>
      Nom
    </th>
    <th>
      Age
    </th>
    <th>
      Poids
    </th>
    <th>
      Salutation
    </th>
    <th>
      Proprietaire
    </th>
 </thead>
 <tbody>
 <tr>
   <?php foreach ($cat_array as $c) { ?>
   <tr>
    <td><?php echo $c->name?></td>
    <td><?php echo $c->age?></td>
    <td><?php echo $c->weight?></td>
    <td><?php echo $c->sayHello()?></td>
    <td><?php echo $c->owner->firstname." ". $c->owner->name?></td>  
   </tr>
   <?php  
   }?>
 </tr>
 </tbody>
</table>

