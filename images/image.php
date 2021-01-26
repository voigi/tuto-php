<?php
     session_start();
?>
<?php
    include('Connexion.php');
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        $cheminimg= "../images/".$filename;

        $req= $bdd->prepare('UPDATE pass SET chemin_img = :chemin WHERE login_u = :logs');
        $req->execute(array( 
            'chemin'=>$cheminimg,
            'logs'=>$_SESSION['pseudo']
        ));
var_dump($_SESSION['pseudo']);
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/" . $_FILES["photo"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
                
               
}



?>
