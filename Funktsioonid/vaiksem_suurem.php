<?php
//väikseim arv
echo min(11, 21, 32, 43, 56);
echo "<br>";
//suurim arv
echo max(11, 21, 32, 43, 56);

//massiivist arvu leidmine
$arvud = array(11, 21, 32, 43, 56);
echo "<br>".max($arvud);

//suurim mitmest massiivist
$arvud2 = array(22, 43, 21, 78, 44);
echo "<br>".max(max($arvud), max($arvud2));