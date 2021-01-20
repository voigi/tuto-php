<?php
    session_start();
?>
<?php
include('Connexion.php');
include('bootstrap.html');
echo 'Bonjour '. @$_SESSION ['pseudo'].'<br><br>';

if(isset($_POST ['deco'])){
   session_destroy();
   header('Location:accueil.php');
}
 ?>
 <?php
  if(isset($_FILES['photo']) && $_FILES['photo']['error'] == 0)
  {
    $photoname=$_FILES['photo']['name'];
    $phototype=$_FILES['photo']['type'];
    $photosize=$_FILES['photo']['size'];

    move_uploaded_file($_FILES['photo']['tmp_name'],"images/".$_FILES['photo']['name']);
  }
 ?>
 <form method="post" enctype="multipart/form-data">
   <label for="upload">Fichier:</label>
   <input type="file" name="photo" id="upload">
   <input type="submit" name="submit" value="Upload"> 
 </form>
 <br>
 <form  method="POST">
     <input type="submit" id="deco" name="deco"  value="Deconnexion" class="btn btn-primary">
 </form>










