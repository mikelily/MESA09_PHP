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

?>

<table border="1" width="100%">
    <?php
        for($i=0;$i<10;$i++){
            echo "<tr>";
            for($j=0;$j<10;$j++){
                echo "<td height='40' align='center'><font color='";
                if(checkPrime($num[$i*10+$j])){
                    echo "red'>{$num[$i*10+$j]}</font>";
                }else
                    echo "blue'>{$num[$i*10+$j]}</font>";

                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
</table>