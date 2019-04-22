<?php


$access_token = '0HUfhEpwxhQlLcnvwXZilBCEOq3BJU2ZrodN/ltYlm+dCVNo7splyhLElpeIJwwPLyb+WaU7rCU1JQj1EH8Qi0zbiH3f500hFIli4iad1jxiyh2jqTHctdU0Fq4yYVG/XPsxQB5J1GfXpcSYpQFiVQdB04t89/1O/w1cDnyilFU=';

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

