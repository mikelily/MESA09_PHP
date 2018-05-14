<?php
    // account = xxx
    // passwd = xxx
    // return {'status':'0', 'id':12, 'name':'brad'};
    // {'status':'1', 'message':'account not exist'};
    // {'status':'2', 'message':'password error'};
    // {'status':'3', 'message':'data error'};
    class Message {
    }
    include_once 'sql.php';
    include_once 'Member.php';
    $mesg = new Message();
    if (isset($_REQUEST['account']) &&
        isset($_REQUEST['passwd'])){
        $account = $_REQUEST['account'];
        $passwd = $_REQUEST['passwd'];
        $sql = "select * from member " .
            "where account=?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $account);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0){
            $member = $result->fetch_object("Member");
            if (password_verify($passwd , $member->passwd)){
                // 0
                $mesg->status = '0';
                $mesg->id = $member->id;
                $mesg->name = $member->name;
            }else{
                // 2
                $mesg->status = '2';
                $mesg->message = 'password error';
            }
        }else{
            // 1
            $mesg->status = '1';
            $mesg->message = 'account not exist';
        }
    }else{
        $mesg->status = '3';
        $mesg->message = 'data error';
        //echo "{'status':'3', 'message':'data error'}";
    }
    echo json_encode($mesg);