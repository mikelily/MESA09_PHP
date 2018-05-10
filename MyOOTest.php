<?php
    class MyOOTest {
        function m1(){
            echo 'MyOOTest:m1()<br>';
        }
    }
    class Sub1 extends MyOOTest {
        var $x;
        function m1(){
            echo 'Sub1:m1()<br>';
        }
        function m2(){
            echo 'Sub1:m2()<br>';
        }
    }
    class Sub2 extends MyOOTest {
        function m1(){
            echo 'Sub2:m1()<br>';
        }
        function m2(){
            echo 'Sub2:m2()<br>';
        }
    }
    abstract class Test1 {
        function m1(){echo 'Test1:m1()<br>';}
        abstract function m2();
    }
    class Test11 extends Test1 {
        function m2(){
            echo 'Test11:m1()<br>';
        }
    }
    class Test12 extends Test1 {
        function m2(){
            echo 'Test12:m1()<br>';
        }
    }
    class Student{
        private $ch,$eng,$math;

        function __construct($ch,$eng,$math){
            $this->ch = $ch;
            $this->eng = $eng;
            $this->math = $math;
        }

        function calSum(){
            return $this->math + $this->ch + $this->eng;
        }

        function calAvg(){
            return $this->calSum()/3;
        }
    }