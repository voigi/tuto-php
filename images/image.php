<?php
    include('Connexion.php');
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
        $cheminimg= "../images/".$filename;

        $req= $bdd->prepare('INSERT INTO pass(chemin_img) VALUES(:chemin)');
        $req->execute(array( 
            'chemin'=>$cheminimg
        ));

                move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/" . $_FILES["photo"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
                
               
}

// $req= $bdd->prepare('INSERT INTO user(nom,prenom,age) VALUES(:nom,:prenom,:age)');
// $req->execute(array(
//     'nom'=>$nom,
//     'prenom'=>$nom,
//     'age'=>$age
// ));

?>
