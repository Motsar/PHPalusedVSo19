<?php

//Saame sisestatud nime, muudame selle väikesteks tähtedeks ja siis omakorda esimese tähe suureks
$nimi = $_GET['nimi'];
$nimi = ucfirst(strtolower($nimi));
echo 'Tere, '.$nimi.'!';
echo '<hr>';

//Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada. Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
//Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.

$sisend= $_GET['sisend'];
for($i=0;$i<strlen($sisend);$i++){
    $symbol = strtoupper($sisend[$i]);
    echo $symbol.'.';
}
echo '<hr>';

//Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
//Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik ***

$roppsonad = array('kurat','noob','lollakas');
$lause = $_GET['lause'];
$lause = strtolower($lause);
// iga roppsõna kohta, mis meie massiivis on
foreach ($roppsonad as $roppsona){
    // moodustame asendussõna vastava pikkusega
    $asendus = '';
    for($kord = 0; $kord < strlen($roppsona); $kord++){
        $asendus .= '*';
    }
    //Leiame lasusest roppsona alguse indeksi
    $roppSonaIndex = strpos($lause, $roppsona, 0);
    //kui sona on leitud
    if($roppSonaIndex !== false){
        //asendame roppsona
        $lause = substr_replace($lause, $asendus, $roppSonaIndex, strlen($roppsona));
    }
}
//muudame lause esimese tähe tagasi suureks täheks
$lause = ucfirst($lause);
//väljastame lause
echo $lause;
echo '<hr>';


//Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee. Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega
//Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee
$nimiJaPerenimi = $_GET['nimijaperenimi'];
$asendus = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'A',
    'Ö' => 'O',
    'Ü' => 'U',
    'Õ' => 'O',
);
foreach ($asendus as $otsi=>$asenda){
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);
}
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ', 0);
$nimi = strtolower(substr($nimiJaPerenimi, 0, $tyhikuIndeks));
$nimiJaPerenimi = substr($nimiJaPerenimi, $tyhikuIndeks+1);
$tyhikuIndeks = strpos($nimiJaPerenimi, ' ');
$perenimi = strtolower(substr($nimiJaPerenimi,$tyhikuIndeks+1));
$email = $nimi.'.'.$perenimi.'@khk.ee';
echo $email;
echo '<hr>';
// regulaaravaldistega
$nimiJaPerenimi = $_GET['nimijaperenimi'];
$asendus = array(
    'ä' => 'a',
    'ö' => 'o',
    'ü' => 'u',
    'õ' => 'o',
    'Ä' => 'A',
    'Ö' => 'O',
    'Ü' => 'U',
    'Õ' => 'O',
);
foreach ($asendus as $otsi=>$asenda){
    $nimiJaPerenimi = str_replace($otsi, $asenda, $nimiJaPerenimi);
}
$eesnimiRE = '/^[A-Z][a-z]* /';
$perenimiRE = '/ [A-Z][a-z]*/';
preg_match($eesnimiRE, $nimiJaPerenimi, $eesnimi);
preg_match($perenimiRE, $nimiJaPerenimi, $perenimi);
if(!empty($eesnimi) and !empty($perenimi)) {
    $kasutaja = strtolower(trim($eesnimi[0])) . '.' . strtolower(trim($perenimi[0]));
    echo $kasutaja . '@khk.ee';
}