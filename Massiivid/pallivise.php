<?php
$nimed = array('Martin','Hardi','Juhan','Tiina','Sirje','Kaie');
$pallivisked = array(33, 32, 27, 11, 15, 28);

echo "Osalejate arv on ".count($nimed)."<br><br>";
echo "Keskmine palliviske tulemus on ".array_sum($pallivisked)/count($pallivisked)."<br><br>";
echo "Parim tulemus on ".max($pallivisked)." ja selle viskas ".$nimed[0]."<br><br>";
