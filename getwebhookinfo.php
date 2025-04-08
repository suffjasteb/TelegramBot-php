<?php 

// This code is responsible for checking the webhooks that are currently active on your bot.

include "config.php";
// Telegram, URL mana yang sedang aku pakai sebagai webhook sekarang?
$apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/getWebhookInfo";
$response = file_get_contents($apiUrl);
echo $response;

?>