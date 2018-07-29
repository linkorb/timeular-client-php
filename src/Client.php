<?php

namespace Timeular;

use GuzzleHttp\Client as GuzzleClient;

class Client
{
    protected static $baseUrl = 'https://api.timeular.com/api/v2/';

    protected $guzzle;

    // prevent direct instantiation
    protected function __construct()
    {
        // noop    
    }

    public static function getToken($key, $secret)
    {
        $guzzle = new GuzzleClient();

        $url = self::$baseUrl . '/developer/sign-in';
        $data = [
            'apiKey' => $key,
            'apiSecret' => $secret,
        ];
        $res = $guzzle->request(
            'POST',
            $url,
            [
                'headers' => [
                    'Accept'     => 'application/json',
                ],
                'json' => $data,
            ]
        );
        $body = $res->getBody();
        $data = json_decode((string)$body, true);
        $token = $data['token'];
        return $token;

    }

    public static function createWithToken($token)
    {
        $client = new self();
        $client->guzzle = new GuzzleClient(
            array(
                'base_uri' => self::$baseUrl,
                'headers' => [
                    'Accept'     => 'application/json',
                    'Authorization' => 'Bearer ' . $token
                ]
            )
        );
        return $client;
        
    }

    public function get($path)
    {
        $res = $this->guzzle->request('GET', $path);
        $body = $res->getBody();
        $data = json_decode((string)$body, true);
        return $data;
    }

    public function post($path, $arguments = [])
    {
        $res = $this->guzzle->request(
            'POST',
            $path,
            [
                'json' => $arguments
            ]
        );
        $body = $res->getBody();
        $data = json_decode((string)$body, true);
        return $data;
    }
}