<table border="1" width="100%">
    <tr>
        <td>
            <?php
                for($i=1;$i<10;$i++){
                    $r = $i *2;
                    echo "2 x {$i} = {$r}<br>";
                }
            ?>
        </td>
        <td>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
        </td>
        <td>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
        </td>
        <td>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
        </td>
    </tr>
    <tr>
        <td>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
        </td>
        <td>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
        </td>
        <td>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
        </td>
        <td>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
            2 x 1 = 2<br>
        </td>
    </tr>


</table>

<hr>

<table border="1" width="100%">

    <?php
        for($i=2;$i<10;$i++){
            if($i%4 == 2)
                echo "<tr>";
            echo '<td bgcolor="';
            echo ($i%2==0?'pink':'yellow');
            echo '">';
            for($j=1;$j<10;$j++){
                $r = $i * $j;
                echo "{$i} x {$j} = {$r}<br>";
            }
            echo "</td>";
            if($i%4 == 1)
                echo "</tr>";
        };
    ?>
</table>