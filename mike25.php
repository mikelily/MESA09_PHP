<?php
    function test1($x,$y): int{
        return $x / $y;
    }

    $r = test1(10,3);
    var_dump($r);