<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="lineBotCSS.css">
</head>
<body>
<?php
    $dsn       = "mysql:host=127.0.0.1;dbname=lineBot";
    $pdo       = new PDO($dsn,'root','root');
    $queryTemp = "select * from record ORDER BY time_Stamp DESC";
    $stmt      = $pdo->query($queryTemp);
?>
<div align="center" class="lazyPtt">
    Lazy PTT
</div>

<table width="80%" border="0" align="center">
    <tr>
        <td width="15%" bgcolor="#E6E6E6"><strong>板名</strong>
        </td>
        <td width="45%" bgcolor="#E6E6E6"><strong>標題</strong>
        </td>
        <td width="15%" bgcolor="#E6E6E6"><strong>作者</strong>
        </td>
        <td width="25%" bgcolor="#E6E6E6"><strong>日期/時間</strong>
        </td>
    </tr>
    <?php
        for($i = 0; $i < 18; $i++){
            $resultArray = $stmt->fetch();
            //            var_dump($resultArray);
            ?>
            <tr class="testColor">
                <td width="15%">
                    <strong><?php echo $resultArray['boardName']; ?></strong>
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
                $hotBoardName = [
                    "Beauty","Joke","Movie","WomenTalk","RealmOfValor","LOL",
                    "NBA","BabyMother","Baseball","Boy-Girl","Hearthstone",
                    "Tos","StupidClown",
                ];
                foreach($hotBoardName as $hbn){
                    echo "<a href=\"http://localhost/lineBot/showPage.php?inBoardName=$hbn\">$hbn</a> ";
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
</div>

</body>
</html>