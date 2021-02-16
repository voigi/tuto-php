<u><h2>Tableau Numerique</h2></u>
<?php
$jours = array('Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
echo '<pre>';
print_r($jours);
echo '</pre>';
?>
<u><h2>Tableau Numérique avec boucle for</h2></u>
<?php
for ($i = 0; $i < count($jours); $i++) {

    echo $jours[$i] . '<br>';
}
?>
<u><h2>Tableau Associatif</h2></u>
<?php
$jours = array(
    'premier' => 'Lundi',
    'deuxieme' => 'Mardi',
    'troisieme' => 'Mercredi',
    'quatrieme' => 'Jeudi',
    'cinquieme' => 'Vendredi',
    'sixieme' => 'Samedi',
    'septieme' => 'Dimanche'
);
echo '<pre>';
print_r($jours);
echo '</pre>';
?>
    <u><h2>Foreach sur le tableau associatif</h2></u>
<?php
 foreach ($jours as $clef => $valeur) {
    echo 'le '.$valeur .' est le '.$clef.' jour de la semaine'.'<br>';
}
?>