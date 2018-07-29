<?php

require_once 'common.php';

$res = $client->get('devices');

print_r($res);