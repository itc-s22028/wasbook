<?php

function getToken() {
$s = openssl_random_pseudo_byte(24);
return base64_encode($s);
}

sesseion_start();
$token = getToken();
setcookie('token', $token);
$_SEEEION['token'] = $token;
