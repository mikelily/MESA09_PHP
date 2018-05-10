<?php
    $passwd = '123456';
    $newpasswd = password_hash($passwd, PASSWORD_DEFAULT);
    echo $passwd . '<br>';
    echo $newpasswd . '<br>';
    if (password_verify('654321', $newpasswd)){
        echo 'OK';
    }else{
        echo 'XX';
    }