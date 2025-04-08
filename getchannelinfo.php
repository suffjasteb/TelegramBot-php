<?php

include "config.php";
include "function.php";

$parameters = array(
    "chat_id" => $CHANNEL_ID,
);

$response = send($BOT_TOKEN, $parameters, "exportChatInviteLink");
echo $response;

?>