<?php
    //用交換的方式洗牌

    //給一副沒洗過的牌
    for($i=0;$i<52;$i++){
        $poker[$i] = $i;
    };

    //隨機一張後面的牌，與之交換
    for($i=0;$i<52;$i++){
        if($i==51)
            break;
        else{
            $rand = rand($i+1,51);
            $tmp =0;
            $tmp = $poker[$i];
            $poker[$i] = $poker[$rand];
            $poker[$rand] = $tmp;
        }
    };

    //print
    $forBr = 0;
    foreach ($poker as $v){
        if($forBr==13){
            echo '<br>';
            $forBr = 0;
        }
        echo "{$v} ";
        $forBr++;
    };
?>

