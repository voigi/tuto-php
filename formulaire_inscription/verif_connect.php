<?php

    // session_start();

?>
<?php

include('Connexion.php');
// $_SESSION['log'] = $_POST['log_in'];
// $_SESSION['password'] = $_POST['pass'];
// $_SESSION['log_in'] = $_POST['login'];
// $_SESSION['pass'] = $_POST['mdp'];

// if ($_SESSION['log_in'] === $_SESSION['log'] && $_SESSION['pass'] === $_SESSION['password']) {
//     header('location:profil.php');
// } else {
//     echo 'Mauvais mot de passe';
// }


// if(!isset($_SESSION)){
//     session_start();
//    }
$requete = $bdd->prepare('SELECT login_u FROM pass WHERE mdp = ?');
$requete->execute(array('1234'));

 while ($donnees = $requete->fetch()) {
     echo  $donnees['login_u'] . '<br>';
    
 }


?>

