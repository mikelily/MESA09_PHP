<?php
    $fp = opendir("test1");
    while($file = readdir($fp)){
        if(is_dir("test1/{$file}")){
            echo '[dir]';
        }else if(is_file("test1/{$file}")){
            echo '[file]';
        }

        echo $file . ': ' . filesize("test1/{$file}") . ' bytes, '.
            fileatime("test1/{$file}").'<br>';
    }
    closedir($fp);
