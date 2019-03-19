<?php
$access_token = 'VHLhKEhn/b+RrUl2JCC6BF3nHnOZQYzdb+BV4MsSiz9aiUQXo9GQKUPYNXOv8+Fo8tHZpuuPkUMC+lLngSD3hcL/IOuVsVqbBCoPXT5STr5i5BpshvneWPHu3lw7UjdJ2HwXlL3+o3bTZwIDHanUiAdB04t89/1O/w1cDnyilFU=
';


$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
