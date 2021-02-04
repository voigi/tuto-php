<?php

/**
 * Classe chargé de la validation des données de type Cat
 */
class CatValidator
{
	public static function validate(Cat $cat)
	{
		$error = [];

		if (empty($cat->getName())) {
			$error['name'] = ['le nom du chat est obligatoire '];
		}
		if (strlen($cat->getName()) > 255) {
			$error['name'] = ['le nom du chat est trop long '];
		}

		if (empty($cat->getPoids())) {
			$error['poids'] = ['le poids du chat est obligatoire '];
		}
		if ($cat->getPoids() > 50) {
			$error['poids'] = ['le poids du chat est trop lourd '];
		}

		return $error;

		//implementer les regles de validation :
		/*- nom est obligatoire.
		-le nom doit faire 255 caractères max de long.

		-le poids doit etre positif, max 50kg, obligatoire

		-age positif, age obligatoire, age 25 ans//

		pour chaque  regle de validation non respecté,
		renvoyé le nom du champ et un message d'erreur
		le tout ds un tableau associatif.
		*/
	}
}