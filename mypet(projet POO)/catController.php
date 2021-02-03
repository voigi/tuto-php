<?php
require_once 'Cat.php';

$nom = $_POST['nom'];
$poids = $_POST['poids'];
$age = $_POST['age'];

$cat = new Cat($nom,$poids,$age);
echo 'le nom du chat est '.$cat->getName().'<br>';
echo 'le poids du chat est '.$cat->getPoids().'<br>';
echo 'l\'age du chat est de '.$cat->getAge(). ' ans';

//Instensier le modele//
//appeller les methodes du modeles qui vont enregistrer le chat//
//le modele va nous envoyer le chat nouvellement creer//

//afficher le vue detail du chat//

//creer la base deonnées//
// table chat  nom varchar 255,age entier, poids float, date d'admission datetime//

?>