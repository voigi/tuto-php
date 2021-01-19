<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<?php
include('Connexion.php');
echo 'Bonjour '. $_SESSION ['pseudo'];

?>