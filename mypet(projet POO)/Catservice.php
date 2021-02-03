<?php
require_once 'Cat.php';
require_once 'CatValidator.php';
/**
 * Classe chargée d'orchestrer la logique métier
 * 
 */
class CatService{
    public function createCat(Cat $cat){
        $validator = new CatValidator();
        $validator->validate($cat);
        //renseigne la date courante comme date d'admission
        $cat->setDate(new DateTime());
        //puis enregistrement en BDD
        $dao= new Dao();
        $dao->insert($cat);
    }
   
}
?>