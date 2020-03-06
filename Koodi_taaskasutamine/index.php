<!doctype html>
<html>
<head>
    <title>Koodi taaskasutamine</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header id="pais">
    <h1>Koodi Taaskasutamine</h1>
    <menu>
        <a href="index.php">Avaleht</a> |
        <a href="index.php?leht=portfoolio">Portfoolio</a> |
        <a href="index.php?leht=kaart">Kaart</a> |
        <a href="index.php?leht=kontakt">Kontakt</a>
    </menu>
</header>

<div id="sisu">
    <?php
if(!empty($_GET['leht'])){
	$leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio','kaart','kontakt');
    $kontroll = in_array($leht, $lubatud);
	if(is_file($leht.'.php')){
		include($leht.'.php');
	} else {
		echo 'Valitud lehte ei eksisteeri!';
	}
} else {
    ?>
    <h2>Avaleht</h2>
    <p>Vastupidiselt tavaarusaamale, Lorem Ipsum ei ole lihtsalt suvaline tekst.
        See sai alguse osakesest klassikalisest ladina kirjandusest, mis on pärit
        aastast 45 eKr, olles seega rohkem kui kaks tuhat aastat vana.
        Virginia Hampden-Sydney College'i ladina keele professor Richard McClintock otsis
        Lorem Ipsumi lõigust ühe ebamääraseima ladinakeelse sõna, 'consecteur',
        ja vaadates läbi sõna viited klassikalises kirjanduses, leidis Lorem Ipsumi
        vaieldamatu allika. Lorem Ipsum on tulnud Cicero 45 aastat eKr kirjutatud raamatu
        "De Finibus Bonorum et Malorum" ("Hüvede ja pahede piiridest") osadest 1.10.32
        ja 1.10.33. See raamat on uurimus eetikateooriast, mis oli renessansi ajal väga populaarne.
        Lorem Ipsumi esimene rida,
        "Lorem ipsum dolor sit amet...", tuleb reast osas 1.10.32.</p>
    <?php
    }
 ?>
</div>

<footer id="jalus">
    <p>No kopirait</p>
</footer>
</body>
</html>
<?php
