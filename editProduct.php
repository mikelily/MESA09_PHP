<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<?php
    include_once 'sql.php';
    include_once 'Product.php';
    if(isset($_REQUEST['editid'])){
        // 撈出指定的資料
        $editid  = $_REQUEST['editid'];
        $sql     = "select * from product where id={$editid}";
        $result  = $mysqli->query($sql);
        $product = $result->fetch_object("Product");
    }elseif(isset($_REQUEST['id'])){
        $id    = $_REQUEST['id'];
        $pname = $_REQUEST['pname'];
        $price = $_REQUEST['price'];
        $qty   = $_REQUEST['qty'];
        $sql   = "update product set pname='{$pname}', "
            . "price={$price}, qty={$qty} " . "where id={$id}";
        $mysqli->query($sql);
        header("Location: bmain.php");
    }else{
        header('Location: bmain.php');
    }
    // update product set field=value, f2=v where id = ?
?>
Edit Product:
<hr/>
<form>
    <input type="hidden" name="id" value="<?php echo $product->id; ?>">
    PName: <input name="pname" value="<?php echo $product->pname; ?>"/><br/>
    Price: <input type="number" name="price"
                  value="<?php echo $product->price; ?>"/><br/>
    Qty.: <input type="number" name="qty" value="<?php echo $product->qty; ?>"/><br/>
    <input type="submit" value="Edit"/>
</form>