<?php

/**

 * file name: jagamine.php;

 * autor: anna.karutina;

 * date: 10.10.2019;

 */

// defineerime muutujad

$x = 5;

$y = -5;

// jagame üks arv teisega

$jagatis = $x / $y;

// kontrollime, kas jagaja on 0

if($y == 0){

    // siis väljastame hoiutav lause

    echo 'NULLIGA JAGAMINE ON KEELATUD<br>';

} else {

    echo $x.' / '.$y.' = '.$jagatis.'<br>';

}
