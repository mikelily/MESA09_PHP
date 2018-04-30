<?php
    include 'mikeapis.php';

    $result = $hist ='';
    if(isset($_POST['ans'])){
        $ans = $_POST['ans'];

        $guess = $_POST['guess'];
        $hist = $_POST['hist'];
        $result = checkAB($ans, $guess);
        $hist .= "{$guess} : {$result}<br>";
    }else
        $ans = createAns(3);
    echo $ans . '<br>';
    //$result = checkAB($ans,$guess);

?>

<form method="POST">
    Guess Number:<input type="number" name="guess" />
    <input type="submit" value="Guess" />
    <input type="hidden" name="ans" value="<?php echo $ans; ?>" />
    <input type="hidden" name="hist" value="<?php echo $hist; ?>" />

</form>
<div>
    <?php
        if(isset($_POST['guess']))
            echo $hist;
    ?>
</div>
