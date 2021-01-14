
<?
//exemple de requete INSERT INTO//

$req= $bdd->prepare('INSERT INTO user(nom,prenom,age) VALUES(:nom,:prenom,:age)');
$req->execute(array(
    'nom'=>$nom,
    'prenom'=>$nom,
    'age'=>$age
));
?>