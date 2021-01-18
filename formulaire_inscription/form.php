<?php
include("bootstrap.html");
//on inclut le fichier Connexion.php

include("Connexion.php");

//Recuperons les données la super variable $_POST car notre formulaire est en methode post//
//  echo 'Votre civilité est :'.$_POST['Civ'].'<br>'.'Votre nom est : '.$_POST['nom'].'<br>'.'Votre prenom est : '.$_POST['prenom'].'<br>'.'Votre date de naissance est : '.$_POST['naissance'].'<br>'.'Votre adresse est : '.$_POST['adresse'].'<br>'.'Votre code postal est : '.$_POST['postal'].'<br>'.'Votre ville est : '.$_POST['Ville'].'<br>'.'Votre mail est : '.$_POST['mail'].'<br><br>';

//TP Formulaire Requete preparé securisé par htmlspecialcharts()//

$civilite = $_POST['Civ'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$naissance = $_POST['naissance'];
$adresse = $_POST['adresse'];
$code = $_POST['postal'];
$ville = $_POST['ville'];
$mail = $_POST['mail'];


if 
( isset($nom) && empty($nom)
&& isset($prenom) && empty($prenom)
&& isset($naissance) && empty($naissance)
&& isset($code) && empty($code)
&& isset($ville) && empty($ville)
&& isset($mail) && empty($mail)
)
{
   ?> 
    <p>Veuillez remplir le formulaire</p> 
    <button class="btn btn-primary" id="back">retour</button>
    <?php
}

$req= $bdd->prepare('INSERT INTO formulaire(civilite,nom,prenom,naissance,adresse,postal,ville,mail) 
VALUES (:civilite,:nom,:prenom,:naissance,:adresse,:postal,:ville,:mail)');
$req->execute(array(
    'civilite'=>htmlspecialchars($civilite),
    'nom' =>htmlspecialchars($nom),
    'prenom' =>htmlspecialchars($prenom),
    'naissance'=>htmlspecialchars($naissance),
    'adresse'=>htmlspecialchars($adresse),
    'postal'=>htmlspecialchars($code),
    'ville' =>htmlspecialchars($ville),
    'mail' =>htmlspecialchars($mail)  
));

echo '<br><br><br>';

echo'TP FORMULAIRE 1';
echo '<br><br>';
if (isset($_POST['Civ']) && !empty($_POST['Civ']))
{
    if (isset($_POST['nom']) && !empty($_POST['nom']))
    {
        if (isset($_POST['prenom']) && !empty($_POST['prenom']))
        {
             echo "Bonjour ".$_POST['Civ'].' '.$_POST['nom'].' '.$_POST['prenom'].'<br>';
        }
        else
        {
            echo "Veuillez saisir votre prenom !".'<br>';
        }
    }
    else
    {
        echo "Veuillez saisir votre nom !".'<br>';
        echo "Veuillez saisir votre prenom !".'<br>';
    }
   
}


if (isset($_POST['naissance']) && !empty($_POST['naissance']))
{
     echo "Vous etes nait le : ".$_POST['naissance'].'<br>';
}
else
{
    echo "Veuillez saisir votre date de naissance !".'<br>';
}

if (isset($_POST['adresse']) && !empty($_POST['adresse']))
{
    if (isset($_POST['postal']) && !empty($_POST['postal']))
    {
        if (isset($_POST['Ville']) && !empty($_POST['Ville']))
        {
             echo "Votre adresse est ".$_POST['adresse'].' '.$_POST['postal'].' '.$_POST['Ville'].'<br>';
        }
        else
        {
            echo "Veuillez saisir votre ville !".'<br>';
        }
    }
    else
    {
        echo "Veuillez saisir votre code postal !".'<br>';
    }
}
else
{
    
    echo "Veuillez saisir votre  adresse !".'<br>';
    echo "Veuillez saisir votre code postal !".'<br>';
    echo "Veuillez saisir votre ville !".'<br>';
}

if (isset($_POST['mail']) && !empty($_POST['mail']))
{
     echo "Vous mail est : ".$_POST['mail'].'<br>';
}
else
{
    echo "Veuillez saisir votre mail ".'<br>';
}

echo '<br>';
?>

<div class="container mt-4">

<form action="verif.php" method="post">

        <div class="form-group">
            <label for="login">Login:</label>
            <input type="text" class="form-control" name="login">
        </div>
        <div class="form-group">
            <label for="mdp">Mot de Passe:</label>
            <input type="password"  class="form-control"name="mdp">
        </div>
        <div class="form-group">
            <label for="verif">Verification du mot de passe:</label>
            <input type="password" class="form-control"  name="verif">
        </div>
       
        
        <input type="submit" class="btn btn-primary" value="S'enregistrer">
        <button type="button" class="btn btn-primary" id="myBtn">Se Connecter</button>
    </form>
    <script>
    var btn = document.getElementById('myBtn');
    btn.addEventListener('click', function() {
      document.location.href = 'connect.php';
    });
    var btn2 = document.getElementById('back');
    btn2.addEventListener('click', function() {
      document.location.href = 'formulaire_inscription.html';
    });
  </script>
</div>

