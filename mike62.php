I am 62
<hr>
<?php
    include_once 'MyOOTest.php';
    session_start();

    $s1 = new Student(78,65,99);
    echo $s1->calSum() . '<br>' . $s1->calAvg();
    //    $a = rand(1,49);
    //    echo $a;

    $_SESSION['s1'] = $s1;
?>
<hr>
<a href="mike63.php">63</a>
