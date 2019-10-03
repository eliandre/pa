<?php
$enimi = 'Karin';
$pnimi = "Eegreid";
$nimi = $enimi.' '.$pnimi;
$vanus = 37;
$kaal = 69.5;
//kahekordsed jutumärgid
echo "$nimi on $vanus aastane<br>";

//ühekordsed jutumärgid
echo $nimi.' on '.$vanus.' aastane<br>';

//muutuja käänamine
echo "${enimi}il on kiire auto!<br>";

//jutumärkide kuvamine
echo '"Welcome to Estonia"<br>';
echo "Shakespeare'i teosed<br>";

//kui lauses on mõlemad jutumärgid
echo "\"It's My Life\" - Dr. Alban<br>";