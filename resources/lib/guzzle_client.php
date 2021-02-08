<?php
use \GuzzleHttp\Client;
use \GuzzleHttp\Psr7\Request;

		 $options['headers'] = [
            'Content-Type' => 'application/json',
            'Charset' => 'utf-8',
            'Accept' => 'application/json',
            'X-NN-Access-Key' => SdkRestApi::getParam('nn_access_key')
        ];
        $client = new \GuzzleHttp\Client($options);
        try {
            $response = $client->post(SdkRestApi::getParam('nn_request_process_url'), ['body' => json_encode(SdkRestApi::getParam('nn_request'))]);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            $response = $e->getResponse();
        }
        return json_decode((string)$response->getBody(), true);
		
    
    
    
