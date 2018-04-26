<?php
    $ans = $x = $y = $m =""; //預設值 string
    $op = 1;
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
                break;
            case 4:
                $ans = (int)($x / $y);
                $m = $x % $y;
                break;
        }
    };
?>
<form>
    <input type = "text" name = "x" value="<?php echo $x; ?>"/>
    <select name="op">
        <option value="1" <?php if($op==1) {echo 'selected';} ?>>+</option>
        <option value="2" <?php if($op==2) {echo 'selected';} ?>>-</option>
        <option value="3" <?php if($op==3) {echo 'selected';} ?>>*</option>
        <option value="4" <?php if($op==4) {echo 'selected';} ?>>/</option>
    </select>
    <input type = "text" name = "y" value="<?php echo $y; ?>"/>
    <input type = "submit" value = "="/>
    <?php
        echo $ans;
        if($m)
            echo "餘{$m}";
    ?>
</form>

