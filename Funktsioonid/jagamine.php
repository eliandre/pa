<?php

function jagamine($arv1, $arv2){
    if($arv2 <= 0){
        return "Nimetaja peab olema nullist suurem.";
    }
    else{
        return $arv1/$arv2;
    }
}

echo jagamine(10,8);