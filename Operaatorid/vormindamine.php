<?php
//muutuja väärtuste vormindamine
$nimi = 'Mari';
$vanus = 27;
printf('Tere, %s <br>', $nimi);
printf('%s on %s-aastane.<br>', $nimi, $vanus);
printf('%s on %d-aastane.', $nimi, $vanus);

$i = 7.26;
$j = 2.369;
$k = $i / $j;
printf('<br>Vastus: %0.3f', $k);

$i = 7.26;
$j = 2.369;
$k = $i / $j;
$vormindatud = sprintf('<br>Vastus: %0.3f', $k);
echo $vormindatud;