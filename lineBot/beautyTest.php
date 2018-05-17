<?php

    $dsn       = "mysql:host=127.0.0.1;dbname=lineBot";
    $pdo       = new PDO($dsn,'root','root');

    $test = "https://www.ptt.cc/bbs/Beauty/M.1526190596.A.7A0.html";

//    if(aboutSQL($test)){
//        echo 'OK';
//    }else
//        echo 'XX';

    for($i=0;$i<3;$i++)
        aboutSQL($test,$pdo);
//    SELECT * FROM Persons WHERE City='Beijing'

    function aboutSQL($tempBlow,$pdo){

        $queryTemp = "select * from record where url='".$tempBlow."'";
        echo $queryTemp . "<br>";
        $stmt = $pdo->query($queryTemp);
        var_dump($stmt->rowCount());
        if($stmt->rowCount() < 1){
            //            Not in DB
            $queryTemp = "insert into record values('" . $tempBlow . "')";
            echo $queryTemp . "<br>";
            $pdo->query($queryTemp);
            return true;
        }else{
            //            Already in DB
            return false;
        }

    }