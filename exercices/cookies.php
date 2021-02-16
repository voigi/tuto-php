<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include 'bootstrap.html';
    ?>
    <div class="container">
    <form action="form_verif.php" method="POST">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" name="nom">
        </div>
        <div class="form-group">
            <label for="prenom">Prénom:</label>
            <input type="text"  class="form-control"name="prenom">
            <input type="submit" class="btn btn-success mt-4">
        </div>
           
    </form>
    </div>
    


   
</body>
</html>