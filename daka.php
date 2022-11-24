<?php
/**
* @author 星
* @link https://www.lizh.cc/post/508.html
* @msg 接龙
*/

$url = "https://h-api.jielong.co/api/Thread/EditCheckInRecord";
$jsonStr='{"Id":3438994942095,"OpenId":"67353AE35621D5AC996260ED713C7C54","Nickname":"段璟茂","IsMember":false,"Mobile":null,"Avatar":"https://obs.jielong.co/User/3438994942095.jpg?t=1669246700\u0026x-image-process=image/resize,m_lfit,h_430,w_430","ExperiencePoints":0,"TradePoints":0,"NoticeSetting":228,"FormInfo":{"IsFilled":true,"IsSaveed":true,"CommentAuthor":null,"Author":"段璟茂","Nickname":"段璟茂","Name":"段璟茂","FormUserName":"段璟茂","Gender":null,"Moblie":null,"GroupNickname":null,"Wechat":null,"Address":null,"IdCard":null,"Birthday":null,"Email":null,"School":null,"Colleges":null,"Class":null,"StudentNumber":null,"JobNumber":null,"Company":null,"Units":null,"Department":null,"Position":null,"ChildName":null},"IsBanned":false,"BanReason":null,"ViewCount":0,"IsFollowMP":false,"IsTemplateManage":false,"IsWechat":true,"VisitMiniType":3,"BindInfo":{"IsBind":true,"Nickname":"瑜璟","MiniType":0},"IsAuthor":false,"IsFilled":true,"IsSaveed":true,"City":"410100"},"Description":""}'; 

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
           'Authorization:Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiLmrrXnkp_ojIIiLCJvcGVuSWQiOiJvb3JvRTVsanN0TlhDdFpfQkQ5SzlMRk52VGZrIiwiaXNzIjoiYXBpLmppZWxvbmcuY28iLCJhdWQiOiJjbGllbnQuamllbG9uZy5jbyIsImlhdCI6MTY2OTI0Njc5NiwiZXhwIjoxNjY5NTA1OTk2fQ.o9YH1w1akDYQqaI0Vo3e9pPnHiI_X--1DzOcixz34sc
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
