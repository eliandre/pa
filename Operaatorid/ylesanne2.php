<?php
$a = 876;
$b = 456;

echo $a.'+'.$b.'<br>';
echo 'Vastus: '.($a + $b).'<br>';
echo $a.'-'.$b.'<br>';
echo 'Vastus: '.($a - $b).'<br>';
echo $a.'*'.$b.'<br>';
echo 'Vastus: '.($a * $b).'<br>';
echo $a.'/'.$b.'<br>';
echo 'Vastus: '.($a / $b).'<br>';
echo $a.'%'.$b.'<br>';
echo 'Vastus: '.($a % $b).'<br><br>';

//Celsius Fahrenheiti
$cel = 23;
$fah = (9/5)*$cel+32;
echo 'Celsius Fahrenheiti<br>';
echo $cel.' kraadi Celsiust on '.$fah.' kraadi Fahrenheiti.<br><br>';

$raadius = 6;
$pindala = pi()*$raadius*$raadius;
$ymber = pi()*2*$raadius;
echo 'Ringi raadius on '.$raadius.'<br>';
echo 'Ringi pindala on '.$pindala.' ning ümbermõõt on '.$ymber.'.';
