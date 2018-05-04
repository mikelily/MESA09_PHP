<?php
    class MyOOTest {
        function m1(){
            echo 'MyOOTest:m1()';
        }
    }
    class Sub1 extends MyOOTest{
        function m1(){
            echo 'Sub1:m1()';
        }
        function m2(){
            echo 'Sub1:m2()';
        }
    }
    class Sub2 extends MyOOTest{
        function m1(){
            echo 'Sub2:m1()';
        }
        function m2(){
            echo 'Sub2:m2()';
        }
    }