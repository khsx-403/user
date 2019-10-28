<?php
// warna
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$red="\033[0;31m";
$red2="\033[1;31m";
$green="\033[0;32m";
$green2="\033[1;32m";
$yellow="\033[0;33m";
$yellow2="\033[1;33m";
$blue="\033[0;34m";
$blue2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m"; 
$lblue2="\033[1;36m";
include ('aamusic/config.php');
include('aamusic/email.txt');
system("clear");

echo "$red               《AA Music》
";
echo "$green ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
";
echo "$yellow created by: $green Aga katoroik   $yellow yt chanel: $green Khsx Chanel
";
echo "$yellow support by: $green 《ĎĚVŁÎÑ》 & 《TEAM 8》
";
echo "$green ━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━


";

	
	system("xdg-open https://www.youtube.com/channel/UCLfguqd401jnhXjucDkPAAg");
echo "$blue MEMULAI BOT

";

$url = "https://aamusic.net/r/$kode_reffmu";
$url1 = "https://api.aamusic.net/api/auth";
$url2 = "https://api.aamusic.net/api/devices/register";


while(true){
for ($no = 0; $no < 999999999; $no ++){
// echo "$no";
 sleep(1);
 

$data1 = array("GrantType"=>"password","RefreshToken"=>null,"Login"=>"$no$email.txt@gmail.com","Password"=>"M3mbusuk");
$data2 = array("AndroidId"=>"49b269007788kk0b445");

$cok = json_encode($data1, true);
$cok1 = json_encode($data2, true);
//var_dump($cok);
//var_dump($cok1);


//var_dump($cem);

$headers = array();
  $headers[] = "Host: aamusic.net";
  $headers[] = "upgrade-insecure-requests: 1";
  $headers[] = "user-agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 5 Plus Build/OPM7.181205.001; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.119 Mobile Safari/537.36 ACHEETAHI/1";
  $headers[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8";
  $headers[] = "accept-language: id-ID,en-US;q=0.8";
  $headers[] = "x-requested-with: com.ksmobile.cb";
  $headers[] = "location: https://play.google.com/store/apps/details?id=net.aamusic.stream2earn";

$headers1 = array();  
  $headers1[] = "Authorization: Bearer";
  $headers1[] = "Content-Type: application/json; charset=utf-8";
  $headers1[] = "Connection: keep-alive";
  $headers1[] = "Host: api.aamusic.net";

$headers2 = array();    
  $headers2[] = "Authorization: Bearer $cempe1";
  $headers2[] = "Content-Type: application/json; charset=utf-8";
  $headers2[] = "Host: api.aamusic.net";
  
  //$headers2[] = "xxxxxx";
  //$headers2[] = "xxxxxx";
  //$headers2[] = "xxxxxx";


//while(true){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  curl_close ($ch);
  //var_dump($result);
  //$json = json_decode($result, true);
  //echo "Status: ". $json["errorMessage"]."\n";
  //echo $json["data"]["currentCoin"]."\n";
  
   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $cok);
  $result = curl_exec($ch);
  curl_close ($ch);
  //var_dump($result);
  $json = json_decode($result, true);
  $cempe1 = $json["accessToken"];
 // echo $json["data"]["currentCoin"]."\n";
  //var_dump($result);
   $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url2);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $cok1);
  $result = curl_exec($ch);
  curl_close ($ch);
  //var_dump($result);
  $json = json_decode($result, true);
  $cempe2 = $json["authCode"];
  //echo $json["data"]["currentCoin"]."\n";
  
  echo "$green2 Berhasil$green .....$green....$green......\n";
  for ($second2=9;$second2>-1;$second2--){
        echo "\r$putih2 0".$second2." $green2 loading";
        sleep(1);
        echo "\r                                         \r";
      }
 }
}
?>
