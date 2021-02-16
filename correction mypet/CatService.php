<?php

require_once 'Cat.php';
require_once 'CatValidator.php';

/**
 * Classe chargée d'orchestrer la logique métier
 */
class CatService{

  public function createCat(Cat $cat){
    //validation des données
    $errors = CatValidator::validate($cat);

    if(!empty($errors)){
      return $errors;
    }

    //renseigne la date courante comme date d'admission
    $cat->setAdmissionDate(new DateTime());
    //puis enregistrement en BDD
    $dao = new CatDAO();
    $dao->insert($cat);
    return $cat;
  }

  public function updateCat(Cat $cat, int $id){

  }


}
