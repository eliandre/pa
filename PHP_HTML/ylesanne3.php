<?php
$kera_r = $_GET['kera_r'];
$silindri_r = $_GET['silindri_r'];
$silindri_h = $_GET['silindri_h'];
$koonuse_r = $_GET['koonuse_r'];
$koonuse_h = $_GET['koonuse_h'];

$kera_v = (4*pi()*$kera_r**3)/3;
$silindri_v = pi()*$silindri_h*$silindri_r**2;
$koonuse_v = (pi()*$koonuse_h*$koonuse_r**2)/3;

echo 'Kera ruumala on '.$kera_v.', silindri ruumala on '.$silindri_v.' ja koonuse ruumala on '.$koonuse_v.'.';