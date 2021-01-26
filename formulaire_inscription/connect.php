
    <?php
    include('bootstrap.html');
    // if (
    //     isset($_SESSION['log_in']) && !empty($_SESSION['log_in'])
    //     && isset($_SESSION['pass']) && !empty($_SESSION['pass'])
    // ) 
    // {
    //    $_SESSION['pass']=$_POST['mdp'];
    // }
    ?>
    
    <div class="container mt-4">
        <h2>Formulaire de Connexion</h2>
        <form action="verif_connect.php" method="post">

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

