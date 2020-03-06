<?php
$allikas = 'loomad.txt';
//faili avamine
$minufail = fopen($allikas, 'r');
//faili sisu kuvamine
//$faili_sisu = fread($minufail, 30);
//$faili_sisu2 = fread($minufail, filesize($allikas));
//echo $faili_sisu.'<br>';
//echo $faili_sisu2;

//Selleks, et html suudaks reavahetusest \n aru saada,
// tuleb see teisendada <br> siltideks nl2br() abil.
//echo nl2br($faili_sisu2);

//Faili kiireks lugemiseks võiks kasutada hoopis file_get_contents() funktsiooni
//echo nl2br(file_get_contents($allikas));

//Kasutades faili lugemiseks funktsiooni fgets(), kuvatakse meile ainult esimene rida.
//$faili_sisu3 = fgets($minufail);
//echo $faili_sisu3;

//Selleks, et kuvada selle funktsiooni abil kõik read, kasutame funktsiooni feof() ja tsüklit while.
// feof() funktsioon kontrollib, kas oled jõudnud faili lõppu
/*while(!feof($minufail)){
    $faili_sisu = fgets($minufail);
    echo nl2br($faili_sisu);
}*/

//tekstifaili info
//filectime() – kuvab viimati faili sisu ja metaandmete muutmise aja sekundites
//filemtime() – kuvab viimati faili sisu muutmise aja sekundites
//fileatime() – viimati faili kirjutatud või loetud aeg sekundites
/*$suurus = filesize($allikas);
$viimati_muudetud = date('d.m.Y G:i' ,filectime($allikas));
echo 'Faili nimi: '.$allikas.'<br>';
echo 'Faili suurus: '.$suurus.'baiti<br>';
echo 'Viimati muudetud: '.$viimati_muudetud.'<br>';*/

$allikas1 = 'kataloog/loomad.txt';
$faili_info = pathinfo($allikas1);
echo $faili_info['dirname'].'<br>';
echo $faili_info['basename'].'<br>';
echo $faili_info['filename'].'<br>';
echo $faili_info['extension'].'<br>';

//faili sulgemine
fclose($minu_fail);


