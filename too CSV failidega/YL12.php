<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Arvutame sõidu aja!</h1>
<form action="" method="POST">
    Sisestage sõidu algus aeg järgnevalt hh:mm! :
    <input type="text" name="soitA" value=''/><br>
    Sisestage sõidu lõpu aeg järgnevalt hh:mm! :
    <input type="text" name="soitL" value=''/><br>
    <input type="submit" name="saada" value="Saada"/><br>
</form>
<hr>
<?php

$soitAlgus= $_POST['soitA'];
$soitLopp= $_POST['soitL'];
$saadaNupp = $_POST['saada'];


if(empty($soitAlgus) or empty($soitLopp)){
    echo 'Täida mõlemad väljad!';
    }else{
    $soitAlen = strlen($soitAlgus);
    $soitLlen = strlen($soitLopp);
    if ($soitAlen == 5 and $soitLlen == 5 and $soitAlgus[2] == ':'){
        $ajavorm = "%02dh %02dm";
        if(strtotime($soitAlgus) !== false and strtotime($soitLopp) !== false){
            $ajaerinev = (strtotime($soitLopp)-strtotime($soitAlgus));
            $kokku = $ajaerinev/60;
            $tulem = sprintf("%02dh %02dm", floor($kokku/60), $kokku%60);
            echo 'Teie sõidu aeg oli: '.$tulem;
        }else{
            echo 'Sisestage ajad hh:mm kujul! Kasutage numbreid!';
        }
    }else{
        echo 'Sisestage ajad hh:mm kujul!';
    }

}


?>

</body>
</html>
