
<?php
//    header("Content-Type: application/json; charset=UTF-8");
//    $cont = file_get_contents("https://cloud.culture.tw/frontsite/trans/SearchShowAction.do?method=doFindTypeJ&category=6");
    $cont = file_get_contents('test.json');
    //var_dump($cont);
    //    $obj1 = new MyTest2(1,2,3);
    //    foreach ($obj1 as $k => $v){
    //        echo "{$k} : {$v}<br>";
    //    }
    $root = json_decode($cont);
    foreach ($root as $k => $v){
        $title = $v->title;
        $showUnit = $v->showUnit;
//        echo "{$title} : {$showUnit}<br>";
//        echo "{$k} : {$v}";
        //var_dump($v);
        echo '<hr>';
        foreach($v as $k2 => $v2){
//            var_dump($v2);
            if(is_array($v2)){
//                echo "{$k2} : <b";
                foreach($v2 as $k3 => $v3){
                    if(is_object($v3)){
//                        "time": "2018/01/01 09:00:00",
//                        "location": "苗栗縣銅鑼鄉銅科南路6號",
//                        "locationName": "臺灣客家文化館",
//                        "onSales": "Y",
//                        "price": "",
//                        "latitude": "24.4663812",
//                        "longitude": "120.7645055",
//                        "endTime": "2018/08/15 17:00:00"
//                        echo "{$k3}<br>";
                        $time = $v3->time;
                        echo "&nbsp&nbsp開始時間 : {$time}<br>";
                        $endTime = $v3->endTime;
                        echo "&nbsp&nbsp結束時間 : {$endTime}<br>";
                        $location = $v3->location;
//                        echo "&nbsp&nbsp地點 : {$location}<br>";
                        $locationName = $v3->locationName;
                        echo "&nbsp&nbsp地點 : {$locationName}({$location})<br>";
                        $onSales = $v3->onSales;
                        echo "&nbsp&nbsponSales : {$onSales}<br>";
                        $price = $v3->price;
                        echo "&nbsp&nbspprice : {$price}<br>";
                        $latitude = $v3->latitude;
                        $longitude = $v3->longitude;
                        echo "&nbsp&nbsp經緯度 : {$latitude},{$longitude}<br>";


                    }else{
                        echo "&nbsp&nbsp";
                        echo "{$v3}<br>";
                    }
//                        echo "{$k3} : {$v3}";
                }
            }else
                echo "{$k2} : {$v2}<br>";
        }
    }
    class MyTest2 {
        var $x, $y, $z;
        function __construct($x,$y,$z){
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
        }
    }