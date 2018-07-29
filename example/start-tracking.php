<?php

require_once 'common.php';

$now = new DateTime();
$arguments = [
    'startedAt' => date("Y-m-d\TH:i:s.000", time())
];
print_r($arguments);
$activityId = $argv[1] ?? null;

if (!$activityId) {
    exit("Please pass activity Id\n");
}
$res = $client->post('tracking/' . $activityId . '/start', $arguments);

print_r($res);