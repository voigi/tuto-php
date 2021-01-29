
<?php
include 'bootstrap.html';
?>
<?php
$password='test1';

$hashed_password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
var_dump($hashed_password);

if(password_verify($password,$hashed_password)){
    echo "Bon mdp";
}
else{
    echo "Mauvais mdp";
}
?>

<div class="container mt-4">
        <h2>Formulaire de Connexion</h2>
        <form action="" method="post">

            <div class="form-group">
                <label for="login">Login:</label>
                <input type="text" class="form-control" name="log_in">
            </div>
            <div class="form-group">
                <label for="mdp">Mot de Passe:</label>
                <input type="password" class="form-control" name="pass">
            </div>
            <input type="submit" class="btn btn-primary">

        </form>
    </div>



