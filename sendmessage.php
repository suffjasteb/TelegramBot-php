<?php

include "config.php";
include "function.php";
$data = file_get_contents('php://input'); // dipakai buat nangkep data dari Telegram atau API lain yang ngirim pesan ke server 
$logFile = "webhooksentdata.json";
$log = fopen($logFile, "a");
fwrite($log, $data);
fclose($log);
$getData = json_decode($data, true);
$userId = $getData['message']['from']['id'];
$userMessage = $getData['message']['text'];

if ($userMessage == "Hi" || $userMessage == "hi" ||  $userMessage == "hallo" || $userMessage == "hello" || $userMessage == "hey") {
    $botMessage = "Hello, how are you?";
} elseif ($userMessage == "bye" || $userMessage == "goodbye" || $userMessage == "see you" || $userMessage == "cya") {
    $botMessage = "Goodbye, see you next time!";
} else {
    $botMessage = "Sorry, I don't understand that.";
}

$parameters = array(
    "chat_id" => $userId,
    "text" => $botMessage,
    "parse_mode" => "HTML",
);
?>