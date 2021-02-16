<?php
//on verifie si le dossier existe deja //
    $filename = 'creation/';
    //Creation dossier vierge//
    if(file_exists($filename)){
      echo 'le dossier existe deja';
    }else{
       mkdir('creation',755);  
    }
    //Creation d'un fichier php//
    fopen('creation/test.php','w');
?>