<?php

    $rate = $_GET['rate'];

    // 產生畫布
    $img = ImageCreateTrueColor(400, 40);
    // 開始作畫
    $yellow = ImageColorAllocate($img,255,255,0 );
    $red = ImageColorAllocate($img,255,0,0 );
    ImageFill ( $img, 0, 0, $yellow);
    ImageFilledRectangle($img, 0,0,400*$rate/100,40, $red);
    // 輸出
    header('Content-Type: image/jpeg');
    ImageJPEG($img);
    // 清除記憶體
    ImageDestroy($img);