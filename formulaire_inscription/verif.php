
<?php
include("Connexion.php");
include("bootstrap.html");


    $_SESSION['login'] = htmlspecialchars($_POST['login']);
    $_SESSION['mdp'] = htmlspecialchars($_POST['mdp']);
    $verif = $_POST['verif'];

    if 
( isset($_SESSION['login']) && empty($_SESSION['login'])
&& isset($_SESSION['mdp']) && empty($_SESSION['mdp'])
&& isset($verif) && empty($verif)

)
{
    echo 'Veuillez remplir le formulaire d\'enregistrement'.'<br>';
    
}

// On verifie si les mots de passe sont les memes et si ils sont diffferents , on écrit un msg//

if(isset($_POST['login']) && !empty($_POST['login']))
{
    if($_SESSION['mdp'] === $verif){
$hashed_password = password_hash($_POST['mdp'],PASSWORD_DEFAULT);
$req= $bdd->prepare('INSERT INTO pass(login_u,mdp) 
VALUES (:login_u,:mdp)');
$req->execute(array(
    'login_u'=>$_SESSION['login'],
    'mdp' =>$hashed_password
    
));
echo"Votre mot de passe est enregistré";
include('connect.php');
    }
    else
    {
        echo "les mots de passe sont differents";
    }
}

?>
<button type="button" class="btn btn-primary" id="retour">Retour</button>
<script>
    var btn = document.getElementById('retour');
    btn.addEventListener('click', function() {
      document.location.href = 'enregistrement.php';
    });
  </script>

