<?php

require __DIR__ . '/vendor/autoload.php';

use \GuzzleHttp\Psr7\Request;

$client = new GuzzleHttp\Client();

// Send an asynchronous request.
$request = new Request('GET', 'http://httpbin.org/get');
$promise = $client->sendAsync($request)->then(function ($response) {
  echo $response->getBody();
});
$promise->wait();