<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Boucles</title>
</head>

<body>
    <?php

    for ($i = 0; $i <= 4; $i++) {

        echo 'Hello';
        echo '<br>';
    }

    echo '<br>';

    //boucle while tant que c'est on est ds la boucle//
    $i = 0;

    while ($i < 10) {

        echo "Hello" . "<br>";
        $i++;
    }
    echo '<br>';

    //do while on verifie aprés//

    $i = 0;
    do {
        echo "Hello" . "<br>";
        $i++;
    } while ($i < 4);

    echo '<br>';

    //boucles avec break//
    for ($i = 0; $i < 4; $i++) {
        if ($i == 3) {
            break;
            echo "Hello";
        }
    }
    echo '<br>';
    //le rendu donne  3 fois Hello car au bout de 3 fois la boucle for s'arrette//
    for ($i = 0; $i < 4; $i++) {
        if ($i == 3) {
            break;
        }
        echo "Hello".'<br>';
    }
    echo '<br>';
      //boucles avec continue//
      for ($i = 0;$i <= 4;$i++) {
        if ($i == 3) {
            continue;
        }
        echo "$i<br>"; //affiche 0124//
    }
    echo '<br>';
    ?>
</body>

</html>