<?php
    require_once 'lineBotAPI.php';

    setInterval(
        function(){
            $hotBoardName = [
                "Beauty","Joke","Movie","WomenTalk","RealmOfValor","LOL","NBA",
                "BabyMother","Baseball","Boy-Girl","Hearthstone","Tos",
                "StupidClown",
            ];

            foreach($hotBoardName as $hbn){
                $indexPageNum = getFrontPage($hbn) + 1;

                for($i = 0; $i < 50; $i++){
                    $newPage = $indexPageNum - $i;
                    findBlow(
                        "https://www.ptt.cc/bbs/" . $hbn . "/index" . $newPage
                        . ".html",$hbn
                    );
                }
            }
        },600000
    );