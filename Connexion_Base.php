
    <?php
    //connexion à la base de données jeux_video//
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=jeux_video;charset=utf8', 'root', '');
        // echo 'Connexion établie';
    } catch (Exception $e) {
        die('Erreur de connexion');
    }

    //////////////////////////////////////////////////

    //Faisons une requête//

    $reponse = $bdd->query('SELECT * FROM jeux_video');

    //On parcourt le contenu de la base//
    while ($donnees = $reponse->fetch()) {
        echo '<b>' . 'Jeu' . '</b>' . ':' . $donnees['nom'] . '<br>';
        echo 'Le posseseur de ce jeu est :' . $donnees['possesseur'] . ',' . 'et il le vend à ' . $donnees['prix'] . ' euros !' . '<br>';
        echo  'Ce jeu fonctionne sur ' . $donnees['console'] . ' et on peut y jouer à ' . $donnees['nbre_joueurs_max'] . ' maximum' . '<br>';
        echo  $donnees['possesseur'] . ' a laissé ces commentaires sur ' . $donnees['nom'] . ' : ' . '<i>' . $donnees['commentaires'] . '</i><br><br>';
    }

    $reponse->closeCursor();

    //Affichons les jeux de Patrick avec une requête preparé//

    $req = $bdd->prepare('SELECT nom FROM jeux_video WHERE possesseur = ?');
    $req->execute(array('Patrick'));

    while ($donnee = $req->fetch()) {
        echo 'Patrick possède ' . $donnee['nom'] . '<br>';
    }

    //Affichons les jeux de Michel avec la méthode des Marqueurs //

    $reponse = $bdd->prepare(' SELECT nom FROM jeux_video WHERE possesseur = ?'); // le ? c quand l'utilisateur saisi une données
    $reponse->execute(array('Michel'));

    while ($donnees = $reponse->fetch()) {
        echo " les jeux posséder par michel sont : " . $donnees['nom'] . "<br><br><br>";
    }

    $reponse = $bdd->prepare(' SELECT * FROM jeux_video WHERE possesseur = :possesseur AND prix <= :prixmax ORDER BY prix');
    $reponse->execute(array('possesseur' => 'Patrick', 'prixmax' => 25));
    while ($donnees = $reponse->fetch()) {
        echo " les jeux posséder par michel sont : " . $donnees['nom'] . " " . $donnees['prix'] . " €<br>";
    }

    $inscription = $bdd->prepare("INSERT INTO jeux_video VALUES(ID, 'Space invader', :possesseur, 'PS2', 20, 5, 'il est nul à chier')");
    $inscription->execute(array('possesseur'=> 'Bernadette'));
    ?>

