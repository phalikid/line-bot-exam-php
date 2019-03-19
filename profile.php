<?php


$access_token = 'B0jXLqAEYJq3LcL1zrxkIliR+YLBFUDfR2HL3PqBT9YOuTwKe6BWReXqbxVx9FXf8tHZpuuPkUMC+lLngSD3hcL/IOuVsVqbBCoPXT5STr5q5IWOb2Xcbo2aOpiRKpQ2DUC+BPWVK2ev0RZT+KO7agdB04t89/1O/w1cDnyilFU=';

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

