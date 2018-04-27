<?php
    $poker = range(0,51);
    shuffle($poker);

//    foreach ($poker as $k => $v){
//        echo "{$k} : {$v}<br>";
//    }
    echo '<hr>';

    $players = array(array(),array(),array(),array(),);

    foreach ($poker as $i => $p){
        $players[$i%4][] = $p;
    }

?>

<table border="1" width="100%">
        <?php
            $suits = array('&spades;','&hearts;','&clubs;','&diams;');
            $v = ['A',2,3,4,5,6,7,8,9,10,'J','Q','K'];
            foreach ($players as $player) {
                echo "<tr>";
                foreach ($player as $p) {
                    echo "<td><font color='";
                    if ((int)($p/13)%4==1){
                        echo "red' >";
                        //echo "<td>{$suits[(int)($p/13)]}{$v[$p%13]}</td>";
                        echo "{$suits[(int)($p/13)]}{$v[$p%13]}";
                    }else {
                        echo "black' >";
                        echo "{$suits[(int)($p/13)]}{$v[$p%13]}";
                    }
//                        echo "{$suits[(int)($p/13)]} {$card13[$p%4]}";

                    echo "</font></td>";
                    //echo "<td>{$p}</td>";
                }
                echo "</tr>";
            }
        ?>
</table>
