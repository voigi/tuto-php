<?php
    session_start();
?>
<?php
include('Connexion.php');
include('bootstrap.html');
echo 'Bonjour '. @$_SESSION ['pseudo'].'<br><br>';

<<<<<<< HEAD
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
=======
>>>>>>> b85f8b6a1d025633f0cc4ef2771972a338541a1d

 ?>
 <?php
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
      $filename = $_FILES["photo"]["name"];
      $filetype = $_FILES["photo"]["type"];
      $filesize = $_FILES["photo"]["size"];
      $cheminimg = "../images/".$_FILES["photo"]["name"];
      move_uploaded_file($_FILES["photo"]["tmp_name"], "images/" . $_FILES["photo"]["name"]);
        }
      
     
      $req= $bdd->prepare('UPDATE pass SET chemin_img = :chemin WHERE login_u = :logs');
      $req->execute(array( 
          'chemin'=>$cheminimg,
          'logs'=>$_SESSION['pseudo']
      ));
      $req2=$bdd->prepare('SELECT chemin_img FROM pass WHERE login_u=:logs');
      $req2->execute(array( 
        'logs'=>$_SESSION['pseudo']
    ));
    $stock = $req2->fetch();
   
    ?>
   

 <form method="post" enctype="multipart/form-data">
   <label for="upload">Fichier:</label>
   <input type="file" name="photo" id="upload">
   <input type="submit" name="submit" value="Upload"> 
 </form>
 <?php echo "Votre fichier a été téléchargé avec succès.";?> 
 <br>
 <img src="images/<?php echo $stock['chemin_img'];?>" alt="">









