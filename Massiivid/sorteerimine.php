<?php

$hinded = array(
    'kehv' => 2,
    'rahuldav' => 3,
    'hea' => 4,
    'väga hea' => 5
);
// sorteeritakse võtme järgi
ksort($hinded);
var_dump($hinded);
echo "<br><br>";
// sorteeritakse väärtuse järgi
asort($hinded);
var_dump($hinded);