<?php
    include_once 'sql.php';
    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd  = password_hash(
            $_REQUEST['passwd'],PASSWORD_DEFAULT
        );
//        $passwd2 = $_REQUEST['passwd'];
        $name    = $_REQUEST['name'];
        $icon    = null;
        if($_FILES['icon']['error'] == 0){
            $icon
                = addslashes(file_get_contents($_FILES['icon']['tmp_name']));
        }
        $sql = "insert into `member` (`account`,`passwd`,`name`,`icon`) "
            . "values ('{$account}','{$passwd}','{$name}', '{$icon}')";
        if($mysqli->query($sql)){
//            echo "hash : {$passwd}<br>";
//            echo "pwd : {$passwd2}<br>";
//            if(password_verify($passwd2,$passwd)){
//                echo 'OK';
//            }else{
//                echo 'XX';
//            }
            header('Location: login.php');
        }else{
            echo 'insert error';
        }
    }
?>
<script>
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            var ret = xhttp.responseText;
            if (ret != 0) {
                document.getElementById('mesg').innerHTML = 'XXX';
            } else {
                document.getElementById('mesg').innerHTML = 'OK';
            }
        }
    }

    function isNewAccount() {
        var account = document.getElementById('account').value;
        xhttp.open('GET', 'isNewAccount.php?account=' + account, true);
        xhttp.send();
    }
</script>

<form method="post" enctype="multipart/form-data">
    Account: <input name="account" id="account"
                    onchange="isNewAccount()"/>
    <span id="mesg"></span><br>
    Password: <input type="password" name="passwd"/><br>
    Real name: <input name="name"/><br>
    Icon: <input type="file" name="icon"/><br>
    <input type="submit" value="New"/>
</form>