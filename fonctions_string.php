<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Fonctions</title>
</head>
<body>
    <?php
    //fonctions en php
        function Bonjour(){
            echo"Bonjour à tous";
            echo"<br>";
        }

    //execution de la fonction
        Bonjour();
    function BonjourUtilisateur($prenom) 
    {
        echo 'Bonjour '.$prenom.'!';
        echo"<br>";
    }
    BonjourUtilisateur('Pierre');

    function NomAge($prenom,$age){
        echo $prenom.' a ' .$age. ' ans';
    }
    NomAge('Pierre',24);
//////////////Difference entre return et echo//////////////////

    function DireBonjour(){//la fonction enregistre bonjour ms ne l'affiche pas
        return "Bonjour";
    }
    function DireBonsoir(){//la fonction affiche bonsoir//
        echo "Bonsoir";
    }
    ///plaçons les résultats des fonctions dans une variable////////
    $bonjour = DireBonjour();
    echo'<br>';
    $bonsoir = DireBonsoir();

    echo $bonjour;
    echo $bonsoir;
    echo'<br>';

    ///Cours Webforce3//
    
    //strlen -> renvoie la longueur d'une chaîne de caractéres + strtoupper->mise en majuscule //

    $str="Bonjour le monde!"; //on obtient 17 (espace compte pour 1,les caractéres spéciaux compte pour 2)
    $test= strlen($str);
    echo $test;
    echo'<br>';
    $maj =strtoupper($str);
    echo $maj;
    echo'<br>';
    ?>
</body>
</html>