<?php
$access_token = 'B0jXLqAEYJq3LcL1zrxkIliR+YLBFUDfR2HL3PqBT9YOuTwKe6BWReXqbxVx9FXf8tHZpuuPkUMC+lLngSD3hcL/IOuVsVqbBCoPXT5STr5q5IWOb2Xcbo2aOpiRKpQ2DUC+BPWVK2ev0RZT+KO7agdB04t89/1O/w1cDnyilFU=';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
