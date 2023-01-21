<?php

$fayujxsorgu = "https://discord.com/api/webhooks/1020048229660585/crHUgyegs6LEDm4j4trwt3_uSdn_T8j4pdPgTVxUV-fSForJ-rUrxOMx4EcViXlKbDXp";

$fayujxuser = "https://discord.com/api/webhooks/1023590237880350/yM3Y5j9G9sY7GoKHceRAVW_UYC1xL1EWeebdb7qp9C5vT7UE_WJ8NtxAM1HD7SwlzS46";

$civcivURL = "https://discord.com/api/webhooks/1020027030426/F-K228vMNtMBAvcVgwqY3UtOHXfbQT4ckLB-PXHTuaHv6Psid21CrBTsJDyy2cjr8h3P";


function fayujbook($url, $username, $title, $description)
{
    $content = "";
    if ($url == $GLOBALS["fayujxuser"]) {
        $content = "@here";
    } else if ($url == $GLOBALS["fayujxsorgu"]) {
        $content = "";
    }

    $headers = ['Content-Type: application/json; charset=utf-8'];
    $timestamp = date("c", strtotime("now"));
    $query = json_encode([
        "content" => $content,
        "username" => $username,
        "tts" => false,
        "embeds" => [
            [
                "title" => $title,
                "type" => "rich",
                "description" => $description,
                "timestamp" => $timestamp
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}
