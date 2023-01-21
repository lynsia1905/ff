<?php

$con = new mysqli("localhost", "yokyav", "fayujx.", "31cek"); //sql bağla oc

if ($con->connect_errno > 0) {
    die("<b>Bağlantı Hatası:</b> " . $con->connect_error);
}

?>