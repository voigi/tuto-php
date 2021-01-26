<?php
include 'bootstrap.html';
if(isset($_POST ['deco'])){
   session_destroy();
   header('Location:accueil.php');
}
?>
 <form  method="POST">
     <input type="submit" id="deco" name="deco"  value="Deconnexion" class="btn btn-danger">
 </form>