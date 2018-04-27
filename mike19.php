<?php
    $a[] =[3,4,5,6,7];
    $a[] =[1,2,3];
    //    $a[] = 3;
    var_dump($a);
    echo "<br>";
    echo count($a);
    //    echo count($a[0]);
    echo count($a[1]);
    echo "<br>";

    foreach ($a as $k){
        foreach($k as $k2 => $v2)
            echo "{$v2} ,";
        echo "<br>";
    }