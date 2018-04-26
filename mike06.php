<?php
    $v1 = 10; $v2 = 3;
    $v3 = $v1 + $v2;
    echo "Math:<br>";
    echo "{$v1} + {$v2} = {$v3}<br>";
    $v3 = $v1 - $v2;
    echo "{$v1} - {$v2} = {$v3}<br>";
    $v3 = $v1 + $v2;
    echo "{$v1} + {$v2} = {$v3}<br>";
    $v3 = $v1 * $v2;
    echo "{$v1} * {$v2} = {$v3}<br>";
    $v3 = $v1 / $v2;
    echo "{$v1} / {$v2} = {$v3}<br>";
    $v3 = (int)($v1 / $v2);
    echo "{$v1} / {$v2} = {$v3}<br>";

    $v3 = $v1 ^ $v2;
    echo "{$v1} ^ {$v2} = {$v3}<br>";

    $v3 = $v1 | $v2;
    echo "{$v1} | {$v2} = {$v3}<br><hr>";

    echo "Math + String:<br>";
    $v4 = '4';
    $v5 = '5';
    $v6 = $v4 + $v5;
    echo "{$v4} + {$v5} = {$v6}<br>";
    $v7 = '4abshdbfk';
    $v8 = $v1 + $v7;
    echo "{$v1} + {$v7} = {$v8}<br>";
