<?php
    include_once 'mike_bike.php';

    echo Bike::$counter . '台<br>';
    $myBike = new Bike();
    echo $myBike->getSpeed().'<br>';

    echo Bike::$counter . '台<br>';
    $urBike = new Bike(1.23);
    echo $urBike->getSpeed().'<br>';

    echo Bike::$counter . '台<br>';