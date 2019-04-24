<?php // callback.php
require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');
$access_token = '0HUfhEpwxhQlLcnvwXZilBCEOq3BJU2ZrodN/ltYlm+dCVNo7splyhLElpeIJwwPLyb+WaU7rCU1JQj1EH8Qi0zbiH3f500hFIli4iad1jxiyh2jqTHctdU0Fq4yYVG/XPsxQB5J1GfXpcSYpQFiVQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');

$arrayJson = json_decode($content, true);
$arrayHeader = array();
$arrayHeader[] = "Content-Type: application/json";
$arrayHeader[] = "Authorization: Bearer {$access_token}";
//รับข้อความจากผู้ใช้
$message = $arrayJson['events'][0]['message']['text'];


// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data
if (!is_null($events['events'])) {
// Loop through each event
foreach ($events['events'] as $event) {
// Reply only when message sent is in 'text' format
if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
	
if(trim($message)=="id"){
// Get text sent
$text = "http://psis.in.th/reg_linebot.php?idpush=".$event['source']['userId']." ";
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
if(trim($message)=="sid"){
	// Get text sent
	$text = "http://psis.in.th/reg_linebot2.php?idpush=".$event['source']['userId']." ";
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
if(trim($message)=="รายงานการสแกนบัตร"){
	// Get replyToken
	$replyToken = $event['replyToken'];
	// Build message to reply back
	$messages = [
	'type' => 'text',
	'text' => "http://www.psis.in.th/report_print/std_ma.php?idpush=".$event['source']['userId']."",
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
if(trim($message)=="ตรวจพฤติกรรมนักเรียน"){
	// Get replyToken
	$replyToken = $event['replyToken'];
	// Build message to reply back
	$messages = [
	'type' => 'text',
	'text' => "http://www.psis.in.th/report_print/std_detail.php?idpush=".$event['source']['userId']."",
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
if(trim($message)=="สอบถามผลการเรียน"){
	// Get replyToken
	$replyToken = $event['replyToken'];
	// Build message to reply back
	$messages = [
	'type' => 'text',
	'text' => "http://www.psis.in.th/report_print/std_Ttest.php?idpush=".$event['source']['userId']."",
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
if(trim($message)=="เบอร์โทร์ติดต่อ"){
	// Get replyToken
	$replyToken = $event['replyToken'];
	// Build message to reply back
	$messages = [
	'type' => 'text',
	'text' => "เบอร์โทรศัพท์ภายใน 044-081071 ติดต่อช่วงเวลาทำการนะครับ",
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
if(trim($message)=="เว็บไซต์โรงเรียน"){
	// Get replyToken
	$replyToken = $event['replyToken'];
	// Build message to reply back
	$messages = [
	'type' => 'text',
	'text' => "คลิ๊กเพื่อเข้าเว็บไซต์โรงเรียน  http://www.nyp.ac.th",
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
if(trim($message)=="ติดต่อผู้ดูแลระบบ"){
	// Get replyToken
	$replyToken = $event['replyToken'];
	// Build message to reply back
	$messages = [
	'type' => 'text',
	'text' => "คลิ๊กเพื่อเข้าเว็บไซต์โรงเรียน  http://www.nyp.ac.th",
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
}

