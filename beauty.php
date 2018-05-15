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
    //    if($time == 6 || $time == 9 || $time == 12){
    //        if(date('i') == "30"){
    //UV


    $indexPageNum = getFrontPage() + 1;
    //    var_dump($indexPageNum);
    //$indexPageNum = 2479; //fortest

//    $xml = findBlow("https://www.ptt.cc/bbs/Beauty/index" . $indexPageNum . ".html");

    for($i=0;$i<10;$i++){
        $xml="";
        $newPage = $indexPageNum-$i;
        findBlow("https://www.ptt.cc/bbs/Beauty/index" . $newPage . ".html");
    }

//    if($xml)
//        iftttSend($xml);

    function getFrontPage(){
        $beauty = file_get_contents(
            "https://www.ptt.cc/bbs/Beauty/index.html"
        );
        //            var_dump($uv);

        $pageNum = explode(
            "a class=\"btn wide\" href=\"/bbs/Beauty/index1.html\">最舊",$beauty
        );
        //                echo $taipei_uv[1];
        $pageNum = explode("href=\"",$pageNum[1]);
        //    echo $taipei_uv[1];
        $pageNum = explode("\">&lsaquo;",$pageNum[1])[0];
        //    var_dump($pageNum);
        $pageNum = explode("index",$pageNum)[1];
        $pageNum = explode(".html",$pageNum)[0];
        //    echo $pageNum;
        $pageNum = intval($pageNum);
        //        var_dump($pageNum);
        //ar_dump($taipei_uv);
        return $pageNum;

    }

    function findBlow($url){
        $aa = file_get_contents($url);
        $checkBlow = count(explode("<span class=\"hl f1\">爆</span>",$aa));
        if($checkBlow>1){
            for($i=1;$i<$checkBlow;$i++){
                $bb       = explode("<span class=\"hl f1\">爆</span>",$aa)[$i];
                $bb       = explode("href=\"",$bb)[1];
                $hrefBlow = "https://www.ptt.cc" . explode("\">",$bb)[0];
                //        $hrefBlow = "https://www.ptt.cc" . $hrefBlow;
                $tittleBlow = explode("\">",$bb)[1];
                $tittleBlow = explode("</a>",$tittleBlow)[0];
                $authorBlow = explode("\">",$bb)[3];
                $authorBlow = explode("</div>",$authorBlow)[0];

                $xml = 'value1=' . $hrefBlow . '&value2=' . $tittleBlow
                    . '&value3=' . $authorBlow . '';
//                echo $xml . "\n";
                iftttSend($xml);
            }

        }else{
            return null;
        }
//        $bb       = explode("<span class=\"hl f1\">爆</span>",$aa)[1];
//        $bb       = explode("href=\"",$bb)[1];
//        $hrefBlow = "https://www.ptt.cc" . explode("\">",$bb)[0];
//        //        $hrefBlow = "https://www.ptt.cc" . $hrefBlow;
//        $tittleBlow = explode("\">",$bb)[1];
//        $tittleBlow = explode("</a>",$tittleBlow)[0];
//        $authorBlow = explode("\">",$bb)[3];
//        $authorBlow = explode("</div>",$authorBlow)[0];
//
//        $xml = 'value1=' . $hrefBlow . '&value2=' . $tittleBlow
//            . '&value3=' . ":" . $authorBlow . '';

        return $xml;
        //        echo "Href\t: " . $hrefBlow . "\n";
        //        echo "Tittle\t: " . $tittleBlow . "\n";
        //        echo "Author\t: " . $authorBlow . "\n";

        //        echo '<br>' . explode("\">",$bb)[1];
    }

    function iftttSend ($xml){
        $ifttt
             = "https://maker.ifttt.com/trigger/Air&UV/with/key/beemMlRoWYgadFjC4_jCEJ";
        $ch  = curl_init($ifttt);

        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$xml);

        $response = curl_exec($ch);
        //var_dump($response);
        curl_close($ch);

    }
?>