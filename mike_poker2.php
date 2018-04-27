<?php
    $poker = range(0,51);
    shuffle($poker);

//    foreach ($poker as $k => $v){
//        echo "{$k} : {$v}<br>";
//    }
    echo '<hr>';

    $players = array(array(),array(),array(),array(),);

    foreach ($poker as $i => $p){
        $players[$i%4][] = $p;
    }

