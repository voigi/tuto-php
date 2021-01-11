<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $a = 3;

    switch ($a) {
        case 1:
            echo "Un";
            break;
        case 2:
            echo "Deux";
            break;
        case 3:
            echo "Trois";
            break;
        case 4:
            echo "Quatre";
            break;
        case 5:
            echo "Cinq";
            break;
        default:
            echo  "Autre";
    }

    ?>
</body>

</html>