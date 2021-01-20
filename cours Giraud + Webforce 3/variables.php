<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les variables<</title>
</head>
<body>
    <?php
        $departement="var"; //type string
        $chiffre= 83 ; // type int
        // $decimal= 4.12; // type float
        // $bool=true; // type boolean

            //pour afficher on utilise echo//
            echo $departement .'<br>';
            echo $chiffre .'<br>';

        //concatenons

     echo 'Le ' . $departement . ' est un departement de France <br><br>';
     
///////////////////////////////////////////////Operateurs numeriques///////////////////////////////
    $nombre1 = 5 ;
    $nombre2 = 3;

    $addition = $nombre1 + $nombre2;
    $soustraction = $nombre1 - $nombre2;
    $multiplication = $nombre1 * $nombre2;
    $division = $nombre1 / $nombre2;
    $modulo = $nombre1 % $nombre2;

    echo 'Le resultat de l\'addition est '.$addition.'<br>';
    echo 'Le resultat de la soustraction est '.$soustraction.'<br>';
    echo 'Le resultat de la multiplication est '.$multiplication.'<br>';
    echo 'Le resultat de la division est '.$division.'<br>';
    echo 'Le resultat du modulo est '.$modulo.'<br><br>';

    echo $nombre1.'+'.$nombre2.'<br><br>';

    $addition = 20;
    $soustraction = $soustraction - $soustraction;
    $multiplication = $addition;

    echo 'La Nouvelle valeur de la variable addition est '. $addition.'<br>';
    echo 'La Nouvelle valeur de la variable soustraction est '. $soustraction.'<br>';
    echo 'La Nouvelle valeur de la variable multiplication est '. $multiplication.'<br>';

     // On peut intervertir les valeurs sans les ecraser//

        $a=10;
        $b=5;
        $c=$a;// c vaut 10
        $a=$b;// a vaut 5
        $b=$c;// b vaut 10
    
?>
</body>
</html>