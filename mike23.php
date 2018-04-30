<?php

    sayYa(); sayYa(); sayYa();
    sayHello('Brad');
    sayHelloV2();
    sayHelloV2('Mike');
    sayHelloV3();
    sayHelloV3('Mike',3);

    echo '<hr>';
    sayHelloV4();
    echo '<hr>';
    sayHelloV4(123);
    echo '<hr>';
    sayHelloV4(123,"mike");
    echo '<hr>';
    sayHelloV4("mike");

    function sayYa(){
        echo 'Ya<br>';
    };

    function sayHello($name){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV2($name = 'World'){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV3($name = 'World',$times=1){
        for($i=0;$i<$times;$i++)
            echo "Hello, {$name}<br>";
    }
    function sayHelloV4(){
//        捕捉所有傳遞進來的參數 => Array
        $ps = func_get_args();
        foreach ($ps as $k => $v){
            echo "{$k} : {$v}<br>";
        }
    }