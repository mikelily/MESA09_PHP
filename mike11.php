<?php
    $score = rand(0,100);
    echo $score . "<br>";
//    if($score >= 60){
//        echo 'Pass';
//    }else
//        echo 'Not Pass';
    switch ($score){
        case ($score>=90):
            echo "A";
            break;
        case ($score>=80):
            echo "B";
            break;
        case ($score>=70):
            echo "C";
            break;
        case ($score>=60):
            echo "D";
            break;
        default:
            echo "Not Pass";
            break;
    };

