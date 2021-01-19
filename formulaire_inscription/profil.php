<<<<<<< HEAD
<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<?php
include('Connexion.php');
echo 'Bonjour '. $_SESSION ['pseudo'];

=======
<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<?php
include('Connexion.php');
echo 'Bonjour '. $_SESSION ['pseudo'];

>>>>>>> 39e8b5371e315a19ef8dd071ab8a6ad37c3c8358
?>