<?php

$client = new \GuzzleHttp\Client(SdkRestApi::getParam('nn_header'));
$response = $client->request(
    'POST', 
    SdkRestApi::getParam('nn_request_process_url'), 
    [
        'query' => ['q' => SdkRestApi::getParam('nn_request')] 
    ]
);

/** @return array */
return json_decode($res->getBody(), true); 
