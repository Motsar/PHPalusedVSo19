<?php
//tekstifaili kirjutamine
$allikas = 'lipsum.txt';
$minu_fail =fopen($allikas, 'w');

$tekst = "Vastupidiselt tavaarusaamale, Lorem Ipsum ei ole lihtsalt suvaline tekst.\n";
$tekst2 = "See sai alguse osakesest klassikalisest ladina kirjandusest, mis on pärit aastast 45 eKr, olles seega rohkem kui kaks tuhat aastat vana.\n";
fwrite($minu_fail, $tekst);
fwrite($minu_fail, $tekst2);
fclose($minu_fail);

//Tekstifaili kirjutamise koodi lühem versioon(kirjutab faili üle)
file_put_contents($allikas, $tekst);
//Kasuta järgmist parameetrit, et lisada uus tekst faili lõppu
file_put_contents($allikas, $tekst2, FILE_APPEND);

//Faili kustutamine ja ümbernimetamine
unlink('lipsum.txt');
//Faili ümbernimetamine
rename('vananimi.txt','uusnimi.txt');



