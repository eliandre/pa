<?php

$arv = 20;
// kasutaja arv
$kasutaja = 5;

if ($kasutaja == $arv){
    echo 'Arvasid ära!<br>';
    echo 'Arv on '.$kasutaja.'<br>';
}
// kui arvud pole võrded, kas vahemik etteantud ja kasuta arvude vahel on väiksem või võrdne 5-ga
else {
    //kui arvud on negatiivsed, siis teisendame vahemiku leidmiseks positiivseteks
    $vahemik = abs($kasutaja - $arv);

    if($vahemik <= 5){
        echo 'Tulemus on juba lähedal<br>';
    }
    if($kasutaja > $arv) {
        echo $kasutaja.' on suurem kui etteantud arv';
    }
    else {
        echo $kasutaja.' on väiksem kui etteantud arv';
    }
}