<?php
// session_start();
?>

<html>

<body>

    <h1>Page 2</h1>
    <p>Voici vos idetifiant et mot de passe</p>
    <?php
    echo $_SESSION['login'];
    echo '<br>';
    echo $_SESSION['mdp'];

    ?>
</body>

</html>