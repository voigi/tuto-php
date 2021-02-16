<?php

require_once 'Cat.php';
require_once 'CatValidator.php';
/**
 * Classe chargée d'orchestrer la logique métier
 *
 */
class CatService
{
	public function createCat(Cat $cat)
	{
		$validator = new CatValidator();
		$errors = $validator->validate($cat);
		if (!empty($errors)) {
			return $errors;
		}
		//renseigne la date courante comme date d'admission
		$cat->setAdmission(new DateTime());
		//puis enregistrement en BDD
		$dao = new CatDao();
		$dao->insert($cat);

		return $cat;
	}
}