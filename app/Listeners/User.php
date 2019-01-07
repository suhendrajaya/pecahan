<?php
namespace App\Persistence;


use GuzzleHttp\Client;

class User {
    
    public static function getUserLogin($param)
    {
        
        $client = new Client(['base_uri' => env('API'), 'headers' => ['appkey' => env('appkey')] ]);

        $response = $client->post('login/user', ['form_params' => $param, 'http_errors' => false]);
        
        return json_decode($response->getBody(), true);
    }
}
