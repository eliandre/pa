<?php
    $nimed = array('mari', 'kati', 'juhan', 'miku', 'uku');
    //lisamine massiivi
    array_push($nimed, 'ahmed', 'ahti');
    var_dump($nimed);

    //viimase väärtuse eemaldamine
    $nimi = array_pop($nimed);
    echo "<br>Eemaldati: ".$nimi;