<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=foot;charset=utf8', 'root', '');
    echo 'Base de donnée connecté <br>';
} catch (Exception $e) {
    die('Erreur :Connexion Impossible');
}

$reponse = $bdd->query('SELECT * FROM joueur');

while ($donnees = $reponse->fetch()) {

    echo '<br>' . $donnees['Prenom'] . ' ' . '<b>' . $donnees['Nom'] . '</b>' . ' est un joueur de football';
} 
$bdd->exec('INSERT INTO joueur (id,Nom,Prenom,Age)VALUES(id,\'Corrond\',\'Bernard\',23)');
?>

   
