
<h2>Les Tableaux Multidimensionnels</h2>
<?php
    $multis=array(
        ['nom' =>'Thomas Dupont','ville'=>'Paris','mail'=>'thomas.dupont@gmail.com','poste'=>'UX Designer'],
        ['nom' =>'Emilie Durant','ville'=>'Lille','mail'=>'emilie.Durant@gmail.com','poste'=>'Directrice d\'agence'],
        ['nom' =>'Sarah sofia','ville'=>'Nantes','mail'=>'sarah.sofia@gmail.com','poste'=>'CTO']
    );
        echo '<pre>';
        print_r( 'le mail de sarah est '.$multis[2]['mail'].'<br>');
        print_r( 'le poste de thomas est '.$multis[0]['poste'].'<br>');
        print_r( 'la ville d\'emile est '.$multis[1]['ville'].'<br>');
        echo '</pre>';

        //On parcourt le tableau//
       foreach($multis as $multi){
           echo '<pre>';
           print_r($multi);
           echo '</pre>';
       }
?>