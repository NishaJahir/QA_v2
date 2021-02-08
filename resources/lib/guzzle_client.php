<?php
use \GuzzleHttp\Client;
use \GuzzleHttp\Psr7\Request;

try {
$client = new Client();
$request = new Request(
    "POST", 
    SdkRestApi::getParam('nn_request_process_url'), 
    SdkRestApi::getParam('nn_header')
);
$response = $client->send($request,[
        'json' => SdkRestApi::getParam('nn_request')
    ]);

/** @return array */
return json_decode($response->getBody()->getContents(), true); 
} catch (\Exception $e) {
   $e->getMessage();
}
