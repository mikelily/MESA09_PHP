<?php
    /*
    All copyright reserved by Achilles
    My web:achilles.lssc.cf
    */
    chdir(dirname(__FILE__));
    date_default_timezone_set("Asia/Taipei");
    $file        = 'log.txt';
    $fail_log    = "0\n";
    $success_log = "1,";
    $time        = date('G');
//    echo $time;
//    if($time == 6 || $time == 9 || $time == 12){
//        if(date('i') == "30"){
            //UV
            $uv = file_get_contents(
                "https://www.cwb.gov.tw/V7/observe/UVI/UVI.htm"
            );
//            var_dump($uv);
            $taipei_uv = explode("臺北 紫外線指數 :",$uv);
            $taipei_uv = explode("<BR>",$taipei_uv[1])[0];
            if($taipei_uv <= 2){
                $garding = "低量級";
            }
            if($taipei_uv <= 5 && $taipei_uv >= 3){
                $garding = "中量級";
            }
            if($taipei_uv <= 7 && $taipei_uv >= 6){
                $garding = "高量級";
            }
            if($taipei_uv <= 10 && $taipei_uv >= 8){
                $garding = "過量級";
            }
            if($taipei_uv >= 11){
                $garding = "危險級!!";
            }
            //ar_dump($taipei_uv);

            //Air pollution
            $a_target = file_get_contents(
                "https://taqm.epa.gov.tw/taqm/aqs.ashx?lang=tw&act=aqi-epa&ts=1521093436539"
            );
            $aqi      = explode("121.578611\",\"AQI\":\"",$a_target)[1];
            $aqi      = explode("\",\"Main",$aqi)[0];
            $pm       = explode("121.578611\",\"AQI\":\"",$a_target)[1];
            $pm       = explode("PM25\":\"",$pm)[1];
            $pm       = explode("\",\"PM25_",$pm)[0];
            //var_dump($aqi);
            //var_dump($pm);
            $green_yellow = "綠～黃";
            $orange       = "橘";
            $red          = "紅";
            $purple       = "紫";
            $maroon       = "褐紅";
            if($aqi <= 100){
                $garding2 = "可正常戶外活動";
                $color    = $green_yellow;
            }
            if($aqi >= 101 && $aqi <= 150){
                $garding2 = "減少長時間劇烈運動";
                $color    = $orange;
            }
            if($aqi >= 151 && $aqi <= 200){
                $garding2 = "減少戶外活動,配戴口罩";
                $color    = $red;
            }
            if($aqi >= 201 && $aqi <= 300){
                $garding2 = "減少戶外活動,配戴口罩,增加休息時間";
                $color    = $purple;
            }
            if($aqi >= 301 && $aqi <= 500){
                $garding2 = "世界末日,停止戶外活動,戴防毒面具XD";
                $color    = $maroon;
            }
            $air_out = $aqi . " " . "PM2.5：" . $pm . " " . $color;
//            file_put_contents(
//                $file,
//                date('l jS \of F Y h:i:s A') . "\n" . $success_log . $taipei_uv
//                . "," . $air_out . "\n",FILE_APPEND | LOCK_EX
//            );
            //IFTTT
            $ifttt
                 = "https://maker.ifttt.com/trigger/Air&UV/with/key/beemMlRoWYgadFjC4_jCEJ";
            $ch  = curl_init($ifttt);
            $xml = 'value1=' . $taipei_uv . "," . $garding . '&value2='
                . $air_out . '&value3=' . ":" . $garding2 . '';

            curl_setopt($ch,CURLOPT_POST,1);
            curl_setopt($ch,CURLOPT_POSTFIELDS,$xml);

            $response = curl_exec($ch);
            //var_dump($response);
            curl_close($ch);
//        }
//    }else{
////        file_put_contents(
////            $file,date('l jS \of F Y h:i:s A') . "\n" . $fail_log,
////            FILE_APPEND | LOCK_EX
////        );
//    }
?>