<?php

include "config.php";

function send($BOT_TOKEN, $parameters, $method) {
    $apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/$method";
$ch = curl_init();
// Aku mau kirim data ke URL ini ya!
curl_setopt($ch, CURLOPT_URL, $apiUrl);
// Aku mau kirim data POST" (bukan GET)
curl_setopt($ch, CURLOPT_POST, true);
// Nih data yang mau aku kirim ke Telegram”, isinya ada di variabel $parameters.
curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
}

?>