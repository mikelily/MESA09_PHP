<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="lineBotCSS.css">
</head>
<body>
<?php
    require_once 'lineBotAPI.php';

    $boardName = "";
    $boardName = $_GET['inBoardName'];

    $hotBoardName = [
        "Beauty","Joke","Movie","WomenTalk","RealmOfValor","LOL","NBA",
        "BabyMother","Baseball","Boy-Girl","Hearthstone","Tos","StupidClown",
    ];
    if(in_array($boardName,$hotBoardName)){
        //donothing
    }else{
        if($boardName == ""){

        }else{
            $indexPageNum = getFrontPage($boardName) + 1;

            for($i = 0; $i < 10; $i++){
                $newPage = $indexPageNum - $i;
                findBlow(
                    "https://www.ptt.cc/bbs/" . $boardName . "/index" . $newPage
                    . ".html",$boardName,false
                );
            }
        }
    }
    //    echo $boardName;

    $dsn = "mysql:host=127.0.0.1;dbname=lineBot";
    $pdo = new PDO($dsn,'root','root');
    if($boardName == ""){
        $boardName = "Lazy PTT";
        $queryTemp = "select * from record ORDER BY time_Stamp DESC";
    }else{
        $queryTemp
            = "select * from record where boardName='$boardName' ORDER BY time_Stamp DESC";
    }
    $stmt  = $pdo->query($queryTemp);
    $rows  = $stmt->rowCount();
    $pages = ceil($rows / 18);
    $page  = 1;
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    }
    $start = ($page - 1) * 18;
    if($boardName == "Lazy PTT"){
        $queryTemp
            = "SELECT * FROM record
      ORDER BY time_Stamp DESC LIMIT $start,18;";

    }else{
        $queryTemp
            = "SELECT * FROM record
      WHERE boardName = '$boardName'
      ORDER BY time_Stamp DESC LIMIT $start,18;";
    }
    $stmt = $pdo->query($queryTemp);
?>
<div align="center" class="lazyPtt">
    <?php echo $boardName; ?>
</div>
<table width="80%" border="0" align="center">
    <tr>
        <th width="15%" bgcolor="#E6E6E6"><strong>板名</strong>
        </th>
        <th width="45%" bgcolor="#E6E6E6"><strong>標題</strong>
        </th>
        <th width="15%" bgcolor="#E6E6E6"><strong>作者</strong>
        </th>
        <th width="25%" bgcolor="#E6E6E6"><strong>日期/時間</strong>
        </th>
    </tr>
    <?php
        for($i = 0; $i < 18; $i++){
            $resultArray = $stmt->fetch();
            //            var_dump($resultArray);
            ?>
            <tr class="testColor">
                <td width="15%">
                    <strong><?php
                            echo "<a href=\"showPage.php?inBoardName="
                                . $resultArray['boardName'] . "\">"
                                . $resultArray['boardName'] . "</a> ";
                        ?></strong>
                </td>
                <td width="45%">
                    <strong>
                        <a href="<?php echo $resultArray['url']; ?>"
                           target="_blank"
                           title="<?php echo $resultArray['tittle']; ?>">
                            <?php echo $resultArray['tittle']; ?></a></strong>
                </td>
                <td width="15%">
                    <strong><?php echo $resultArray['author']; ?></strong>
                </td>
                <td width="25%">
                    <strong>
                        <?php
                            if($resultArray == ""){
                                echo "";
                            }else{
                                echo date(
                                    'Y/m/d H:i',$resultArray['time_Stamp']
                                );
                            } ?>
                    </strong>
                </td>
            </tr>
            <?php
        }
    ?>
    <tr>
        <th colspan="4" class="bottomTH">
            目前搜尋中的有這些板：<?php

                foreach($hotBoardName as $hbn){
                    echo "<a href=\"showPage.php?inBoardName=$hbn\">$hbn</a> ";
                }
            ?>

        </th>
    </tr>

</table>
<div class="inBNForm">
    <form action="showPage.php" method="get">
        在此輸入想搜尋的板名：
        <input id="inBoardName" name="inBoardName" type="text">
        <input type="submit" value="送出">
    </form>
    <a href="showPage.php?inBoardName=">LazyPTT 首頁</a>
    <?php
        echo "共" . $rows . "筆資料";
        for($i = 0; $i < $pages; $i++){
            if($boardName == "Lazy PTT"){
                echo "<a href=\"showPage.php?inBoardName=&page=" . ($i + 1) . "\">" . ($i + 1) . "</a> ";
            }else{
                echo "<a href=\"showPage.php?inBoardName=" . $boardName
                    . "&page=" . ($i + 1) . "\">" . ($i + 1) . "</a> ";
            }
        }
    ?>
</div>
</body>
</html>