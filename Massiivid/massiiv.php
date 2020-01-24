<?php

$VSo19 = array(
    'Martin',
    'Anne-Mari',
    'Jaana',
    'Andre'.
    'Rene',
    'Mairit',
    'Kerli',
    'Erko',
    'Hanna-Liisa',
    'Kerli'
);

$opilasteA = count($VSo19);
echo 'VSo19 kursuselt on kohal '.$opilasteA.' opilast!';

echo 'Need on: <br>';
 for($i=0;$i<$opilasteA; $i++){
     echo $VSo19[$i].'<br>';
 };
 echo '<hr>';
 foreach($VSo19 as $opilan){
     echo $opilan.'<br>';
 };

$jaana = array(
    'eesnimi' => 'Jaana',
    'perenimi' => 'Šeffer'
);
echo '<pre>';
print_r($jaana);
echo '</pre>';
foreach ($jaana as $element => $vaartus){
    echo $element.' - '.$vaartus.'<br>';
}