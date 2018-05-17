<?php
//    $db_local="127.0.0.1";
//    $db_username="root";
//    $db_passwd="root";
//    $db_select="ithome_test";
    $dsn = "mysql:host=127.0.0.1;dbname=lineBot";
    $pdo = new PDO($dsn,'root','root');

//    $conn=mysql_connect($db_local,$db_username,$db_passwd);
//    mysql_select_db($db_select);
    $queryTemp = "SELECT * FROM `good_idea` WHERE `name` like '%" . $_GET['term'] . "%'";
    while($pdo->query($queryTemp)->rowCount()){
        $name[] = $row['name'];
    }

    echo json_encode($name); //輸出的格式必須是json
