<?php
if(!isset($_SESSION)){
    session_start();
}
?>
<?php
include('Connexion.php');
include('bootstrap.html');
echo 'Bonjour '. $_SESSION ['pseudo'].'<br>';

 ?>
 
 <button class="btn btn-primary" id="deco"> Deconnexion</button>

 <script>
    var btn = document.getElementById('deco');
    btn.addEventListener('click', function() {
      document.location.href = 'formulaire_inscription.html';
    });
  </script>










