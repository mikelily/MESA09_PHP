<?php
    if (!isset($_FILES['upload'])) die("Server Busy");

    $upload = $_FILES['upload'];
//    var_dump($upload);

//    foreach ($upload as $k => $v){
//        echo "{$k} : {$v} <br>";
//    }
    if($upload['error']==0){
        copy($upload['tmp_name'],"test1/wow.png");
    }