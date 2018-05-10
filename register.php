<?php
    include_once 'sql.php';

    if(isset($_REQUEST['account'])){
        $account = $_REQUEST['account'];
        $passwd  = password_hash(
            $_REQUEST['passwd'],PASSWORD_DEFAULT
        );
        $name    = $_REQUEST['name'];

        $sql = "insert into `member` (`account`,`passwd`,`name`) "
            . "values ('{$account}','{$passwd}','{$name}')";

        if($mysqli->query($sql)){
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

<form>
    Account: <input name="account" id="account"
                    onchange="isNewAccount()"/>
    <span id="mesg"></span><br>
    Password: <input type="password" name="passwd"/><br>
    Real name: <input name="name"/><br>
    <input type="submit" value="New"/>
</form>