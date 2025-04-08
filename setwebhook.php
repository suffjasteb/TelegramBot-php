<?php 

include "config.php";
// “Oi Telegram! Tolong arahkan semua chat ke URL ini ya!”
$webhookurl = "https://99addd92-9706-45ac-a6c2-b5f89d2bb58d-00-2ntqunrrvwx4g.pike.replit.dev/";
$apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/setWebhook?url={$webhookurl}";
$response = file_get_contents($apiUrl);
echo $response;

?>
