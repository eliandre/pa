<?php
$i = 1;
echo "<table border='0'\n";
echo "<tr>";
echo "<td>Arv</td>";
echo "<td>Ruut</td>";
echo "<td>Kuup</td>";
echo "<td>Juur</td>";
echo "</tr>";

while($i <= 10){
    echo "<tr>\n";
    $n = 1;
    while($n <= 1){
        echo "<td>".$i."</td>";
        echo "<td>".pow($i,2)."</td>";
        echo "<td>".pow($i,3)."</td>";
        echo "<td>".sqrt($i)."</td>";
        $n++;
    }
    echo "</tr>\n";
    $i++;
}