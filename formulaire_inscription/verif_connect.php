
<?php

include('Connexion.php');
$log = $_POST['log_in'];
$password = $_POST['pass'];
$_SESSION ['pseudo'] = $log;

$requete = $bdd->prepare('SELECT login_u,mdp FROM pass');
$requete->execute(array(
    'login_u'=>$log,
    'mdp'=>$password
));


 while ($donnees = $requete->fetch()) {
     
     if(($donnees['mdp'] === $password) && $donnees['login_u'] === $log){
        header('Location:profil.php');
    }else
    {
        header('location:connect.php');
    }
    
 }


?>

