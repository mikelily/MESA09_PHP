<?php

    sayYa(); sayYa(); sayYa();
    sayHello('Brad');
    sayHelloV2();
    sayHelloV2('Mike');

    function sayYa(){
        echo 'Ya<br>';
    };

    function sayHello($name){
        echo "Hello, {$name}<br>";
    }

    function sayHelloV2($name = 'World'){
        echo "Hello, {$name}<br>";
    }