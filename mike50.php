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

    echo '<hr>';

    $mike = new People();
    $mike->setBike();
    echo $mike->bike->getSpeed();

    echo '<hr>';

    $you = new People();
    $you->setBike();
    $you->bike->upSpeed();
$you->bike->upSpeed();
$you->bike->upSpeed();
$you->bike->upSpeed();
    echo $you->bike->getSpeed();