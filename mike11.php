<?php
    $score = rand(0,100);
    echo $score . "<br>";
//    if($score >= 60){
//        echo 'Pass';
//    }else
//        echo 'Not Pass';
    if($score >= 90)
        echo 'A';
    else if($score >= 80){
        echo 'B';
        $score = 14;
    }else if($score >= 70)
        echo 'C';
    else if($score >= 60)
        echo 'D';
    else
        echo 'E';

    echo '<hr>';
    $var1 = 10; $var2 = 3;
    if($var1-- <10 && $var2++ > 3){
        echo "OK: {$var1} : {$var2}<br>";
    }else{
        echo "XX: {$var1} : {$var2}<br>";
    }
//    Note : 判斷式前面已經決定，就不會進入後面的判斷




//    switch ($score){
//        case ($score>=90):
//            echo "A";
//            break;
//        case ($score>=80):
//            echo "B";
//            break;
//        case ($score>=70):
//            echo "C";
//            break;
//        case ($score>=60):
//            echo "D";
//            break;
//        default:
//            echo "Not Pass";
//            break;
//    };

