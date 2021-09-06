<?php
    $arrNilai = array ("Ananda" => 90 , "Gladis" => 80 , "Serge" => 95 , "Adit" => 80 );
    echo $arrNilai['Ananda'];
    echo $arrNilai['Adit'];

    $arrNilai = array();
    $arrNilai['Ananda'] = 90;
    $arrNilai['Gladis'] = 80;
    $arrNilai['Serge '] = 95; 
    $arrNilai['Adit'] = 80 ;
        echo $arrNilai['Ananda'];
        echo $arrNilai['Adit'];
?>