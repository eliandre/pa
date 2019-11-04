<?php
$raamatud = array(
    'esimene' => array('Pealkiri' => 'Roostevaba mõõk', 'Autor' => 'Eno Raud', 'Žanr' => "seiklus"),
    'teine' => array('Pealkiri' => 'Kevade', 'Autor' => 'Oskar Luts', 'Žanr' => "ulme"),
    'kolmas' => array('Pealkiri' => 'Kalevipoeg', 'Autor' => 'Friedrich Reinhold Kreutzwald', 'Žanr' => "fantaasia"),
);

sort($raamatud);
foreach ($raamatud as $raamat=>$andmed){
    //echo "$raamat[$raamat]: ";
    foreach($andmed as $key => $detailid){
        echo $key.": ".$detailid."<br>";
    }
    echo "<br>";
}
echo "Raamatuid kokku: ".count($raamatud)." tk";