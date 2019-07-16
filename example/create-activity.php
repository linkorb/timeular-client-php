<?php

require_once 'common.php';

$arguments = [
    'name' => 'Example ' . rand(10000, 99999),
    'color' => '#ff8000',
    'integration' => 'zei',
];

$res = $client->post('activities', $arguments);

print_r($res);