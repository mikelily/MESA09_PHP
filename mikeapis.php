<?php
    function createAns($n){
        $tmp = range(0,9);  // 不太清楚
        shuffle($tmp);          // 不太清楚
        $ret ='';
        for($i=0;$i<$n;$i++){
            $ret .= $tmp[$i];
        }
        return $ret;
    };