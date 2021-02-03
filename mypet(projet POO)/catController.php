<?php
include 'errors.php';

require_once 'Cat.php';
require_once 'CatDAO.php';
require_once 'CatService.php';

$nom = $_POST['nom'];
$poids = $_POST['poids'];
$age = $_POST['age'];

$cat = new Cat();
$cat->setName($nom);
$cat->setAge($age);
$cat->setPoids($poids);

//instantier le 'modele'
$catService = new CatService();
$catService->createCat($cat);
//appeler les méthodes du modele qui enregistre le chat
//le modele, va nous renvoyer le chat nouvellement créer.

//afficher la vue 'details' du chat.

//ex1: créer la base de données, ainsi que la table chat :
  //table chat : nom (varchar 255, age entier, weigth float, date d'admission datetime)
  // + ID auto incrémenté
  // toutes les données sont obligatoires
?>