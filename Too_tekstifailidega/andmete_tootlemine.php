<?php
//tekstifailist saadud andmed tuleb lugeda massiivi, kasutame selleks file() funktsiooni
$allikas = 'numbrid.txt';
//$minu_fail = file($allikas);
//print_r($minu_fail);

//kuna failis on tühjad read, siis on võimalik neid ignoreerida kasutades
//FILE_IGNORE_NEW_LINES | FILE_IGNORE_EMPTY_LINES
$minu_fail = file($allikas, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
print_r($minu_fail);

