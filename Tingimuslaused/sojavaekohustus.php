<?php

$kodakondsus = 'eestlane';
$vanus = 18;
$haridus = 'kutseharidus';

//kontroll
//kas oled eestlane
if($kodakondsus == 'eestlane'){
    //siis saab edasi kontrollida
    //milline on vanus
    if($vanus >= 18){
        //oled piisavalt vana
        //vaatame haridust
        if($haridus == 'pohiharidus' or $haridus == 'kutseharidus' or $haridus == 'keskharidus' or $haridus == 'korgharidus'){
            echo 'Kõik tingimused on sobilikud. Oled valmis ajateenistuseks.';
        }
        else{
            echo 'Haridustase pole piisav.';
        }
    }
    else {
        echo 'Oled veel liiga noor.';
    }
}
else {
    //oled väliskondanik
    echo 'Seadus ei luba teiste riikide kodanikke.';
}