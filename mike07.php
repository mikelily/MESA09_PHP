<?php
    $ans = $x = $y = $op =""; //預設值 string

    if(isset($_GET['x']) && isset($_GET['y'])) {
        $x = $_GET['x'];
        $y = $_GET['y'];
        $op = $_GET['op'];


        switch ($op) {
            case 1:
                $ans = $x + $y;
                break;
            case 2:
                $ans = $x - $y;
                break;
            case 3:
                $ans = $x * $y;
            case 4:
                $ans = $x / $y;
                break;
        }
    };
?>
<form>
    <input type = "text" name = "x" value="<?php echo $x; ?>"/>
    <select name="op">
        <option value="1">+</option>
        <option value="2">-</option>
        <option value="3">*</option>
        <option value="4">/</option>
    </select>
    <input type = "text" name = "y" value="<?php echo $y; ?>"/>
    <input type = "submit" value = "="/>
    <?php
        echo $ans;
    ?>
</form>

