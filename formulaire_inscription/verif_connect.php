
<?php
    session_start();
?>
<?php
include('Connexion.php');

$log = $_POST['log_in'];
$password = $_POST['pass'];
$_SESSION['pseudo'] = $log;

$requete = $bdd->prepare('SELECT login_u,mdp FROM pass WHERE login_u = :login_u');
$requete->execute(array(
    'login_u'=>$log
   
));



 while ($donnees = $requete->fetch()) {

      if(($donnees['mdp'] === $password) && $donnees['login_u'] === $log)
      {
         
        header('Location:accueil.php');
     }
     else
     {
       
        header('Location:connect.php');
     }
   
 }


?>

