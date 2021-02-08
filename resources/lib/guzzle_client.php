<?php

try {
$client = new \GuzzleHttp\Client();
$response = $client->request(
    'POST', 
    SdkRestApi::getParam('nn_request_process_url'), 
    [
        'headers' => SdkRestApi::getParam('nn_header'),
        'query' => ['q' => SdkRestApi::getParam('nn_request')] 
    ]
);

/** @return array */
return json_decode($response->getBody(), true); 
} catch (\Exception $e) {
   $e->getMessage();
}
