<?php
    $m = rand(1,12);
    $day = 0;

    switch ($m){
        case 2:
            $day = 28;
            break;
        case (($m<8&&$m%2==1)||($m>7&&$m%2==0)):
//        case 1:case 3:case 5:case 7:case 8:case 10:case 12:
            $day = 31;
            break;
        case (($m<8&&$m%2==0)||($m>7&&$m%2==1)):
            $day = 30;
            break;
        default:
            $day = 'rand(1,12) error';
            break;
    };
    echo "{$m} 月有 {$day} 天";
    echo '<hr>';