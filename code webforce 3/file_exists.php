<?php
//Verifions si le fichier existe avec la fonction file_exist(variable du fichier à verifier)//
$filename='dossier/test.php';
    if(file_exists($filename))
    {
        echo 'le fichier existe';
    }
    else
    {
        echo 'le fichier n\'existe pas';
    }
?>