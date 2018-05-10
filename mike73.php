<?php
    $cont = file_get_contents('test2.json');
    $root = json_decode($cont);
    $xmlHead = $root->XML_Head;
//    "language": "C",
//    "listname": "1",
//    "orgname": "315080000H",
//    "updatetime": "2018-05-10 01:00:00"
    echo "XML Header :<br>";
    echo "Language : {$xmlHead->language}<br>";
    echo "Listname : {$xmlHead->listname}<br>";
    echo "Orgname : {$xmlHead->orgname}<br>";
    echo "Updatetime : {$xmlHead->updatetime}<br><hr>";
    $infos = $root->XML_Head->Infos->Info;
//    var_dump($infos);
    foreach($infos as $k => $v){
//        $num = $k+1;
//        echo "第{$num}筆資料：<br>";
        foreach($v as $k2 => $v2){
            echo "{$k2} : {$v2}<br>";
        }
        echo '<hr>';
    }