<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les conditions</title>
</head>

<body>
    <?php
    ////////La structure if/////////////
    //$heure_connexion = 17;
    // if($heure_connexion<18){
    //     echo "passez une bonne journée";
    // }
    ////////La structure if  ... else/////////////
    //  if($heure_connexion<18){
    //     echo "passez une bonne journée";
    // }
    // else{
    //     echo"passez une bonne soirée";
    // }
    ////////Les conditions niveau 2/////////////
    // if ($heure_connexion < 18) {
    //     echo "passez une bonne journée <br><br>";
    //     $journee = "<b>oui</b>";
    // } else {
    //     echo "passez une bonne soirée <br><br>";
    //     $journee = "<b>non</b>";
    // }
    // echo 'Fait-il jour ? La réponse est '.$journee;

    //////La structure if  ... elseif.. else////

    // $note = 13;
    // $difficulté = "facile";

    // if ($note < 10) {
    //     echo "Vous n'avez pas eu la moyenne";
    // } elseif ($note == 10) {
    //     echo "Vous avez  eu  juste la moyenne";
    // } else {
    //     echo "Vous avez  eu plus de la moyenne";
    // }

    ////Avec &&///

    // if ($note <= 12 && $difficulté == "facile") {
    //     echo "c'est nul";
    // } elseif ($note >= 12 && $difficulté == "facile") {
    //     echo "pas mal mais c'éait facile";
    // } elseif ($note <= 12 && $difficulté == "difficile") {
    //     echo "ne vous decouragez pas c'etait difficile";
    // } else {
    //     echo "Bravo !";
    // }

    //Avec ||//

    // if($difficulté == "facile" || $difficulté == "moyen"){
    //     echo "<br>Ce contrôle n'était pas  difficile";
    // }else{
    //     echo "<br>Ce contrôle était dur non ?";
    // }

    //////La condition Switch//////

    // $note = 8;
    // switch ($note) {
    //     case 0:
    //         echo "tu es nul";
    //         break;
    //     case 4:
    //         echo "C'est trés mauvais";
    //         break;
    //     case 8:
    //         echo "Ce n'est pas bon";
    //         break;
    //     case 12:
    //         echo "c'est moyen";
    //         break;
    //     case 16:
    //         echo "Bien joué";
    //         break;
    //     case 20:
    //         echo "Parfait";
    //         break;
    //     default:
    //         echo "Je n'ai pas de commentaire pour cette note";           
    // }
    ///////////////ASTUCES///

    //avec une variable booleenne//

    $etudiant = true;

    //avant//

    // if($etudiant ==true){
    //     echo "vous êtes étudiant";
    // }else{
    //     echo "vous n'êtes pas étudiant";
    // }

    //aprés//
    // if($etudiant){
    //     echo "<br>vous êtes étudiant";
    // }else{
    //     echo "<br>vous n'êtes pas étudiant";
    // }

    //si false///

    // if(!$etudiant){
    //     echo "<br>vous n'êtes pas étudiant";
    // }else{
    //     echo "<br>vous êtes étudiant";
    // }

    // if ($etudiant) {
    // ?>
    <!-- //     <p>Vous êtes etudiant</p> -->
    <!-- // <?php
    // }
//condition ternaires
    $age = 24;
$autorisation = ($age>=18)?true : false;
    ?>
</body>

</html>