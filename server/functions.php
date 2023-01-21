<?php

define("CIPHER", "AES-128-CTR");
define("KEY", "fayujxtirman.x31.tsd_qqa.vee");
define("IV", "34452222222222");

function encrypt($string) {
    return openssl_encrypt($string, CIPHER, KEY, OPENSSL_ZERO_PADDING, IV);
}

function decrypt($string) {
    return openssl_decrypt($string, CIPHER, KEY, OPENSSL_ZERO_PADDING, IV);
}

?>