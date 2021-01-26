<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Document</title>
</head>

<body>
    <h3>Bienvenue<?php
    
      session_start();
      ?>
      <?php
        //on met le @ pour masquer une erreur prévisible// 
        echo @$_SESSION['pseudo'];
        ?>
      <header>
            <nav>
                <ul>
                    <li><a href="accueil.php">Acceuil</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="deco.php">Deconnexion</a></li>
                </ul>
            </nav>
            <section>
                <img src="images/téléchargement.jpg" alt="image" class="tete">
            </section>
            <h1>Titre de la page</h1>
            <div id="paraph">
                <div>
                    <p>lorem ipsum</p>
                </div>
                <div>
                    <p>lorem ipsum</p>
                </div>
                <div>
                    <p>lorem ipsum</p>
                </div>
            </div>



        </header>
        
        <?php
        //on met le @ pour masquer une erreur prévisible// 
       // echo @$_SESSION['pseudo'];
        ?>
    </h3>
</body>

</html>