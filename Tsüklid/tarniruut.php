<?php

$ridadeArv = 7;
$veergudeArv = 7;
for($reaNR = 1; $reaNR <= $ridadeArv; $reaNR++){
    echo $reaNR;
    //veergude määramine ja vahetus
    for($veeruNR= 1; $veeruNR <= $reaNR; $veeruNR++){
        echo '*';
    }
    echo '<br>';
}

