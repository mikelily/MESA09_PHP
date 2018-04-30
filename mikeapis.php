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

    function checkAB($a,$b){
        $A = $B = 0;
        for($i=0;$i<strlen($a);$i++){
            if(substr($a,$i,1) == substr($b,$i,1))
                $A++;
            elseif (strpos($b,substr($a,$i,1))!==false)
                $B++;
        }
        return "{$A}A{$B}B";
    }