<?php
/**
* @author 星河皓月
* @link https://www.lizh.cc/post/508.html
* @msg 接龙管家自动打卡
*/

$url = "https://h-api.jielong.co/api/Thread/EditCheckInRecord";
$jsonStr='{"Id":0,"ThreadId":"22186"...省略号..."IsNameNumberComfirm":false}'; //data填这里

function daka($url, $jsonStr)
{
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonStr);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
           'Accept-Encoding:gzip, deflate, br',
           'Accept-Language:zh-CN,zh;q=0.9,en;q=0.8',
           'User-Agent:Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Safari/537.36',
           'Content-Type:application/json',
           'Connection:keep-alive',
           'Host:h-api.jielong.co',
           'Authorization:Bearer eyJ0...省略号...dvUiULY',//authorization填这里
       )
   );
   $response = curl_exec($ch);
   $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
   curl_close($ch);
   return array($httpCode, $response);
}

$result = daka($url, $jsonStr);
print_r($result);

?>
