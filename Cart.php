<?php
    class Cart {
        private $list;  // array()
        function __construct(){
            $this->list = array();
        }
        function getList(){
            return $this->list;
        }
        function addProduct($pid, $num){
            $this->list["{$pid}"] = $num;
        }
        function rmProduct($pid){
            unset($this->list["{$pid}"]);
        }

    }