<?php

//mitmemõõtmelised massiivid
$riigid = array(
    'Eesti' => array('pealinn' => 'Tallinn', 'rahvaarv' => 1340000),
    'Austria' => array('pealinn' => 'Viin', 'rahvaarv' => 8356700),
    'Belgia' => array('pealinn' => 'Brüssel', 'rahvaarv' => 10827500)
);

var_dump($riigid);
echo "<br><br>";
echo $riigid['Eesti']['pealinn'];
echo "<br><br>";
foreach ($riigid as $riik=>$andmed){
    echo "$riik - ";
    foreach($andmed as $detailid){
        echo "$detailid ";
    }
    echo "<br>";
}