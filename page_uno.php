<!-- <?php
// session_start();

?> -->
<html>

<body>
    <h1>Page 1</h1>

    <?php
    $_SESSION['login'] = 'Mon loin';
    $_SESSION['mdp'] = 'Mon mot d passe';
    ?>
    <a href="page2.php">page 2</a>
</body>

</html>