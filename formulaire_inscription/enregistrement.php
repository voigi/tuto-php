<<<<<<< HEAD
<?php
include("bootstrap.html");
//on inclut le fichier Connexion.php

include("Connexion.php");
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
      </script>
=======
<?php
include("bootstrap.html");
//on inclut le fichier Connexion.php

include("Connexion.php");
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
      </script>
>>>>>>> 39e8b5371e315a19ef8dd071ab8a6ad37c3c8358
    </div>