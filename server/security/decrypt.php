<?php

function decrypt($key)
{
    $ciphering = "AES-128-CTR";
    $encryption_key = "fayujdivense";
    $options = 0;
    $encryption_iv = '+90-536-974-49-58';

    $key = urldecode($key);

    $decryption = openssl_decrypt(
        $key,
        $ciphering,
        $decryption_key,
        $options,
        $decryption_iv
    );

    $time = explode("@", $decryption)[1];

    if (time() > $time) {
        return $time;
    } else {
        return true;
    }
}
