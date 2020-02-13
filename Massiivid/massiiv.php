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
print_r($opilased);
echo '</pre>';
foreach ($jaana as $element => $vaartus){
    echo $element.'<br>';
}
foreach ($jaana as $element => $vaartus){
    echo $vaartus.'<br>';
}
foreach ($jaana as $element => $vaartus){
    echo $element.' - '.$vaartus.'<br>';
}
$opilased = array(
    array(
        'eesnimi' => 'Jaana',
        'perenimi' => 'Šeffer'
    ),
    array(
        'eesnimi' => 'Anne-Mari',
        'perenimi' => 'Eensaar'
    ),
    array(
        'eesnimi' => 'Rene',
        'perenimi' => 'Kasetalu'
    ),
    array(
        'eesnimi' => 'Hanna-Liisa',
        'perenimi' => 'Vilms'
    ),
    array(
        'eesnimi' => 'Erko',
        'perenimi' => 'Sakkos'
    ),
    array(
        'eesnimi' => 'Mairit',
        'perenimi' => 'Saal'
    ),
    array(
        'eesnimi' => 'Kerli',
        'perenimi' => 'Tekku'
    ),
    array(
        'eesnimi' => 'Andre',
        'perenimi' => 'Eli'
    ),
    array(
        'eesnimi' => 'Martin',
        'perenimi' => 'Mõtsar'
    ),
);
foreach ($opilased as $opilane){
    foreach ($opilane as $element => $vaartus) {
        echo $element.' -'.$vaartus.'<br>';
    }
    echo '<br>';
}
echo $opilased[7]['perenimi'];