<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions_Tableaux</title>
</head>

<body>
    <?php
    //array_keys retourne les index d'un tableau dans un nouveau tableau - prend un seul argument (tableau dont on veuit repurer les index)//

    $voiture = array(
        "Citroen" => "DS3",
        "Renault" => "Clio",
        "Peugeot" => "306",
        "Peugeot2" => 306
    );
    echo '<pre>';
    print_r(array_keys($voiture, 306, false)); //les deuxieme et troisieme parametre ne sont pas obligatoire mais sont la pour tester une value//
    echo '</pre><br>';
    //array_values retourne les valeurs d'un tableau dans un nouveau tableau //

    $loisirs = array(
        "sport" => "Trail",
        "voyage" => "Ecosse",
        "musique" => "Guitare"
    );
    //on ameliore l'affichage avec pre//

    echo '<pre>';
    print_r(array_values($loisirs));
    echo '</pre><br>';

    //array_key_exists verifie si une cle existe  2 parametre(cle à rechercher,tableau)//

    $bagnole = array(
        "Citroen" => "DS3",
        "Renault" => "Clio",
        "Peugeot" => "306",
        "Peugeot2" => 306
    );

    if (array_key_exists("Citroen", $bagnole)) {
        echo "La clef existe";
    } else {
        echo "La clef n'existe pas";
    }
    echo '<br><br>';
    //array_search(value,tableau) renvoie la clef d'une valeur existante d'un tableau //

    //pour cet exemple reprenons notre tableau bagnole //

    echo array_search("DS3", $bagnole);

    echo '<br><br>';

    //in array(value,tableau)Rechercher une valeur dans un tableau ,renvoie true si la value est trouvée,renvoie false ds le cas contraire(sensible à la casse)//

    $prenoms = array("Pierre", "Paul", "Jacques");

    if (in_array("Pierre", $prenoms)) {
        echo "prenom trouvé" . "<br><br>";
    } else {
        echo "prenom non trouvé" . "<br><br>";
    }

    //Comptons et comparons les tableaux et leurs valeurs//

    //count(tableau)retourne le nombre d'elements d'un tableau//

    $sport = array("natation", "velo", "course");
    echo count($sport) . '<br><br>';

    //array_count_values renvoie un tableau avec le nombre de fois que les valeurs du tableau analysé sont rencontré//

    $compter = array("A", "velo", "natation", "velo", "A");
    echo '<pre>';
    print_r(array_count_values($compter));
    echo '</pre>';

    //array_diff_assoc()Compare les cles de deux tableaux ou plus et va renvoyer les differences dans un tableau(ex:present dans l'un mais pas dans l'autre (sensible à la casse))

    $compare = array("a" => "bleu", "b" => "vert", "c" => "jaune");
    $comparant = array("a" => "bleu", "b" => "vert");

    echo '<pre>';
    print_r(array_diff_assoc($compare, $comparant));
    echo '</pre>';

    //array_diff_key fait le tri sur les clés et array_diff fait le tri sur les valeurs. celles-ci fonctionne pareil que array_diff_assoc//

    //array_intersect_assoc renvoie dans un tableau  les similutudes entre deux tableaux//

    echo '<pre>';
    print_r(array_intersect_assoc($compare, $comparant)); //renvoie bleu et vert
    echo '</pre>';

    //array_intersect_key fait le tri sur les clés et array_intersect fait le tri sur les valeurs. celles-ci fonctionne pareil que array_intersect_assoc//

    //Ajoutons,Supprimons des elements d'un tableau//

    //array_fill(premier du tableau retourné,nombre de fois que l'on veut inserer la valeur,valeur à inserer)Remplis un tableau avec une valeur que l'on va repeter un certain nombre de fois , Retourne un tableau en résultat//

    echo '<pre>';
    print_r(array_fill(0, 6, "vert")); //on obtient ici un tableau avec la valeur vert 6 fois , la premiere cle est 0
    echo '</pre><br><br>';

    //array_fill_keys(tableau qui va contenir les valeurs utilisé comme cle,la valeur utilisé pour remplir le tableau) renvoie un tableau avec les cles donnée en parametre//

    $clefs = array("a", "b", "c", "d");
    $remplir = array_fill_keys($clefs, "bleu");

    echo '<pre>';
    print_r($remplir);
    echo '</pre><br><br>';

    //array_push()-insertion d'un dernier element ds un tableau et array_pop()-supression d'un dernier element ds un tableau

    //array_push(tableau,valeur à rajouter 1..,valeur à rajouter 2 ..)//
    $couleur = array("bleu", "vert");

    echo '<pre>';
    array_push($couleur, "rouge", "jaune");
    print_r($couleur);
    echo '</pre><br><br>';
    //array_pop(tableau,valeur à retirer 1..,valeur à retirer 2 ..)//

    echo '<pre>';
    array_pop($couleur);
    print_r($couleur);
    echo '</pre><br><br>';

    //array_unshift(tableau à modifier,element à ajouter) Ajoute des elements en debut de tableau//

    echo '<pre>';
    array_unshift($couleur, "violet", "jaune");
    print_r($couleur);
    echo '</pre><br><br>';

    //array_shift(tableau) retire le premierelement d'un tableau//

    echo '<pre>';
    array_shift($couleur);
    print_r($couleur);
    echo '</pre><br><br>';

    //array_slice(tableau à modifier,position ou les elements d'un tableau vont etre modifies ou supprimés)-Supprimme les élément à partir de la position indiquée//

    $couleur1 = array("a" => "bleu", "b" => "vert", "c" => "jaune");


    echo '<pre>';
    array_splice($couleur1, 1);
    print_r($couleur1);
    echo '</pre><br><br>';

    //Trier et Combiner des tableaux//

    //array_merge() combine plusieurs tableaux en un nouveau//

    $alpha = array("a", "b");
    $beta = array("c", "d");

    echo '<pre>';
    $omega = array_merge($alpha, $beta);
    print_r($omega); //on fusionne les tableaux alpha et beta//
    echo '</pre><br><br>';

    //array_combine(tableau1,tableau 2) cree un tableau associatif à partir d'un tableau numeroté - les tableaux à combiner doivent avoir le meme nombre d'element//

    echo '<pre>';
    $omega = array_combine($alpha, $beta);
    print_r($omega);
    echo '</pre><br><br>';

    //array_unique()supprime les doublons dans un tableau- sensible à la casse//

    $prenoms = array("Pierre", "Paul", "Pierre", "Jacques");

    echo '<pre>';
    print_r(array_unique($prenoms));
    echo '</pre><br><br>';

    //sort()-Ordonne les valeurs d'un tableau numeroté ne renvoie pas de nouveaux tableau//

    $prenoms = array("Pierre", "Antoine", "Jean");

    echo '<pre>';
    sort($prenoms);
    print_r($prenoms);
    echo '</pre><br><br>';

    //rsort() classe du grand au plus petit//

    //ksort()classe un tableau associatif dans un ordre croissant par rapport à ses clefs//

    $agenom = array("Pierre" => 24, "Paul" => 27, "Jean" => 34);

    echo '<pre>';
    ksort($agenom);
    print_r($agenom);
    echo '</pre><br><br>';

    //krsort() pareil que ksort mais classe du plus grand au plus petit//

    //asort() classe un tableau associatif dans un ordre croissant selon ses valeurs//
    echo '<pre>';
    asort($agenom);
    print_r($agenom);
    echo '</pre><br><br>';
    
    //arsort()pareil que asort mais classe du plus grand au plus petit//
    ?>
</body>

</html>