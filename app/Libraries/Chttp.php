<?php

namespace App\Libraries;

use GuzzleHttp\Client;

class Chttp
{
    public static function sendPost($param)
    {

        $client = new Client([
            'base_uri' => env('API'),
            'headers' => [
                'appkey' => env('appkey'),
                'token'  => session()->get('token')
                ]
        ]);

        $response = $client->post( $param['url'], ['form_params' => $param['form'], 'http_errors' => false]);

        return json_decode($response->getBody(), true);
    }
}
