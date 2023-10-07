<?php

if ($userId !== 6685318446 and $userId !== 6685318446 and $userId !== 6685318446 and $userId !== 6685318446 and $userId !== 6685318446) {

$timestamps = [];
if (file_exists('Tools/Antispam.txt')) {
    $timestamps = unserialize(file_get_contents('Tools/Antispam.txt'));
}
if (!isset($timestamps[$userId])) {
    $timestamps[$userId] = [];
}
$last_timestamp = end($timestamps[$userId]);
$time_gap = time() - $last_timestamp;
if ($time_gap < 70) {
  $retry_after = 70 - $time_gap;
    $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "𝘼𝙣𝙩𝙞_𝙎𝙥𝙖𝙢 𝙍𝙚𝙩𝙧𝙮 𝘼𝙛𝙩𝙚𝙧 $retry_after 𝙎𝙚𝙘𝙤𝙣𝙙𝙨",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);exit();
} else {
    array_pop($timestamps[$userId]);
    $timestamps[$userId][] = time();
    file_put_contents('Tools/Antispam.txt', serialize($timestamps));
}}