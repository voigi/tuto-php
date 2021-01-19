<<<<<<< HEAD
<?php

     session_start();

?>
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

=======
<?php

     session_start();

?>
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

>>>>>>> 39e8b5371e315a19ef8dd071ab8a6ad37c3c8358
