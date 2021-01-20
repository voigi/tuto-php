<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //La fonction define et les constantes  (ne pas utiliser un nom reservé)//

        define("constante","Hello<br><br>");
        echo constante;

        define("constante","Bonjour");// renvoie une erreur c une constante
        echo constante;

        //corrigeons

        define("constante2","Bonjour");
        echo constante2;
    ?>

</body>
</html>