
<?php

$nom = $_POST["nom"]; //Stockage du nom (formulaire = name) dans la valeur $nom
                   $prenom = $_POST["prenom"]; //Stockage du prenom (formulaire = name) dans la valeur $prenom
                   $mail = $_POST["Mail"]; //Stockage du mail(formulaire = name) dans la valeur $mail
                   $tel = $_POST["tel"]; //Stockage du tel(formulaire = name) dans la valeur $tel


                   if (empty($prenom)){  //SI la valeur prenom est vide fait l'instruction qui suit
                    echo 'T\'as pas mis ton petit prenom <br>';
                }
    
                else {  //SI le champ est rempli affiche l'instruction qui suit
                    echo 'Prénom : '.$_POST["prenom"].'<br>';
                }
    
    
                if (empty($nom)){ //SI la valeur nom est vide fait l'instruction qui suit
                    echo 'T\'as pas mis ton petit nom <br>';
                }
    
                else { //SI le champ est rempli affiche l'instruction qui suit
                    echo 'Nom : '.$_POST["nom"].'<br>';
                }
    
                if (empty($mail)){ //SI la valeur mail est vide fait l'instruction qui suit
                    echo 'T\'as pas mis ton petit mail <br>';
                }
    
                else { //SI le champ est rempli affiche l'instruction qui suit
                    echo 'Email : ' .$_POST["mail"].'<br>';
                }
    
                if (empty($tel)){ //SI la valeur tel est vide fait l'instruction qui suit
                    echo 'T\'as pas mis ton petit 06 <br>';
                }
    
                else { //SI le champ est rempli affiche l'instruction qui suit
                    echo 'Tel : '.$_POST["tel"].'<br>';
                }


                    //Fin du code de Erwan//
?>