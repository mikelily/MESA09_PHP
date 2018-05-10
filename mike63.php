I am 63
<hr>
<?php
    include_once 'MyOOTest.php';
    session_start();

    $s1 = $_SESSION['s1'];
    echo $s1->calSum() . '<br>' . $s1->calAvg();

    //echo $a;