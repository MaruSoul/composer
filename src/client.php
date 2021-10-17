<?php

namespace Mary\Composer;

require_once(__DIR__ . "/../vendor/autoload.php");

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'https://itea.ua/');

echo $response->getStatusCode();
echo $response->getHeaderLine('content-type');
echo $response->getBody();
