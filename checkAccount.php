<?php
    include_once 'sql.php';
    include_once 'Member.php';
    include_once 'Cart.php';
    session_start();

    $account = $_REQUEST['account'];
    $passwd = $_REQUEST['passwd'];

    $sql = "select * from member " .
        "where account='{$account}'";
    echo 'Hi';
    $result = $mysqli->query($sql);
    if ($result->num_rows > 0){
        $member = $result->fetch_object("Member");

//                echo $member->id . '<br>';
//                echo $member->name . '<br>';
//                echo $member->account . '<br>';
//                echo $member->passwd . '<br>';

        if (password_verify($passwd , $member->passwd)){
            //            $cart = new Cart();
            //            $member->setCart($cart);
            $_SESSION['member'] = $member;
            $_SESSION['cart'] = new Cart();
            header('Location: main.php');
        }else{
            header('Location: login.php');
        }

    }else{
        header('Location: login.php');
    }
