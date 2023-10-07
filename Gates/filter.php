<?php
$api_url = "https://api.telegram.org/bot{$bot_token}";

function downloadFile($fileUrl) {
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $fileUrl);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $fileData = curl_exec($ch);
  curl_close($ch);
  return $fileData;
}

function filterCards($text) {
  $regex = "/[0-9a-zA-Z]{15,16}[|][0-9a-zA-Z]{1,2}[|][A-ZA-Z0-9a-z]{2,4}[|][0-9a-z]{3,4}/";
  preg_match_all($regex, $text, $matches);
  $cardss = array_unique($matches[0]);
  return implode("\n", $cardss);
}

$update = json_decode(file_get_contents("php://input"), true);
if (!$update) {
  exit;
}

 $message = isset($update['message']) ? $update['message'] : null;
 $command = isset($message['text']) ? $message['text'] : null;
 $chatId = isset($message['chat']['id']) ? $message['chat']['id'] : null;
 $replyToMessage = isset($message['reply_to_message']) ? $message['reply_to_message'] : null;
 $document = isset($replyToMessage['document']) ? $replyToMessage['document'] : null;

if ($command == '/filter') {
  $text = $message['text'];
  $msglen = strlen($text);
  if ($msglen < 10) {
    $text = $replyToMessage['text'];
  }
  if (!$text) {
    $fileId = $document['file_id'];
    $fileUrl = "{$api_url}/getFile?file_id={$fileId}";
    $response = json_decode(file_get_contents($fileUrl), true);
    $filePath = $response['result']['file_path'];
    $fileUrl = "https://api.telegram.org/file/bot{$bot_token}/{$filePath}";
    $buffer = downloadFile($fileUrl);
    $text = utf8_encode($buffer);
  }
  
  $cards = filterCards($text);
  $lines = substr_count($cards, "\n") + 1;
  
  if ($lines > 20) {
    unlink($filePath);
    file_put_contents("Filtered.txt", $cards . "\n", FILE_APPEND);
    $filePath = 'Filtered.txt';
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => '' . $api_url . '/sendDocument?chat_id=' . $chatId . '',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
        'document' => new CURLFILE($filePath),
        'caption' => "𝗧𝗼𝘁𝗮𝗹 𝗙𝗶𝗹𝘁𝗲𝗿𝗲𝗱 : $lines",
        'parse_mode' => 'HTML'),));
    $okkk = curl_exec($curl);
    unlink($filePath);
  } else {
    
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
  $data = http_build_query(array(
    'chat_id' => $chat_id,
    'message_id' => $message_idd,
    'text' => "<code>$cards</code> \n𝗧𝗼𝘁𝗮𝗹 𝗙𝗶𝗹𝘁𝗲𝗿𝗲𝗱 : $lines",
    'parse_mode' => 'HTML'
  ));
  sendAsyncRequest($url, $data);
    
  }}