<?php
    include 'mikeapis.php';

    $result = '';
    if(isset($_GET['ans'])){
        $ans = $_GET['ans'];
        $guess = $_GET['guess'];
        $result = checkAB($ans, $guess);
    }else
        $ans = createAns(4);
    echo $ans . '<br>';


?>

<form>
    Guess Number:<input type="number" name="guess" />
    <input type="submit" value="Guess" />
    <input type="hidden" name="ans" value="<?php echo $ans; ?>" />


</form>
<div>
    <?php
        echo $result;
    ?>
</div>
