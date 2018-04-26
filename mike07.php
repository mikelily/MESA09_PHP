<?php
    $ans = $x = $y =""; //預設值 string
    if(isset($_GET['x']) && isset($_GET['y'])) {
        $x = $_GET['x'];
        //    echo $x . ':' . gettype($x). "<br>";
        $y = $_GET['y'];
        //    var_dump($y);
        //    echo "<br>";
        //    echo $y . ':' . gettype($y);
        //    echo "<br>";
        $ans = $x + $y; //integer
//        echo "{$x} + {$y} = {$ans}";
    };
?>
<form>
    <input type = "text" name = "x" value="<?php echo $x; ?>"/>
    <select>
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type = "text" name = "y" value="<?php echo $y; ?>"/>
    <input type = "submit" value = "="/>
    <?php
//        if(isset($_GET['x']) && isset($_GET['y'])) {
//            echo $ans;
//        };
        echo $ans;
    ?>
</form>

