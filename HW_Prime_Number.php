<?php
    for($i=0;$i<100;$i++){
        $num[]=$i+1;
    }
    function checkPrime($n):bool {
        if($n==1)
            return false;
        elseif ($n==2)
            return true;
        else{
            $torf = true;
            for($i=2;$i<$n;$i++){
                if($n%$i == 0){
                    $torf = false;
                    break;
                }
            };
            return ($torf?true:false);
        }
    }

    for($i=0;$i<100;$i++){
        echo $num[$i] . ':';
        if(checkPrime($num[$i]))
            echo 'True';
        else
            echo 'False';

        echo '<br>';

    }

?>






<!--<table border="1" width="100%">-->
<!--    -->
<!--</table>-->