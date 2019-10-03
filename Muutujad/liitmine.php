<?php
//muutujate loomine
$enimi = 'Karin';
$pnimi = "Eegreid";
//liitmiseks kasutatakse märki .
$nimi = $enimi . $pnimi;

echo $nimi;

//Et kogu teksti kokku ei pandaks
$nimi = $enimi.' '.$pnimi;
echo $nimi;
?>
