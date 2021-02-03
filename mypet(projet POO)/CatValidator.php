<?php

/**
 * Classe chargé de la validation des données de type Cat
 */
class CatValidator{
    public function validate(Cat $cat){
        if (!empty($cat->getName()&& strlen($cat->getName())<=255))
{
     echo "Le nom du chat est : ".$cat->getName().'<br>';
}
else
{
    echo "le nom du chat est trop long ".'<br>';
}
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
?>