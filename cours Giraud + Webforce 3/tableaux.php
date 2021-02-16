<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les tableaux</title>
</head>

<body>
  <?php
  ///////Les tableaux numérotés////

  //1er façon d'ecrire///

  $prenoms = array('Pierre', 'Paul', 'Jaques', 'Bernard');


  //2eme façon d'ecrire///

  // $prenoms[0] = 'Pierre';
  // $prenoms[1] = 'Paul';
  // $prenoms[2] = 'Jacques';

  ///////Les tableaux associatifs////

  //1er façon d'ecrire///

  $age = array(
    'Pierre' => 24,
    'Paul' => 22,
    'Jacques' => 'non renseigné'
  );

  //2eme façon d'ecrire///

  // $age['Piere']=24;
  // $age['Paul']=22;
  // $age['Jacques']='non renseigné';


  ///Afficher les valeurs de nos tableaux//

  //Affichons une seule valeur//

  echo $prenoms[0] . '<br>';
  echo $age['Pierre'] . '<br><br>';

  //Affichons plusieurs valeurs//

  //Avec la boucle For//

  for ($i = 0; $i < count($prenoms); $i++) {
    echo $prenoms[$i] . '<br>';
  }
  echo '<br>';
  //Avec la boucle Foreach//
  foreach ($prenoms as $items) {
    echo $items . '<br>';
  }
  echo '<br>';
  foreach ($age as $valeurs) {
    echo $valeurs . '<br>';
  }
  echo '<br>';
  foreach ($age as $clef => $valeurs) {
    echo 'L\'âge de ' . $clef . ' est ' . $valeurs . '<br>';
  }
  echo '<br>';
  //Avec print_r//
  echo '<pre>';
  print_r($age);
  echo '</pre>';

  echo '<br>';
  
  //les tableaux Multidimensionnels//

  //Les Tableaux à Deux dimensions (ligne/colonnes)//
  $membres= array(
    array('Pierre',24,'pierre@gmail.com'),
    array('Paul',22,'paul.dubreuil@live.com'),
    array('Jacques',36,'jacquot@gmail.com')
  );

  //On recupere les donness//

  echo $membres[0][0].' a ' .$membres[0][1]. ' ans .Son mail est '.$membres[0][2].'<br>';
  echo $membres[1][0].' a ' .$membres[1][1]. ' ans .Son mail est '.$membres[1][2].'<br>';
  echo $membres[2][0].' a ' .$membres[2][1]. ' ans .Son mail est '.$membres[2][2].'<br>';
  echo'<br>';

  //boucle for//

  for ($ligne = 0; $ligne< count($membres); $ligne++) {
    $membres_no = $ligne+1;
    echo 'Membre numéro ' .$membres_no. '<br>';
    echo'<ul>';
    for ($col = 0; $col< count($membres); $col++){
      echo'<li>'. $membres[$ligne][$col].'</li>';
    }
    echo '</ul>';
    echo '<br>';
  }

  ?>

</body>

</html>