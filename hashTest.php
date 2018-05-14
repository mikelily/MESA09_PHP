<?php

    $pass = '123';
    $hash = '$2y$10$MMhLDOUUDm2Dj';

    echo $pass . '<br>';
    echo $hash . '<br>';

    if( password_verify($pass,$hash) )
        echo 'success';
    else echo 'failure';