<?php

function silindriRuumala($raadius,$korgus){
    $pohjaPindala=pi()* $raadius * $raadius;
    $ruumala = $pohjaPindala * $korgus;
}
$sr = $_GET('sr');
$sk = $_GET('sk');
print_r($_GET);
$silindriruumala = silindriRuumala($sr,$sk);
echo 'Silindri ruumala raadiusega ',$sr,' ja kõrgusega ',$sk, ' on ' ,$silindriruumala,' ! ';