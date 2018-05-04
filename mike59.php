<?php
    $mysqli = new mysqli('127.0.0.1','root',
        'root','iii');
    mysqli_set_charset($mysqli,"utf8");
    //$mysqli->set_charset("utf8");

    $sql = 'insert into cust (cname,tel,birthday) values ("mike","321","2000-02-09")';
    $sql2 = 'delete from cust where id = 1';
    $sql3 = 'update cust set cname="Tony",tel="12312" where id=1';
    $sql4 = 'select * from cust';
//    $mysqli->query($sql2);

    if($result = $mysqli->query($sql4)){
        while ($data = $result->fetch_assoc()){
            foreach ($data as $k => $v){
                echo "{$k} : {$v}<br>";
            }
            echo '<hr>';
        }
    }else{
        echo 'XX';
    }