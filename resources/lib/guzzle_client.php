<?php

try {
$client = new \GuzzleHttp\Client();
$response = $client->request(
    'POST', 
    SdkRestApi::getParam('nn_request_process_url'), 
    [
        'query' => ['q' => SdkRestApi::getParam('nn_request')], 'headers' => SdkRestApi::getParam('nn_header')
    ]
);

/** @return array */
return json_decode($response->getBody(), true); 
} catch (\Exception $e) {
   $e->getMessage();
}
