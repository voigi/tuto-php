<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<!-- Validation avec le code php de Erwan -->
    <form action="formulaire.php" method="POST">
        <label for="name">Nom :</label>
        <input type="text" name="nom" id="nom">
        <label for="prenom">Prenom :</label>
        <input type="text" name="prenom">
        <label for="Mail">Mail :</label>
        <input type="email" name="Mail">
        <label for="tel">Tel:</label>
        <input type="tel" name="tel">
        <input type="submit" name="btn">
    </form>
  <?php
  

  //version isset//
    if(!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['Mail'])&& !empty($_POST['tel']) && isset($_POST['btn'])){
        echo 'rempli';
    }else{
        echo 'pas rempli';
    }
  ?> 





