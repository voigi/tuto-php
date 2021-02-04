<?php

include 'errors.php';

require_once 'Cat.php';
require_once 'CatDAO.php';
require_once 'CatService.php';

session_start();
$action = $_GET['action'];

$nom = $_POST['nom'];
$poids = $_POST['poids'];
$age = $_POST['age'];

$cat = new Cat();
$cat->setName($nom);
$cat->setAge(intval($age));
$cat->setPoids(floatval($poids));

//instantier le 'modele'
$catService = new CatService();
$result = $catService->createCat($cat);

if ($result instanceof Cat) {
	$id = $result->getId();
	header('Location: details.php?id=$id');
} else {
	$_SESSION['errors'] = $result;
	header('Location: new.php');
}
//appeler les méthodes du modele qui enregistre le chat
//le modele, va nous renvoyer le chat nouvellement créer.

//afficher la vue 'details' du chat.

//ex1: créer la base de données, ainsi que la table chat :
  //table chat : nom (varchar 255, age entier, weigth float, date d'admission datetime)
  // + ID auto incrémenté
  // toutes les données sont obligatoires