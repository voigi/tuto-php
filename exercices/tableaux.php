<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <?php
 $année=$jours = array(
    '1' => 'janvier',
    '2' => 'fevrier',
    '3' => 'mars',
    '4' => 'avril',
    '5' => 'mai',
    '6' => 'juin',
    '7' => 'juillet',
    '8' => 'aout',
    '9' => 'septembre',
    '10' => 'octobre',
    '11' => 'novembre',
    '12' => 'decembre'
);
echo '<pre>';
print_r(array_chunk($année,3));
echo '</pre>';
 ?>
    <table border="1">
        <tr>
           <?php
           foreach($année as $clef => $valeur)
           {
               if($clef % 3 == 0)
               {  ?>
            <td>
                <?php echo $clef;?>
            </td>
             <td>
                 <?php echo $valeur;
                 ?>
            </td>
            <?php
               }

           }
          ?>
        </tr>
    </table>
</body>
</html>