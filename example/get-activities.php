<?php

require_once 'common.php';

$res = $client->get('activities');

print_r($res);