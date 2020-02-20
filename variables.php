<?php
require 'vendor/autoload.php';
//api ПланФакта
$url = 'https://api.planfact.io/api/v1/';
//Ваш api ключ
$api_key = '';
//объект для guzzle запроса
$client = new GuzzleHttp\Client ([
    'base_uri' => $url,
    'headers' => [
        'X-ApiKey' => $api_key,
        'Content-Type' => 'application/json'
    ]
]);
?>