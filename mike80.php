<?php
    include_once 'brad81.php';
    $x = $_REQUEST['x'];
    $y = $_REQUEST['y'];
    $result = calXY($x, $y);
    //header("Location: brad82.php?result={$result}");
    $view = file_get_contents('brad82.html');
    $view = str_replace('###', $result, $view);
    echo $view;