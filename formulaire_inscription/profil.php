<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<?php

echo 'Bonjour '.$SESSION['login'];

?>