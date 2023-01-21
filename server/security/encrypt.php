<?php

function encrypt($key)
{
    $ciphering = "AES-128-CTR";
    $encryption_key = "fayujdivense";
    $options = 0;
    $encryption_iv = '+90-536-974-49-58';
    
    $key = $key . "@" . strtotime("+60 seconds");

    $encryption = openssl_encrypt(
        $key,
        $ciphering,
        $encryption_key,
        $options,
        $encryption_iv
    );

    return urlencode($encryption);
}
