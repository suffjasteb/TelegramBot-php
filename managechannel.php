<?php

include "function.php";

// REMOVE USER
$parameters = array(
    "chat_id" => $CHANNEL_ID,
    "user_id" => "7793919131",
);

$response = send($BOT_TOKEN, $parameters, "kickChatMember");
echo $response;

// ADD USER

$parameters = array(
    "chat_id" => $CHANNEL_ID,
    "user_id" => "7793919131",
);

$response = send($BOT_TOKEN, $parameters, "unbanChatMember");
echo $response;

// EXPORT CHANNEL INVITE LINK

$parameters = array(
    "chat_id" => $CHANNEL_ID,
);

$response = send($BOT_TOKEN, $parameters, "exportChatInviteLink");

echo $response;

// GENERATE EXPART INVITE LINK
$parameters = array(
    "chat_id" => $CHANNEL_ID,
    "expire_date" => time() + 60, // 1 minute
);
$response = send($BOT_TOKEN, $parameters, "exportChatInviteLink");
echo $response;
?>