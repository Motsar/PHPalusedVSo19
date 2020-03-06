<?php
$allikas = 'Pallivise.csv';
$minuCSV = fopen($allikas, 'r') or die('Ei leia faili!');
$jrk = 1;
while(!feof($minuCSV)){
    $rida = fgetcsv($minuCSV, filesize($allikas), ';');
    $arv = count($rida);// rea väljade number
    echo $jrk. '. ';//järjekorra number
    $jrk ++;
    for($i =0; $i < $arv; $i++){
        echo $rida[$i].' ';
    }
    echo '<br>';
}
fclose($minuCSV);