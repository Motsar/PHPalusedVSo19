<?php


$eesti_nadalapaev = array('1'=>'Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede','Laupäev','Pühapäev');

$nadalaPaev = $eesti_nadalapaev[date('w')];

$eesti_kuud = array('1'=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');

$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');

echo $paev,'.',$kuu,' ',$aasta,' ',$nadalaPaev,'<br>';

$hetkel = time();
$jaanipaev = mktime(0,0,0,6,24,2020);
$vahe_sekundites = ($jaanipaev-$hetkel);
$vahepaevades = round(($vahe_sekundites/(60*60*24)),0);
$valjund = date('Y ').' aasta jaanipaevani on jaanud '.$vahepaevades.' paeva!';
echo $valjund.'<br>';


$temaSynna= mktime(0,0,0,11,6,1985);
$temaSynnaNyyd=mktime(0,0,0,11,6,2020);
$temaVaheSek = $temaSynnaNyyd-$temaSynna;
$temavaljund = date('d.m.Y',$temaSynna).'<br>';


$minuSynna= mktime(0,0,0,10,4,1988);
$minuSynnaNyyd=mktime(0,0,0,10,4,2020);
$minuVaheSek = $minuSynnaNyyd-$minuSynna;
$minuvaljund = date('d.m.Y',$minuSynna).'<br>';

$vaheSekundites = $temaVaheSek-$minuVaheSek;


echo $temavaljund.'<br>';
echo $minuvaljund.'<br>';
echo 'Vahe aastates on: '.round(abs($vaheSekundites) / (60*60*24*30.4*12),0).'<br>';

if($vaheSekundites > 0) {
    echo 'Tema on vanem<br>';
} else if($vaheSekundites < 0) {
    echo 'Mina olen vanem<br>';
} else {
    echo 'Oleme sama vanad<br>';
}
echo '<hr>';


$minuVanusAastades = round($minuVaheSek / (60*60*24*30.4*12),0);
echo $minuVanusAastades.'<br>';
$juubel = $minuVanusAastades % 5;
echo $juubel.'<br>';
if($juubel = 0) {
    echo 'On juubel<br>';
} else {
    echo 'Ei ole juubel<br>';
}
echo '<hr>';


echo date("h:i a");
$morningTime = "08:00:00";
$dayTime = "13:00:00";
$eveningTime = "17:00:00";
$currentTime = date("h:i a");
if($currentTime > $morningTime and $currentTime < $dayTime) {
    echo "Tere hommikust!<br>";
} else if ($currentTime > $dayTime and $currentTime < $eveningTime) {
    echo "Tere päevast!<br>";
} else if ($currentTime > $eveningTime) {
    echo "Tere õhtust!<br>";
}
echo '<hr>';

