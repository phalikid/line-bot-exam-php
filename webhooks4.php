<?php // callback.php
require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = 'QLuaf1cppEpLrGRBJbbB+81EfIYaySHBfnIEdNNu1m8ligmXOKDBj8L9cD9H8D0w7qpNICA/uF/kptDtp9LMFgmYb5Tw3hnF53t6IEh1IS3sCtA54lNQkUtq0VKwI6W9yi2e4Vg3ARDLKj8B62EKBwdB04t89/1O/w1cDnyilFU=';
// Get POST body content
$content = file_get_contents('php://input');
$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$access_token}";
//รับข้อความจากผู้ใช้
$message = $arrayJson['events'][0]['message']['text'];
if($message=="id"){
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
// Loop through each event
foreach ($events['events'] as $event) {
// Reply only when message sent is in 'text' format
if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
// Get text sent
$text = "http://psis.in.th/reg_linebot.php?idpush=".$event['source']['userId']."&idaccess=".$access_token." ";
// Get replyToken
$replyToken = $event['replyToken'];
// Build message to reply back
$messages = [
'type' => 'text',
'text' => $text
];
// Make a POST Request to Messaging API to reply to sender
$url = 'https://api.line.me/v2/bot/message/reply';
$data = [
'replyToken' => $replyToken,
'messages' => [$messages],
];
$post = json_encode($data);
$headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result. "\r\n";
}
}
}
echo "OK";
}
