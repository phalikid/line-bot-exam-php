<?php
$access_token = '0HUfhEpwxhQlLcnvwXZilBCEOq3BJU2ZrodN/ltYlm+dCVNo7splyhLElpeIJwwPLyb+WaU7rCU1JQj1EH8Qi0zbiH3f500hFIli4iad1jxiyh2jqTHctdU0Fq4yYVG/XPsxQB5J1GfXpcSYpQFiVQdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
