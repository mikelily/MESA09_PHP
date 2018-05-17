<?php
    setcookie("over18","1",time() + 7200,"/");

    setInterval(
        function(){

            $boardName = "LOL";

            $indexPageNum = getFrontPage($boardName) + 1;

            for($i = 0; $i < 10; $i++){
                $newPage = $indexPageNum - $i;
                findBlow(
                    "https://www.ptt.cc/bbs/" . $boardName . "/index" . $newPage
                    . ".html",$boardName
                );
            }
        },600000
    );

    function getFrontPage($boardName){
        $boardContents = file_get_contents(
            "https://www.ptt.cc/bbs/" . $boardName . "/index.html"
        );
        $pageNum       = explode(
            "\">最舊</a>",$boardContents
        );
        $pageNum       = explode("href=\"",$pageNum[1]);
        $pageNum       = explode("\">&lsaquo;",$pageNum[1])[0];
        $pageNum       = explode("index",$pageNum)[1];
        $pageNum       = explode(".html",$pageNum)[0];
        $pageNum       = intval($pageNum);

        return $pageNum;

    }

    function findBlow($url,$boardName){
        $aa        = file_get_contents($url);
        $checkBlow = count(explode("<span class=\"hl f1\">爆</span>",$aa));
        if($checkBlow > 1){
            for($i = 1; $i < $checkBlow; $i++){
                $bb       = explode("<span class=\"hl f1\">爆</span>",$aa)[$i];
                $bb       = explode("href=\"",$bb)[1];
                $hrefBlow = "https://www.ptt.cc" . explode("\">",$bb)[0];
                //        $hrefBlow = "https://www.ptt.cc" . $hrefBlow;
                if(checkSQL($hrefBlow)){
                    $tittleBlow = explode("\">",$bb)[1];
                    $tittleBlow = explode("</a>",$tittleBlow)[0];
                    $authorBlow = explode("\">",$bb)[3];
                    $authorBlow = explode("</div>",$authorBlow)[0];

                    insertSQL($hrefBlow,$tittleBlow,$authorBlow,$boardName);

                    $xml = 'value1=' . $hrefBlow . '&value2=' . $tittleBlow
                        . '&value3=' . $authorBlow . '';
                    iftttSend($xml);
                }

            }

        }else{
            return null;
        }
    }

    function checkSQL($tempBlow){
        $dsn       = "mysql:host=127.0.0.1;dbname=lineBot";
        $pdo       = new PDO($dsn,'root','root');
        $queryTemp = "select * from record where url='$tempBlow'";
        //echo $queryTemp . "<br>";
        $stmt = $pdo->query($queryTemp);
        //var_dump($stmt->rowCount());
        if($stmt->rowCount() < 1){
            return true;
        }else{
            return false;
        }


    }

    function insertSQL($tempBlow,$tempTittle,$tempAuthor,$boardName){
        $dsn = "mysql:host=127.0.0.1;dbname=lineBot";
        $pdo = new PDO($dsn,'root','root');

        $queryTemp
            = "insert into record values('$tempBlow','$tempTittle','$tempAuthor','$boardName')";
        //echo $queryTemp . "<br>";
        $pdo->query($queryTemp);


    }

    function iftttSend($xml){
        $ifttt
            = "https://maker.ifttt.com/trigger/Air&UV/with/key/beemMlRoWYgadFjC4_jCEJ";
        $ch = curl_init($ifttt);

        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$xml);

        curl_exec($ch);
        curl_close($ch);

    }

    function setInterval($f,$milliseconds){
        $seconds = (int)$milliseconds / 1000;
        while(true){
            $f();
            sleep($seconds);
        }
    }

?>