<?php
    $name = 'mike';
    $weight = 80;
    echo $name . ':' . $weight . 'Kg' . '<br>';
    echo "{$name}:{$weight}Kg"; //變數用 { } 包住
    echo '{$name}:{$weight}Kg' . '<br>'; //裡面打啥就show啥

    $big = 'b';
    $Big = 'B';

    echo $big . '+' . $Big;