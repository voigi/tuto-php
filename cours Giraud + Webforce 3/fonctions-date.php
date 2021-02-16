<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions_date</title>
</head>
<body>
<?php
//On fixe le fuseau horaire//
date_default_timezone_set('Europe/Paris');
//time() -Retourne le nombre de secondes écoulées depuis 1970//

   echo time();
   echo '<br><br>';

//date()Permet d'obtenir une date locale sous le format souhaité//

//listes des caracteres speciaux pour formater la fonction date//

/*d	Représente le jour du mois en deux chiffres (entre 01 et 31)
m	Représente le mois de l’année en chiffres avec le zéro initial (de 01 à 12)
n	Représente le mois de l’année de chiffres sans le zéro initial (de 1 à 12)
Y	Représente l’année sur 4 chiffres (ex : 2019)
l (L minuscule)	Représente le jour de la semaine en toutes lettres (en anglais)
N	Représente le jour de la semaine en chiffre au format ISO-8601 (lundi = 1, dimanche = 7)
H	Représente l’heure au format 24h avec le zéro initial
i	Représente les minutes avec le zéro initial
s	Représente les seconds avec le zéro initial*/

echo "Nous sommes le ".date("d/m/Y").'<br>';
echo "Aujourd'hui c'est ".date("l").'<br>';
echo "Il est ".date("H:i:s").'<br><br>';

//Traduction des jours,mois (utlisation d'un tableau)

$jour = array(
   "",
   "Lundi",
   "Mardi",
   "Mercredi",
   "Jeudi",
   "Vendredi",
   "Samedi",
   "Dimanche" 
);
$mois = array(
    "",
    "Janvier",
    "Fevrier",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Aôut",
    "Septembre",
    "Octobre",
    "Novembre",
    "Decembre" 
 );
 $datefr = $jour[date("N")]." ".date("d")." ".$mois[date("n")]." ".date("Y");
 echo "Nous sommes le ".$datefr.'<br><br>';

 //setlocale(LC_TIME,'fr_FR') -Permet de regler notre date localement//

setlocale(LC_TIME,'fr');
echo 'Nous sommes le '. strftime("%A %d %B %Y") .'<br>';
echo 'Il est actuellement ' .strftime("%H:%M:%S")."<br><br>";

//Verifions la validité d'une date avec  checkdate(mois,jour,annee) renvoie true ou false//

$date1 = checkdate(12,11,2014);
$date2 = checkdate(13,12,2014);
$date3 = checkdate(1,2,-4000);

if($date1){
   echo "la date est valide"."<br>";
}
else{
   echo "la date n'est pas valide"."<br>";
}
if($date2){
   echo "la date est valide"."<br>";
}
else{
   echo "la date n'est pas valide"."<br>";
}
if($date3){
   echo "la date est valide"."<br>";
}
else{
   echo "la date n'est pas valide"."<br>";
}

// getdate()-> recuperons les informations d'un timestamp ou une heure local -> renvoie un tableau

echo '<pre>';
print_r (getdate());
echo '</pre>';

echo '<br><br>';

//information d'une date passée (1 er janvier 1970)
echo '<pre>';
print_r (getdate(1));
echo '</pre>';

?>
    
</body>
</html>