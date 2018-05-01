<?php
    $fp = fopen("test1/mike02.txt",'r+');

//    $cont = nl2br(fread($fp,4096));
//    echo $cont;

//    while ($c=fgetc($fp)){
//        echo $c.'<br>';
//    }

    while ($s=fgets($fp)){
        echo $s.'<br>';
    }


    fclose($fp);