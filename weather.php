<?php
/*
All copyright by Achilles
My web:achilles.lssc.cf
*/
chdir(dirname(__FILE__));
date_default_timezone_set("Asia/Taipei");
$time=date('G');
//weather
$now_weather=file_get_contents("https://www.cwb.gov.tw/V7/forecast/town368/GT/6301000.htm?_=1521096992848");
$simple_3days=file_get_contents("https://www.cwb.gov.tw/V7/forecast/town368/3Hr/plot/6301000_3Hr.js?&_=1521096992852");
$full_3days=file_get_contents("https://www.cwb.gov.tw/V7/forecast/town368/3Hr/6301000.htm");
$tomorrow=file_get_contents("https://www.cwb.gov.tw/V7/forecast/town368/7Day/6300200.htm");

if($time==6){
  if(date('i') == "30"){
//now_temp
$now_temp=explode("high\">",$now_weather)[1];
$now_temp=explode("</td>
    <td>",$now_temp)[2];
//var_dump($now_temp);
//rain
$rain=explode("天氣狀況</td>",$full_3days)[1];
$rain=explode("title=\"",$rain)[2];
$rain="將有".explode("\" alt=",$rain)[0];
//var_dump($rain);
$garding=explode("舒適度</td>",$full_3days)[1];
$garding=explode("<td>",$garding)[2];
$garding=explode("</td>",$garding)[0];
//var_dump($garding);
//IFTTT
$ifttt="https://maker.ifttt.com/trigger/weather/with/key/n1-8Kk3K_XsGkb23ikI3hEEBDDHBP5_MFkZ3eJw5e8S";
$ch = curl_init($ifttt);
$xml = 'value1='.$now_temp.'&value2='.$rain.'&value3='.$garding.'';

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

$response = curl_exec($ch);
var_dump($response);
curl_close($ch);
  }
}
if($time==22){
  if(date('i') == "30"){
//now_temp
$now_temp=explode("high\">",$now_weather)[1];
$now_temp=explode("</td>
    <td>",$now_temp)[2];
//var_dump($now_temp);
//rain
$rain=explode("天氣狀況</td>",$tomorrow)[1];
$rain_d=explode("title=\"",$rain)[1];
$rain_d=explode("\" alt=",$rain_d)[0];
$rain_n=explode("title=\"",$rain)[2];
$rain_n=explode("\" alt=",$rain_n)[0];
$rain="明日白天：".$rain_d."<br>晚上：".$rain_n;
//var_dump($rain);
$garding ="achilles.lssc.cf";
//IFTTT
$ifttt="https://maker.ifttt.com/trigger/weather/with/key/n1-8Kk3K_XsGkb23ikI3hEEBDDHBP5_MFkZ3eJw5e8S";
$ch = curl_init($ifttt);
$xml = 'value1='.$now_temp.'&value2='.$rain.'&value3='.$garding.'';

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $xml);

$response = curl_exec($ch);
var_dump($response);
curl_close($ch);
  }
}

?>