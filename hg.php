<?php

$ch = curl_init();

$url = "https://20b7-41-157-180-219.sa.ngrok.io/";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($e = curl_exec($ch)){
    echo $e;
}
else {
    $decoded = json_decode($resp, true);
    print_r($decoded);
    return $decoded;
}

curl_close($ch);