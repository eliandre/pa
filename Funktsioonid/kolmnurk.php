<?php
function kolmnurk($a, $b){

    $c = round(sqrt((pow($a,2)+pow($b,2))));
    return "Kolmnurga kolmas külg on ".$c;
}

echo kolmnurk(8,10);