<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions String</title>
</head>
<body>
    <?php
        //strlen() Retourne la longueur d'une chaine de caractere (l'espace compte comme 1,les caracteres accentués comme 2)// 

        echo strlen("Bonjour à tous").'<br>';//resultat 15

        //str_word_count retourne le nombre de mots dans une chaine de caractéres (ne compte pas les caracteres speciaux par default)//

        echo str_word_count("Bonjour à tous").'<br>';
        echo str_word_count("Bonjour l'ami").'<br>';
        echo str_word_count("Bonjour a tous").'<br>';

        //str_reapat() 2 parametres (La string à repeter,le nombre de fois à repeter)

       echo str_repeat("Bonjour <br>",6);//Bonjour est repeter 6 fois//

       //str replace() 4 parametres (la valeur à rechercher,la valeur de remplacement,chaine de caracteres ds lequel la recherche sera fait,variable qui compte le nombre de remplacement) Attention sensible à la casse//

       $texte="Bonjour comment allez-vous ?";
       echo str_replace("Bonjour","Bonsoir",$texte,$i);
       echo '<br> Nombre de remplacements : '.$i.'<br>';

       //strtolower() retourne la chaine de characteres en :minuscule et strtoupper() retourne la chaine de characteres en majuscules //
       echo strtolower("BONJOUR").'<br>'; //en miniscule
       echo strtoupper("bonsoir").'<br>';//en majuscule

       //strpos() 2 arguments (chaine de characters,characteres recherché) Premier charactere = 0//

       echo strpos("Bonjour","n").'<br>';//affiche 2
       echo strpos("Bonjour","z").'<br>';//affiche false 

       //htmlspecialchars() et htmlspecialchars_decode()//
       $str= 'J\'aime le <strong>"php"</strong>'.'<br>';
       echo htmlspecialchars($str).'<br>';//empeche l'application de balises html

       //nl2br() met à la ligne une chaine de characteres//
       echo nl2br("Bonjour 
       Comment va").'<br>';

       //explode() separation sous forme de tableau et str_slit() pareil avec une longeur predifini au niveau du split///
       //explode()//

       $ch2tb="Bonjour à Tous";
       print_r(explode(" ",$ch2tb));//2 parametres (separateur,lieu ou est la chaine)//
        echo'<br><br>';

       //str_slit()//

       $ch2tb="Bonjour";
       print_r(str_split($ch2tb,2));//2 parametres (separateur,lieu ou est la chaine)//
       echo'<br><br>';
       //implode() convertit un tableau en chaine grace à un separateur//

       $tb2ch=array('Bonjour','à','tous');
       print_r(implode(" ",$tb2ch));

       //join alias de implode()//
    ?>
</body>
</html>