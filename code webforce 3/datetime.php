<?php
    $date= new DateTime();
    $date->modify(modify:"+2jours");
    $date_str = $date->format(format:"d/m/Y");
    echo "Dans deux jours,nous serons le : $date_str";
?>