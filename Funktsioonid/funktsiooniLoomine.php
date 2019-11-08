<?php
function tervita($enimi="hea" ,$pnimi="külaline"){
    return "Tere, $enimi $pnimi";
}

echo tervita();
echo "<br>";
echo tervita("Andre", "Eli");