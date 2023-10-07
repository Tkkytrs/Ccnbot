<?php

if (strpos($text, '/add') === 0) { if ($gId != 6685318446 && $gId != 6685318446) { $url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
            $data = http_build_query(array(
                'chat_id' => $chat_id,
                'text' => "Sorry My Owner is <b><a href='tg://user?id=5264501009'>Tkkytrs</a></b>",
                'reply_to_message_id' => $message_id,
                'parse_mode' => 'HTML'
            ));
            $response = sendAsyncRequest($url, $data);exit();}
    preg_match_all('/\d+/', $text, $matches);
    $credits = null;
    foreach ($matches[0] as $matche) {
        if (strlen($matche) < 4) {
            $credits = $matche;
        }
        if (empty($r_userId)) {
            if (strlen($matche) >= 5) {
                $r_userId = $matche;
            }
        }
    }
    if (!is_null($credits) && !is_null($r_userId)) {
        $credits_file = 'Tools/Credits.txt';
        if (file_exists($credits_file)) {
            $lines = file($credits_file);
            $updated = false;
            foreach ($lines as $key => $line) {
                $parts = explode(' ', trim($line));
                if ($parts[0] == $r_userId) {
                    $credits += $parts[1];
                    $lines[$key] = "$r_userId $credits\n";
                    $updated = true;
                    break;
                }
            }
            if (!$updated) {
                $lines[] = "$r_userId $credits\n";}
            $result = file_put_contents($credits_file, implode('', $lines));
            if ($result !== false) {
                $url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
                $data = http_build_query(array(
                    'chat_id' => $chat_id,
                    'text' => "<b><a href='tg://user?id=$r_userId'>$r_username</a></b> account has been credited with $credits credits.",
                    'reply_to_message_id' => $message_id,
                    'parse_mode' => 'HTML'
                ));
                $response = sendAsyncRequest($url, $data);
            }}}}

  if (strpos($text, '/credits') === 0) {
    preg_match('/\d+/', $text, $matches);
    if (!empty($matches)) {
        $r_userId = $matches[0];
    }
    if (empty($r_userId)) {
        $r_userId = $userId;
        $credits_file = 'Tools/Credits.txt';
        if (file_exists($credits_file)) {
            $credits = 0;
            $lines = file($credits_file);
            foreach ($lines as $line) {
                $parts = explode(' ', trim($line));
                if ($parts[0] == $r_userId) {
                    $credits = $parts[1];
                    break;}}
            $message = "<b><a href='tg://user?id=$r_userId'>$username</a></b> has $credits credits.";}}
    
    $url = 'https://api.telegram.org/bot'.$bot_token.'/sendMessage';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'text' => $message,
        'reply_to_message_id' => $message_id,
        'parse_mode' => 'HTML'
    ));
    $response = sendAsyncRequest($url, $data);
}