<?php
    $cont = file_get_contents("http://gis.taiwan.net.tw/XMLReleaseALL_public/scenic_spot_C_f.xml");
    $xml = simplexml_load_string($cont);
    $errors = libxml_get_errors();
    foreach ($errors as $error){
        echo "ERROR: {$error}<br>";
    }
    //var_dump($xml);
    //echo '<hr>';
    echo "Start : " . $xml->getName() . ":" . $xml->count();
    echo '<hr>';
    foreach ($xml as $k => $v){
        //echo gettype($v) . ":" . $v->getName() . '<br>';
        foreach ($v as $kk => $vv){
            //echo gettype($vv) . ":" . $vv->getName() . '<br>';
            $attrs = $vv->attributes();
            foreach ($attrs as $field => $value){
                echo "{$field} : {$value}<br>";
            }
            echo '<hr>';
        }
    }