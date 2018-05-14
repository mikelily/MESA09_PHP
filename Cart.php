<?php
    class Cart {
        private $list;  // array()
        function __construct(){
            $this->list = array();
        }
        function getList(){
            return $this->list;
        }
        function getItemNum($pid){
            if (isset($this->list["{$pid}"])){
                return $this->list["{$pid}"];
            }else{
                return 0;
            }
        }
        function addProduct($pid, $num){
            $this->list["{$pid}"] = $num;
        }
        function rmProduct($pid){
            unset($this->list["{$pid}"]);
        }
    }