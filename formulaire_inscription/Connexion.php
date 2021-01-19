<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
    //echo 'Base de donnée connecté <br>';
} catch (Exception $e) {
    die('Erreur :Connexion Impossible');
}
?>