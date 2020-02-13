<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ylesanne3</title>
</head>
<body>
<br>
<hr>
<?php


$sil_raadius = $_GET['silindri_R'];
$sil_korgus = $_GET['silindri_H'];
$kera = $_GET['kera'];
$koon_raadius = $_GET['koonuse_R'];
$koon_korgus = $_GET['koonuse_H'];

function silindriRuumala($sil_raadius, $sil_korgus){
    $pohjaPindala = pi() * $sil_raadius * $sil_raadius;
    $ruumala = $pohjaPindala * $sil_korgus;
    return $ruumala;
}

function keraRuumala($kera){
    $Kruumala = 4/3*pi()*pow($kera,3);
    return $Kruumala;
}

function koonuseRuumala($koon_raadius, $koon_korgus){
    $Koruumala = pi()*pow($koon_raadius, 2)*($koon_korgus/3);
    return $Koruumala;
}

echo 'Silindri ruumala on: '.silindriRuumala($sil_raadius, $sil_korgus).'<br>';
echo 'Kera ruumala on: '.keraRuumala($kera).'<br>';
echo 'Koonuse ruumala on: '.koonuseRuumala($koon_raadius, $koon_korgus).'<br>';


?>
</body>
</html>

