<?php
    include_once 'mike_bike.php';

    $myBike = new Bike();

//    echo $myBike->speed. '<br>';

    $times=0;
    do{
        $myBike->upSpeed();
        $times++;
    }while($myBike->getSpeed() < 3);

    echo "<br>共踩了{$times}次<br>目前速度為{$myBike->getSpeed()}";