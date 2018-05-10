<?php
    class MyQuery {
        var $mysqli;

        function __construct($mysqli){
            $this->mysqli = $mysqli;
        }

        function getInfo($pid, $field){
            $sql = "select * from product where id = $pid";
            $result = $this->mysqli->query($sql);
            if($result->num_rows == 0)
                return false;
            else
                $data = $result->fetch_assoc();
        }
    }