<?php
    $x = $_GET['x'];
    echo $x . ':' . gettype($x). "<br>";
    $y = $_GET['y'];
    var_dump($y);
    echo "<br>";
    echo $y . ':' . gettype($y);
    echo "<br>";
    $ans = $x + $y;
    echo "{$x} + {$y} = {$ans}";