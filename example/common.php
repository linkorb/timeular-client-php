<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Timeular\Client;
use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();
$dotenv->load(__DIR__.'/../.env');

$key = getenv('TIMEULAR_KEY');
$secret = getenv('TIMEULAR_SECRET');

if (!$key || !$secret) {
    throw new RuntimeException("Key or secret not specified");
}

$token = Client::getToken($key, $secret);

// echo "Token: $token\n";

$client = Client::createWithToken($token);
