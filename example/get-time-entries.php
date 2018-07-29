<?php

require_once 'common.php';

$now = new DateTime();
$startedBefore = urlencode(date("Y-m-d\TH:i:s.000", time() ));
$stoppedAfter = urlencode(date("Y-m-d\TH:i:s.000", time() - (60*60*24) ));

$res = $client->get('time-entries/' . $stoppedAfter . '/' . $startedBefore);

print_r($res);