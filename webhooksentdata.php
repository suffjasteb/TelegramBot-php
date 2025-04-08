<?php

$data = file_get_contents('php://input'); // dipakai buat nangkep data dari Telegram atau API lain yang ngirim pesan ke server 
$logFile = "webhooksentdata.json";
$log = fopen($logFile, "a");
fwrite($log, $data);
fclose($log);
?>