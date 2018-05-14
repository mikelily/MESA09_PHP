<?php
    include_once 'sql.php';
    if (isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd  = password_hash(
            $_REQUEST['passwd'],PASSWORD_DEFAULT
        );
        $sql = "select * from member " .
            "where account=? and passwd=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $account, $passwd);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows>0){
            echo 'OK';
        }else{
            echo 'XX';
        }
    }
?>

<h1>Brad Big Company</h1>
<hr/>
<form method="get">
    Account: <input name="account" /><br>
    Password: <input type="password" name="passwd" /><br>
    <input type="submit" value="Login" />
</form>