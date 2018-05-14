<?php
    include_once 'Cart.php';
    include_once 'Product.php';
    include_once 'sql.php';
    include_once 'MyQuery.php';
    session_start();
    $cart    = $_SESSION['cart'];
    $myquery = new MyQuery($mysqli);
    $i       = 1;
?>
<table border="1" width="100%">
    <tr>
        <th>No.</th>
        <th>PName</th>
        <th>Price</th>
        <th>Num</th>
        <th>$</th>
    </tr>
    <?php
        foreach($cart->getList() as $item => $num){
            $price = $myquery->getPInfo($item,MyQuery::QUERY_PRICE);
            $sum   = $num * $price;
            echo '<tr>';
            echo "<td>{$i}</td>";
            echo "<td>" . $myquery->getPInfo($item,MyQuery::QUERY_PNAME)
                . "</td>";
            echo "<td>{$price}</td>";
            echo "<td>{$num}</td>";
            echo "<td>{$sum}</td>";
            echo '</tr>';
            $i++;
        }
    ?>
</table>
<a href="close.php">Close</a>