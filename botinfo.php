<?php

include "config.php";

// membuat request ke API Telegram
$apiUrl = "https://api.telegram.org/bot{$BOT_TOKEN}/getMe";
$response = file_get_contents($apiUrl);
echo "$response\n";

// kalo request gagal misal internet mati
if ($response === false) {
    echo "Error getting bot info";
    exit(0);
} else {
    $data = json_decode($response, true);

    if ($data['ok'] === true) {
        echo "Bot name : {$data['result']['username']}\n";
        echo "Bot id : {$data['result']['id']}\n";
    } else {
        echo "Error getting Bot info\n";
        exit(0);
    }
}
?>
