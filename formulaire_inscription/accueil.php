<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h3>Bienvenue
        <header>
            <nav>
                <ul>
                    <li><a href="accueil.php">Acceuil</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="connect.php">Connexion</a></li>
                </ul>
            </nav>
            <img src="formulaire_inscription\images\téléchargement.jpg" alt="image">
            <h1></h1>
            <p></p>
            <p></p>
            <p></p>
        </header>
        <?php
            session_start();
        ?>
        <?php 
        //on met le @ pour masquer une erreur prévisible// 
           echo @$_SESSION['pseudo'];
        ?>
    </h3>
</body>
</html>