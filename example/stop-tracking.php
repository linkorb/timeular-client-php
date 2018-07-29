<?php

require_once 'common.php';

$res = $client->get('tracking');

$activityId = $res['currentTracking']['activity']['id'] ?? null;
if (!$activityId) {
    exit("Currently not tracking\n");
}
$now = new DateTime();
$arguments = [
    'stoppedAt' => date("Y-m-d\TH:i:s.000", time())
];
print_r($arguments);
$res = $client->post('tracking/' . $activityId . '/stop', $arguments);

print_r($res);