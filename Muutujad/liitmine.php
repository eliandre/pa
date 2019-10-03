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

//HTML kood tuleb panna jutumärkide vahele
echo '<br>Tere '.$nimi.'!<br>';
echo 'Sinu vanus: '.$vanus.'<br>';
echo 'Sinu kaal: '.$kaal.'<br>';
?>
