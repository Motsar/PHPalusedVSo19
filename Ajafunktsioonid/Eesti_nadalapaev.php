<?php

$eesti_nadalapaev = array('1'=>'Esmaspäev','Teisipäev','Kolmapäev','Neljapäev','Reede','Laupäev','Pühapäev');

$nadalaPaev = $eesti_nadalapaev[date('w')];

echo $nadalaPaev;