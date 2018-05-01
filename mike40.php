<?php
    $filename = $_REQUEST['filename'];
    $cont = $_REQUEST['cont'];

    $fp = fopen("test1/{$filename}",w);
    fwrite($fp,$cont);
    fclose($fp);

    header("Location: test1/{$filename}");