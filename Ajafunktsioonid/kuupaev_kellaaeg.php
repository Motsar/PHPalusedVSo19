<?php
date_default_timezone_set('Europe/Tallinn');
$hetke_aeg = time();

$vormindatud = date('d.m.Y G:i',$hetke_aeg);
$konkreetneaeg = mktime(12,31,0,3,20,2013);
$vormindatud_konkreetaeg = date('d.m.Y G:i',$konkreetneaeg);
echo $vormindatud.'<br>';
echo $vormindatud_konkreetaeg.'<br>';
