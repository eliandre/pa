<?php

$oppeained = array("matemaatika", "eesti keel", "programmeerimine", "andmebaasid", "ajalugu");

sort($oppeained);
foreach($oppeained as $aine){
    echo $aine."<br>";
}
