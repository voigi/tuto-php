<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<?php
include('Connexion.php');
include('bootstrap.html');
echo 'Bonjour '. $_SESSION ['pseudo'].'<br>';

$deconnexion = $_POST['deconnexion'];
var_dump($deconnexion);
if (isset($deconnexion)){
    header("Location: accueil.html");
}

else{
    echo "erreur";
}
 ?>
 
 <form action="profil.php">
  <input type="submit" value="deconnexion">
 </form>










