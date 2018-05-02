<?php
    $img = imagecreatefromjpeg("coffee.jpg");
    $blue = imagecolorallocate($img,0,0,255);
    imagettftext($img,24,30 , 100 , 300 ,
        $blue , "./brad.ttf" , "A" );
    imagettftext($img,20,-24 , 115 , 300 ,
        $blue , "./brad.ttf" , "B" );
    imagettftext($img,30,10 , 125 , 300 ,
        $blue , "./brad.ttf" , "7" );
    imagettftext($img,24,-15 , 135 , 300 ,
        $blue , "./brad.ttf" , "0" );
    header("Content-type: image/jpeg");
    imagejpeg($img);
    imagedestroy($img);