<?php
if(isset($_POST['prenom']))
setcookie("prenom",$_POST['prenom'],time()+24*3600);
if(isset($_POST['nom']))
setcookie("prenom",$_POST['nom'],time()+24*2600);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Traitement des données envoyées</title>
</head>
<body>
    Les cookies de nom et prenom ont été mémorisés.<br><br>
    <a href="affiche_cookies.php">Cliquez ici pour le vérfier</a>

</body>
</html>