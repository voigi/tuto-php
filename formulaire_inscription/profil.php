<?php
    session_start();
?>
<?php
include('Connexion.php');
include('bootstrap.html');
echo 'Bonjour '. $_SESSION ['pseudo'].'<br>';

if(isset($_POST ['deco'])){
   session_destroy();
   header('Location:accueil.php');
}
 ?>
 <form  method="POST">
     <input type="submit" id="deco" name="deco"  value="Deconnexion" class="btn btn-primary">
 </form>










