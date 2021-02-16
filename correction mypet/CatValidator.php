<?php

/**
 * Classe chargé de la validation des donnée de type Cat
 */
class CatValidator {


  public static function validate(Cat $cat){
    $error = [];
    //verif du poids
    if(empty($cat->getWeigth()) || $cat->getWeigth() <= 0){
      $error['poids'] = "Le poids est obligatoire";
    }
    if($cat->getWeigth() > 50){
      $error['poids'] = "Un chat de 50 kg ça s'appelle un puma";
    }

    //verif du nom
    if(empty($cat->getName())){
      $error['name'] = "Le nom est obligatoire";
    }
    if(strlen($cat->getName()) > 50){
      $error['name'] = "Le nom ne peut faire plus de 255 caractères";
    }

    //verif de l'age
    if(empty($cat->getAge()) || $cat->getAge() < 0){
      $error['age'] = "L'age du chat ne peut être négatif";
    }
    if($cat->getAge() > 25){
      $error['age'] = "L'age max du chat est de 25 ans";
    }

    return $error;
  }
}
