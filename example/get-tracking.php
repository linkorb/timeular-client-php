<?php

require_once 'common.php';

$res = $client->get('tracking');

print_r($res);