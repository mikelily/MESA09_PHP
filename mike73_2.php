<?php
    $jsonIterator = new RecursiveIteratorIterator(
        new RecursiveArrayIterator(json_decode('test2.json', TRUE)),
        RecursiveIteratorIterator::SELF_FIRST);

    foreach ($jsonIterator as $key => $val) {
        if(is_array($val)) {
            echo "$key:\n";
        } else {
            echo "$key => $val\n";
        }
    }