<?php


$access_token = 'KfgW9rzbqNRUjan4k799l9tGNsEoAkt9eZV+mgCz4ly+u/mJgGSyEPsFFI7+MvD8LzWtJ4KPavj9zK03TMIaWyJ29D7gb3PrhLqTW12vGDnh30YjdqiDSKZxyQc6kZ/v/jNWkvoPcma5h41+arl42gdB04t89/1O/w1cDnyilFU=';

$userId = 'U52ccf19c7d5b4ec8ba9def756ebce01c';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

