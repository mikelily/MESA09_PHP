<?php
//    $poker = array();
//    for ($i=0;$i<52;$i++) $poker[] = $i;

    for ($i = 0; $i < 52; $i++) {
        $rand = rand(0, 51);

        //檢察機制
        $isRepeat = false;
        for($j=0;$j<$i;$j++){
            if($poker[$j] == $rand){
                //重複了
                $isRepeat = true;
                break;
            }
        }
        if(!$isRepeat)
            $poker[$i] = $rand;
        else
            $i--;
    }

    foreach ($poker as $v){
        echo "{$v}<br>";
    }