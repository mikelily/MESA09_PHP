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

/**
 * @param $twid
 * @return bool
 */
function checkTWId($twid):bool{
        $ret = false;

//        $ret = true;
//        if(strlen($twid)!=10){
//            $ret = false;
//        };
//        if(!is_numeric(substr($twid,1,9))){
//            $ret = false;
//        };
//        //ctype_alpha
//        if(!ctype_alpha(substr($twid,0,1))){
//            $ret = false;
//        };
//        if(!(substr($twid,1,1)==1 || substr($twid,1,1)==2)){
//            $ret = false;
//        };
//
        if(preg_match('/^[A-Z][12][0-9]{8}$/',$twid)){
            $letters = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';
            $c1 = substr($twid,0,1);
            $n12 = strpos($letters,$c1) + 10;
            $n1 = (int)($n12/10);
            $n2 = $n12 % 10;
            $n3 = substr($twid,1,1);
            $n4 = substr($twid,2,1);
            $n5 = substr($twid,3,1);
            $n6 = substr($twid,4,1);
            $n7 = substr($twid,5,1);
            $n8 = substr($twid,6,1);
            $n9 = substr($twid,7,1);
            $n10 = substr($twid,8,1);
            $n11 = substr($twid,9,1);

            $sum = $n1 + $n2*9 + $n3*8 + $n4*7 + $n5*6 +
                $n6*5 + $n7*4 + $n8*3 + $n9*2 + $n10 + $n11;
            $ret = ($sum%10 == 0);

            //echo $sum;
        }

        return $ret;
    }